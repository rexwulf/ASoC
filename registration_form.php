<!-- // PHP STARTS AT 174 -->


<script>

function email_validation(str){ var email =  str;

	if (email.indexOf('@')>-1&&email.indexOf('.')>-1) {
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("emaill").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "email_appropriate.php" , true);
        xmlhttp.send();
	}else{
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("emaill").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "email_not_appropriate.php" , true);
        xmlhttp.send();

	}

}

var pass;
function passwordsave(str){
    pass=str;

   var length_of_password = pass.length;
	if( length_of_password>=8 && length_of_password<=32){ 
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("passwordsave").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "password_appropriate.php" , true);
        xmlhttp.send();
    } else
    
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("passwordsave").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "password_not_appropriate.php?q=", true);
        xmlhttp.send();
    } 

return pass;
}

//password match check
function matchOrNot(str) { var password_repeat=str;

    var password =pass;
        if (password!=password_repeat) { 
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "passwordsmismatch.php" , true);
        xmlhttp.send();
    } else
    
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "passwordsmatch.php?q=", true);
        xmlhttp.send();
    }
}
//string length check for firstname
function strlencheck_firstname(str){ var firstname=str;
	var length_of_firstname = firstname.length;
	if( length_of_firstname>=3 && length_of_firstname<=64){ 
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("firstname").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "firstname_appropriate.php" , true);
        xmlhttp.send();
    } else
    
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("firstname").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "firstname_not_appropriate.php?q=", true);
        xmlhttp.send();
    }


}
//string length check for lastname
function strlencheck_lastname(str){ var lastname=str;
	var length_of_lastname = lastname.length;
	if( length_of_lastname>=3 && length_of_lastname<=64){ 
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("lastname").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "lastname_appropriate.php" , true);
        xmlhttp.send();
    } else
    
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("lastname").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "lastname_not_appropriate.php?q=", true);
        xmlhttp.send();
    }


}
//string length check for username
function strlencheck_username(str){ var username=str;
	var length_of_username = username.length;
	if( length_of_username>=3 && length_of_username<=64){ 
         var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("username").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "username_appropriate.php" , true);
        xmlhttp.send();
    } else
    
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("username").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "username_not_appropriate.php?q=", true);
        xmlhttp.send();
    }


}



</script>


<!--/* AJAX ENDS */-->


<!-- // PHP STARTS -->

<?php
if(isset($_POST['admission_number']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone_number'])){
    
    if(!empty($_POST['admission_number']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_again']) && !empty($_POST['firstname']) && !empty($_POST['lastname']))
    	
    	    {
    	$admission_number=$_POST['admission_number'];
    	$email=$_POST['email'];
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	$password_again=$_POST['password_again'];
    	$firstname=$_POST['firstname'];
    	$lastname=$_POST['lastname'];
    	$phone_number=$_POST['phone_number'];


    } 
    else {

      echo 'Fill in all the fields' ;
    }
 }
?>
<html>
    <style>
    body{ position: relative;        } 
        .left{width:200px;  overflow-y:auto; height: 500px;  color: white; display: block;
            line-height: 45px;
        }
        .right{ width: 300px; height: 300px;  }

        .open{color: #4CAF50;

        }
        .right{ width: 400px;
            align-content: right;
        }
        a:link{
           color: white;
       }
       a:hover{
           color: white; 
       }
	   a:visited{
		   color: white;
	   }
       a:active{
           color: green;
       }
	   #n1:hover{ 
background-color:black;
}
a:hover{ display: block; height: 30px;
    background-color:#4CAF50;
}
         button{ width:150px; height:40px; border-radius: 8px; color:white; background-color:black; border: 2px solid black;}
  
  button:hover{ width:190px; color:black; background-color:transparent;   font-size: 110%;}
    
 button:active{ width:190px; color:white; background-color:transparent;   font-size: 110%; transform:translateY(4px); transition-delay: 0.4s;}

.form-control {
	width:500px;
	height:40px;
}
#nav-events:hover{
	display: block; height: 30px;
    background-color:black;
}
 }


    </style>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
