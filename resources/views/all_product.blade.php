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
                            <h3 class="panel-title">All Products</h3>
                            <a href="{{ route('add.product') }}" class="btn btn-sm btn-info pull-right">Add New</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th> Buying Price</th>
                                                <th>Purchase date</th>
                                                <th> Current position</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
  
                                 
                                        <tbody>
                                            @foreach($products as $row)
                                            <tr>
                                                <td>{{ $row->product_name }}</td>
                                                <td>{{ $row->product_code }}</td>
                                                <td>{{ $row->price }}</td>
                                                <td>{{ $row->purchase_date }}</td>

                                                <td>{{ $row->product_position }}</td>
                                                
                                               <td>
                                                   <a href="{{ URL::to('edit-product/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                   <a href="{{ URL::to('delete-product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                                   <a href="{{ URL::to('view-product/'.$row->id) }}" class="btn btn-sm btn-primary">View</a>
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