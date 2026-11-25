@extends('admin.master')

@section('title')
   Update Category
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center"> Update Category </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Name
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="name" value="{{$category->name}}" id="name" class="form-control" placeholder="Category Name" required />
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Update Category
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection


