<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/content.css">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>

</head>
<body>
<script src="js/jquery-1.9.1.min.js"></script>
<script>

    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>

<!-- Banner start -->
<div class="banner">
    <div id="banner-mask">
        <div id="banner-content">
            <p><h1>李琦</h1><h1>Josefina Lee</h1></p>

            <p style="margin-bottom=5px;"><span>前端开发工程师</span></p><p style="margin-top: 5px;"><span>Front End Developer</span></p>

        </div>
    </div>
</div>
<!-- Banner end -->
<!-- <div class="test"></div> -->
<!-- Conntent start -->
<div id="container" class="wrapper">
    <!-- nav Start -->
    <div id="nav">
        <div id="nav-pic"></div>
        <div id="nav-intro">
            <p>
            <h1>李琦</h1>
            <h2>Josefina Lee</h2>
            </p>
            <p style="margin-top=20px">
                <span>前端开发工程师</span>
            </p>
            <!-- <p><span>Front End Developer</span></p> -->
            <!-- <p><span>E-Mail: 15146071521@163.com</span></p> -->
        </div>
        <div id="nav-list">
            <ul>
                <li><a href="" class="hover-type" data-hover="关于我">关于我</a></li>
                <li><a href="" class="hover-type" data-hover="擅长技术">擅长技术</a></li>
                <li><a href="" class="hover-type" data-hover="项目经验">项目经验</a></li>
                <li><a href="" class="hover-type" data-hover="作品展示">作品展示</a></li>
                <li><a href="" class="hover-type" data-hover="联系我">联系我</a></li>
                <li><a href="" class="hover-type" data-hover="我的博客">我的博客</a></li>
            </ul>
        </div>

    </div>

    <!-- nav end -->
    <div id="content">

        <div id="about-me" class="test content-list">
            <div class="content-title"><div class="content-title-mask"><span>关于我</span>About ME</div></div>
        </div>
        <div id="expertise" class="test content-list">
            <div class="content-title"><div class="content-title-mask"><span>擅长技术</span>Expertise</div></div>
        </div>
        <div id="experience" class="test content-list">
            <div class="content-title"><div class="content-title-mask"><span>项目经验</span>Experience</div></div>
        </div>
        <div id="works" class="test content-list">
            <div class="content-title"><div class="content-title-mask"><span>作品展示</span>Works</div></div>
        </div>
        <div id="contact" class="test content-list">
            <div class="content-title"><div class="content-title-mask"><span>联系我</span>Contact</div></div>
            <div id="contact-content" class="clearfix">
                <form method="post" action="" >
                    <div class="contact-item"><input type="text" class="contact-info" placeholder="姓名" name=""></div>
                    <div class="contact-item"><input type="text" class="contact-info" placeholder="邮箱" name=""></div>
                    <div class="contact-item"><input type="text" class="contact-info" placeholder="主题" name=""></div>
                    <div class="contact-item"><input type="text" class="contact-info" placeholder="电话" name=""></div>
                    <div class="contact-message"><textarea class="contact-info"  placeholder="消息"></textarea></div>
                    <input type="submit" value="发送消息" class="contact-submit" name="contact-submit">

                </form>
            </div>
        </div>
        <div id="blog" class="test content-list">
            <div class="content-title"><div class="content-title-mask"><span>我的博客</span>Blog</div></div>
        </div>
    </div>
</div>



<!-- Conntent end -->

<script src="js/index.js"></script>
</body>
</html>

















