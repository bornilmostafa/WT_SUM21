<?php
	include 'Controllers/StudentControl.php';
	$teachers=getAllStudents();
	//print_r($teachers);
?>
<html>
	<body>
                         <h1 align="middle" > STUDENT MONTLY AND YEARLY INFORMATION </h1>



		<table>
        <form method="POST">
			<tr>
				<td>
					<select name="Student_enroll_month" id="student_enrollment_month" >
							<option disabled selected>Month</option>
								<?php 
									foreach($array as $m){
										if($m == $student_enrollment_month) 
											echo "<option selected>$m</option>"; 
										else  
											echo "<option>$m</option>";}
								?>
							</select>
				</td>
				<td>
					<select name="Student_enroll_year" id="student_enrollment_year" >
							<option disabled selected>Year</option>
								<?php 
									  for($j=1920; $j<=2010; $j++)
									  {
										if($j == $student_enrollment_year) 
											echo "<option selected>$j</option>"; 
										else  
											echo "<option>$j</option>";}
								?>
							</select>
				</td>
				<td>
					<?php echo $error_student_enrollment_month_year;?>
				</td>
			</tr>
			<tr>
					<td align="center" colspan="2">
						<input type="Submit" name="student_enroll" value="Insert">
                        <a href="#"><input type="Submit" value="Reset"></a>
					</td>
			</tr>
            </form>
		</table>
	</body>
</html>