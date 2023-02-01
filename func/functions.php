<?php

function session_checker(){

	if(!isset($_SESSION['usuario_id'])){

		header ("Location:formulario_login.html");

		exit(); 
	}
}

function verifica_email($EMAIL){

    list($User, $Domain) = explode("@", $EMAIL);
    $result = @checkdnsrr($Domain, 'MX');

    return($result);

}


function generatePasswordsUsingCharactersAndNumbers($passwordLength){
$characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
$password_characters = str_split($characters);
$password=''; 

for($i=0;$i<$passwordLength;$i++){ 
$password.=$password_characters[rand(0,count($password_characters)-1)];
}
return $password;
} 


function valor_extenso($valor=0, $maiusculas=false) {
        // verifica se tem virgula decimal
        if (strpos($valor, ",") > 0) {
                // retira o ponto de milhar, se tiver
                $valor = str_replace(".", "", $valor);

                // troca a virgula decimal por ponto decimal
                $valor = str_replace(",", ".", $valor);
        }
        $singular = array("centimo", "euro", "mil", "milh�o", "bilh�o", "trilh�o", "quatrilh�o");
        $plural = array("centimos", "euros", "mil", "milh�es", "bilh�es", "trilh�es",
                "quatrilh�es");

        $c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
                "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
        $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
                "sessenta", "setenta", "oitenta", "noventa");
        $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
                "dezesseis", "dezesete", "dezoito", "dezenove");
        $u = array("", "um", "dois", "tr�s", "quatro", "cinco", "seis",
                "sete", "oito", "nove");

        $z = 0;

        $valor = number_format($valor, 2, ".", ".");
        $inteiro = explode(".", $valor);
        $cont = count($inteiro);
        for ($i = 0; $i < $cont; $i++)
                for ($ii = strlen($inteiro[$i]); $ii < 3; $ii++)
                $inteiro[$i] = "0" . $inteiro[$i];

        $fim = $cont - ($inteiro[$cont - 1] > 0 ? 1 : 2);
        $rt = '';
        for ($i = 0; $i < $cont; $i++) {
                $valor = $inteiro[$i];
                $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
                $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
                $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

                $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd &&
                        $ru) ? " e " : "") . $ru;
                $t = $cont - 1 - $i;
                $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
                if ($valor == "000"

                )$z++; elseif ($z > 0)
                $z--;
                if (($t == 1) && ($z > 0) && ($inteiro[0] > 0))
                $r .= ( ($z > 1) ? " de " : "") . $plural[$t];
                if ($r)
                $rt = $rt . ((($i > 0) && ($i <= $fim) &&
                        ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
        }

        if (!$maiusculas) {
                return($rt ? $rt : "zero");
        } elseif ($maiusculas == "2") {
                return (strtoupper($rt) ? strtoupper($rt) : "Zero");
        } else {
                return (ucwords($rt) ? ucwords($rt) : "Zero");
        }
        }



function data_extenso($data){

$data=strtotime($data);

$dia = date('d',$data);
$mes = date('m',$data);
$ano = date('Y',$data);
$semana = date('w',$data);
$diasemana=$semana; 
 
// configura��o mes
 
switch ($mes){
 
case 1: $mes = "janeiro"; break;
case 2: $mes = "fevereiro"; break;
case 3: $mes = "mar�o"; break;
case 4: $mes = "abril"; break;
case 5: $mes = "maio"; break;
case 6: $mes = "junho"; break;
case 7: $mes = "julho"; break;
case 8: $mes = "agosto"; break;
case 9: $mes = "setembro"; break;
case 10: $mes = "outubro"; break;
case 11: $mes = "novembro"; break;
case 12: $mes = "dezembro"; break;
 
}
 
 
// configura��o semana
 
switch ($semana) {
 
case 0: $semana = "domingo"; break;
case 1: $semana = "segunda-feira"; break;
case 2: $semana = "ter�a-feira"; break;
case 3: $semana = "quarta-feira"; break;
case 4: $semana = "quinta-feira"; break;
case 5: $semana = "sexta-feira"; break;
case 6: $semana = "s�bado"; break;
 
}
//Agora basta imprimir na tela...
return ("$semana, $dia de $mes de $ano");

}

function data1_extenso($data){

$data=strtotime($data);

$dia = date('d',$data);
$mes = date('m',$data);
$ano = date('Y',$data);
$semana = date('w',$data);
$diasemana=$semana; 
 
// configura��o mes
 
switch ($mes){
 
case 1: $mes = "janeiro"; break;
case 2: $mes = "fevereiro"; break;
case 3: $mes = "mar�o"; break;
case 4: $mes = "abril"; break;
case 5: $mes = "maio"; break;
case 6: $mes = "junho"; break;
case 7: $mes = "julho"; break;
case 8: $mes = "agosto"; break;
case 9: $mes = "setembro"; break;
case 10: $mes = "outubro"; break;
case 11: $mes = "novembro"; break;
case 12: $mes = "dezembro"; break;
 
}
 
 
// configura��o semana
 
switch ($semana) {
 
case 0: $semana = "domingo"; break;
case 1: $semana = "segunda-feira"; break;
case 2: $semana = "terça-feira"; break;
case 3: $semana = "quarta-feira"; break;
case 4: $semana = "quinta-feira"; break;
case 5: $semana = "sexta-feira"; break;
case 6: $semana = "sábado"; break;
 
}
//Agora basta imprimir na tela...
return ("$dia de $mes de $ano");

}

function caminho($vereda) {

// esta funcao � para 

$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");

$url = '://'.$_SERVER['HTTP_HOST'];
//$_SERVER['REQUEST_URI']= $variavel;

$url_final = $protocolo.$url.$vereda;
return $url_final;
}


function encurtarTexto($texto,$tamPermitido) 
	{
    if (strlen($texto) > $tamPermitido) 
		{ 
      $texto=substr($texto, 0, $tamPermitido) . "<strong>...</strong>";
		} else {
	   $texto=$texto;
		}
   return $texto;
	}	




?>