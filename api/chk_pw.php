
<?php include_once "db.php";
// 判斷帳號對比資料庫是否重複 

$res=$User->count($_POST);

if($res){
    $_SESSION['user']=$_POST['acc'];
}
echo $res;

// echo $User->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

// echo $res;


// if($res>0){
//     echo 1 ;
//     // 密碼正確
// }else{
//     echo 0;
// }

?>