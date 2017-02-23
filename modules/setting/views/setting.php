<section class="content">
	<div class="row">
		<div class="col-md-12">
		
			<div class="box flat">
			<h4 class="content-header"><i class="fa fa-user"></i> Profile	</h4>
			
			<section class="content" style="min-height: 260px;">
       


<section class="content entol-user-profile" style="min-height: 260px;">
<div class="row"><?php foreach ($tamvan->result() as $row) { ?>
	<div class="col-md-3 table-responsive entol-pf-border no-padding entolArLangCss" style="margin-bottom:15px">
		<div class="col-md-12 text-center">
			<img class="img-circle entol-img-disp" width="100" height="100" src="<?php echo base_url();?>uploads/<?php echo $row->foto;?>" alt="<?php echo $row->nama_lengkap;?>">		<div class="photo-edit">
						<!--a class="photo-edit-icon" href="" title="Change Avatar" data-toggle="modal" data-target="#basicModal"><i class="fa fa-pencil"></i></a-->					</div>
		</div>
		<table class="table table-striped">
			<tbody><tr>
				<th>User ID</th>
				<td><?php echo $row->id;?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $row->nama_lengkap;?></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><?php echo $row->title;?></td>	
			</tr>
			<tr>
				<th>Member Since</th>
				<td><?php echo $row->aktif_sejak;?></td>			
			</tr>
			<tr>
				<th>Category</th>
				<td>	</td>		
			</tr>
			<tr>
				<th><label for="empinfo-emp_mobile_no">Mobile No</label></th>
				<td><?php echo $row->phone;?></td>
			</tr>	
			<tr>
				<th><label for="empinfo-emp_email_id">Email ID</label></th>
				<td><?php echo $row->email;?></td>
			</tr>
			<tr>
				<th>Status</th>
				<td><span class="label label-success">Active</span>
									</td>
									<?php }?>
			</tr>
		</tbody></table>
	</div>

	<div class="col-md-9 profile-data">
		<?php echo $content ;?>
		
     </div> <!---End Row Div--->
</section>


    </section>

			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
jQuery(document).on("xcrudafterrequest",function(event,container){
    if(Xcrud.current_task == 'save')
    {
       
        location.reload();
        //Xcrud.show_message(container,'Page Updated','success');
    }
});
</script>