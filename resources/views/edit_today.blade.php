@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong> Edit </strong> Today's expense
                    <a href="{{ route('today.expense') }}" class="btn btn-sm btn-info pull-right">Back</a>
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
                <form action="{{ url('/update-today/' .$editTodayExpense->id)}}" method="post" class="form-horizontal">
                        @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-purpose" class=" form-control-label">Purpose of Expense</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-purpose" name="purpose" value="{{$editTodayExpense->purpose}} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-amount" class=" form-control-label">Amount</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-amount" name="amount" value="{{$editTodayExpense->amount}} " class="form-control" required>
                        
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
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