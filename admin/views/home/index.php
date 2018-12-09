<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <div class="row">
            
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_order;?></div>
                                <div>New Orders!</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=order">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết </span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-8">
                
                <?php require "admin/views/product/tableNewproduct.php";?>
            </div>
            <div class="col-lg-4">                
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#wrapper -->
<?php require('admin/views/shared/footer.php'); ?>