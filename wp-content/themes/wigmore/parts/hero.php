<!--
### TASKS ###
- Write a PHP Conditional statement to check if a background image has been set using ACF
  -- If a background image has been set via ACF set the variable $bg_image to the ACF defined image
  -- If a background image has not been added via ACF set the $bg_image to use 'hero-resources.png' in the images directory
- Output the ACF Hero Title
- Output the ACF Hero Text
- If buttons have been set via ACF output the buttons
-->
<?php // Conditionally check and set $bg_image ?>
<section class="hero clearfix" style="background-image: url('<?php // echo $bg_image; ?>');">
    <div class="hero__container container container--hero">
        <div class="hero__content-wrapper">
            <h1 class="hero__title primary-underline"><?php // Output the ACF Hero Title ?></h1>
            <p class="hero__text"><?php // Output the ACF Hero Text ?></p>
			<?php // If buttons have been set via ACF output the buttons ?>
        </div>
    </div>
</section>
