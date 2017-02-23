<!--section class="content-header">
          <h1>
            <?php echo $title_map;?>
            <small><?php echo $activeSubmenu;?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> <?php ;?></li>
          </ol>
        </section-->
<section class="content">
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right"">
                  <li class="active"><a href="#blog" data-toggle="tab" aria-expanded="true"> Isometric List</a></li>
                  <li class=""><a href="#mm" data-toggle="tab" aria-expanded="false"> Main Material</a></li>
                  <li class=""><a href="#lc" data-toggle="tab" aria-expanded="false"> Line Class</a></li>
                  <!--li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                  </li-->
                  <li class="pull-left header"><i class="fa fa-th"></i><?php ?></li>

                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="blog">
                    <?php echo $iso ;?>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="mm">
                      <?php echo $mm ;?>
                  </div><!-- /.tab-pane -->
                   <div class="tab-pane" id="lc">
                    <?php echo $lc ;?>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
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
