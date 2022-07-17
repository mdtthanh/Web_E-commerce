<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\Http\Requets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Helper\Table;

session_start();

class Admincontroller extends Controller
{
    function index(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        if ($result = DB::Table('users')->where('email', $admin_email)->where('role_id', 1)->where('password', $admin_password)->first()){
            return view('admin_layout');
        }
        else{
            Session::put('message', 'Tài khoản hoặc mật khẩu không chính xác!');
            return view('login');
        }
//            $result = DB::statement("SELECT * FROM `users` WHERE `email` = $admin_email");

//        echo '<pre>';
//        print_r($result) ;
//        echo '</pre>';

    }
    function show_dashboard() {
        return view('admin_layout');
    }



    //--------------------------------category--------------------------------------
    //------------------------------------------------------------------------------
    # thêm danh mục
    function admin_createCategory(){
        return view('admin_create-category');

    }
    # hiển thị danh mục
    function admin_category(){
        DB::statement("SET @num :=0");
        DB::statement("UPDATE category SET id = @num := @num+1");
        DB::statement("ALTER TABLE category AUTO_INCREMENT = 1");
        $admin_category = DB::table('category')->get();
        return view('admin_category', ['admin_category' => $admin_category]);
    }

    # thêm vào database
    function save_category(Request $request){
        $data = array();
        $data['category_name'] = $request->category_name;
        DB::statement("ALTER TABLE category AUTO_INCREMENT = 1");
        DB::Table('category')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công!');
        return Redirect::to('admin/admin_create-category');

    }

    #edit category
    function admin_edit_category($category_id){
        $edit_category = DB::table('category')->where('id', $category_id)->get();

        return view('admin_edit-category', ['edit_category' => $edit_category]);
    }

    #update category
    function admin_update_category(Request $request, $category_id){
        $data = array();
        $data['category_name'] = $request->category_name;
        DB::Table('category')->where('id', $category_id)->update($data);
        Session::put('message', 'Cập nhật danh mục sản phẩm thành công!');
        return Redirect::to('admin/admin_category');
    }

    function admin_delete_category($category_id){
        DB::Table('category')->where('id', $category_id)->delete();
        DB::statement("SET @num :=0");
        DB::statement("UPDATE category SET id = @num := @num+1");
        DB::statement("ALTER TABLE category AUTO_INCREMENT = 1");
//        DB::statement("SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=1");
        Session::put('message', 'Xóa danh mục sản phẩm thành công!');
        return Redirect::to('admin/admin_category');
    }
    //------------------------------------------------------------------------------
    //------------------------------------------------------------------------------



    //-------------------------------------Product-----------------------------------------
    //-------------------------------------------------------------------------------------
    # thêm sản phẩm
    function admin_create_product(){
        $admin_category = DB::table('category')->get();
        return view('admin_create-product', ['admin_category' => $admin_category]);
    }
    function admin_product(){
        $admin_product = DB::table('product')->get();
        DB::statement("SET @num :=0");
        DB::statement("UPDATE product SET id = @num := @num+1");
        DB::statement("ALTER TABLE product AUTO_INCREMENT = 1");
        return view('admin_product-list', ['admin_product' => $admin_product]);
    }

    #edit category
    function admin_edit_product($product_id){
        $edit_product = DB::table('product')->where('id', $product_id)->get();
        $admin_category = DB::table('category')->get();
        return view('admin_edit-product', ['edit_product' => $edit_product,
            'admin_category' => $admin_category
            ]);
    }

    #update category
    function admin_update_product(Request $request, $product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['brand'] = $request->brand;
//        $data['persons_type'] = '';
        $data['quantity'] = $request->quantity;
        $data['price'] = $request->price;
        $data['category_id'] = $request->category_id;
//        $data['sale_numbers'] = 1000;
        $data['description'] = $request->description;
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:s:i');
        $admin_category = DB::table('category')->get();
        DB::Table('product')->where('id', $product_id)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công!');
        return Redirect::to('admin/admin_product-list');
    }

    function save_product(Request $request){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['brand'] = $request->brand;
        $data['persons_type'] = '';
        $data['quantity'] = $request->quantity;
        $data['price'] = $request->price;
        $data['category_id'] = $request->category_id;
//        $data['sale_numbers'] = 1000;
        $data['description'] = $request->description;
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:s:i');
        DB::statement("ALTER TABLE product AUTO_INCREMENT = 1");
        DB::Table('product')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công!');
        return Redirect::to('admin/admin_product-list');

    }

    function admin_delete_product($product_id){
        DB::Table('product')->where('id', $product_id)->delete();
        DB::statement("SET @num :=0");
        DB::statement("UPDATE product SET id = @num := @num+1");
        DB::statement("ALTER TABLE product AUTO_INCREMENT = 1");
        //DB::statement('ALTER TABLE categories AUTO_INCREMENT = '.(count(User::all())+1).';');
        Session::put('message', 'Xóa sản phẩm thành công!');
        return Redirect::to('admin/admin_product-list');
    }


    //-------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------
    function admin_create_users(){
        $role = DB::table('role')->get();
        return view('admin_create-users', ['role' => $role]);
    }
    function admin_users(){
        DB::statement("SET @num :=0");
        DB::statement("UPDATE users SET id = @num := @num+1");
        DB::statement("ALTER TABLE users AUTO_INCREMENT = 1");
        $admin_users = DB::table('users')->join('role', 'users.role_id', '=', 'role.id')->get(['users.*', 'role.name']);
//        $admin_users = DB::table('users')->get();
        return view('admin_users', ['admin_users' => $admin_users]);
    }

