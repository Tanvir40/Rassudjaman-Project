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
                            <h2>Add <b>PR Massage</b></h2>
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
                                    <form action="{{route('pr.save')}}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            @foreach ($prs as $pr)
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">PR Content 1 Update</label>
                                            <textarea  class="form-control" id="exampleInputEmail1" name="text" cols="30" rows="10">{{$pr->text}}</textarea>
                                            <label for="exampleInputEmail1">PR Content 2 Update</label>
                                            <textarea  class="form-control" id="exampleInputEmail1" name="text2"  cols="30" rows="10">{{$pr->text2}}</textarea>
                                            </div>
                                            @endforeach
                                            <input type="hidden" name="id" value="{{$pr->id}}">
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
