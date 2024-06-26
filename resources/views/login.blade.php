@extends('layout')
@section('title','login')
@section('content')
<section class="vh-100" style="background-color: white">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-6">
        <div>
          <div class="row g-0">
              <div class="card-body p-4 p-lg-5 text-black">

                <form style="text-align: center;">

                  <div class="align-items-center mb-5 pb-1">
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Please login into <br> your Account</h5>

                  <div data-mdb-input-init class="form-outline mb-4" >
                    <input type="email" class="form-control" id="password" name="email" placeholder="Email" style="background-color: #d9d9d9;border-radius: 8px; text-align: center;"> 
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="background-color: #d9d9d9;border-radius: 8px; text-align: center;">
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block" type="button" style="background-color: #c63b3b;border-radius: 8px">Login</button>
                  </div>

                  <p class="mb-5 mt-5 pb-lg-2">Don't have an account?
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block" type="button" style="background-color: #c63b3b;border-radius: 8px; margin-left: 6%">Create</button>
                  </p>

                </form>

              </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>@endsection