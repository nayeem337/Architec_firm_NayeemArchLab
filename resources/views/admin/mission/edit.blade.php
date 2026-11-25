@extends('admin.master')

@section('title')
    Update About| Mission
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"> Update Mission </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{ route('mission.update', $mission->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <textarea class="form-control summernote" name="description" id="exampleInputEmail3" placeholder="Description"> {{$mission->description}} </textarea>
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                                <img src="{{$mission->image}}" alt="" height="100" width="200">
                            </div>
                        </div>


                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Update Mission
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection


