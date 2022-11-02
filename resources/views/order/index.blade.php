<?php
$i = 0;
?>
@extends('order.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Orders CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}" style="background: #3e681ef0;"> Create
                    New Order</a>
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
            <th>Qty</th>
            <th>Order_data_time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $order->qtr}}</td>
                <td>{{ $order->order_data_time}}</td>
                <td>
                    <form action="{{ route('orders.destroy',$order->id) }}" method="POST">

                        <a class="btn btn-info" style="background: #3e681ef0;"
                           href="{{ route('orders.show',$order->id) }}">Show</a>

                        <a class="btn btn-primary" style="background: #3e681ef0;"
                           href="{{ route('orders.edit',['order'=>$order->id]) }}">Edit</a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
