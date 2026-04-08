
<?php
    $amenities = get_field("amenities");
?>

<div id="amenities" class="amenities">
       <h2>Amenties</h2>      
       <ul>
            <?php foreach($amenities as $amenity) : ?>

                <?php
                $name = $amenity["name"];
                ?>
                    <li><?= $name ?> </li>

             <?php endforeach; ?>
       </ul>
</div>
  