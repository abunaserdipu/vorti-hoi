<?php echo view('frontend/header.php'); ?>
<div class="card">
    <div class="card-header bg-info">
        <h1>Student Admission Form</h1>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group mb-3">
                <label for="" class="fw-bold mb-2">Name</label>
                <input type="text" class="form-control" name="student_name" placeholder="Student Name">
            </div>
            <div class="form-group mb-3">
                <label for="" class="fw-bold mb-2">Class you want to apply</label>
                <select class="form-control" name="class" id="">
                    <option value="">Select one</option>
                    <option value="1">Class one</option>
                    <option value="2">Class Two</option>
                    <option value="3">Class Three</option>
                    <option value="4">Class Four</option>
                    <option value="5">Class Five</option>
                    <option value="6">Class Six</option>
                    <option value="7">Class Seven</option>
                    <option value="8">Class Eight</option>
                    <option value="9">Class Nine</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="" class="fw-bold mb-2">Transaction ID (bkash)</label>
                <small>bkash merchant: 01521327682</small>
                <input type="text" class="form-control" name="transaction_id" placeholder="ex: xxxxxxx">
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
                        <input type="radio" id="male" name="gender" value="1">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="2" class="ms-3">
                        <label for="female">Female</label>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold mb-2">Nationality</label>
                        <select class="form-control" name="nationality" id="">
                            <option value="" selected disabled>Select one</option>
                            <option value="1">Bangladeshi</option>
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



<?php echo view('frontend/footer.php'); ?>