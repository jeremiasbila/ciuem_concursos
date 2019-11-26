<?php

  require('fpdf/fpdf.php');
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'concursos');
 // mysqli_select_db($con,'fornecedor');
  /// A4 width : 219mm
  ///default margin : 10mm each side 
  // writable :219 -(10*2)=189mm

  $pdf = new FPDF('P','mm','A4');

  $pdf ->AddPage();
  $pdf ->SetFont('Arial','B','14');
  $pdf ->Cell(100,10,'CONCURSOS',0,1);
  //color
  $pdf->setFillColor(180,180,255);
  $pdf->setDrawColor(50,50,100);
  $pdf->Cell(50,5,'Referencia',1,0,'',true);
  $pdf->Cell(85,5,'Designacao',1,0,'',true);
  $pdf->Cell(35,5,'Data de Inicio',1,0,'',true);
  $pdf->Cell(35,5,'Data Final',1,0,'',true);

 


  $query=mysqli_query($con,"SELECT * FROM concurso");

  while ($data=mysqli_fetch_array($query)) {

   $pdf->Cell(50,5,$data['referencia'],1,0);
  $pdf->Cell(85,5,$data['designacao'],1,0);
  $pdf->Cell(35,5,$data['dataInicio'],1,0);
  $pdf->Cell(35,5,$data['datafim'],1,1);

  }
  //Set font to arial ,bold,14pt (its optional);

  //$pdf ->
  
  //Cell (width,height,text,border, end line,[align]);

 



$pdf ->Output();



  ?>




