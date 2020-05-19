@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>View</strong> Supplier
                    <a href="{{ route('all.supplier') }}" class="btn btn-sm btn-info pull-right">Back</a>
                </div>
                
                <div class="card-body card-block">
              

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-name" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                               <p> {{$single_supplier->name}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-email" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->email}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-address" class=" form-control-label">Address</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->address}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-shop" class=" form-control-label">Shop Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->shop}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-type" class=" form-control-label">Supplier Type</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->type}} </p>
                                
                            </div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-account_number" class=" form-control-label">Account Number</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->account_number}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-account_holder" class=" form-control-label">Account Holder</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->account_holder}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-bank_name" class=" form-control-label">Bank Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->bankname}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-bank_branch" class=" form-control-label">Branch Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->branchname}} </p>
                               
                            </div>
                        </div>

                        


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-city" class=" form-control-label">City</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$single_supplier->city}} </p>
                               
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                
                                <label for="hf-photo" class=" form-control-label">Photo</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <img style="height:80px; width:80px" src="{{URL::to($single_supplier->photo)}} " alt="Photo">
                                
                               
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