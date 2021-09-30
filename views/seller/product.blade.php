@extends('layout.master')
@section('title')
Own Produt
@endsection
@section('content')
<button class="btn btn-primary"><a href="{{route('addproduct')}}" class="text-light">Add Product</a></button>
<h3 class="text-center ">My Product</h3>
@if($veget)
<div class="row">
@foreach($veget as $v)
@if($v->owner(auth()->user()))
<div class="card" style="width: 18rem;">
  <img src="{{URL::asset('storage/product_image/'.$v->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Product Name: {{$v->product_name}}</p>
    <p class="card-text">weight: {{$v->measure}} kg, price: {{$v->product_price}} baht</p>
    @if($v->timeto> Carbon\Carbon::now())
    <button>Available</button>
    @else
    <button>Finished</button>
    @endif
  </div>
 
</div>
@endif
@endforeach
</div>
@endif
@endsection