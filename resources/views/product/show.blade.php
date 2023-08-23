@include('product.layout')
@extends('admin.layout.index')
@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Toys</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $product->name }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>
               
                @foreach ($product->image as $image)
                    <img src="{{ asset('image/product/' . $image->image) }}" alt="" style="margin: 15px" height=150
                        width=250>
                @endforeach




            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Publisher:</strong>

                {{ $product->publisher->name }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Category:</strong>

                <ul class="inline-list">
                    @foreach ($product->category as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Price:</strong>

                {{ $product->price }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $product->description }}

            </div>

        </div>

    </div>
@endsection
