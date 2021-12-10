@extends('layouts.admin2')
@section('content')

<style>
    body{
        overflow-x: hidden;
    }
</style>
     <div class="container">
         <div class="row">
             <div class="col-md-9">
                <div class="mb-3">
                    Add Post/Article...
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                    @endif
                </div>
               <form action="{{route('Blog.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
                      @error('title')
                          <p class="alert alert-danger">{{$message}}</p>
                      @enderror
                <label for="cover" class="form-label">Cover Photo</label>
                <input type="file"name="picture" class="form-control" id="title">
                @error('picture')
                <p class="alert alert-danger">{{$message}}</p>
            @enderror
                <label for="cover" class="form-label">Category</label>
                   <select class="form-control" name="cat">
                        <option value="Economic">Economic</option>
                        <option value="Education">Economic</option>
                        <option value="Rehab">Rehab</option>
                   </select>
                   @error('cat')
                   <p class="alert alert-danger">{{$message}}</p>
               @enderror
                  <div class="mb-3">
                    <label for="body" class="form-label">Content</label>
                    <textarea class="form-control" id="body" rows="3" name="body">
                  
                    </textarea>
                    @error('body')
                          <p class="alert alert-danger">{{$message}}</p>
                      @enderror
                  </div>
                  <hr>
                    <input type="submit" value="Publish" class="btn btn-primary mt-3">
               </form>

                  
             </div>
         </div>
     </div>

@endsection