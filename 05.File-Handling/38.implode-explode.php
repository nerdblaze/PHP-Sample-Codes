<?php
$data='Hello, I, am, nerdBlaze';
echo $data;
print_r(explode(',',$data));
$dataArr=explode(',',$data);
print_r(implode(',',$dataArr));
?>