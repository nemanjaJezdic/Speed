<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontendCon extends BaseCon
{
    public function home(){
        return view("frontend.pages.home",$this->data);
    }
    public function contact(){
        return view("frontend.pages.contact",$this->data);
    }
    public function storeContact(Request $request){
        $name = $request->name;
        $number = $request->number;
        $email = $request->email;
        $message = $request->msg;

        $toEmail = "nemanja.jezdic.30.19@ict.edu.rs";
        $body = "<h2>Contact Request</h2>
                <h4>Name</h4><p>{$name}</p>
                <h4>Email</h4><p>{$email}</p>
                <h4>Message</h4><p>{$message}</p>
        ";


        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";


        $headers .= "From: " .$name. "<".$email.">". "\r\n";

        if(mail($toEmail, $number, $body, $headers)){
            return response(['message' => 'Your email has been sent'], Response::HTTP_OK);

        } else {
            return response(['message' => 'Your email was not sent. Try again later'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    public function author(){
        return view("frontend.pages.author",$this->data);
    }

}
