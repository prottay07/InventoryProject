
@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>Advanced</strong> Salary Provide
                    <a href=" {{route('all.advance_salary')}} " class="btn btn-sm btn-success pull-right">Go Back</a>
                </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card-body card-block">
<form action="{{ url('/insert-advancedsalary')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-emp_id" class=" form-control-label">Employee Name</label>
            </div>
            @php
              $emp = DB::table('employees')->get();
            @endphp
            <div class="col-12 col-md-9">
                
               <select name="emp_id" id="">
                    <option disabled="" selected=""></option>
                    @foreach ($emp as $row)
                        <option value="{{$row->id }} ">{{$row->name}} </option>
                    @endforeach
                </select>
                
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-month" class=" form-control-label">Month of Slary</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="month" id="type" class="form-control">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                 
             </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-year" class=" form-control-label">Year</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="hf-year" name="year" placeholder="Enter Year..." class="form-control" required>
                
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-advanced_salary" class=" form-control-label">Advanced Salary</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="hf-advanced_salary" name="advanced_salary" placeholder="Enter Advanced Salary..." class="form-control" required>
                
            </div>
        </div>
                <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>

                    </form>
                </div>     
     
        </div>
        
    </div>
 <!-- END Card-->

      </div>
  </div>
  <!-- END MAIN CONTENT-->

  </div>
   <!-- END PAGE CONTAINER-->



@endsection