<div class="row">
    <div class="col">

    </div>
    <div class="col-lg-8">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="far fa-id-card"></i></div>
            <h2 class="fw-bolder"><b>Edit Developer Information</b></h2>
        </div>
        <?= form_open('Admin/edit_dev/' . $this->uri->segment(3)) ?>
        <div id="form-header"></div>

        <div class="form-group">
            <label for="name" class="fw-bolder"><b>Name</b></label>
            <?= form_input(['name' => 'name', 'placeholder' => 'User name', 'value' => set_value('name', $user_details->name), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('name') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="contact" class="fw-bolder"><b>Contact</b></label>
            <?= form_input(['name' => 'contact', 'placeholder' => 'Phone number', 'value' => set_value('contact', $user_details->contact), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('contact') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="specialty" class="fw-bolder"><b>Specialty</b></label>
            <?= form_input(['name' => 'specialty', 'placeholder' => 'Dev Specialty', 'value' => set_value('specialty', $user_details->specialty), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('specialty') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="description" class="fw-bolder"><b>Description</b></label>
            <?= form_input(['name' => 'description', 'placeholder' => 'Dev Description', 'value' => set_value('description' , $user_details->description), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('description') ?></div>
        </div>


        <br>
        <div class="form-group">
            <?= form_submit(['name' => 'submit', 'value' => 'Update', 'class' => 'btn btn-primary btn my-btn rounded-pill']); ?>
            <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-danger btn my-btn-res rounded-pill']) ?>
        </div>

        <?= form_close() ?>
    </div>
    <div class="col">

    </div>
</div>
<br>