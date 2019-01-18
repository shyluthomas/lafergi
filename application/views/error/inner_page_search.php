<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
?>

<?php  $this->load->view('include/header_inner'); ?>



<!---------Featured Properties------------>
<div class="errorPage">
<div class="errorPageInn">
	<form name="search" method="post" enctype="" action="">
    <table>    
    <tr style="height:50px;" >
    <th>Price:</th>
    <td>Min price:<input type="text" name="min_price" /></td><td>Max Price:<input type="text" name="max_price"/></td>
    
    </tr>
    
    <tr style="height:50px;">
    <th>Type:</th>
    <td><input type="checkbox" name="condos" value="condos"/>condos</td>
    <td><input type="checkbox" name="condos" value="homes"/>homes</td>
     <td><input type="checkbox" name="condos" value="townhouses"/>Townhouses</td>
    </tr>
    <tr style="height:50px;">
    <th>Beds:</th>
     <td><input type="radio" name="beds" name="beds"/>Any</td>
     <td><input type="radio" name="beds" value="1"/>+1</td>
     <td><input type="radio" name="beds" value="2"/>+2</td>
     <td><input type="radio" name="beds" value="3"/>+3</td>
     <td><input type="radio" name="beds" value="4"/>+4</td>
    </tr>
    
    <tr style="height:50px;">
    <th>Baths:</th>
        <td><input type="radio" name="baths" value=""/>Any</td>
    <td><input type="radio" name="baths" value="1"/>+1</td>
     <td><input type="radio" name="baths" value="2"/>+2</td>
     <td><input type="radio" name="baths" value="3"/>+3</td>
     <td><input type="radio" name="baths" value="4"/>+4</td>
    </tr>
    
    
    <tr style="height:50px;">
    <th>More</th>
    
    <td>SQFT<select name="">
    <option value="">Select</option>
    	<option value="500">500</option>
    	</select>to
        <select name="">
    <option value="">Select</option>
    	<option value="500">500</option>
    	</select>
    </td>
    <td>ACRES<select name="">
    <option value="">Select</option>
    	<option value="0.8">1/8</option>
    	</select>to
        <select name="">
    <option value="">Select</option>
    	<option value="0.8">1/8</option>
    	</select>
    </td>
     <td>Stories<select name="">
    <option value="">Select</option>
    	<option value="0.8">1/8</option>
    	</select>to
       <select>
        <option value="">Select</option>
    	<option value="0.8">1/8</option>
    	</select>
    </td>
    
    </tr>
    <tr style="height:50px;">
    <th>Year Bult</th>
    <td>
    <select name="year_bult">
    <option value="">From</option>
    	<option value="2013">2013</option>
    </select>
    </td>
     <td>
    <select name="year_bult">
    <option value="">To</option>
    	<option value="2013">2013</option>
    </select>
    </td>
    
    <tr style="height:50px;">
    
    <tr>
    <th>Garage spaces</th>
    <td>
    <select name="garage_spaces_from">
    <option value="">From</option>
    	<option value="1">1</option>
        <option value="2">2</option>
    </select>
    </td>
     <td>
    <select name="garage_spaces_to">
    <option value="">To</option>
   		<option value="1">1</option>
        <option value="2">2</option>
    </select>
    </td>
    
    <tr style="height:50px;">
    
     <tr>
    <th>Day on Site</th>
    <td>
    <select name="days_on_site">
    <option value="">Any</option>
    	<option value="1">New Listings(since yesterday)</option>
        <option value="2">Less than 3 days</option>
        <option value="2">Less than 7 days</option>
    </select>
    </td>
    </tr>
    <tr style="height:50px;">
    <th>Price reduced</th>
     <td>
    <select name="Price_reduced">
    <option value="">Any</option>
   		<option value="1">Newest</option>
        <option value="2">Last 3 days</option>
        <option value="2">Less than 7 days</option>
    </select>
    </td>
    
    <tr style="height:50px;">
    
    <tr style="height:50px;">
    <th>Popular Searches</th>
    <td>Has Photos<input type="checkbox"  name="has_photos"/></td>
    <td>Has Waterfront<input type="checkbox"  name="waterfront"/></td>
     <td>New Construction<input type="checkbox"  name="new_construction"/></td>
      <td>Garage<input type="checkbox"  name="garage"/></td>
      <td>pool<input type="checkbox"  name="pool"/></td>
        <td>fireplace<input type="checkbox"  name="fireplace"/></td>
         <td>Master Downstairs<input type="checkbox"  name="master_downstairs"/></td>
        <td>Basement<input type="checkbox"  name="basement"/></td>
    </tr>
   
    <tr><th>REsults</th><td>Result here</td></tr>
    
    <tr><td><input type="submit" name="search" value="search"/></td></tr>
    </table> 
    </form>   
</div>
</div>
<!---------End of Featured Properties------------>

<?php  $this->load->view('include/footer'); ?>