@extends('layout.index')
@section('content')
    <div class="affichage p-3">
        <h1>Affichage par ID : {{$dbgoldenbook->id}}</h1>
        <div class="row p-3 ">
            {{-- @foreach ($dbgoldenbook as $item ) --}}
            <div class="col border ">
                <p>Nom de l'auteur:</p>
                <p>{{$dbgoldenbook->A_nom}}</p>
                <p>
                    Texte de l'auteur:
                </p>
                <p>{{$dbgoldenbook->A_text}}</p>
                <p>
                    Note de l'auteur ( entre 1 et 5 ):
                </p>
                <p>{{$dbgoldenbook->A_note}}</p>
                <p>
                   Image:
                </p>
                <img width="7%" src="{{asset('storage/img/'.$dbgoldenbook->src)}}" alt="">
                 <p>name src : {{$dbgoldenbook->src}}</p>
            </div>
        </div>
    </div>
@endsection

