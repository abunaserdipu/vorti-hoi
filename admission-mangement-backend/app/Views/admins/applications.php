<?php echo view("layouts/header/header.php") ?>
<?php echo view('layouts/header/navbar.php'); ?>
<?php echo view("layouts/header/sidebar.php"); ?>
<div class="col-md-9">
    <h1 class="text-center">applications List</h1>
    <div class="d-flex justify-content-end mb-2">
        <a href="<?= base_url('admin/applications/new') ?>" class="btn btn-primary">New application</a>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th class="text-center">Image</th>
                <th class="text-center">Student Name</th>
                <th class="text-center">Transaction ID</th>
                <th class="text-center">phone</th>
                <th class="text-center">Result</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application) : ?>
                <tr>
                    <td><?= $application['id']; ?></td>
                    <td class="text-center"><img src="<?= $application['student_image']; ?>" width="50px" alt="">
                    <td><?= $application['student_name']; ?>
                    </td>
                    <td><?= $application['transaction_id']; ?>
                    </td>
                    <td class="text-right"><?= $application['phone']; ?></td>
                    <td class="text-right"><select name="" id="">
                            <?php foreach ($results as $result) : ?>
                                <option value="<?= $result['id'] ?>"><?= $result['result_name'] ?></option>
                            <?php endforeach; ?>
                        </select></td>

                    <td class="d-flex justify-content-center">
                        <!-- <a href="<?= site_url("applications/edit/" . $application['id']) ?>" class="btn btn-info">Edit</a> -->
                        <!-- delete -->
                        <!-- <form method="post" action="<?= site_url("applications/delete/" . $application['id']) ?>">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit">Delete</button>
                        <!-- delete -->
                        </form> -->

                        <!-- <a href="" class="btn btn-primary">Show</a> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php echo view('layouts/footer/footer.php'); ?>