    function save_users(Request $request){
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['role_id'] = $request->role_id;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
//        $data['sale_numbers'] = 1000;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:s:i');
//        DB::statement("ALTER TABLE users AUTO_INCREMENT = 1");
        DB::Table('users')->insert($data);
        Session::put('message', 'Thêm tài khoản thành công!');
        return Redirect::to('admin/admin_create-users');
//            return view('admin_create_users');
    }

    function admin_delete_users($user_id){
        DB::Table('users')->where('id', $user_id)->delete();
        DB::statement("SET @num :=0");
        DB::statement("UPDATE users SET id = @num := @num+1");
        DB::statement("ALTER TABLE users AUTO_INCREMENT = 1");
        //DB::statement('ALTER TABLE categories AUTO_INCREMENT = '.(count(User::all())+1).';');
        Session::put('message', 'Xóa tài khoản thành công!');
        return Redirect::to('admin/admin_users');
    }

    function admin_edit_users($user_id){
        $edit_user = DB::table('users')->where('id', $user_id)->get();
        $admin_role = DB::table('role')->get();
        return view('admin_edit-users', ['edit_user' => $edit_user,
            'admin_role' => $admin_role
        ]);
    }
    function admin_update_users(Request $request, $user_id){
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['role_id'] = $request->role_id;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
//        $data['sale_numbers'] = 1000;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:s:i');
//        DB::statement("ALTER TABLE users AUTO_INCREMENT = 1");
        DB::Table('users')->where('id', $user_id)->update($data);
        Session::put('message', 'Sửa tài khoản thành công!');
        return Redirect::to('admin/admin_users');
//            return view('admin_create_users');
    }

    //-------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------
    function admin_orders(){
//        $admin_orderdetail = DB::table('orders')->join('orderdetail', 'orders.id', '=', 'orderdetail.order_id')->sum('orderdetail.total_money')->get(['orders.*', 'orderdetail.*']);
         $order = DB::table('orders')->orderBy('order_time', 'desc')->get();
        //$orders = DB::table('orderdetail')->where()->sum('total_money')->groupBy('sum')->get();
        //$orders = DB::statement("SELECT SUM(total_money) FROM orders INNER JOIN orderdetail ON orders.`id` = orderdetail.`order_id` WHERE orders.`id` = $order_id");
        $admin_order = DB::select ('SELECT orders.id,SUM(total_money) as sum_money FROM orders INNER JOIN orderdetail ON orders.`id` = orderdetail.`order_id` GROUP BY `id`');

        DB::statement("SET @num :=0");
        DB::statement("UPDATE orders SET id = @num := @num+1");
        DB::statement("ALTER TABLE orders AUTO_INCREMENT = 1");

        return view('admin_orders', ['admin_order' => $admin_order,
            'order'=>$order
            ]);
    }

    function approved($order_id){
        DB::statement('SELECT * FROM orders ORDER BY order_time ASC');
        $update = DB::statement("UPDATE orders SET status = 1 WHERE id = $order_id");
        $order = DB::table('orders')->orderBy('order_time', 'desc')->get();
        $admin_order = DB::select ('SELECT orders.id,SUM(total_money) as sum_money FROM orders INNER JOIN orderdetail ON orders.`id` = orderdetail.`order_id` GROUP BY `id`');
//        $data['status'] = '1';
//        DB::Table('orders')->where('id', $order_id)->update($data);
        return view('admin_orders', ['admin_order' => $admin_order,
            'order'=>$order
        ]);

    }

    function cancel($order_id){
        DB::statement('SELECT * FROM orders ORDER BY order_time ASC');
        $update = DB::statement("UPDATE orders SET status = 2 WHERE id = $order_id");
        $order = DB::table('orders')->orderBy('order_time', 'desc')->get();
        $admin_order = DB::select ("SELECT orders.id,SUM(total_money) as sum_money FROM orders INNER JOIN orderdetail ON orders.`id` = orderdetail.`order_id` GROUP BY `id` ORDER BY order_time ASC");
//        $data['status'] = '1';
//        DB::Table('orders')->where('id', $order_id)->update($data);
        return view('admin_orders', ['admin_order' => $admin_order,
            'order'=>$order
        ]);

    }

    function  admin_order_detail($order_id){
        $admin_order = DB::table('orders')->where('id', $order_id)->first();
//        $admin_order = DB::select ('SELECT orders.id,SUM(total_money) as sum_money FROM orders INNER JOIN orderdetail
////        ON orders.`id` = orderdetail.`order_id` GROUP BY `id` ORDER BY order_time ASC');
        $order_detail = DB::select("SELECT orders.*, orderdetail.price, orderdetail.total_money, product.product_name, product.price
        FROM `orders` INNER JOIN orderdetail ON orders.id = orderdetail.order_id
        INNER JOIN product ON orderdetail.product_id = product.id WHERE orders.id = $order_id ");
//        $orders = DB::table('orders')->get();
        return view('admin_order-detail', [
            'admin_order' => $admin_order,
            'order_detail' => $order_detail
        ]);
    }


    //-------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------



    //-------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------

}
