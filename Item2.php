<?php
print "Calculo do Imposto de renda." ;
print "\nDigite o total de rendimentos bancarios:" ;
$RBanc = trim(fgets(STDIN)) ;
print "Digite o total de rendimentos de Salarios ou servi�os:" ; 
$RSS = trim(fgets(STDIN)) ;
print "Digite o total de outros rendimentos:" ;
$TOR = trim(fgets(STDIN)) ;
print "Servi�os medicos:" ;
$SM = trim(fgets(STDIN)) ;
print "Servi�os educacionais:" ;
$SE = trim(fgets(STDIN)) ;

print "\n______________________________________________________________" ;

//calcula impostos
$IRBANC = (20*$RBanc)/100 ;

if ($RSS>8000){
	if ($RSS<24000){
		$IRSS = (15*$RSS)/100 ;
	}
	else{
		$IRSS = (20*$RSS)/100 ;
	}
}
else {
	$IRSS = 0 ;
}

$ITOR = $TOR*10/100 ;

$IB = $IRBANC+$IRSS+$ITOR ;

// Calcula abatimentos
$MABAT = $IB*30/100 ;

$SOMABAT = $SM+$SE ;

if ($SOMABAT>$MABAT){
	$VABATIDO = $MABAT ;
}
else{
	$VABATIDO = $SOMABAT ;
}

// Calcula Valor a pagar

$IAPAGAR = $IB-$VABATIDO ;

//Resultados
print "\nTotal de impostos:" ;
print "\nR$" .  number_format($IRBANC, 2,',','.') . " (sobre rendimentos bancarios)" ;
print "\nR$" .  number_format($IRSS, 2,',','.') . " (sobre salarios e servi�os)" ;
print "\nR$" .  number_format($ITOR, 2,',','.') . " (sobre outros rendimentos)" ;
print "\nR$" .  number_format($IB, 2,',','.') . " (valor bruto)" ;

print "\n______________________________________________________________" ;

print "\nMaximo a ser abatido: R$" .  number_format($MABAT, 2,',','.') . " .";

print "\n______________________________________________________________" ;

print "\nTotal de valores possiveis de abater:" ;
print "\nR$" . number_format($SM, 2,',','.') . " (servi�os medicos)" ;
print "\nR$" . number_format($SE, 2,',','.') . " (servi�os educacionais)" ;
print "\nR$" . number_format($SOMABAT, 2,',','.') . " (total)" ;

print "\n______________________________________________________________" ;

print "\nImposto total:" ;
print "\nR$" .  number_format($IB, 2,',','.') . " (imposto bruto)" ;
print "\nR$" .  number_format($VABATIDO, 2,',','.') . " (abatimentos)" ;
print "\nR$" .  number_format($IAPAGAR, 2,',','.') . " (total a pagar)" ;

