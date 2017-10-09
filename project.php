<?php include("includes/header.php"); ?>

 <div class = "container-fluid Bg ">
  <div class =" projectCont">
	 <ul class="nav nav-tabs responsive-tabs flex-column flex-md-row justify-content-center " role="tablist" >
			<li role="presentation" class="active "><a data-toggle="tab" href="#construction">construction</a></li>
			<li role="presentation"><a  href="#remodeling" aria-controls="remodeling" role="tab" data-toggle="tab">Remodeling</a></li>
			<li role="presentation"><a  href="#painting" aria-controls="painting" role="tab" data-toggle="tab">Painting</a></li>
			<li role="presentation"><a  href="#carpetFloor" aria-controls="carpetFloor" role="tab" data-toggle="tab">Carpet &amp; Floor</a></li>
			<li role="presentation"><a  href="#kitchenBath" aria-controls="kitchenBath" role="tab" data-toggle="tab">Kitchen &amp; Bathroom</a></li>
			<li role="presentation"><a  href="#capentry" aria-controls="capentry" role="tab" data-toggle="tab">Capentry</a></li>
			
			<li role="presentation"><a  href="#roofing" aria-controls="roofing" data-toggle="tab">Roofing</a></li>
	</ul> 
				 <!-- construction-->
			<div class="tab-content">
			   <div role="tabpanel" class="tab-pane tab-pane  in active borderLines " id="construction"> 
						<div class = "row">
						  <div class = "">
						  <h2 class="constra_Heading">STONE PATIO</h2>
						  </div>
						
							<div class = "col-md-12 gallarySpancing">
								<?php include_once("tabs/construction.php"); ?>
							</div>
						</div>
			  
			   </div>
			      
				  <!-- Remodeling Pane-->
	  
			<div id="remodeling" role="tabpanel" class="tab-pane  " > 
						

								<?php include_once("tabs/remodeling/remodeling.php"); ?>
									
								
							
			  
			</div>
			<!-- Painting Pane -->
	      <div id="painting" role="tabpanel" class="tab-pane  borderLines"> 
						
						<div class = "row ">
								<?php include_once("tabs/painting/painting.php"); ?>
								
						</div>
									
							
			</div>
	  
	  <!-- CarpetFloring -->
	  
	   <div id="carpetFloor" role="tabpanel" class="tab-pane borderLines">
                        <?php include_once("tabs/carpetFloor/carpetFloor.php"); ?>
									
							
			</div>
	  
	  <!-- 
	  <!-- KitchenBath -->
	   <div id="kitchenBath" role="tabpanel" class="tab-pane  borderLines  " > 
						
						
						<div class = "row ">
							<div class = "col-xs-12 col-sm-12 col-md-12  ">
								<?php include_once("tabs/kitchenBath/kitchenBath.php"); ?>
							</div>
						</div>
			  
			   </div>
     <!-- Capentry-->
	  <div id="capentry" role="tabpanel" class="tab-pane  borderLines" > 
						<div class = "row">
						  <div class = "col-xs-12 col-sm-12 col-md-12 ">
						  <h2 class="constra_Heading">CARPENTRY</h2>
						  </div>
						</div>
						
						<div class = "row ">
							<div class = "col-xs-12 col-sm-12 col-md-12  gallarySpancing ">
								<?php include_once("tabs/carpentry.php"); ?>
							</div>
						</div>
      <!-- Roofing -->
				  </div>
				    <div id="roofing" role="tabpanel" class="tab-pane  borderLines  " > 
						<div class = "row">
						  <div class = "col-xs-12 col-sm-12 col-md-12 ">
						  <h2 class="constra_Heading">GARAGE ROOF REPLACEMENT</h2>
						  </div>
						</div>
						
						<div class = "row ">
							<div class = "col-xs-12 col-sm-12 col-md-12 gallarySpancing">
								<?php include_once("tabs/roofing.php"); ?>
							</div>
						</div>
				   
			 </div>
    </div>
 
 </div>
 </div>
</div>




<?php include("includes/footer.php"); ?>