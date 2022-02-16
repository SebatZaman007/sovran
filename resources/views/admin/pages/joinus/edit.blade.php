@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Joinus Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('joinus.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Joinus Image</label>
                      <input class="form-control" type="file" name="joinus_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->joinus_image)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Joinus Title</label>
                  <input type="text" name="joinus_title_one" value="{{$edit->joinus_title_one}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Joinus Title</label>
                  <input type="text" name="joinus_title_two" value="{{$edit->joinus_title_two}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Joinus Header</label>
                  <input type="text" name="joinus_header" value="{{$edit->joinus_title}}" class="form-control" id="exampleInputEmail1">
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
