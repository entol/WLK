<?php if (!$this->ion_auth->logged_in())
	 {
	 redirect('auth/login');
	 }
?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
          <ul class="nav nav-tabs">
         <!-- Untuk Semua Tab.. pastikan a href=”#nama_id” sama dengan nama id di “Tap Pane” dibawah-->
           <li class="active"><a href="#blog" data-toggle="tab">Create & Edit</a></li> <!-- Untuk Tab pertama berikan li class=”active” agar pertama kali halaman di load tab langsung active-->
           <li><a href="#category" data-toggle="tab">Blog Category</a></li>
           <li><a href="#draft" data-toggle="tab">Draft</a></li>


          <div class="tab-content">
           <div class="tab-pane active" id="blog" > <!-- Untuk pdf-->
           <div class="col-lg-12"></br>
             <?php   echo $blog;   ?>
           <div class="col-lg-12">


         </div>
         	</div>


           </div>
           <div class="tab-pane" id="category"> <!-- Untuk excell-->
             <div class="col-lg-12"></br>
               <?php   echo $blog_category;   ?>
             <div class="col-lg-12">


           </div>
           	</div>
           </div>
          <div class="tab-pane" id="draft">
           <div class="col-lg-12"></br>
          <?php
           echo $content3; ?>
         	</div>

           </div>

           </div>
           </ul>
				</div>
			</div>
		</div>
	</div>
</section>
