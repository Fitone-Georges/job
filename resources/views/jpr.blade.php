@extends('layout')
@section('title','jpr')
@section('content')
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          The Best Offers <br />
          <span style="color: hsl(218, 81%, 75%)">For The Best Choice</span>
        </h1>
      </div>

     
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
<section class="intro">
  

                <h1 class="mb-5 text-center">REGISTRATION FORM</h1>

              
        <form action="{{route('jpr.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
            @csrf

                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="Company_name">Company Name</label>
                        <input type="text" id="company_name" name="company_name" class="form-control" />
                        
                      </div>
                    </div>
                    <!-- Email input -->
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" />
                        
                      </div>
                    </div>
                  </div>

                  <!-- password input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                    <input type="password" id="password"  name="password"  class="form-control" />
                    
                  </div>

                  <!-- Text input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="company_location">Company Location</label>
                    <input type="text" id="company_location" name="company_location"  class="form-control" />
                    
                  </div>

                   <!-- Text input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="representative_name">Representative Name </label>
                    <input type="text" id="representative_name"  name="representative_name" class="form-control" />
                    
                  </div>

                
                  <!-- Text input -->
                 <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="representative_address">Representative Address</label>
                        <input type="text" id="representative_address" name="representative_address" class="form-control" />
                        
                      </div> 
                   <br>
                    <!-- Number input -->
                   <div class="col-12 col-md-7 mb-6">
                      <div class="form-outline">
                      <label class="form-label" for="representative_tel">Representative Tel</label>
                        <input type="text" id="representative_tel" name="representative_tel" class="form-control" />
                        
                      </div>
                     <br>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">Submit</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection