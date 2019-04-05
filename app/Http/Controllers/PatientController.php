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
    public function destroy($patient_id)
    {
        return '
            <form method="post" action="'. route('patient.destroy', $patient_id) . '">
                <input type="hidden" name="_method" value="delete" />'. 
                csrf_field() .
                '<button type="submit" class="btn btn-danger" onclick="return myFunction();">Delete</button>
            </form>
        ';
    }
}
