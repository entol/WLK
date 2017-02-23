<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
jQuery(document).on("xcrudafterrequest",function(event,container){
    if(Xcrud.current_task == 'save')
    {
        Xcrud.show_message(container,'Saved ','success');
    }
});

</script>
<script type="text/javascript">
jQuery(document).on("xcrudafterrequest",function(event,container){
    if(Xcrud.current_task == 'remove')
    {
        Xcrud.show_message(container,'Deleted ','error');
    }
});

</script>
