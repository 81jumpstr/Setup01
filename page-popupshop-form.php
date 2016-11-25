<?php 
/*
 *    Template Name: Page-Popupshop-form
 *    Description: Call-to-Action
 */
?>

<?php get_header(); ?>

<form action="popupshop-action-page.php" class="popupshop-form" method="post">
  <ul class="form-details">
    <li>
	    <label for="bizprojectname">Business / Project Name:</label>
	    <input type="text" name="bizprojectname">
	  </li>
	  <li>  
	    <label for="specialize-in">Specialize in:</label>
	    <input type="text" name="specialize-in">
    </li>
  </ul>

  <div class="popupshop-radios">
	  <input type="radio" name="description" value="project"> Project
	  <input type="radio" name="description" value="business"> Business
  </div>
  
  <ul class="form-details">
    <li>
	    <label for="outline">Outline:</label>
	    <textarea class="outline" type="text" alt="Tell us more about the specifics of your event's short-term, mid-term, long-term goals and the general objectives. Please apply the SMART method...">
	  </textarea>
	  </li>
  </ul>

  <input class="popupshop-submit" type="submit" value="Submit">

</form>

<?php get_footer(); ?>
