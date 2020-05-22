@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong> Edit </strong> Product
                    <a href="{{ route('all.product') }}" class="btn btn-sm btn-info pull-right">Back</a>
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
                <form action="{{ url('/update-product/' .$edit->id)}}" method="post" class="form-horizontal">
                        @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-name" class=" form-control-label">Product Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-name" name="product_name" value="{{$edit->product_name }} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-product_code" class=" form-control-label">Product Code</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-product_code" name="product_code" value="{{$edit->product_code }} " class="form-control"required>
                        
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
                            
                        
                        <option value=" {{ $row->id }} " <?php if($row->id == $edit->cat_id){echo "selected";}?> > {{ $row->cat_name }} </option>
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
                        
                    
                    <option value=" {{ $row->id }} "<?php if($row->id == $edit->sup_id){echo "selected";}?> > {{ $row->name }} </option>
                    @endforeach
                </select>
                </div>
                </div>

                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-account_number" class=" form-control-label">Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-type" name="type" value="{{$edit->type }} " class="form-control" required>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-condition" class=" form-control-label">Condition</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-condition" name="condition" value="{{$edit->condition }} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-product_position" class=" form-control-label">Product Position</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-product_position" name="product_position" value="{{$edit->product_position }} " class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-purchase_date" class=" form-control-label">Purchase Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-purchase_date" name="purchase_date" value="{{$edit->purchase_date }} " class="form-control" required>
                        
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-expired_date" class=" form-control-label">Expired Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-expired_date" name="expired_date" value="{{$edit->expired_date }} " class="form-control" required>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        
                        <label for="hf-waranty_date" class=" form-control-label">Waranty Date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <input type="text"  name="waranty_date" value=" {{$edit->waranty_date}} " class="form-control">
                    
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-buying_price" class=" form-control-label">Buying Price</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-buying_price" name="buying_price" value="{{$edit->buying_price }} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-selling_price" class=" form-control-label">Selling Price</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-selling_price" name="selling_price" value="{{$edit->selling_price }} " class="form-control" required>
                        
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
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