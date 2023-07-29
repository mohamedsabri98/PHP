<?php
    //open connection
    $conn=mysqli_connect("localhost","root","","phplogin");
    if(! $conn){
        echo mysqli_connect_error();
        exit;
    }
    //after connection do that operations

    $query="SELECT * FROM accounts";
    //$a=mysqli_query($conn,$query);
    //var_dump($a) ;
    $res=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_assoc($res)){
        echo "id" .$row['id']."<br/>";
        echo "name" .$row['username']."<br/>";
        echo "email" .$row['email']."<br/>";

     }
     //close connection
    // msqli_free_result($res);
     mysqli_close($conn);
     
?>
