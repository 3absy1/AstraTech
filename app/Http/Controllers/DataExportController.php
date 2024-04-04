<?php

namespace App\Http\Controllers;

use App\Exports\Export;
use App\Models\ExcelData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataExportController extends Controller
{
    public function export(Request $request)
    {
        $selectedRows = $request->input('selectedRows');

        // Retrieve selected data from the database
        $data = ExcelData::whereIn('id', $selectedRows)->get();

        // Export data to Excel
        return Excel::download(new Export($data), 'data.xlsx');
    }
}
