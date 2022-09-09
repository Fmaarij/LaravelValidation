@extends('layout.index')
@section('content')
    <div class="creation">
        <h1>Creation de donner</h1>
        <div class="row">
            <div class="col">

                {{-- @if ($errors)
                    @foreach ($errors->all() as $error)
                        <div class="row ">
                            <div class="col mb-3 text-center">
                                <li class="text-danger">
                                    {{ $error }}
                                </li>
                            </div>
                        </div>
                    @endforeach
                @endif --}}


                <form action="/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Nom de l'auteur</label>
                        <input type="text" name="A_nom">
                    </div>
                    <span class=" btn-outline-danger">
                        @error('A_nom')
                        {{$message}}
                        @enderror
                    </span>

                    <div>
                        <label>Text de l'auteur</label>
                        <textarea cols="30" rows="10" type="text" name="A_text"></textarea>
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
                        <input type="number" name="A_note">
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
                        <input type="file" name="img">
                    </div>

                    <div>
                        <button class="btn btn-outline-primary">Ajouter</button>
                    </div>
                </form>
                </>
            </div>
        </div>
    @endsection
