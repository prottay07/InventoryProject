<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddCategory()
    {
        return view('add_category');
    }

    public function InsertCategory(Request $request)
    {
       

       
            $data = array();
            $data['cat_name']= $request->cat_name;
            

          $cat = DB::table('categories')->insert($data);

                if ($cat) {
                    $notification=array(
                    'messege'=>'Successfully Category Inserted ',
                    'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);                     
                }else{
                    $notification=array(
                        'messege'=>'Category Not Inserted ',
                        'alert-type'=>'error'
                        );
                
                    return Redirect()->back()->with($notification);
                } 

    } // end function

    public function AllCategory()
    {
        $allcat =DB::table('categories')->get();
                        
        return view('all_category', compact('allcat'));
    }

    public function DeleteCategory($id)
    {
         $delete = DB::table('categories')
         ->where('id', $id)
         ->delete();

        
                    if ($delete) {
                        $notification=array(
                        'messege'=>'Successfully Category Deleted ',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('all.category')->with($notification);                      
                    }
                    else{
                     $notification=array(
                        'messege'=>'error ',
                        'alert-type'=>'success'
                         );
                        return Redirect()->back()->with($notification);
                    }      
                       
                   }

            public function EditCategory($id){

                $edit = DB::table('categories')
                        ->where('id', $id)
                        ->first();

                return view('edit_category', compact('edit'));

            }

            public function UpdateCategory(Request $request, $id)
            {
                $validatedData = $request->validate([
                    'cat_name' => 'required|max:255',
                   
                ]);
        
                $data= array();
                $data['cat_name']=$request->cat_name;
              
                        $updateCategory=DB::table('categories')
                                ->where('id', $id)
                                 ->update($data);
                                 
                      if ($updateCategory) {
                         $notification=array(
                         'messege'=>'Successfully Category Updated ',
                         'alert-type'=>'success'
                          );
                        return Redirect()->route('all.category')->with($notification);                      
                     }else{
                      $notification=array(
                         'messege'=>'error ',
                         'alert-type'=>'success'
                          );
                         return Redirect()->back()->with($notification);
                     }      
                   
            }

} //End Class
