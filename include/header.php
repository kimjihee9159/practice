<?
$NowPage = $_SERVER['PHP_SELF'];
if( stristr($NowPage,'index.php'))
{ 
   $now1="class=on";
} 
elseif( stristr($NowPage,'sub.php'))
{ 
   $now2="class=on";
}
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-include</title>
    <!--공통요소 한 파일에서 제어하기-->
</head>
<body>


<style>
    .on{color:#ff0000}
</style>

    <div id="wrap">
        <header>
            <a href="idnex.php" <?=$now1?>>메인화면</a>
            <a href="sub.php" <?=$now2?>>서브화면</a>
        </header>

        <div class="container">
    <!------------------------------------------------->