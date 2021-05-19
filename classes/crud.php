<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return "No found records";
		}
	}



	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

	public function displayAllBookWithOrder($faculty_id,$department_id,$orderValue,$orderType)
	{
		$query = "SELECT * FROM book WHERE faculty_id={$faculty_id} and department_id={$department_id} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

		public function displayAllWithOrderAndId($table,$orderValue,$orderType,$id)
	{
		$query = "SELECT * FROM {$table} WHERE sender_id={$id} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

			public function displayAllWithOrderAndId2($table,$orderValue,$orderType,$id)
	{
		$query = "SELECT * FROM {$table} WHERE faculty_id={$id} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return "No found records";
		}
	}




	//Display Specific
	public function displayName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}


				public function displayStudentName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM student where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}



			public function displayProfile($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return "No found records";
		}
	}


		public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return "No found records";
		}
	}


		public function displayOneStudent($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where matno='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return "No found records";
		}
	}



	
//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM {$table}");
		if ($q) {
		    return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}


		public function countAllWithId($table,$item,$value)
	{
		$q=$this->con->query("SELECT id FROM {$table} WHERE $item='$value'");
		if ($q) {
		    return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}

	
// Compare

		public function compareF1($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;
		$c6 = isset($_POST['c6']) ? 1: 0;
		$c7 = isset($_POST['c7']) ? 1: 0;
		$c8 = isset($_POST['c8']) ? 1: 0;
		$c9 = isset($_POST['c9']) ? 1: 0;
		$c10 =isset($_POST['c10']) ? 1: 0;

		$query = "SELECT * from f1 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' and c6='$c6' and c7='$c7' and c8='$c8' and c9='$c9' and c10='$c10' ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f1')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




		public function compareF2($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;
		$c6 = isset($_POST['c6']) ? 1: 0;
		$c7 = isset($_POST['c7']) ? 1: 0;
		$c8 = isset($_POST['c8']) ? 1: 0;

		$query = "SELECT * from f2 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' and c6='$c6' and c7='$c7' and c8='$c8' ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f2')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




		public function compareF3($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;
		$c6 = isset($_POST['c6']) ? 1: 0;
		$c7 = isset($_POST['c7']) ? 1: 0;
		$c8 = isset($_POST['c8']) ? 1: 0;

		$query = "SELECT * from f3 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' and c6='$c6' and c7='$c7' and c8='$c8' ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f3')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




		public function compareF4($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;
		$c6 = isset($_POST['c6']) ? 1: 0;

		$query = "SELECT * from f4 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' and c6='$c6' ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f4')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




		public function compareF5($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;
		$c6 = isset($_POST['c6']) ? 1: 0;
		$c7 = isset($_POST['c7']) ? 1: 0;
		$c8 = isset($_POST['c8']) ? 1: 0;

		$query = "SELECT * from f5 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' and c6='$c6' and c7='$c7' and c8='$c8' ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f5')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



		public function compareF6($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;
		$c6 = isset($_POST['c6']) ? 1: 0;
		$c7 = isset($_POST['c7']) ? 1: 0;

		$query = "SELECT * from f6 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' and c6='$c6' and c7='$c7'  ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f6')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



		public function compareF7($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;
		$c6 = isset($_POST['c6']) ? 1: 0;

		$query = "SELECT * from f7 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' and c6='$c6' ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f7')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



		public function compareF8($post,$matno)
	{
		$c1 = isset($_POST['c1']) ? 1: 0;
		$c2 = isset($_POST['c2']) ? 1: 0;
		$c3 = isset($_POST['c3']) ? 1: 0;
		$c4 = isset($_POST['c4']) ? 1: 0;
		$c5 = isset($_POST['c5']) ? 1: 0;

		$query = "SELECT * from f8 where c1='$c1' and c2='$c2' and c3='$c3' and c4='$c4' and c5='$c5' ";
		$query2="INSERT into course_registration(matno,type) values('$matno','f8')";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$this->con->query($query2);
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



	 	public function checkReg($matno,$type)
	{
		
		$query = "SELECT * from course_registration where matno='$matno' and type='$type'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			return 1;
		}else{
			return 0;
		}
	}



	
// Inserting



	public function insertReview($post)
	{
		$sender_id=$this->cleanse($_POST['sender_id']);
		$message=$this->cleanse($_POST['message']);
		$query="INSERT into review(sender_id,message) values('$sender_id','$message')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-c.php?msg=Review  was sent successfully&type=success");
		}else{
			header("Location:view-c.php?msg=Error adding data try again!&type=error");
		}
	}


		public function insertStudent($post)
	{
		$name=$this->cleanse($_POST['name']);
		$matno=$this->cleanse(strtoupper($_POST['matno']));
		$password=$this->cleanse($_POST['password']);
		$query="INSERT into student(name,matno,password) values('$name','$matno','$password')";
		$query2="INSERT into login(name,email,password,role) values('$name','$matno','$password',3)";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-student.php?msg=Student was created successfully&type=success");
			$this->con->query($query2);
		}else{
			header("Location:view-student.php?msg=Error adding data try again!&type=error");
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM {$table} WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}


	
	public function updateAdmin($post)
	{
		$name=$this->cleanse($_POST['name']);
		$email=$this->cleanse($_POST['email']);
		$password=$this->cleanse($_POST['password']);
		$query="UPDATE login SET name='$name',email='$email',password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}


		public function updateStudent($post)
	{
		$email=$this->cleanse($_POST['email']);
		$password=$this->cleanse($_POST['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$query2="UPDATE student SET password='$password' WHERE matno='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
			$this->con->query($query2);
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}


	//Search
	public function displaySearch($value)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM product WHERE pid LIKE '%$Name%'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}


}

?>

