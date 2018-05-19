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

$pdf ->Setfont("arial","",20);
$pdf ->Cell(10,10,"Service Details Report",0,1);

$pdf ->Setfont("arial","",8);
$pdf ->Cell(30,10,"Name",1,0,'C');
$pdf ->Cell(20,10,"Phone",1,0,'C');
$pdf ->Cell(40,10,"Email",1,0,'C');
$pdf ->Cell(20,10,"Service",1,0,'C');
$pdf ->Cell(17,10,"Employee",1,0);
$pdf ->Cell(35,10,"Company",1,0,'C');
$pdf ->ln();

                      $det=$obj->getdetails();
                  
  foreach ($det as $mm) {
    # code...
            
$mmm=$mm['dcid'];
  $sm = mysqli_query($obj->con(), "SELECT * from tblcompany where c_id = $mmm");

                foreach ($sm as $k) {
  
$du=$mm['duname'];

  $smg = mysqli_query($obj->con(), "SELECT * from tblemployee where e_id = $du");
  
                foreach ($smg as $kl) {
  

  }                # code...
                }
			$pdf ->Cell(30,7,$mm['name'],1,0,'C');
			$pdf ->Cell(20,7,$mm['phone'],1,0,'C');
			$pdf ->Cell(40,7,$mm['email'],1,0,'C');
			$pdf ->Cell(20,7,$mm['service'],1,0,'C');
			$pdf ->Cell(17,7,$kl['e_name'],1,0,'C');
			$pdf ->Cell(35,7,$k['c_name'],1,0,'C');
			$pdf ->ln();

 
                                        }
$pdf->Output();
?>