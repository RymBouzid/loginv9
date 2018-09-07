<?php 
	if(isset($_POST['pseudo'])){
		$log=$_POST['username'];
		$pass=$_POST['pass'];
		
		$dbhost = 'localhost';
		$dbuser = 'root';
		$mdp = '';
		$bdd='donneesjson';
       $conn =  mysqli_connect($dbhost, $dbuser, $mdp ,$bdd );
		$res=mysqli_query($conn,"SELECT * FROM utilisateurs  WHERE mail='$log' AND mdp='$pass'");
		if($l=mysqli_fetch_array($res)){
			
			session_start();
			$_SESSION['id']=$l[0];
			mysqli_close($conn);
			header("Location:App1/index.html");
		}else
		{
			echo "verifier log et mdp";
		}
		
		
	
	
	}

	

?>