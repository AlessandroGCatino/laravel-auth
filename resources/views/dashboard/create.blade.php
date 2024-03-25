@extends('layouts.app')

@section("content")

<div class="container mt-3 ">
    <h1 class="mb-3">Crea nuovo Progetto</h1>

    <form action="{{route("projects.store")}}" method="POST">

        @csrf
    
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"/>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        

        <div class="mb-3">
            <label for="languages" class="form-label">Linguaggi</label>
            <input
                type="text"
                class="form-control"
                name="languages"
                id="languages"/>
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Copertina</label>
            <input
                type="text"
                class="form-control"
                name="cover"
                id="cover"/>
        </div>
        
    
        <button
            type="submit"
            class="btn btn-primary"
        >
            Crea
        </button>
        
    </form>

</div>

@endsection