
<?php
    $amenities = get_field("amenities");
?>

<div id="amenities" class="container-amenities">
       <h2>Amenties</h2>      
       <ul class="amenities">
            <?php foreach($amenities as $amenity) : ?>

                <?php
                $name = $amenity["name"];
                ?>
                    <li><?= $name ?> </li>

             <?php endforeach; ?>
       </ul>
</div>
  