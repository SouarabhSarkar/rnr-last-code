@extends('layouts.dashboard')

@section('content')
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Searched Result</h2>
                    <form action ="/showsearchedcontact" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">email</label>
                                    @foreach($data as $name)
                                        <input class="input--style-4" type="text" name="email" value = "{{$name->value}}" >
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">status</label>
                                    @foreach($data as $name)
                                        <input class="input--style-4" type="text" name="status" value = "{{$name->status}}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">verified on</label>
                                    @foreach($data as $name)
                                        <input class="input--style-4" type="day"  name="verified_on" value = "{{$name->verified_on}}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">verification status</label>
                                    @foreach($data as $name)
                                        <input class="input--style-4" type="text"  name="verification_status" value = "{{$name->verification_status}}" >
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Role</label>
                                    <input class="input--style-4" name="role" placeholder="enter role">
                                </div>
                            </div>
                        </div> -->
                        <!-- <br>
                        <div class="p-t-15">
                          <button type="submit" name="add" class="btn btn-success">Add Review</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection