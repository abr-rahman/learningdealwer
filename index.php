
<?php 
    $errname = $erremail = $errgender = $errweb = "";

    $filetmp = $filename = "";
    //second form practicial usege post

    $name = $email = $website = $comment  = $gender = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["name"])){
            $errname = "<span style='color:red'>Name is required.</span>";
        }else{
            $name           = validate($_POST["name"]);
        }

                    // Email from create

            if(empty($_POST["email"])){
                $erremail = "<span style='color:red'>E-mail is required.</span>";
            }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $erremail = "<span style='color:red'>Invalid E-mail Format.</span>";
            }
            else{
                $email          = validate($_POST["email"]);
            }

                    // Website from create

        if(empty($_POST["website"])){
           // $errweb = "<span style='color:red'>Website is required.</span>";
        }elseif(!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
            $errweb = "<span style='color:red'>Invalid Website Format.</span>";
        }
        else{
            $website          = validate($_POST["email"]);
        }

            if(empty($_POST["gender"])){
                $errgender = "<span style='color:red'> Gender is required.</span>";
            }else{
                $gender         = validate($_POST["gender"]);
            }

        // $name           = validate($_POST["name"]);
        // $email          = validate($_POST["email"]);
        $website        = validate($_POST["website"]);
        $comment        = validate($_POST["comment"]);
        // $gender         = validate($_POST["gender"]);

            
        // echo "Name : ". $name ."<br>";
        // echo "E-mail : ". $email ."<br>";
        // echo "Website : ". $website ."<br>";
        // echo "Comment : ". $comment ."<br>";
        // echo "Gender : ". $gender."<br>";

    }

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    //image upload form
            // Email from create

            if(isset(($_FILES['image']))){
                $filename = $_FILES['image']['name'];
                $filetmp  = $_FILES['image']['tmp_name'];
                move_uploaded_file($filetmp,"img/" . $filename);
                echo "Image uploaded Successfull";
            }elseif(empty($_FILES["image"])){
                $filename = "<span style='color:red'>image is required.</span>";
                //echo "Image uploaded Unsuccessfull";
            }
            

    // if(isset(($_FILES['image']))){
    //     $filename = $_FILES['image']['name'];
    //     $filetmp  = $_FILES['image']['tmp_name'];
    //     move_uploaded_file($filetmp,"img/" . $filename);
    //     echo "Image uploaded Successfull";
    // }


?>    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- first form practicial from usege post -->

    <!-- <form style="border: 1px solid #ddd; padding: 20px;" actieon="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Username: <input type="text" name="username" id="">
        <input type="submit" value="submit" name="" id="">
    </form> -->
    
<br>

    <!-- Link usege new page for php -->
    <a href="text.php?msg=Good&txt=Bay">Sent Data</a>

<br>



<!-- second form practicial usege post -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"  enctype="multipart/form-data">

<table>
<p style="color:red">* Required field</p>
    <tr>
        <td>Name :</td>
        <td><input type="text" name="name">*<?php echo $errname ?></td>
    </tr>
    <tr>
        <td>E-mail :</td>
        <td><input type="text" name="email">*<?php echo $erremail ?></td>
    </tr>
    <tr>
        <td>Website :</td>
        <td><input type="text" name="website">*<?php echo $errweb ?></td>
    </tr>
    <tr>
        <td>Comment :</td>
        <td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
    </tr>
    <tr>
        <td>Gender </td>
        <td>
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male *<?php echo $errgender ?>
        </td>
    </tr>
    <tr>
        <!-- Upload img -->
        <td>Your Image </td>
        <td>
            <input type="file" name="image">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
        <input type="submit" name="submit" value="submit">
        </td>
    </tr>

</table>

    
</form>



<!-- third form practicial usege post -->



   <?php

   







    // first practicial from usege post

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //    $name = $_REQUEST['username'];
    //     if(empty($name)){
    //         echo "<span style='color:red'> Please Enter Your Username !! </span>";
    //     }else{
    //         echo "<span style='color:green'> You Have Submitted : ".$name."</span>";
    //     }
    // }
   

   ?>










</body>
</html>