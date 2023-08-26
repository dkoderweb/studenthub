<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquriesController extends Controller
{
    public function store(Request $request){
        $inquery = new Inquiry;
        $inquery->institution_name_e = $request->institution_name_e;
        $inquery->program_of_study_e = $request->program_of_study_e;
        $inquery->program_length_e = $request->program_length_e;
        $inquery->duration_of_term_e = $request->duration_of_term_e;
        $inquery->academic_level_area_of_study_e = $request->academic_level_area_of_study_e;
        $inquery->contact = $request->contact;
        $inquery->program_type_e = $request->program_type_e;
        $inquery->name = $request->name;
        $inquery->email = $request->email;
        $inquery->number = $request->number;
        $inquery->state = $request->state;
        $inquery->save();
        return redirect('/course')->with('applyed', 'Thanks for reaching out !');
    }
}
