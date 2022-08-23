
@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>
               Doctor List</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Doctor List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        {{ $doctors }}
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
