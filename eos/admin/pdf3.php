<?php

session_start();
include 'myclasses/myclasses.php';
$obj= new eos();
$obj->log();
$obj->con();
 require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf ->Addpage();
$pdf ->Setfont("arial","B",20);
$pdf ->Cell(190,10,"Excel On Service",0,1,'C');
$r=ucfirst($_SESSION['cuser']);
$pdf ->Setfont("arial","",20);
$pdf ->Cell(10,10," SERVICES BY $r" ,0,1);

$pdf ->Setfont("arial","",8);
$pdf ->Cell(30,10,"Name",1,0,'C');
$pdf ->Cell(20,10,"Phone",1,0,'C');
$pdf ->Cell(40,10,"Email",1,0,'C');
$pdf ->Cell(20,10,"Service",1,0,'C');
$pdf ->Cell(35,10,"Company",1,0,'C');
$pdf ->ln();

   $uid = $_SESSION['uid'];
            
  $sii = mysqli_query($obj->con(), "SELECT * from tbl_details where duname = $uid");
  foreach ($sii as $mm) {
    # code...
  
$mmm=$mm['dcid'];
  $sm = mysqli_query($obj->con(), "SELECT * from tblcompany where c_id = $mmm");

                foreach ($sm as $k) {
                  # code...
                }

			$pdf ->Cell(30,7,$mm['name'],1,0,'C');
			$pdf ->Cell(20,7,$mm['phone'],1,0,'C');
			$pdf ->Cell(40,7,$mm['email'],1,0,'C');
			$pdf ->Cell(20,7,$mm['service'],1,0,'C');
			$pdf ->Cell(35,7,$k['c_name'],1,0,'C');
			$pdf ->ln();

 
                                        }
$pdf->Output();
?>