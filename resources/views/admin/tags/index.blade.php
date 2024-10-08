@extends('layouts.app')


@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h2>tags</h2>

                  <a href="{{ route('admin.tags.create') }}">
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

                <table class="table"> 
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">name</th>
                      <th scope="col">actions</th>
                    </tr>
                  </thead>
                  @foreach ($tags as $tag)
                  <tbody>
                    <tr>
                      <td scope='row'>{{$tag->id}}</td>
                      <td>{{$tag->name}}</td>
                      <td>
                        <a href="{{ route('admin.tags.show', $tag->id) }}">
                          <button tag="button" class="btn btn-primary mb-1"><i class="fa-regular fa-eye"></i></button>
                        </a>
                        <a href="{{ route('admin.tags.edit', $tag->id) }}">
                          <button tag="button" class="btn btn-warning mb-1"><i class="fa-solid fa-pen"></i></button>
                        </a>
                        
                        @include('admin.tags.formdelete')
                        
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
