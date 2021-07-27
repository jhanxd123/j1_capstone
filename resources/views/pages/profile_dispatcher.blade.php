@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $dashbTitle }}</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="col-md-12">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-warning">
        <h3 class="widget-user-username">Khaby Lame</h3>
        <h5 class="widget-user-desc">Dispatcher</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="img/admin_user/khabby2.png" alt="User Avatar">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-6 border-right">
            <div class="description-block">
              <h5 class="description-header">ID Number</h5>
              <span class="description-text">xxxxxxx</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-6 border-right">
            <div class="description-block">
              <h5 class="description-header">Route</h5>
              <span class="description-text">Valencia</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div><!-- /.col -->

<div class="row">
    <div class="col-md-6">
        {{-- Form --}}
        <form action="">
            <div class="card card-warning card-outline">
                <div class="card-header">
                    <h3 class="card-title">Add Dispatcher</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div> <!--/.card tools-->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="fullname">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <br>
                    <label><sup>Personal Information</sup></label>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="number" class="form-control" id="name" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-6">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <h5 class="card-title">To be determined</h5>
        
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div> <!--/.card tools-->
            </div>
        
            <div class="card-body">
              <h6 class="card-title">TBD</h6>
        
              <p class="card-text">TBD</p>
              {{-- <a href="#" class="btn btn-primary">Add It</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection