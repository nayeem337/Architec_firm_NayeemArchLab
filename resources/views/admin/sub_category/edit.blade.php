@extends('admin.master')

@section('title')
    Update Sub Category
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"> Update Sub Category </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{route('sub-category.update', $sub_category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row justify-content-center">
                            <label for="category_id" class="col-sm-3 control-label fw-bold">
                                Select Category <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <select name="category_id" id="category_id" class="form-select" required>
                                    <option value="" disabled selected>-- Choose a Category --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="sub_category_name" class="col-sm-3 control-label">
                                Sub Category Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="sub_category_name" value="{{$sub_category->sub_category_name}}" id="sub_category_name" class="form-control" placeholder="Sub Category Name" required />
                            </div>
                        </div>


                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Update Sub Category
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

