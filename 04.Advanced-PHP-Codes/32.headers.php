<?php //ob_start(); ?>
<form action="" method="get">
    <input type="text" name="url">
    <input type="submit" name="submit" value="Go There">
</form>
<?php
function redirect($page){
    header('Location: '.$page);
}
if(isset($_GET['url'])&&!empty($_GET['url'])){
    redirect($_GET['url']);
}
   else{
       echo 'Provide the url to redirect';
   }
//ob_end_clean();
?>