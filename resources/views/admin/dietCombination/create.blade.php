@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>
               Diet Combination</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Diet Combination Create</li>
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
              <div class="card-header">
                <h5>Create</h5>
              </div>


              <form class="form theme-form" action="{{ route('dietcombinations.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="goal">Goal</label>
                        <select class="form-select input-air-primary digits" id="goal" name="goal">
                            <option value="Loss Weight">Loss Weight</option>
                            <option value="Maintain Weight">Maintain Weight</option>
                            <option value="Build Muscle">Build Muscle</option>
                          </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="gender">Gender select</label>
                        <select class="form-select input-air-primary digits" id="gender" name="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="weight">Weight</label>
                        <input class="form-control input-air-primary" id="weight" type="text" placeholder="80 KG" name="weight">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="goal_weight">Goal Weight</label>
                        <input class="form-control input-air-primary" id="goal_weight" type="text" placeholder="68 KG" name="goal_weight">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="height">Height</label>
                        <input class="form-control input-air-primary" id="height" type="text" placeholder="5.7 feet" name="height">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="age">Age</label>
                        <input class="form-control input-air-primary" id="age" type="text" placeholder="50 years" name="age">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <input class="btn btn-light" type="reset" value="Cancel">
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
