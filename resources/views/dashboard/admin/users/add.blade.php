@extends('dashboard.sidebar')
@section('title', 'Manage Users')
@section('users', 'active')
@section('main_content')


<div class="container">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div><h3>Add User</h3>
            <nav aria-label="breadcrumb" class="d-flex align-items-start">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/" l>Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/users">Users</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add User</li>
                </ol>
            </nav></div>
        <div><a class="btn btn-primary" type="button" href="/users">User List</a></div>
    </div>
<hr>
<div class="text-center">
    @if ($errors->any())

      <ul class="list-unstyled alert alert-primary">
        @foreach ($errors->all() as $error)
        <li class="text-danger" ><b> {{ $error }} </b></li>
        @endforeach
      </ul>
    @endif
</div>

        <!-- form -->
        <form action="add_user" method="post" >
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="Firstname" required autofocus>
                    </div>
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

            <div class="row">
                <div class="form-group col">
                    <label for="usertypes">Select UserType:</label>
                    <select id="usertypes" class="js-example-basic-single" name="usertypes" required>
                        <option class="p-3"  value="" selected>Select User Type</option>
                        <option class="p-3" value="1" disabled>admin</option>
                        @foreach ($usertypes as $usertype)
                        @if ($usertype->id > 1)
                        <option value="{{ $usertype->id }}">{{ $usertype->usertype }}</option>
                        @endif
                        @endforeach
                        </select>
                </div>
                <div class="form-group col">
                    <label for="roles">Select Roles:</label>
                        <select  id="roles" class="js-example-basic-single" name="roles" required>
                            <option class="p-3" value="" selected>User Role</option>
                            <option class="p-3" value="1" disabled>owner</option>
                            @foreach ($roles as $role)
                            @if ($role->id > 1)
                            <option value="{{ $role->id }}">{{ $role->role }}</option>
                            @endif
                            @endforeach
                            </select>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-block">Add User</button>
            <hr>
        </form>
        <!-- ./ form -->

</div>


@endsection
