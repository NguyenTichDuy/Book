<?php
$book = new Book();
if (!empty($_GET['bookid'])) {
    $bookid = $_GET['bookid'];
    $list_book = $sub->db_get_list_book_by_id_type($bookid);
?>
    <option value="">-- Chọn sách --</option>
    
    <?php foreach ($list_book as $row) {
    ?>
    
    <option value="<?php echo $row['MASACH']; ?>"><?php echo $row['TENSACH']; ?></option>
    <?php echo $row['MASACH']; ?>
<?php
    }
}

?>

