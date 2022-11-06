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
                            <h2>Add <b>Massage</b></h2>
                        </div>

                    </div>
                </div>

                    <div class="col-md-10 m-auto">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Massages</h3>
                        </div>
                        <div class="col-lg-12">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                                    <form action="{{route('prof.massage.save')}}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            @foreach ($massages as $massage)
                                                <input type="hidden" name="id" value="{{$massage->id}}">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">About Us Content Update</label>
                                            <textarea  class="form-control" id="exampleInputEmail1" name="massage" id="" cols="30" rows="10">{{$massage->massage}}</textarea>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Massage</button>
                                        </div>
                                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
  </div>
<!-- /.content-wrapper -->
@include('backend.dashboard.partial.footer');