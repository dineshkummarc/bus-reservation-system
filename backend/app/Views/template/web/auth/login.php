<?php echo $this->extend('template/web/main') ?>

<?php $this->section('content') ?>

    <div class="d-flex align-items-center justify-content-center text-center h-100vh">
        <div class="form-wrapper m-auto">
            <div class="form-container my-4">
                <div class="panel">

                    <form action="<?php echo base_url(route_to('auth-login')) ?>" id="logindauth" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo $this->include('common/security') ?>

                        <div class="mb-3">
                            <input type="text" name="userid" class="form-control" id="emial" placeholder="Email address">
                            <!-- <div class="invalid-feedback text-start">Enter your valid email</div> -->
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password-field" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success w-100">Sign in</button>
                    </form>
                </div>

                <div class="bottom-text text-center my-3">
                    Remind <a href="<?php echo base_url(route_to('forgetpassload')) ?>" class="fw-medium">Password</a>
                </div>
            </div>

            <?php echo $this->include('common/message') ?>
        </div>
    </div>

<?php $this->endSection() ?>