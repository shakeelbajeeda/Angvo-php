<?php require_once('dashboard-header.php') ?>
<div class="container" style="padding-bottom: 250px;">
    <div class="h1  text-dark text-center">Add Products</div>
    <form method="post" action="../php-controllers/products.php" class="my-5">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="icon" class="form-control" placeholder="Icon Name" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="col-md-4">
                <input type="number" name="price" class="form-control" placeholder="Price" required>
            </div>
            <div class="col-12">
                <button type="submit" name="add" class="btn btn-primary float-right mt-3">Add</button>
            </div>
        </div>
    </form>
</div>
<?php require_once('dashboard-footer.php') ?>