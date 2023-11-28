<content>  
    <div class="sec-product-box">
        <?php require 'backend/dbLoad.php'; ?>
        <?php foreach ($proInfo as $product){ ?>
        <div class="sec-product <?= $product['class']; ?>">
            <div class="border-box-with-corner">
                <div class="sec-prod-text-box">
                    <h4><?= $product['name']; ?></h4>
                    <p class="model-bread-text"><?= $product['desc']; ?></p>
                </div>
            </div>
        </div>              
    <?php }?>  
    </div>         
</content>
    <div class="cont-carusel">
        <div class="necessary-wrapper">
            <div class="about-us free-float-cornerBox">
                <h4 class="mobil-h4">KOLLEKTION X24</h4>
            </div>
        </div>        
        <div class="outer-border-box">
            <div class="gallery js-flickity"
                data-flickity-options='{ "cellAlign": "left", "contain": true }'>
                <?php foreach ($proInfo as $product){ ?>
                    <div class="gallery-cell <?= $product['class_mob']; ?>">
                        <div class="corners">                    
                            <h4><?= $product['name']; ?></h4>
                            <p><?= $product['desc']; ?></p>
                        </div>                
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>