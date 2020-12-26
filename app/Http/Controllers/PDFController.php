<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;
use PDF;

class PDFController extends Controller {
    // Export to PDF
    public function exportPDF() {
        
        $p = Users::all();

        view()->share('p', $p);
        $pdf_doc = PDF::loadView('export_pdf', $p);

        return $pdf_doc->download('usuarios.pdf');
    }    
}