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
            <h3>Diet Combination List</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Diet Combination List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="display" id="basic-2">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Goal</th>
                          <th>Gender</th>
                          <th>Weight</th>
                          <th>Goal Weight</th>
                          <th>Height</th>
                          <th>Age</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dietCombinations as $data)
                        <tr>
                          <td>{{$data->id}}</td>
                          <td>{{$data->goal}}</td>
                          <td>{{$data->gender}}</td>
                          <td>{{$data->weight}}</td>
                          <td>{{$data->goal_weight}}</td>
                          <td>{{$data->height}}</td>
                          <td>{{$data->age}}</td>
                          <td>{{$data->status}}</td>
                          <td>
                            <div class="m-b-30">
                                <form action="{{ route('dietcombinations.destroy',$data->id) }}" method="POST">
                                   @csrf
                                   @method('DELETE')

                                    <div class="btn-group">
                                        <a class="btn btn-success btn-sm" href="{{ route('dietcombinations.show',$data->id) }}"><i class="fa fa-eye"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </div>
                                </form>
                              </div>
                              {{-- <a class="btn btn-danger btn-sm" href="{{ route('dietcombinations.destroy',$data->id) }}"><i class="fa fa-trash"></i> Delete</a> --}}

                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
