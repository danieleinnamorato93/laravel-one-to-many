@extends("layouts.app")

@section("page-title")

@section("content")

<div class="container">
      <div class="row justify-content-center">
      

        <form class="col-12  card p-4" method="POST" action="{{route("admin.projects.update", $project->id)}}">
            @method('PUT')
            @csrf
            <h1> Editing {{  $project->title }}</h1>
    
             
             
    
                <div class="mb-3">
                    <label for="project-title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="project-title" name="title" value="{{old('title')}}">
                    @error("title")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="project-content" class="form-label">Contenuto</label>
                    <input type="text" class="form-control" id="project-content" name="content" value="{{old('content')}}">
                    @error("content")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="project-url" class="form-label">Url</label>
                    <input type="text" class="form-control" id="project-url" name="url" value="{{old('url')}}">
                    @error("url")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
               
           <div class="mb-3 d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Edita il progetto!</button>
            <button type="reset" class="btn btn-danger">Pulisci i campi</button>

           </div>
        </form>
          

    </div>

</div>

@endsection