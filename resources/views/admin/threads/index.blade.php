
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
                    <div>Threads
                        <div class="page-title-subheading">
                            <span><a href=" {{ url('/admin/threads/create') }} " class="btn btn-primary">Create Thread</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
        <div class="row">                            
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">All Threads</h5>
                        <table class="mb-0 table table-hover">
                            <thead>
                                @if (count($threads)>0)
                                <tr>
                                    <th>#</th>
                                    <th>Subject</th>
                                    <th>User</th>
                                    <th>Type</th>
                                    <th>Comments</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                </tr>
                                </thead>
                                @foreach ($threads as $thread)

                                <tbody>
                                
                                            
                                        
                                    <tr>
                                        <th scope="row">{{$thread->id}}</th>
                                        <td><a href="{{route('admin.threads.edit', $thread->id)}}">{{ str_limit($thread->subject,50)}}</a></td>
                                        <td>{{$thread->user->name}}</td>
                                        {{-- <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td> --}}
                                        <td> {{$thread->type}} </td>
                                        <td><a href="javascript:void(0);" class="nav-link">Comments
                                                    {{-- <div class="badge badge-pill badge-info">{{count($thread->comments)}}</div> --}}
                                                </a></td>
                                        <td>{{$thread->created_at->diffForHumans()}}</td>
                                        <td>{{$thread->updated_at->diffForHumans()}}</td>
                                    </tr>
                                    
                                    
                                </tbody>
                            @endforeach  
                            @else
                                <p>{{'No Threads yet!.'}}</p>
                                <p><a class="btn btn-dark" href="{{url('/admin/threads/create')}}">Create Thread</a></p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--End Main Area-->
@endsection