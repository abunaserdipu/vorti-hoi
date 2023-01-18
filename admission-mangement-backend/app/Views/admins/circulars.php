<?php echo view("layouts/header/header.php") ?>
<?php echo view('layouts/header/navbar.php'); ?>
<?php echo view("layouts/header/sidebar.php"); ?>
<div class="col-md-9">
    <h1 class="text-center">Circulars List</h1>
    <div class="d-flex justify-content-end mb-2">
        <a href="<?= base_url('admin/circulars/new') ?>" class="btn btn-primary">New Circular</a>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th class="text-center">Image</th>
                <th class="text-center">School Name</th>
                <th class="text-center">Available Classes</th>
                <th class="text-center">Apply Fees</th>
                <th class="text-center">Circular Details</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($circulars as $circular) : ?>
                <tr>
                    <td><?= $circular['id']; ?></td>
                    <td class="text-center"><img src="<?= $circular['circular_image']; ?>" width="150" height="100" alt="">
                    <td><?= $circular['school_name']; ?>
                    </td>
                    <td><?= $circular['available_classes']; ?>
                    </td>
                    <td class="text-right"><?= $circular['apply_fees']; ?></td>
                    <td class="text-right"><?= $circular['circular_details']; ?></td>
                    <td class="d-flex justify-content-center">
                        <a href="<?= site_url("circulars/edit/" . $circular['id']) ?>" class="btn btn-info">Edit</a>
                        <!-- delete -->
                        <!-- <form method="post" action="<?= site_url("circulars/delete/" . $circular['id']) ?>">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit">Delete</button>
                        <!-- delete -->
                        </form> -->

                        <a href="" class="btn btn-primary">Show</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php echo view('layouts/footer/footer.php');
