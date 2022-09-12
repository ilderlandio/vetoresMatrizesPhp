<style type="text/css">
   td{
    text-align: center;
    background-color: aquamarine;
   } 
</style>
<?php 
$estagio = array("Manutenção","Design","Programação","Serviços de Informática");
                   // 0        1            2               3
$estagio2 = array(
	0 => "Manutenção",
	1 => "Design",
	2 => "Programação",
	3 => "Serviços de Informática"
   );

var_dump($estagio2); 

 $size = count($estagio2); 

 echo $size; // 4
 echo "<br>"; 
 echo $estagio2[0]; 

//  for($i=0; $i < $size ; $i++) { 
//     echo $estagio[$i]."<br>";
// }

echo "<table border='1'"; 
for($i=0; $i < $size ; $i++) { 
	echo "<tr><td>$estagio[$i]</td></tr>";
}
echo "</table>"; 

echo "<br>";

// array associativo
$dadosClientes = array(
                       "Nome" => "Maria Clara",
                       "CPF" => "087883456-18",
                       "RG" => "2006089107117",
                       "idade" => 55, 
                       "altura" => 1.75
                      );

var_dump($dadosClientes); 

 echo "RG do Cliente: ".$dadosClientes["RG"]."<br>"; 
 // vai mostrar: 2006089107117
 echo "Idade do Cliente: ".$dadosClientes["idade"]."<br>"; 
 echo "Nome do Cliente: ".$dadosClientes["Nome"]."<br>";

 echo "<br>"; 
//mostrar somente os valores
foreach($dadosClientes as $value) {
	echo $value."<br>"; 
}
 echo "<br>"; 
//mostrar chaves e valores
 foreach($dadosClientes as $key => $value) {
 	echo $key." - ".$value."<br>";
 }

/* Arrays multidimensionais ou Matrizes, são estruturas onde se tem um array vinculado a outros, na maior parte das vezes usamos duas dimensões, representando tabelas(Linhas e Colunas) */

echo "<hr>"; 

$clientes = array(
        "José" => array("idade"=>25,"CPF"=>"087883456-18","RG"=>"2006089107117"), 
        "Maria" => array("idade"=>18,"CPF"=>"057825456-15","RG"=>"2001089097112"),
        "Ana" => array("idade"=>24,"CPF"=>"037825445-30","RG"=>"2019089097118") 
    );

echo "CPF da Cliente Maria - ".$clientes["Maria"]["CPF"]."<br>";
echo "RG da Cliente Ana - ".$clientes["Ana"]["RG"]."<br>";

echo "<hr>"; 

foreach($clientes as $clients => $dados){
    echo $clients."<br>";
    foreach($dados as $key => $values){
        echo $key." - ".$values."<br>";
    } 
}
?> 
<!-- <table border="1">
 --><?php 
echo "<table border='1'>"; 
foreach($clientes as $clients => $dados){
    echo "<tr><td colspan='2'> $clients </td></tr>";
    foreach($dados as $key => $values){
    echo "<tr><td> $key </td><td> $values </td></tr>";
  } 
}
?>
</table>
<?php
echo "<hr>"; 
$numeros = array(
                 0 => array(8,9,6,9),
                 1 => array(6,4,10,15),
                 2 => array(5,9,0,10)
               ); 

echo $numeros[1][3]."<br>";
echo $numeros[2][2]."<br>";

foreach ($numeros as $numbers => $vetor) {
   echo $numbers."<br>"; 
   foreach($vetor as $key => $valor){
     echo $key." - ".$valor."<br>";
   }
}

 echo "<table border='1'>"; 
foreach($numeros as $numbers => $vetor) {
    echo "<tr><td colspan='2'>$numbers</td></tr>"; 
   foreach($vetor as $key => $valor){
     echo "<tr><td>$key</td> <td>$valor</td> </tr>";
   }
}
echo "</table>"; 
// $clientes2["maria"]["rg"] = "2005089107117";
// $clientes2["maria"]["cpf"] = "040825445-56";
// echo $clientes2["maria"]["cpf"]; 

?>




