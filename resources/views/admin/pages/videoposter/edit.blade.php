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
            <form action="{{route('videoposter.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Videoposter Image</label>
                      <input class="form-control" type="file" name="videoposter_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->videoposter_image)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Videoposter Description</label>
                  <input type="text" name="videoposter_description" value="{{$edit->videoposter_description}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Videoposter Videolink</label>
                  <input type="text" name="videoposter_videolink" value="{{$edit->videoposter_videolink}}" class="form-control" id="exampleInputEmail1">
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
