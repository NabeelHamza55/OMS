@extends('dashboard.sidebar') @section('title', 'Manage usertypes') @section('system', 'active')
@section('main_content')



    <nav aria-label="breadcrumb" class="d-flex align-items-start">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/usertypes">UserTypes</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class=" d-flex justify-content-between">
                        <div>
                            <h3>Edit UserType</h3>
                        </div>
                        <div class="">
                        <a class=" btn btn-primary"
                            href='{{ route('usertypes.index') }}'>
                            UserType List</a>
                        </div>
                    </div>
                    <div class="text-center">
                        @if ($errors->any())
                            <ul class="list-unstyled alert alert-primary">
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger"><b> {{ $error }} </b></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <!-- form -->
                    <form action={{ route('usertypes.update', $usertypes->id) }} method="post">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="usertype_name">UserType Name</label>
                                    <input type="text" name="usertype_name"
                                        value="{{ old('usertype_name', $usertypes->usertype) }}" id="usertype_name"
                                        class="form-control" placeholder="UserType Name..." required autofocus>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">Update usertype</button>
                        <hr>
                    </form>
                    <!-- ./ form -->
                </div>
            </div>
        </div>
    </div>

@endsection
