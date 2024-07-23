@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <section class="vh-100" style="background-color: #DCDCDC">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                </div>
                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <section class="intro">
                            <h1 class="mb-5 text-center">JOB POSTING</h1>
                            <form action="{{ route('blog.post') }}" method="POST" class="ms-auto me-auto" style="width: 500px">
                                @csrf

                                <!-- 2 column grid layout with text inputs for company name and email -->
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="company_name">Company Name</label>
                                            <input type="text" id="company_name" name="company_name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Job Description -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="job_description">Job Description</label>
                                    <input type="text" id="job_description" name="job_description" class="form-control" />
                                </div>

                                <!-- Salary / Wages -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="salary_wages">Salary / Wages</label>
                                    <input type="text" id="salary_wages" name="salary_wages" class="form-control" />
                                </div>

                                <!-- Enterprise Domain -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="enterprise_domain">Enterprise Domain</label>
                                    <input type="text" id="enterprise_domain" name="enterprise_domain" class="form-control" />
                                </div>
                                <!-- Enterprise Location -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="enterprise_location">Enterprise Location</label>
                                    <input type="text" id="enterprise_location" name="enterprise_location" class="form-control" />
                                </div>

                                <!-- Company Structure -->
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-8">Company Structure</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="company_structure" />
                                        <div class="small text-muted mt-2">Upload your company image structure or any other relevant file. Max file size 50 MB</div>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-secondary btn-rounded btn-block">POST !</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection