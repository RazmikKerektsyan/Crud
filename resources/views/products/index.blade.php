
<?php
$i = 0;
?>
@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" style="background: #3e681ef0;"> Create
                    New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" ;>
        <tr style=" font-weight: bold;font-size:x-large">
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->title}}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->price}}</td>
                <td><img src="/storage/{{ $product->image }}" width="100px"></td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" style="background: #3e681ef0;"
                           href="{{ route('products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" style="background: #3e681ef0;"
                           href="{{ route('products.edit',['product'=>$product->id]) }}">Edit</a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
