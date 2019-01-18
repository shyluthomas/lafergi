
<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
	//var_dump($neighbour);
?>

<?php  $this->load->view('include/header_home'); ?>



<script type="text/javascript">
	function ajax_newsletter()
	{
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 var ema=$('#sub_email').val();
		
		 var form_data = {                           
                            email: $('#sub_email').val()                           
                        };
						if( $('#sub_email').val()==""){
									document.getElementById("txtHint").innerHTML='<div class="hom_email_val">Please fill the field..</div>';
									exit();
									}	
						if (!filter.test(ema)) {
							document.getElementById("txtHint").innerHTML='<div class="hom_email_val">Invalid Email..</div>';
									exit();
							
						}
		$.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/checkuser/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
																
									if(msg==1)
										{
										//document.getElementById("txtHint").innerHTML='<div class="hom_email_val">User Already Exist..</div>';
										var html='<div class="hom_email_val">User Already Exist..</div>';
										 $( "#txtHint" ).delay(5000).fadeOut("slow").html(html);
										}
										else
										{
											//document.getElementById("txtHint").innerHTML='<div class="hom_email_val">You are subscribed to our newsletter</div>';
											var html='<div class="hom_email_val">You are subscribed to our newsletter</div>';
										 $( "#txtHint" ).delay(5000).fadeOut("slow").html(html);
										}
									
                                /*$('txtHint').prepend('<h5 class="good">Message sent!</h5>');
                                $('h5.good').delay(3000).fadeOut(500);*/
                               //alert(msg);
                            }
                        });
                        // prevents from refreshing the page
                        return false;  
		
	}


</script>

<!---------Featured Properties------------>
<div class="ftrdProprtys">

<div class="part2Black">
    <div class="part2BlackInn">
   	<div class="partBlckTTl">
		<!--Left-->
        <div class="left">
        	<a href="<?php echo base_url();?>/index.php/property">
        	<h1>buyers</h1>
            <h2>View all properties</h2>
            </a>
        </div>
        <!--End of Light-->
        <!--Right-->
        <div class="right">
        	<a href="<?php echo base_url();?>/index.php/user/buyers_view">
        	<h1>sellers</h1>
            <h2>free home evaluation</h2>
            </a>
        </div>
        <!--End of Right-->        	
    </div>
    </div>
    </div>

<div class="main_features">
    	<ul>
        	<li>
            	<div class="mainli_img"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>r1.png" />
                <noscript><img src="<?php echo $image_path;?>r1.png" alt=""></noscript>
                <a href="<?php echo base_url();?>/index.php/property/gallery_view"><div class="ovr"><h2>See all Listing</h2></div></a></div>
                
                <h3>Gallery View</h3>
                
                <p>Photo gallery of properties</p>
                
            </li>            
            <li>
            <a href="<?php echo site_url();?>/map">
            	<div class="mainli_img"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>ma.png" />
                <noscript><img src="<?php echo $image_path;?>ma.png" alt=""></noscript>
                <div class="ovr"><h2>See all Listing</h2></div></div>
                
                <h3>Map View</h3>
                <p>Google map, sidebar of properties</p>
                </a>
            </li>            
            <li>
            <a href="<?php echo site_url();?>/pages/foreclosure/">
            	<div class="mainli_img"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>r3.png" />
                <noscript><img src="<?php echo $image_path;?>r3.png" alt=""></noscript>
                <div class="ovr"><h2>See all Listing</h2></div>
                </div>
                
                <h3 class="small">Forclosures View</h3>
                
            <p>Large photo, sidebar of properties</p>
            </a>
          	</li>
            
		</ul>

</div>






