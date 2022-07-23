<?php

session_start(); 

$cep = $_POST['cep']; 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "viacep.com.br/ws/$cep/json/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

//TRANSFORMANDO RETORNO JSON EM ARRAY; 
$result = json_decode($response, true); 

curl_close($curl);

//print_r($result);

echo '<h2>'.$result['cep'].'</h2>';
echo 'Endereço: ' .$result['logradouro'] . '<br>'; 
echo 'Bairro: '   .$result['bairro'] . '<br>'; 
echo 'Cidade: ' . $result['localidade'] . ' UF: ' . $result['uf'] . '<br>';
echo 'Códido da Cidade: ' .$result['siafi']; 

echo '<br><br><a href="index.html">Voltar!</a>'; 