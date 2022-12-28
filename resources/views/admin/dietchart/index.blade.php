@extends('layouts.app')

@section('content')
<style>
    .btn {
        margin-top: 2px;
        padding: 0.469rem 0.687rem;
    }
</style>
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Diet chart List</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Diet Chart List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
          @foreach ($dietcombinations as $data)
          <div class="col-sm-12 col-md-4 col-xl-4">
            <div class="card">
              <div class="card-header b-t-success">
                <h5 class="text-center">{{$data->id}}</h5>
              </div>
              <div class="card-body">
                <div class="appointment-table table-responsive">
                  <table class="table table-bordernone">
                    <tbody>
                      <tr class="border-top">
                        <td class="img-content-box"><span class="d-block">Goal</span></td>
                        <td class="text-end">
                          <div class="button btn btn-primary">{{$data->goal}}</div>
                        </td>
                      </tr>
                      <tr class="border-top">
                        <td class="img-content-box"><span class="d-block">Gender</span></td>
                        <td class="text-end">
                          <div class="button btn btn-primary">{{$data->gender}}</div>
                        </td>
                      </tr>
                      <tr class="border-top">
                        <td class="img-content-box"><span class="d-block">Weight</span></td>
                        <td class="text-end">
                          <div class="button btn btn-primary">{{$data->weight}}</div>
                        </td>
                      </tr>
                      <tr class="border-top">
                        <td class="img-content-box"><span class="d-block">Goal Weight</span></td>
                        <td class="text-end">
                          <div class="button btn btn-primary">{{$data->goal_weight}}</div>
                        </td>
                      </tr>
                      <tr class="border-top">
                        <td class="img-content-box"><span class="d-block">Height</span></td>
                        <td class="text-end">
                          <div class="button btn btn-primary">{{$data->height}}</div>
                        </td>
                      </tr>
                      <tr class="border-top border-bottom">
                        <td class="img-content-box"><span class="d-block">Age</span></td>
                        <td class="text-end">
                          <div class="button btn btn-primary">{{$data->age}}</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                  <a class="btn btn-pill btn-success" href="{{ route('dietcharts.edit',$data->id) }}" type="button">Add Diet Chat</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
