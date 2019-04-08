<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
     protected $fillable=['id','patient_name','patient_email','patient_address','patient_phNo','patient_father_name','patient_blood_type','patient_user_name','patient_password'];

	public static $rules=[
		'id'=> 'required|min:4',
		'patient_name'   => 'required|min:4',
		'patient_email'   => 'required|min:4',
		'patient_address'=>'required|min:4',
		'patient_phNo'   => 'required|min:4',
		'patient_father_name'   => 'required|min:4',
		'patient_blood_type'   => 'required|min:2',
		'patient_user_name'   => 'required|min:4',
		'patient_password'   => 'required|min:4',
	];
}

           

    