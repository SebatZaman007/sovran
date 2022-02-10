@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ecommrce Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('ecommrceedgelarge.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Ecommrceedgelarge Title</label>
                      <input class="form-control" type="text" name="ecommrceedgelarge_title" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ecommrceedgelarge Title</label>
                  <input type="text" name="ecommrceedgelarge_pera" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ecommrceedgelarge Link</label>
                  <input type="text" name="ecommrceedgelarge_link" class="form-control" id="exampleInputEmail1">
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
