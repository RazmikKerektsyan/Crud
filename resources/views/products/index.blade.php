
<?php
$i = 0;
?>
@extends('products.layout')

@section('content')

    <div class="">
        <div class="col-lg-36 margin-tb">
            <div class="pull-center">
                <h2>
                    <center>Products CRUD</center>
                </h2>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('products.create') }}" style="background: #3e681ef0;"> Create
                    New Product</a>
            </div>
        </div>
    </div>
    <div class="">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('orders.index') }}" style="background: #3e681ef0;">View
                    Orders</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr style=" font-weight: bold;font-size:x-large; background: sandybrown">
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr style="background: sandybrown">
                <td>{{ ++$i }}</td>
                <td>{{ $product->title}}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->price}}</td>
                <td><img src="/storage/{{ $product->image }}" width="150px"></td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" style="background: #3e659ef0;"
                           href="{{ route('products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" style="background: #1e146ef0;"
                           href="{{ route('products.edit',['product'=>$product->id]) }}">Edit</a>

                        <a class="btn btn-primary" style="background: #3e999ef9;"
                           href="{{ route('products.order',['product_id'=>$product->id]) }}">Order</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
