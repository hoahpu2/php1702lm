<section id="menu-slider">
    <div class="slider">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 list-menu pull-left">
                <?php $this->load->view('frontend/modules/category'); ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 slider-main pull-left">
                <?php 
                $this->load->view('frontend/modules/slider');
                ?>
            </div>
            <!-- <div class="col-md-2 col-lg-2 hidden-xs hidden-sm pull-right ads-right">
                <div class="ads-top">
                    <a href=""><img src="style/images/right-banner-1.jpg"></a>
                </div>
                <div class="ads-bottom">
                    <a href=""><img src="style/images/right-banner-2.jpg"></a>
                </div>
            </div> -->
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 item">
                <div class="img-service">
                    <img src="public/images/policy1.jpg" class="pull-left">
                </div>
                <div class="text-img">
                    <h4 class="pull-left clear-fix">Miễn phí vận chuyển</h4>
                    <p>Dành cho đơn hàng hơn 1.000.000đ</p>
                </div>
            </div>
            <div class="col-xs-12 cp;-sm-12 col-md-4 col-lg-4 item">
                <div class="img-service">
                    <img src="public/images/policy2.jpg" class="pull-left">
                </div>
                <div class="text-img">
                    <h4 class="pull-left">Chiết khấu 20%</h4>
                    <p>Dành cho những đơn hàng hơn 2.000.000đ</p>
                </div>
            </div>
            <div class="col-xs-12 cp;-sm-12 col-md-4 col-lg-4 item">
                <div class="img-service">
                    <img src="public/images/policy3.jpg" class="pull-left">
                </div>
                <div class="text-img">
                    <h4 class="pull-left">Hỗ trợ 24/7</h4>
                    <p>Gọi ngay nếu bạn cần hỗ trợ</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="banner">
    <div class="container">
        <div class="banner">
            <div class="item-banner">
                <a href="">
                    <img src="public/images/b01.jpg">
                </a>
            </div> 
            <div class="item-banner">
                <a href="">
                    <img src="public/images/b02.jpg">
                </a>
            </div>
            <div class="item-banner">
                <a href="">
                    <img src="public/images/b03.jpg">
                </a>
            </div>
        </div>
    </div>
</section>
<?php 
$product_new      = $this->Mproduct->product_new(12);
$product_view_max = $this->Mproduct->product_view_max(12);
$product_purchase_max = $this->Mproduct->product_purchase_max(12);
    //echo "<pre>";
    //print_r($product_new);
    //die;
?>
<!-- welcome -->
<div class="welcome"> 
    <div class="container"> 
        <div class="welcome-info">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div class="clearfix"> </div>
                <h3 class="w3ls-title">Sản phẩm mới</h3>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="tabcontent-grids">  
                            <div id="owl-demo" class="owl-carousel"> 
                                <?php foreach ($product_new as $row_product_new): ?>
                                    <div class="item" >
                                        <div class="glry-w3agile-grids agileits"> 
                                            <div class="new-tag"><h6>New</h6></div>
                                            <a href="<?php echo $row_product_new['alias'] ?>"><img src="public/images/products/<?php echo $row_product_new['avatar'] ?>" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">           
                                                <h4><a href="<?php echo $row_product_new['alias'] ?>"></a><?php echo $row_product_new['name'] ?></h4>
                                                <p>K40 - CNTT</p>
                                                <h5><?php echo(number_format($row_product_new['price'])); ?>₫</h5> 
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" /> 
                                                    <input type="hidden" name="w3ls_item" value="<?php echo $row_product_new['name'] ?>" /> 
                                                    <input type="hidden" name="amount" value="<?php echo(number_format($row_product_new['price'])); ?>" /> 
                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>  
                                            </div>   
                                        </div>   
                                    </div>
                                <?php endforeach; ?>
                            </div><br>
                            <div class="clearfix"> </div>
                            <h3 class="w3ls-title">Sản phẩm được xem nhiều nhất</h3>
                            <div id="owl-demo1" class="owl-carousel"> 
                                <?php foreach ($product_view_max as $row_product_view_max): ?>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits"> 
                                            <div class="new-tag"><h6>View max</h6></div>
                                            <a href="<?php echo $row_product_view_max['alias'] ?>"><img src="public/images/products/<?php echo $row_product_view_max['avatar'] ?>" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">           
                                                <h4><a href="#"><?php echo $row_product_view_max['name'] ?></a></h4>
                                                <p>K40 - CNTT</p>
                                                <h5><?php echo $row_product_view_max['price'] ?>₫</h5> 
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" /> 
                                                    <input type="hidden" name="w3ls_item" value="<?php echo $row_product_view_max['name'] ?>" /> 
                                                    <input type="hidden" name="amount" value="100.00" /> 
                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>  
                                            </div>   
                                        </div>   
                                    </div>
                                <?php endforeach; ?>
                            </div> <br>
                            <div class="clearfix"> </div>
                            <h3 class="w3ls-title">Sản phẩm được mua nhiều nhất</h3>
                            <div id="owl-demo2" class="owl-carousel"> 
                                <?php foreach ($product_purchase_max as $row_product_purchase_max): ?>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits"> 
                                            <div class="new-tag"><h6>View max</h6></div>
                                            <a href="<?php echo $row_product_purchase_max['alias'] ?>"><img src="public/images/products/<?php echo $row_product_purchase_max['avatar'] ?>" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">           
                                                <h4><a href="#"><?php echo $row_product_purchase_max['name'] ?></a></h4>
                                                <p>K40 - CNTT</p>
                                                <h5><?php echo $row_product_purchase_max['price'] ?>₫</h5> 
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" /> 
                                                    <input type="hidden" name="w3ls_item" value="<?php echo $row_product_purchase_max['name'] ?>" /> 
                                                    <input type="hidden" name="amount" value="100.00" /> 
                                                    <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>  
                                            </div>   
                                        </div>   
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>  
        </div>      
    </div>       
