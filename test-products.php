<div class="product-header">
    <h1>PRODUKTER</h1>
</div>
<div class="product-wrapper">
    <div class="product-card-box"><?php
        foreach ($productArray as $product){?>
        <div class="product-cards">
            <div class="product-card-text">
                <div class="product-card-product-name"><?= $product['produkt-namn'] ?></div>
                <p class="product-card-p"><?= $product['produkt-beskrivning'] ?></p>
                <button class="product-card-button">Se produkter</button>
            </div>
            <div class="product-card-img">
                <img src="<?= $product['produkt-bild'] ?>" alt="product-image">
            </div>
        </div><?php
        }?>
    </div>
</div>