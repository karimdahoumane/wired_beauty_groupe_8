<?php

namespace App\Http\Controllers;

use App\Imports\BaseImport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class UploadController extends Controller
{
    public function __invoke(Request $request) {
            $uploadedFile = $request->file('excel');
            $fileName = Carbon::now()->timestamp . '.' . $uploadedFile->getClientOriginalExtension() ;
            if (Storage::disk('local')->put($fileName, $uploadedFile->getContent())) {
                Excel::import(new BaseImport, $fileName, 'local');
                return [
                    "statusCode" => 200,
                    "message" => "File successfully uploaded & imported"
                ];
            }

    }
}
