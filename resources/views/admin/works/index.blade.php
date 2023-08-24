@extends('layouts.admin')

@section('content')
    <div class="container">

        {{-- CREATE - Pulsante Form --}}
        <div class="d-flex justify-content-center">
            <button class="btn btn-sm btn-success mt-5">
                <a class="text-light text-decoration-none" href="{{route('admin.works.create')}}">
                    Aggiungi Progetto 
                </a>
            </button>
        </div>

        <div class="row">
            @foreach($works as $project)
                <div class="col-12 col-md-6 col-lg-4 d-flex flex-wrap">

                    <div class="card mt-5">
                        {{--ASSET IMMAGINE per comando Sfoglia immagine  --}}
                        <div class="card-img-top">
                            <img class="img-fluid" src="{{asset('storage/'.$project->image)}}" alt="{{$project->title}}">
                        </div>

                        <div class="card-body ">
                            {{-- TITOLO --}}
                            <h5 class="card-title text-uppercase">{{$project->title}}</h5>

                            {{-- DESCRIZIONE --}}
                            <p class="card-text">{{$project->description}}</p>

                            {{-- LINK --}}
                            <div class="mb-3">   
                                Link: 
                                <em><a href="#">{{$project->link}}</a></em>
                            </div>
                            
                            {{-- FILE SHOW - Mostra dettagli del progetto --}}
                            <div>
                                <a href="{{route('admin.works.show', $project->id)}}">
                                    Dettagli-->
                                </a>
                            </div>

                            {{-- FILE EDIT - Modifica form --}}
                            <button class="btn btn-sm btn-primary mt-3">
                                <a class="text-light text-decoration-none" href="{{route('admin.works.edit', $project->id)}}">
                                    Modifica
                                </a>
                            </button>

                            {{-- FORM DELETE - Elimina progetto --}}
                            <form action="{{route('admin.works.destroy', $project->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mt-3 btn btn-danger btn-sm">
                                    Elimina
                                </button>
                            </form>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
   

@endsection