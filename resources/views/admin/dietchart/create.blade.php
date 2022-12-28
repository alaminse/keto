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
                <h5 class="text-center">Create {{$id}} Combination</h5>
              </div>


              <form class="form theme-form" action="{{ route('dietcharts.store') }}" method="POST">
                @csrf

                <input type="hidden" name="dietcombination_id" value="{{$id}}">

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
                      <div class="mb-3" id="dietBox">
                        <div class="row">
                            <h4 class="text-center"><label class="form-label">Day 1</label></h4>
                            <div class="col-6">
                                <input class="form-control" type="hidden" value="Day 1" name="day[1]['day']">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input class="form-control" type="text" name="day[1]['title']" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea placeholder="Description" class="form-control" name="day[1]['description']" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-4 border">
                                <div class="mb-3">
                                    <h5 class="form-label">Breakfast</h5>
                                    <input class="form-control" type="text" name="day[1]['breakfast']" value="Breackfast">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="form-label">Calories</label>
                                            <input class="form-control" type="text" name="day[1]['b_calories']" placeholder="200">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Fats</label>
                                            <input class="form-control" type="text" name="day[1]['b_fats']" placeholder="20">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Carbs</label>
                                            <input class="form-control" type="text" name="day[1]['b_carbs']" placeholder="50">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Protein</label>
                                            <input class="form-control" type="text" name="day[1]['b_protein']" placeholder="40">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 border">
                                <div class="mb-3">
                                    <h5 class="form-label">Launch</h5>
                                    <input class="form-control" type="text" name="day[1]['launch']" value="Launch">
                                </div>
                                <div class="mb-3 border">
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="form-label">Calories</label>
                                            <input class="form-control" type="text" name="day[1]['l_calories']" placeholder="200">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Fats</label>
                                            <input class="form-control" type="text" name="day[1]['l_fats']" placeholder="20">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Carbs</label>
                                            <input class="form-control" type="text" name="day[1]['l_carbs']" placeholder="50">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Protein</label>
                                            <input class="form-control" type="text" name="day[1]['l_protein']" placeholder="40">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 border">
                                <div class="mb-3">
                                    <h5 class="form-label">Dinner</h5>
                                    <input class="form-control" type="text" name="day[1]['dinner']" value="Dinner">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="form-label">Calories</label>
                                            <input class="form-control" type="text" name="day[1]['d_calories']" placeholder="200">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Fats</label>
                                            <input class="form-control" type="text" name="day[1]['d_fats']" placeholder="20">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Carbs</label>
                                            <input class="form-control" type="text" name="day[1]['d_carbs']" placeholder="50">
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Protein</label>
                                            <input class="form-control" type="text" name="day[1]['d_protein']" placeholder="40">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end">
                    <button id="btnAdd" type="button" class="btn btn-success" data-toggle="tooltip" data-original-title="Add more controls"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Add New Row&nbsp;</button></th>
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

var i = 1;
$("#btnAdd").click(function() {
  ++i;
  $("#dietBox").append('<div><div class="row"><h4 class="text-center"><label class="form-label">Day '+i+'</label></h4><div class="col-6"><input class="form-control" type="hidden" value="Day '+i+'" name="day['+i+'][day]"><div class="mb-3"><label class="form-label">Title</label><input class="form-control" type="text" name="day['+i+'][title]" placeholder="Title"></div></div><div class="col-6"><div class="mb-3"><label class="form-label">Description</label><textarea placeholder="Description" class="form-control" name="day['+i+'][description]" rows="3"></textarea></div></div><div class="col-4 border"><div class="mb-3"><h5 class="form-label">Breakfast</h5><input class="form-control" type="text" name="day['+i+'][breakfast]" value="Breackfast"></div><div class="mb-3"><div class="row"><div class="col-3"><label class="form-label">Calories</label><input class="form-control" type="text" name="day['+i+'][b_calories]" placeholder="200"></div><div class="col-3"><label class="form-label">Fats</label><input class="form-control" type="text" name="day['+i+'][b_fats]" placeholder="20"></div><div class="col-3"><label class="form-label">Carbs</label><input class="form-control" type="text" name="day['+i+'][b_carbs]" placeholder="50"></div><div class="col-3"><label class="form-label">Protein</label><input class="form-control" type="text" name="day['+i+'][b_protein]" placeholder="40"></div></div></div></div><div class="col-4 border"><div class="mb-3"><h5 class="form-label">Launch</h5><input class="form-control" type="text" name="day['+i+'][launch]" value="Launch"></div><div class="mb-3"><div class="row"><div class="col-3"><label class="form-label">Calories</label><input class="form-control" type="text" name="day['+i+'][l_calories]" placeholder="200"></div><div class="col-3"><label class="form-label">Fats</label><input class="form-control" type="text" name="day['+i+'][l_fats]" placeholder="20"></div><div class="col-3"><label class="form-label">Carbs</label><input class="form-control" type="text" name="day['+i+'][l_carbs]" placeholder="50"></div><div class="col-3"><label class="form-label">Protein</label><input class="form-control" type="text" name="day['+i+'][l_protein]" placeholder="40"></div></div></div></div><div class="col-4 border"><div class="mb-3"><h5 class="form-label">Dinner</h5><input class="form-control" type="text" name="day['+i+'][dinner]" value="Dinner"></div><div class="mb-3"><div class="row"><div class="col-3"><label class="form-label">Calories</label><input class="form-control" type="text" name="day['+i+'][d_calories]" placeholder="200"></div><div class="col-3"><label class="form-label">Fats</label><input class="form-control" type="text" name="day['+i+'][d_fats]" placeholder="20"></div><div class="col-3"><label class="form-label">Carbs</label><input class="form-control" type="text" name="day['+i+'][d_carbs]" placeholder="50"></div><div class="col-3"><label class="form-label">Protein</label><input class="form-control" type="text" name="day['+i+'][d_protein]" placeholder="40"></div></div></div></div></div><hr><button type="button" class="btn btn-danger remove"><i class="fa fa-trash"></i></button></div>');
});
$("body").on("click", ".remove", function () {
        $(this).closest("div").remove();
    });
// $(document).on('click', '.remove', function() {
//   $(this).parents('tr').remove();
// });


// $(function () {
//     let $i = 0;
//     $("#btnAdd").bind("click", function () {
//         ++i;
//         var div = $("<div />");
//         div.html(GetDynamicTextBox(""));
//         $("#dietBox").append(div);
//     });
//     $("body").on("click", ".remove", function () {
//         $(this).closest("div").remove();
//     });
// });
// function GetDynamicTextBox(value) {
//     return '<div class="row mt-2"><div class="col"><div class="mb-3"><input class="form-control" type="text" name="days[]" value="Day " required> <textarea class="form-control mt-2" name="charts[]" placeholder="Write diet chart" require></textarea></div></div></div><button type="button" class="btn btn-danger remove"><i class="fa fa-trash"></i></button>'
// }
</script>
@endsection
