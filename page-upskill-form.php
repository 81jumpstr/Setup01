<?php get_header(); ?>

<form>
  <h1>UPSKILL</h1>
  <ul class="upskill-details">
    <li>
      <label for="bizprojectname">Business/Project Name:</label>
      <input type="text" name="bizprojectname">
    </li>
    <li>  
      <label for="url">Website:</label>
      <input type="text" name="website">
    </li>
    <li>  
      <label for="url">Demoable Website:</label>
      <input type="text" name="demosite">
    </li>
    <li>
      <label for="firstname">Contact First Name:</label>
      <input type="name" name="contact-firstname">
    </li>
    <li>
      <label for="lastname">Contact Last Name:</label>
      <input type="name" name="contact-lastname">
    </li>
    <li>
      <label for="url">Contact website/email address:</label>
      <input type="name" name="contact-url">
    </li>
    <li>
      <label for="description">Description:</label>
	    <textarea class="description" type="text" alt="Brief description of your product/service (140 characters max)...">
	    </textarea>
    </li>
  </ul>

  <div class="1up-radios">
	  <input type="radio" name="description" value="project"> Intervention (not for profit)
	  <input type="radio" name="description" value="project"> Project (for profit)
	  <input type="radio" name="description" value="business"> Business (fundraiser)
	  <input type="radio" name="description" value="business"> Business (for profit)
  </div>
  
  <input class="1up-submit" type="submit" value="Submit">

</form>

<?php get_footer(); ?>
