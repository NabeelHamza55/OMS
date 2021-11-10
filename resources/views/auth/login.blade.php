@extends('dashboard.layouts.master') @section('title', 'Login') @section('content')




<body class="form-membership">
<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->

    <!-- ./ logo -->

    <h4>Sign in</h4>

    <!-- form -->
    <form action="signin" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Username or email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="/forgetpass">Reset password</a>
        </div>
        <div class="container">
            @if ($errors->any())

              <ul class="list-unstyled alert alert-primary">
                @foreach ($errors->all() as $error)
                <li class="text-danger" ><b> {{ $error }} </b></li>
                @endforeach
              </ul>

            @endif
        </div>

        <button type="submit" class="btn btn-primary btn-block">Sign in</button>

        <hr>

        <p class="text-muted">Don't have an account?</p>
        <a href="/register" class="btn btn-outline-light btn-sm">Register now!</a>
    </form>
    <!-- ./ form -->


</div>


@endsection
