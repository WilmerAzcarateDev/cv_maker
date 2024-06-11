<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class CvTemplateController extends Controller
{
    public function template(Request $request)
    {
        $template_number = $request->query('t_number', "00");

        return view("cv_templates.template_{$template_number}", ['route' => $request->fullUrl()]);
    }

    public function save(Request $request)
    {
        $template_number = $request->query('t_number', "00");

        return Pdf::view("cv_templates.template_{$template_number}",['route' => $request->fullUrl()])
            ->format('a4')
            ->name('invoice.pdf');
    }
}
