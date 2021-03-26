<?php 

$cadena='Hola mundo';
$numero=20;
$suma=20.20;
$booleana=false;


/*echo '<h1> cadena: '.$cadena.'</h1>';
echo '<h1> numero entero: '.$numero.'</h1>';
echo '<h1> suma: '.$suma.'</h1>';
echo '<h1> booleana: '.$booleana.'</h1>';*/


	/*if ($numero>=20) 
	{
		echo 'Verdadero';
	}
	else
	{
		echo 'Falso';
	}*/

/*
	switch ($cadena) {
		case 'Hola mundos':
			echo 'Verdadero 1';
			break;

		case 'Hola mundo':
			echo 'Verdadero 2';
			break;
		
		default:
			echo 'Falso';
			break;
	}*/



/*
function suma($n1,$n2)
{	$suma=$n1+$n2;
	return $suma;
}

function resta($n1,$n2)
{	$resta=$n1-$n2;
	return $resta;
}


function operaciones($n1,$n2,$op)
{	$respuesta=0;
	switch ($op) {
		case 'suma':
			$respuesta=$n1+$n2;
			break;

		case 'resta':
				$respuesta=$n1-$n2;
			break;
		case 'devision':
			$respuesta=$n1/$n2;
			break;
		case 'multiplicar':
			$respuesta=$n1*$n2;
			break;
	}
	return $respuesta;
}*/

/*echo 'Suma: '.operaciones(300,200,'suma')."<br>";
echo 'resta: '.operaciones(300,200,'resta')."<br>";
echo 'devision: '.operaciones(300,200,'devision')."<br>";
echo 'multiplicar: '.operaciones(300,200,'multiplicar');*/

include 'persona.php';

$persona=new Persona();

$persona->setNombre('Angel');
$persona->setApellido('Albinagorta');
$persona->setEdad(26);

/*$persona=new Persona('Angel','Albinagorta',26);*/
echo 'Nombre: '.$persona->getNombre();
echo 'Apellido: '.$persona->getApellido();
echo 'Edad: '.$persona->getEdad();


 ?>