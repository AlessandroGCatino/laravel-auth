@extends('layouts.app')

@section("content")

<div class="container mt-3 ">
    <h1 class="mb-3">Modifica Progetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route("projects.update", $project)}}" method="POST">

        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                value="{{old('title') ?? $project->title}}"/>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{old('description') ?? $project->description}}</textarea>
        </div>
        

        <div class="mb-3">
            <label for="languages" class="form-label">Linguaggi</label>
            <input
                type="text"
                class="form-control"
                name="languages"
                id="languages"
                value="{{old('languages') ?? $project->languages}}"/>
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Copertina</label>
            <input
                type="text"
                class="form-control"
                name="cover"
                id="cover"
                value="{{old('cover') ?? $project->cover}}"/>
        </div>
        
    
        <button
            type="submit"
            class="btn btn-primary"
        >
            Modifica
        </button>
        
    </form>

</div>

@endsection