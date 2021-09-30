<?php

namespace App\Http\Controllers;

use App\Models\DeliverChoice;
use App\Models\OrderV;
use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class OrderVController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Product $product){
        $products=Product::where('id',$product->id)->get();
        $dc=DeliverChoice::all();
        return view('vegetable.order',[
            'products'=>$products,
            'dc'=>$dc,
        ]);
    }
    public function store(Request $request,Product $p,User $cus){
        $this->validate($request,['orp_amount'=>'required',
        'orp_dc'=>'required',]);
        $order=new OrderV();
        $order->orp_amount=$request->input('orp_amount');
        $order->deliver_choice_id=$request->input('orp_dc');
        $order->customer_id=$cus->id;
        $order->product_id=$p->id;
        $order->save();
        return redirect()->route('vegetable');
    }
    public function show(User $id){
        $myorder=OrderV::where('customer_id',$id->id)->get();
        return view('customer.myorderv',[
            'myorder'=>$myorder,
        ]);
    }
    public function showowner(User $id,Request $request){
        $product=Product::where('user_id',$id->id)->get('id');
        foreach($product as $p){
            $myorder=OrderV::where('product_id',$p->id)->get();
        }
        return view('seller.customer_order',compact('myorder'));
    }
    public function showdetail(User $id,OrderV $orp){
        $myorder=OrderV::where('id',$orp->id)->get();
        return view('customer.myorderdetail',[
            'myorder'=>$myorder,
        ]);
    }
    public function showdetailsell(OrderV $orp){
        $myorder=OrderV::where('id',$orp->id)->get();
        return view('seller.detailorder',compact('myorder'));
    }
    public function editorder(OrderV $orp){
        $order=OrderV::where('id',$orp->id)->get();
        return view('seller.edit',compact('order'));
    }
    public function editorderpost(OrderV $orp,Request $request){
        $order=OrderV::where('id',$orp->id)->update(['tracking'=>$request->input('tracking')]);
        return redirect()->route('customer.order',auth()->user()->id);
        
    }
}
