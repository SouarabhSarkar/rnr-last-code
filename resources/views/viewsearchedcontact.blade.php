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
<form action="" method="post">
    @csrf
        <div class="wrapper bg-white mt-sm-5">
            <h4 class="pb-4 border-bottom">Searched Contact</h4>
            <!-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                    <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                </div>
            </div> -->
            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6"> <label for="firstname">Full Name</label> 
                        @foreach( $fetch_name as $data)
                            <h4>{{$data->name}}</h4>
                        @endforeach
                     </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="dob">Date of birth</label> 
                        @foreach( $fetch_name as $data)
                            <h4>{{$data->dob}}</h4>
                        @endforeach
                     </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="role">Role</label> 
                        @foreach( $fetch_name as $data)
                            <h4>{{$data->role}}</h4>
                        @endforeach
                     </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="rating">Rating</label> 
                        @foreach( $fetch_rating as $rating)
                            <h4>{{$rating->rating}}</h4>
                        @endforeach
                     </div>
                </div>
                <div class="row py-2">
                        <div class="col-md-6"> <label for="description">Description</label> 
                        @foreach( $fetch_rating as $rating)
                            <h4>{{$rating->rating}}</h4>
                        @endforeach
                            <!-- <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label>
                            <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div> -->
                        </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="email">Email Address</label> 
                    <!-- <input type="text" class="bg-light form-control" id="email" name="email"> </div> -->
                    <!-- <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label>
                    <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div> -->
                </div>
                <!-- <div class="row py-2">
                    <div class="col-md-6"> <label for="country">Country</label> <select name="country" id="country" class="bg-light">
                            <option value="india" selected>India</option>
                            <option value="usa">USA</option>
                            <option value="uk">UK</option>
                            <option value="uae">UAE</option>
                        </select> </div>
                    <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Language</label>
                        <div class="arrow"> <select name="language" id="language" class="bg-light">
                                <option value="english" selected>English</option>
                                <option value="english_us">English (United States)</option>
                                <option value="enguk">English UK</option>
                                <option value="arab">Arabic</option>
                            </select> </div>
                    </div>
                </div> -->
                <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" type="submit">Save Changes</button> <button class="btn border button">Cancel</button> </div>
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