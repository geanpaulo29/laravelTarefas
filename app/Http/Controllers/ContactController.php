<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }

    public function store(){
        $contact = new Contact();
        $contact->name = Crypt::encryptString("Matheus Henrique");
        $contact->email = Crypt::encryptString("matheussout@gmail.com");
        $contact->telefone = "(42) 3123-3213";
        $contact->data_nascimento = "1995-10-10";
        $contact->save();
    }
    public function update(){
        $contact = Contact::where('name','Matheus Henrique')->first();
        $contact->name = "Carlos";
        $contact->email = "carlos@gmail.com";
        $contact->save();
    }
    public function destroy($id){
    $contact = Contact::find($id);
    $contact->delete();
    }
}
