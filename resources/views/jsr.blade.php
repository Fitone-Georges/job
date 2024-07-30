@extends('layout')
@section('title','jsr')
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
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <section class="intro">
              <h1 class="mb-5 text-center">REGISTRATION FORM</h1>
              <form action="{{route('jsr.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
                @csrf
                <div class="row">
                  <div class="col-12 col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="name">Name</label>
                      <input type="text" id="name" name="name" class="form-control" />
                    </div>
                  </div>
                  <div class="col-12 col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="first_name">First Name</label>
                      <input type="text" id="first_name" name="first_name" class="form-control" />
                    </div>
                  </div>
                </div>
                <!-- bcrypt input -->
                <div class="form-outline">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="text" id="email" name="email"  class="form-control" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="tel">Tel</label>
                  <input type="text" id="tel" name="tel" class="form-control" />
                </div>
                <div class="col-12 col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="speciality">Speciality</label>
                    <input type="text" id="speciality" name="speciality" class="form-control" />
                  </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="date_of_birth">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" />
                  </div>
                  <br>
                  <br>
                <button type="submit" class="btn btn-secondary btn-rounded btn-block" >Submit</button>
                
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection