<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css"/>
    <title>Document</title>

</head>
<body>

    <section class="fview">
        <div class="signup">
            <button onclick="document.getElementById('id02').style.display='block'" class="register">Register</button>     
            <button onclick="document.getElementById('id01').style.display='block'" class="login">Login</button>
        </div>
                
        <div class="container3">
            <input class="orderin" type="search" placeholder="location" name="location">
            <a href="./Frontend/User/pageTemplates/menu.php" class="orderbtn">order food</a>
        </div>

        <div id="id01" class="modal">
            <form class="modal-content animate" method="post" action="login.php">
                <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
                    <img src="./images/login.png" alt="" class="avatar">
                </div>

                <div class="container">
                    <label for="usernamename"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>



        <div id="id02" class="modal">
            
            <form class="modal-content animate" method="post" action="register.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span> 
                    <img src="http://localhost/zwiggy/images/login.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">

                    <label for="addinguid"><b>Add user_id</b></label>
                    <input type="text" placeholder="Enter user_id(mail_id)" name="adduserid" required>

                    <label for="addingusernamename"><b>Add Username</b></label>
                    <input type="text" placeholder="Enter Username" name="adduname" required>

                    <label for="psw"><b>create Password</b></label>
                    <input type="password" placeholder="create Password" name="addpassword" required>

                    <label for="addingadd1"><b>Address_1</b></label>
                    <input type="text" placeholder="Enter address_1" name="add_add1" required>

                    <label for="addingadd2"><b>Address_2</b></label>
                    <input type="text" placeholder="Enter address_2" name="add_add2" required>

                    <label for="addingpc"><b>Postal Code</b></label>
                    <input type="text" placeholder="Enter postalcode" name="addpc" required>

                    <label for="addingphn"><b>Add phone number</b></label>
                    <input type="text" placeholder="Enter Phonenumber" name="addphn" required>

                    <label for="addingacc"><b>Account Number</b></label>
                    <input type="text" placeholder="Enter Bank Accno" name="add_acc" required>

                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </section>

    <div class="container1">

        <div class="container2">
            <a href="#"><img src="http://localhost/zwiggy/images/fast.png" alt="fast" class="image2"></a>
        </div>
        <div class="container2">
            <a href="#"><img src="http://localhost/zwiggy/images/order.png" alt="fast" class="image2"></a>
        </div>
        <div class="container2">
            <a href="#"><img src="http://localhost/zwiggy/images/reservation.png" alt="fast" class="image2"></a>
        </div>
        
    </div>

      



  <script>
  // Get the modal
  // var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  // window.onclick = function(event) {
  //     if (event.target == modal) {
  //         modal.style.display = "none";
  //     }
  // }

  // Get the modal
  // var modal = document.getElementById('id02');

  // When the user clicks anywhere outside of the modal, close it
  // window.onclick = function(event) {
  //     if (event.target == modal) {
  //         modal.style.display = "none";
  //     }
  // }
  </script>
            
</body>
</html>
