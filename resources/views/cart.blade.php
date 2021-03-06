<!DOCTYPE html>
<html>
    <!--header-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>cart</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <!--body-->
   <body>
      <!--nav-->
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="#">PHP Shopping Cart</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="{{url('product')}}">Product</a></li>
               <li><a href="{{url('cart')}}">Cart</a></li>
               <li><a href="{{url('order')}}">Orders</a></li>
            </ul>
         </div>
      </nav>
      <!--Cart Page Dynamic Content List-->
      <div class="page">
         <div class="container products" style="margin-top:7%">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               {{ session()->get('success') }}
            </div>
            @endif
            <!--Cart Dynamic Rendering from DB-->
            <div class="row">
               @foreach($cartProduct as $cartValue)
               <div class="col-xs-18 col-sm-6 col-md-3">
                  <div class="thumbnail">
                     <img src="{{$cartValue->image_path}}" alt="">
                     <div class="caption">
                        <h4>Product name</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                        <p><strong>Price: </strong> {{$cartValue->price}}</p>
                        <p class="btn-holder"><a href="{{ url('add-to-order/'.$cartValue->id) }}" class="btn btn-warning btn-block text-center" role="button">Order</a> </p>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <!-- End row -->
         </div>
      </div>
      </div>
   </body>
</html>
