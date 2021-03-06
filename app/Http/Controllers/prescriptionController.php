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
       return view('index', ["prescription"=>$prescriptions] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //store the prescription and the medecines
        $prescription = new presciption();
        $prescription->save();
        $medecines = $request->all();
        
        $medecine = new medecine();
        $medecine->name = $medecine['name'];
        $medecine->posologie = $medecine['posologie'];
        $medecine->quantity = $medecine['quantity'];
        $medecine->prescription_id = $prescription->id;
        $medecine->save();
           
        }
        
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
