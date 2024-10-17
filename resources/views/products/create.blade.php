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
            A new product
        </div>
        <div class="card-body">
            <h3 class="card-title">Create a new Product</h3>
            <p class="card-text">Please input the product details.</p>

            <div class="container">
                <form method="post" action="{{route('product.store')}}">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="">Name</label>    
                        <input type="text" name="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="">Quantity</label>    
                        <input type="text" name="quantity" placeholder="quantity">
                    </div>
                    <div class="mb-3">
                        <label for="">Owner</label>    
                        <input type="text" name="desc" placeholder="owner">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>    
                        <input type="text" name="desc2" placeholder="description">
                    </div>
                    <div>
                        <input type="submit" value="Save Product" class="btn btn-primary">
                    </div>

                </form>
            </div>

        </div>
    </div>


    
</body>
</html>