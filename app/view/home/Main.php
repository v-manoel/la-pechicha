
<section class="container products-carousel-section my-5"">
    <?php    
        $prod_base->setOffer(0.6);
        $inoffer = $prod_base->all();
    ?> 
    <div class="p-2 h2 section-title"> Super Ofertas </div>

    <div class="items-carousel items-carousel-5 m-auto">
    <?php foreach ($inoffer as $prod){?>
        <div class="item" onmouseout="CollapseItem(this, 'product-desc')" onmouseover="UncollapseItem(this, 'product-desc')">
            <form action="<?php echo DIRPAGE.'product'; ?>" method="post">
                <input type='hidden' name='product_id' id='product_id' value='<?= $prod->getId() ?>'><br> 
                <button type="submit" class="border-0 bg-transparent p-0">
                    <div class="card align-items-center prod-card w-auto">
                        <div class="card-header bg-white">
                            <?php if(count($prod->getImgs()) > 0){ ?>
                                <img class="card-img" src="<?= DIRIMG . $prod->getImgs()[0]; ?>" alt="...">
                            <?php }else{?>
                                <img class="card-img" src="<?= DIRIMG . 'examples/produtos.svg'; ?>" alt="...">
                            <?php } ?>
                        </div><!-- card header -->
                        
                        <div class="card-body">
                            <p class="badge bg-warning text-dark tag p-1 m-0"><?= $prod->getCategories()[0]->getName(); ?></p>
                            <p class="badge bg-warning text-dark tag p-1 m-0"><?= $prod->getSource(); ?></p>
                            <p class="text-secondary text-decoration-line-through m-0 off-price"><?= "R$ ".floor($prod->getPrice()); ?><span class="decimals align-top"><?= ($prod->getPrice() *100)%100; ?></span></p>
                            <p class="card-title price m-0"><?= "R$ ".floor($prod->offerPrice()); ?><span class="decimals align-top"><?= ($prod->offerPrice() *100)%100; ?></span>
                                <span class="text-success off-rate"><?= $prod->offerAsPerc()."% OFF"; ?></span>
                            </p>
                            <p class="parcela text-success m-0"><?= "12x de R$ ".floor($prod->offerPrice()); ?><span class="decimals align-top"><?= ($prod->offerPrice() *100)%100; ?></span>
                                sem juros
                            </p>
                            <p class="product-desc m-auto pt-1 text-center"><?= $prod->getTitle(); ?></p>
                        </div><!-- card body -->
                        
                    </div><!-- card -->
                </button>
            </form>
  
        </div><!-- item -->
    <?php } ?>
    </div><!-- carousel -->
</section>


