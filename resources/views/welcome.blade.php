<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css");
.track_tbl td.track_dot {
    width: 50px;
    position: relative;
    padding: 0;
    text-align: center;
}
.track_tbl td.track_dot:after {
    content: "\f111";
    font-family: FontAwesome;
    position: absolute;
    margin-left: -5px;
    top: 11px;
}
.track_tbl td.track_dot span.track_line {
    background: #000;
    width: 3px;
    min-height: 50px;
    position: absolute;
    height: 101%;
}
.track_tbl tbody tr:first-child td.track_dot span.track_line {
    top: 30px;
    min-height: 25px;
}
.track_tbl tbody tr:last-child td.track_dot span.track_line {
    top: 0;
    min-height: 25px;
    height: 10%;
}
</style>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="btn-toolbar">
        <a href="{{ url('/users/create') }}" class="btn btn-primary">New Customer</a>
    </div>
    <div class="p-4">
    <h3>Customer</h3>
    <table class="table table-bordered track_tbl">
        <thead>
          <tr>
            <th></th>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>DOB</th>
            <th style="width: 36px;">Action</th>
          </tr>
        </thead>
        <tbody>
           @if(isset($customers) && !empty($customers))
            <?php $i = 1 ;?>
            @foreach($customers as $customer)
            <tr class="active">
              <td class="track_dot">
                <span class="track_line"></span>
              </td>
              <td>{{$i}}</td>
              <td>{{ $customer->first_name }}</td>
              <td>{{ $customer->last_name }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->phone }}</td>
              <td>{{ $customer->dob }}</td>
              <td>
                  <a href="{{ url('/users/'.$customer->id.'/edit/') }}"><i class="icon-comment"></i></a>
                  <a href="{{ url('/users/'.$customer->id) }}"><i class="icon-info-sign"></i></a>
                  <a href="{{ url('/users/destroy/'.$customer->id) }}" role="button" data-toggle="modal"><i class="icon-trash icon-large"></i></a>
              </td>
            </tr>
            <?php $i++;?>
            @endforeach
            @endif
        </tbody>
    </table>
    </div>