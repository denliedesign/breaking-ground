<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $program = \App\Models\Program::all();
        return view('programs.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Program::class);
        $program = new Program();
        return view('programs.create', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $program = Program::create($this->validateRequest());
        $this->storeImage($program);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return view('programs.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $this->authorize('update', Program::class);
        return view('programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $program->update($this->validateRequest());
        $this->storeImage($program);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect('/');
    }

    private function validateRequest()
    {
        return request()->validate([
            'category' => 'required',
            'programImage' => 'nullable|file|image|max:200000',
            'programTitle' => 'required',
            'programAge' => 'required',
            'programBanner' => 'nullable|file|image|max:200000',
//            'programVideo' => 'nullable|file|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|max:200000',
            'programVideo' => 'nullable',
            'programDescription' => 'required',

        ]);
    }

    private function storeImage($program)
    {
        if (request()->has('programImage'))
        {
            $program->update([
                'programImage' => request()->programImage->store('uploads', 'public'),
            ]);
        }

        if (request()->has('programBanner'))
        {
            $program->update([
                'programBanner' => request()->programBanner->store('uploads', 'public'),
            ]);
        }

//        if (request()->has('programVideo'))
//        {
//            $program->update([
//                'programVideo' => request()->programVideo->store('uploads', 'public'),
//            ]);
//        }

    }

}
