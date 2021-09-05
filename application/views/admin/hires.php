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
        <a class="text-primary"><i class="fas fa-dollar-sign"></i>&nbsp;</a><span><b>Hire History</b></span>
        </h5>
    </div>

</div>

<br>
<div class="container card h-100 shadow border-0">
    <div id="table-header fw-bolder"> </div>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-primary">ID</th>
                <th scope="col" class="text-primary">User ID</th>
                <th scope="col" class="text-primary">Dev ID</th>
                <th scope="col" class="text-primary">Hire Date</th>
                <th scope="col" class="text-primary">Details</th>
            </tr>
        </thead>


        <tbody>
            <?php foreach ($hires as $data) : ?>
                <tr>
                    <?php print '<td>' . htmlentities($data->recordID) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->userID) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->devID) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->orderdate) . '</td>'; ?>
                    <?php

                    print '<td>';
                    print '<a href= "' . base_url() . 'Admin/hiredetails/' . $data->recordID . '" title= "View Details" class="btn btn-primary btn-sm rounded-pill"><i class="far fa-newspaper"></i></a>';

                    print '</td>';

                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>