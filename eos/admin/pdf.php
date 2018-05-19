<?php


 require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf ->Addpage();
$pdf ->Setfont("arial","B",20);
$pdf ->Cell(190,10,"excel on service",0,1,'C');

$pdf ->Setfont("arial","",20);
$pdf ->Cell(10,10,"Payment Details Reports",0,1);

$pdf ->Setfont("arial","",8);
$pdf ->Cell(20,10,"Client Name",1,0,'C');
$pdf ->Cell(20,10,"Service",1,0,'C');
$pdf ->Cell(25,10,"Employee name",1,0,'C');
$pdf ->Cell(20,10,"Date Added",1,0,'C');
$pdf ->Cell(17,10,"total amount",1,0);
$pdf ->Cell(35,10,"payment date suggested",1,0,'C');
$pdf ->Cell(20,10,"payment type",1,0,'C');
$pdf ->Cell(18,10,"valid till",1,0,'C');
$pdf ->Cell(15,10,"Status",1,0,'C');
$pdf ->ln();


$mysqli = new mysqli("localhost","root","","eos");
if($mysqli->connect_errno){
	echo"failed to connect to mysql:(".$mysqli->connect_errno.")".$mysqli->connect_errno;
	}


$query = $mysqli->query("select * from paymentreport");


        while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
			$pdf ->Cell(20,7,$row['c_name'],1,0,'C');
			$pdf ->Cell(20,7,$row['s_name'],1,0,'C');
			$pdf ->Cell(25,7,$row['e_name'],1,0,'C');
			$pdf ->Cell(20,7,$row['dateadded'],1,0,'C');
			$pdf ->Cell(17,7,$row['totalamount'],1,0,'C');
			$pdf ->Cell(35,7,$row['paymentdatesuggested'],1,0,'C');
			$pdf ->Cell(20,7,$row['paymenttype'],1,0,'C');
			$pdf ->Cell(18,7,$row['validtill'],1,0,'C');
$rb=$row['paymentstatus'];
if($rb==0){

			$pdf ->Cell(15,7,"Unpaid" ,1,0,'C');

}
else{
$pdf ->Cell(15,7,"Paid" ,1,0,'C');
}
$pdf ->ln();
 }			

$pdf->Output();

?>