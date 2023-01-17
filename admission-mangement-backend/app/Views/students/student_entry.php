<?php echo view("layouts/header/header.php") ?>
<?php echo view('layouts/header/navbar.php'); ?>
<?php echo view("layouts/header/sidebar.php"); ?>

<div class="col-md-9 bg-light">
    <h1>Student Admission Form</h1>
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="" class="fw-bold mb-2">Name</label>
            <input type="text" class="form-control" name="student_name" placeholder="Student Name">
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold mb-2">Class you want to apply</label>
            <select class="form-control" name="class" id="">
                <option value="">Select one</option>
                <option value="">Class One</option>
                <option value="">Class Two</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold mb-2">Birth Date</label>
            <input type="date" class="form-control" name="birth_date">
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold mb-2">Parent/Guardian Name</label>
            <input type="text" class="form-control" name="guardian_name" placeholder="Guardian Name">
        </div>
        <div class="form-group mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="fw-bold mb-2">Gender</label><br>
                    <input type="radio" name="gender">
                    <label for="">Male</label>
                    <input type="radio" name="gender" class="ms-3">
                    <label for="">Female</label>
                </div>
                <div class="col-md-6">
                    <label for="" class="fw-bold mb-2">Nationality</label>
                    <select class="form-control" name="nationality" id="">
                        <option value="">Select one</option>
                        <option value="">Bangladeshi</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="form-group mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="fw-bold mb-2">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                </div>
                <div class="col-md-6">
                    <label for="" class="fw-bold mb-2">E-mail Address</label>
                    <input type="email" class="form-control" name="email" placeholder="ex: myname@gmail.com">
                </div>
            </div>

        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold mb-2">Present Address</label>
            <input type="text" class="form-control mb-2" name="street_address" placeholder="Street Address">
            <div class="row mb-2">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="division" placeholder="Division">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="zip_code" placeholder="Postal/Zip Code">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="country" placeholder="Country">
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="" class="fw-bold mb-2">Image</label>
            <input type="file" class="form-control" name="student_image">
        </div>
        <input type="submit" class="btn btn-dark form-control fs-5 fw-bold" value="Submit Form">
    </form>
</div>

</div>
<?php echo view('layouts/footer/footer.php');
