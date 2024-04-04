<?php

namespace App\Exports;

use App\Models\ExcelData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Export implements FromCollection,WithHeadings
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data->map(function ($item) {
            return [

                'name' => $item->full_name,
                'phone' => $item->phone_number,
                'email' => $item->email,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'name',
            'phone',
            'email',
        ];
    }
    // public function collection()
    // {
    //     return ExcelData::all();
    // }
}