<link rel="stylesheet" type="text/css" href="bootstrap.css" >

    <title>ISM-ONLINE</title>
    </head>
    <body id="t1"
          >
    <div class="container-fluid" style="color:white; background-color:#4CAF50">
        <div class="col-sm-4" ><a href="main.html"><img  src="coollogo_com-5156926.png" attr="logo" alt="ISM-ONLINE" width="300px" height="80px"   ></a></div>
    <div class="col-sm-5"></div>
        <div class="col-sm-3" style="text-align:center; padding-top:16px; font-size:130%;" ><button type="button" href=" registration_form.php">LOGIN/SIGNUP</button></div>
    </div>
 
    
       






        <div class="container-fluid">
        <div class="row">
        <div class="col-sm-2" id="n1"  style="background-color:#4CAF50;  height:50px; text-align:center; margin:auto; padding-top:15px; color:white;  color: inherit;">
        <a href="main.html">HOME</a></div>
            
            <div class="col-sm-2" href=".com/events"style="background-color:#4CAF50;  height:50px; text-align:center; margin:auto; padding-top:15px; color:white;"><a href="events.html">EVENTS</a></div>
            
            <div class="col-sm-2" href=".com/buy" style="background-color:#4CAF50;  height:50px; text-align:center; margin:auto; padding-top:15px; color:white;"><a href="buysell.html">BUY/SELL</a></div>
            
               <div class="col-sm-2" href=".com/chat" style="background-color:#4CAF50;  height:50px; text-align:center; margin:auto; padding-top:15px; color:white;"><a href="chat.html">CHATROOM</a></div>
            
               <div class="col-sm-2" href="ma" style="background-color:#4CAF50;  height:50px; text-align:center; margin:auto; padding-top:15px; color:white;"><a href="mail1.html">MAIL</a></div>
            
                  <div class="col-sm-2" href=".com/lectures" style="background-color:#4CAF50;  height:50px; text-align:center; margin:auto; padding-top:15px; color:white;"><a href="lecture.html">LECTURES</a></div>
                     
            </div>
            
        </div>









<br/><h1 align="left" style=" padding-left:206px ; font-style:strong ">LOG IN </h1>
 <br>
<div align="left" style="padding-left:206px ; ">
   <form role="form" action="<?php echo $script_name; ?>" method="POST">
    <div class="form-group">
     
      <input type="text" class="form-control" id="email" placeholder="USERNAME" style=" width:500px;height:40px;" >
    </div>
      

    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="PASSWORD" style=" width:500px;height:40px;">
        </form>
		    <div class="checkbox">
      <label><input type="checkbox" >Remember me</label>
    </div>
    <span style="padding-right:440px;"><button type="submit" class="btn btn-default" style="height:30px;width:80px;margin:auto;">Log In</button></span>
        </div>
</div>



<div class="container" style="border-top:5px solid #4CAF50;">
<h1 align="left" style=" padding-left:100px ; font-style:strong ">SIGN UP  </h1>
 <br>
<div align="left" style="padding-left:100px ;">
 
  <form role="form" action="registration_form.php" method="POST">
    <div class="form-group">
     
      <input type="text" name="username" class="form-control" placeholder="USERNAME" style=" width:500px;height:40px;" onkeyup="strlencheck_username(this.value)" value="<?php if(isset($username)) {echo $username;} ?>"><span id="username"></span>
    </div>
    <div class="form-group">
     
      <input type="text" name="admission_number" class="form-control" placeholder="ADMISSION NUMBER" style=" width:500px;height:40px;" value="<?php if(isset($admission_number)){echo $admission_number;} ?>">
    </div>
    <div class="form-group">
      
      <input type="text" name="email" onkeyup="email_validation(this.value)" style=" width:500px;height:40px;" placeholder="E-MAIL" class="form-control" value="<?php if(isset($email)){echo $email;} ?>"><span id="emaill"></span>
    </div>
    <div class="form-group">
      
      <input type="password"  name="password" class="form-control" onkeyup="passwordsave(this.value)" placeholder="PASSWORD" style=" width:500px;height:40px;"><span id="passwordsave"></span>
    </div>
    <div class="form-group">
      
      <input type="password" onkeyup="matchOrNot(this.value)" name="password_again" class="form-control" placeholder="RE ENTER YOUR PASSWORD" style=" width:500px;height:40px;"><span id="txtHint"></span>
    </div>
    <div class="form-group">
     
      <input type="text" class="form-control" name="firstname" onkeyup="strlencheck_firstname(this.value)" value="<?php if(isset($firstname)){echo $firstname;}?>" placeholder="FIRST NAME" style=" width:500px;height:40px;"><span id="firstname"></span>
    </div>
    <div class="form-group">
     
      <input type="text" class="form-control" name="lastname" onkeyup="strlencheck_lastname(this.value)"  value="<?php if(isset($lastname)) {echo $lastname;}?>" placeholder="LAST NAME" style=" width:500px;height:40px;"><span id="lastname"></span>
    </div>
    <div class="form-group">
     
      <input type="number" class="form-control" name="phone_number" value="<?php if(isset($phone_number)) {echo $phone_number;} ?>" placeholder="PHONE NUMBER (OPTIONAL)" style=" width:500px;height:40px;">
    </div>
    <span style="padding-right:440px;"><input type="submit" class="btn btn-default" style="height:30px;width:80px;margin:auto;" value="Register!"></input></span>
  </form>
</div>
</div>

        </body>
   <br>

   
    
    
</html>