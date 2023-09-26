@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<div class="container-fluid pt-4 p-4 ">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-5" style="height: 50%">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4 text-center" style="color: #F28123">Create Product</h6>
                @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                    @csrf <!– bảo vệ sự tấn công CSRF-->
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Name Product:</label>
                        <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Price:</label>
                        <input name="price" value="{{ old('price') }}" type="number" min="0" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Description</label>
                        <textarea class="form-control" name="description" rows="3">{{ old('description') }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Image:</label>
                        <input class="form-control form-control-sm " id="formFileSm" type="file" name="image">
                    </div>
                    {{-- ttct --}}
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Type Product:</label>
                        <input name="name" value="{{ old('type') }}" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Tradesmark Product:</label>
                        <input name="name" value="{{ old('tradesmark') }}" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Mass Product:</label>
                        <input name="name" value="{{ old('mass') }}" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Volume Product:</label>
                        <input name="name" value="{{ old('volume') }}" type="text" class="form-control">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button type="submit" class="btn" style="background-color: #F28123">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-7">
            <div class="col-sm-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4 text-center" style="color: #F28123">List Products</h6>
                    <table class="table table-hover text-white table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($viewData['products'] as $product)
                            <tr>
                            <td>{{ $product->getId()}}</td>
                            <td>{{ $product->getName()}}</td>
                            <td>
                                <a class="btn btn-primary rounded-circle"
                                href="{{route('admin.product.edit', ['id'=> $product->getId()])}}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.product.delete', $product->getId()) }}"
                                    method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-danger rounded-circle">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody> 
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection