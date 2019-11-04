<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
<h1 class="form-heading">Edit Customer</h1>
<div class="login-form">
<div class="main-div">
    <form method="POST" action="{{ url('/users/'.$customer->id) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control"  name="first_name" value="{{ $customer->first_name }}" placeholder="First Name">
            @if ($errors->has('first_name'))
                <div class="error">{{ $errors->first('first_name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="last_name" value="{{ $customer->last_name }}" placeholder="Last Name">
            @if ($errors->has('last_name'))
                <div class="error">{{ $errors->first('last_name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  name="email" value="{{ $customer->email }}" placeholder="Email Address">
            @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="phone" value="{{ $customer->phone }}" placeholder="Phone Number">
            @if ($errors->has('phone'))
                <div class="error">{{ $errors->first('phone') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="date" class="form-control"  name="dob" value="{{ $customer->dob }}" placeholder="DOB">
            @if ($errors->has('dob'))
                <div class="error">{{ $errors->first('dob') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="address" value="{{ $customer->address }}" placeholder="Home Address">
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
