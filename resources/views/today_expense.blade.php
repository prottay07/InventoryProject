@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            @php
                $date = date("d-m-y");
                $total = DB::table('expenses')->where('day',$date)->sum('amount');
                
            @endphp
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color: red; text-align:center">Today's Total Expense:  {{$total}} Taka </h4> <br><br>
                            <h3 class="panel-title"> Today's ( {{ date('d-m-y') }} ) Expenses Details</h3>
                           
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
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
  
                                 
                                        <tbody>
                                            @foreach($expense as $row)
                                            <tr>
                                                <td>{{ $row->purpose }}</td>
                                                <td>{{ $row->amount }}</td>
                                               <td>
                                                <a href="{{ URL::to('/edit-today/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                               
                                               </td>
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