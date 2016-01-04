<!DOCTYPE html>
<html lang="en">


<head>
    <title>Excel Migration Services</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <?php
      echo $this->Html->css(['style.css']);
      echo $this->Html->css(['font-awesome.min.css','font-awesome.css']);
      echo $this->Html->script(['jquery-1.7.2.min.js', 'superfish.js']);
      echo $this->Html->script(['jquery.flexslider-min.js']);
      echo $this->Html->script(['jquery.responsivemenu.js']);
      echo $this->Html->script(['jquery.equalheights-rt.js', 'script.js']);
    ?>

    <script>
        $(function(){
            $("#menu-icon").on("click", function(){
                $(".sf-menu").slideToggle();
                $(this).toggleClass("active");
            });

            $('.flexslider').flexslider({
                animation: "fade",
                slideshow: true,
                slideshowSpeed: 70000,
                animationDuration: 600,
                prevText: "Previous",
                nextText: "Next",
                controlNav: true,
            });
        })
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
</head>
<body id="page1">
<!-- header -->
<header>
    <div class="header-row-1">
        <div class="container_24">
            <div class="login"><i class="fa fa-user"></i> <?php echo $this->Html->link('Login', ['prefix'=>false,'controller'=>'users','action'=>'login']); ?> |
            <?php echo $this->Html->link(' Register', ['prefix'=>false,'controller'=>'users','action'=>'register']); ?></div>
            <div>
                <h1><?= $this->Html->link('Excel Migration Services', ['controller'=>'pages', 'action' => 'home']) ?></h1>
                <!-- menu -->
                <nav>
                    <div id="menu-icon">Menu</div>
                    <ul class="sf-menu">
                        <li><?= $this->Html->link('Home', ['controller'=>'pages', 'action' => 'home']) ?></li>
                        <li><?= $this->Html->link('About Us', ['controller'=>'pages', 'action' => 'about']) ?>
                            <ul>
                                <li><a href="#">History</a></li>
                                <li><a href="#">News</a>
                                    <ul>
                                        <li><a href="#">Latest News</a></li>
                                        <li><a href="#">Archive</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Our Services</a></li>
                            </ul>
                        </li>
                        <li><?= $this->Html->link('Resources', ['controller'=>'pages', 'action' => 'resources']) ?></li>
                        <li><?= $this->Html->link('Practice', ['controller'=>'pages', 'action' => 'practice']) ?></li>
                        <li><?= $this->Html->link('Contact', ['controller'=>'pages', 'action' => 'contact']) ?></li>
                    </ul>
                </nav><!-- end menu -->
                <div class="clear"></div>
            </div>
        </div>
    </div>
</header><!-- end header -->

<section id="content">
    <div class="container_24">

        <?= $this->Flash->render() ?>
        <section class="container clearfix">
            <?= $this->fetch('content') ?>
        </section>
    </div>
</section>


<!-- footer -->
<footer>
    <div class="container_24">
        <div class="wrapper">
            <div class="grid_24">
                <div class="policy">LawyersCo &copy; 2012 | <a href="privacy.php">Privacy policy</a> <div><!--{%FOOTER_LINK} --></div></div>
                <ul class="list-soc">
                    <li class="icon-1"><a href="#"></a></li>
                    <li class="icon-2"><a href="#"></a></li>
                    <li class="icon-3"><a href="#"></a></li>
                    <li class="icon-4"><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

</body>

</html>