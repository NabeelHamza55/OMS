@extends('dashboard.sidebar')
@section('title', 'Manage Employee')
@section('employees', 'active')
@section('main_content')





    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Users</h3>
            <nav aria-label="breadcrumb" class="d-flex align-items-start">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href=index.html>Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
        <div class="mt-2 mt-md-0">
            <div class="dropdown">
                <a href="#" class="btn btn-success dropdown-toggle" title="Filter" data-toggle="dropdown">Filters</a>
                <div class="dropdown-menu dropdown-menu-big p-4 dropdown-menu-right">
                    <form>
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control">
                                <option value="">Select</option>
                                <option value="">User</option>
                                <option value="">Staff</option>
                                <option value="">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option value="">Select</option>
                                <option value="">Active</option>
                                <option value="">Blocked</option>
                                <option value="">Admin</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">Get Results</button>
                        <button class="btn btn-link ml-2">Save Filter</button>
                    </form>
                </div>
            </div>
            <div class="dropdown ml-2">
                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Edit</a>
                    <a href="#" class="dropdown-item">Change Status</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">
                        Launch demo modal
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="user-list" class="table table-lg">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="user-list-select-all">
                                            <label class="custom-control-label" for="user-list-select-all"></label>
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>
                                        <a href="#">
                                            <figure class="avatar avatar-sm mr-2">
                                                <img src="../../assets/media/image/user/man_avatar3.jpg"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            Hillery Ovenell
                                        </a>
                                    </td>
                                    <td>hovenell0</td>
                                    <td>hovenell0@1und1.de</td>
                                    <td>Syria</td>
                                    <td>Staff</td>
                                    <td>
                                        <span class="badge bg-danger-bright text-danger">Blocked</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ti-more-alt"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">View Profile</a>
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="content-footer">
        <div>© 2020 Gogi - <a href="http://laborasyon.com/" target="_blank">Laborasyon</a></div>
        <div>
            <nav class="nav">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="#" class="nav-link">Change Log</a>
                <a href="#" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer>
    <!-- ./ Footer -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
