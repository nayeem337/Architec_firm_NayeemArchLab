@extends('admin.master')

@section('title')
    Add Setting
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"> Update Setting </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <label for="exampleInputuname3" class="col-sm-3 control-label"> Site title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="site_title" value="{{$setting->site_title}}" id="exampleInputuname3"
                                       placeholder="Site Title"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Logo
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="file" name="logo" id="input-file-now" class="dropify" />
                                <img src="{{asset($setting->logo)}}" alt="" height="100" width="200">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Address
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                           <textarea class="form-control" name="address" id="exampleInputEmail3" placeholder="Address"> {{$setting->address}} </textarea>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Phone Number
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="number" name="phone" value="{{$setting->phone}}" class="form-control" id="exampleInputEmail3"
                                           placeholder="Phone Number ">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Email
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="email" name="email" value="{{$setting->email}}" class="form-control" id="exampleInputEmail3"
                                           placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Update Setting
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection


