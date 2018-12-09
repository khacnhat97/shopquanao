<?php
$options_category = array(
    'order_by' => 'Id'
);
$categories = get_all('categories', $options_category);
$contactinfo = get_a_record('contactinfo',1);
?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    contact info
                </h1>
                <address>
                    <p><i class="fa fa-home pr-10"></i> Address:<?php echo  $contactinfo['Address']?></p>

                    <p><i class="fa fa-globe pr-10"></i> <?php echo  $contactinfo['Country']?></p>

                    <p><i class="fa fa-mobile pr-10"></i>  Mobile : <?php echo  $contactinfo['Mobile']?></p>

                    <p><i class="fa fa-phone pr-10"></i> Phone : <?php echo  $contactinfo['Phone']?></p>

                </address>
            </div>
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    Social
                </h1>
                <address>

                    <p><i class="fa fa-envelope pr-10"></i> Email : <a href="javascript:;"><?php echo  $contactinfo['Email']?></a></p>

                    <p><i class="fa fa-facebook pr-10"></i>  Facebook : <a href="javascript:;"><?php echo  $contactinfo['Facebook']?></a></p>

                    <p><i class="fa fa-envelope pr-10"></i> Zalo : <a href="javascript:;"><?php echo  $contactinfo['Zalo']?></a></p>

                    <p><i class="fa fa-skype pr-10"></i> Skype :<a href="javascript:;"><?php echo  $contactinfo['Skype']?></a></p>
                </address>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        order
                    </h1>
                    <ul class="page-footer-list">
                        <li>
                            <i class="fa fa-angle-right"></i>
                            
                        </li>                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        Categories
                    </h1>
                    <ul class="page-footer-list">
                        
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="group/1-quan.html"> Áo</a>
                                </li>
                            
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
<!--small footer start -->
<div class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pull-right">
                <ul class="social-link-footer list-unstyled">
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i
                                class="fa fa-facebook"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i
                                class="fa fa-google-plus"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i
                                class="fa fa-dribbble"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i
                                class="fa fa-linkedin"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i
                                class="fa fa-twitter"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i
                                class="fa fa-skype"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i
                                class="fa fa-github"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i
                                class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    <p>&copy; Copyright - Fashion For Men</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="fb-root"></div>








</body>
</html>
