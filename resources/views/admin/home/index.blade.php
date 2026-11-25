@extends('admin.master')


@section('title')
  An architect firm
@endsection


@section('body')
  <!-- Bread crumb and right sidebar toggle -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h4 class="text-themecolor">Dashboard </h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
      <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb justify-content-end">
          <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">Home</a></li>
          {{--                            <li class="breadcrumb-item active">Dashboard </li>--}}
        </ol>

      </div>
    </div>
  </div>

@endsection
