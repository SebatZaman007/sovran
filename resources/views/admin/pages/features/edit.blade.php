@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Features Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('features.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Features Image</label>
                      <input class="form-control" type="file" name="features_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->features_image)}}" width="70px" height="70px" alt="img">
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Features pera</label>
                      <input class="form-control" type="text" name="features_header" value="{{$edit->features_header}}" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Features pera</label>
                      <input class="form-control" type="text" name="features_pera" value="{{$edit->features_pera}}" id="formFileMultiple" multiple>
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
