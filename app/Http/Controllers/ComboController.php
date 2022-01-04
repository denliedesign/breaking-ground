<?php

namespace App\Http\Controllers;

use App\Models\Combo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $combo = \App\Models\Combo::all();
        return view('/', compact('combo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Combo::class);
        $combo = new Combo();
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $combo = Combo::create($this->validateRequest());
        $this->storeImage($combo);
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function show(Combo $combo)
    {
        return view('/', compact('combo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function edit(Combo $combo)
    {
        $this->authorize('update', Combo::class);
        return view('combos.edit', compact('combo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Combo $combo)
    {
        $combo->update($this->validateRequest());
        $this->storeImage($combo);
        return redirect(url()->previous())->with('message', 'Your Page Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Combo $combo)
    {
        $combo->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'comboName' => 'required',
            'comboSection' => 'required',
            'comboTag' => 'nullable|alpha',
            'comboTitle' => 'nullable',
            'comboContent' => 'nullable',
            'comboImage' => 'nullable|file|image|max:5000',
            'comboBtn' => 'nullable',
            'comboUrl' => 'nullable',
        ]);
    }

    private function storeImage($combo)
    {
        if (request()->has('comboImage'))
        {
            $combo->update([
                'comboImage' => request()->comboImage->store('uploads', 'public'),
            ]);
        }
    }

}
