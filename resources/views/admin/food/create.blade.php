@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>
               Food</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Food Create</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h5>Add New Food</h5>
              </div>


              <form class="form theme-form" action="{{ route('foods.store') }}" method="POST">
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
                        <label class="form-label" for="name">Food Name</label>
                        <input class="form-control input-air-primary" id="name" type="text" placeholder="Food Name" name="name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="nutritional_information">Nutritional Information</label>
                        <input class="form-control input-air-primary" id="nutritional_information" type="text" placeholder="2 serving" name="nutritional_information">
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="form-label" for="calories">Calories</label>
                            <input class="form-control input-air-primary" id="calories" type="text" placeholder="68 KG" name="calories">
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="fats">Fats</label>
                            <input class="form-control input-air-primary" id="fats" type="text" placeholder="68 KG" name="fats">
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="carbs">Carbs</label>
                            <input class="form-control input-air-primary" id="carbs" type="text" placeholder="68 KG" name="carbs">
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="protien">Protien</label>
                            <input class="form-control input-air-primary" id="protien" type="text" placeholder="68 KG" name="protien">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
