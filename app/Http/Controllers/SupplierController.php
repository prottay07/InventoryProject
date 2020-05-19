<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Supplier;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('add_supplier');
    }

    public function suuplierStore(Request $request)
    {

        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'unique:customers|email|max:255',
            'account_number' => 'unique:customers|max:50',
            'address' => 'required',
            'photo' => 'required',
            'phone' => 'required|max:20',
        ]);

        $data= array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['shop']=$request->shop;
        $data['type']=$request->type;
        $data['phone']=$request->phone;
        $data['account_number']=$request->account_number;
        $data['account_holder']=$request->account_holder;
        $data['bankname']=$request->bankname;
        $data['branchname']=$request->branchname;
        $data['city']=$request->city;
        $image=$request->file('photo');

        if ($image) {
            // $filename = Str::random(40)
            $image_name= Str::random(40);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/supplier/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $supplier=DB::table('suppliers')
                         ->insert($data);
              if ($supplier) {
                 $notification=array(
                 'messege'=>'Successfully Supplier Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.supplier')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }      
                
            }else{

              return Redirect()->back();
            	
            }
        }else{
        	  return Redirect()->back();
        }

      
    }


    public function AllSupplier()
    {
          $suppliers = Supplier::all();

            return view('all_supplier', compact('suppliers'));

    }

    public function ViewSupplier($id)
    {
         $single_supplier = DB::table('suppliers')->where('id', $id)->first();
         

         return view('view_supplier', compact('single_supplier'));

    }

    public function DeleteSupplier($id)
    {
         $delete = DB::table('suppliers')
         ->where('id', $id)
         ->first();

         $photo= $delete->photo;
         unlink($photo);

         $delsupplier = DB::table('suppliers')
                    ->where('id', $id)
                    ->delete();
        
                    if ($delsupplier) {
                        $notification=array(
                        'messege'=>'Successfully Supplier Deleted ',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('all.supplier')->with($notification);                      
                    }else{
                     $notification=array(
                        'messege'=>'error ',
                        'alert-type'=>'success'
                         );
                        return Redirect()->back()->with($notification);
                    }      
                       
                   }

            public function EditSupplier($id){

                $edit = DB::table('suppliers')
                        ->where('id', $id)
                        ->first();

                return view('edit_supplier', compact('edit'));

            }

            public function UpdateSupplier(Request $request, $id)
            {
                $validatedData = $request->validate([
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255',
                    'address' => 'required',                    
                    'phone' => 'required|max:20',
                ]);
        
                $data= array();
                $data['name']=$request->name;
                $data['email']=$request->email;
                $data['address']=$request->address;
                $data['shop']=$request->shop;
                $data['type']=$request->type;
                $data['phone']=$request->phone;
                $data['account_number']=$request->account_number;
                $data['bankname']=$request->bankname;
                $data['account_holder']=$request->account_holder;
                
                $data['branchname']=$request->branchname;
                $data['city']=$request->city;
                $image=$request->photo;
        
                if ($image) {
                    // $filename = Str::random(40)
                    $image_name= Str::random(40);
                    $ext=strtolower($image->getClientOriginalExtension());
                    $image_full_name=$image_name.'.'.$ext;
                    $upload_path='public/supplier/';
                    $image_url=$upload_path.$image_full_name;
                    $success=$image->move($upload_path,$image_full_name);
                    if ($success) {
                        $data['photo']=$image_url;
    
                        $img = DB::table('suppliers')->where('id', $id)->first();
                        $image_path = $img->photo;
                        $done = unlink($image_path);

                        $updateSupplier=DB::table('suppliers')
                                ->where('id', $id)
                                 ->update($data);
                                 
                      if ($updateSupplier) {
                         $notification=array(
                         'messege'=>'Successfully Supplier Updated ',
                         'alert-type'=>'success'
                          );
                        return Redirect()->route('all.supplier')->with($notification);                      
                     }
                     else{
                      $notification=array(
                         'messege'=>'error ',
                         'alert-type'=>'success'
                          );
                         return Redirect()->back()->with($notification);
                     }      
                        
                    }else{
        
                      return Redirect()->back();
                        
                    }
                }else{
                    $oldphoto= $request->old_photo;
                    if ($oldphoto) {
                        $data['photo']=$oldphoto;
    

                        $updateSupplier=DB::table('suppliers')
                                ->where('id', $id)
                                 ->update($data);
                                 
                      if ($updateSupplier) {
                         $notification=array(
                         'messege'=>'Successfully Supplier Updated ',
                         'alert-type'=>'success'
                          );
                        return Redirect()->route('all.supplier')->with($notification);                      
                     }
                     else{
                      $notification=array(
                         'messege'=>'error ',
                         'alert-type'=>'success'
                          );
                         return Redirect()->back()->with($notification);
                     }      
                        
                    }
                }

            }

}
