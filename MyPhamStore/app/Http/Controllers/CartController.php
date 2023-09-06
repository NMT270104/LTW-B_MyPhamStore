<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index(Request $request)
    {
    $total = 0;
    $productsInCart = [];
    $productsInSession = $request->session()->get("products");
    if ($productsInSession) {
    $productsInCart = Product::findMany(array_keys($productsInSession));
    $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
    }
    $viewData = [];
    $viewData["title"] = "Cart - Mỹ Phẩm Store";
    $viewData["subtitle"] = "Shopping Cart";
    $viewData["total"] = $total;
    $viewData["products"] = $productsInCart;
    return view('cart.index')->with("viewData", $viewData);
    }

    public function add(Request $request, $id){
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);
        return redirect()->route('cart.index');
    }
    public function delete(Request $request){
        $request->session()->forget('products');
        return back();
    }
    
    public function removeProduct($id)
    {
        // Tìm sản phẩm trong giỏ hàng
        $product = Product::find($id);
    
        if (!$product) {
            // Xử lý trường hợp sản phẩm không tồn tại
            return redirect()->route('cart.index')->with('error', 'Sản phẩm không tồn tại trong giỏ hàng.');
        }
    
        // Lấy danh sách sản phẩm trong session
        $productsInSession = session()->get("products");
    
        // Kiểm tra xem sản phẩm có tồn tại trong session không
        if (isset($productsInSession[$id])) {
            // Xoá sản phẩm khỏi session
            unset($productsInSession[$id]);
            session()->put('products', $productsInSession);
        }
    
        // Redirect về trang giỏ hàng hoặc trang khác tùy ý
        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được xoá khỏi giỏ hàng.');
    }
    

    
    public function purchase(Request $request) {
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
        $userId = Auth::user()->getId();
        $order = new Order();
        $order->setUserId($userId);
        $order->setTotal(0);
        $order->save();
        $total = 0;
        $productsInCart = Product::findMany(array_keys($productsInSession));
        foreach ($productsInCart as $product) {
        $quantity = $productsInSession[$product->getId()];
        $item = new Item();
        $item->setQuantity($quantity);
        $item->setPrice($product->getPrice());
        $item->setProductId($product->getId());
        $item->setOrderId($order->getId());
        $item->save();
        $total = $total + ($product->getPrice() * $quantity);
        }
        $order->setTotal($total);
        $order->save();
        $newBalance = Auth::user()->getBalance() - $total;
        Auth::user()->setBalance($newBalance);
        Auth::user()->save();
        $request->session()->forget('products');
        $viewData = [];
        $viewData["title"] = "Purchase - Online Store";
        $viewData["subtitle"] = "Purchase Status";
        $viewData["order"] = $order;
        return view('cart.purchase')->with("viewData", $viewData);
        } else {
            return redirect()->route('cart.index');
        }
    }
        
}