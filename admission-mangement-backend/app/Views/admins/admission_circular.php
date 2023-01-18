<?php echo view("layouts/header/header.php") ?>
<?php echo view('layouts/header/navbar.php'); ?>
<?php echo view("layouts/header/sidebar.php"); ?>
<?php
if (session()->has('errors')) {
    $errors = session()->errors;
}
?>
<div class="col-md-9 bg-light">
    <h1>Admission Circular</h1>
    <form method="post" action="<?= base_url('circularController/create') ?>" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="" class="fw-bold">School Name</label>
            <input type="text" class="form-control" name="school_name" Placeholder="School Name" value="<?= old('school_name') ?>">
            <!-- error show -->
            <span class="text-danger">
                <?php

                if (isset($errors['school_name'])) {
                    echo $errors['school_name'];
                }
                ?></span>
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold">Available Classes</label>
            <input type="text" class="form-control" name="available_classes" placeholder="ex: class One to class Nine" value="<?= old('available_classes') ?>">
            <span class="text-danger">
                <?php

                if (isset($errors['available_classes'])) {
                    echo $errors['available_classes'];
                }
                ?></span>
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold">Apply Fees</label>
            <input type="text" class="form-control" name="apply_fees" placeholder="Apply fees of admission" value="<?= old('apply_fees') ?>">
            <span class="text-danger">
                <?php

                if (isset($errors['apply_fees'])) {
                    echo $errors['apply_fees'];
                }
                ?></span>
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold">Relevant Image</label>
            <input type="file" name="circular_image" class="form-control">
            <span class="text-danger">
                <?php

                if (isset($errors['circular_image'])) {
                    echo $errors['circular_image'];
                }
                ?></span>
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold">Admission Circular Details</label>
            <textarea name="circular_details" class="form-control" cols="30" rows="10" placeholder="Details about admission"><?= old('circular_details') ?></textarea>
            <span class="text-danger">
                <?php

                if (isset($errors['circular_details'])) {
                    echo $errors['circular_details'];
                }
                ?></span>
        </div>
        <input type="submit" value="Submit Circular" class="btn btn-dark form-control">
    </form>
</div>

<?php echo view('layouts/footer/footer.php');
