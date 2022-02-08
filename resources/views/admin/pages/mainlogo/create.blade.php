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
            <form action="{{route('mainlogo.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Mainlogo Image</label>
                      <input class="form-control" type="file" name="mainlogo_image" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mainlogo Name</label>
                  <input type="text" name="mainlogo_name" class="form-control" id="exampleInputEmail1">
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
