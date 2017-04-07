<?php
?>
<?php include(ROOT . '/views/layouts/header.php') ?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php foreach ($categories as $category): ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?= $category['id'] ?>"
                                           class="<?php if ($categoryId == $category['id']) {
                                               echo 'active';
                                           } ?>">
                                            <?= $category['name'] ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div><!--/category-products-->


                    <div class="shipping text-center"><!--shipping-->
                        <img src="/template/images/home/shipping.jpg" alt=""/>
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="views-product">
                            <?php if (isset($product['image'])): ?>
                                <img src="template/<?php echo $product['image']; ?>" alt=""/>
                            <?php else: ?>
                                <img src="<?php echo Product::getImage($product['id']); ?>"/>

                            <?php endif ?>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""><img src="/template/images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="/template/images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="/template/images/product-details/similar3.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="/template/images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="/template/images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="/template/images/product-details/similar3.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="/template/images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="/template/images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="/template/images/product-details/similar3.jpg" alt=""></a>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="/template/images/product-details/new.jpg" class="newarrival" alt=""/>
                            <h2><?= $product['name']; ?> </h2>
                            <img src="/template/images/product-details/rating.png" alt=""/>
                            <span>
									<span><?= $product['price']; ?> </span>
									<label>Quantity:</label>
									<input type="text" value="3"/>
									<a href="#" data-id="<?= $product['id'] ?>" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>В корзину</a>
								</span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> E-SHOPPER</p>
                            <a href=""><img src="/template/images/product-details/share.png"
                                            class="share img-responsive" alt=""/></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->


            </div>
        </div>
    </div>
</section>

<?php include(ROOT . '/views/layouts/footer.php') ?>
