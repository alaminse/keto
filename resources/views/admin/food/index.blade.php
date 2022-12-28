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
            <h3>Food List</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Food List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            @foreach ($foods as $data)
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="name">Food Name</label>
                            <input class="form-control input-air-primary" type="text" value="{{$data->name}}" disabled>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                            <label class="form-label" for="nutritional_information">Nutritional Information</label>
                            <input class="form-control input-air-primary" type="text" value="{{$data->nutritional_information}}" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label" for="calories">Calories</label>
                                <input class="form-control input-air-primary" id="calories" type="text" value="{{$data->calories}}" disabled>
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="fats">Fats</label>
                                <input class="form-control input-air-primary" type="text" value="{{$data->fats}}" disabled>
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="carbs">Carbs</label>
                                <input class="form-control input-air-primary" type="text" value="{{$data->carbs}}" disabled>
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="protien">Protien</label>
                                <input class="form-control input-air-primary" type="text" value="{{$data->protien}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="{{ route('foods.destroy',$data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                         <div class="btn-group">
                             {{-- <a class="btn btn-success btn-sm" href="{{ route('foods.show',$data->id) }}"><i class="fa fa-eye"></i></a> --}}
                             <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                         </div>
                     </form>
                   </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
