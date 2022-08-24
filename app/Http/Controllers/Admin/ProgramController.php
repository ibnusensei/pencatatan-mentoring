<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
<<<<<<< HEAD
        return view('admin.programs.index', compact('programs'));
=======
        return view('admin.program.index', compact('programs'));
>>>>>>> b5f7697f9bc2b5b73bf7a77729e3167bce28dc64
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('admin.program.store');
<<<<<<< HEAD
        return view('admin.programs.create', compact('url'));
=======
        return view('admin.program.create', compact('url'));
>>>>>>> b5f7697f9bc2b5b73bf7a77729e3167bce28dc64
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'nullable'
        ]);
<<<<<<< HEAD
=======

>>>>>>> b5f7697f9bc2b5b73bf7a77729e3167bce28dc64
        Program::create($data);
        return redirect()->route('admin.program.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD

        $program = Program::find($id);
        $url = route('admin.program.update', $program->id);
        return view('admin.programs.create', compact('program', 'url'));
=======
        $program = Program::find($id);
        $url = route('admin.program.update', $program->id);
        return view('admin.program.create', compact('program', 'url'));

>>>>>>> b5f7697f9bc2b5b73bf7a77729e3167bce28dc64
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        //
=======
        $data = $request->validate([
            'name' => 'required|string',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'nullable'
        ]);

        $program = Program::find($id);
        $program->update($data);
        return redirect()->route('admin.program.index');
>>>>>>> b5f7697f9bc2b5b73bf7a77729e3167bce28dc64
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
