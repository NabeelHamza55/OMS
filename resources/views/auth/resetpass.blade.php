@extends('dashboard.layouts.master')

@section('title', 'Reset Password')

@section('content')


<body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">

        <h5>Reset password</h5>

        <!-- form -->
        <form action="resetpass" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Username or email" required autofocus>
            </div>
            <button class="btn btn-primary btn-block">Submit</button>
            <hr>
            <p class="text-muted">Take a different action.</p>
            <a href="/register" class="btn btn-sm btn-outline-light mr-1">Register now!</a>
            or
            <a href="/login" class="btn btn-sm btn-outline-light ml-1">Login!</a>
        </form>
        <!-- ./ form -->


    </div>

    <!-- Plugin scripts -->
    <script src="../../vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="../../assets/js/app.min.js"></script>
    </body>


@endsection
