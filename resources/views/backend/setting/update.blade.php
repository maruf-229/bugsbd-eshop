@extends('backend.layouts.master')
@section('title')
Setting Update
@endsection
@section('nev-search')
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Setting Update</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Update Setting</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form class="add-contact-form" method="post" action="{{ route('setting.update',$setting->id) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="inputName">Website Title</label>
                    <input type="text" id="inputName" class="form-control" name="title" value="{{$setting->title}}">
                </div>
                
                <div class="form-group">
                    <label for="inputName">Website Address</label>
                    <input type="text" id="inputName" class="form-control" name="address" value="{{$setting->address}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Website Email</label>
                    <input type="email" id="inputName" class="form-control" name="email" value="{{$setting->email}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Website Number</label>
                    <input type="number" id="inputName" class="form-control" name="phone" value="{{$setting->phone}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Website Footer</label>
                    <input type="text" id="inputName" class="form-control" name="footer" value="{{$setting->footer}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Website facebook url</label>
                    <input type="text" id="inputName" class="form-control" name="facebook_url" value="{{$setting->facebook_url}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Website twitter url</label>
                    <input type="text" id="inputName" class="form-control" name="twitter_url" value="{{$setting->twitter_url}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Website linkedin url</label>
                    <input type="text" id="inputName" class="form-control" name="linkedin_url" value="{{$setting->linkedin_url}}">
                </div>
                <div class="form-group">
                    <label for="inputName">Website youtube link</label>
                    <input type="text" id="inputName" class="form-control" name="youtube_url" value="{{$setting->youtube_url}}">
                </div>

                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" class="form-control rounded" name="logo" onchange="readURLImage(this);" >
                    </br>
                    @if($setting->logo !=null)
                    <img style=" height:150px; width:150px; border-radius: 25px;" src="{{asset($setting->logo)}}" id="image">
                    @else
                    <img style=" height:150px; width:150px; border-radius: 25px;" src="{{asset('1.jpg')}}" id="image">
                    @endif
                </div>
                
                <input type="submit" value="Update Setting" class="btn btn-success float-right">
                </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

                       

@endsection

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="text/javascript">
	function readURLImage(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(150)
                  .height(150);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }


</script>


@endsection

