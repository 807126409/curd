<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<style type="text/css">
  .error {
    color: red;
  }
</style>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Add Customer</h1>
<div class="login-form">
<div class="main-div">
    <form method="POST" action="{{ url('/users') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control"  name="first_name" placeholder="First Name">
            @if ($errors->has('first_name'))
                <div class="error">{{ $errors->first('first_name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
            @if ($errors->has('last_name'))
                <div class="error">{{ $errors->first('last_name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  name="email" placeholder="Email Address">
            @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="phone" placeholder="Phone Number">
            @if ($errors->has('phone'))
                <div class="error">{{ $errors->first('phone') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="date" class="form-control"  name="dob" placeholder="DOB">
            @if ($errors->has('dob'))
                <div class="error">{{ $errors->first('dob') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="address" placeholder="Home Address">
            @if ($errors->has('address'))
                <div class="error">{{ $errors->first('address') }}</div>
            @endif
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="submit">
        </div>
    </form>
    </div>

</div>
</div>
</div>

</body>
</html>
