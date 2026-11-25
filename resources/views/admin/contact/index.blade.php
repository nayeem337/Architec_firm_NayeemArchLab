@extends('admin.master')

@section('title')
    Contact
@endsection

@section('body')
    <div class="container-fluid py-4" style="background-color: #f9f9f9;"> <!-- Light background -->
        <div class="row justify-content-center mt-4 mb-5">
            <div class="col-12">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-body p-4">

                        <br>

                        <!-- Action Buttons Add Contact Button -->
                        <div class="form-group row mb-4 justify-content-end">
                            <div class="col-auto">
                                <div class="d-flex gap-3">
                                    <!-- Add Contact (only once) -->
                                    <a href="{{route('add.contact')}}" class="btn btn-success text-white">
                                        <i class="fas fa-plus me-1"></i> Add Contact
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Heading -->
                        <h4 class="card-title text-center mb-3" style="font-weight: bold; color: #1e3a8a;">
                            Contact Table
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
                                    <th> Name  </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Message </th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> {{$contact->name}}  </td>
                                        <td> {{$contact->email}} </td>
                                        <td> {{$contact->phone}}  </td>
                                        <td> {!! $contact->message !!} </td>
                                        <td>

                                            <a href="{{ route('contact.edit', ['id' => $contact->id]) }}" class="btn btn-primary btn-sm text-white">
                                                <i class="fas fa-edit me-1"></i> Edit
                                            </a>

                                            <a href="{{ route('contact.delete', ['id' => $contact->id]) }}"
                                               class="btn btn-danger btn-sm text-white"
                                               onclick="return confirm('Are you sure, want to delete this Contact?');">
                                                <i class="fas fa-trash-alt me-1"></i> Delete
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
