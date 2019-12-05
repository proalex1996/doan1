<?php

/* @var $this yii\web\View */

$this->title = 'Football-Administrator';

use yii\helpers\Url; ?>
<div class="site-index">

    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-4 col-sm-7 mb-4">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="mr-5">Bài Viết</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?=Url::to(["/bai-viet"])?>">
                    <span class="float-left">Xem Chi Tiết</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-sm-7 mb-4">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon" >
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">Loại Tin</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?=Url::to(['/loai-tin']) ?>">
                    <span class="float-left">Xem Chi Tiết</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-sm-7 mb-4">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="mr-5">Bình Luận</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?=Url::to(['/binh-luan']) ?>">
                    <span class="float-left">Xem chi tiết</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Bảng Thống Kê</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tên Bài Viết</th>
                        <th>Ngày Đăng</th>
                        <th>Lượt Xem</th>
                        <th>Lượt Bình Luận</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Tên Bài Viết</th>
                        <th>Ngày Đăng</th>
                        <th>Lượt Xem</th>
                        <th>Lượt Bình Luận</th>
                    </tr>
                    </tfoot>
                    <tbody>

                        <?php foreach ($listThongKe as $item) {?>
                        <tr>
                            <td>
                            <?php echo  $item['title']?>
                            </td>
                            <td><?php echo  $item['posttime']?></td>
                            <td><?php echo  $item['viewcount']?></td>
                            <td><?php echo  $item['count_comment']?></td>
                        </tr>
                     <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

</div>


</div>
