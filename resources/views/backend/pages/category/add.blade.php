@extends('backend.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Layouts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Category</li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">

                <div class="col-lg-6 offset-md-3">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Category</h5>

                            <!-- Floating Labels Form -->
                            <form action="{{url('/dashboard/insertCate')}}" method="post" class="row g-3">
                                 @csrf  {{--//cross-site-forgacy --}}
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName"
                                        name="cat_name"
                                            placeholder="Item Name">
                                        <label for="floatingName">Category Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="cat_des" placeholder="Item Description" id="floatingTextarea" style="height: 100px;"></textarea>
                                        <label for="floatingTextarea">Category Description</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select name="cat_status" id="" class="form-control">
                                                <option value="">-----Select Status-----</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                            <label for="floatingstatus">Category Status</label>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                            <!-- End floating Labels Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
