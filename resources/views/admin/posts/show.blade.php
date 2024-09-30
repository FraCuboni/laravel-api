@extends('layouts.app')


@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h2>Post #{{$post->id}}: {{$post->title}}</h2>
                  <button type="button" class="btn btn-success mb-1">
                    <i class="fa-solid fa-pen"></i>
                    <i class="fa-solid fa-plus"></i>
                  </button>
                </div>
                <div class="container">
                    <div class="row">
                        @if($post->image_path) 
                        <div class="col-3">
                            <img style="max-width: 100%" src="{{asset('storage/'.$post->image_path)}}" alt="">
                        </div>

                        <div class="col-9">
                            
                        @else
                        <div class="col-12">
                        @endif

                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">title</th>
                                        <th scope="col">text</th>
                                        <th scope="col">start date</th>
                                    </tr>
                                </thead>
            
                                <tbody>
                                    <tr>
                                        <td scope='row'>{{$post->title}}</td>
                                        <td>{{$post->subject}}</td>
                                        <td>{{$post->start_date}}</td>
                                    </tr>
                                </tbody>

                                
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">posts number</th>
                                        <th scope="col">collaborators</th>
                                        <th scope="col">end date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$post->number_of_posts}}</td>
                                        <td>{{$post->collaborators}}</td>
                                        <td>{{$post->end_date}}</td>
                                    </tr>
                                </tbody>



                                
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">tags</th>
                                        <th scope="col">type</th>
                                        <th scope="col">actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            @if($post->tags->isNotEmpty())
                                                @foreach($post->tags as $tag)
                                                <button type="button" class="btn btn-secondary mb-1">
                                                {{$tag->name}}
                                                </button>
                                                @endforeach
                                            @else
                                            <button type="button" class="btn btn btn-outline-secondary mb-1" disabled>
                                                No Tags Added
                                            </button>
                                                
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info">{{$post->type->name}}</button>
                                        </td>
                                        <td>
                                          <a href="{{ route('admin.posts.show', $post->id) }}">
                                            <button type="button" class="btn btn-primary mb-1"><i class="fa-regular fa-eye"></i></button>
                                          </a>
                                          <a href="{{ route('admin.posts.edit', $post->id) }}">
                                            <button type="button" class="btn btn-warning mb-1"><i class="fa-solid fa-pen"></i></button>
                                          </a>
                                          @include('admin.posts.formdelete')
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
                
