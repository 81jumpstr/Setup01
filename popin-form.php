<?php get_header(); ?>

<form>
  <div class="poppin-namesurname">
	  <p>First name:<br /></p>
	  <input type="text" name="firstname">
	  <br />
	  <p>Last name:<br /></p>
	  <input type="text" name="lastname">
	  <br>
  </div>

  <div class="poppin-radios">
	  <input type="radio" name="gender" value="male"> Male<br />
	  <input type="radio" name="gender" value="female"> Female<br />
	  <input type="radio" name="gender" value="other"> Other<br />
  	  <br />
  </div>
  
  <div class="outline">
	  <p>Outline:<br /></p>
	  <br />
	  <input class="text-box" type="text" alt="Tell us more about the specifics of your event's short-term, mid-term, long-term goals and the general objective."><br />
	  <br />
  </div>

  <input class="poppin-submit" type="submit" value="Submit">
  <br />

</form>

<?php get_footer(); ?>
