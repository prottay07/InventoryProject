@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>Add</strong> Expense
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
<form action="{{ url('/insert-expense')}}" method="post" class="form-horizontal">
        @csrf

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-expense" class=" form-control-label">Purpose of Expense</label>
            </div>
            <div class="col-12 col-md-9">
                <textarea class="form-control" rows = "4" name="purpose" placeholder="Write Purpose..."  required></textarea>
                
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-amount" class=" form-control-label">Amount</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="hf-amount" name="amount" placeholder="Enter Amount..." class="form-control"required>
                
            </div>
        </div>

        <div class="row form-group">

            
            <div class="col col-md-3">
                
            </div>
            <div class="col-12 col-md-9">
            <input type="hidden" id="hf-day" name="day" value="{{ date('d-m-y') }}">
            <input type="hidden" id="hf-day" name="month" value="{{ date('F') }}">
            <input type="hidden" id="hf-day" name="year" value="{{ date('Y') }}">
                
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