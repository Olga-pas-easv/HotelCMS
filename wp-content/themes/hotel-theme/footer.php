    </main>

    <footer class="footer py-3 bg-dark text-white text-center">
                  
        <section class="contact-us">
            <h3 class="h3-contact">Contact us</h3>
            <?php
            $hotel_name = get_field("hotel_name", get_option("page_on_front"));
            $address = get_field("address", get_option("page_on_front"));
            $email = get_field("email", get_option("page_on_front"));
            $telephone_number = get_field("telephone_number", get_option("page_on_front"));
            ?>

            <?php if ($hotel_name) : ?>
                <p class="contact-name"><?= $hotel_name; ?></p>
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
        </section>

        <?php
        $map = get_field("map", get_option("page_on_front"));
        ?>

        <img class="map" src="<?= $map["url"] ?>" alt="Map of location">

         &copy; Copyright 2026 Hotel CMS. All rights reserved.
    </footer>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <?php wp_footer(); ?>
</body>

</html>