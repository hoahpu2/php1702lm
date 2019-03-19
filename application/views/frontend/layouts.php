<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?php echo base_url(); ?>"></base>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>
    <?php 
    echo "HL Store";
    ?>
  </title>
  <link href="public/images/coollogo_com-47388.png" rel="shortcut icon" type="image/png">
  <link href="public/css/bootstrap.css" rel="stylesheet">
  <link href="public/css/font-awesome.css" rel="stylesheet">
  <link href="public/css/lte.css" rel="stylesheet">
  <link href="public/css/AdminLTE.min.css" rel="stylesheet">
  <link href="public/css/owl.carousel.min.css" rel="stylesheet">
  <link href="public/css/owl.theme.default.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style-jc.css">
  <link href="public/css/menu-tab.css" rel="stylesheet">
  <link href="public/css/jquery.bxslider.css" rel="stylesheet" />
  <link href="public/css/style.css" rel="stylesheet">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- <link href="public/css/cssweb/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
    <link href="public/css/cssweb/style.css" rel="stylesheet" type="text/css" media="all" /> 
    <link href="public/css/cssweb/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
    <link href="public/css/cssweb/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider   -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
     <!-- //font-awesome icons -->
    <!-- js -->
    <script src="public/js/jquery-2.2.3.min.js"></script> 

    <script src="public/js/owl.carousel.js"></script>  
    <script>
      $(document).ready(function() { 
        $("#owl-demo").owlCarousel({ 
      autoPlay: 3000, //Set AutoPlay to 3 seconds 
      items :4,
      itemsDesktop : [640,5],
      itemsDesktopSmall : [480,2],
      navigation : true
    }); 
      }); 
    </script>

    <style>
      #scrolltop1{position: fixed;
        right: 10px;
        bottom: 63px;
        border-radius: 3px;
        background: rgba(0, 0, 0, 0.6);;
        padding: 8px 12px;
        cursor:pointer;
        z-index: 1000;
      }
      #scrolltop1 span{font-size: 20px; color: #FFF;}
      #scrolltop{position: fixed;
        right: 10px;
        bottom: 20px;
        border-radius: 3px;
        background: rgba(0, 0, 0, 0.6);;
        padding: 8px 12px;
        cursor:pointer;
        z-index: 1000;
      }
      #scrolltop span{font-size: 20px; color: #FFF;}

    </style>

  </head>
  <body>



    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- TOPBAR -->
    <?php 
    $this->load->view('frontend/modules/topbar');
    ?>
    <!-- LOGO + SEARCH -->
    <?php 
    $this->load->view('frontend/modules/logo-search');
    ?>
    <section id="menu-slider">
      <?php 
      $this->load->view('frontend/modules/panel-left');
      ?>
    </section>
    <!--PRODUCT-->
    <!-- welcome -->
  <div class="welcome"> 
    <div class="container"> 
      <div class="welcome-info">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
          <div class="clearfix"> </div>
          <h3 class="w3ls-title">Featured Products</h3>
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
              <div class="tabcontent-grids">  
                <div id="owl-demo" class="owl-carousel"> 
                  <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                      <a href="products.html"><img src="images/e1.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Audio sdsdpeaker</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                        <h5>$100</h5> 
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Audio speaker" /> 
                          <input type="hidden" name="amount" value="100.00" /> 
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>  
                      </div>   
                    </div>   
                  </div>
                  <div class="item">
                    <div class="glry-w3agile-grids agileits">
                      <div class="new-tag"><h6>Sale</h6></div>
                      <a href="products.html"><img src="images/e2.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Refrsdsdigerator</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p> 
                        <h5>$300</h5>
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Refrigerator" /> 
                          <input type="hidden" name="amount" value="300.00"/> 
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                      </div>       
                    </div>  
                  </div>
                  <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                      <div class="new-tag"><h6>New</h6></div>
                      <a href="products.html"><img src="images/e3.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Smart Phdsdsdone</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                        <h5>$70</h5>
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Smart Phone" /> 
                          <input type="hidden" name="amount" value="70.00"/> 
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                      </div>        
                    </div>  
                  </div>
                  <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                      <a href="products.html"><img src="images/e4.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Digital Csdsdsdamera</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                        <h5>$80</h5>
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Digital Camera"/> 
                          <input type="hidden" name="amount" value="80.00"/>  
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                      </div>         
                    </div>  
                  </div>
                  <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                      <a href="products.html"><img src="images/e1.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Audio asdsđspeaker</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                        <h5>$100</h5> 
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Audio speaker" /> 
                          <input type="hidden" name="amount" value="100.00" /> 
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>  
                      </div>   
                    </div>   
                  </div>
                  <div class="item">
                    <div class="glry-w3agile-grids agileits">
                      <div class="new-tag"><h6>Sale</h6></div>
                      <a href="products.html"><img src="images/e2.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Refridsdagerator</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p> 
                        <h5>$300</h5>
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Refrigerator" /> 
                          <input type="hidden" name="amount" value="300.00"/>  
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                      </div>       
                    </div>  
                  </div>
                  <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                      <div class="new-tag"><h6>New</h6></div>
                      <a href="products.html"><img src="images/e3.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Smaardsdt Phone</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                        <h5>$70</h5>
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Smart Phone" /> 
                          <input type="hidden" name="amount" value="70.00"/>
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                      </div>        
                    </div>  
                  </div>
                  <div class="item">
                    <div class="glry-w3agile-grids agileits"> 
                      <a href="products.html"><img src="images/e4.png" alt="img"></a>
                      <div class="view-caption agileits-w3layouts">           
                        <h4><a href="products.html">Digitaalds Camera</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                        <h5>$80</h5>
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" /> 
                          <input type="hidden" name="w3ls_item" value="Digital Camera"/> 
                          <input type="hidden" name="amount" value="80.00"/> 
                          <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                      </div>         
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
          </div>   
        </div>  
      </div>    
    </div>     
  </div> 
  <!-- //welcome -->
    <?php 
    //if(isset($com,$view)){
      //$this->load->view('frontend/components/'.$com.'/'.$view);
    //}
    //else
      //$this->load->view('frontend/components/trangchu/index');
    ?>
    <!--FOOTER-->
    <?php 
    $this->load->view('frontend/modules/footer');
    ?>
    <div id="scrolltop1"><span class="glyphicon glyphicon-arrow-up"></span></div>
    <!-- <div id="scrolltop"><span class="glyphicon glyphicon-arrow-down"></span></div> -->
    <!-- <script src="public/js/jquery-2.2.3.min.js"></script> -->
    <script src="public/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("img.maintop-img2").lazyload({
         effect : "fadeIn"
       });
        $("img.maintop-img1").lazyload({
         effect : "fadeIn"
       });
        $("#scrolltop1").click(function() {
         var body = $("html, body");
         body.stop().animate({scrollTop:0}, '500', 'swing');
       });

      });
    </script>

    <script src="public/js/js/minicart.js"></script>
    <script>
      w3ls.render();

      w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
          items = this.items();

          for (i = 0, len = items.length; i < len; i++) {
            items[i].set('shipping', 0);
            items[i].set('shipping2', 0);
          }
        }
      });
    </script>  
    <script src="public/js/js/jquery.menu-aim.js"> </script>
    <script src="public/js/js/main.js"></script>
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/app.min.js"></script>
    <script src="public/js/owl.carousel.js"></script>
    <script src="public/js/jquery.jcarousel.js"></script>
    <script src="public/js/jquery.bxslider.js"></script>
    <script src="public/js/jcarousel.connected-carousels.js"></script>
    <script src="public/js/menu-tab.js"></script>
  </body>
  </html>
