<?php
function seoUrl($string) {
   $string = strtolower($string);
   $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
   $string = preg_replace("/[\s-]+/", " ", $string);
   $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}

echo $type=$_POST['folder'];
echo '<br>';
echo $title=$_POST['title'];

if(mb_check_encoding($type, 'UTF-8')) {
    echo "\ntrue";  }
else {
    echo "\nfalse"; }

$type=seoUrl($type);
if(!file_exists($type))
{
mkdir($type);
}
$title = ucfirst(strtolower($title));
$temp=$title;
$temp=seoUrl($temp);
if(!file_exists($type."/".$temp)){
mkdir($type."/".$temp);}
?>