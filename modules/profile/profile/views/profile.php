<style>
	.modal {
        display:    none;
        position:   fixed;
        z-index:    1000;
        top:        0;
        left:       0;
        height:     100%;
        width:      100%;
        background: rgba( 255, 255, 255, .8 );
    }

    #history{
		position:   fixed;
		top:        30%;
        left:       25%;
        width:      50%;
	}

	#history .box-body table{
		margin-left: auto;
		margin-right: auto;
	}

	#history .box-body table td{
		padding: 10px;
	}

    /* When the body has the loading class, we turn
       the scrollbar off with overflow:hidden */
    body.loading {
        overflow: hidden;
    }

    /* Anytime the body has the loading class, our
       modal element will be visible */
    body.loading .modal {
        display: block;
    }
</style>
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
