@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Shoppingcoin Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('privacy.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Privacy Image</label>
                      <input class="form-control" type="file" name="privacy_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->privacy_image)}}" width="70px" height="70px" alt="img">
                    </div>
              </div>
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Privacy Header</label>
                      <input class="form-control" type="text" name="privacy_header" value="{{$edit->privacy_header}}" id="formFileMultiple" multiple>
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
