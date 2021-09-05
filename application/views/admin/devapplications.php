<!--=== Success msg ===-->
<?php
if ($this->session->flashdata('success')) {
    print '<br>';
    print '<div class= "alert alert-success">' . $this->session->flashdata('success') . '</div>';
}
?>
<div class="card mb-4 wow fadeIn">

    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">
        <h5 class="mb-2 mb-sm-0 pt-1">
        <a class="text-primary"><i class="far fa-envelope"></i>&nbsp;</a><span><b>Dev Hiring Applications</b></span>
        </h5>
    </div>

</div>

<br>
<div class="container card h-100 shadow border-0">
    <div id="table-header fw-bolder"> </div>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-primary">Application ID</th>
                <th scope="col" class="text-primary">Name</th>
                <th scope="col" class="text-primary">Contact</th>
                <th scope="col" class="text-primary">Email</th>
                <th scope="col" class="text-primary">Delete</th>
            </tr>
        </thead>


        <tbody>
            <?php foreach ($apps as $data) : ?>
                <tr>
                    <?php print '<td>' . htmlentities($data->appID) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->name) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->contact) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->email) . '</td>'; ?>
                    <?php

                    print '<td>';
                    print '<a href= "' . base_url() . 'Admin/deletedevapplications/' . $data->appID . '" title= "Remove" class="btn btn-danger rounded-pill btn-sm delete"><i class="fas fa-times"></i></a>';

                    print '</td>';

                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>