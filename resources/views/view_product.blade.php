@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>View</strong> Product
                    <a href="{{ route('all.product') }}" class="btn btn-sm btn-info pull-right">Back</a>
                </div>
                <div class="card-body card-block">
              

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-product_name" class=" form-control-label">Product Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                               <p> {{$prod->product_name}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-product_code" class=" form-control-label">Product Code</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->product_code}} </p>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-cat_name" class=" form-control-label">Category Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->cat_name}} </p>
                                
                            </div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-experience" class=" form-control-label">Suppliers</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->name}} </p>
                                
                            </div>
                        </div>

                        

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-type" class=" form-control-label">Type</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->type}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-condition" class=" form-control-label">Condition</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->condition}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-product_position" class=" form-control-label">Product POsition</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->product_position}} </p>
                               
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-price" class=" form-control-label">Buying Price</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->buying_price}} </p>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-price" class=" form-control-label">Selling Price</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->selling_price}} </p>
                               
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-purchase_date" class=" form-control-label">Purchase Date</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->purchase_date}} </p>
                               
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-expired_date" class=" form-control-label">Expired Date</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->expired_date}} </p>
                               
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-waranty_date" class=" form-control-label">Waranty Date</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p> {{$prod->waranty_date}} </p>
                               
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