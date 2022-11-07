<?php
$classmataes = array("ward", "fatima");
$arrlength = count($classmataes);

for($x = 0; $x < $arrlength; $x++) {
  echo $classmataes[$x];
  echo "<br>";
}
?>
 


<?php
$course = array("CIS321"=>"OPERATING SYSTEMS", "SEW321"=>"ADVANCED USER INTERFACE DESIGN", "CIS386"=>"PROJECT MANAGEMENT");

foreach($course as $x => $x_coursename) {
  echo "coursecode=" . $x . ", coursename=" . $x_coursename;
  echo "<br>";
}
?>


<?php
$device = array (
  array("laptop","asus","msi"),
  array("CPU","AMD","INTEL"),
  array("GPU","AMD","NVIDIA"),

);
echo   '"I am looking for for '.$device[0][0].' '.$device[0][1].' whith ' .$device[1][0].' '.$device[1][1].' with ' .$device[2][0].' '.$device[2][1].' ". ';

?>

