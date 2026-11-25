@extends('admin.master')

@section('title')
    Update Home | Slider
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"> Update Slider </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{route('home.slider.update', $home->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="title_name" value="{{$home->title_name}}" id="title_name" class="form-control" placeholder="Title" required />
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                           <textarea class="form-control summernote" name="description" id="exampleInputEmail3" placeholder="Address"> {{$home->description}} </textarea>
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                                <img src="{{asset($home->image)}}" alt="" height="100" width="200">
                            </div>
                        </div>


                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Update New Slider
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection


