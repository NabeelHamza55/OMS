@extends('dashboard.layouts.master') @section('title', 'Signup') @section('content')




<body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="container">
        <center class="pt-5">
            <h3 class="display-4">Signup Page</h3>
        </center>
    </div>
    <div class="form-wrapper">
        <!-- logo -->
        {{-- <div id="logo">
            <img src="../../assets/media/image/dark-logo.png" alt="image">
        </div> --}}
        <!-- ./ logo -->


        <h5>Create account</h5>

        <!-- form -->
        <form action="signup" method="post" >
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="Firstname" required autofocus>
                    </div>
                    @error('field')

                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="Lastname" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
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
            <br>
            <button class="btn btn-primary btn-block">Register</button>
            <hr>
            <p class="text-muted">Already have an account?</p>
            <a href="/login" class="btn btn-outline-light btn-sm">Sign in!</a>
        </form>
        <!-- ./ form -->


    </div>
@endsection
