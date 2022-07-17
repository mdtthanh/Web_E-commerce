<?php

namespace App\Http\Controllers;

use App\cart;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\thumbnails_detail;
use App\Models\category;
use App\Models\order;
use App\Models\size;
use App\Models\orderdetail;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller
{
    public function getShop($id = 1)
    {
        $page = $id - 1;
        $product = product::offset($page*9)->limit(9)->get(); // Mỗi trang lấy 9 sản phẩm
        $count = product::get()->count();
        $count = ceil($count/9);
        $categories = category::get();
        return view('shop', [
            'id' => $id,
            'product' => $product,
            'count' => $count,
            'categories' => $categories,
        ]);
    }

    public function getShopCart()
    {
        return view('shop-cart');
    }

    public function getProductDetail($id)
    {
        try {
            $product = product::where("id",$id)->first();
            if(!empty($product)){
                return view('product-details', ['product' => $product]);
            }else {
                return "Khong co san pham nay";
            }
        } catch (\Throwable $th) {
            return "Cơ sở dữ liệu trống";
        }


    }

    public function getCheckOut()
    {
        return view('checkout');
    }

    public function getAddCart(Request $req, $id){
        $product = product::where('id', $id)->first();
        if($product != null){
            if(Session('cart') != null){
                $oldCart = Session('cart');
            }else{
                $oldCart = null;
            }

            $newCart = new cart($oldCart);
            $newCart->addCart($product, $id);

            $req->session()->put('cart', $newCart);
        }
        return redirect(route('shop', ['id'=>1]));
    }

    public function getDeleteItem(Request $req, $id){
        if(Session('cart') != null){
            $oldCart = Session('cart');
        }else{
            $oldCart = null;
        }
        $newCart = new cart($oldCart);
        $newCart->deleteItem($id);
        if(count($newCart->products) > 0){
            $req->session()->put('cart', $newCart);
        }else{
            $req->session()->forget('cart');
        }
        return redirect(route('shopcart'));
    }

    public function postSaveAllItem(Request $req){
        foreach($req->data as $item){
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new cart($oldCart);
            $newCart->updateItem($item['key'], $item['value']);
            $req->session()->put('cart', $newCart);
        }

    }

    public function postOrder(Request $req){
        DB::transaction(function() use($req){
            $oldCart = Session('cart') ? Session('cart') : null;
            $cart = new cart($oldCart);

            $order = new order;
            $order->fullname = $req->input('fullname');
            $order->phone = $req->input('phone');
            $order->email = $req->input('email');
            $order->note = $req->input('note');
            $order->address = $req->input('address');
            $order->status = 0;
            $order->order_time = now();

            foreach ($cart->products as $item) {
                if($item['quantity'] > $item['productInfo']->quantity){
                    exit('Sản phẩm '. $item['productInfo']->product_name . ' hết hàng');
                }
                $product = product::find($item['productInfo']->id)->first();
                $product->quantity -= $item['quantity'];
                $product->sale_numbers += $item['quantity'];
                $product->save();

            }
            $order->save();
            foreach ($cart->products as $item){
                $order->orderdetail()->create([
                    'id' => rand(0, 10000),
                    'product_id' => $item['productInfo']->id,
                    'price' => $item['productInfo']->price,
                    'size' => 'XL',
                    'total_money' => $item['price']
                ]);
            }
        });
        $req->session()->forget('cart');

        return redirect(route('shop', ['id' => 1]));
    }

    public function getShopByCategory($id, $page = 1){
        $page = $page - 1;
        $product = product::offset($page)->where('category_id', $id)->limit(9)->get(); // Mỗi trang lấy 9 sản phẩm
        $count = product::get()->count();
        $count = ceil($count/9);
        $categories = category::get();
        return view('shop-category', [
            'id' => $id,
            'product' => $product,
            'count' => $count,
            'categories' => $categories,
        ]);
    }
}
