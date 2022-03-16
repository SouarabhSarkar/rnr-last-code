@extends('layouts.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
</head>
<body>
    <form action="/review" method="post">
        <div class="wrapper bg-white mt-sm-5">
            <h4 class="pb-4 border-bottom">Add Contact Review</h4>
            <!-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                    <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                </div>
            </div> -->
            <div class="py-2">
                <div class="row py-2">
                    <!-- <div class="col-md-6"> <label for="country">Country</label> <select name="country" id="country" class="bg-light">
                            <option value="india" selected>India</option>
                            <option value="usa">USA</option>
                            <option value="uk">UK</option>
                            <option value="uae">UAE</option>
                        </select> </div> -->
                    <div class="col-md-6 pt-md-0 pt-3" id="contact_item_type"> <label for="contact_item_type">Contact Type</label>
                        <div class="arrow"> 
                            <select name="contact_item_type" id="contact_item_type" class="bg-light">
                                <option disabled="disabled" selected="selected">Choose contact type</option>
                                    <option value="email">Email</option>
                                    <option value="phone">Phone</option>
                                    <option value="Aadhar_card">AadharCard</option>
                                    <option value="pan_card">Pancard</option>
                                    <option value="driving_license">Driving License</option>
                             </select>
                        </div>
                    </div>
                    <div class="row-py-2">
                        <div class="col-md-10"> <label for="role">Role</label> 
                        <input type="textarea" class="bg-light form-control" id="role" name="role"> </div>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6"> <label for="firstname">Name</label> 
                    <input type="text" class="bg-light form-control" id="name" name="name"> </div>
                    <div class="col-md-6"> <label for="firstname">Date of birth</label> 
                    <input type="date" class="bg-light form-control" id="dob" name="dob"> </div>
                </div>
                
                <div class="row py-2">
                    <div class="col-md-6"> <label for="email">Email Address</label> 
                    <input type="text" class="bg-light form-control" id="email" name="email"> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label>
                    <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div>

                </div>
                
                <div class="row py-2">
                    <div class="col-md-6"> <label for="rating">Rate The Work</label> 
                    <input type="text" class="bg-light form-control" id="rating" name="rating" min="0" max="5"> </div>
                    <!-- <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label>
                    <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div> -->

                </div>

                <!-- <div class="row-py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="rating">Rate The Work</label>
                    <input type="number" class="bg-light form-control" name="rating" min="0" max="5" > </div>
                </div> -->

                <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" type="submit">Add Review</button> <button class="btn border button">Cancel</button> </div>
                <!-- <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                    <div> <b>Deactivate your account</b>
                        <p>Details about your company account and password</p>
                    </div>
                    <div class="ml-auto"> <button class="btn danger">Deactivate</button> </div>
                </div> -->
            </div>
        </div>
    </form>
</body>
</html>

@endsection