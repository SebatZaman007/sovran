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
            <form action="{{route('videoarea.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Videoarea Name</label>
                      <input class="form-control" type="text" name="videoarea_name" value="{{$edit->videoarea_name}}" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Videoarea Description</label>
                  <input type="text" name="videoarea_description" value="{{$edit->videoarea_description}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Videoarea Pera</label>
                  <input type="text" name="videoarea_pera" value="{{$edit->videoarea_pera}}" class="form-control" id="exampleInputEmail1">
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
