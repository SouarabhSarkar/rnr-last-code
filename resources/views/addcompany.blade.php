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
    <form action="/addcompany" method="post">
        @csrf

            <div class="wrapper bg-white mt-sm-5">
                <h4 class="pb-4 border-bottom">Add Company </h4>
                <!-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                    <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                        <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
                    </div>
                </div> -->
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6"> <label for="name">Company Name</label> 
                        <input type="text" class="bg-light form-control" id="name" name="name"> </div>
                        <div class="col-md-6"> <label for="url">Company URL</label> 
                        <input type="text" class="bg-light form-control" id="url" name="url"> </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6"> <label for="notes">Description</label> 
                            <textarea class="form-control" class="bg-light form-control" id="notes" name="notes" rows="5"> </textarea>
                            <!-- <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label>
                            <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015"> </div> -->
                        </div>
                    </div>

                    <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3" type="submit">Save</button> <button class="btn border button">Cancel</button> </div>

                </div>
            </div>
    </form>
</body>
</html>

@endsection