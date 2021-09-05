<div class="container">
    <div class="my-form">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-code"></i></div>
            <h2 class="fw-bolder"><b>Add New Developer</b></h2>
        </div>
        <div id="form-header"></div>

        <?= form_open('Admin/adddevs') ?>

        <div class="form-group">
            <label for="name" class="fw-bolder"><b>Name</b></label>
            <?= form_input(['name' => 'name', 'placeholder' => 'Name of the developer', 'value' => set_value('name'), 'class' => 'form-control']) ?>

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
        <div class="form-group">
            <label for="specialty" class="fw-bolder"><b>Specialty</b></label>
            <?= form_input(['name' => 'specialty', 'placeholder' => 'Dev Specialty', 'value' => set_value('specialty'), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('specialty') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="description" class="fw-bolder"><b>Description</b></label>
            <?= form_input(['name' => 'description', 'placeholder' => 'Dev Description', 'value' => set_value('description'), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('description') ?></div>
        </div>

        <br>


        <div class="form-group">
            <?= form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary btn my-btn rounded-pill']); ?>
            <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-danger btn my-btn-res rounded-pill']) ?>
        </div>

        <?= form_close() ?>
    </div>
</div>