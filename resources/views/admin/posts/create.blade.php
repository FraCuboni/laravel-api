@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2 class="fs-4 text-secondary my-4">
    </h2>
    <div class="row justify-content-center">
        <div class="col">
              
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h2>Post create #</h2>
                  <button type="button" class="btn btn-success mb-1">
                    <i class="fa-solid fa-pen"></i>
                    <i class="fa-solid fa-plus"></i>
                  </button>
                </div>
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 

                <ul class="list-group list-group-flush">

                    {{-- TITLE --}}
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="title"><h5>title</h5></label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="title">
                        </div>
                    </li>

                    {{-- SUBJECT --}}
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="subject"><h5>subject</h5></label>
                            <textarea type="text" class="form-control" id="subject" name="subject" placeholder="subject"></textarea>
                        </div>
                    </li>

                    {{-- DATES --}}
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-1"></div>


                            {{-- START DATE --}}
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="start_date"><h5>start date</h5></label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" placeholder="start_date">
                                </div>
                            </div>
                    
                            {{-- END DATE --}}
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="end_date"><h5>end date</h5></label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" placeholder="end_date">                   
                                </div>
                            </div>
                        </div>   
                    </li>
                    
                    {{-- NUMBER OF POSTS --}}
                    <li class="list-group-item">
                        <div class="form-group"><h5>number of posts</h5></label>
                            <input type="text" class="form-control" id="number_of_posts" name="number_of_posts" placeholder="number_of_posts">
                        </div>
                    </li>
                    
                    {{-- COLLABORATORS --}}
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="collaborators"><h5>collaborators</h5></label>
                            <input type="text" class="form-control" id="collaborators" name="collaborators" placeholder="collaborators">
                        </div>
                    </li>

                    {{-- IMAGE PATH --}}
                    <li class="list-group-item">
                        <div class="form-group">           
                            <label for="image_path" class="form-label">image</label>
                            <input class="form-control" type="file" id="image_path" name="image_path" placeholder="image">
                        </div>
                    </li>

                    {{-- TYPE --}}
                    <li class="list-group-item">
                        <h5>type</h5>
                        <select name="type_id" class="form-select" aria-label="Default select example">
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </li>
                    
                    {{-- TAGS --}}
                    <li class="list-group-item">

                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

                            @foreach($tags as $tag)

                            <input
                              type="checkbox"
                              class="btn-check"
                              id="{{$tag->id}}"
                              autocomplete="off"
                              value="{{$tag->id}}"
                              name="tags[]">
                            <label class="btn btn-outline-primary" for="{{$tag->id}}">{{$tag->name}}</label>

                            @endforeach


                        </div>

                    </li>
                    
                    {{-- BUTTONS --}}
                    <li class="list-group-item">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </li>

                    

                </ul>

            </form>        
        </div>
    </div>
</div>
@endsection