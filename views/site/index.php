<?php include(ROOT . '/views/layouts/header.php') ?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>

                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <?php if (isset($product['image'])): ?>
                                            <img src="template/<?php echo $product['image']; ?>" alt=""/>
                                        <?php else: ?>
                                            <img src="<?php echo Product::getImage($product['id']); ?>"/>

                                        <?php endif ?>
                                        <h2>$<?php echo $product['price']; ?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart"
                                           data-id="<?php echo $product['id']; ?>"><i
                                                    class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="template/images/home/new.png" class="new" alt=""/>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div><!--features_items-->


                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Рекомендуемые товары</h2>
                    <div class="item">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <div id="s1">
                                        <?php foreach ($recomendedProducts as $product) : ?>
                                            <div class="item">
                                                <?php if (isset($product['image'])): ?>
                                                    <img src="template/<?php echo $product['image']; ?>" alt=""/>
                                                <?php else: ?>
                                                    <img src="<?php echo Product::getImage($product['id']); ?>"/>

                                                <?php endif ?>
                                                <h2>$<?php echo $product['price']; ?></h2>
                                                <a href="/product/<?php echo $product['id']; ?>">
                                                    <?php echo $product['name']; ?>
                                                </a>
                                                <br/>
                                                <br/>
                                                <a href="#" class="btn btn-default add-to-cart"
                                                   data-id="<?php echo $product['id']; ?>"><i
                                                            class="fa fa-shopping-cart"></i>В корзину</a>
                                                <?php if ($product['is_new']): ?>
                                                    <img src="template/images/home/new.png" class="new" alt=""/>
                                                <?php endif; ?>
                                            </div>

                                        <?php endforeach; ?>
                                    </div>

                                    <br>
                                </div>
                                <div class="navs">
                                        <span id="prev_slide" class="left recommended-item-control" id="prev"
                                              href="#recommended-item-carousel"
                                              data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </span>
                                    <span id="next_slide" class="right recommended-item-control" id="next"
                                          href="#recommended-item-carousel"
                                          data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>

</section>
<?php include(ROOT . '/views/layouts/footer.php') ?>

