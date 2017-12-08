<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loan Index</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <h2>Loan Index</h2><br  />
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
          <form action="{{action('LoanController@edit', $book['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="Borrow">
            <button class="btn btn-danger" type="submit">Borrow</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
