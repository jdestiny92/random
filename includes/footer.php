<footer class="footer footer-section">
			  <div class="container-fluid ">
					<div class ="row row-section">
					<div class = "col-xs-4 col-sm-4 col-md-4 ">
					 <div class=" footer-logo">
 <a href="http://www.ejgeneralcontractors.com/"><img src="resource/images/bottom_logo.png" height="74" width="220" alt="" /></a>
                     </div>
					
					</div>
							<div class = "col-xs-6 col-sm-6 col-md-6 ">
										 <div class=" middlebox" >
												
													<div class="sidebar-address">
								<div class="footer-title">Office Contacts</div>
															<ul>
																<li>
																<i class="line-icon vc_li vc_li-location"></i>
																<div>North Plainfield NJ 7060</div>
																</li>
																<li>
																<i class="line-icon vc_li vc_li-phone"></i>
																<div class="tel"><strong>Tel :</strong>  (908)217-8028</div>
																<div class="fax"><strong>Fax :</strong> 908-217-5252</div>
																</li>
																<li>
																<i class="line-icon vc_li vc_li-world"></i>
																<div class="email"><strong>Email :</strong> ej_generalcontractors@outlook.com</div>
																</li>
															</ul>	
													</div>
										 </div>
							
							</div>
					

					
			  </div>
			  </div>
			  <div class = "container-fluid sub-footer">
			  
				
					<div class = "row">
						<div class ="col-xs-6 col-sm-6 col-md-6">
							<div class = "copy-right">
							Copyright © 2016 E & J General Contractors LLC 
							<a href="http://www.ejgeneralcontractors.com/">E &amp; J General Contractors LLC</a>
							</div>
						</div>
					     <div class ="col-xs-4 col-sm-4 col-md-4">
							<div class="social-icon">
                        <ul>
					     <li class="facebook"><a target="_blank" href="http://www.facebook.com/EJGeneralContractors"><i class="fa fa-facebook"></i></a></li>
                                                                                                                                                                                                                                							<li class= "mail"><a href="mailto:ej_generalcontractors@outlook.com">
																													<img src="resource/images/email.png" class"img-fluid" height="47px" width="47px" /></a></li>
                        </ul>
                     </div>
						</div>
					</div>
				
			  </div>
        </footer>
		
		
		
		

	  <script js> 
	
	$(document).ready(function() {

  var toggleAffix = function(affixElement, scrollElement, wrapper) {
  
    var height = affixElement.outerHeight(),
        top = wrapper.offset().top;
    
    if (scrollElement.scrollTop() >= top){
        wrapper.height(height);
        affixElement.addClass("affix");
    }
    else {
        affixElement.removeClass("affix");
        wrapper.height('auto');
    }
      
  };
  

  $('[data-toggle="affix"]').each(function() {
    var ele = $(this),
        wrapper = $('<div></div>');
    
    ele.before(wrapper);
    $(window).on('scroll resize', function() {
        toggleAffix(ele, $(this), wrapper);
    });
    
    // init
    toggleAffix(ele, $(window), wrapper);
  });
  
});
	</script>
	
	 
  
  
  <input name="animation" type="hidden">
  
 
	  
</body>
</html>