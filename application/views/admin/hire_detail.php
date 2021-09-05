<!--=== Success msg ===-->
<?php
if ($this->session->flashdata('success')) {
	print '<div class= "success-msg">' . $this->session->flashdata('success') . '</div>';
}
?>
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">
		<h5 class="mb-2 mb-sm-0 pt-1">
			<a class="text-primary"><i class="far fa-newspaper"></i>&nbsp;</a><span><b>Hire details</b></span>
		</h5>
	</div>
</div>
<div class="container">
	<div class="row">
	<div class="col-lg-3"></div>
		<div class=" col-lg-7">
			<div id="table-header"></div><br>
			
			<table class="table">
				<tr>
					<th class="text-primary">Record ID</th>
					<td colspan="1"><b><?= $hire_detail->recordID ?></b></td>
				</tr>
				<tr>
					<th class="text-primary">Hired by</th>
					<td colspan="1"><b><?= strip_tags($hire_detail->name) ?></b></td>
				</tr>
				<tr>
					<th class="text-primary">User Contact</th>
					<td colspan="1"><?= strip_tags($hire_detail->contact) ?></td>
				</tr>
				<tr>
					<th class="text-primary">User Email</th>
					<td colspan="1"><?= strip_tags($hire_detail->email) ?></td>
				</tr>
				<tr>
					<th class="text-primary">Developer Name</th>
					<td colspan="1"><b><?= strip_tags($dev_detail->name) ?></b></td>
				</tr>
				<tr>
					<th class="text-primary">Developer Contact</th>
					<td colspan="1"><?= strip_tags($dev_detail->contact) ?></td>
				</tr>
				<tr>
					<th class="text-primary">Developer Email</th>
					<td colspan="1"><?= strip_tags($dev_detail->email) ?></td>
				</tr>

				<tr>
					<th class="text-primary">Hire Date</th>
					<td colspan="1"><?= date('h:i a, d-M y', strtotime($hire_detail->orderdate)) ?></td>
				</tr>
			</table>

		</div>
		<div class="col-lg-2"></div>
	</div>
</div>