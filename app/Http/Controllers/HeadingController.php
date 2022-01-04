<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $heading = \App\Models\Heading::all();
        return view('/', compact('heading'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Heading::class);
        $heading = new Heading();
//        return view('/', compact('heading'));
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
        $heading = Heading::create($this->validateRequest());
//        return redirect('/');
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function show(Heading $heading)
    {
        return view('/', compact('heading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function edit(Heading $heading)
    {
        $this->authorize('update', Heading::class);
        return view('headings.edit', compact('heading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heading $heading)
    {
        $heading->update($this->validateRequest());
        return redirect(url()->previous())->with('message', 'Your Page Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Heading  $heading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heading $heading)
    {
        $heading->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'headingName' => 'required',
            'headingSection' => 'required',
            'title' => 'nullable',
            'head1' => 'nullable',
            'head2' => 'nullable',
            'head3' => 'nullable',
            'head4' => 'nullable',
        ]);
    }

}
