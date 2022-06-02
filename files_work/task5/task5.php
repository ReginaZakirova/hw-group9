<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<? 
$file1 = explode('.',file_get_contents('file1.txt'));
$file2 = explode('.',file_get_contents('file2.txt'));
$res_arr = [];
foreach($file1 as $str1){
    foreach($file2 as $str2){
        if($str1 == $str2){
            $dubl = false;
            foreach($res_arr as $str3){
                if($str3 == $str1){
                    $dubl = true;
                }
            }
            if($dubl == false){
                $res_arr[] = $str1;
            }
        }
    }
}
pre($res_arr);


file_put_contents('file_result.txt', implode('.',$res_arr));
?>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>