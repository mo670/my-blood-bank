<?php

namespace App\Http\Controllers\backend;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function allPatients(){
        
        $allPatients = Patient::orderBy('id','desc')->paginate('10');
        return view('backend.partials.patient.allPatient',compact('allPatients'));
    }

    public function deletePatient($id){

        $data= Patient::findorFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Patient deleted successfully!');
     }
}
