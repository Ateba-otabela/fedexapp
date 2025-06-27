<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\cart;
use App\Models\Order;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class shoppingController extends Controller
{
    public function shopping(){
        return view('shopping');
    }

    public function post_product(Request $request)
    {     
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'product_image' => 'required|max:512000', //20MB
        ]);

        if ($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $folder = 'products';

            $name = date('d-m-y-H-m-i');

            $ext = $request->file('product_image')->getClientOriginalExtension();

            if(!Storage::disk('public')->exists($folder)){
                Storage::disk('public')->makeDirectory($folder);
            }

            $path = $name.Str::random(15).'.'.$ext;

            $file->storeAs($folder, $path, 'public');

            $type = str_contains($file->getMimeType(), 'video') ? 'video' : 'image';

            Post::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'category' => $validatedData['category'],
                'file' => 'products/'. $path,
                'type' => $type
            ]);
        }
      
        // $file = $request->file('product_image');
        // $filePath = $request->file('product_image')->store('products');

       
        
    
        return redirect('/')->with('success', 'Product posted successfully!');
    }

    public function add_cart($id, Request $request){
       $user = User::all();
       $product = post::findorfail($id);
       if (Auth::user()){
        $cart = new cart;
        $cart->name = Auth::user()->name;
        $cart->email = Auth::user()->email;
        $cart->title = $product->title;
        $cart->category = $product->category;
        $cart->description = $product->description;
        $cart->price = $product->price;
        $cart->file = $product->file;
        $cart->user_id = Auth::user()->id;
        $cart->type = $product->type;
        $cart->quantity = request('quantity');
        $cart->total = $product->price*$cart->quantity;
    
        $cart->save();
      return redirect()->back()->with('orderPlaced', ' 1 Item added to cart!');
    }else{
        return redirect()->route('login');
    }

    }

    public function delete_cart($id){
        
        $cart = cart::findorfail($id);
        $cart->delete();
        return redirect()->back()->with('success', 'Cart item deleted successfully!');
    }
    
   public function product(){
    $products = post::all();
   
    return view('product',compact('products'));
   }

   public function search(Request $request){
    
     $search = $request->search;
     //dd($search);
     $products = post::where('title', 'LIKE', '%'.$search.'%')
     ->orwhere('category', 'LIKE', '%'.$search.'%')
     ->orwhere('price', 'LIKE', '%'.$search.'%')
     ->get();

     return view('product',compact('products'));
   }

   public function delete_all(){
  
        $user_id = Auth::id();
        $cartItem = cart::where('user_id', $user_id)->delete();
       
        return redirect()->back()->with('success', 'Cart cleared Successfully!');
  

   }

   // Returns the shipping view
    public function shipping(){
        return view('products.shipping');
    }

    public function placeOrder() {
     
        $id = Auth::user()->id;

        // Make sure you're querying the cart by user_id, not cart id.
        $product = Cart::where('user_id', $id)->first();

        if (!$product) {
            return redirect()->back()->withErrors(['Cart is empty or product not found.']);
        }

        $order = Order::create([
           
            'payment_date' => now(),
            'product' => $product->title,
            'quantity' => $product->quantity,
            'price' => $product->price,
            'total' => $product->total
        ]);
        

        $user = Auth::user();
        Mail::to($user->email)->send(new OrderConfirmationMail($user));
 
       return redirect()->back()->with('orderPlaced', 'Order placed successfully.');
    }
    
   
    
}
 
