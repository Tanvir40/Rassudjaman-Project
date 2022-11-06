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
                            <h2>Add <b>Quotes</b></h2>
                        </div>

                    </div>
                </div>

                    <div class="col-md-6 m-auto">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quotes</h3>
                        </div>
                        <div class="col-12">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                        <form action="{{route('quotes.save')}}" method="post">
                            @csrf
                            <div class="card-body">
                                @foreach ($quotes as $quote)
                                <input type="hidden" name="id" value="{{$quote->id}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quotes One</label>
                                <input type="text" name="quotes_one" class="form-control" id="exampleInputEmail1" placeholder="Enter Quotes Name" value="{{$quote->quotes_one}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quotes Two</label>
                                <input type="text" name="quotes_two" class="form-control" id="exampleInputEmail1" placeholder="Enter Quotes Name" value="{{$quote->first()->quotes_two}}">
                            </div>
                            @endforeach
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Quotes</button>
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
