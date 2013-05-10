<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        if(isset($_REQUEST['email'])){
        $FirstName = $_REQUEST["FName"];
        $Lastname = $_REQUEST["LName"];
        $Email = $_REQUEST["email"];
        $feedback = $_REQUEST["textComment"];
        
   
        $to = "terry_dominque@yahoo.com";
        $subject = 'Feedback from your site';
        $msg = "Your Frist Name: $FirstName/n"."Your Last Name: $Lastname/n" .
                "Your email: $Email/n" . "Feedback: $feedback";
       
        mail($to, $subject, $msg, 'From'.$Email);
        echo 'thank you <br/>';
        echo 'your first name' . $FirstName.'<br/>';
        echo 'your last name' . $Lastname.'<br/>';
        echo 'your email' . $Email.'<br/>';
        echo 'feedback' . $feedback.'<br/>';
        
        }
        
        ?>
    </body>
    
    <form action =" index.php" method =" post">
    <title>Untitled Document</title>
    <style type="text/css">
        .titlehead {
            font-size: 36px;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-weight: bold;
            text-align: center;
        }
        .bodytext {
            text-align: left;
            font-size: 14px;
        }
    </style>
</head>


    <p><img src="images.jpg" width="1038" height="304" />
    </p>
    <p align="center" class="titlehead">Contact US!</p>
    <p align="center" class="bodytext">
        <label for="FName">First Name</label>
        <input type="text" name="FName" id="FName" />
    </p>
    <p align="center" class="bodytext">
        <label for="LName">Last Name</label>
        <input type="text" name="LName" id="LName" />
    </p>
    <p align="center" class="bodytext">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" />
    </p>
    <p align="center" class="bodytext">
        <label for="textComment">Comments<br />
            <br />
        </label>
        <textarea name="textComment" id="textComment" cols="45" rows="5"></textarea>
    </p>
    <p align="center" class="bodytext">
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" />
    </p>
    </form>
</html>
