<?php

namespace App\Http\Controllers;

use App\Mail\MessageGoogle;
use App\User;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    //le formulaire du message
    public function formMessageGoogle(){
        return view('message-google'); 
    }


    //Envoi du mail aux utilisateurs 
    public function sendMessageGoogle(Request $request){

        //Validation de la requete 
        $this->validate($request, ['message' => 'bail|required']); 

        //Récupération des utilisateurs 
        $users = User::all(); 

        //Envoi du mail 
        Mail::to($users)->bcc('uservote3@gmail.com')
                        ->queue(new MessageGoogle($request->all())); 

        return back()->withText("Message envoyé"); 
    }
}
