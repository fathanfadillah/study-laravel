@extends('layout/main')

@section('title','Login')

@section('container')

@if (session('status'))
<script>
alert('{{ session('
    status ') }}');
</script>
@endif

<div class="container-md my-5 pt-5">
    <div class="container-md pt-5 justify-content-center w-50">

        <form class="form-signin" action="/login" method="post">
            @csrf
            <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
            <!-- <h1 class="h3 font-weight-normal">Please sign in</h1> -->
            <div class="input-field">
                <label for="inputEmail" class="">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-field">
                <label for="inputPassword" class="">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- 
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div> -->

            <p>
                <label>
                    <input id="indeterminate-checkbox" type="checkbox" value="remember-me" />
                    <span>Remember</span>
                </label>
            </p>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
        </form>

        <div class="text-center my-2">
            <a href="{{ url('/register')}}" class="">Don't have an account</a>
        </div>

    </div>

</div>

@endsection