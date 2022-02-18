@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Footerlink Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('footerlink.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Footerlink Icon</label>
                      <input class="form-control" type="text" name="footerlink_icon" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Footerlink Link</label>
                      <input class="form-control" type="text" name="footerlink_link" id="formFileMultiple" multiple>
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
