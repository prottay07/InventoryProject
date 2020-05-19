@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>View</strong> Employee
                </div>
                <div class="card-body card-block">
              

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-name" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                               <p> {{$single->name}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-email" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->email}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-address" class=" form-control-label">Address</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->address}} </p>
                                
                            </div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-experience" class=" form-control-label">Experience</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->experience}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-salary" class=" form-control-label">Salary</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->salary}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-leave" class=" form-control-label">Leave</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->leave}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-phone" class=" form-control-label">Phone</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->phone}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-NID" class=" form-control-label">NID</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->nid_no}} </p>
                               
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-city" class=" form-control-label">City</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single->city}} </p>
                               
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                
                                <label for="hf-photo" class=" form-control-label">Photo</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <img style="height:80px; width:80px" src="{{URL::to($single->photo)}} " alt="Photo">
                                <input type="file"  name="photo" accept="image/*" placeholder="Enter Photo..." class="form-control upload" required onchange="readURL(this);">
                               
                            </div>
                        </div>

          
           
        </div>
        
    </div>
 <!-- END Card-->

      </div>
  </div>
  <!-- END MAIN CONTENT-->

  </div>
   <!-- END PAGE CONTAINER-->

  
</script>

@endsection