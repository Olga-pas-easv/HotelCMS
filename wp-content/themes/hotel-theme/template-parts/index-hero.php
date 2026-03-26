
<?php
    $heroFoto = get_field("hero-foto");
    $heroTitle = get_field("hero-title");
    $textText = get_field("hero-desctiption");
?>

<div class="hero-img" style="background-image: url(<? echo $heroFoto["url"] ?>);" aria-hidden="true"></div>
<p><?= $heroTitle; ?></p>      
<p><?= $textText; ?></p>

  
              


