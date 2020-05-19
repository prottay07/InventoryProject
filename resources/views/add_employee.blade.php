@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>Add</strong> Employee
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
                <form action="{{ url('/insert-employee')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-name" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-name" name="name" placeholder="Enter Name..." class="form-control" required>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-email" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" id="hf-email" name="email" placeholder="Enter Email..." class="form-control"required>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-address" class=" form-control-label">Address</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-address" name="address" placeholder="Enter Address..." class="form-control" required>
                                
                            </div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-experience" class=" form-control-label">Experience</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-experience" name="experience" placeholder="Enter Experience..." class="form-control" required>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-salary" class=" form-control-label">Salary</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-salary" name="salary" placeholder="Enter Salary..." class="form-control">
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-leave" class=" form-control-label">Leave</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-leave" name="leave" placeholder="Enter Leave..." class="form-control" required>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-phone" class=" form-control-label">Phone</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-phone" name="phone" placeholder="Enter Phone..." class="form-control" required>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-NID" class=" form-control-label">NID</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-NID" name="nid_no" placeholder="Enter NID..." class="form-control" required>
                               
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-city" class=" form-control-label">City</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-city" name="city" placeholder="Enter City..." class="form-control" required>
                               
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                
                                <label for="hf-photo" class=" form-control-label">Photo</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <img id="image" src="#" alt="Photo">
                                <input type="file"  name="photo" accept="image/*" placeholder="Enter Photo..." class="form-control upload" required onchange="readURL(this);">
                               
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

    <!-- Image View-->
   <script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection