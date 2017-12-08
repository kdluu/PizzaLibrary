<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book Index</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <h2>Books Index</h2><br  />
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Shelf</th>
        <th>Availability</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
      <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['book_name']}}</td>
        <td>{{$book['author']}}</td>
        <td>{{$book['shelf_id']}}</td>
        <td>{{$book['availability']}}</td>
        <td>
          <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
