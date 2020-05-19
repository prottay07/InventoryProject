@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>Add</strong> Customer
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
<form action="{{ url('/insert-customer')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                <label for="hf-phone" class=" form-control-label">Phone</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="hf-phone" name="phone" placeholder="Enter Phone..." class="form-control" required>
                
            </div>
        </div>

        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-account_number" class=" form-control-label">account_number</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="hf-account_number" name="account_number" placeholder="Enter Acc Number..." class="form-control">
                
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-account_holder" class=" form-control-label">Account Holder</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="hf-account_holder" name="account_holder" placeholder="Enter Account Holder's Name..." class="form-control">
                
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hf-bank_name" class=" form-control-label">Bank Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="hf-bank_name" name="bank_name" placeholder="Enter Bank Name..." class="form-control">
                
            </div>
        </div>

                      

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-bank_branch" class=" form-control-label">Bank Branch</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-bank_branch" name="bank_branch" placeholder="Enter Bank Branch..." class="form-control">
                               
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-city" class=" form-control-label">City</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-city" name="city" placeholder="Enter City..." class="form-control">
                               
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