<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeContact(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|min:3|max:30',
        //     'email' => 'required|email:rfc,dns|min:5|max:50',
        //     'mobile' => 'required|string|digits:10',
        //     'message' => 'required|string|min:5|max:200',
        // ]);

        // if($validator->fails()){
        //     $request->flash();
        //     return redirect()->to('/'.'#contact')->withErrors($validator);
        // }

        // $data =  (object) array();
        // $data->name = $request->get('name');
        // $data->email = $request->get('email');
        // $data->mobile = $request->get('mobile');
        // $data->message = $request->get('message');

        // Mail::to(config('app.mail_to_address'))->send(new Contact($data));

        // if(!Mail::failures()){
        //     session()->flash('success','Message Sent Successfully');
        //     return redirect()->to('/'.'#contact');
        // }
        // else{
        //     return redirect()->route('frontend.index')->with([
        //         "alert-type"=>"error","message" => "Something went wrong. Please contact us via email or phone."
        //     ]);
        // }

        return redirect()->route('frontend.index');


    }
}
