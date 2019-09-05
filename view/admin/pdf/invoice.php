<?php
  
  require('fpdf/fpdf.php');
  /// A4 width : 219mm
  ///default margin : 10mm each side 
  // writable :219 -(10*2)=189mm

  $pdf = new FPDF('P','mm','A4');
  
  $pdf ->AddPage();

  //Set font to arial ,bold,14pt (its optional);

  $pdf ->SetFont('Arial','B','14');
  
  //Cell (width,height,text,border, end line,[align]);

  $pdf ->Cell(130 ,5,'CONCURSOS',1,0);
  $pdf ->Cell(59 ,5,'INVOICE',1,1);//end of line
  
  //Set font to arial,regular,12pt;
  $pdf ->SetFont('Arial','',12);

  $pdf ->Cell(130 ,5,'[Street Address]',1,0);
  $pdf ->Cell(59 ,5,'',1,1);//end of line

  $pdf ->Cell(130 ,5,'[City,Country,ZIP]',1,0);
  $pdf ->Cell(25 ,5,'Date',1,0);
  $pdf ->Cell(34 ,5,'[dd/mm/yyyy]',1,1);//end of line

  $pdf ->Cell(130 ,5,'Phone [+258844756008]',1,0);
  $pdf ->Cell(25 ,5,'INVOICE #',1,0);
  $pdf ->Cell(34 ,5,'[1234567]',1,1);//end of line
  
  $pdf ->Cell(130 ,5,'Fax [+258844756008]',1,0);
  $pdf ->Cell(25 ,5,'Customer ID',1,0);
  $pdf ->Cell(34 ,5,'[1234567]',1,1);//end of line


  //Make a dummy empty Cell as a vertical Spacer

   $pdf ->Cell(189 ,10,'',1,1);//end of line

   //biling Address 
    $pdf ->Cell(100 ,5,'Recibo para  ',1,1);//end of line
    //add a dummy cell at the beginning of each line for indentation 
    $pdf ->Cell(10 ,5,'',1,0);
    $pdf ->Cell(90 ,5,'[Name]',1,1);

    $pdf ->Cell(10 ,5,'',1,0);
    $pdf ->Cell(90 ,5,'[Company Name]',1,1);

    $pdf ->Cell(10 ,5,'',1,0);
    $pdf ->Cell(90 ,5,'[Address]',1,1);

    $pdf ->Cell(10 ,5,'',1,0);
    $pdf ->Cell(90 ,5,'[Phone]',1,1);


     //Make a dummy empty Cell as a vertical Spacer
    $pdf ->Cell(189 ,10,'',1,1);//end of line

    //invoice contents 
     $pdf ->SetFont('Arial','B',12); 

     $pdf ->Cell(130 ,5,'Description',1,0);
     $pdf ->Cell(25 ,5,'Taxed',1,0);
     $pdf ->Cell(34 ,5,'Amount',1,1);//end of line

     $pdf ->SetFont('Arial','',12); 


    //Numbers are Right-Aligned so we give 'R' after new line parameter

     $pdf ->Cell(130 ,5,'UltraCool Fridge',1,0);
     $pdf ->Cell(25 ,5,'-',1,0);
     $pdf ->Cell(34 ,5,'3,250',1,1,'R');//end of line

     $pdf ->Cell(130 ,5,'SuperSonic Dishwasher',1,0);
     $pdf ->Cell(25 ,5,'-',1,0);
     $pdf ->Cell(34 ,5,'6,250',1,1,'R');//end of line

     $pdf ->Cell(130 ,5,'Samsung TV 4K',1,0);
     $pdf ->Cell(25 ,5,'-',1,0);
     $pdf ->Cell(34 ,5,'11,250',1,1,'R');//end of line

     $pdf ->Cell(130 ,5,'LG Washing Machine ',1,0);
     $pdf ->Cell(25 ,5,'-',1,0);
     $pdf ->Cell(34 ,5,'6,250',1,1,'R');//end of line

    //Summary 

     $pdf ->Cell(130 ,5,' ',1,0);
     $pdf ->Cell(25 ,5,'Subtotal',1,0);
     $pdf ->Cell(4 ,5,'$',1,0);//end of line
     $pdf ->Cell(30 ,5,'4,450',1,1,'R');//end of line






 





$pdf ->Output();



  ?>