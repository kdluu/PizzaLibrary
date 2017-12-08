<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Book</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Add Book To Shelves</h2><br  />
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
      <form method="post" action="{{url('books')}}">
        {{csrf_field()}}
        <!-- Book Name -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="book_name">Book Name:</label>
            <input type="text" 
            class="form-control" 
            name="book_name"
            placeholder="Enter Book Name">
          </div>
        </div>
        <!-- Author -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="author">Author:</label>
            <input type="text" 
            class="form-control" 
            name="author"
            placeholder="Enter Author Name">
          </div>
        </div>
        <!-- Category -->
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="shelf">Category:</label>
              <select id="shelf" class="form-control" name="shelf">
                <option value="Select Shelf">Select Category</option>
                <option value="Art">Art</option>
                <option value="Science">Science</option>
                <option value="Sport">Sport</option>
                <option value="Literature">Literature</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Add Book</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
