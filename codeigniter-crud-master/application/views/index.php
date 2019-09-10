<!-- Start Header -->
<div class="page-header">
	<h1>Create, Read, Update and Delete</h1>
</div>
<!-- End Header -->

<!-- Start Top Menu -->
<div class="padding">
	<a href="<?php echo base_url(); ?>create" type="button" class="btn btn-sm btn-success">Create</a>
</div>
<!-- End Top Menu -->

<!-- Start Content -->
<div class="row">
	<div class="col-md-12">

		<!-- Start User Queries -->
		<table class="table table-striped table-bordered">

			<!-- Start User Head Information -->
		    <thead>
		        <tr>
				    <th class="col-md-3">Id:</th>
				    <th class="col-md-3">E-mail:</th>
				    <th class="col-md-3">Password:</th>
				    <th class="col-md-3">Actions:</th>
		        </tr>
		    </thead>
		    <!-- End User Head Information -->

		    <!-- Start User Content Information and Menu -->
		    <tbody>
				<?php foreach($all->result() as $row): ?>
			        <tr>
					    <td>
					        <?php echo $row->id; ?>
					    </td>
					    <td>
					        <?php echo $row->email; ?>
					    </td>
					    <td>
					        <?php echo $row->password; ?>
					    </td>
					    <td>
					        <a href="<?php echo base_url(); ?>read/index/<?php echo $row->id; ?>" type="button" class="btn btn-sm btn-default">Read</a>
					        <a href="<?php echo base_url(); ?>update/index/<?php echo $row->id; ?>" type="button" class="btn btn-sm btn-warning">Update</a>
					        <a href="<?php echo base_url(); ?>delete/index/<?php echo $row->id; ?>" type="button" class="btn btn-sm btn-danger">Delete</a>
					    </td>
			        </tr>
				<?php endforeach; ?>
		    </tbody>
		    <!-- End User Content Information and Menu -->

		</table>
		<!-- End User Queries -->

	</div>
</div>
<!-- End Content -->