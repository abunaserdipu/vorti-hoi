<?php echo view('frontend/header.php'); ?>
<div class="container">
    <div class="card my-3 shadow rounded">
        <div class="card-header bg-info">
            <h1 class="text-center">Student Admission Form</h1>
        </div>
        <div class="card-body">
            <?php
            if (session()->has('errors')) {
                $errors = session()->errors;
            }
            ?>
            <form action="<?= base_url('frontend/studentController/create') ?>" enctype="multipart/form-data" method="post">
                <div class="form-group mb-3">
                    <label for="" class="fw-bold mb-2">Name</label>
                    <input type="text" class="form-control" name="student_name" placeholder="Student Name" value="<?= old('student_name') ?>">
                    <!-- error show -->
                    <span class="text-danger">
                        <?php

                        if (isset($errors['student_name'])) {
                            echo $errors['student_name'];
                        }
                        ?></span>
                </div>
                <input type="hidden" name="result" value="1">
                <div class="form-group mb-3">
                    <label for="" class="fw-bold mb-2">Class you want to apply</label>
                    <select class="form-control" name="class" id="">
                        <option>Select one</option>
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
                    <!-- error show -->
                    <span class="text-danger">
                        <?php

                        if (isset($errors['class'])) {
                            echo $errors['class'];
                        }
                        ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="fw-bold mb-2">Transaction ID (bkash)</label>
                    <small>bkash merchant: 01521327682</small>
                    <input type="text" class="form-control" name="transaction_id" placeholder="ex: xxxxxxx" value="<?= old('transaction_id') ?>">
                    <!-- error show -->
                    <span class="text-danger">
                        <?php

                        if (isset($errors['transaction_id'])) {
                            echo $errors['transaction_id'];
                        }
                        ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="fw-bold mb-2">Birth Date</label>
                    <input type="date" class="form-control" name="birth_date" value="<?= old('birth_date') ?>">
                    <!-- error show -->
                    <span class="text-danger">
                        <?php

                        if (isset($errors['birth_date'])) {
                            echo $errors['birth_date'];
                        }
                        ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="fw-bold mb-2">Parent/Guardian Name</label>
                    <input type="text" class="form-control" name="guardian_name" placeholder="Guardian Name" value="<?= old('guardian_name') ?>">
                    <!-- error show -->
                    <span class="text-danger">
                        <?php

                        if (isset($errors['guardian_name'])) {
                            echo $errors['guardian_name'];
                        }
                        ?></span>
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="fw-bold mb-2">Gender</label><br>
                            <input type="radio" id="male" name="gender" value="1">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="2" class="ms-3">
                            <label for="female">Female</label>
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['gender'])) {
                                    echo $errors['gender'];
                                }
                                ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="fw-bold mb-2">Nationality</label>
                            <select class="form-control" name="nationality">
                                <option selected disabled>Select one</option>
                                <option value="1">Bangladeshi</option>
                            </select>
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['nationality'])) {
                                    echo $errors['nationality'];
                                }
                                ?></span>
                        </div>
                    </div>

                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="fw-bold mb-2">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="<?= old('phone') ?>">
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['phone'])) {
                                    echo $errors['phone'];
                                }
                                ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="fw-bold mb-2">E-mail Address</label>
                            <input type="email" class="form-control" name="email" placeholder="ex: myname@gmail.com" value="<?= old('email') ?>">
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['email'])) {
                                    echo $errors['email'];
                                }
                                ?></span>
                        </div>
                    </div>

                </div>
                <div class="form-group mb-3">
                    <label for="" class="fw-bold mb-2">Present Address</label>
                    <input type="text" class="form-control mb-2" name="street_address" placeholder="Street Address" value="<?= old('street_address') ?>">
                    <!-- error show -->
                    <span class="text-danger">
                        <?php

                        if (isset($errors['street_address'])) {
                            echo $errors['street_address'];
                        }
                        ?></span>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="city" placeholder="City" value="<?= old('city') ?>">
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['city'])) {
                                    echo $errors['city'];
                                }
                                ?></span>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="division" placeholder="Division" value="<?= old('division') ?>">
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['division'])) {
                                    echo $errors['division'];
                                }
                                ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="zip_code" placeholder="Postal/Zip Code" value="<?= old('zip_code') ?>">
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['zip_code'])) {
                                    echo $errors['zip_code'];
                                }
                                ?></span>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="country" placeholder="Country" value="<?= old('country') ?>">
                            <!-- error show -->
                            <span class="text-danger">
                                <?php

                                if (isset($errors['country'])) {
                                    echo $errors['country'];
                                }
                                ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="fw-bold mb-2">Image</label>
                    <input type="file" class="form-control" name="student_image">
                    <!-- error show -->
                    <span class="text-danger">
                        <?php

                        if (isset($errors['student_image'])) {
                            echo $errors['student_image'];
                        }
                        ?></span>
                </div>
                <input type="submit" class="btn btn-dark form-control fs-5 fw-bold" value="Submit Form">
            </form>
        </div>
    </div>
</div>



<?php echo view('frontend/footer.php'); ?>