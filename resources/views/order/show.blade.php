@extends('order.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Order</h2>
            </div>
        </div>
    </div>

    <div class="row" style="width:1000px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qty:</strong>
                {{ $order->qtr }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Order_data_time:</strong>
                {{ $order->order_data_time}}
            </div>
        </div>
        <div class="pull-right" >
            <a class="btn btn-primary" href="{{ route('orders.index') }}" style="width: 100px;top: 130px;background: #3e681ef0;"> Back</a>
        </div>
    </div>
@endsection
