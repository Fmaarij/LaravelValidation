@extends('layout.index')
@section('content')
    <div class="creation">
        <h1>Creation de donner</h1>
        <div class="row">
            <div class="col">

                <form action="/edit/{{$dbgoldenbook->id}}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div>
                        <label>Nom de l'auteur</label>
                        <input type="text" name="A_nom" value="{{$dbgoldenbook->A_nom }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('A_nom')
                        {{$message}}
                        @enderror
                    </span>

                    <div>
                        <label>Text de l'auteur</label>
                        <textarea cols="30" rows="10" type="text" name="A_text" value="{{$dbgoldenbook->A_text }}"></textarea>
                    </div>
                    <span class=" btn-outline-danger">
                        @error('A_text')
                        {{$message}}
                        @enderror
                    </span>
                    <div>

                        <label>
                            Note de l'auteur ( entre 1 et 5 ) :
                        </label>
                        <input type="number" name="A_note" value="{{$dbgoldenbook->A_note }}">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('A_note')
                        {{$message}}
                        @enderror
                    </span>

                    <div>
                        <label>
                            Image:
                        </label>
                        <input type="file" name="src" value="{{$dbgoldenbook->src }}">

                        <img width="5%" src="{{asset('storage/img/'.$dbgoldenbook->src)}}" alt="">
                    </div>

                    <div>
                        <button class=" p-2 btn btn-outline-primary">Mettre à jour</button>
                    </div>
                </form>
                </>
            </div>
        </div>
    @endsection
