@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Footerleft Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('footerleft.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Footerleft Image</label>
                      <input class="form-control" type="file" name="footerleft_image" id="formFileMultiple" multiple>
                    </div>
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Footerleft title</label>
                      <input class="form-control" type="text" name="footerleft_title" id="formFileMultiple" multiple>
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
