@extends('layout.master')
@section('title')
Own Service
@endsection
@section('content')
<button class="btn btn-primary"><a href="{{route('adddelivery')}}" class="text-light">Add Service</a></button>
<h3 class="text-center pt-4">Deliver Service Board:</h3>
@if($veget)
<div class="row">
 @foreach($veget as $v)
 @if($v->timeto>Carbon\Carbon::now())   
 <div class="card m-2" style="width: 18rem;">
  <img src="{{URL::asset('storage/product_image/'.$v->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">{{$v->province->PROVINCE_NAME}}-{{$v->provinces->PROVINCE_NAME}}</p>
    <p class="card-text">{{$v->timefrom}}-{{$v->timeto}}</p>
    <p class="card-text"> price: {{$v->price}} baht</p>
    @if(auth()->user()->status=='seller')
    <button class="btn btn-success"><a href="{{route('adddeliver',$v->id)}}" class="text-light">Order</a></button>
    @endif
  </div>
</div>
@endif
@endforeach   
</div>
@endif
@endsection