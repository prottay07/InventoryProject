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
                            <h3 class="panel-title">All Suppliers</h3>
                            <a href="{{ route('add.supplier') }}" class="btn btn-sm btn-info pull-right">Add New</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Supplier Type</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
  
                                 
                                        <tbody>
                                            @foreach($suppliers as $row)
                                            <tr>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <td>{{ $row->address }}</td>
                                                <td>{{ $row->type }}</td>

                                                <td><img src="{{ $row->photo }}" style="height: 60px; width: 60px;"></td>
                                                
                                               <td>
                                                   <a href="{{ URL::to('edit-supplier/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                   <a href="{{ URL::to('delete-supplier/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                                   <a href="{{ URL::to('view-supplier/'.$row->id) }}" class="btn btn-sm btn-primary">View</a>
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