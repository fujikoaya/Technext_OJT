<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <title>OJT</title>
</head>

<body>
    <header> 
        <div class=logo><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></div>
        <nav class="nav">
            
            <button type="button" class="menu-trigger">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-list">
                <li class="nav-item"><a href="#">Menu01</a></li>
                <li class="nav-item"><a href="#">Meun02</a></li>
                <li class="nav-item"><a href="#">Meun03</a></li>
                <li class="nav-item"><a href="#">Meun04</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <div id="kv">
            <div class="posimg1"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></div>
            <picture class="posimg2">
                <source srcset="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png" media='(max-width: 767px'>
                <!-- mediaの中にレスポシブサイズを記入 -->
                <img src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" alt="">
            </picture>
            <div class="mainvisual">
                <!-- <img class="posimg1" src="./img/logo.png" alt=""> -->
                <picture>
                    <source srcset="<?php echo get_template_directory_uri();?>/img/visual_1_sp.png" media='(max-width: 767px)'>
                    <!-- mediaの中にレスポシブサイズを記入 -->
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_1_pc.png" alt="">
                </picture>
            </div>
        </div>
        <p class='text'>進化し続ける「街」<br class="br">
            アメリカンビレッジマガジン
        </p>
        <div class='main-titile'>
            <section class='latest article'>
                <h1>Latest Article</h1>
                <div class='la'>
                    <div class='article-wrap'>
                    <a href="">
                        <div class="pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_1.png" alt="">
                        </div>                        
                        <p>2018 / 5 / 20</p>
                        <p>おしゃれなカフェありますよ</p>
                        <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                        </div>
                        </a>
                    </div>
                    <div class='article-wrap'>
                        <a href="">
                            <div class="pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_2.png" alt="">
                            </div>
                        <p>2018 / 5 / 19</p>
                        <p>あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
                        <div class='readmore1'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                        </div>
                        </a>
                    </div>
                    <div class='article-wrap'>
                        <a href="">
                           <div class="pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_3.png" alt="">
                            </div>
                        <p>2018 / 5 / 18</p>
                        <p>ラソナの社内はこんなのよ</p>
                        <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                        </div>
                        </a>
                    </div>
                    <div class='article-wrap'>
                        <a href="">
                            <div class='pic'>
                                <img src="<?php echo get_template_directory_uri();?>/img/post_img_4.png" alt="">
                            </div>                     
                        <p>2018 / 5 / 27</p>
                        <p>お隣のアラハはハワイ？</p>
                        <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                        </div>
                        </a>
                    </div>
                    <div class='article-wrap'>
                         <a href="">
                             <div class='pic'>
                                  <img src="<?php echo get_template_directory_uri();?>/img/post_img_5.png" alt="">
                             </div>                   
                        <p>2018 / 5 / 16</p>
                        <p>なぜテント？ラソナの人に聞いてみた</p>
                        <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                        </div>
                        </a>
                    </div>
                    <div class='article-wrap'>
                        <a href="">
                             <div class='pic'>
                                   <img src="<?php echo get_template_directory_uri();?>/img/post_img_6.png" alt="">
                             </div>          
                        <p>2018 / 5 / 15</p>
                        <p>ベイエリアおしゃれすぎる問題</p>
                        <div class='readmore'>
                             <div class='tr'>
                               <span>READ MORE</span>
                             </div>
                        </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>

    </main>
    <footer>
        Copyright <span>&copy</span>Shinohara.ALL RIGHTS RESERVED.</footer>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src='<?php echo get_template_directory_uri();?>/script.js'></script>
</body>

</html>