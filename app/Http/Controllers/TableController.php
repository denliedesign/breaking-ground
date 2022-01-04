<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $table = \App\Models\Table::all();
        return view('/', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Table::class);
        $table = new Table();
//        return view('/', compact('table'));
//        return Redirect::to(url()->previous("/"));
        return back()->with('message', 'Your Page Has Been Updated!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $table = Table::create($this->validateRequest());
//        return redirect('/');
//        return Redirect::to(url()->previous("/"));
        return back()->with('message', 'Your Page Has Been Updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        return view('/', compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        $this->authorize('update', Table::class);
        return view('tables.edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        $table->update($this->validateRequest());
        return redirect(url()->previous())->with('message', 'Your Page Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        $table->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'tableName' => 'required',
            'tableSection' => 'required',
            'col1' => 'nullable',
            'col2' => 'nullable',
            'col3' => 'nullable',
            'col4' => 'nullable',
            'position' => 'nullable',
        ]);
    }

}
