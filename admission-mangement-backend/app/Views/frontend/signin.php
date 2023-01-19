<?php echo view("layouts/header/header.php") ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <img src="/assets/images/signin.jpg" style="width:100%;height:100%" alt="signin">
        </div>
        <div class="col-md-6" style="padding-top: 150px;">

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url("user/frontend/login"); ?>" method="post">
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>" class="form-control border-top-0 border-end-0 border-start-0">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control border-top-0 border-end-0 border-start-0">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn  btn-dark">Signin</button>
                </div>
            </form>
            <br>
            <div class="text-center"><a class="text-decoration-none" href="<?php echo base_url("user/frontend/signup"); ?>">New User? need signup</a></div>
        </div>

    </div>
</div>
<?php echo view('layouts/footer/footer.php');
