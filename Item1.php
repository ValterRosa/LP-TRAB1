<?php
print "Qual o sexo do cliente? (m/f)" ;
$SEXO = trim(fgets(STDIN));
print "Quantas cervejas foram consumidas?" ;
$CERVEJAS = trim(fgets(STDIN));
PRINT "Quantos refrigerantes foram consumidos?" ;
$REFRI = trim(fgets(STDIN));
print "Quantos espetinhos foram consumidos?" ;
$ESPETINHO = trim(fgets(STDIN));

// SELECIONA VALOR DA ENTRADA 
IF ($SEXO == "M" || $SEXO == "m"){
	$ENTRADA = "10" ;
}
ELSE {
	$ENTRADA = "8" ; 
}

//VALOR TOTAL DO CONSUMO(BEBIDAS E COMIDA)
$CONSUMO = ($CERVEJAS*2.5)+($REFRI*2)+($ESPETINHO*4) ;

//VERIFICA SE VAI COBRAR COVERT
IF ($CONSUMO<15 && $CONSUMO==15){
	$COVERT = "3" ;
}
ELSE {
	$COVERT = "0" ;
}

//Subtotal sem 10%
$SUBTOTAL = ($ENTRADA+$CONSUMO+$COVERT);

// CALCULA OS 10% DO GARÇON 
$GARCON = (10*$SUBTOTAL)/100 ;


$TOTAL = $SUBTOTAL+$GARCON ;


print  "\nValor da conta:" ;
print "\nR$ " . number_format($ENTRADA, 2,',','.') . "(Valor da entrada)" ;
print "\nR$ " . number_format($CONSUMO, 2,',','.') . "(Consumo)" ;
print "\nR$ " . number_format($COVERT, 2,',','.') . "(Couvert artistico)" ;
print "\nR$ " . number_format($SUBTOTAL, 2,',','.') . "(Subtotal SEM 10% )" ;
print "\n___________________________________________" ;
print "\nR$ " . number_format($TOTAL, 2,',','.') . "(Total )" ;


		


 