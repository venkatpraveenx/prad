<?php
if(isset($_GET['Name'])&&isset($_GET['Email'])&&isset($_GET['Phone'])&&isset($_GET['Message'])){
    $name=$_GET['Name'];
    $email=$_GET['Email'];
    $number=$_GET['Phone'];
    $message=$_GET['Message'];
    $header="From: ".$name."";
    if(!empty($name)&&!empty($email)&&!empty($number)&&!empty($message)){
        mail("pradharshini17@gmail.com","From:$name, Mobile:$number, Email: $email",$message,$header);
        echo "Thanks for mailing us, we will get back to you as soon as possible.";
    }else{
        echo "An error occurred, try again later";
    }
}else{
    echo "An error occurred, try again later";
}
?>