<!---3 Tiles--->
<div class="tiles">
	<!--Box 1-->
    <div class="box brdr1">
    	<div class="ttl"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>tile_1.png" alt="">
        <noscript><img src="<?php echo $image_path;?>tile_1.png" alt=""></noscript>
        <span>FORECLOSURES</span></div>
        <p class="des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
        <a href="<?php echo site_url(); ?>/user/foreclosure_view/">Know More</a>
    </div>
    <!--Box 1-->
    <!--Box 2-->
    <div class="box brdr2">
    	<div class="ttl"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>tile_2.png" alt="">
        <noscript><img src="<?php echo $image_path;?>tile_2.png" alt=""></noscript>
        <span>FEATURE YOUR PROPERTY</span></div>
        <p class="des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
        <a href="<?php echo site_url(); ?>/pages/feature_property">Know More</a>
    </div>
    <!--Box 2-->
    <!--Box 3-->
    <div class="box brdr3 noBg">
    	<div class="ttl"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>tile_3.png" alt="">
         <noscript><img src="<?php echo $image_path;?>tile_3.png" alt=""></noscript>
        <span>YOUR DREAM HOME</span></div>
        <p class="des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
        <a href="<?php echo site_url(); ?>/pages/dream_home">Know More</a>
    </div>
    <!--Box 3-->

</div>
<!---3 Tiles Ends Here-->





<!-----------------featured-------------->

<div class="ftrdProprtysInn">
	<div class="ttl">
    	<h1>Popular Properties</h1>
    </div>
    <ul>
    
    <?php
		$i=1;
		if(isset($onlinepro_popular))
		{
		foreach($onlinepro_popular as $view)
		{
			
		
			?>
            <a href="<?php echo site_url(); ?>/property/details/<?php echo stripslashes($view['details']['listing_id']); ?><?php if($view['details']['address_no']!="") { echo "/".url_title(stripslashes($view['details']['address_no'])); }?><?php if($view['details']['address_street']!="") { echo "/".url_title(stripslashes($view['details']['address_street'])); }?><?php if($view['details']['l_city']!="") { echo "/".url_title(
			stripslashes($view['details']['l_city'])); }?>">
            <li <?php if($i==4) { ?> class="no_mar" <?php } ?>>
            	<div class="outter_top">
                	<h1><?php if($view['details']['address_no']!="") { echo stripslashes($view['details']['address_no']); }?>
					<?php if($view['details']['address_street']!="") { echo stripslashes($view['details']['address_street']); } else { ?>Not Provided<?php }?></h1>
                    <h2><?php if($view['details']['l_city']!="") { echo ucfirst(stripslashes($view['details']['l_city'])); } else { ?>No Name<?php }?></h2>
                </div>
                    
 <img src="<?php if(isset($view['img'])){echo $image_path.'property/RES/'.$view['details']['listing_id'].'/Meduim/'.$view['img']; }
					else {echo $image_path.'default.jpg';} ?>" alt="<?php echo ucfirst(stripslashes($view['details']['l_city'])); ?>" />

                   
                <div class="item">
                    <span class="lft">
                      	<?php if($view['details']['beds']!="") { echo stripslashes($view['details']['beds']); } else { ?> 0 <?php }?> Beds, 
                        <?php if($view['details']['baths_full']!="") { echo stripslashes($view['details']['baths_full']); } else { ?> 0 <?php }?> full, 
                        <?php if($view['details']['baths_half']!="") { echo stripslashes($view['details']['baths_half']); } else { ?> 0 <?php }?> half baths,
                        
        			</span>                        
                </div>
                    
                <div class="item">
                     <span class="lft">
        				 <?php if($view['details']['squre_feet']!="") { echo'Home size:'. stripslashes($view['details']['squre_feet'])." sqft"; } 
						else { 
							if($view['details']['style']!="") { echo'Style:'.$view['details']['style']."";}
						 }?>
                        <h4> <?php if($view['details']['asking_price']!=0) { echo "$ ".number_format(stripslashes($view['details']['asking_price']),2); } else { echo "$ ".number_format(stripslashes($view['details']['l_original_price']),2); }?></h4>
                     </span>                        
                </div>
            
        	</li>
            </a>
            <?php
			
			if($i==4) { $i=1; }
			$i++;
		}
	} //if ends here
	else
	echo 'Rets Not Connected';
	
	
	?>
    
    
   
    </ul>
    
