@extends('layouts.dashboard')

@section('content')
<form action="/addcontact" method="POST">
  @csrf
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Add Contact</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Value</label>
                                    <input class="input--style-4" type="text" name="value" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Role</label>
                                    <input class="input--style-4" type="text" name="role" class="form-control" placeholder="enter role">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">DOB</label>
                                    <input class="input--style-4" type="date" id="birthday" name="dob">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <label class="label">Contact type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="email">Email</option>
                                    <option value="phone">Phone</option>
                                    <option value="Aadhar_card">AadharCard</option>
                                    <option value="pan_card">Pancard</option>
                                    <option value="driving_license">Driving License</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <br>
                        <div class="p-t-15">
                            <button type="submit" name="add" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection