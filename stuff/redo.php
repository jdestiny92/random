.projBackground
{
	background:#e7e2c4 !important;
}
.tab_pane
{
	padding: 0px !important;
	margin: 0px !important;
	 
	
}
.tabCol
{
 padding-right: 1px;	
}

.paneContainer
{
	padding-left: 80px;
}
.tab-content{
    background-color:#cec2ab;
    color:#926c04;
    padding:0px
}
/* =========================== */
.nav-tabs > li {
	background-color:#e7e2c4 !important;
	 background-color:#cec2ab;
    float:none;
    display:inline-block;
    zoom:1;
} 88
.nav-tabs, .nav-pills {
    text-align:center;
}
.tabPane { 
 width:100%; 
 height:100%;
 
 background-color:#cec2ab;
 border-style: solid;
 
 
 border-radius: 5px;
 /* text-align:center; */
 } 

.nav-tabs > li a {
 
/* border: 1px solid #1A3E5E; */
 
background-color:#c8bba1;
 
color:#;
border: medium none;
   color:#978e35; 
   font-family: 'Raleway', sans-serif;
   font-weight: 600;
 
}
 
 
 
.nav-tabs > li.active > a,
 
.nav-tabs > li.active > a:focus,
 
.nav-tabs > li.active > a:hover{
 
background-color:#cec2ab;
 
color:#978e35;
 
/* border: 1px solid #1A3E5E; */
 
border-bottom-color: transparent;
 
}
 
 
 
.nav-tabs > li > a:hover{
 
background-color: #cec2ab !important;
 
border-radius: 0px;
 
color:#926c04;

background-color: #c8bba1 !important;
    border: medium none;
    border-radius: 0;
    color:#926c04;
 
 
 
}
 
 
.constra_Heading
{
	padding-left: 10px;
	color: #978e35;
	font-family: 'Abril Fatface', cursive;
	text-align: left !important;
	 
	
	
}

.gallary
{
	padding-left: 200px;
	padding-right: 200px;
}
/* === */


<?php include("includes/header.php"); ?>
<div class = "projBackground ">

<div class = "container-fluid">
<div class = "row">

 <ul class="nav nav-tabs  ">
        <li class="active "><a data-toggle="tab" href="#construction">construction</a></li>
        <li><a data-toggle="tab" href="#remodeling">Remodeling</a></li>
        <li><a data-toggle="tab" href="#painting">Painting</a></li>
        <li><a data-toggle="tab" href="#carpetFloring">Carpet & Floring</a></li>
		<li><a data-toggle="tab" href="#kitchenBath">Kitchen & Bathroom</a></li>
		<li><a data-toggle="tab" href="#capentry">Capentry</a></li>
		<li><a data-toggle="tab" href="#carpetFloring">Carpet & Floring</a></li>
		<li><a data-toggle="tab" href="#roofing">Roofing</a></li>
      </ul>
 </div>
       <!-- Construction Pane -->
      
	 <div class = "tab-content">
        <div class=" tab-pane  fade in active" id="construction">
          <?php include("tabs/construction.php"); ?>
        </div>
       
      

	  <!-- Remodeling Pane-->
	  
	  
	  <!-- Painting Pane -->
	  
	  <!-- CarpetFloring -->
	  
	  <!-- KitchenBath -->
     <!-- Capentry-->
      <!-- Carpet & Floring -->	
 
	    
	  <div class = "tab-content">
			  <!-- Construction Pane -->
				  <div id = "remodeling" class ="tab-pane fade in active">
				  <div class = "row">
				  <div class = "col-md-6">
				  
				  <h2 class="constra_Heading">STONE PATIO</h2>
				 
				  </div>
				  </div>
				   <div class = "row">
				  <div class = "col-md-12 gallarySpancing">
				   <?php include("tabs/remodeling.php"); ?>
				  </div>
				  </div>
				  </div>
				  
				  
				  <!-- Remodeling Pane-->
				  <div id = "remodeling" class ="tab-pane active">
				  <div class = "row">
				  <div class = "col-md-6">
				  
				  <h2 class="constra_Heading">STONE PATIO</h2>
				 
				  </div>
				  </div>
				   <div class = "row">
				  <div class = "col-md-12 gallarySpancing">
				   <?php include("tabs/remodeling.php"); ?>
				  </div>
				  </div>
				  </div>
	  
 

 
  </div>
  
</div>


<?php include("includes/footer.php"); ?>