</div>
</div>
<!---------End of Featured Properties------------>







<!---------Home Conten2 Starts------------>
<div class="ttrdProprtysInn">
	<div class="ttl">
    	<h1>Latest Listings</h1>
    </div>
    <ul>
    
    
    <?php
		$i=1;
        if(isset($onlinepro_latest))
        {
        foreach($onlinepro_latest as $view)
        {
            
            ?>
            <a href="<?php echo site_url(); ?>/property/details/<?php echo stripslashes($view['L_ListingID']); ?><?php if($view['L_AddressNumber']!="") { echo "/".url_title(stripslashes($view['L_AddressNumber'])); }?><?php if($view['L_AddressStreet']!="") { echo "/".url_title(stripslashes($view['L_AddressStreet'])); }?><?php if($view['L_City']!="") { echo "/".url_title(stripslashes($view['L_City'])); }?>">
            <li <?php if($i==4) { ?> class="no_mar" <?php } ?>>
           	
            <!--<div class="ss_riben"><p>New Listing</p></div>-->
            <div class="ss_ho_strip"><i>New</i><span></span></div>
                        
                <div class="outter_top">
                    <h1><?php if($view['L_AddressNumber']!="") { echo stripslashes($view['L_AddressNumber']); }?>
                    <?php if($view['L_AddressStreet']!="") { echo stripslashes($view['L_AddressStreet']); } else { ?>Not Provided<?php }?></h1>
                    <h2><?php if($view['L_City']!="") { echo ucfirst(stripslashes($view['L_City'])); } else { ?>No Name<?php }?></h2>
                </div>
                    <img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo 'data:image/jpeg;base64,' . base64_encode($view['images'][0]); ?>" alt="<?php echo ucfirst(stripslashes($view['L_City'])); ?>" />
 <noscript> <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($view['images'][0]); ?>" alt="<?php echo ucfirst(stripslashes($view['L_City'])); ?>" /></noscript>

                   
                <div class="item">
                    <span class="lft">
                          <?php if($view['L_Keyword1']!="") { echo stripslashes($view['L_Keyword1']); } else { ?> 0 <?php }?> Beds, 
                        <?php if($view['L_Keyword2']!="") { echo stripslashes($view['L_Keyword2']); } else { ?> 0 <?php }?> full, 
                        <?php if($view['L_Keyword3']!="") { echo stripslashes($view['L_Keyword3']); } else { ?> 0 <?php }?> half baths,
                        
                    </span>                        
                </div>
                    
                <div class="item">
                     <span class="lft">
                         <?php if($view['L_SquareFeet']!="") { echo'Home size:'. number_format(stripslashes($view['L_SquareFeet']),2)." sqft"; } 
                        else { 
                            if($view['L_Keyword5']!="") { echo'Style:'.$view['L_Keyword5']."";}
                         }?>
                        <h4> <?php if($view['L_AskingPrice']!="") { echo "$ ".number_format(stripslashes($view['L_AskingPrice']),2); } else { echo "$ ".number_format(stripslashes($view['details']['l_original_price']),2); }?></h4>
                     </span>                        
                </div>
            
            </li>
            </a>
            <?php
            
            if($i==4) { $i=1; }
            $i++;
        }
    }
    else
    echo 'Rets Not Connected';
    
    ?>
    
  
    </ul>
    
</div>
</div>

<!---------End of Home Content2 ------------>



<!---------blog and video ------------>

<div class="list_1"> 

<div class="widget-inner">        
        <h2 class="list_head">Blog</h2>
        
        <div class="blog_round"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>blog.png">
        <noscript><img src="<?php echo $image_path;?>blank.png" alt=""></noscript></div>
        
        
        
       <!-- hover effect-->
       
       
       <div class="hov_listing">
	  	<div class="top_21">
		<span class="date"><?php echo date("F d Y")?></span>

		<div class="blds clearfix">
        
			<!--	----------UL--------strts herr-------------->
            
            <?php
				$i=1;
				foreach($blog_details as $blog_view)
				{
					if($i==1 || $i==7){?><ul class="left"><?php }
					 ?>
					
                    <li>

							<a class="" href="<?php echo site_url();?>/blog/view/<?php echo $blog_view['blog']['blog_id'];?>" data-name="15 Union Square West" data-address="15 Union Square West" data-image="#" data-thumbnail="#" data-price="$3,035" data-apts="3" data-rating="88">
								<?php echo substr(ucfirst(stripslashes($blog_view['blog']['blog_title'])),0,28); ?>
                                <div class="bld_tip clearfix">
                                	<div class="image_holder">
                                    	<img src="<?php echo $image_path;?>blog/<?php echo $blog_view['blog']['blog_img1']; ?>" onerror="this.src='<?php echo $image_path;?>missing.png';">
                                        
                                     </div>
                                     <div class="tip_title">
									 	<?php echo substr(ucfirst(stripslashes($blog_view['blog']['blog_title'])),0,28); ?>
                                     </div>
                                     <p>
									 	<?php echo substr($blog_view['blog']['blog_content'],0,100)."..."; ?>
                                     </p>
                                     <span>Last Updated : <?php echo date('jS F Y', strtotime($blog_view['blog']['blog_updated']));?></span>
                                
                                	Comments : <div class="rating tk_header">0</div>
                                </div>
                            </a>
						</li>
                        
                   <?php
				   if($i==6 || $i==12 ){?></ul><?php } 
					
					$i=$i+1;
				}
			
			
			?>
            
            
            
				
		</div>

	</div>
	  
</div>
       
       
        <!-- hover effect end-->
        
        
        
        <div class="vid">
        	<div class="vid_video">
            <iframe width="351" height="290" src="//www.youtube.com/embed/3swK5NLrLu8" frameborder="0" allowfullscreen></iframe></div>
            <div class="like"><a href="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FDivinemercydevotion%2F212507128886783&width=450&height=80&colorscheme=light&layout=standard&action=like&show_faces=true&send=true"><img src="<?php echo $image_path;?>like_this_vid.png"></a></div>
            <div class="fb_share"><a href="#" 
  onclick="window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('www.youtube.com/embed/3swK5NLrLu8'), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>fb_share.png">
    <noscript><img src="<?php echo $image_path;?>fb_share.png" alt=""></noscript></a></div>
    
            <div class="tt_share"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>tt_share.png">
            <noscript><img src="<?php echo $image_path;?>tt_share.png" alt=""></noscript></a></div></div>
        </div>
        
    </div>
    
    </div>



<!---------------     end----------------->



<!-----------Top Areas & Neighborhoods------------>


<div class="hmBlog">
	
    
    <!--Item 2-->
    <div class="i2">
    	<h3>Top Areas & Neighborhoods</h3>
        <ul>
        <?php foreach ($neighbour as $ne_view): ?>
        <?php endforeach; ?>
        	<?php /*?><li><a href="<?php echo site_url().'/search/neighborhood/'.$ne_view['city'];?>"><span><?php echo $ne_view['city'];?></span><label class="round"><?php echo $ne_view['count'];?></label></a></li>
            <?php */?>
            <li><a href="<?php echo site_url().'/search/home/myrtle beach/0/0/0/0/';?>"><span>myrtle beach</span><label class="round">
			<?php echo $myrtl;?></label></a></li>
            
             <li><a href="<?php echo site_url().'/search/home/Carolina Forest/0/0/0/0/';?>"><span>Carolina Forest</span><label class="round"><?php echo $carolina;?></label></a></li>
             
              <li><a href="<?php echo site_url().'/search/home/Murrells Inlet/0/0/0/0/';?>"><span>Murrells Inlet</span><label class="round"><?php echo $murels;?></label></a></li>
              
               <li><a href="<?php echo site_url().'/search/inner/0/0/0/0/0/0/0/0/0/0/0/0/0/0/waterfront/0/';?>"><span>Water Front Homes</span><label class="round">
			   <?php echo $waterfront;?></label></a></li>
               
                <li><a href="<?php echo site_url().'/search/home/myrtle beach/0/0/0/0/';?>"><span>Oceanfront condos</span><label class="round"><?php echo $Oceanfront;?></label></a></li>
                
                 <li><a href="<?php echo site_url().'/pages/foreclosure/Potential Short Sale/';?>"><span>Short Sales</span><label class="round"><?php echo $fore_short;?></label></a></li>
                 
                  <li><a href="<?php echo site_url().'/search/home/North Myrtle Beach/0/0/0/0/';?>"><span>North Myrtle Beach</span><label class="round"><?php echo $north;?></label></a></li>
                  
                   <li><a href="<?php echo site_url().'/search/home/Surfside Beach/0/0/0/0/';?>"><span>Surfside Beach</span><label class="round"><?php echo $Surfside;?></label></a></li>
                   
                    <li><a href="<?php echo site_url().'/search/home/Conway/0/0/0/0/';?>"><span>Conway</span><label class="round"><?php echo $Conway;?></label></a></li>
                    
                     <li><a href="<?php echo site_url().'/search/inner/0/0/0/0/0/0/0/0/0/0/0/0/0/0/On Golf Course/0/';?>"><span>Golf Course Homes</span><label class="round"><?php echo $golf_corse;?></label></a></li>
                     
                      <li><a href="<?php echo site_url().'/newhomes/';?>"><span>New Homes</span><label class="round"><?php echo $newhomews;?></label></a></li>
                      
                       <li><a href="<?php echo site_url().'/pages/foreclosure/Bank Owned/';?>"><span>Foreclosures / Bank Owned</span><label class="round"><?php echo $fore_bank;?></label></a></li>
                       
                        <li><a href="<?php echo site_url().'/search/home/myrtle beach/0/0/0/0/';?>"><span>Cherry Grove / Little River</span><label class="round"><?php echo $ne_view['count'];?></label></a></li>
            
             <li><a href="<?php echo site_url().'/search/home/Garden City Beach/0/0/0/0/';?>"><span>Garden City Beach</span><label class="round"><?php echo $garden;?></label></a></li>
             
             <li><a href="<?php echo site_url().'/search/home/Grande Dunes/0/0/0/0/';?>"><span>Grande Dunes Homes</span><label class="round"><?php echo $Grande;?></label></a></li>
             
             <li><a href="<?php echo site_url().'/search/home/myrtle beach/0/0/0/0/';?>"><span>Condos and Townhomes</span><label class="round"><?php echo $condo;?></label></a></li>
             
        </ul>
        
       <!-- -----articles--------->
       <div class="box flRight">
        	<h1>Recent Articles</h1>
            <script type="text/javascript">
            $('#s3').cycle({ 
				fx:     'scrollDown', 
				speed:   600, 
				timeout: 3000, 
				next:   '#s3', 
				pause:   1 
			});
			</script>
            <div id="s3">
            <div class="con">
        		<img src="images/art_01.jpg" alt="">
                <span class="ttl">Happy Mother's Day!</span>
                <span class="date">Posted by Mark Kolodziej<br>May 8, 2013</span>
            </div>
            <div class="con">
        		<img src="images/art_03.jpg" alt="">
                <span class="ttl">ERA Real Estate Professionals is Growing!</span>
                <span class="date">Posted by Dawn Crocker<br>January 3, 2013</span>
            </div>
            <div class="con">
        		<img src="images/art_02.jpg" alt="">
                <span class="ttl">Company Wide Open House</span>
                <span class="date">Posted by Dawn Crocker<br>November 5, 2012</span>
            </div>
            </div>
        </div>
        
        <!-- -----articles--------->
        
    </div>
    <!--Item2 Ends Here-->
   

    
    
</div>



<!-----------end Top Areas & Neighborhoods------------>














