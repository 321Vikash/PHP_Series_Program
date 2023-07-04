<!-- Programmer :Vikash Kumar Thakur 
    Topic       :3,11,29,67,127,....
    Date        :05/07/2023
    IDE         :VS Code
-->
<?php
for($i=1;$i<=5;$i++)
{
    if($i%2==0)
    {
        echo $i*$i*$i+3 . ",";

    }
    else
    {
        echo $i*$i*$i+2 . ",";
    }
}
echo "....";
?>