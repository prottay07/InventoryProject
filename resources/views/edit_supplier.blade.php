@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
          <div class="container-fluid">

            <div class="card">
             
                <div class="card-header">
                    <strong> Edit </strong> Supplier
                    <a href="{{ route('all.supplier') }}" class="btn btn-sm btn-info pull-right">Back</a>
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
                <form action="{{ url('/update-supplier/' .$edit->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-name" name="name" value="{{$edit->name }} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="hf-email" name="email" value="{{$edit->email }} " class="form-control"required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-address" class=" form-control-label">Address</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-address" name="address" value="{{$edit->address }} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    @php
                       $type_db = DB::table('suppliers')->get();
                    @endphp
                    <div class="col col-md-3">
                        <label for="hf-type" class=" form-control-label">Supplier Type</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="type" class="form-control" required>
                            <option disabled="" selected="" ></option>

                            @foreach ($type_db as $row)

                            <option value = "{{$row->type }}" <?php if($edit->type==$row->type){echo "Selected";}?> > {{$row->type }} </option>

                            @endforeach
                            


                        </select>
                        
                    </div>
                </div>

                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-shop" class=" form-control-label">Shop Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-shop" name="shop" value="{{$edit->shop }} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-phone" class=" form-control-label">Phone</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-phone" name="phone"value="{{$edit->phone }} " class="form-control" required>
                        
                    </div>
                </div>

                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-account_number" class=" form-control-label">Account Number</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-account_number" name="account_number" value="{{$edit->account_number }} " class="form-control" required>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-account_holder" class=" form-control-label">Account Holder</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-account_holder" name="account_holder" value="{{$edit->account_holder }} " class="form-control" required>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-bankname" class=" form-control-label">Bank Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-bankname" name="bankname" value="{{$edit->bankname }} " class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-branchname" class=" form-control-label">Branch Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-branchname" name="branchname" value="{{$edit->branchname }} " class="form-control" required>
                        
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-city" class=" form-control-label">City</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="hf-city" name="city" value="{{$edit->city }} " class="form-control" required>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        
                        <label for="hf-photo" class=" form-control-label">Photo</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <img id="image" src="#" alt="Photo">
                        <input type="file"  name="photo" accept="image/*" placeholder="Enter Photo..." class="form-control upload" onchange="readURL(this);">
                    
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        
                    </div>
                    <div class="col-12 col-md-9">
                    <img style="height:80px; width:80px " src=" {{URL::to($edit->photo)}}" alt="Photo">
                    <input type="hidden" name="old_photo" value=" {{ $edit->photo }} ">
                    
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