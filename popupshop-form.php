<?php get_header(); ?>

<form>
  <div class="popupshop-name">
	  <p>Business / Project Name:<br /></p>
	  <input type="text" name="name">
	  <br />
	  <p>Specialize in:<br /></p>
	  <input type="text" name="specialize-in">
	  <br>
  </div>

  <div class="poppupshop-radios">
	  <input type="radio" name="discription" value="project"> Project<br />
	  <input type="radio" name="discription" value="business"> Business<br />
  	  <br />
  </div>
  
  <div class="outline">
	  <p>Outline:<br /></p>
	  <br />
	  <input class="text-box" type="text" alt="Tell us more about the specifics of your event's short-term, mid-term, long-term goals and the general objectives. Please apply the SMART method..."><br />
	  <br />
  </div>

  <input class="popupshop-submit" type="submit" value="Submit">
  <br />

</form>

<?php get_footer(); ?>
