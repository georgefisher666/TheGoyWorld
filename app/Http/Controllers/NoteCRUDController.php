<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['note'] = Note::orderBy('id', 'desc')->paginate();
        return view('notes.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
             
            'content' => 'required',
        ]);
        $note = new Note;
        $note->title = '';
        $note->content = $request->content;
        $note->color = $request->color;
        $note->save();
         return redirect()->route('notes.index')->with('success', 'Nota creada exitosamente'); 
 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
    
    /*      $data['note'] = Note::orderBy('id', 'desc')->paginate();
       // return view('notes.index', $data);

        return redirect()->route('notes.index')->with('success', 'Company Has Been updated successfully'); */
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $note = Note::find($id);
        $note->id = $id;
        $note->title = $request->title;
        $note->content = $request->content;
        $note->color = $request->color;
        $note->save();
        return redirect()->route('notes.index')->with('success', 'Nota modificada exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')
            ->with('success', 'Company has been deleted successfully');
    }


    public function updateColor(Request $request)
    {
        $request->validate([
            'color' => 'required',
        ]);
        $note = Note::find($request->id);
        $note->id =  $request->id;
        $note->color = $request->color;
        $note->save();
        return redirect()->route('notes.index')
            ->with('success', 'Company Has Been updated successfully');
    }
}
