@extends('layouts.app')


@section('content')
<div class="container my-4">
    <h2 class="fs-4 text-secondary my-4">
    </h2>
    <div class="row justify-content-center">
        <div class="col">
              
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>AdminHome</h2>
                </div>
                <div class="d-flex justify-content-center my-5">
                    <div class="btn-group">
                        <a class="btn btn-outline-primary" href="{{ route('admin.posts.index') }}">
                            <i class="fa-solid mx-1 fa-list"></i>
                            Posts List
                        </a>
                        <a class="btn btn-outline-primary" href="{{ route('admin.types.index') }}">
                            <i class="fa-solid mx-1 fa-code"></i>
                            Types List
                        </a>
                        <a class="btn btn-outline-primary" href="{{ route('admin.tags.index') }}">
                            <i class="fa-solid mx-1 fa-microchip"></i>
                            Tags List
                        </a>
                        <a class="btn btn-outline-primary" href="{{ url('profile') }}">
                            <i class="fa-solid mx-1 fa-user"></i>
                            Profile
                        </a>
                        <a class="btn btn-outline-danger" href="{{ url('profile') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid mx-1 fa-right-from-bracket"></i>
                            Logout
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
