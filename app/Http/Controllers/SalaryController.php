<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddAdvancedSalary()
    {
        return view('add-advance-salary');
    }

    public function insertAdvanced(Request $request)
    {
        $emp = $request->emp_id;
        $month = $request->month;

        $advanced = DB::table('advance_salaries')
                    ->where('emp_id', $emp)
                    ->where('month', $month)
                    ->first();

        if($advanced === NULL){
            $data = array();
            $data['emp_id']= $request->emp_id;
            $data['month']= $request->month;
            $data['year']= $request->year;
            $data['advanced_salary']= $request->advanced_salary;

          $advanced = DB::table('advance_salaries')->insert($data);

                if ($advanced) {
                    $notification=array(
                    'messege'=>'Successfully Advance Salary Inserted ',
                    'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);                     
                }else{
                
                    return Redirect()->back()->with($notification);
                } 

        }

        else{
            $notification=array(
                'messege'=>'OOps Already taken once in this month ',
                'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification); 
        }
    
    } // end function

    public function AllSalary()
    {
        $advanceSalary =DB::table('advance_salaries')
                        ->join('employees', 'advance_salaries.emp_id', 'employees.id')
                        ->select('advance_salaries.*', 'employees.name','employees.photo','employees.salary')
                        ->orderBy('id', 'DESC')
                        ->get();
        return view('all-advance-salary', compact('advanceSalary'));
    }


    
    public function PaySalary()
    {
        // $month = date('F', strtotime('-1 month'));

       

        // $salary =DB::table('advance_salaries')
        //                 ->join('employees', 'advance_salaries.emp_id', 'employees.id')
        //                 ->select('advance_salaries.*', 'employees.name','employees.photo','employees.salary')
        //                 ->orderBy('id', 'DESC')
        //                 ->where('month', $month)
        //                 ->get();
        $employee= DB::table('employees')->get();
        return view('pay_salary', compact('employee'));
    }


} //end class
