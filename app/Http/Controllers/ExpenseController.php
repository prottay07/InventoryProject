<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExpenseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddExpense(){

        return view('add_expense');
    }

    
    public function InsertExpense(Request $request){

        $validatedData = $request->validate([
            'purpose' => 'required',
            'amount' => 'required',
        ]);

        $data = array();
        $data['purpose'] = $request->purpose;
        $data['amount'] = $request->amount;
        $data['day'] = $request->day;
        $data['month'] = $request->month;
        $data['year'] = $request->year;

        $expense = DB::table('expenses')->insert($data);

        if($expense){
            $notification=array(
                'messege'=>'Successfully Expense Inserted ',
                'alert-type'=>'success'
                 );
               return Redirect()->route('add.expense')->with($notification);
        }

        else{
            return Redirect()->back()->with($notification);
        }
    }

    
    public function TodayExpense(){

        $date = date("d-m-y");
        $expense = DB::table('expenses')->where('day', $date)->get();
        return view('today_expense', compact('expense'));
    }

    public function EditTodayExpense($id){
        $editTodayExpense = DB::table('expenses')->where('id', $id)->first();
        return view('edit_today', compact('editTodayExpense'));
    }

    public function UpdateTodayExpense(Request $request, $id){

        
        $validatedData = $request->validate([
            'purpose' => 'required',
            'amount' => 'required',
        ]);

        $data = array();
        $data['purpose'] = $request->purpose;
        $data['amount'] = $request->amount;
      

        $updateexpense = DB::table('expenses')->where('id', $id)->update($data);

        if($updateexpense){
            $notification=array(
                'messege'=>'Successfully Expense Inserted ',
                'alert-type'=>'success'
                 );
               return Redirect()->route('today.expense')->with($notification);
        }

        else{
            return Redirect()->back()->with($notification);
        }
        
    }

    public function MonthlyExpense(){

        $month = date("F");
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function JanuaryExpense(){

        $month = "January";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function FebruaryExpense(){

        $month = "February";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function MarchExpense(){

        $month = "March";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }


    public function AprilExpense(){

        $month = "April";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function MayExpense(){

        $month = "May";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function JuneExpense(){

        $month = "June";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function JulyExpense(){

        $month = "July";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function AugustExpense(){

        $month = "August";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }
    public function SeptemberExpense(){

        $month = "September";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }
    public function OctoberExpense(){

        $month = "October";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }
    public function NovemberExpense(){

        $month = "November";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }

    public function DecemberExpense(){

        $month = "December";
        $monthlyexpense = DB::table('expenses')->where('month', $month)->get();
        return view('monthly_expense', compact('monthlyexpense'));
    }



    public function YearlyExpense(){

        $year = date("Y");
        $yearlyexpense = DB::table('expenses')->where('year', $year)->get();
        return view('yearly_expense', compact('yearlyexpense'));
    }

} // End Class
