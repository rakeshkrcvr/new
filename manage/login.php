
<?php

include '../database.php';

// sucussfully cenected database connection


if (isset($_POST['login_deshboard'])) {
    $dusername = $_POST['dusername'];
    $dpassword = $_POST['dpassword'];
    $dpassword = md5($dpassword);

    $sql= mysqli_query($conn, " SELECT * FROM login_deshboard where dusername='".$dusername."' AND dpassword='".$dpassword."' limit 1"); 

    $_result=mysqli_query($conn, $sql);

    if(mysqli_num_rows($sql)){
         while ($row = mysqli_fetch_array($sql))
         {
                $dusername = $row['dusername'];
                $dpassword = $row['dpassword'];

                echo '<script> alert("You Have succusefully logged in") </script>' ;

                header('Location: http://localhost/crm/manage/index.php');
         }  
    }

    else{
        echo "You have entered wrong password or id";
    };
     
    
  
}


?>



<?php 
// if (isset($_POST['login_dashboard'])) {

//             $dusername = $_POST['dusername'];
//             $dpassword = $_POST['dpassword'];
//             $dpassword = md5($dpassword);

//             $sql= mysqli_query($conn, " SELECT * FROM login_deshboard where dusername='".$dusername."' AND dpassword='".$dpassword."' limit 1"); 

//             // $sql = "SELECT * FROM login_deshboard WHERE dusername='$susername' AND dpassword='$dpassword'";

//             $result = mysqli_query($conn, $sql);

//                 if(mysqli_num_rows($sql)){
//                         while ($row = mysqli_fetch_array($sql))
                        
//                         {
//                                 $dusername = $row['dusername'];
//                                 $dpassword = $row['dpassword'];

//                                 echo '<script> alert("You Have succusefully logged in") </script>' ;

//                                 header('Location: http://localhost/crm/manage/index.php');
//                         }  
//                                 }

//                                 else{
//                                     echo "You have entered wrong password or id";
//                   };
//         }           

?>


<?php 
include 'importent-css.php'
?>

<style>
    /* login form css */
    .loginForm {
    align-items: center;
    height: 100vh;
    width: 100%;
    padding:7% 30%;
    
}



.loginForm .form-box {
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 1px 3px 10px #696cff;


}

.text-whitesmoke{
    color:#fff;
}
.text-darkyellow{
    color:#fff;
}


.form-box {
	background: linear-gradient(45deg, #b988a5, #6666ff, #99f899,#cccc80, #ffffff, #ef5cb3, #9292ec, #9cee9c,#e5e58d, #ff7777);
	background-size: 1500%;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	z-index: -1;
	animation: steam 200s linear infinite;
}

@keyframes steam {
	0% {
		background-position: 0 0;
	}
	50% {
		background-position: 400% 0;
	}
	100% {
		background-position: 0 0;
	}
}



#loginForm{
    height: 100vh;
    align-items: center;
    background-color: #fffffd;
    
}

#loginForm img{
    width:150px;
    align-items: center;
    
    
}

.loginForm .form-group{
    margin-top:20px;
    margin-bottom:20px;
}

    
</style>



<body>
    <section id="loginForm">
        <div class="container text-center">
            <div class="row">
                <div class="loginForm col-md-offset-3 col-md-6" >
                    <div class="form-box form-box">
                    <div>
                        
                        <img src="assets/img/login/form-login.png">
                    </div>
                    <h3 class="text-whitesmoke">Login Dashboard</h3>
                    <p class="text-whitesmoke">Please enter your username and password</p>
                    <div class="container-content">
                        <form class="margin-t" method="POST" action="login.php">
                            <div class="form-group">
                                <input type="text" name="dusername" class="form-control" placeholder="dusername" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="dpassword" class="form-control" placeholder="*****" required="">
                            </div>
                            <button type="submit" class="btn btn-primary" name="login_deshboard">Sign In</button><br>

                            <a class="text-darkyellow" href="#"><small>Forgot your password?</small></a>
                            <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p>
                            <a class="text-darkyellow" href="#"><small>Sign Up</small></a>
                        </form>
                        <p class="margin-t text-whitesmoke"><small> Your Name &copy; 2018</small> </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>