<div class="container">
    <div class="my-form">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-user-plus"></i></div>
            <h2 class="fw-bolder"><b>Add New User</b></h2>
        </div>
        <div id="form-header"></div>

        <?= form_open('Admin/add_users') ?>

        <div class="form-group">
            <label for="name" class="fw-bolder"><b>Name</b></label>
            <?= form_input(['name' => 'name', 'placeholder' => 'Name of the account holder', 'value' => set_value('name'), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('name') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="contact" class="fw-bolder"><b>Contact</b></label>
            <?= form_input(['name' => 'contact', 'placeholder' => 'Phone number', 'value' => set_value('contact'), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('contact') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="email" class="fw-bolder"><b>E-mail</b></label>
            <?= form_input(['name' => 'email', 'placeholder' => 'Valid email', 'value' => set_value('email'), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('email') ?></div>
        </div>
        <br>
        <div class="form-row">
            <div class="form-group">
                <label for="password" class="fw-bolder"><b>Password</b></label>
                <?= form_password(['name' => 'password', 'placeholder' => 'Password', 'class' => 'form-control']) ?>

                <div class="text-danger form-error"><?= form_error('password') ?></div>
            </div>
            <br>
            <div class="form-group">
                <label for="repassword" class="fw-bolder"><b>Confirm Password</b></label>
                <?= form_password(['name' => 'repassword', 'placeholder' => 'Re-type Password', 'class' => 'form-control']) ?>

                <div class="text-danger form-error"><?= form_error('repassword') ?></div>
            </div>
            <br>
        </div>
        <div class="form-group">
            <label for="type" class="fw-bolder"><b>Type</b></label>
            <div class="form-group">
                <?php $options = array(
                    '' => 'Choose one from below:',
                    'U' => 'User',
                    'A' => 'Admin'
                );
                print form_dropdown('type', $options, 'A', ['class' => 'form-control']);
                ?>
                <div><?= form_error('type', '<div class="text-danger">', '</div>'); ?></div>
            </div>
        </div>
        <br>


        <div class="form-group">
            <?= form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn my-btn rounded-pill']); ?>
            <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-danger btn my-btn-res rounded-pill']) ?>
        </div>

        <?= form_close() ?>
    </div>
</div>