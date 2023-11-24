    <content>  
        <div class="sec-product-box"><?php 
            foreach ($productArray as $product){?>
                <div class="sec-product <?=$product['produkt-class']?>">
                    <div class="border-box-with-corner">
                        <div class="sec-prod-text-box">
                            <h4><?= $product['produkt-namn'] ?></h4>
                            <p class="model-bread"><?= $product['produkt-beskrivning'] ?></p>                    
                        </div>
                    </div>
                </div>              
            <?php }?>  
        </div>  
    </content>
</body>