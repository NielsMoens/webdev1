<section class="cards">
    <?php

    foreach($photos as $photo) {
        include BASE_DIR . '/views/_partials/photo_card_item.php';
    }
?>

    
</section>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
