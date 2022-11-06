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
                            <h2>Add <b>BookList</b></h2>
                        </div>

                    </div>
                </div>

                    <div class="col-md-10 m-auto">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">BookList</h3>
                        </div>
                        <div class="col-12">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                        <form action="{{route('save.booklist')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">BookList Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                                <label for="exampleInputFile">BookList Image</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="book_image" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                </div>
                                <label for="exampleInputEmail1">BookList Name</label>
                                <input type="text" name="book_name" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        </div>

                    </div>
                    </div>

                    <div class="col-sm-12">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Book Title</th>
                                    <th>Book Name</th>
                                    <th>Book Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booklist as $key=>$book)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$book->title}}</td>
                                        <td>{{$book->book_name}}</td>
                                        <td>
                                            <img style="height:48px" src="{{asset('frontend/books')}}/{{$book->book_image}}" alt=""></td>
                                        <td>{{$book->created_at}}</td>
                                        <td>
                                            <button type="button" name="{{route('booklist.delete' , $book->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
