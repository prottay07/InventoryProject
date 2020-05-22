<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddProduct()
    {
        return view('add_product');
    }

    public function InsertProduct(Request $request)
    {

        
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'product_code' => 'required|max:255',
            'cat_id' => 'required',
            'sup_id' => 'required',
            'type' => 'required',
            'condition' => 'required',
            'product_position' => 'required',
            'purchase_date' => 'required',
            
            
        ]);

        $data= array();
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['cat_id']=$request->cat_id;
        
        $data['sup_id']=$request->sup_id;
        $data['type']=$request->type;
        $data['condition']=$request->condition;
        $data['product_position']=$request->product_position;
        $data['purchase_date']=$request->purchase_date;
        $data['expired_date']=$request->expired_date;
        $data['waranty_date']=$request->waranty_date;
        $data['buying_price']=$request->buying_price;
        $data['selling_price']=$request->selling_price;

        $product=DB::table('products')
                         ->insert($data);
              if ($product) {
                 $notification=array(
                 'messege'=>'Successfully product Inserted ',
                 'alert-type'=>'success'
                  );
                return  Redirect()->back()->with($notification);

              }

              else{

                return Redirect()->back();
                 }
        // $image=$request->file('photo');

        // if ($image) {
        //     // $filename = Str::random(40)
        //     $image_name= Str::random(40);
        //     $ext=strtolower($image->getClientOriginalExtension());
        //     $image_full_name=$image_name.'.'.$ext;
        //     $upload_path='public/product/';
        //     $image_url=$upload_path.$image_full_name;
        //     $success=$image->move($upload_path,$image_full_name);
        //     if ($success) {
        //         $data['photo']=$image_url;
        //         $product=DB::table('products')
        //                  ->insert($data);
        //       if ($product) {
        //          $notification=array(
        //          'messege'=>'Successfully product Inserted ',
        //          'alert-type'=>'success'
        //           );
        //         return Redirect()->route('all.product')->with($notification);                      
        //      }else{
        //       $notification=array(
        //          'messege'=>'error ',
        //          'alert-type'=>'success'
        //           );
        //          return Redirect()->back()->with($notification);
        //      }      
                
        //     }else{

        //       return Redirect()->back();
            	
        //     }
        // }else{
        // 	  return Redirect()->back();
        // }


      
    } // end function


    public function AllProduct()
    {
         $products = Product::all();

        return view('all_product', compact('products'));

    }

    public function ViewProduct($id)
    {
         $prod = DB::table('products')
                    ->join('suppliers','products.sup_id','suppliers.id')
                    ->join('categories','products.cat_id','categories.id')
                    ->select('products.*', 'suppliers.name', 'categories.cat_name')
                    ->where('products.id', $id)
                    ->first();
         

         return view('view_product', compact('prod'));

    }

    public function DeleteProduct($id)
    {
         $delete = DB::table('products')
         ->where('id', $id)
         ->delete();

        if ($delete) {
            $notification=array(
            'messege'=>'Successfully Product Deleted ',
            'alert-type'=>'success'
                );
            return Redirect()->route('all.product')->with($notification);                      
        }else{
            $notification=array(
            'messege'=>'error ',
            'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }      
                       
    }  // End Function
               
        public function EditProduct($id)
        {
            $edit = DB::table('products')
                    ->where('id', $id)
                    ->first();
            return view('edit_product', compact('edit'));
        }
         
        public function UpdateProduct(Request $request, $id)
        {
            $validatedData = $request->validate([
                'product_name' => 'required|max:255',
                'product_code' => 'required|max:255',
                'cat_id' => 'required',
                'sup_id' => 'required',
                'type' => 'required',
                'condition' => 'required',
                'product_position' => 'required',
                'purchase_date' => 'required',
                
                
            ]);
    
            $data= array();
            $data['product_name']=$request->product_name;
            $data['product_code']=$request->product_code;
            $data['cat_id']=$request->cat_id;
            $data['sup_id']=$request->sup_id;
            $data['type']=$request->type;
            $data['condition']=$request->condition;
            $data['product_position']=$request->product_position;
            $data['purchase_date']=$request->purchase_date;
            $data['expired_date']=$request->expired_date;
            $data['waranty_date']=$request->waranty_date;
            $data['buying_price']=$request->buying_price;
            $data['selling_price']=$request->selling_price;
            
    
            $update=DB::table('products')
                            ->where('id', $id)
                             ->Update($data);

                  if ($update) {
                     $notification=array(
                     'messege'=>'Successfully product Updated ',
                     'alert-type'=>'success'
                      );
                    return  Redirect()->route('all.product')->with($notification);
    
                  }
    
                  else{
    
                    return Redirect()->back();
                     }
        }

        
}
