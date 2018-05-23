<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{

    public function add(Request $request){
    try{
        $userDetail = $request->all();
        $contactModel = new \App\Contact();

        $contactModel->name = $userDetail['name'];
        $contactModel->email = $userDetail['email'];
        $contactModel->message = $userDetail['message'];
        $contactModel->save();

//        if($contactModel->id){
//            Mail::send('myprofile.email', $retur, function($message,$retur) {
//                $message->to('abhishekgupta00143@gmail.com', 'Abhishek Gupta')
//                    ->subject('My Profile Message | '.$retur['name']);
//            });
//        }

        return $contactModel->id;
        }catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}
