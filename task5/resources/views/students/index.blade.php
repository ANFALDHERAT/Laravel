<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
<div class="row" style="margin:20px;">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h2 style="text-align: center">CRUD</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Students">
           Add New
            </a>
        <br>
        <br>
        <div class="table-responsive">
           <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>MOBILE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students  as $item )


                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>
                       <a href="{{ url('/student/' . $item->id) }}" title="view student"><button class="btn btn-info btn-sm">View</button></a>
                       <a href="{{ url('/student/' . $item->id  . '/edit' ) }} " title="edit student"><button class="btn btn-primary btn-sm">Edit</button></a>
                       <form method="POST" action="{{ url('/student' . '/' .  $item->id ) }}" style="display:inline;">
                       {{ method_field('DELETE') }}
                       @csrf
                        <button type="submit" class="btn btn-danger btn-sm" title="delete student" onclick="return confirm("Confirm delete?")">Delete</button>
                       </form>
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

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
