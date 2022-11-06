@include('backend.dashboard.partial.header');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6">
                            <h2>Add <b>About</b></h2>
                        </div>

                    </div>
                </div>

                    <div class="col-md-10 m-auto">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About</h3>
                        </div>
                        <div class="col-12">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                        <form action="{{route('save.about')}}" method="post">
                            @csrf
                            <div class="card-body">
                                @foreach ($abouts as $about)
                                <input type="hidden" name="id" value="{{$about->id}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">About</label>
                                <textarea name="about" class="form-control" id="exampleInputEmail1" cols="30" rows="10">{{$about->about}}</textarea>
                            </div>
                            @endforeach
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update About</button>
                            </div>
                        </form>
                        </div>

                    </div>
                    </div>


            </div>
        </div>
    </div>
  </div>
<!-- /.content-wrapper -->
@include('backend.dashboard.partial.footer');
