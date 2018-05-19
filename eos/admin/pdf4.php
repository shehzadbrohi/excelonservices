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
$pdf ->Cell(10,10," Company Services" ,0,1);

$pdf ->Setfont("arial","",8);
$pdf ->Cell(40,10,"Company Name",1,0,'C');
$pdf ->Cell(20,10,"Service Name",1,0,'C');
$pdf ->Cell(35,10,"Employee Name",1,0,'C');
$pdf ->ln();

  
                                      $det=$obj->viewclientservices();
                                      foreach ($det as $m) {
                                        # code...
                                   }
			$pdf ->Cell(40,7,$m['c_name'],1,0,'C');
			$pdf ->Cell(20,7,$m['s_name'],1,0,'C');
			$pdf ->Cell(35,7,$m['e_name'],1,0,'C');
			$pdf ->ln();

 
                                        
$pdf->Output();
?>