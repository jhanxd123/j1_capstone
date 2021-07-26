@extends('master.blade.php')

@yield('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ $title }}</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<div class="card card-primary card-outline">
    <div class="card-header">
      <h5 class="m-0">Dispatcher</h5>
    </div>
    <div class="card-body">
      <h6 class="card-title">Special title treatment</h6>

      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Add It</a>
    </div>
  </div>

  <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">General</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="inputName">Project Name</label>
          <input type="text" id="inputName" class="form-control">
        </div>
        <div class="form-group">
          <label for="inputDescription">Project Description</label>
          <textarea id="inputDescription" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="inputStatus">Status</label>
          <select id="inputStatus" class="form-control custom-select">
            <option selected disabled>Select one</option>
            <option>On Hold</option>
            <option>Canceled</option>
            <option>Success</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputClientCompany">Client Company</label>
          <input type="text" id="inputClientCompany" class="form-control">
        </div>
        <div class="form-group">
          <label for="inputProjectLeader">Project Leader</label>
          <input type="text" id="inputProjectLeader" class="form-control">
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection