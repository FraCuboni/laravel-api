@extends('layouts.app')


@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h2>Posts</h2>

                  <a href="{{ route('admin.posts.create') }}">
                    <button type="button" class="btn btn-success mb-1">
                      <i class="fa-solid fa-pen"></i>
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </a>

                </div>

                @if (session('deleted'))
                    <div class="alert alert-info d-flex justify-content-center" role="alert">
                        {{session('deleted')}}
                    </div>
                @endif

                <table class="table table-bordered"> 
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">title</th>
                      <th scope="col">start date</th>
                      <th scope="col">tags</th>
                      <th scope="col">type</th>
                      <th scope="col">image</th>
                      <th scope="col">actions</th>
                    </tr>
                  </thead>
                  @foreach ($posts as $post)
                  <tbody>
                    <tr>
                      <td scope='row'>{{$post->id}}</td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->start_date}}</td>
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
                        @if($post->image_path) 
                        yes
                        @else
                        no
                        @endif
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
                  @endforeach
                        
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
