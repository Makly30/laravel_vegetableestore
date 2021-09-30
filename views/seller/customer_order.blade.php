@extends('layout.master')
@section('title')
CustomerOrder
@endsection
@section('content')
@if($myorder)

<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Total Price (BAHT)</th>
      <th scope="col">Order Date</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
 
  <tbody>
    @foreach($myorder as $m)   
    <tr>
      <th scope="row">{{$m->id}}</th>
      <td>{{$m->product->product_name}}</td>
      <td>{{$m->usercustomer->name}}</td>
      @if($m->deliver_choice_id==1)
      <td>{{(($m->product->product_price)*( $m->orp_amount))/(
          $m->product->measure)+($m->product->deliver_in)}}</td>
        @elseif($m->deliver_choice_id==2)
        <td>{{(($m->product->product_price)*( $m->orp_amount))/(
          $m->product->measure)+($m->product->deliver_out)}}</td>
        @endif
      <td>{{$m->created_at}}</td>
      <td>
        @if($m->tracking!=null)
        @if($m->trackingcode->process_status!=3)
         
        @else
        <button class="btn btn-success" >Delivered</butoon>
        @endif
        @else
        <button class="btn btn-warning"><a class="text-light" href="{{route('editveget',$m->id)}}">Edit</a></button>
        @endif
        </td>
        <td>
    <button class="btn btn-info">
      <a class="text-light" href="{{route('customerorderdetail',$m->id)}}">
        Detail
        </a>
        </button>
    </td>
    </tr>
      @endforeach
  </tbody>

</table>
</div>

@endif
@endsection