<?php

namespace App\Http\Controllers;

use App\Imports\Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataImportController extends Controller
{
    public function upload(Request $request)
    {
        // $request->validate([
        //     'file' => 'required|mimes:xlsx,xls|max:2048'
        // ]);

        // $file = $request->file('file');

            // Excel::import(new Import, $file);

            (new Import)->import($request->file('file'));

            return redirect()->back()->with('success', 'Data imported successfully');
    }
}
