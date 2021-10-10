<?php include('config.php'); 

session_start();

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

$langName = '';
$eng_Bld = $guj_Bld = 'initial';
// Include Language file
if(isset($_SESSION['lang']) && $_SESSION['lang']=='guj' ){
 include "lang_".$_SESSION['lang'].".php";

$langName = 'guj_';
$guj_Bld = 'bold';

}else{
 include "lang_en.php";
 $_SESSION['lang']='';
 $eng_Bld = 'bold';

}

$link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $_pageName = end($link_array);
    $pageName = str_replace('.php', '', $_pageName);

    $cms = mysqli_query($conn,"SELECT * FROM cms");

//echo array_search("red",$cms);
    $cms_arr = array();
    $num_i = 0;
    //echo "<pre>";
    while($cms_res = mysqli_fetch_array($cms)){
        $new_arr['c_id']= $cms_res['c_id'];
        $new_arr['c_name']= $cms_res['c_name'];
        $new_arr['c_slug']= $cms_res['c_slug'];
        $new_arr['c_desc']= $cms_res[$langName.'c_desc'];
        $cms_arr[$new_arr['c_slug']] = $new_arr; 
        $num_i++;
    }
    //print_r($cms_arr['aboutS1']['c_desc']);

    // Common Data
    $social_contact = mysqli_query($conn,"SELECT * FROM connect_us where id=1");
    $res_social = mysqli_fetch_array($social_contact);


?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>SUMAAR STAGE | PROVIDE STAGE TO DISERVING ARTIST</title>

<meta charset="utf-8">
<meta name="description" content="SUMAAR STAGE PROVIDE STAGE TO DISERVING ARTIST.">
<meta name="keywords" content="sumaar stage, sumaar stage in gujarat, free video maker in gujarat, SINGING TELENT in gujarat">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link href="images/logo.png" rel="icon" type="image/png">

<!-- CSS only -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="style-common.css" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css"> -->
<!-- <script async src="js/jquery-3.6.0.min.js"></script> -->

<!-- <script src="js/custom.js"></script> -->

<!-- JavaScript Bundle with Popper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</head>
<body>

	