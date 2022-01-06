<?php

if(!isset($_SESSION)){
    	session_start();
	}

	//$id_user = $_SESSION['appmluser'];

	if(isset ($_SESSION['appmluser'])) {
    	header('Location: inicial.htm');
	}
?>
<?php


 include('data/db.php');						//Seleciona banco de dados
  if (isset($_POST) &&(!empty($_POST))){
  $login=$_POST['login'];	//Pegando dados passados por AJAX
  $senha=$_POST['senha'];
  
  //Consulta no banco de dados
  $sql="SELECT * FROM users where email='".$login."' and password='".$senha."'"; 
  $resultados = mysqli_query($conn,$sql)or die (mysqli_error());
  //$res=mysqli_fetch_array($resultados); //
  $row = $resultados -> fetch_array(MYSQLI_ASSOC);
  
	if (@mysqli_num_rows($resultados) == 0){
		//echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
		echo "<h5>Não autorizado, senha ou email errados</h5>";
	}
	
	else{
	    	
		session_start();
	    //$_SESSION['usuarioID']=$row['id']; 		
		
$_SESSION["appmluser"]=$row['email'];
$_SESSION["appmlaccess"]='admin';


echo "<script> sessionStorage.setItem('appmlaccess', ". $_SESSION['appmlaccess']." </script>";



	 header('Location: inicial.htm');
		echo 1;	//Responde sucesso
				//Inicia seção
		//Abrindo seções
		
		exit;	
	}
	
	
	
	
	
	
	
	
	
	
	
  }
?>
<link rel="stylesheet" href="css/w3.css">
<link href="font/css/font-awesome.css" rel="stylesheet">
  <script src="data/appml.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
  background: url(xxx.jpg) 50% 0;
}
form {border: 0px solid #f1f1f1; }
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
.icon2 {
  padding: 10px;
  background: red;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.refresh {
  width: auto;
  padding: 10px 18px;
  background-color: green;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
.responsive {
  width: 100%;
  height: auto;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: blue;
  opacity: 0.8;
}
.center {
  left: 53%;
  background-color: black;
  opacity: 0.5;
 
}
.right {
  right: 0;
  background-color: green;
  opacity: 0.5;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
}

.centered img {
  width: 100px;
  border-radius: 50%;
}
</style>
</head>
<body  onselectstart="return false" oncontextmenu="return false">

<div class="split left">
  <div class="centered">
     <h2><span></h2>
   
   <!-- Modal Content -->

  <form id="formlogin"  action="" method="post">
    <div class="imgcontainer">
     
      <span id="vindo">Login</span
       <img src="" style="width: 15%;" >
    </div>
<span id="myBtn"> <i class="fa fa-question-circle" aria-hidden="true"></i> O que é</span>
    <div class="margin-bottom">
      
      <span id="botao"></span>
    
      
      <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="email" id="login" placeholder="login" name="login" required>
  </div>
  
  <div class="input-container" ">
    <i class="fa fa-lock icon2" onclick="versenha(this)"></i>
    <input class="input-field" type="password" id="senha" placeholder="Password" name="senha" required>
  </div>

  <button type="submit" class="btn">Login</button>
    </div>

    
  </form>


<script>
    
    function versenha(y) {
y.classList.toggle("fa-unlock-alt");
  var x = document.getElementById("senha");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 
</div>


<div class="split right">
  <div class="centered">
    <h2><span>Super SIS</h2>
   <p>xxxxxx</p>
 <p>yyyyyyyy</p>
  </div>
</div>
     

 
</body>




<!-- The Modal onload="document.getElementById('id01').style.display='block'"-->
<div id="id01" >
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal"></span>

 
