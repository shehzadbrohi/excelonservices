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
$pdf ->Cell(10,10,"All Companies/Clients" ,0,1);

$pdf ->Setfont("arial","",8);
$pdf ->Cell(30,10,"Id",1,0,'C');
$pdf ->Cell(70,10,"Name",1,0,'C');

$pdf ->ln();

                                      $pro=$obj->showco();
                                      foreach($pro as $i) {
                                        # code...


			$pdf ->Cell(30,7,$i['c_id'],1,0,'C');
			$pdf ->Cell(70,7,$i['c_name'],1,0,'C');
			$pdf ->ln();
}
 
$pdf->Output();
?>