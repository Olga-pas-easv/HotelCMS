
<?php
    $heroFoto = get_field("hero-foto");
    $heroSection = get_field("hero-group");
    $heroTitle =  $heroSection["hero-title"];
    $heroText =  $heroSection["hero-desctiption"];
    $textSection = get_field("text-section");
    $textSection1 =  $textSection["text-section1"];
    $textSection2 =  $textSection["text-section2"];
    $textSection3 =  $textSection["text-section3"];
?>

<div class="hero-img" style="background-image: url(<? echo $heroFoto["url"] ?>);" >
    <div class="container-welcome">
        <h1><?= $heroTitle ?></h1>      
        <p><?= $heroText ?></p>
    </div>
</div>
<div class="text-section">
     <p><?= $textSection1 ?></p>
     <p><?= $textSection2 ?></p>
     <p><?= $textSection3 ?></p>
</div>
  
              


