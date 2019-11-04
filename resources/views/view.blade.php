<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  .gallery-wrap .img-big-wrap img {
    height: 450px;
    width: auto;
    display: inline-block;
    cursor: zoom-in;
}


.gallery-wrap .img-small-wrap .item-gallery {
    width: 60px;
    height: 60px;
    border: 1px solid #ddd;
    margin: 7px 2px;
    display: inline-block;
    overflow: hidden;
}

.gallery-wrap .img-small-wrap {
    text-align: center;
}
.gallery-wrap .img-small-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 4px;
    cursor: zoom-in;
}
</style>

<div class="container">
  <div class="card">
    <div class="row">
      <aside class="col-sm-12">
        <article class="card-body p-5">
          <h3 class="title mb-3">Profile Detail</h3>
           <!-- price-detail-wrap .// -->
          <dl class="param param-feature">
            <dt>First Name</dt>
            <dd>{{ $customer->first_name }}</dd>
          </dl>  <!-- item-property-hor .// -->
          <dl class="param param-feature">
            <dt>Last Name</dt>
            <dd>{{ $customer->last_name }}</dd>
          </dl>  <!-- item-property-hor .// -->
          <dl class="param param-feature">
            <dt>Email</dt>
            <dd>{{ $customer->email }}</dd>
          </dl>
          <dl class="param param-feature">
            <dt>Phone</dt>
            <dd>{{ $customer->phone }}</dd>
          </dl>
          <dl class="param param-feature">
            <dt>DOB</dt>
            <dd>{{ $customer->dob }}</dd>
          </dl> 
          <dl class="item-property">
            <dt>Address</dt>
            <dd>
              <p>{{ $customer->address }}</p>
            </dd>
          </dl>
        </article> <!-- card-body.// -->
      </aside> <!-- col.// -->
    </div> <!-- row.// -->
  </div> <!-- card.// -->
</div>
<!--container.//-->