<div class="bg-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="slider-banner">
                    <?php
                        $sql = mysql_query("SELECT * FROM banners WHERE ativo = 1");
                        while($result = mysql_fetch_object($sql)){
                    ?>
                    
                    <div>
                        
                            <div class="images">
                                <img class="banner" src="<?php echo $pageurl; ?>/admin/<?php echo $result->banner; ?>" alt="">
                                <h1>Competência<br/> para inovar ></h1>
                            </div>
                        
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<img class="selo" src="./images/selo.png" alt="">

<script>
    $(document).ready(function(){
        $('.slider-banner').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 10000,
            pauseOnFocus: false,
            pauseOnClick: false,
        });
    });
</script>