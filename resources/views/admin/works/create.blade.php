@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class='mt-4'>Compila la form e aggiungi un progetto nuovo</h4>
        <div class="row">
            <div class="col-12">
    
                {{-- Messaggi di errore --}}
                {{-- @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach    
                        </ul>
                    </div>
                @endif --}}
    
    
                {{-- INIZIO FORM --}}
                <form action="{{route('admin.works.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- TITOLO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Titolo</label>
                        <input type="text"class="form-control" id="title" name="title" placeholder="titolo">
                    </div>
    
                    {{-- IMG --}}
                    <div class="form-group">
                        <label for="" class="control-label">Immagine</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Immagine progetto">
                    </div>
    
                    {{-- LINK --}}
                    <div class="form-group">
                        <label for="" class="control-label">Link al progetto</label>
                        <input type="text"class="form-control" id="link" name="link" placeholder="link">
                    </div>
    
                    {{-- DESCRIZIONE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Descrizone</label>
                        <input type="text"class="form-control" id="description" name="description" placeholder="Inserisci descrizione...">
                    </div>
    
                    {{-- FIGURE PROFESSIONALI --}}
                    {{-- Back-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome back-ender</label>
                        <input type="text"class="form-control" id="back_ender" name="back_ender" placeholder="back_ender">
                    </div>
    
                    {{-- Front-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome front-ender</label>
                        <input type="text"class="form-control" id="front_ender" name="front_ender" placeholder="front_ender">
                    </div>
    
                    {{-- UX --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UX</label>
                        <input type="text"class="form-control" id="ux" name="ux" placeholder="ux">
                    </div>
    
                    {{-- UI --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UI</label>
                        <input type="text"class="form-control" id="ui" name="ui" placeholder="ui">
                    </div>
    
                    {{-- Illustratore --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome Illustratore</label>
                        <input type="text"class="form-control" id="illustrator" name="illustrator" placeholder="illustrator">
                    </div>
    
                    {{-- PULSANTE --}}
                    <div class="form-group">
                        <button class="btn btn-success mt-3" type="submit"class="form-control">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection