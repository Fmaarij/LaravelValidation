<?php

namespace App\Http\Controllers;

use App\Models\Goldenbook;
use App\Http\Requests\StoreGoldenbookRequest;
use App\Http\Requests\UpdateGoldenbookRequest;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GoldenbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbgoldenbook = Goldenbook::all();
        return view('pages.goldenbook.index',compact('dbgoldenbook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dbgoldenbook = Goldenbook::all();
        return view('pages.goldenbook.create',compact('dbgoldenbook'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGoldenbookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'A_nom' => 'required|max:20',
            'A_text' => 'required|max:300',
            'A_note' => 'required|numeric|min:1, |max:5',

        ],
        [
            'A_nom.required' => ' Faut max 20 caractères',
            'A_text.required' => ' Faut max 300 caractères',
            'A_note.required' => ' Entre 1 et 5'
        ]);

        $dbgoldenbook = new Goldenbook;
        $dbgoldenbook->A_nom=$request->A_nom;
        $dbgoldenbook->A_text=$request->A_text;
        $dbgoldenbook->A_note=$request->A_note;

        Storage::put('public/img/', $request->file('img'));

        // $img = new File();
        $dbgoldenbook->src = $request->file('img')->hashName();
        // $img->save();

        $dbgoldenbook->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goldenbook  $goldenbook
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dbgoldenbook =Goldenbook::find($id);
        return view('pages.goldenbook.show',compact('dbgoldenbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goldenbook  $goldenbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $dbgoldenbook = Goldenbook::find($id);

        return view('pages.goldenbook.edit', compact('dbgoldenbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoldenbookRequest  $request
     * @param  \App\Models\Goldenbook  $goldenbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'A_nom' => 'required|max:20',
            'A_text' => 'required|max:300',
            'A_note' => 'required|numeric|min:1, |max:5',

        ],
        [
            'A_nom.required' => ' Faut max 20 caractères',
            'A_text.required' => ' Faut max 300 caractères',
            'A_note.required' => ' Entre 1 et 5'
        ]);
        $dbgoldenbook = Goldenbook::find($id);
        $dbgoldenbook->A_nom=$request->A_nom;
        $dbgoldenbook->A_text=$request->A_text;
        $dbgoldenbook->A_note=$request->A_note;
        $dbgoldenbook->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goldenbook  $goldenbook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dbgoldenbook = Goldenbook::find($id);
        $dbgoldenbook->delete();
        return redirect()->back();
    }
}
