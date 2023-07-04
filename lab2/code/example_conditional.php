
<HTML XMLns="http://www.w3.org/1999/xHTML"> 
  <head> 
    <title>An example of using "Switch" in PHP</title> 
  </head> 
  <body>
  <H1>An example of using "Switch" in PHP</H1>

  <form>
	    Please select a weekday:	<select name="weekday" >
									<option value="Sunday">Sunday</option>
									<option value="Monday">Monday</option>
									<option value="Tuesday">Tuesday</option>
									<option value="Wednesday">Wednesday</option>
									<option value="Thursday">Thursday</option>
									<option value="Friday">Friday</option>
									<option value="Saturday">Saturday</option>
									</select> <br/>
		<br/>Select your role: <input type="radio" name="role" value="teacher">teacher &nbsp; <input type="radio" name="role" value="student">student <br/>
		<br/> 
		<input type="submit" value="Submit" />
  </form>
  
  <p> Your agenda is shown as below.</p>
  </body> 

<?php 

	/*
	if(isset($_GET['weekday']) && isset($_GET['role']) )
	{
		$weekday = $_GET['weekday'];
		$role =$_GET['role'];
		echo "As a $role, on $weekday, your agenda is: &nbsp;";

		switch($role){
			case 'student':
				switch($weekday)
				{
					case 'Monday': echo 'HIT3324 Lecture & Lab'; break;
					case 'Wednesday': echo 'HIT3324 Lab'; break;
					default: echo 'Study harder';
				}
				break;
			
				case 'teacher':
				switch($weekday)
				{
					case 'Monday': echo 'HIT3324 Lecture & Lab1'; break;
					case 'Wednesday': echo 'HIT3324 Lab'; break;
					case 'Friday': echo 'Research'; break;
					case 'Tuesday': 				
					case 'Thursday':
					case 'Saturday':
					case 'Sunday': echo 'Have a rest'; break;
					default: echo 'Have a rest';
				}
				break;
		}
	}
		*/

	if(isset($_GET['weekday']) && isset($_GET['role']) ){
		$weekday = $_GET['weekday'];
		$role =$_GET['role'];

		echo "As a $role, on $weekday, your agenda is: &nbsp;";

		if($role == 'student'){
			if($weekday == 'Monday'){
				echo 'HIT3324 Lecture & Lab';
			}
			else if($weekday == 'Wednesday'){
				echo 'HIT3324 Lab';
			}
			else{
				echo 'Study harder';
			}
		}
		else if($role == 'teacher'){
			if($weekday == 'Monday'){
				echo 'HIT3324 Lecture & Lab1';
			}
			else if($weekday == 'Wednesday'){
				echo 'HIT3324 Lab';
			}
			else if($weekday == 'Friday'){
				echo 'Research';
			}
			else{
				echo 'Have a rest';
			}
		}
		else{
			echo 'Please select your role';
		}
	}
	


?>

</HTML>