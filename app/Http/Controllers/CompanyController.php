<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Review;
use App\Models\Contact_Item;
use App\Models\Contact;
use App\Models\Partner;
use Auth;
class CompanyController extends Controller
{

    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->url = $request->url;
        $company->notes = $request->notes;
        $company->created_by = $request->created_by;
        $company->save();

        $contact_item = new Contact_Item();

        $contact = new Contact();

        $review = new Review();
        $review->maps_to = $contact_item->id;
        $review->mapped_id = $request->mapped_id;
        $review->source = $company->id;
        $review->role = $contact->role;
        $review->rating = $request->rating;
        $review->save();


        $add_partner = new Partner();
        $add_partner->Company_id = $company->id;
        $add_partner->user_id = Auth::user()->id;
        $add_partner->key = "RNR";
        $add_partner->status = "1";
        $add_partner->credits_available = 1000;
        $add_partner->save();

        return redirect('/navbar');
    }

    public function show_company_name(Request $request)
    {
        $companies = Company::all();
        return compact('companies');
    }


}
// $add_partner = new Partner();
// $add_partner->Company_id = $add->id;
// $add_partner->user_id = Auth::user()->id;
// $add_partner->key = "RNR";
// $add_partner->status = "1";
// $add_partner->credits_available = 1000;
// $add_partner->save();