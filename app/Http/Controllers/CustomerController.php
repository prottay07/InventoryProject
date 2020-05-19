<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('add_customer');
    }

    public function store(Request $request)
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
        
        $data['phone']=$request->phone;
        $data['account_number']=$request->account_number;
        $data['account_holder']=$request->account_holder;
        $data['bank_name']=$request->bank_name;
        $data['bank_branch']=$request->bank_branch;
        $data['city']=$request->city;
        $image=$request->file('photo');

        if ($image) {
            // $filename = Str::random(40)
            $image_name= Str::random(40);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/customer/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $customer=DB::table('customers')
                         ->insert($data);
              if ($customer) {
                 $notification=array(
                 'messege'=>'Successfully Customer Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.customer')->with($notification);                      
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


    public function AllCustomer()
    {
          $customers = Customer::all();

            return view('all_customer', compact('customers'));

    }

    public function ViewCustomer($id)
    {
         $single_customer = DB::table('customers')->where('id', $id)->first();
         

         return view('view_customer', compact('single_customer'));

    }

    public function DeleteCustomer($id)
    {
         $delete = DB::table('customers')
         ->where('id', $id)
         ->first();

         $photo= $delete->photo;
         unlink($photo);

         $delcustomer = DB::table('customers')
                    ->where('id', $id)
                    ->delete();
        
                    if ($delcustomer) {
                        $notification=array(
                        'messege'=>'Successfully Employee Deleted ',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('all.customer')->with($notification);                      
                    }else{
                     $notification=array(
                        'messege'=>'error ',
                        'alert-type'=>'success'
                         );
                        return Redirect()->back()->with($notification);
                    }      
                       
                   }

            public function EditCustomer($id){

                $edit = DB::table('customers')
                        ->where('id', $id)
                        ->first();

                return view('edit_customer', compact('edit'));

            }

            public function UpdateCustomer(Request $request, $id)
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
                $data['phone']=$request->phone;
                $data['account_number']=$request->account_number;
                $data['bank_name']=$request->bank_name;
                $data['account_holder']=$request->account_holder;
                
                $data['bank_branch']=$request->bank_branch;
                $data['city']=$request->city;
                $image=$request->photo;
        
                if ($image) {
                    // $filename = Str::random(40)
                    $image_name= Str::random(40);
                    $ext=strtolower($image->getClientOriginalExtension());
                    $image_full_name=$image_name.'.'.$ext;
                    $upload_path='public/customer/';
                    $image_url=$upload_path.$image_full_name;
                    $success=$image->move($upload_path,$image_full_name);
                    if ($success) {
                        $data['photo']=$image_url;
    
                        $img = DB::table('customers')->where('id', $id)->first();
                        $image_path = $img->photo;
                        $done = unlink($image_path);

                        $updateCustomer=DB::table('customers')
                                ->where('id', $id)
                                 ->update($data);
                                 
                      if ($updateCustomer) {
                         $notification=array(
                         'messege'=>'Successfully Employee Updated ',
                         'alert-type'=>'success'
                          );
                        return Redirect()->route('all.customer')->with($notification);                      
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
}
