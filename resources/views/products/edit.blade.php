<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ProductTracker">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Homepage | Product Tracker</title>
   <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Edit product
        </div>
        <div class="card-body">
            <h3 class="card-title">Update the Product</h3>
            <p class="card-text">Please update the latest product details.</p>

            <div class="container">
                <form method="post" action="{{route('product.update', ['product' => $product])}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="">Name</label>    
                        <input type="text" name="name" placeholder="name" value="{{$product -> name}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Quantity</label>    
                        <input type="text" name="quantity" placeholder="quantity" value="{{$product -> quantity}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Owner</label>    
                        <input type="text" name="desc" placeholder="description" value="{{$product -> desc}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Description2</label>    
                        <input type="text" name="desc2" placeholder="description" value="{{$product -> desc2}}">
                    </div>
                    <div>
                        <input type="submit" value="Update" class="btn btn-success">
                    </div>

                </form>
            </div>

        </div>
    </div>


    
</body>
</html>