</div> 
<!-- //welcome -->

<section id="content">
    <div class="container">

        <?php 

        $listCategory=$this->Mcategory->category_list(0,'all'); 
        foreach ($listCategory as $rowCategory):
            $subCategory=$this->Mcategory->category_list($rowCategory['id'],'all');
        $catId=$this->Mcategory->category_id($rowCategory['link']);
        $listCatId=$this->Mcategory->category_listcat($catId);
        $listProducts=$this->Mproduct->product_home_limit($listCatId,12);
        if(count($subCategory) && (count($listProducts) >= 6)):?>
        <div class="list-product">
            <div class="list-header-z">
                <h2><a href="<?php echo  $rowCategory['link']?>" style="color: <?php echo  $rowCategory['color']?>"><?php echo  $rowCategory['name']?></a></h2>
                <ul class="sub-category">
                    <?php foreach ($subCategory as $rowSubCategory) :?>
                        <li>
                            <a href="san-pham/<?php echo $rowSubCategory['link'] ?>" ' 
                                title="<?php echo $rowSubCategory['name'] ?>"
                                class="ws-nw overflow ellipsis"
                                >
                                <?php echo $rowSubCategory['name'] ?>
                            </a> 
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="list-product-content">
                <?php foreach ($listProducts as $rowProducts) :?>
                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 product-one">
                        <div class="image-product">
                            <a href="<?php echo $rowProducts['alias'] ?>" title="<?php echo $rowProducts['name'] ?>">
                                        <!-- <div class="img-bg" style="background: url(public/images/products/<?php echo $rowProducts['avatar'] ?>);">
                                            
                                    </div> -->
                                    <img src="public/images/products/<?php echo $rowProducts['avatar'] ?>" class="img-bg">
                                </a>
                                <h4>
                                    <a href="<?php echo $rowProducts['alias'] ?>" title="<?php echo $rowProducts['name'] ?>" class="ws-nw overflow ellipsis">
                                        <?php echo $rowProducts['name']?>
                                    </a>
                                </h4>
                            </div>
                            <div class="price-product-item">
                                <?php if($rowProducts['sale'] > 0) :?>
                                    <span class=""><?php echo(number_format($rowProducts['price_sale'])); ?>₫</span>
                                    <span><?php echo(number_format($rowProducts['price'])); ?>₫</span>
                                <?php else: ?>
                                    <span class=""><?php echo(number_format($rowProducts['price'])); ?>₫</span>
                                    <span style="color: #fff"><?php echo(number_format($rowProducts['price'])); ?>₫</span>
                                <?php endif; ?>
                            </div>
                            <?php if($rowProducts['sale'] > 0) :?>
                                <div class="sale-flash">
                                    -<?php echo $rowProducts['sale'] ?>%
                                </div>
                            <?php endif; ?>
                            <div><?php $tinhtrang = '';
                               switch ($rowProducts['number']) {
                                case $rowProducts['number'] > 10:
                                $tinhtrang = 'Còn hàng';
                                break;
                                case 0 < $rowProducts['number'] && $rowProducts['number'] <= 10:
                                $tinhtrang = 'Sắp hết hàng';
                                break;
                                case $rowProducts['number'] = 0:
                                $tinhtrang = 'Hết hàng';
                                break;
                            } ?>
                            <p><i>Tình trạng:<span style="color: red"> <?php echo $tinhtrang; ?></span></i></p>
                        </div>
                        <div class="btn-action">
                           <!--  <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" /> 
                                <input type="hidden" name="w3ls_item" value="<?php echo $rowProducts['name'] ?>"/> 
                                <input type="hidden" name="amount" value="<?php echo(number_format($rowProducts['price'])) ?>"/> <i class="fa fa-cart-plus" aria-hidden="true"><a href="<?php echo base_url();?>sanpham/addcart(<?php echo $rowProducts['id'] ?>)" title=""></a></i>  -->
                            <button type="button" class="fa fa-shopping-cart" onclick="onAddCart(<?php echo $rowProducts['id']  ?>)"></button>

                            <!-- </form> -->
                            <button style="height: 35px" type="button" class="fa fa-eye"></button>
                            
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="footer-load-more">
                <a href="san-pham/<?php echo $rowCategory['link'] ?>"><p class="text-right" style="background:white"><u>Xem tất cả</u></p></a>
            </div>
        </div>
    <?php endif;?>
