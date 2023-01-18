<?php echo view("layouts/header/header.php") ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">

            <h2>Login in</h2>

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url("/users/login"); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Signin</button>
                </div>
            </form>
            <br>
            <div class="text-center"><a href="<?php echo base_url("/users/signup"); ?>">New User, need signup</a></div>
        </div>

    </div>
</div>
<?php echo view('layouts/footer/footer.php');
