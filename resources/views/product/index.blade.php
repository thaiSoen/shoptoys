@include('product.layout')
@extends('admin.layout.index')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Toys Management</h2>
            </div>
            <br><br>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Add New Toys</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" ,border="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Publisher</th>
            <th>Image</th>
            <th>Price</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $key => $product)
        
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->publisher->name }}</td>

                <td><img class="images-detail" src="{{ asset('image/product/' . $product->image[0]->image) }}" alt=""
                        width=250>
                </td>

                <td>{{ $product->price }} $</td>

                <td>{{ $product->description }}</td>

                <td>

                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('product.show', $product->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">Edit</a>
                        <a class="btn btn-primary" href="{{ route('product.destroy', $product->id) }}">Delete</a>
                    </form>
                </td>
            </tr>
        @endforeach
        
    </table>
@endsection
