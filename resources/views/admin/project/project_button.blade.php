@extends('admin.master')

@section('title')
    Add Project
@endsection

@section('body')

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">  Add a new Project </h4>
                    <hr>
                    <br>

                    <h4 class="text-center text-success"> {{session('message')}} </h4>
                    <form class="form-horizontal p-t-20" action="{{route('new.project')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="category_id" class="col-sm-3 control-label fw-bold">
                                Select Sub Category <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <select name="sub_category_id" id="sub_category_id" class="form-select" required>
                                    <option value="" disabled selected>-- Choose a Sub Category --</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}">{{ $sub_category->sub_category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                        <div class="form-group row justify-content-center">
                            <label for="title" class="col-sm-3 control-label">Title
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title" required />
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Image
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-6">
                           <textarea class="form-control summernote" name="description" id="exampleInputEmail3"
                                     placeholder="Description"></textarea>
                            </div>
                        </div>



                        <div class="form-group row m-b-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    Create New Project
                                </button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection




{{--Start select category get auto Sub Categoty--}}

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#category_id').on('change', function () {
                let categoryId = $(this).val();
                if (categoryId) {
                    $.ajax({
                        url: "{{ url('/get-subcategories') }}/" + categoryId,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#sub_category_id').empty();
                            $('#sub_category_id').append('<option value="" disabled selected>-- Choose a Sub Category --</option>');
                            $.each(data, function (key, value) {
                                $('#sub_category_id').append('<option value="' + value.id + '">' + value.sub_category_name + '</option>');
                            });
                        }
                    });
                }
            });
        });
    </script>
@endpush

{{-- End select category get auto Sub Categoty--}}




















