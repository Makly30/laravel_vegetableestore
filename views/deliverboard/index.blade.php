@extends('layout.master')
@section('title')
OrderDeliver
@endsection
@section('content')
@if($deliver_service)
@foreach($deliver_service as $d)
<div class="container">
    <h3 class="text-center pt-3">
        Order Deliver Service: 
    </h3>
    <form action="{{route('adddeliver.add',[
        'deliver'=>$d->drive->id,'seller'=>auth()->user()->id,'deliver_service'=>$d->id])}}" method="post">
        @csrf
        <div class="form-group">
            <label class="label label-control"for='seller'>
                Customer Name: 
            </label>
            <select class="form-control" id="seller" name="seller">
                <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
            </select>
        </div>
        <div class="form-group">
            <label class="label label-control" for="deliver_service">
                Deliver Service:
            </label>
            <select class="form-control"id="deliver_service" name="deliver_service">
                <option value="{{$d->id}}">{{$d->province->PROVINCE_NAME}} to {{$d->provinces->PROVINCE_NAME}}</option>
            </select>
        </div>
        <div class="form-group">
            <label class="lable label-control">
                Deliver Name:
            </label>
            <select class="form-control" id="deliver" name="deliver">
                <option value="{{$d->drive->id}}">{{$d->drive->name}}</option>
            </select>
        </div>
        <div class="form-group">
            <label class="label label-control" for="orp">
                order vegetable product:
            </label>
            <select class="form-control" name="orp" id="orp">
              
               
                @if($orp)
                @foreach($orp as $o)
                
               

                @if($o->product->owner(auth()->user()))
                <option value="{{$o->id}}">
                id:{{$o->id}},   name: {{$o->usercustomer->name}}, buy:{{$o->product->product_name}}, amount:{{$o->orp_amount}} KG, address:{{$o->usercustomer->address}}, date:{{$o->created_at}}
                </option>
                @endif

               

                @endforeach
                @endif

                
            </select>
        </div>
        <input type="submit" value="order" class="btn btn-primary">
    </form>
</div>

@endforeach
@endif
@endsection