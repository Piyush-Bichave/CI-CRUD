<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>CRUD Operations In CI</title> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
<style>
    body {
        background-color: #f8f9fa;
    }
    .jumbotron {
        background-color: #007bff;
        color: white;
        /* padding: 2rem; */
        margin-bottom: 2rem;
    }
    .container {
        max-width: 600px;
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
        background-color: #28a745;
        border: none;
    }
    label {
        font-weight: bold;
    }
    input[type="text"] {
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }
</style>
</head> 
<body> 
<div class="jumbotron text-center"> 
    <h1>CRUD CI APP</h1> 
    <h1>Sushat pagar</h1>
</div> 
<div class="container"> 
    <h1 class="text-center mb-4">Edit Product</h1> 
    <form action="" method="post"> 
        <div class="form-group mb-3"> 
            <label for="name">Name</label> 
            <input type="text" name="name" placeholder="Enter product name" class="form-control" value="<?php echo set_value('name',$pro['name']);  ?>"> 
        </div> 
        <div class="form-group mb-3"> 
            <label for="price">Price</label> 
            <input type="text" name="price" placeholder="Enter product price" class="form-control" value="<?php echo set_value('price',$pro['price']); ?>"> 
        </div> 
        <div class="form-group mb-3"> 
            <label for="quantity">Quantity</label> 
            <input type="text" name="quantity" placeholder="Enter product quantity" class="form-control" value="<?php echo set_value('quantity',$pro['quantity']);?>"> 
        </div> 
        <div class="text-center"> 
            <input type="submit" name="edit" value="Update" class="btn btn-primary px-4"> 
        </div> 
    </form> 
</div>

 

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849b1E2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfORSJoZ+n" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9I0Yy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj003uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCEx130g8ifwB6" crossorigin="anonymous"></script> 
</body> 
</html>
