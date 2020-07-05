<?php
$cat = new TypeBook();
$data = [
    'MALOAI' => $cat->h->input_post('txtidtype'),
    'LOAISACH' => $cat->h->input_post('txtnametype')
];
if ($cat->h->is_submit('add_type') && $cat->db_insert_type($data)) {
    $cat->h->redirect($cat->h->get_url('book/admin/?m=typebook&a=listtypebook'));
}
?>

<div class="container">

    <div class="row mt-5">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <form action="" method="post" id="main-form">
                <div class="card border-dark">
                    <div class="card-header bg-info  text-white">
                        <h3>Thêm Loại Sách</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Mã Loại Sách</label>
                                <input type="text" name="txtidtype" class="form-control border-dark">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Tên Loại Sách</label>
                                <input type="text" name="txtnametype" class="form-control border-dark">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info border-dark">
                        <input type="hidden" name="request_name" value="add_type">
                        <input class="btn btn-info" type="submit" value="Thêm">
                        <a class="btn btn-info" href="<?php echo $cat->h->get_url('book/admin/?m=typebook&a=listtypebook'); ?>">Trở Về</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>