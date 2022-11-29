@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Order</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('orders.store', ['product_id'=>$product_id] )}}" method="POST">
        @csrf

        <div class="form-group" style="width:1100px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="width: 250px;margin: 7px;border: 4px; padding: 10px;">
                <div class="form-group">
                    <strong>Qty:</strong>
                    <input type="number" name="qtr" style="height:50px;width:230px" class="form-control"
                           placeholder="Qty">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="width: 150px;margin: 7px;border: 4px; padding: 10px;">
                <div class="form-group">
                    <strong>Order_data_time:</strong>
                    <input type="datetime-local" class="form-control" style="height:50px;width:100px"
                           name="order_data_time"
                           placeholder="Order_data_time">
                </div>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"
                   style="width: 100px;top: 130px;background: #3e681ef0;"> Back</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="width: 100px;">
                <button type="submit" class="btn btn-primary" style="background: #3e681ef0;">Create</button>
            </div>
        </div>

    </form>
@endsection

