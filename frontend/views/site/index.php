<?php

/* @var $this yii\web\View */

use Codeception\PHPUnit\TestCase;
use PHPUnit\Framework\Constraint\Count;
use yii\helpers\Url;

$this->title = 'Football.vn';
?>

<div class="section has-posts multi-category-posts u-padding-tb-40">
    <div class="container">
        <div class="u-flex u-flex--wrap n-margin-lr-3">
            <?php
            for($i = 0; $i < count($listTrangChu); $i++ ) {

                ?>
                <article class="grid-item cat-world">
                    <figure>
                        <img  src="<?=Url::to([$listTrangChu[$i]["thumbnail"]])?>" alt="" width="366" height="228">
                    </figure>

                    <div class="thumb-content">
                        <h2 class="post-title"><a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrangChu[$i]["id"]])?>"><?= $listTrangChu[$i]["title"] ?></a></h2>
                        <div class="post-meta">
                            <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?= $listTrangChu[$i]["posttime"]?>  </time>
                        </div>
                    </div>
                </article>
                <?php
                if ($i == 2) {
                    break;
                }
            }
            ?>
            <?php
            for ($i=3; $i <  count($listTrangChu); $i++ ) {?>
                <article class="grid-item cat-business">
                    <figure>
                        <img src="<?= Url::to([$listTrangChu[$i]["thumbnail"]])?>" alt="">
                    </figure>

                    <div class="thumb-content">
                        <h2 class="post-title"><a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrangChu[$i]["id"]])?>">
                                <?= $listTrangChu[$i]["title"]?></a></h2>
                        <div class="post-meta">
                            <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?= $listTrangChu[$i]['posttime']?></time>
                        </div>
                    </div>
                </article>
                <?php
                if($i == 4) {
                    break;
                }
                ?>
            <?php
            }
            ?>
        </div>

    </div>
</div>

<section class="has-sidebar">
    <div class="container">
        <div class="row" data-sticky_parent="" style="position: relative;">
            <div class="col-lg-8 content-wrapper" style="position: relative;">
                <div data-sticky_column="" class="" style="">
                        <div class="posts-box has-cat has-load-more">
                            <div class="posts-box__top">
                                <h4 class="posts-box__top__title">Nổi Bật</h4>
                            </div>
                            <div class="posts-list has-style-1">
                                <?php
                                for($i = 5; $i < count($listTrangChu); $i++ )
                                {
                                ?>
                                <article class="post-item cat-business post-item--style-1">
                                    <figure>
                                        <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrangChu[$i]["id"]])?>"><img src="<?=Url::to([$listTrangChu[$i]["thumbnail"]])?>" alt="" width="349"  height="199"></a>
                                    </figure>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrangChu[$i]["id"]])?>"><?=$listTrangChu[$i]["title"]?></a></h4>
                                        <div class="post-meta">
                                            <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?=$listTrangChu[$i]["posttime"]?></time>
                                        </div>
                                        <p class="post-excerpt">
                                          <?=$listTrangChu[$i]["description"]?>
                                        </p>
                                    </div>
                                </article>
                                    <?php if($i == 9){
                                        break;
                                }?>
                                <?php }?>

                            </div>
                        </div>
                    <div class="posts-box has-cat cat-local u-margin-t-40">
                        <div class="posts-box__top has-ajax-load">
                            <h4 class="posts-box__top__title">Vòng Loại WorldCup 2022</h4>
                        </div>


                        <div class="posts-list has-post-in-left">
                            <?php for ($i =0 ; $i < count($listWC); $i++){ ?>
                                <article class="post-item">
                                    <figure>
                                        <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listWC[$i]["id"]])?>"><img src="<?=Url::to([$listWC[$i]["thumbnail"]])?>" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listWC[$i]["id"]])?>">Việt Nam -
                                                Thái-lan: Bất phân thắng bại </a></h4>
                                        <div class="post-meta">
                                            <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?=$listWC[$i]["posttime"]?>
                                            </time>
                                        </div>

                                    </div>
                                </article>
                                <?php
                            if($i == 0){ break;}
                            }
                            for ($i = 1; $i < count($listWC) ; $i++ ){
                            ?>

                            <article class="post-item">
                                <figure>
                                    <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listWC[$i]["id"]])?>"><img src="<?=Url::to([$listWC[$i]["thumbnail"]])?>" alt="" width="100" height="67"></a>
                                </figure>
                                <div class="post-content">
                                    <h4 class="post-title">
                                        <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listWC[$i]["id"]])?>">
                                            <?=$listWC[$i]["title"]?>
                                        </a>
                                    </h4>
                                    <div class="post-meta">
                                        <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?=$listWC[$i]["posttime"]?></time>
                                    </div>
                                </div>
                            </article>
                            <?php
                            if($i == 3){break;}
                            }?>
                        </div>
                        <div class="posts-box__bottom">
                        <div class="posts-box__bottom__load-more">
                            <a href="/bong-da/doi-tuyen">Load More</a>
                        </div>
                    </div>
                    </div>

                </div>

            </div>



            <div class="col-lg-4 sidebar sidebar--right u-md-down-margin-t-40">

                <div class = "row">
                    <div class="col-lg sidebar sidebar--right u-md-down-margin-t-40">
                        <div class="side-bar__inner" data-sticky_column="">
                            <div class="widget widget--border-box cat-trending single-cat">
                                <div class="widget__title has-ajax-load">
                                    <h4>Xem Nhiều</h4>
                                </div>
                                <ul class="posts-wrap">
                                    <?php for ($i =0; $i < count($listTrending);$i++){
                                        ?>
                                        <li class="cat-sports">
                                            <figure>
                                                <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrending[$i]["id"]])?>"><img src="<?=Url::to([$listTrending[$i]["thumbnail"]])?>" alt=""></a>
                                            </figure>
                                            <div class="post-content">
                                                <h6 class="post-title">
                                                    <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrending[$i]["id"]])?>">
                                                        <?=$listTrending[$i]["title"]?>
                                                    </a>
                                                </h6>
                                                <div class="post-meta">
                                                    <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i>S<?=$listTrending[$i]["posttime"]?>  </time>
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





