@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pay Salary <span class="pull-right"><h3 class="text-danger"> {{ date('F Y') }} </h3></span></h3>
                            
                        </div>
                        <br>
                        <br>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Salary</th>
                                                <th>Month</th>
                                                {{-- <th>Advance Salary</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
  
                                 
                        <tbody>
                            @foreach($employee as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td><img src="{{ $row->photo }}" style="height: 60px; width: 60px;"></td>
                                <td>{{ $row->salary }}</td>
                                <td> <span class="badge  badge-success">{{ date("F", strtotime('-1 month')) }}</span></td>
                                {{-- <td>{{ $row->advanced_salary }}</td> --}}
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Pay Salary</a>
                                   
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