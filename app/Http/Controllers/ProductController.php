<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $product=[
            'type' => 'dress',
            'price'=> '100',
            'seller'=>'nice'
        ];
       # listproduct=[
        #    ['type' => 'dress','price'=> '100','seller'=>'nice'],
        #    ['type' => 'dress2','price'=> '200','seller'=>'nice2'],
        #    ['type' => 'dress2','price'=> '200','seller'=>'nice2']
       # ];
       $listproduct=Product::all();
       #$listproduct=Product::orderby('price','desc')->get();
       #$listproduct=Product::where('seller','apple')->get();
        #return view('shop',$product);
        return view('products.index',[
            'listproduct'=>$listproduct,
            'name'=> request('name'),
            'age'=>request('age')
        ]);
    }
    public function show($id){
        $product=Product::findorfail($id);
        return view('products.show',[
            'product'=>$product,
            
        ]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(){
        $product=new Product;
        $product->name=request('name');
        $product->base=request('base');
        $product->price=request('price');
        $product->seller=request('seller');
        $product->toppings=request('toppings');
        error_log($product);
        $product->save();
        
        return redirect('/shop')->with('mssg','thanks for your product');
       
    }
    public function destroy($id){
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect('/shop');
    }
}
