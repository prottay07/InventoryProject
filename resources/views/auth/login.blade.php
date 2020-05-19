@extends('layouts.app')

@section('content')


<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <h3>Inventory Management</h3>
                    </div>
                    <div class="login-form">


                        <form method="POST" action="{{ route('login') }}">
                            @csrf


      <div class="form-group">
        <label>Email Address</label>
   <input class="au-input au-input--full form-control @error('email') is-invalid @enderror"
    input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>





 <div class="form-group">
    <label>Password</label>
    <input class="au-input au-input--full form-control @error('password') is-invalid @enderror" input id="password"
     type="password" name="password" placeholder="Password"  required autocomplete="current-password">

     @error('password')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
 @enderror

  </div>


<div class="login-checkbox">
    <label>
        <input type="checkbox" class="form-check-input" name="remember" 
        id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
    </label>

    <label>
        <a href="{{ route('password.request') }}">Forgotten Password?</a>
    </label>
</div>

<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

</form>
<div class="register-link">
<p>
    Don't you have account?
<a href="+    ">Register Here</a>
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
