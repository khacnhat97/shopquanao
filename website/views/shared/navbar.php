<?php
$options_category = array(
    'order_by' => 'Id'
);
$categories = get_all('categories', $options_category);

$options_type = array(
    'order_by' => 'Id'
);
$types = get_all('type', $options_type);

$options_product_new = array(
    'where' => 'TypeId=3',
    'limit' => '2',
    'offset' => '0',
    'order_by' => 'RAND()'
);
$products_new = get_all('product', $options_product_new);
?>

<?php if(isset($_GET['controller'])) $controller = $_GET['controller'];
    if($controller !== 'cart'){
?>
<style>
    .arrival-info p {
        margin: 5px 0 5px;
    }

    .arrival-info {
        margin-top: 0.1em;
        text-align: center;
    }

    .menu_2 {
        width: auto;
        height: auto;
        padding: 0;
        list-style: none;
        margin: 0;
        margin-bottom: 10px;
        /*background: #FBFBFC;*/
        background: #f5f5f5;
        border: 1px solid #ddd;
    }
</style>
<div class="rsidebar span_1_of_left" style="margin: 0.9em 0 0 0;">
    <section class="sky-form">
        <div class="product_right">
            <div class="sub-cate">
                <?php foreach ($products_new as $product_new): ?>
                    <h5 class="cate"><?php echo $product_new['Name'] ?></h5>
                    <ul class="menu_2">
                        <li>
                            <a href="product/<?php echo $product_new['Id']; ?>-<?php echo $product_new['alias']; ?>.html"
                               class="screenshot"
                               rel="<?php echo 'public/upload/product/' . $product_new['Image1'] ?>"><?php echo '<image class="img-responsive" src="public/upload/product/' . $product_new['Image1'] . '?time=' . time() . '"alt="' . $product_new['Image1'] . '" />'; ?>
                            </a>

                            <div class="arrival-info">
                                <?php if ($product_new["TypeId"] == 3): ?>
                                    <span class="pric1"><del>Giá bán
                                            : <?php echo $product_new ? number_format($product_new['Price'], 0, ',', '.') : 0; ?>
                                            VNĐ
                                        </del></span>
                                    <p>Giá khuyến mại
                                        : <?php echo $product_new ? number_format(($product_new['Price']) - ($product_new['Price']) * ($product_new['Percent_off']) / 100, 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php else: ?>
                                    <br>
                                    <p>Giá bán
                                        : <?php echo $product_new ? number_format($product_new['Price'], 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php endif ?>
                            </div>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php }?>
