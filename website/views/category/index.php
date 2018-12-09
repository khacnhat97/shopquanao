<?php require('website/views/shared/header.php'); ?>
    <div class="product-model">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="home"><b>TRANG CHỦ</b></a></li>
                <li class="active"><?php echo $breadCrumb ?></li>
            </ol>

            <div class="col-md-9 product-model-sec">
                <div class="feature-grids" style="background-color:#ffffff">

                    <?php if (empty($products)) : ?>
                        <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                    <?php endif; ?>
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-4 feature-grid jewel">
                            <a href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html"
                               class="screenshot"
                               rel="<?php echo 'public/upload/product/' . $product['Image1'] ?>"><?php echo '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '"alt="' . $product['Image1'] . '" />'; ?>
                            </a>

                            <div class="arrival-info">
                                <h4><?php echo $product['Name'] ?></h4>
                                <?php if ($product["TypeId"] == 3): ?>
                                                                    
                                <?php else: ?>
                                    <br>
                                    <p>Giá bán
                                        : <?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php endif ?>
                            </div>
                            
                            <?php if ($product["TypeId"] == 3): ?>
                                
                            <?php elseif ($product["TypeId"] == 2): ?>
                                
                            <?php elseif ($product["TypeId"] == 1): ?>
                                
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ($total_rows > $limit) {
                    ?>
                    <div class="text-right">
                        <?php echo $pagination; ?>
                    </div>
                    <?php
                } ?>
            </div>
            <?php require('website/views/shared/navbar.php'); ?>
        </div>
    </div>
<?php require('website/views/shared/footer.php'); ?>