    <content>  
        <div class="sec-product-box"><?php 
            foreach ($productArray as $product){?>
                <div class="sec-product <?=$product['produkt-class']?>">
                    <div class="border-box-with-corner">
                        <div class="sec-prod-text-box">
                            <h4><?= $product['produkt-namn'] ?></h4>
                            <p class="model-bread-text"><?= $product['produkt-beskrivning'] ?></p>                    
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
                data-flickity-options='{ "cellAlign": "left", "contain": true }'><?php
                foreach ($productArray as $product){?>
                <div class="gallery-cell <?=$product['produkt-class-mob']?>">
                    <div class="corners">                    
                        <h4><?= $product['produkt-namn'] ?></h4>
                        <p><?= $product['produkt-beskrivning'] ?></p>
                    </div>                
                </div><?php
                }?>
            </div>
        </div>
    </div>
