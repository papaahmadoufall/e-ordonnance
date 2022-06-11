<?php

namespace App\Http\Controllers;

use App\Models\medecine;
use App\Models\presciption;
use Illuminate\Http\Request;

class prescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = presciption::join('medecines', 'presciptions.id', '=', 'medecines.prescription_id')
        ->get(['medecines.*', 'presciptions.id']);
        //
         //$users = User::join('posts', 'users.id', '=', 'posts.user_id')
         //->get(['users.*', 'posts.descrption']);
        //  SELECT `medecines`.*, `presciptions`.`id` from `medecines` inner join `presciptions` on `presciptions`.`id` = `medecines`.`prescription_id`;
       return json_decode($prescriptions);
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
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
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
              $prescription = presciption::with('medecines')->find($id);
        return json_decode($prescription);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

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
        //
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
