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
            Homepage
        </div>
        <div class="card-body">
            <h3 class="card-title">Product List</h3>
            <p class="card-text">Below is the latest list of product details.
            <div>
                <a href="{{route('product.create')}}" class="btn btn-warning">Create a New Product</a>
            </div></p>

            <div>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
            </div>

            <div class="container">
                <table border="2" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 1;?>
                        @foreach($products as $product)
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td>{{$product -> name}}</td>
                            <td>{{$product -> quantity}}</td>
                            <td>{{$product -> desc}}</td>
                            <td>{{$product -> desc2}}</td>
                            <td>
                                <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                            </td>
                            <td>
                                <form method ="post" action="{{route('product.destroy', ['product' => $product])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value ="Delete"/>
                                </form>
                            </td>
                        </tr><?php 
				  $count = $count + 1;
				  ?>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    
</body>
</html>