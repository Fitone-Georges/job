@extends('layout')
<section class="intro">
  <div class="bg-image-vertical h-100" style="background-color: #EFD3E4;
          background-image: url(https://mdbootstrap.com/img/Photos/new-templates/search-box/img1.jpg);
        ">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="card-body p-5">

                <h1 class="mb-5 text-center">Checkout Form</h1>

                <form>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form6Example1" class="form-control" />
                        <label class="form-label" for="form6Example1">Company name</label>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">Email</label>
                      </div>
                    </div>
                  </div>

                  <!-- Text input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">Password</label>
                  </div>

                  <!-- Text input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example4" class="form-control" />
                    <label class="form-label" for="form6Example4">company Location</label>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form6Example5" class="form-control" />
                    <label class="form-label" for="form6Example5">Representative Name </label>
                  </div>

                
                  <!-- Message input -->
                 <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">Representative Address</label>
                      </div> 
                   <br>
                   <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">Representative Tel</label>
                      </div>
                     <br>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form6Example8"
                      checked
                    />
                    <label class="form-check-label" for="form6Example8"> Create an account? </label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">Submit</button>
                </form>

              </div>
            </div>
          </div>
        </div>s
      </div>
    </div>
  </div>
</section>