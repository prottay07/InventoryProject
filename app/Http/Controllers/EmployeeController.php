<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('add_employee');
    }

    public function store(Request $request)
    {

        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:employees|email|max:255',
            'nid_no' => 'required|unique:employees|max:17',
            'address' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'leave' => 'required',
            'city' => 'required',
            'photo' => 'required',
            'phone' => 'required|max:20',
        ]);

        $data= array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['address']=$request->address;
        
        $data['experience']=$request->experience;
        $data['salary']=$request->salary;
        $data['leave']=$request->leave;
        $data['phone']=$request->phone;
        $data['nid_no']=$request->nid_no;
        $data['city']=$request->city;
        $image=$request->file('photo');

        if ($image) {
            // $filename = Str::random(40)
            $image_name= Str::random(40);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/employee/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $employee=DB::table('employees')
                         ->insert($data);
              if ($employee) {
                 $notification=array(
                 'messege'=>'Successfully Employee Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.employee')->with($notification);                      
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


    public function AllEmployee()
    {
         $employees = Employee::all();

        return view('all_employee', compact('employees'));

    }

    public function ViewEmployee($id)
    {
         $single = DB::table('employees')->where('id', $id)->first();
         

         return view('view_employee', compact('single'));

    }

    public function DeleteEmployee($id)
    {
         $delete = DB::table('employees')
         ->where('id', $id)
         ->first();

         $photo= $delete->photo;
         unlink($photo);

         $dltusr = DB::table('employees')
                    ->where('id', $id)
                    ->delete();
        
                    if ($dltusr) {
                        $notification=array(
                        'messege'=>'Successfully Employee Deleted ',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('all.employee')->with($notification);                      
                    }else{
                     $notification=array(
                        'messege'=>'error ',
                        'alert-type'=>'success'
                         );
                        return Redirect()->back()->with($notification);
                    }      
                       
                   }
               
        public function EditEmployee($id)
        {
            $edit = DB::table('employees')
                    ->where('id', $id)
                    ->first();
            return view('edit_employee', compact('edit'));
        }
         
        public function UpdateEmployee(Request $request, $id)
        {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'nid_no' => 'required|max:17',
                'address' => 'required',
                'experience' => 'required',
                'salary' => 'required',
                'leave' => 'required',
                'city' => 'required',
                
                'phone' => 'required|max:20',
            ]);
    
            $data= array();
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['address']=$request->address;
            
            $data['experience']=$request->experience;
            $data['salary']=$request->salary;
            $data['leave']=$request->leave;
            $data['phone']=$request->phone;
            $data['nid_no']=$request->nid_no;
            $data['city']=$request->city;
            $image=$request->photo;
    
            if ($image) {
                // $filename = Str::random(40)
                $image_name= Str::random(40);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/employee/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                    $data['photo']=$image_url;

                    $img = DB::table('employees')->where('id', $id)->first();
                    $image_path = $img->photo;
                    $done = unlink($image_path);
                    $updateEmployee=DB::table('employees')
                            ->where('id', $id)
                             ->update($data);
                             
                  if ($updateEmployee) {
                     $notification=array(
                     'messege'=>'Successfully Employee Updated ',
                     'alert-type'=>'success'
                      );
                    return Redirect()->route('all.employee')->with($notification);                      
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
    

} //end class
