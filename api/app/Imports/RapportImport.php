<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Rapport;

class RapportImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Rapport([
            'product_code' => $row['product_code'],
            'user_id' => $row['user_id'],
            'zone_code' => $row['zone_code'],
            'score_skinbiosense' => $row['score_skinbiosense'],
            'session_id' => $row['session_id'],
            'mesure' => $row['mesure']
        ]);
    }
}
