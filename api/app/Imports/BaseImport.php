<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class BaseImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            1 => new RapportImport(),
        ];
    }
}
