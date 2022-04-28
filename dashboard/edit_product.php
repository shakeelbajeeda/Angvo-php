<?php require_once('../php-controllers/database.php');
require_once('dashboard-header.php');
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $record = "SELECT icon, title, price FROM products WHERE id='$id'";
    $n = $db->query($record)->fetchAll();
    if (count($n) > 0) {
        $icon = $n[0]['icon'];
        $title = $n[0]['title'];
        $price = $n[0]['price'];
    } else {
        die("record not found");
    }
} else {
    die('invalid id');
}
?>
<div class="container" style="padding-bottom: 250px;">
    <div class="h1  text-dark text-center">Edit Product</div>
    <form method="post" action="../php-controllers/update-card.php" class="my-5">
    <input type="hidden" name="id" value="<?= $id ?>">

        <div class="row">
            <div class="col-md-4">
                <input type="text" name="icon" value="<?= $icon ?>" class="form-control" placeholder="Icon Name" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="title" value="<?= $title ?>" class="form-control" placeholder="Title" required>
            </div>
            <div class="col-md-4">
                <input type="number" name="price" value="<?= $price ?>" class="form-control" placeholder="Price" required>
            </div>
            <div class="col-12">
                <button type="submit" name="update" class="btn btn-warning float-right mt-3">Update</button>
            </div>
        </div>
    </form>
</div>
<?php require_once('dashboard-footer.php') ?>