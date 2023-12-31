<?
$NowPage = $_SERVER['PHP_SELF'];
if( stristr($NowPage,'index.php'))
{ 
	$url="";
    $SetCss="<link rel='stylesheet' href='css/main.css'>";
} else { 
    $url="../";
    $SetCss="<link rel='stylesheet' href='../css/sub.css'>";
    $SetJs="<script type='text/javascript' src='../js/sub.js'></script>";
}
?>

<?
$NowFolder = $_SERVER['PHP_SELF'];
if( stristr($NowFolder,"/naver/"))
{
    $now1="class=on";
    $loc2="<li><a href='company.php'>네이버</a></li>";
    
   if( stristr($NowFolder,"company.php"))
    {
      $loc3="<li><a href='company.php'>NAVER</a></li>";
      $title="네이버 소개"; 
    }
    elseif( stristr($NowFolder,"milestones.php") ) 
    {
        $loc3="<li><a href='company.php'>NAVER</a></li>";
        $title="연혁";
    }
    elseif( stristr($NowFolder,"proposalGuide.php") ) 
    {
            $title="제휴제안";
    }
    elseif( stristr($NowFolder,"contact.php")) 
    {
        $title="CONTACT";
    }
}
elseif( stristr($NowFolder,"/service/"))
{
    $now2="class=on";
    $loc2="<li><a href='featured.php'>서비스</a></li>";
    if( stristr($NowFolder,"featured.php"))
    {
        $title="FEATURED SERVICES";    
    }
} 
elseif( stristr($NowFolder,"/promotion/"))
{
    $now4="class=on";
    $loc2="<li><a href='pressReleases.php'>홍보</a></li>";
    if( stristr($NowFolder,"pressReleases.php"))
    {
        $title="보도자료";    
    }
    elseif( stristr($NowFolder,"ads.php") ) 
    {
        $title="TV광고";
    }
} 
?>