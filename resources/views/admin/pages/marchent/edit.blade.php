@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Marchent Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('marchent.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Marchent Image</label>
                      <input class="form-control" type="file" name="marchent_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->marchent_image)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Marchent Header</label>
                  <input type="text" name="marchent_header" value="{{$edit->marchent_header}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Marchent Title1</label>
                  <input type="text" name="marchent_title1" value="{{$edit->marchent_title1}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Marchent Title2</label>
                  <input type="text" name="marchent_title2" value="{{$edit->marchent_title2}}" class="form-control" id="exampleInputEmail1">
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
