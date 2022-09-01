<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\PDF;
use App\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturePDFController extends Controller
{
    function index()
    {
        $facture = $this->get_facture();
        return view('facturePDF')->with('facture',
        $facture);
    }
    function get_facture()
    {
        $facture = DB::table('facture')
                          ->limit(10) 
                          ->get();
        return $facture;                  
    }
    function pdf()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
        convert_facture_to_html());
    }
    function convert_facture_to_html()
    {
        $facture = $this->get_facture();
        $output = '

        ';
    }  
}
