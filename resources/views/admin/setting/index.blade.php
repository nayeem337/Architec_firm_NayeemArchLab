@extends('admin.master')

@section('title')
    An Architect Firm - Settings
@endsection

@section('body')
    <div class="container-fluid py-4" style="background-color: #f9f9f9;"> <!-- Light background -->
        <div class="row justify-content-center mt-4 mb-5">
            <div class="col-12">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-body p-4">
                        <br>

                    <!-- Action Buttons -->
                        <div class="form-group row mb-4 justify-content-end">
                            <div class="col-auto">
                                <div class="d-flex gap-3">
                                    <!-- Add Setting Button (only once) -->
                                    <a href="{{ route('add.setting') }}" class="btn btn-success text-white">
                                        <i class="fas fa-plus me-1"></i> Add Setting
                                    </a>

                                    <!-- Only show Edit if there is at least one setting -->
                                    @if($settings->isNotEmpty())
                                        <a href="{{ route('setting.edit', ['id' => $settings->first()->id]) }}" class="btn btn-primary text-white">
                                            <i class="fas fa-edit me-1"></i> Edit Setting
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <!-- Heading -->
                        <h4 class="card-title text-center mb-3" style="font-weight: bold; color: #1e3a8a;">
                            Setting Table
                        </h4>
                        <hr>


{{--                        <!-- Session Message -->--}}
{{--                        @if(Session::get('message'))--}}
{{--                            <p class="text-center text-success">{{ Session::get('message') }}</p>--}}
{{--                    @endif--}}




                    <!-- Data Table -->
                        <div class="table-responsive mt-4">
                            <table id="myTable" class="table table-striped table-bordered">
                                <thead class="table-dark">
                                <tr>
                                    <th>SL NO</th>
                                    <th>Site Title</th>
                                    <th>Logo</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($settings as $setting)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $setting->site_title }}</td>
                                        <td>
                                            <img src="{{ asset($setting->logo) }}" alt="Logo" height="50" width="80">
                                        </td>
                                        <td>{{ $setting->address }}</td>
                                        <td>{{ $setting->phone }}</td>
                                        <td>{{ $setting->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-responsive -->

                    </div> <!-- /.card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->


@endsection
