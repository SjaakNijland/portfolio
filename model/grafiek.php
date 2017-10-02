<?php
$maxGroot = '60';
$grafiekInfo = array('HTML' => '90', 'CSS' => '70', 'Javascript/Jquery' => '60', 'PHP' => '50','Wordpress' => '50');

echo '<section class="sectiongraf" style="width: '.$maxGroot.'%">';
foreach ($grafiekInfo AS $dag => $waarde){
    echo '<div class="grafiekStaaf" style="width: '.$waarde.'%">'.$dag.'</div>';
}
echo '</section>';
?>