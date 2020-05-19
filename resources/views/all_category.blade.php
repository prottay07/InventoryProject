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
                            <h3 class="panel-title">All Categories</h3>
                            <a href=" {{ route('add.category') }} " class="btn btn-sm btn-success pull-right">Add New</a>
                        </div>
                        <br>
                        <br>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
  
                                 
                                        <tbody>
                                            @foreach($allcat as $row)
                                            <tr>
                                                <td>{{ $row->cat_name }}</td>
                                              
                                               <td>
                                                <a href="{{ URL::to('edit-category/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{ URL::to('delete-category/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" 
                                                    onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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