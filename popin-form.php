<?php get_header(); ?>

<form action="popin-page.php" method="post" class="popin-form">
  <ul class="form-fields">
    <li>
      <label for="firstname">First Name:</label>
      <input type="name" name="firstname">
    </li>
    <li>
      <label for="lastname">Last Name:</label>
      <input type="name" name="lastname">
    </li>
  </ul>  

  <div class="popin-radios">
    <ul>
      <li>
        <input type="radio" name="gender" value="male"> Male<br />
        <input type="radio" name="gender" value="female"> Female<br />
        <input type="radio" name="gender" value="other"> Other<br />
      </li>
    </ul>
  </div>

  <ul class="form-fields">
    <li >
	  <label class="outline" for="outline">Outline:</label>
	  <textarea class="outline-box" name="outline">Tell us more about the specifics of your event's short-term, mid-term, long-term goals and the general objective.
	  </textarea>
    </li>
  </ul>

  <input class="popin-submit" type="submit" value="Submit">

</form>

<?php get_footer(); ?>
