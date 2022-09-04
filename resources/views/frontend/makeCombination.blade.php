@extends('frontend.include.app')

@section('content')
<div class="pt-5"></div>
<div class="row p-3">
    <div class="col-sm-12">
      <div class="card p-5">
        <div class="card-header">
          <h5>Form Wizard And Validation</h5><span>Validation Step Form Wizard</span>
        </div>
        <div class="card-body">
          <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step"><a class="btn btn-primary" href="#step-1">1</a>
                <p>Step 1</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-2">2</a>
                <p>Step 2</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-3">3</a>
                <p>Step 3</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">4</a>
                <p>Step 4</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-6">6</a>
                <p>Step 6</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-7">7</a>
                <p>Step 7</p>
              </div>
              <div class="stepwizard-step"><a class="btn btn-light" href="#step-8">8</a>
                <p>Step 8</p>
              </div>
            </div>
          </div>
          {{-- `goal`, `gender`, `weight`, `goal_weight`, `height`, `age`, `status`, --}}
          <form action="#" method="POST">
            <div class="setup-content" id="step-1">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="control-label">First Name</label>
                    <input class="form-control" type="text" placeholder="Johan" required="required">
                  </div>
                  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
              </div>
            </div>
            <div class="setup-content" id="step-2">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" placeholder="name@example.com" required="required">
                  </div>
                  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
              </div>
            </div>
            <div class="setup-content" id="step-3">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="control-label">Birth date</label>
                    <input class="form-control" type="date" required="required">
                  </div>
                  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
              </div>
            </div>
            <div class="setup-content" id="step-4">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="control-label">City</label>
                    <input class="form-control mt-1" type="text" placeholder="City" required="required">
                  </div>
                  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
              </div>
            </div>
            <div class="setup-content" id="step-6">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="control-label">City</label>
                    <input class="form-control mt-1" type="text" placeholder="City" required="required">
                  </div>

                  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
              </div>
            </div>
            <div class="setup-content" id="step-7">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="control-label">State</label>
                    <input class="form-control mt-1" type="text" placeholder="State" required="required">
                  </div>
                  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
              </div>
            </div>
            <div class="setup-content" id="step-8">
              <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="control-label">City</label>
                    <input class="form-control mt-1" type="text" placeholder="City" required="required">
                  </div>
                  <button class="btn btn-success pull-right" type="submit">Finish!</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
