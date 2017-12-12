		<?php 
			$reg = $_REQUEST["reg_num"];
			$name = $_REQUEST["name"];
			$surname = $_REQUEST["surname"];
			$mail = $_REQUEST["email_address"];
			$password = $_REQUEST["passwrd"];
			$phone = $_REQUEST["phone"];
			$address = $_REQUEST["address"];
			$field = parseInt($_REQUEST["field"]);
			$level = parseInt($_REQUEST["level"]);
			$course = parseInt($_REQUEST["course"]);
			$level_id = 2*($field-1) + $level;

		?>
		<?php 
			require_once 'mysqlConnexion.php';
			
			function isAlReg($id)
			{
				$request2 = "select name from lecturer where email = '$id' ;";
				$result = $sql->query($request2);
				$num_row = $result->num_rows;
					
				if($num_row == 0) {
					return 0;
				}
				else
				{
					return 1;
				}
				
			}
			
			function addStudent($tmpReg, $tmpName, $tmpSurname, $tmpMail, $tmpPass, $tmpPhone, $tmpAddress, $tmpLevel, $tmpCourse)
			{
				if(!isAlReg($tmpMail)) {
					$request2 = "insert into student(registration_number,name,surname,email,password,phone,address,level,course) ".
								"values('$tmpReg','$tmpName','$tmpSurname','$tmpMail','$tmpPass',$tmpPhone,'$tmpAddress',$tmpLevel,$tmpCourse);";
					$sql->query($request2);	
					return 1;
				}
				else
					return 0;
				
			}
			
			if(addStudent($reg,$name,$surname,$mail,$password,$phone,$address,$level_id,$course) == 1 )
				echo 'succeed';
			else
				echo 'repeated';
				
			mysql_close($sql);
		?>