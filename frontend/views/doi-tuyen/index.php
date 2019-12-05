<?php

use yii\helpers\Url;
$this->title = 'Football-Đội Tuyển'

?>
<doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script href="http://localhost:8888/bong-da/font-awesome/css/font-awesome.mim.css"></script>
        <?php $this->registerCsrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <body>
    <div class="breadcrumbs-area breadcrumbs-area--light">
        <div class="container">
            <div class="breadcrumbs">
                <span>
                  <a href="<?=Url::to(['/'])?>">Trang Chủ</a>
                </span>
                <span class="separetor">-</span>
                <span class="current"><a href="<?=Url::to(['/doi-tuyen'])?>">Đội Tuyển</a></span>
            </div>
        </div>
    </div>
    <section class="has-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <br><br>
                    </div>
                    <div class="row">
                        <div class="posts-box has-load-more ">
                            <div class="posts-box__top has-ajax-load">
                                <h4>Gần Đây</h4>
                            </div>
                            <div class="posts-list has-style-1">
                                <?php
                                foreach ($listBaiViet as $item) {?>
                                    <article class="post-item cat-business post-item--style-1">
                                        <figure>
                                            <a href="<?=Url::to(['/bai-viet/chi-tiet?id=' . $item["id"]])?>"><img src="<?=Url::to([$item["thumbnail"]])?>" alt="" width="306"
                                                                                                                 height="209"></a>
                                        </figure>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="<?=Url::to(['/bai-viet/chi-tiet?id=' . $item["id"]])?>"><?= $item["title"] ?></a></h4>
                                            <div class="post-meta">
                                                <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?= $item["posttime"] ?></time>
                                                <a href="#" class="post-comments"><i class="fa fa-comments"></i> </a>
                                            </div>
                                            <p class="post-excerpt">
                                                <?=$item["description"]?>
                                            </p>
                                        </div>
                                    </article>
                                    <?php
                                }
                                foreach ($listWC as $value){
                                ?>
                                    <article class="post-item cat-business post-item--style-1">
                                        <figure>
                                            <a href="<?=Url::to(['/bai-viet/chi-tiet?id=' . $value["id"]])?>"><img src="<?=Url::to([$value["thumbnail"]])?>" alt="" width="306"
                                                                                                                  height="209"></a>
                                        </figure>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="<?=Url::to(['/bai-viet/chi-tiet?id=' . $value["id"]])?>"><?= $value["title"] ?></a></h4>
                                            <div class="post-meta">
                                                <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?= $value["posttime"] ?></time>
                                                <a href="#" class="post-comments"><i class="fa fa-comments"></i> </a>
                                            </div>
                                            <p class="post-excerpt">
                                                <?=$value["description"]?>
                                            </p>
                                        </div>
                                    </article>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                </br></br>
                    <div class = "row">
                        <div class="col-lg sidebar sidebar--right u-md-down-margin-t-40">
                            <div class="side-bar__inner" data-sticky_column="">
                                <div class="widget widget--border-box cat-trending single-cat">
                                    <div class="widget__title">
                                        <h4>Đừng Bỏ Qua</h4>
                                    </div>
                                    <ul class="posts-wrap">
                                        <?php for($i = 0;$i < count($listTrangChu);$i++){?>
                                            <li class="cat-sports">
                                            <figure>
                                                <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrangChu[$i]["id"]])?>"><img src="<?=Url::to([$listTrangChu[$i]["thumbnail"]])?>" width="80" height="60" alt=""></a>
                                            </figure>
                                            <div class="post-content">
                                                <h6 class="post-title">
                                                    <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrangChu[$i]["id"]])?>">
                                                        <?=$listTrangChu[$i]["title"] ?>
                                                    </a>
                                                </h6>
                                                <div class="post-meta">
                                                    <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?=$listTrangChu[$i]["posttime"]?></time>
                                                </div>
                                            </div>
                                        </li>
                                            <?php
                                            if($i == 4){
                                                break;
                                            }
                                        }?>

                                    </ul>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

    </html>


    <!--    <article class="post-item">-->
    <!--        <div class="post-item__inner">-->
    <!--            <figure>-->
    <!--                <a href="#"><img src="img/thumb/hatinh.jpg" alt="Hồng Lĩnh Hà Tĩnh giành vé lên V-League</br>-->
    <!--                                                                                  Phố Hiến tranh suất play-off" width="193" height="110"></a>-->
    <!--            </figure>-->
    <!--            <div class="post-content">-->
    <!--                <h6 class="post-title">-->
    <!--                    <br href="#">Hồng Lĩnh Hà Tĩnh giành vé lên V-League</br>-->
    <!--                    Phố Hiến tranh suất play-off</a></h6>-->
    <!--                <div class="post-meta">-->
    <!--                    <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i>Sept. 20, 2019  </time>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </article>-->