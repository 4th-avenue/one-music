<?php
require('../db/_conn.php');
$no = $_GET['no'];

// DB에 남기고 삭제
// $sql = "UPDATE bbs1 SET del_flg = 1 WHERE no= $no";
// 완전 삭제
$sql = "DELETE FROM bbs1 WHERE `no`=$no";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('글 삭제가 완료되었습니다.');location.href='bbs.php'</script>";
}
?>