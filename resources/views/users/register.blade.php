@extends('layout/main')

@section('title','Register')

@section('container')

@if (session('status'))
<script>
alert('{{ session('
    status ') }}');
</script>
@endif

<div class="container-md my-5 pt-5">
    <div class="container-md pt-5 justify-content-center w-50">
        <form class="form-signin" action="/register" method="post">
            @csrf
            <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
            <!-- <h1 class="h3 font-weight-normal">Please sign in</h1> -->
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="validate" value="{{old('username')}}">
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-field">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" class="validate" value="{{old('email')}}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="input-field">
                <label for="password" class="">Password</label>
                <input type="password" name="password" id="password" class="validate">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-field">
                <label for="confirmpassword" class="">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="validate">
                @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <!-- 
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone">Telephone</label>
            </div>
            <button class="my-4 btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
        </form>

        <a class="row justify-content-center" href="{{ url('/login')}}">You Have An Account ?</a>

    </div>

</div>

@endsection