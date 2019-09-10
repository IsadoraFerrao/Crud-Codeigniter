<!-- Start Header -->
<div class="page-header">
	<h1>Create</h1>
</div>
<!-- End Header -->

<!-- Start Top Menu -->
<div class="padding">
	<a href="<?php echo base_url(); ?>">Back to the homepage</a>
</div>
<!-- End Top Menu -->

<!-- Start Content -->
<div class="row">
	<div class="col-md-12">

		<!-- Start Form Update -->
		<form method="post" action="<?php echo base_url(); ?>create/create/">
			<table class="table table-striped table-bordered">
				
				<!-- Start User Head Information -->
			    <thead>
			        <tr>
					    <th class="col-md-3">Id:</th>
					    <th class="col-md-3">E-mail:</th>
					    <th class="col-md-3">Password:</th>
					    <th class="col-md-3">Submit:</th>
			        </tr>
			    </thead>
		    	<!-- End User Head Information -->

		    	<!-- Start User Content Form -->
			    <tbody>
			        <tr>
					    <td>
					        Autocomplete
					    </td>
					    <td>
					        <input type="email" name="email" class="form-control" placeholder="E-mail">
					    </td>
					    <td>
					        <input type="password" name="password" class="form-control" placeholder="Password">
					    </td>
					    <td>
					        <button type="submit" class="btn btn-default">Submit</button>
					    </td>
			        </tr>
			    </tbody>
		    	<!-- End User Content Form -->

			</table>
		</form>
		<!-- End Form Update -->
	
	</div>
</div>
<!-- End Content -->