<?php
include("../DAO/Data_Connection_1.php");
#Example_1
$cat=mysqli_query($con,"select * from Product");

$num_row=mysqli_num_rows($cat);

if($num_row>0){
    while ($item=mysqli_fetch_object($cat))
    {
        echo $item->name;
    }

}

#Example_2
$ex2=mysqli_query($con, "select * from Product");
$num=mysqli_num_rows($ex2);
if($num>0)
{   
    echo"<table border=1 width=100%>";
        echo"<tr>
                <td> id </td>
                <td> id_category </td>
                <td> name </td>
                <td> prices </td>
                <td> photo </td>
                <td> description </td>
                <td> discount </td>
                <td> status </td>
            </tr>";
        while($row=mysqli_fetch_object($ex2))
        {
        echo"<tr>
                <td> 1 </td>
                <td> 001 </td>
                <td> Sovichea </td>
                <td> 10 </td>
                <td> person </td>
                <td> none </td>
                <td> none </td>
                <td> paid </td>
            </tr>";
        }

    echo"</table>";
}
?>