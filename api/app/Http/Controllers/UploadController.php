<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class UploadController extends Controller
{
    public function __invoke(Request $request) {
        try {
            $path = Storage::disk('local')->put(Carbon::now()->timestamp(), $request->file('excel-import'));
            Excel::import(new BaseImport, $path);
            return response()->json([
                "statusCode" => 200,
                "message" => "File successfully uploaded & imported"
            ]);
        } catch (\Throwable $throwable) {
            return response(status: 500)->json([
                "statusCode" => 500,
                "message" => $throwable->getMessage()
            ]);
        }
    }
}
