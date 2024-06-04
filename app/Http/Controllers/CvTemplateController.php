<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvTemplateController extends Controller
{
    public function download(Request $request){
        $template_number = $request -> query('t_number',"00");

        return view("cv_templates.template_{$template_number}",['route'=>$request->fullUrl()]);
    }
}
