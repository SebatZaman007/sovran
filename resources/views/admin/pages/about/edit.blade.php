@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">About Image</label>
                      <input class="form-control" type="text" name="about_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->about_image)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">About Header</label>
                  <input type="text" name="about_header" value="{{$edit->about_header}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">About  Name1</label>
                  <input type="text" name="about_name1" value="{{$edit->about_name1}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">About  Name2</label>
                  <input type="text" name="about_name2" value="{{$edit->about_name2}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">About  Wedo</label>
                  <input type="text" name="about_whatdowedo" value="{{$edit->about_whatdowedo}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">About Wedopera</label>
                  <input type="text" name="about_whatdowedo_pera" value="{{$edit->about_whatdowedo_pera}}" class="form-control" id="exampleInputEmail1">
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
