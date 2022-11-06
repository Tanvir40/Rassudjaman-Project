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
                            <h2>Add <b>News</b></h2>
                        </div>

                    </div>
                </div>

                    <div class="col-md-10 m-auto">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">News</h3>
                        </div>
                        <div class="col-12">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                        <form action="{{route('save.news')}}" method="post">
                            @csrf
                            <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">News Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter News Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">News Image Link</label>
                                <input type="text" name="image_link" class="form-control" id="exampleInputEmail1" placeholder="Enter News Image/Address Link from the Web">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">News Link</label>
                                <input type="text" name="news_link" class="form-control" id="exampleInputEmail1" placeholder="Enter News Title">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">News Description</label>
                                <textarea name="news_desp" class="form-control" id="exampleInputEmail1" cols="30" rows="10"></textarea>
                            </div>



                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add new News</button>
                            </div>
                        </form>
                        </div>

                    </div>

                <div class="col-sm-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>SL</td>
                                <td>News Title</td>
                                <td>News Image</td>
                                <th>News Description</th>
                                <th>Created At</th>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $key=>$new)
                            <tr>
                                    <td data-title="SL">{{$key+1}}</td>
                                    <td data-title="Small Text">{{$new->title}}</td>
                                    <td data-title="Carousel Image">
                                        <img style="height:48px" src="{{$new->image_link}}" alt="img">
                                    </td>
                                    <td  >{{$new->news_desp}}</a>
                                    </td>


                                <td>{{$new->created_at->format('d-m-Y H-i A')}}</td>
                                <td data-title="Action">
                                    <button type="button" name="{{route('news.delete' , $new->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
