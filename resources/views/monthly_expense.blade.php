@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <a href="{{route('jan.expense')}}" class="btn btn-sm btn-info">January</a>
            <a href="{{route('feb.expense')}}" class="btn btn-sm btn-primary">February</a>
            <a href="{{route('mar.expense')}}" class="btn btn-sm btn-secondary">March</a>
            <a href="{{route('apr.expense')}}" class="btn btn-sm btn-danger">April</a>
            <a href="{{route('may.expense')}}" class="btn btn-sm btn-warning">May</a>
            <a href="{{route('jun.expense')}}" class="btn btn-sm btn-info">June</a>
            <a href="{{route('jul.expense')}}" class="btn btn-sm btn-danger">July</a>
            <a href="{{route('aug.expense')}}" class="btn btn-sm btn-secondary">August</a>
            <a href="{{route('sep.expense')}}" class="btn btn-sm btn-warning">September</a>
            <a href="{{route('oct.expense')}}" class="btn btn-sm btn-primary">October</a>
            <a href="{{route('nov.expense')}}" class="btn btn-sm btn-info">November</a>
            <a href="{{route('dec.expense')}}" class="btn btn-sm btn-danger">December</a>
            

            <br><br>

            @php
                $month = date("F");
                $total = DB::table('expenses')->where('month', $month)->sum('amount');
                
            @endphp
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color: red; text-align:center">This month's Total Expense:  {{$total}} Taka </h4><br><br>
                            <h3 class="panel-title">Monthly {{--  {{ date("F'Y") }} )--}} Expenses Details</h3> 
                           
                        </div>
                        <br>
                        <br>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Purpose of Expense</th>
                                                <th>Amount</th>
                                                
                                               
                                            </tr>
                                        </thead>
  
                                 
                                        <tbody>
                                            @foreach($monthlyexpense as $row)
                                            <tr>
                                                <td>{{ $row->purpose }}</td>
                                                <td>{{ $row->amount }}</td>
                                               
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>


            


        </div>
        <!-- END container_fluid-->
       
             </div>
             <!-- section-content-->
         </div>
         <!-- END MAIN CONTENT-->
       
         </div>
          <!-- END PAGE CONTAINER-->
       
           
       @endsection