
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
                    <div>Posts
                        <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                        </div>
                    </div>
                </div>
            </div>
        </div>          
        <div class="row">                            
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">All Posts</h5>
                        <table class="mb-0 table table-hover">
                            <thead>
                                @if (count($posts)>0)
                                @foreach ($posts as $post)
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Comment</th>
                                    <th>Post Link</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                            
                                        
                                    <tr>
                                        <th scope="row">{{$post->id}}</th>
                                        <td><a href="{{route('admin.posts.edit', $post->id)}}">{{ str_limit($post->title,50)}}</a></td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                                        <td><a href="javascript:void(0);" class="nav-link">Comments
                                                    <div class="badge badge-pill badge-info">{{count($post->comments)}}</div>
                                                </a></td>
                                        <td><a href="{{route('post', $post->slug)}}">{{str_limit(route('post', $post->slug),20)}}</a></td>
                                        <td>{{$post->created_at->diffForHumans()}}</td>
                                        <td>{{$post->updated_at->diffForHumans()}}</td>
                                    </tr>
                                    
                                    
                                </tbody>
                            @endforeach  
                            @else
                                <p>{{'No Posts yet!.'}}</p>
                                <p><a class="btn btn-dark" href="{{url('/admin/posts/create')}}">Create Post</a></p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--End Main Area-->
@endsection