		<?php 
			$login = $_REQUEST["login"];
			$password = $_REQUEST["password"];

		?>
		<?php 
			require_once 'mysqlConnexion.php';
			
			function isStudent($id,$pass2)
			{
				$request2 = "select student_id, password, activate, name from student where registration_number = '$id' ;";
				$result = $sql->query($request2);
				$num_row = $result->num_rows;
					
				if($num_row == 0) {
					return 0;
				}
				else
				{
					$row = $result->fetch_assoc();
					$pass = $row["password"];
					$name = $row["name"];
					$active = $row["activate"];
					$student_id = $row["student_id"];
					
					if(strcmp($pass2, $pass) != 0)
					{
						return 0;
					}
					else if (!$active) {
						return 2;
					}
					else
					{
						session_start();
						$_SESSION['reg'] = $id;
						$_SESSION['name'] = $name;
						$_SESSION['group'] = 'student';
						$_SESSION['user_id'] = $student_id;
						return 1;
					}
					
				}
				
				
			}
			
			function isLecturer($id,$pass2)
			{
				$request2 = "select password, name from lecturer where email = '$id' ;";
				$result = $sql->query($request2);
				$num_row = $result->num_rows;
					
				if($num_row == 0) {
					return 0;
				}
				else
				{
					$row = $result->fetch_assoc();
					$pass = $row["password"];
					$name = $row["name"];
					
					if(strcmp($pass2, $pass) != 0)
					{
						return 0;
					}
					else
					{
						session_start();
						$_SESSION['reg'] = $id;
						$_SESSION['name'] = $name;
						$_SESSION['group'] = 'lecturer';
						return 1;
					}
					
				}
				
			}
			
			function isAdmin($id,$pass2)
			{
				$request2 = "select password, name from administrator where email = '$id' ;";
				$result = $sql->query($request2);
				$num_row = $result->num_rows;
					
				if($num_row == 0) {
					return 0;
				}
				else
				{
					$row = $result->fetch_assoc();
					$pass = $row["password"];
					$name = $row["name"];
					
					if(strcmp($pass2, $pass) != 0)
					{
						return 0;
					}
					else
					{
						session_start();
						$_SESSION['reg'] = $id;
						$_SESSION['name'] = $name;
						$_SESSION['group'] = 'admin';
						return 1;
					}
					
				}
	
			}
			
			if(isStudent($login,$password) == 1)
				echo 'Home';
			else if(isLecturer($login,$password) == 1)
				echo 'Lecturer';
			else if(isAdmin($login,$password) == 1)
				echo 'Admin';
			else if(isStudent($login,$password) == 2)
				echo 'blocked';
			else
				echo 'failed';
				
			mysql_close($sql);
		?>