<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vision</title>
    <link rel="stylesheet" href="stylish.css" media="screen">    
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"><?php
    __DIR__. require 'data.php';?>
</head>
<body>
    <div class="outer-border-box">
        <div class="gallery js-flickity"
            data-flickity-options='{ "cellAlign": "left", "contain": true }'>
            <div class="gallery-cell one">
                <div class="corners">
                    <h4>SYNTAR</h4>
                    <p>Se alla syntar i nya kollektionen</p>
                </div>
            </div>
            <div class="gallery-cell two">
                <div class="corners">
                    <h4>HÖGTALARE</h4>
                    <p>Se alla högtalare i nya kollektionen</p>
                </div>
            </div>
            <div class="gallery-cell three">
                <div class="corners">
                    <h4>PEDALER</h4>
                    <p>Se alla pedaler i nya kollektionen</p>
                </div>
            </div>  
            <div class="gallery-cell four">
                <div class="corners">
                    <h4>SEQUENSERS</h4>
                    <p>Se alla sequensers i nya kollektionen</p>
                </div>
            </div>  
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
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>    
</body>
</html>