@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Comingsoon Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('comingsoon.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Comingsoon Title-1</label>
                      <input class="form-control" type="text" name="comingsoon_title_one" value="{{$edit->comingsoon_title_one}}" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Comingsoon Title-2</label>
                  <input type="text" name="comingsoon_title_two" value="{{$edit->comingsoon_title_two}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Comingsoon Title-3</label>
                  <input type="text" name="comingsoon_title_three" value="{{$edit->comingsoon_title_three}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Comingsoon Image</label>
                  <input type="file" name="comingsoon_image" class="form-control" id="exampleInputEmail1">
                  <img src="{{asset(BlogImage().$edit->comingsoon_image)}}" width="70px" height="70px" alt="img">
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
