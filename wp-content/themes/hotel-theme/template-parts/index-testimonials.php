<?php 
$testimonials = get_field("testimonials");
?>

<div id="testimonials">

<h2>Testimonials</h2>

<?php foreach ($testimonials as $testimonial) : ?>
  <?php
  $quote = get_the_title( $testimonial->ID );
  $author = get_field("author", $testimonial->ID );
  ?>

  <div class="testimonial">
    <div class="quote">"<?= $quote; ?>"</div>
    <div class="author">- <?= $author; ?></div>
  </div>
<?php endforeach; ?>
</div>