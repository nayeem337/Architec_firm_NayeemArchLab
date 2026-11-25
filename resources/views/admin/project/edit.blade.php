@extends('admin.master')

@section('title')
    Update Project
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"> Update Project </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{route('Project.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf






{{--                        <div class="form-group row justify-content-center">--}}
{{--                            <label for="category_id" class="col-sm-3 control-label fw-bold">--}}
{{--                                Select Category <span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <select name="category_id" id="category_id" class="form-select" required>--}}
{{--                                    <option value="" disabled selected>-- Choose a Category --</option>--}}
{{--                                    @foreach($categories as $category)--}}
{{--                                        <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row justify-content-center">--}}
{{--                            <label for="category_id" class="col-sm-3 control-label fw-bold">--}}
{{--                                Select Sub Category <span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <select name="sub_category_id" id="sub_category_id" class="form-select" required>--}}
{{--                                    <option value="" disabled selected>-- Choose a Sub Category --</option>--}}
{{--                                    @foreach($sub_categories as $sub_category)--}}
{{--                                        <option value="{{ $sub_category->id }}">{{ $sub_category->sub_category_name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}








                        <!-- Category Dropdown show automatic Category -->
                            <div class="form-group row justify-content-center">
                                <label for="category_id" class="col-sm-3 control-label fw-bold">
                                    Select Category <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <select name="category_id" id="category_id" class="form-select" required>
                                        <option value="" disabled>-- Choose a Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $project->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Sub Category Dropdown show automatic Sub Category -->
                            <div class="form-group row justify-content-center">
                                <label for="sub_category_id" class="col-sm-3 control-label fw-bold">
                                    Select Sub Category <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <select name="sub_category_id" id="sub_category_id" class="form-select" required>
                                        <option value="" disabled>-- Choose a Sub Category --</option>
                                        @foreach($sub_categories as $sub_category)
                                            <option value="{{ $sub_category->id }}" {{ $sub_category->id == $project->sub_category_id ? 'selected' : '' }}>
                                                {{ $sub_category->sub_category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>





                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="title"  value="{{$project->title}}" id="title" class="form-control" placeholder="Title" required />
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                                <img src="{{ asset($project->image) }}" alt="Slider Image" height="50" width="80">
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                           <textarea class="form-control summernote" name="description" id="exampleInputEmail3" placeholder="Description"> {{$project->description}} </textarea>
                            </div>
                        </div>



                        {{--                        <div class="form-group row justify-content-center">--}}
                        {{--                            <label for="sub_category_name" class="col-sm-3 control-label">--}}
                        {{--                                Sub Category Name <span class="text-danger">*</span>--}}
                        {{--                            </label>--}}
                        {{--                            <div class="col-sm-6">--}}
                        {{--                                <input type="text" name="sub_category_name" id="sub_category_name" class="form-control" placeholder="Sub Category Name" required />--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}



                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Update New Project
                                </button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

























