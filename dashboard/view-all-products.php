<?php
require_once('dashboard-header.php');
require_once('../php-controllers/database.php');
$user_id = $_SESSION['user']['id'];
$sql = "select * from products where user_id = $user_id ;";
$table = $result = $db->query($sql)->fetchAll();
?>

<div class="container">
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
<script>
    var toastMixin = Swal.mixin({
        toast: true,
        icon: 'success',
        title: 'General Title',
        animation: false,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
    // add product alert
    <?php if (isset($_SESSION['success'])) { ?>
        toastMixin.fire({
            animation: true,
            icon: 'success',
            title: ' <?= $_SESSION['success'] ?>'
        });
    <?php unset($_SESSION['success']);
    } ?>

    // delete product alert
    <?php if (isset($_SESSION['delete'])) { ?>
        toastMixin.fire({
            animation: true,
            icon: 'success',
            title: ' <?= $_SESSION['delete'] ?>'
        });
    <?php unset($_SESSION['delete']);
    } ?>
    //update product alert
    <?php if (isset($_SESSION['update'])) { ?>
        toastMixin.fire({
            animation: true,
            icon: 'success',
            title: ' <?= $_SESSION['update'] ?>'
        });
    <?php unset($_SESSION['update']);
    } ?>
</script>
<?php require_once('dashboard-footer.php') ?>