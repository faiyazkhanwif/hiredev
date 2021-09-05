<div class="row">
    <div class="col">

    </div>

    <div class="col-6">
        <?php
        if ($this->session->flashdata('danger')) {
            print '<div class= "alert-danger">' . $this->session->flashdata('danger') . '</div>';
        }
        ?>
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-key"></i></div>
            <h2 class="fw-bolder"><b>Change Your Password</b></h2>
        </div>
        <?= form_open('Admin/change_password/' . $this->uri->segment(3)) ?>
        <div id="form-header"></div><br>

        <div class="form-group">
            <label for="oldpassword" class="fw-bolder"><b>Current Password</b></label>
            <?= form_password(['name' => 'oldpassword', 'placeholder' => '', 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('oldpassword') ?></div>
        </div>
        <br>
        <div class="form-row">
            <div class="form-group">
                <label for="password" class="fw-bolder"><b>New Password</b></label>
                <?= form_password(['name' => 'newpassword', 'placeholder' => '', 'class' => 'form-control']) ?>

                <div class="text-danger form-error"><?= form_error('newpassword') ?></div>
            </div>
            <br>
            <div class="form-group">
                <label for="repassword" class="fw-bolder"><b>Confirm Password</b></label>
                <?= form_password(['name' => 'repassword', 'placeholder' => '', 'class' => 'form-control']) ?>

                <div class="text-danger form-error"><?= form_error('repassword') ?></div>
            </div>
        </div>


        <br>
        <div class="form-group">
            <?= form_submit(['name' => 'submit', 'value' => 'Update Password', 'class' => 'btn btn-primary btn my-btn rounded-pill']); ?>
            <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-danger btn my-btn-res rounded-pill']) ?>
        </div>

        <?= form_close() ?>
    </div>
    <div class="col">

    </div>
</div>
<br>