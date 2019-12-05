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
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
