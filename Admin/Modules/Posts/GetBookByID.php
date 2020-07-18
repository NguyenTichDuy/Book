<?php
$book = new Book();
if (!empty($_GET['bookid'])) {
    $bookid = $_GET['bookid'];
    $list_book = $book->db_get_list_book_by_id($bookid);
    var_dump($bookid);
?>
    <option value="">-- Chọn sách --</option>
    
    <?php foreach ($list_book as $row) {?>
    
    <option value="<?php echo $row['MASACH']; ?>"><?php echo $row['TENSACH']; ?></option>
<?php
    }
}

?>
