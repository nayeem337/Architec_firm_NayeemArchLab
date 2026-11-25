@extends('admin.master')

@section('title')
    Update Contact
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"> Update Contact </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{route('contact.update', $contact->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf



                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Name
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="name" value="{{$contact->name}}" id="name" class="form-control" placeholder="Name" required />
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Email
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="email" name="email" value="{{$contact->email}}" id="email" class="form-control" placeholder="Email" required />
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Phone Number
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="number" name="phone" value="{{$contact->phone}}" id="phone" class="form-control" placeholder="Phone Number" required />
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Message
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <textarea type="text" name="message" id="message" class="form-control summernote" placeholder="Message" required> {{$contact->message}} </textarea>
                            </div>
                        </div>



                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Update Contact
                                </button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection


