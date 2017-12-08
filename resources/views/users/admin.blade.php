<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Librarian Panel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="container">
    <h2><strong>Librarian Panel</strong></h2><br/>
     <h3>Welcome, {{$name}}!</h3> <br/>
      
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <form method="post" action="{{url('userslogin')}}">
        {{csrf_field()}}
       <li> <a href="{{url('books/create')}}">Add Books</a> <br>            </li>
       <li> <a href="{{url('books')}}">Delete Books</a> <br>           </li>       
       <li> <a href="{{url('books.create')}}">View Borrow History</a> <br>  </li>
       <li> <a href="{{url('books')}}">View All Shelves</a>                 </li>
       
      </form>
    </div>
  </body>
</html>
