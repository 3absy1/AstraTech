<?php

use App\Http\Controllers\DataExportController;
use App\Http\Controllers\DataImportController;
use App\Models\ExcelData;
use App\Models\User;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', function () {
    return view('data.index',[
        'exceldata' => ExcelData::all()
    ]);
});

Route::post('/import', [DataImportController::class, 'upload'])->name('import.upload');
Route::get('/export', [DataExportController::class, 'export'])->name('export.data');

