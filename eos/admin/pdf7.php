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
$pdf ->Cell(10,10,"All Employees" ,0,1);

$pdf ->Setfont("arial","",8);
$pdf ->Cell(30,10,"Id",1,0,'C');
$pdf ->Cell(30,10,"First Name",1,0,'C');
$pdf ->Cell(30,10,"Last Name",1,0,'C');
$pdf ->Cell(30,10,"Contact",1,0,'C');
$pdf ->Cell(30,10,"Department",1,0,'C');
$pdf ->Cell(20,10,"Designation",1,0,'C');
$pdf ->Cell(20,10,"Services",1,0,'C');

$pdf ->ln();

                                      $em=$obj->showem();
                                      foreach($em as $i) {
                                        # code...


			$pdf ->Cell(30,7,$i['e_id'],1,0,'C');
			$pdf ->Cell(30,7,$i['e_name'],1,0,'C');
			$pdf ->Cell(30,7,$i['e_fname'],1,0,'C');
			$pdf ->Cell(30,7,$i['e_contact'],1,0,'C');
			$pdf ->Cell(30,7,$i['e_department'],1,0,'C');
			$pdf ->Cell(20,7,$i['e_designation'],1,0,'C');
			$pdf ->Cell(20,7,$i['e_services'],1,0,'C');
			$pdf ->ln();
}
 
$pdf->Output();
?>