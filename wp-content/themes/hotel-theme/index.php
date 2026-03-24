<?php get_header() ?>
    <?php if (have_posts()) :?>
        <?php while (have_posts()) : the_post(); ?>
      

        <h3>Contact us</h3>
            <?php
            $hotel_name = get_field("hotel_name");
            $address = get_field("address");
            $email = get_field("email");
            $telephone_number = get_field("telephone_number");
            ?>

            <?php if ($hotel_name) : ?>
                <p><?= $hotel_name; ?></p>
            <?php endif; ?>

            <?php if ($address) : ?>
                <p><?= $address; ?></p>
            <?php endif; ?>

            <?php if ($email) : ?>
                <p><?= $email; ?></p>
            <?php endif; ?>
            
            <?php if ($telephone_number) : ?>
                <p><?= $telephone_number; ?></p>
            <?php endif; ?>

            


        <?php endwhile; ?>
    <?php endif ; ?>
<?php get_footer() ?>