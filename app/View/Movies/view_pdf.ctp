<?php 
App::import('Vendor','tcpdf/tcpdf'); 

//carrega o construtor do pdf
$Pdf = new TCPDF();

$Pdf->setPrintHeader(FALSE);
$Pdf->setPrintFooter(TRUE);

$Pdf->SetMargins(10, 20, 10);


$Pdf->AddPage('P','A4');
$lista ='<font size="10" color="#ff7f50"><h3> LISTA DOS CANDIDATOS</h3></font>';
$html = '';
$htmltabela = '$html .';
$htmlbr = '</br>';
 
 foreach ( $movies as $movie ){
 	 $html .= ' '.$movie['Director']['id'];	
 	 $html .= ' '.$movie['Genre']['id'];	
 	 $html .= ' '.$movie['Genre']['label'];
	  
 
 }



 $htmll = ' <table border="0.1" cellspacing="0.1" cellpadding="0.1">
    <tr>
        <th align="center">ORDEM</th>
        <th align="center">GÉNERO</th>
        <th align="center">DIRECTOR</th>
        <th align="center"> TÍTULO</th>
        <th align="center"> DESCRIÇÃO</th>
    </tr>  
    
    </table>';
	
/*	$html3 = '<font size="10" color="#ff7f50">The</font> <font size="10" color="#6495ed">quick</font> 
	<font size="14" color="#dc143c">brown</font> <font size="18" color="#008000">fox</font> 
	<font size="22"><a href="http://www.tcpdf.org">jumps</a>';*/
//$Pdf->writeHTML($lista);
$Pdf->writeHTML($htmll);
$Pdf->writeHTML($html);
$Pdf->writeHTML($htmltabela);

//$Pdf->writeHTML($html3);

echo $Pdf->Output('etiqueta.pdf','I'); 
 