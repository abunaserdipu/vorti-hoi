<?php echo view("layouts/header/header.php") ?>
<?php echo view('layouts/header/navbar.php'); ?>
<?php echo view("layouts/header/sidebar.php"); ?>

<div class="col-md-9 bg-light">
    <h1>Admission Circular</h1>
    <form method="post" action="<?= base_url('circularController/create') ?>" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="" class="fw-bold">School Name</label>
            <input type="text" class="form-control" name="school_name" Placeholder="School Name">
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold">Available Classes</label>
            <select name="available_classes" id="">
                <option value="">Select one</option>
                <?php foreach ($circulars as $circular) : ?>
                    <option value=""><?= $circular['available_classes'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold">Relevant Image</label>
            <input type="file" name="circular_image" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold">Admission Circular Details</label>
            <textarea name="circular_details" class="form-control" cols="30" rows="10" placeholder="Details about admission"></textarea>
        </div>
        <input type="submit" value="Submit Circular" class="btn btn-dark form-control">
    </form>
</div>

<?php echo view('layouts/footer/footer.php');
