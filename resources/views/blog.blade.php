@extends('layout')
@section('title','blog')
@section('content')
<!DOCTYPE html>
<html>
<head>
<section class="vh-100" style="background-color: #DCDCDC">

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
    
      </div>

     
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
<section class="intro">
  

<h1 class="mb-5 text-center">JOB POSTING</h1>
<form action="{{route('blog.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
            @csrf

                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="form6Example1">Company name</label>
                        <input type="text" id="company name" class="form-control" />
                        
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="form6Example2">Email</label>
                        <input type="text" id="email" class="form-control" />
                        
                      </div>
                    </div>
                  </div>

                  <!-- Text input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example3">Job Description</label>
                    <input type="text" id="password" class="form-control" />
                    
                  </div>

                  <!-- Text input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example4">Salary / Wages</label>
                    <input type="text" id="company location" class="form-control" />
                    
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example5">Enterprise Domain </label>
                    <input type="email" id="representative name" class="form-control" />
                    
                  </div>

                
                  <!-- Message input -->
                 <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="form6Example2">Enterprise Location</label>
                        <input type="text" id="representative address" class="form-control" />
                        
                      </div> 
                      <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Company Structure</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">Upload your company image structure or any other relevant file. Max file
                  size 50 MB</div>

              </div>
            </div>

                     <br>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">POST !</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
@endsection
