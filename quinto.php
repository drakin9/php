<?php 
	print "print para exibir na tela <br/>";

	$data = "12 de agosto de 2024";
	$salario = 850.00;
	$cargo = "estagiario";

	echo "arquivo criado em $data <br/>";

	printf("salario minimo R$ %.2f <br/>" , $salario);

	$texto = sprintf("%s recebe R$ %.2f por mês" , $cargo , $salario * 2);

	echo $texto;
	

 ?>