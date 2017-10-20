<?php

namespace Quimgc\Incidences\Http\Controllers;

use Illuminate\Http\Request;

class IncidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //CRUD -> Retrieve --> List
        //BREAD -> Browse Read Edit Add Delete
        $incidences = Incidence::All();
        return view('incidences::list_events',compact('incidences'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function show(Incidence $incidence){


        return view('show_incident',compact('incidence'));

    }
    public function show2($id)
    {
        dump($id);
        dump($incidence = Incidence::find($id));


        $incidence = Incidence::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidence $incidence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidence $incidence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidence $incidence)
    {
        //
    }
}
