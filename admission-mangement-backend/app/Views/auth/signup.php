<?php echo view("layouts/header/header.php") ?>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <img src="/assets/images/signup.jpg" style="width:100%;height:100%" alt="signup">
        </div>
        <div class="col-md-6" style="padding-top:150px">
            <?php if (isset($validation)) : ?>
                <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url("user/store"); ?>" method="post">
                <div class="form-group mb-3">
                    <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control border-top-0 border-end-0 border-start-0">
                </div>
                <div class="form-group mb-3">
                    <input type="text" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control border-top-0 border-end-0 border-start-0">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control border-top-0 border-end-0 border-start-0">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control border-top-0 border-end-0 border-start-0">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Signup</button>
                </div>
            </form>
            <br>
            <div class="text-center"><a class="text-decoration-none" href="<?php echo base_url("user/signin"); ?>">Already a User? need signin</a></div>
        </div>
    </div>
</div>
<?php echo view('layouts/footer/footer.php');
