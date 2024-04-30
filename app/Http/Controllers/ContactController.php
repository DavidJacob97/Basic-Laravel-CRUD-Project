<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(Request $request){
        $contact = Contact::all();
        return view('Welcome')->with("contact", $contact);
    }

    public function add(){

        return view('contacts.add');
    }

    public function create(Request $request){

        $contact = new Contact();
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->name = $request->name;

        $contact->save();
        return redirect()->back()->with("success","Contact Added");
    }

    public function delete(Request $request){

        $contact = Contact::find($request->id);
        $contact->delete();
        return redirect()->back()->with("success","Contact" . $contact->id . " Deleted");
    }

    public function edit($id){

        $contact = Contact::find($id);
        return view('contacts.edit')->with("contact", $contact);
    }

    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $contact->update([

            'name' => $request->name,
            'phone'=> $request->phone,
            'email' => $request->email

        ]);

        return redirect('/');

    }

    // public function update(Request $request){
    //     $contact = Contact::find($request->id);
    //     $contact->update([

    //         'name' => $request->name,
    //         'phone'=> $request->phone,
    //         'email' => $request->email

    //     ]);

    //     //return redirect()->back()->with('success','Contact' . $contact->id . ' Successfully Edited');
    //     return view('contacts.add');
    //     // return redirect('/');

    // }
}
