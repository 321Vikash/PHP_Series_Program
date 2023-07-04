<!-- Programmer :Vikash Kumar Thakur 
    Topic      :2,3,10,15,26,...
    Date       :05/07/2023
    IDE        :VS Code
-->
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i % 2 == 0) {
        echo $i * $i - 1 . ",";
    } else {
        echo $i * $i + 1 . ",";
    }
}
echo "...";
?>