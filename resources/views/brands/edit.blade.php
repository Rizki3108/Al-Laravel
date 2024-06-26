@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Brand Data</div>
                    <div class="card-body">
                        <form action="{{route('brand.update', $brand->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Brand name</label>
                                <input type="text" class="form-control" name="name_brand" value="{{ $brand->name_brand }}">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ url('brand') }}" class="btn btn-danger">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
