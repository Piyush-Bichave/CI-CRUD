<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <title>Crud in CI </title>
    
</head>
<body>
   <!-- Enhanced Creative UI for Product Table -->
<div class="jumbotron text-center py-4" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">
    <h1 class="display-5 fw-bold text-white">CRUD CI APP</h1>
</div>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark">All Products</h3>
        <button class="btn btn-primary shadow-lg d-flex align-items-center" id="openModalButton" style="transition: transform 0.2s;">
            <i class="fas fa-plus-circle me-2"></i> Add Product
        </button>
    </div>

    <div class="table-responsive shadow-lg rounded-3">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="bg-light text-dark">
                <tr>
                    <th class="p-3 text-center">Product Name</th>
                    <th class="p-3 text-center">Product Price</th>
                    <th class="p-3 text-center">Product Quantity</th>
                    <th class="p-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($product_details as $product): ?>
                    <tr class="hover-shadow" style="transition: box-shadow 0.3s;">
                        <td class="p-3 text-center text-truncate" style="max-width: 150px;">
                            <?php echo $product->name; ?>
                        </td>
                        <td class="p-3 text-center text-truncate" style="max-width: 100px;">
                            <?php echo $product->price; ?>
                        </td>
                        <td class="p-3 text-center text-truncate" style="max-width: 100px;">
                            <?php echo $product->quantity; ?>
                        </td>
                        <td class="p-3 text-center">
                            <a href="<?php echo base_url(); ?>Ctrl/editProduct/<?php echo $product->id; ?>" class="btn btn-success btn-sm me-2 shadow-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?php echo base_url(); ?>Ctrl/deleteProduct/<?php echo $product->id; ?>" class="btn btn-danger btn-sm shadow-sm">
                                <i class="fas fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Loading Spinner (Optional) -->
<div id="loadingSpinner" class="d-none text-center mt-4">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<!-- Include Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<!-- Modal Structure -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content shadow-lg border-0 rounded-3">
      <form action="<?php echo base_url(); ?>Ctrl/addProduct" method="post">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-light">
          <div class="form-group mb-3">
            <label for="name" class="form-label fw-bold">Product Name</label>
            <input type="text" name="name" placeholder="Enter product name here" class="form-control" required>
          </div>
          <div class="form-group mb-3">
            <label for="price" class="form-label fw-bold">Price</label>
            <input type="text" name="price" placeholder="Enter price here" class="form-control" required>
          </div>
          <div class="form-group mb-3">
            <label for="quantity" class="form-label fw-bold">Quantity</label>
            <input type="text" name="quantity" placeholder="Enter quantity here" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" name="insert" value="Add Product" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>


<?php if($this->session->flashdata('error')):  ?>
<div align="center" style="color:#FFF" class="bg-danger">
    <?php  echo $this->session->flashdata('error'); ?>

</div>
<?php endif; ?>

<?php if($this->session->flashdata('inserted')):  ?>
<div align="center" style="color:#FFF" class="bg-success">
    <?php  echo $this->session->flashdata('inserted'); ?>

</div>
<?php endif; ?>

<!-- Bootstrap Bundle JS with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // JavaScript to programmatically trigger the modal
  document.getElementById('openModalButton').addEventListener('click', function () {
    const exampleModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    exampleModal.show();
  });
</script>

</body>
</html>