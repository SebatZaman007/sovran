@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Shoppingcoin Form </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('shoppingcoin.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Shoppingcoin Image</label>
                      <input class="form-control" type="file" name="shoppingcoin_image" id="formFileMultiple" multiple>
                    </div>
              </div>
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Shoppingcoin Header</label>
                      <input class="form-control" type="text" name="shoppingcoin_header" id="formFileMultiple" multiple>
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
