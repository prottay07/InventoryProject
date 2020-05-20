@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong>Add</strong> Product
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
                <form action="{{ url('/insert-product')}}" method="post" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-product_name" class=" form-control-label">Product Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-product_name" name="product_name" placeholder="Enter Product Name..." class="form-control" required>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-product_code" class=" form-control-label">Product Code</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-product_code" name="product_code" placeholder="Enter Product Code..." class="form-control"required>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-category" class=" form-control-label">Category Name</label>
                            </div>
                            @php
                                $cat = DB::table('categories')->get();
                            @endphp
                            <div class="col-12 col-md-9">
                            <select name="cat_id" class="form-control">
                                <option value="" selected></option>
                                @foreach ($cat as $row)
                                    
                                
                                <option value=" {{ $row->id }} "> {{ $row->cat_name }} </option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-experience" class=" form-control-label">Supplier Name</label>
                            </div>
                            @php
                            $sup = DB::table('suppliers')->get();
                        @endphp
                        <div class="col-12 col-md-9">
                        <select name="sup_id"  class="form-control" >
                            <option value="" selected></option>
                            @foreach ($sup as $row)
                                
                            
                            <option value=" {{ $row->id }} "> {{ $row->name }} </option>
                            @endforeach
                        </select>
                        </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-type" class=" form-control-label">Type</label>
                            </div>
                            <div class="col-12 col-md-9 form_control">
                                <input type="radio" name="type" > Brand New <span style="margin: 10px"> <input type="radio" name="type"> Recondition <br></span>
                                
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-condition" class=" form-control-label">Condition</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-leave" name="condition" placeholder="Enter Condition..." class="form-control" required>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-product_position" class=" form-control-label">Product Position</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-phone" name="product_position" placeholder="Product position..." class="form-control" required>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-purchase_date" class=" form-control-label">Purchase Date</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="hf-purchase_date" name="purchase_date" placeholder="Enter NID..." class="form-control" required>
                               
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-expired_date" class=" form-control-label">Expired Date</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="hf-expired_date" name="expired_date" placeholder="Expired Date..." class="form-control" required>
                               
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-waranty_date" class=" form-control-label">Waranty Date</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="hf-waranty_date" name="waranty_date" placeholder="Waranty Date..." class="form-control" required>
                               
                            </div>
                        </div>

                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-price" class=" form-control-label">Price</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="hf-expired_date" name="price" placeholder="Price..." class="form-control">
                               
                            </div>
                        </div>

                        {{-- <div class="row form-group">
                            <div class="col col-md-3">
                                
                                <label for="hf-photo" class=" form-control-label">Product Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <img id="image" src="#" alt="Photo">
                                <input type="file"  name="photo" accept="image/*" placeholder="Product Image..." class="form-control upload" required onchange="readURL(this);">
                               
                            </div>
                        </div> --}}

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