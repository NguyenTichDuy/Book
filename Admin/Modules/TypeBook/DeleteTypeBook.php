<?php
$cat = new TypeBook();
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $data = [
        'MALOAI' => $id
    ];
    $name = $cat->db_get_list_type_name_book($id);
    //var_dump($name);
    if ($cat->h->is_submit('delete_type') && $cat->db_delete_type($data)) {
        $cat->h->redirect($cat->h->get_url('book/admin/?m=typebook&a=listtypebook'));
    }
}
?>

<div class="container">

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h3>Xác nhận thông tin xóa</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        Bạn có thật sự muốn xóa tên loại sách này không ?
                    </h5>
                    <p class="card-text text-center">
                        <?php  echo $name['LOAISACH']; ?>
                    </p>
                </div>
                <form action="" method="post">
                    <div class="card-footer bg-danger pt-2 pb-2 text-center">
                        <input type="hidden" name="request_name" value="delete_type">
                        <input type="submit" class="btn btn-info" value="Có">
                        <a href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=listtypebook'); ?>" class="btn btn-info">Không</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>