@include('product.layout')
@extends('admin.layout.index')
@section('content')
    <h2 style="align-content: center">
        @if (session('user'))
            Hello <b>{{ session('user')->name }}</b> 
        @endif,Welcome to Page Manage
    </h2>
    <img src="https://www.giaonhan247.com/wp-content/uploads/2021/07/review-mo-hinh-demon-slayer.jpg"
        alt="Home Admin" width="1200px">
@endsection
