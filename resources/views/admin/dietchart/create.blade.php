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
            <h3>
               Diet Chart</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Diet Chart Create</li>
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


              <form class="form theme-form" action="{{ route('dietcharts.store') }}" method="POST">
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
                        <h4 class="form-label" for="dietcombination_id">Combination</h4>
                        <label class="form-label" for="dietcombination_id">Goal, Gender, Weight, Goal Weight, Height, Age</label>
                        <select class="form-select input-air-primary digits" id="dietcombination_id" name="dietcombination_id">
                            @foreach ($dietcombinations as $data)
                                <option value="{{ $data->id }}">{{$data->goal}},{{$data->gender}},{{$data->weight}}, {{$data->goal_weight}}, {{$data->height}}, {{$data->age}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3" id="dietBox">
                        <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Add&nbsp;</button></th>
                        {{-- ...................  --}}
                      </div>
                    </div>
                  </div>

                  {{-- <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="gender">Gender select</label>
                        <select class="form-select input-air-primary digits" id="gender" name="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                  </div> --}}
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

<script src="{{ asset('public/backend/custom/jquery-latest.js') }}"></script>

<script>


$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $("#dietBox").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<div class="row mt-2"><div class="col"><div class="mb-3"><input class="form-control" type="text" name="days[]" value="Day " required> <textarea class="form-control mt-2" name="charts[]" placeholder="Write diet chart" require></textarea></div></div></div><button type="button" class="btn btn-danger remove"><i class="fa fa-trash"></i></button>'
}


</script>
@endsection