<!--------------Content One--------------->
<div class="contentWhite">
<div class="contentWhiteInn">
	<!--Top-->
    <div class="homArea1">
    	<div class="box flLeft"><img class="lazy" src="<?php echo $image_path;?>blank.png" data-original="<?php echo $image_path;?>twins.png" alt="">
        <noscript><img src="<?php echo $image_path;?>twins.png" alt=""></noscript></div>
        
        <div class="mid">
        	<h1>Your Myrtle Beach Home</h1>
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br><br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software. 
            </p>
            <div id="txtHint" style="color:#F00;font-weight:bold;"></div>
           <div class="news_letter">
            	<form action="" method="post" id="email_sub_form" enctype="multipart/form-data" name="newsletter">
                    <input type="email" name="sub_email" id="sub_email" class="news_field" placeholder="Enter Your Email Address" autocomplete="off">
                    <input type="button" name="sub_submit" class="news_butt" value="submit" id="sub_submit" onClick="return ajax_newsletter()">
                </form>
            </div>
            
        </div>
        
      	
        
    </div>
    <!--End of Top-->
    
    <!--Bottom-->
   
    <!--End of Bottom-->
    
</div>	
</div>
<!-----------End of Content One------------>


<!--------Footer Section----------->
<div class="footerSection">
	<!---Top--->
    <div class="top">
    <div class="ftr_topInn">
		<!--Left-->
   		
    	
        <!--right-->
    	<div class="righter">
        	
    	

   
   
   

	<!---Bottom--->
    <div class="bottom">
    
    	<ul>
        <div class="lefter">
        	<a href="#"><img src="images/logo2.png" alt=""></a>
        </div>
			<li><a href="#">Advertise With Us</li>
        	<li><a href="#">Agent Information</a></li>
        	<li><a href="#">Contact Us</a></li>
        </ul>
        <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        
        <h4>©2013 imyrle - Terms of Service - <a href="#">Privacy Policy</a> - Program Policies</h4>
    </div>
    <!---End Bottom--->
    
    
    </div>
    
    <div class="box5">
            	<h1>Get Social</h1>
                <div class="socialise">
                	<ul>
                    	<li><a href="#"><img src="images/icon_fb.png" alt="Facebook"></a></li>
                        <li><a href="#"><img src="images/icon_linked.png" alt="LinkedIn"></a></li>
                        <li><a href="#"><img src="images/icon_yt.png" alt="Youtube"></a></li>
                        <li><a href="#"><img src="images/icon_twtr.png" alt="Twitter"></a></li>
                        <li><a href="#"><img src="images/icon_skype.png" alt="Skype"></a></li>
                        <li><a href="#"><img src="images/icon_gplus.png" alt="Google Pluse"></a></li>
                        <li><a href="#"><img src="images/icon_flicker.png" alt="Flicker"></a></li>
                        <li><a href="#"><img src="images/icon_pin.png" alt="Pinterest"></a></li>
                    </ul>
                </div>
            </div>
    
    </div>    
    <!--End of Top-->
	
    
</div>
<!------End of Footer Section-------->

<!--hover effect-->

<script type="text/javascript" src="js/123.js?crv2.5.132"></script>
<script type="text/javascript">//<![CDATA[
var Gv = Gv || [];
Gv = Object.merge(Gv, {
  env: 'dev',
  url: {
    ext: 'http://198.1.74.28/~spaniac1/imyrtle/index.php'
  }
});
//]>
</script>
<style>
.lazy {
  display: none;
}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url();?>js/lazy/jquery.lazyload.js" type="text/javascript"></script>
<script>
$("img.lazy").show().lazyload();
</script>
<script type="text/javascript">
var jQuery_1_10_2 = $.noConflict(true);
</script>

<!------------------------  search ------------------------------->

<script type="text/javascript" src="js1/underscore.js"></script>
<script type="text/javascript" src="js1/backbone.js"></script>
<script type="text/javascript" src="js1/bt.js"></script>


<!------------------------  search end ------------------------------->


</body>
</html>