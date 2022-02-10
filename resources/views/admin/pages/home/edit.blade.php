@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Logo Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('home.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Home Name</label>
                      <input class="form-control" type="text" name="home_name1" value="{{$edit->home_name1}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Home Name</label>
                      <input class="form-control" type="text" name="home_name2" value="{{$edit->home_name2}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Home Name</label>
                      <input class="form-control" type="text" name="home_name3" value="{{$edit->home_name3}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Home Name</label>
                      <input class="form-control" type="text" name="home_name4" value="{{$edit->home_name4}}" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Home Description</label>
                  <input type="text" name="home_description" value="{{$edit->home_description}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Home Image</label>
                  <input type="file" name="home_image" class="form-control" id="exampleInputEmail1">
                  <img src="{{asset(BlogImage().$edit->home_image)}}" width="70px" height="70px" alt="img">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>

@endsection
