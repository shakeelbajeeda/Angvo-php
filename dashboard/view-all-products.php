<?php
session_start();
$user_id = $_SESSION['user']['id'];
require_once('../php-controllers/database.php');
$sql = "select * from products where user_id = $user_id ;";
$table = $result = $db->query($sql)->fetchAll();
?>
<?php require_once('dashboard-header.php') ?>

<div class="container">
    <!-- product update Successfully alert -->
    <?php if (isset($_SESSION['update'])) { ?>
        <center>
            <div class="alert alert-success mt-3 w-50 text-center alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['update'] ?>
                <button type="button" class="close btn btn-danger" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </center>
    <?php unset($_SESSION['update']);
    } ?>
    <!-- delete message alert -->
    <?php if (isset($_SESSION['delete'])) { ?>
        <center>
            <div class="alert alert-success mt-3 w-50 text-center alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['delete'] ?>
                <button type="button" class="close btn btn-danger" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </center>
    <?php unset($_SESSION['delete']);
    } ?>
    <!-- success message alert -->
    <?php if (isset($_SESSION['success'])) { ?>
        <center>
            <div class="alert alert-success mt-3 w-50 text-center alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['success'] ?>
                <button type="button" class="close btn btn-danger" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </center>
    <?php unset($_SESSION['success']);
    } ?>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Icon Name</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($table as $data) {
            ?>
                <tr>
                    <th scope="row"><?= $data['id'] ?></th>
                    <td><?= $data['icon'] ?></td>
                    <td><?= $data['title'] ?></td>
                    <td><?= $data['price'] ?></td>
                    <td><a href="../php-controllers/delete-card.php?id=<?= $data['id'] ?>"><i class="fa fa-trash text-danger"></i></a><a class="ml-3" href="../dashboard/edit_product.php?id=<?= $data['id'] ?>"><i class="fa fa-edit text-info"></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div><br>
<?php require_once('dashboard-footer.php') ?>