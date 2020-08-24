
@extends('layouts.admin')

@section('content')
    
@include('layouts.partials.error')
@include('layouts.partials.success')


<!--Main Area  -->
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                        </i>
                    </div>
                    <div>Users
                        <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                        </div>
                    </div>
                </div>
            </div>
        </div>          
        <div class="row">                            
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">All Users</h5>
                        <table class="mb-0 table table-hover">
                            <thead>
                                @if (count($users)>0)
                                @foreach ($users as $user)
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                </tr>
                                </thead>
                                <tbody>                                                                         
                                        
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{ $user->name }}</a></td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ $user->role->name }}</td>
                                        <td>
                                            @if ($user->is_active == 1)
                                            <label class="badge badge-success">Active</label>
                                            @else
                                            <label class="badge badge-warning">Not Active</label>
                                            @endif
                                        </td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        <td>{{$user->updated_at->diffForHumans()}}</td>
                                    </tr>
                                                                        
                                </tbody>
                            @endforeach  
                            @else
                                <p>{{'No Users yet!.'}}</p>
                                <p><a class="btn btn-dark" href="{{url('/admin/users/create')}}">Create Post</a></p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--End Main Area-->
@endsection