@extends('layout.index')
@section('content')
    <div class="affichage p-3">
        <h1>Affichage de DB</h1>
        {{-- <div>
            @foreach ($dbgoldenbook as $item )
           {{$item->A_note}};
            @endforeach
        </div> --}}
        <div class="row p-3 ">
            @foreach ($dbgoldenbook as $item )
            <div class="col border ">
                <p>Nom de l'auteur:</p>
                <p>{{$item->A_nom}}</p>
                <p>
                    Texte de l'auteur:
                </p>
                <p>{{$item->A_text}}</p>
                <p>
                    Note de l'auteur ( entre 1 et 5 ):
                </p>
                <p>{{$item->A_note}}</p>

                <p>
                    Image:
                </p>

                <img width="15%" src="{{asset('storage/img/'.$item->src)}}" alt="">
                 <p>name src : {{$item->src}}</p>
                {{-- <img src="storage/img/{{$dbgoldenbook->src}}" alt=""> --}}

                <a href="/show/{{$item->id}}">
                    <button class="btn btn-primary">Afficher</button>
                </a>
                <a href="/edit/{{$item->id}}">
                    <button  class="btn btn-warning">Modifier</button>
                </a>
                <form action="/{{$item->id}}/delete" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>

            @endforeach

        </div>
    </div>
@endsection
