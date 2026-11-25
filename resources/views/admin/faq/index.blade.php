@extends('admin.master')

@section('title')
    About | FAQ
@endsection

@section('body')
    <div class="container-fluid py-4" style="background-color: #f9f9f9;"> <!-- Light background -->
        <div class="row justify-content-center mt-4 mb-5">
            <div class="col-12">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-body p-4">

                        <br>

                        <!-- Action Buttons Add   FAQ   Button -->
                        <div class="form-group row mb-4 justify-content-end">
                            <div class="col-auto">
                                <div class="d-flex gap-3">
                                    <!-- Add   Who FAQ  Button (only once) -->
                                    <a href="{{route('add.about.faq')}}" class="btn btn-success text-white">
                                        <i class="fas fa-plus me-1"></i> Add FAQ
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Heading -->
                        <h4 class="card-title text-center mb-3" style="font-weight: bold; color: #1e3a8a;">
                            FAQ Table
                        </h4>
                        <hr>

                        <!-- Session Message -->
                        @if(Session::get('message'))
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                    @endif

                    <!-- Data Table -->
                        <div class="table-responsive mt-4">
                            <table id="myTable" class="table table-striped table-bordered">
                                <thead class="table-dark">
                                <tr>
                                    <th>SL NO</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($faqs as $faq)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $faq->title }}</td>
                                        <td> {!! $faq->description !!} </td>
                                        <td>
                                            <a href="{{ route('faq.edit', ['id' => $faq->id]) }}" class="btn btn-primary btn-sm text-white">
                                                <i class="fas fa-edit me-1"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-responsive -->



                    </div>  <!-- /.card-body -->
                </div>  <!-- /.card -->
            </div>  <!-- /.col-12 -->
        </div>  <!-- /.row -->
    </div>  <!-- /.container-fluid -->
@endsection
