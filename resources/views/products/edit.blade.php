@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Product Data</div>
                    <div class="card-body">
                        <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Product name</label>
                                <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                                <label class="form-label">ID Brand</label>
                                <select class="form-control" name="id_brand">
                                    @foreach ($brand as $data)
                                        <option value="{{$data->id}}" {{$data->id == $product->id_brand ? 'selected' : ''}}>{{$data->name_brand}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-control">Cover</label>
                                <img src="{{ asset('images/product/' . $product->cover)}}" width="100">
                                <input type="file" class="form-control" name="cover">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ url('product') }}" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
