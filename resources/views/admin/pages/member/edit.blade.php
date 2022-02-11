@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Member Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('member.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Member Image</label>
                      <input class="form-control" type="file" name="member_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->member_image)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Member Header</label>
                  <input type="text" name="member_header" value="{{$edit->member_header}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Member Title1</label>
                  <input type="text" name="member_title1" value="{{$edit->member_title1}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Member Title2</label>
                  <input type="text" name="member_title2" value="{{$edit->member_title2}}" class="form-control" id="exampleInputEmail1">
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