<?php endforeach;?>
</div>

</section>
<section class="home-blog">
    <div class="container">
        <div class="title-line">
            <h2 class="title">Tin tức</h2>
        </div>
        <div class="blog-content">
            <marquee scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="up"  scrollamount=30>
                <?php  
                $listPost=$this->Mcontent->content_chude(4, 'all');
                foreach ($listPost as $rowPost) :?>
                <!-- <div class="margin-bot-10"> --><span class="hoa" style="text-align: center;">
                <span class="post-grid clearfix">
                    <span class="entry-thumb width5 pull-left">
                        <a href="tin-tuc/<?php echo $rowPost['alias'] ?>">
                            <img  style="width: 100px;height: 100px" src="public/images/posts/<?php echo $rowPost['img'] ?>" class="max-width-100">
                        </a>
                    </span>
                    <span class="entry-content width50 pull-left padding-10">
                        <span class="entry-meta">
                            <h4><a href="tin-tuc/<?php echo $rowPost['alias'] ?>"><?php echo $rowPost['title'] ?></a></h4>
                            <p>Đăng lúc <?php echo $rowPost['created'] ?></p>
                        </span>
                        <span class="entry-desc">
                            <span class="intro-text" style="max-height: 54px; overflow: hidden;">
                                <?php echo $rowPost['introtext'] ?>
                            </span>
                            <a href="tin-tuc/<?php echo $rowPost['alias'] ?>" class="read-more">Đọc thêm →</a>
                        </span>
                    </span>
                </span><br>
                <!-- </div>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     -->         
            <?php endforeach; ?>
        </marquee>
    </div>

</div>
</section>
<section id="demos">
    <div class="container">
        <div class="brands">
            <div class="col-md-3">
                <h2>Nhãn hiệu</h2>
                <p class="desc">Những nhãn hiểu nổi tiếng với độ bền cao đã được chúng tôi lựa chọn liên kết.</p>
            </div>
            <div class="col-md-9">
                <div class="large-12 columns">
                    <div class="owl-brands owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="item">
                            <div class="col-xs-12 col-md-2">
                                <div class="item-brand">
                                    <img src="public/images/brand01.png" class="img-fix" alt="sati">
                                </div> 
                            </div>
                        </div>
                        <div class="item">
                          <div class="col-xs-12 col-md-2">
                            <div class="item-brand">
                                <img src="public/images/brand02.png" class="img-fix" alt="sati">
                            </div> 
                        </div>
                    </div>
                    <div class="item">
                      <div class="col-xs-12 col-md-2">
                        <div class="item-brand">
                            <img src="public/images/brand03.png" class="img-fix" alt="sati">
                        </div> 
                    </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-md-2">
                    <div class="item-brand">
                        <img src="public/images/brand04.png" class="img-fix" alt="sati">
                    </div> 
                </div>
            </div>
            <div class="item">
              <div class="col-xs-12 col-md-2">
                <div class="item-brand">
                    <img src="public/images/brand05.png" class="img-fix" alt="sati">
                </div> 
            </div>
        </div>
        <div class="item">
          <div class="col-xs-12 col-md-2">
            <div class="item-brand">
                <img src="public/images/brand06.png" class="img-fix" alt="sati">
            </div> 
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel"> API CODE </h4>
     </div>
     <div class="modal-body" id="getCode" style="overflow-x: scroll;">
      //ajax success content here.
  </div>
</div>
</div>
</div> -->
<script>
    function onAddCart(id){
        var strurl="<?php echo base_url(); ?>"+'/sanpham/addcart';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {id: id},
            success: function(data) {
                document.location.reload(true);
                alert('Thêm sản phẩm vào giỏ hàng thành công vaica dai!');
            }
        });
    }
</script>