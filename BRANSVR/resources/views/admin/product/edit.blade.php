@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="container-fluid pt-4 p-4 ">
    <div class="row g-4 justify-content-center">
        <div class="col-auto" style="width: 50%;">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4 text-center" style="color: #F28123">Edit Product</h6>
                @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <form method="POST" action="{{ route('admin.product.update',['id' => $viewData['products']->getId()]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Name Product:</label>
                        <input name="name" value="{{ $viewData['products']->getName() }}" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Price:</label>
                        <input name="price" value="{{ $viewData['products']->getPrice() }}" type="number" min="0" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Description</label>
                        <textarea class="form-control" name="description" rows="3">{{ $viewData['products']->getDescription() }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Image:</label>
                        <input class="form-control form-control-sm " id="formFileSm" type="file" name="image">
                    </div>
                    {{-- ttct --}}
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Type Product:</label>
                        <input name="type" value="{{ $viewData['products']->getType()}}" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Trade smark Product:</label>
                        <input name="tradesmark" value="{{ $viewData['products']->getTradesmark() }}" type="text" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Mass Product:</label>
                        <input name="mass" value="{{ $viewData['products']->getMass() }}" type="number" min="0"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #F28123">Volume Product:</label>
                        <input name="volume" value="{{ $viewData['products']->getVolume() }}" type="number" min="0"  class="form-control">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button type="submit" class="btn" style="background-color: #F28123">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 