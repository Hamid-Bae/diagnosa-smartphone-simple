<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\Problem;
use App\Diagnosis;
use Auth;

class DiagnosesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function deviceUser(Request $request) {
        $device = new Device;
        $device->device = $request->device;
        $device->user_id = Auth::id();

        $device->save();

        return redirect('/question/'.$device->id);
    }

    public function index()
    {
        return view('diag.konsultasi.index');
    }

    public function start($device_id) 
    {
        // dd($device_id);
        $device = Device::find($device_id);
        return view('diag.konsultasi.start', compact('device'));
    }

    public function question($device_id)
    {
        // dd($device_id);
        $device = Device::find($device_id);
        $questions = Problem::all();

        return view('diag.konsultasi.questions')->with('device', $device)->with('questions', $questions);
    }

    public function result(Request $request, $device_id)
    {
        // echo $request->question[0];
        for($i=0; $i<count($request->question); $i++){
            $diagnosis = new Diagnosis;
            $diagnosis->device_id = $device_id;
            $diagnosis->case_id = $request->question[$i];
            $diagnosis->save();
        }

        $device = Device::find($device_id);
        
        return view('diag.konsultasi.hasil', compact('device'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function allResult() {
        $user = Auth::user();

        return view('diag.hasil', compact('user'));
    }


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
