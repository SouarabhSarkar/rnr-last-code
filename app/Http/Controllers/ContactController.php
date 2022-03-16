<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Contact_Item;
use App\Models\User;
use Auth;
use DB;
class ContactController extends Controller
{

    // public function index()
    // {
    //     $contact_item_type = Contact_Item::all();
    //     return view('addcontact',['contact_item_type'=>$contact_item_type]);
    // }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'role' => 'required',
            'contact_item_type' => 'required',
            'value' => 'required'
            
        ]);
       
        $add_contact = new Contact();
        $add_contact->child_of_contact_id = Auth::User()->id;
        $add_contact->name = $request->name;
        $add_contact->dob = $request->dob;
        $add_contact->role = $request->role;
        $add_contact->save();

        $contact_item = new Contact_Item();
        $contact_item->belongs_to = Auth::User()->id;
        $contact_item->contact_item_type = $request->contact_item_type;
        $contact_item->value = $request->value;
        $contact_item->status = $request->status;
        $contact_item->verified_on = $request->verified_on;
        $contact_item->released_on = $request->released_on;
        $contact_item->created_by = $add_contact->id;
        $contact_item->save();
        return redirect('/navbar');
    }

    public function show(Request $request)
    {
        $request->validate([
            'id' => 'required'
            
        ]);

        $id = $request->id;
         //dd($request->all());
        $searchedContact = Contact::where('id', 'LIKE', $id)->get();

        return redirect('viewsearchedcontact');
    }

    public function show_searched_data(Request $request)
    {
        $request->validate([
            'id' => 'required'     
        ]);

        $id = $request->id;

        $existing_contact = Contact::where('id','=',$id)->first();

        return view('viewsearchedcontact',compact('existing_contact'));
    }
    public function fetch_name(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $fetch_name_contact = $request->name;
        $fetch_name = DB::table('contacts')->where('name','=',$fetch_name_contact)->get();
        $fetch_rating = DB::table('reviews')->get();
        // $fetch_name = Contact::where('name','LIKE',$fetch_name_contact)->first();
        $fetch_namearray = [];
        // foreach ($fetch_name as $data){
        //     $fetch_namearray[$data->id] = $data;

         return view('viewsearchedcontact', ['fetch_name'=>$fetch_name,'fetch_rating'=>$fetch_rating]);
    }

}


