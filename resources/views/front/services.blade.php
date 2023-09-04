@extends('front/layout')
@section('page_title','Services')
@section('container')

<section>
    <div class="container p-lg-5 p-3">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="fw-bold fs-2 text-center">
                    Services of DKS Solar
                </p>
                <p class="fw-bold fs-5 text-center">Drop A Message : <a href=""><span>0987654321</span></a></p>
                <div class="card shadow-lg p-lg-5 p-4">
                    <p class="fs-5 text-center mb-2">Or</p>
                    <p class="fs-5 text-center mb-5 fw-bold">Fill this form our team will connect</p>
                    <div class="row mb-3">
                        <div class="form-group mb-3 col-md-6">
                            <label for="" class="form-label fw-bold">Full name <span class="text-end text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="ABC">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="" class="form-label fw-bold">Email <span class="text-end text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="ABC">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="" class="form-label fw-bold">Phone <span class="text-end text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="ABC">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="" class="form-label fw-bold">City <span class="text-end text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="ABC">
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label for="" class="form-label fw-bold">Query <span class="text-end text-danger">*</span></label>
                            <textarea type="text" class="form-control" placeholder="ABC"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection