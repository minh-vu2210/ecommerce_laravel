<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class ProductsController extends Controller
{
    public function index(){

        $products = Product::all();
        // dd($products);
        return  view('home',[
            'products' => $products,
        ]);
    }


    public function detail($id)
    {
        $product = Product::find($id);
        return view('product_detail',[
            'product'=> $product
        ]);
    }

    public function addToCart( Request $request){
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart ->user_id = $request->session()->get('user')['id'];
            $cart -> product_id = $request ->product_id;
            $cart->save();
            // dd($request->session()->get('user')['id']);
            // dd($request->input('product_id'));
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    public static function listCartItems()
    {   
        $userID = Session::get('user')['id'];
        dd(Session::get('user')['id']);
        return Cart::where('user_id',$userID);
    }


    public static function getTotalCartItems()
    {
        $userID = Session::get('user')['id'];
        $total = Cart::where('user_id',$userID)->count();
        return $total;
    }


    public function listItemInCart()
    {
        $userID = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id','=',$userID)
        ->select('products.*','carts.id as cart_id')
        ->get();
        
        $totalPrice = 0;
        foreach ($products as $product){
            $totalPrice += $product->price;
        }
        
        
        return view('cart_list',[
            'products'=> $products,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function removeItemFromCart(Request $request)
    {      
        // dd($request->product_cart_id);
       $aa=  Cart::find(intval($request->product_cart_id))->delete();
    
        return redirect('/cart');
    }

    public function checkout()
    {
        $userID = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id','=',$userID)
        ->select('products.*','carts.id as cart_id')
        ->get();
        
        $totalPrice = 0;
        foreach ($products as $product){
            $totalPrice += $product->price;
        }
        return view('checkout',[
            'products'=> $products,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function placeOrder(Request $request)
    {
        $userID = Session::get('user')['id'];
        $allCartItem = Cart::where('user_id','=',$userID)->get();
        
        foreach ($allCartItem as $item)
        {
            $order = new Order;
            $order->user_id = $userID;
            $order->product_id = $item->product_id;
            $order->status = 'pending';
            $order->payment_method = $request->paymentMethod;
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id','=',$userID)->delete();

        }
        return redirect('/');
    }

    public function allOrders()
    {
        $userID = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id','=',$userID)
        // ->select('orders.*')
        ->get();

        



        // dd($orders);
        return view('all_orders',[
            'orders' => $orders
        ]);
      
        
    }
    
}
