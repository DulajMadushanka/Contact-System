<?php

namespace App\Http\Controllers;
use App\Contacts;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addContact(Request $request){
        $contacts = new Contacts();
        $contacts->name = $request->input('name');
        $contacts->mobile = $request->input('mobile');
        $contacts->address = $request->input('address');
        $contacts->save();
        return response()->json(['message'=>$contacts],201);
    }

    public function getContact(){
        $contacts = Contacts::all();
        return response()->json(['contacts'=>$contacts],200);
    }

    public function getContacts($id){
        $contacts = Contacts::find($id);
        $response = [
            'contacts'=>$contacts
        ];
        return response()->json( $response ,200);
    }

    public function deleteContact($id){
        $contacts = Contacts::find($id);
        if(!$contacts){
            return response()->json(['msg'=>"Contact not found"],404); 
        }
        else{
            $contacts->delete();
            return response()->json(['msg'=>"Contact successfully deleted"],201); 
        }   
    }

    public function editContact(Request $request,$id){
        $contacts = Contacts::find($id);
        if(!$contacts){
            return response()->json(['msg'=>"Contact not found"],404); 
        }
        else{
            $contacts->name = $request->input('name');
            $contacts->mobile = $request->input('mobile');
            $contacts->address = $request->input('address');
            $contacts->save();
            return response()->json(['message'=>$contacts],201);
        }
    }
}
