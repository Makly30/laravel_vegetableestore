@extends('layout.master')
@section('title')
Vegetable
@endsection
@section('content')
<h3 class="text-center pt-4">Vegetable Board:</h3>
@if($veget)
<div class="row">
 @foreach($veget as $v)
 @if($v->timeto> Carbon\Carbon::now())   
 <div class="card m-2" style="width: 18rem;">
  <img src="{{URL::asset('storage/product_image/'.$v->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Product Name: {{$v->product_name}}</p>
    <p class="card-text">weight: {{$v->measure}} kg, price: {{$v->product_price}} baht</p>
    @if(!$v->owner(auth()->user()))
    <button class="btn btn-success"><a href="{{route('order',$v->id)}}" class="text-light">Order</a></button>
    @endif
    
  </div>
</div>
@endif
@endforeach   
</div>



@endif
@endsection