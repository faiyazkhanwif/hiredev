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
    <a class="text-primary"><i class="fas fa-code"></i>&nbsp;</a><span><b>All Developers list</b></span>
    </h5>
    <div class="mb-2 mb-sm-0 pt-1">
      <div class="view-btn"><a href="<?= base_url() ?>Admin/adddevs">Add new Developer <i class="fas fa-plus-circle"></i></a></div>
    </div>
  </div>

</div>

<br>
<div class="container card h-100 shadow border-0">
  <div id="table-header fw-bolder"> </div>
  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th scope="col" class="text-primary">ID</th>
        <th scope="col" class="text-primary">Name</th>
        <th scope="col" class="text-primary">Contact</th>
        <th scope="col" class="text-primary">Email</th>
        <th scope="col" class="text-primary">Specialty</th>
        <th scope="col" class="text-primary">Description</th>
        <th scope="col" class="text-primary">Join Date</th>
        <th scope="col" class="text-primary">Edit</th>
        <th scope="col" class="text-primary">Remove</th>
      </tr>
    </thead>


    <tbody>
      <?php foreach ($devs as $udata) : ?>
        <tr>
          <?php print '<td>' . htmlentities($udata->id) . '</td>'; ?>
          <?php print '<td class= "text-info">' . htmlentities($udata->name) . '</td>'; ?>
          <?php print '<td>' . htmlentities($udata->contact) . '</td>'; ?>
          <?php print '<td>' . htmlentities($udata->email) . '</td>'; ?>
          <?php print '<td>' . htmlentities($udata->specialty) . '</td>'; ?>
          <?php print '<td>' . htmlentities($udata->description) . '</td>'; ?>
          <?php print '<td>' . htmlentities($udata->join_date) . '</td>'; ?>

          <?php
          
            print '<td>';
            print '<a href= "' . base_url() . 'Admin/edit_dev/' . $udata->id . '" title= "Edit" class="btn btn-primary btn-sm rounded-pill"><i class="fas fa-pencil-alt"></i></a>';

            print '</td>';
          
          ?>

          <?php
          
            print '<td>';
            print '<a href= "' . base_url() . 'Admin/deletedev/' . $udata->id . '" title= "Delete" class="btn btn-danger rounded-pill btn-sm delete" data-confirm = "Are you sure to delete this Dev?"><i class="fas fa-times"></i></a>';

            print '</td>';
          
          ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>