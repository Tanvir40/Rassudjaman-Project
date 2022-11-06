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
                            <h2>Add <b>Takecare video </b></h2>
                        </div>

                    </div>
                </div>

                    <div class="col-md-10 m-auto">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add video</h3>
                        </div>
                        <div class="col-6">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                        <form action="{{route('takecare.save')}}" method="post">
                            @csrf
                            <div class="card-body">

                                <label for="exampleInputEmail1">Video Link</label>
                                <input type="text" name="link" class="form-control" id="exampleInputEmail1">

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Video</button>
                            </div>
                        </form>
                        </div>

                    </div>
                    </div>


                    <div class="col-sm-12">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Video Link</td>
                                    <th>Created At</th>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($takecare as $key=>$video)
                                <tr>
                                        <td data-title="SL">{{$key+1}}</td>
                                        <td data-title="Small Text">{{$video->link}}</td>

                                        <td>{{$video->created_at->format('d-m-Y H-i A')}}</td>
                                        <td data-title="Action">
                                        <button type="button" name="{{route('takecare.delete', $video->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
    </div>
  </div>
<!-- /.content-wrapper -->
@include('backend.dashboard.partial.footer');
{{-- delete banner success --}}
<script>
    $('.delete').click(function(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
           var link = $(this).attr('name');
           window.location.href =link;
        }
        })
    })
</script>
@if(session('delete'))
<script>
    Swal.fire(
      'Deleted!',
      '{{session('delete')}}',
      'success'
    )
</script>
@endif
