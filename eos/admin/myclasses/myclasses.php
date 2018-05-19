<?php


//main class

class eos{
//connection class

function con()
{

$con=mysqli_connect("localhost","root","","eos") or die("<h1>No database found</h1>");
return $con;
}
function login($a,$b){
		
		$q = mysqli_query($this->con(),"select * from users where u_name = '$a' and u_pass = '$b' ");
		
		$n = mysqli_num_rows($q);//num of rows effected
		
		if($n > 0){
			

			while($r = mysqli_fetch_array($q)){
			$_SESSION['uid'] = $r['u_id'];	
            $_SESSION['u_type'] = $r['u_type'];
            	}
			$_SESSION['cuser'] = $a;

			echo "<script>window.location.assign('dashboard.php');</script>";
		}
		else{
			echo "<script>alert('Invalid login');</script>";
		}
	}//logins


function log(){
			if(!isset($_SESSION['cuser'])){
				echo "<script>window.location.assign('index.php');</script>";
				}
	}//log
	
		
	function addco($cname){

$q=mysqli_query($this->con(),"insert into tblcompany(c_name,cstatus) values('$cname',1)");

			echo "<h4>Your data is inserted</h4>";


}// add company
	
	function showco(){

$q=mysqli_query($this->con(),"select * from tblcompany");
return $q;

}// show company


	function showem(){

$q=mysqli_query($this->con(),"SELECT * FROM `tblemployee");
return $q;

}// show employees

	function showu()
	{
$q=mysqli_query($this->con(),"select * from users");
return $q;
	}
	function showuu($a){
$q=mysqli_query($this->con(),"select * from users where e_id = $a");
return $q;

	}


	function showpro(){
$q=mysqli_query($this->con(),"select * from tblpro");
return $q;

	}

function inemp($na,$fn,$cn,$de,$des,$ser)
{
	$i=mysqli_query($this->con(),"INSERT INTO tblemployee(e_name,e_fname,e_contact,e_department,e_designation,e_services) VALUES ('$na', '$fn', '$cn', '$de', '$des', '$ser');");
echo "<h4>Your Data is Inserted</h4>";
}

function inpro($na,$de,$pr,$c,$emp)
{

  mysqli_query($this->con(),"insert into tblpro (p_name,p_desc,p_price,c_name,e_id) values('$na','$de',$pr,'$c',$emp)");

echo "<h4>Your Data is Inserted</h4>";
}	

	
	function addImg($a,$b){
		mysqli_query($this->con(),"
		UPDATE `tblemployee` SET `e_img` = '$a' WHERE `tblemployee`.`e_id` = $b;
		 ") or die("some masla");
					echo "<script>window.location.assign('viewemployee.php');</script>";

	}
	function editpro($name,$des,$price,$cname,$eid,$pid){


		mysqli_query($this->con(),"
		UPDATE `tblpro` SET `p_name` = '$name',`p_desc` = '$des',`p_price` = $price,`c_name` = '$cname',`e_id` = $eid WHERE `tblpro`.`p_id` = $pid ") or die("some masla");
		echo "<script>window.location.assign('viewpro.php');</script>";


	}
function addImgp($a,$b){
		mysqli_query($this->con(),"
		UPDATE `tblpro` SET `p_image` = '$a' WHERE `tblpro`.`p_id` = $b;
		 ") or die("Kuch issue chal rha ha ");
					echo "<script>window.location.assign('viewpro.php');</script>";

	}


		function getCo(){
			$q = mysqli_query($this->con(), "select * from tblcompany");
			return $q;
		}// get all company

		function getser(){
			$q = mysqli_query($this->con(), "select * from services");
			return $q;
		}// get all Services


		function getdetails(){
			$q = mysqli_query($this->con(), "select * from tbl_details");
			return $q;
		}// get all Services

		function getdep(){
			$q = mysqli_query($this->con(),"SELECT * FROM `tbldepartment`");
			return $q;
		}// get all Services

		function details($name,$phone,$email,$service,$dname,$rcid){
			$q = mysqli_query($this->con(),"INSERT INTO tbl_details(name,phone,email,service,duname,dcid) VALUES('$name','$phone','$email','$service', $dname, $rcid)");
			echo "<h4>Your Details are inserted</h4>";

		}// insert details
		function payment($datead,$tamount,$psuggested,$ptype,$vaupto,$cid,$stat){
			$q = mysqli_query($this->con(),"INSERT INTO payment(dateadded,totalamount,paymentdatesuggested,paymenttype,validtill,serviceclient_id,paymentstatus) VALUES('$datead',$tamount,'$psuggested','$ptype','$vaupto',$cid,$stat)");
			echo "<h4>Your Details are inserted</h4>";

		}// insert payment

		function addclser($clientid,$sid,$empid){
			$q = mysqli_query($this->con(),"INSERT INTO clientservices(c_id,s_id,e_id) VALUES($clientid,$sid,$empid)");
			echo "<h4>Your Details are inserted</h4>";

		}// insert CLIENT SERVICES

function viewclientservices(){


			$q = mysqli_query($this->con(),"SELECT * FROM `clientser`");
			return $q;


}//view services of clients

function viewpaymentreport(){


			$q = mysqli_query($this->con(),"SELECT * FROM `paymentreport`");
			return $q;


}//view payments of services

		function user($fname,$lname,$email,$uname,$upass,$utype,$id){
			$q = mysqli_query($this->con(),"INSERT INTO users (f_name,l_name,email,u_name,u_pass,u_type,e_id,u_status) VALUES('$fname','$lname','$email','$uname','$upass',$utype,$id,'1')");
			echo "<h4>Your Details are inserted</h4>";

		}// insert user

}


?>