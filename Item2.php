<?php
print "Calculo do Imposto de renda." ;
print "\nDigite o total de rendimentos bancarios:" ;
$RBanc = trim(fgets(STDIN)) ;
print "Digite o total de rendimentos de Salarios ou serviços:" ; 
$RSS = trim(fgets(STDIN)) ;
print "Digite o total de outros rendimentos:" ;
$TOR = trim(fgets(STDIN)) ;
print "Serviços medicos:" ;
$SM = trim(fgets(STDIN)) ;
print "Serviços educacionais:" ;
$SE = trim(fgets(STDIN)) ;

//calcula impostos
$IRBANK = (20*$RBanc)/100 ;
IF ($RSS>8000){
	if ($RSS>24000){
		$IRSS = (15*$RSS)/100 ;
	}
	else{
		$IRSS = (20*$RSS)/100 ;
	}
}
else {
	$IRSS = 0 ;
}
print "\nTotal de impostos:" ;
print "R$ $IRSS "  ;
