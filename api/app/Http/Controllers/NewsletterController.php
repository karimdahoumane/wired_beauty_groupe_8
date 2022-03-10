<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Newsletter\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Request $request) {
        try {
            Newsletter::subscribe($request->email);
            Mail::to($request->email)->send(new NewsletterMail());
            return response()->json([
                'statusCode' => 200,
                "message" => "User successfully subscribed"
            ]);
        }catch (\Throwable $throwable) {
            return response(status: 500)->json([
                'statusCode' => 500,
                "message" => $throwable->getMessage()
            ]);
        }

    }
}
