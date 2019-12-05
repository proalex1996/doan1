<?php

use yii\helpers\Url;
$this->title = 'Bài Viết'

?>

<div class="breadcrumbs-area breadcrumbs-area--light">
    <div class="container">
        <div class="breadcrumbs">
                <span>
                 <a href="<?=Url::to(['/'])?>">Trang Chủ</a>
                </span>
            <span class="separetor">-</span>
            <span class="current">Bài Viết</span>
        </div>
    </div>
</div>

<section class="has-sidebar u-padding-tb-60">
    <div class="container">
        <div class="row" data-sticky_parent="">
            <div class="col-lg-8 content-wrapper">
                <div data-sticky_column="">
                    <div class="m-post-content m-post-content--nyc">
                        <div class="post-top">
                            <h1 class="post-title"><?= $dataBaiViet['title'] ?></h1>
                            <h5><?= $dataBaiViet['description']?></h5>
                            <div class="post-meta">
                                <div class="item">
                                    <time datetime="2018-02-14 20:00"><i class="fa fa-clock-o"></i><?= $dataBaiViet['posttime']?></span></time>
                                </div>
                                <div class="item">
                                    <a href="#"><i class="fa fa-comments"></i><?=$countComment['count_comment']?>  Bình Luận</a>
                                </div>

                            </div>
                        </div>
                        <div class="entry-content">
                            <?=$dataBaiViet['content']?>
                        </div>
                    </div>

                    <div class="posts-box u-margin-t-40">
                        <div class="posts-box__top">
                            <h4 class="posts-box__top__title">Bình Luận</h4>
                        </div>

                        <div class="comment-form comment-form--bordered">
                            <form class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inp1">Full Name</label>
                                        <input type="email" class="form-control" name="inp1" id="inp1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inp2">Địa Chỉ Email</label>
                                        <input type="email" class="form-control" name="inp2" id="inp2">
                                    </div>
                                </div>

                                <div class="col-md-12 u-margin-t-10">
                                    <div class="form-group">
                                        <label for="t1">Bình Luận</label>
                                        <textarea class="form-control" id="t1" name="t1" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-submit u-margin-t-15">
                                        <button type="button" onclick="postComment(<?=$dataBaiViet["id"]?>)" class="text-uppercase c-btn c-btn--solid c-btn--color-brand">Đăng</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="posts-box has-cat has-load-more u-margin-t-40">
                            <div class="posts-box__top">
                                <h4 class="posts-box__top__title font-weight-normal">Bình luận</h4>
                            </div>

                            <div class="comments-box comments-box--alt">
                                <ol class="comment-list" id="list-comment">
                                    <?php
                                        foreach ($listComment as $comment){
                                            ?>
                                            <li class="comment parent">
                                                <article class="comment-body">
                                                    <div class="comment-content">
                                                        <h4 class="author-name font-weight-normal"><a href="#"><?=$comment['commenter']?></a></h4>
                                                        <time><?=$comment['posttime_comment']?></time>
                                                        <p><?=$comment['content_comment']?></p>
                                                    </div>
                                                </article>
                                            </li>
                                        <?php
                                        }
                                    ?>

                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="posts-box has-cat u-margin-t-40">
                        <div class="posts-box__top">
                            <h4 class="posts-box__top__title">Tin Liên Quan</h4>
                        </div>

                        <div class="posts-list has-style-1">
                            <?php for($i = 0; $i < count($listTrangChu);$i++)
                            {?>
                            <article class="post-item cat-business post-item--style-1">
                                <figure>
                                    <a href=""><img src="<?=Url::to([$listTrangChu[$i]["thumbnail"]])?>" alt="" width="309" height="206"></a>
                                </figure>
                                <div class="post-content">
                                    <h4 class="post-title"><a href=""><?=$listTrangChu[$i]["title"]?></a></h4>
                                    <div class="post-meta">
                                        <time><i class="fa fa-clock-o"></i><?=$listTrangChu[$i]["posttime"]?>></time>
                                    </div>
                                    <p class="post-excerpt">
                                        <?=$listTrangChu[$i]["description"]?>
                                    </p>
                                </div>
                            </article>
                            <?php
                            if ($i == 3){
                                break;
                            }
                            }?>
                        </div><!--//.posts-list -->
                    </div>
                </div></div>


            <div class="col-lg-4 sidebar sidebar--right u-md-down-margin-t-40">
                <div class="side-bar__inner" data-sticky_column="">
                    <div class="widget widget--border-box cat-trending single-cat">
                        <div class="widget__title">
                            <h4>Đừng Bỏ Qua</h4>
                        </div>
                        <ul class="posts-wrap">
                            <?php for($i = 0;$i < count($listTrangChu);$i++){?>
                                <li class="cat-sports">
                                    <figure>
                                        <a href="<?=Url::to(['bai-viet/chi-tiet?id=' . $listTrangChu[$i]["id"]])?>"><img src="<?=Url::to([$listTrangChu[$i]["thumbnail"]])?>" width="80" height="50" alt=""></a>
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
</section>
