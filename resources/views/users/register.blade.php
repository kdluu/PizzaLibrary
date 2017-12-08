<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Sign Up Page</h2><br  />
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
      <form method="post" action="{{url('users-register')}}">
        {{csrf_field()}}
        <!-- Username -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="username" >Username:</label>
            <input type="text" 
            class="form-control" 
            name="username" 
            placeholder="Enter Username">
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
            placeholder="Enter Password">
          </div>
        </div>
        <!-- Cofirm Password -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" 
            class="form-control" 
            name="confirm"
            placeholder="Confirm Password">
          </div>
        </div>
        <!-- Email -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="email">Email:</label>
            <input type="text" 
            class="form-control" 
            name="email"
            placeholder="Enter Email">
          </div>
        </div>
        <!-- Phone -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="phone">Phone:</label>
            <input type="text" 
            class="form-control" 
            name="phone"
            placeholder="Phone Number">
          </div>
        </div>
        <!-- Librarian checkbox -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input id="checkBox" type="checkbox" name="is_librarian">
            <label for="librarian">Librarian</label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="reset" class="btn btn-success">Cancel</button>
            <button type="submit" class="btn btn-success">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
