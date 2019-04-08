<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()

    {
        $patients=Patient::all();
        return view('patient.index',compact('patients'));
        echo "Index controller is ok!!!";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients=Patient::all();
        return view('patient.create',compact('patients'));
        echo "Create Template controller is oK!!";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());

        Patient::create([
            'patient_name'=>$request->get('patientname'),
            'patient_email'=>$request->get('email'),
            'patient_address'=>$request->get('address'),
            'patient_phNo'=>$request->get('phoneno'),
            'patient_father_name'=>$request->get('fathername'),
            'patient_blood_type'=>$request->get('bloodtype'),
            'patient_user_name'=>$request->get('username'),
            'patient_password'=>$request->get('password'),
        ]);

        return redirect()->route('patients.index')->with('success','Successfully');
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
    public function edit(Patient $patient)
    {
        // var_dump($patient);
        // $patients=Patient::find('$patient');
        $patients = Patient::find($patient->id);     
        return view ('patient.edit',compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Patient  $patient)
    {


       $patients = Patient::find($patient->id);     
       $patients->patient_name=$request->get('patientname');
       $patients->patient_email=$request->get('email');
       $patients->patient_address=$request->get('address');
       $patients->patient_phNo=$request->get('phoneno');
       $patients->patient_father_name=$request->get('fathername');
       $patients->patient_blood_type=$request->get('bloodtype');
       $patients->patient_user_name=$request->get('username');
       $patients->patient_password=$request->get('password');
       $patients->save();


       return redirect()->route('patients.index')->with('success','Successfully');
   }

 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function destroy($patient)
 {

      $patients = Patient::find($patient);
     $patients->delete();

      return redirect()->route('patients.index')->with('success','Successfully');
 }
}
