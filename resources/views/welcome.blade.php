<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>Coalition Test</title>

          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <!-- Styles -->

     </head>
     <body>
          <div class="wrapper">
               <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                            <li ><a href="{{URL::to('/product')}}">Product List</a></li>
                    </div>
               <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title marginbot-80">Add Product Information</h3>
                            
                        </div>
                         <?php
                                    $message = Session::get('message');
                                    $exception = Session::get('exception');
                                    if ($message) {
                                        ?>
                                <div class="alert alert-success">
                                    <a href="#" class="close text-danger" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>
                                    <?php
                                        echo $message;
                                    ?>
                                    </strong>
                                </div>
                                    <?php
                                        Session::put('message', '');
                                    }
                                    elseif ($exception) {
                                        ?>
                                <div  class="alert alert-danger">
                                    <a href="#" class="close text-info" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>
                                    <?php
                                        echo $exception;
                                    ?>
                                    </strong>
                                </div>
                                    <?php
                                        Session::put('exception', '');
                                    }
                                    ?>
                            
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(array('url' => '/save-product' , 'method'=>'post')) !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="product">Product Name</label>
                                    <input type="text" required class="form-control" name="product_name" id="product" placeholder="Enter product name">
                                </div>
                                <div class="form-group">
                                    <label for="quantity_in_stock">Quantity In Stock</label>
                                    <input type="number" required class="form-control" name="quantity_in_stock" id="quantity_in_stock" placeholder="Enter Quantity In Stock">
                                </div>
                                 <div class="form-group">
                                    <label for="price_per_item">Price Per Item</label>
                                    <input type="number" required class="form-control" name="price_per_item" id="price_per_item" placeholder="Enter Price Per Item">
                                </div>
                               
                            </div>

                            <!-- /.box-body -->

                            <div class="box-footer">
                                <input type="submit" class="btn btn-success btn-lg col-md-4" value="Save Product"/>
<!--                                <button type="submit" class="btn btn-primary">Cancel</button>-->
                            </div>
                      {!! Form::close() !!} 
                    </div>
                </div>
            </div>
                    </div>
               </div>
          </div>
     </body>
</html>
