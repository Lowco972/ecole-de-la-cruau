<?php

namespace App\Http\Controllers;

use App\Models\Mailler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaillerController extends Controller
{
    public function createConfiguration(Request $request) {

        $configuration  =   Mailler::create([
            "user_id"       =>      Auth::user()->id,
            "driver"        =>      $request->driver,
            "host"          =>      $request->hostName,
            "port"          =>      $request->port,
            "encryption"    =>      $request->encryption,
            "user_name"     =>      $request->userName,
            "password"      =>      $request->password,
            "sender_name"   =>      $request->senderName,
            "sender_email"  =>      $request->senderEmail
        ]);

        if(!is_null($configuration)) {
           return back()->with("success", "Email configuration created.");
        }

        else {
            return back()->with("failed", "Email configuration not created.");
        }
    }
    
    public function composeEmail() {
        return view("email");
    }
}
