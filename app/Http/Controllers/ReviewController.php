<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;
use App\Models\Contact_Item;
use App\Models\Review;


class ReviewController extends Controller
{
    public function review(Request $request)
    {
        $search_review = Contact_Item::where('value', '=' , $request->value)->first();
        if($search_review)
        {
            return $search_review;
        }
        else
        {
            $add_name = new Contact();
            $add_name->name = $request->name;
            $add_name->save();

            $add_contact_item = new Contact_Item();
            $add_contact_item->contact_item_type = $request->contact_item_type;
            $add_contact_item->value = $request->value;
            $add_contact_item->created_by = $add_name->id;
            $add_contact_item->save();

            $add_review = new Review();
            $add_review->maps_to = $add_contact_item->id;
            $add_review->mapped_id = $add_name->id;
            $add_review->role = $request->role;
            $add_review->rating = $request->rating;
            $add_review->save();

            return redirect('/navbar');
        }   
    }
}
