<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Login Page</h2><br  />
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
        <!-- Username -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="username">Username:</label>
            <input type="text" 
            class="form-control" 
            name="username" 
            placeholder="Enter Username"
            autocomplete="off">
          </div>
        </div>
        <!-- Password -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="password">Password:</label>
            <input type="password" 
            class="form-control" 
            name="password"
            placeholder="Enter Password"
            autocomplete="off">
          </div>
        </div>
        <!-- Button -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="reset" class="btn btn-success">Cancel</button>
            <button type="submit" class="btn btn-success">Login</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