<section class="container products-carousel-section my-5"">
    <?php    
        $cat->setName("Frios");
        $cat = $cat->findByName();
        $bycategory = $prod_base->allByCategory($cat);
    ?> 
    <div class="p-2 h2 section-title"> Frios em Destaque</div>

    <div class="items-carousel items-carousel-5 m-auto">
    <?php foreach ($bycategory as $prod){?>
        <div class="item" onmouseout="CollapseItem(this, 'product-desc')" onmouseover="UncollapseItem(this, 'product-desc')">
            <form action="<?php echo DIRPAGE.'product'; ?>" method="post">
                <input type='hidden' name='product_id' id='product_id' value='<?= $prod->getId() ?>'><br> 
                <button type="submit" class="border-0 bg-transparent p-0">
                    <div class="card align-items-center prod-card w-auto">
                        <div class="card-header bg-white">
                            <?php if(count($prod->getImgs()) > 0){ ?>
                                <img class="card-img" src="<?= DIRIMG . $prod->getImgs()[0]; ?>" alt="...">
                            <?php }else{?>
                                <img class="card-img" src="<?= DIRIMG . 'examples/produtos.svg'; ?>" alt="...">
                            <?php } ?>
                        </div><!-- card header -->
                        
                        <div class="card-body">
                            <p class="badge bg-warning text-dark tag p-1 m-0"><?= $prod->getCategories()[0]->getName(); ?></p>
                            <p class="badge bg-warning text-dark tag p-1 m-0"><?= $prod->getSource(); ?></p>
                            <p class="text-secondary text-decoration-line-through m-0 off-price"><?= "R$ ".floor($prod->getPrice()); ?><span class="decimals align-top"><?= ($prod->getPrice() *100)%100; ?></span></p>
                            <p class="card-title price m-0"><?= "R$ ".floor($prod->offerPrice()); ?><span class="decimals align-top"><?= ($prod->offerPrice() *100)%100; ?></span>
                                <span class="text-success off-rate"><?= $prod->offerAsPerc()."% OFF"; ?></span>
                            </p>
                            <p class="parcela text-success m-0"><?= "12x de R$ ".floor($prod->offerPrice()); ?><span class="decimals align-top"><?= ($prod->offerPrice() *100)%100; ?></span>
                                sem juros
                            </p>
                            <p class="product-desc m-auto pt-1 text-center"><?= $prod->getTitle(); ?></p>
                        </div><!-- card body -->
                        
                    </div><!-- card -->
                </button>
            </form>
        </div><!-- item -->
    <?php } ?>
    </div><!-- carousel -->
</section>

<section class="container products-carousel-section my-5"">
    <?php    
        $cat->setName("Games");
        $cat = $cat->findByName();
        $bycategory = $prod_base->allByCategory($cat);
    ?> 
    <div class="p-2 h2 section-title"> Games em Destaque</div>

    <div class="items-carousel items-carousel-5 m-auto">
    <?php foreach ($bycategory as $prod){?>
        <div class="item" onmouseout="CollapseItem(this, 'product-desc')" onmouseover="UncollapseItem(this, 'product-desc')">
            <form action="<?php echo DIRPAGE.'product'; ?>" method="post">
                <input type='hidden' name='product_id' id='product_id' value='<?= $prod->getId() ?>'><br> 
                <button type="submit" class="border-0 bg-transparent p-0">
                    <div class="card align-items-center prod-card w-auto">
                        <div class="card-header bg-white">
                            <?php if(count($prod->getImgs()) > 0){ ?>
                                <img class="card-img" src="<?= DIRIMG . $prod->getImgs()[0]; ?>" alt="...">
                            <?php }else{?>
                                <img class="card-img" src="<?= DIRIMG . 'examples/produtos.svg'; ?>" alt="...">
                            <?php } ?>
                        </div><!-- card header -->
                        
                        <div class="card-body">
                            <p class="badge bg-warning text-dark tag p-1 m-0"><?= $prod->getCategories()[0]->getName(); ?></p>
                            <p class="badge bg-warning text-dark tag p-1 m-0"><?= $prod->getSource(); ?></p>
                            <p class="text-secondary text-decoration-line-through m-0 off-price"><?= "R$ ".floor($prod->getPrice()); ?><span class="decimals align-top"><?= ($prod->getPrice() *100)%100; ?></span></p>
                            <p class="card-title price m-0"><?= "R$ ".floor($prod->offerPrice()); ?><span class="decimals align-top"><?= ($prod->offerPrice() *100)%100; ?></span>
                                <span class="text-success off-rate"><?= $prod->offerAsPerc()."% OFF"; ?></span>
                            </p>
                            <p class="parcela text-success m-0"><?= "12x de R$ ".floor($prod->offerPrice()); ?><span class="decimals align-top"><?= ($prod->offerPrice() *100)%100; ?></span>
                                sem juros
                            </p>
                            <p class="product-desc m-auto pt-1 text-center"><?= $prod->getTitle(); ?></p>
                        </div><!-- card body -->
                        
                    </div><!-- card -->
                </button>
            </form>
        </div><!-- item -->
    <?php } ?>
    </div><!-- carousel -->
</section>

