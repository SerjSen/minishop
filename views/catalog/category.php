<?php
?>
<?php include(ROOT . '/views/layouts/header.php') ?>



<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php foreach ($categories as $category): ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?= $category['id'] ?>"
                                           class="<?php if ($categoryId == $category['id']) echo 'active';?>" >
                                            <?= $category['name'] ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div><!--/category-products-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/template/<?= $product['image']?>" alt=""/>
                                        <h2><?= $product['price']?></h2>
                                        <p> <a href="/product/<?= $product['id']?> "><?= $product['name']?></a></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    <?php endforeach;?>


                </div><!--features_items-->

            </div>
        </div>
    </div>
</section>
<?php include(ROOT . '/views/layouts/footer.php') ?>


