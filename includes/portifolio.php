<div class="bg-portifolio" style="padding: 150px 5%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php include('includes/categories.php'); ?>
            </div>

            <div class="col-12">
                <div class="box-info">
                    <div class="box-icon-portifolio">   
                        <div class="icon-img-portifolio">
                            <img src="<?php echo $pageurl; ?>/images/icon-empresa-2.png" alt="">
                        </div>

                        <div class="icon-text-portifolio">
                            <p>+70 obras <span><br/>no segmento da saúde</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 offset-md-2">
                <div class="grid-img">
                    <?php
                        $sql = mysql_query("SELECT * FROM galeries WHERE ativo = 1");
                        while($result = mysql_fetch_object($sql)){
                    ?>
                    
                    <div class="box-grid">
                        <a href="<?php echo $pageurl; ?>/galeria/<?php echo $result->slug; ?>">
                            <img src="<?php echo $pageurl; ?>/admin/<?php echo $result->cover; ?>" alt="" />
                            <span><?php echo $result->galerie; ?></span>
                        </a>
                    </div>

                    <?php } ?>
                </div>
            </div>

            <style>
                .box-grid {
                    padding: 0 10px 10px 0;
                    text-align: center;
                    position: relative;
                }
                    .box-grid img { max-width: 100%; }
                    .box-grid span {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        font-size: 11px;
                        color: #fff;
                        line-height: 13px;
                        background: #507271;
                        padding: 5px 15px;
                        max-width: 60%;
                        display: block;
                        text-align: left; 
                    }
            </style>
        </div>
    </div>
</div>

<style>
    footer {display:none}
</style>