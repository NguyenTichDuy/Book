<?php
$cat = new TypeBook();
$list = $cat->db_get_list_type_book();
?>

<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <div class="card border-dark">
                <div class="card-header bg-info text-white">
                    <h3>Danh sách loại sách</h3>
                </div>
                <div class="card-body">
                    <div>
                        <a href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=addtypebook'); ?>" class="btn btn-info">Thêm Loại Sách</a>
                    </div>
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mã Loại Sách</th>
                                <th>Tên Loại Sách</th>
                                <th>Tùy Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = 1;
                            foreach ($list as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['MALOAI'] ?></td>
                                    <td><?php echo $row['LOAISACH'] ?></td>
                                    <td>
                                        <a href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=edittypebook&id=' . $row['MALOAI']); ?>" class="btn btn-outline-danger">Sửa</a>
                                        <a href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=deletetypebook&id=' . $row['MALOAI']); ?>" class="btn btn-outline-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php $stt++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>