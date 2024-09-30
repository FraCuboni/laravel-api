@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>GuestHome</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="d-flex align-items-center mb-5">
                        <h2 role="status">Still working on it :)</h2>
                        <div class="spinner-border mx-3" aria-hidden="true"></div>
                    </div>
                    <a href="{{ url('admin') }}"><h5>Go to admin home instead<i class="fa-solid fa-house mx-2"></i></h5></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
