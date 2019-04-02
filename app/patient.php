<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //
	protected $fillable=['patient_id','patient_name','patient_e-mail','patient_address','patient_phNo','patient_father_name','patient_blood_type','patient_user_name','patient_password'];

	public static $rules=[
		'patient_id'   => 'required|min:4',
		'patient_name'   => 'required|min:4',
		'patient_e-mail'   => 'required|min:4',
		'patient_address'=>'required|min:4',
		'patient_phNo'   => 'required|min:4',
		'patient_father_name'   => 'required|min:4',
		'patient_blood_type'   => 'required|min:4',
		'patient_user_name'   => 'required|min:4',
		'patient_password'   => 'required|min:4',
		
	];
}
