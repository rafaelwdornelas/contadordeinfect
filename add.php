<?php
//transforma a string base64 em um objeto
$data = base64_decode($_GET['data']);
//transforma o objeto em um array
$data2 = json_decode($data, true);
//nova variável para armazenar o data
$date = new DateTime();
//print_r($data2);

//monta um novo array com os dados do usuário, extraindo os mesmo do array anterior
$additionalArray = array(
    'visitorId' => $data2["visitorId"],
    'date' => date_format($date, 'd-m-Y H:i:s'),
    'language' => $data2["language"],
    'ip' => $data2["ip"],
    'city' => $data2["city"],
    'region' => $data2["region"],
    'country' => $data2["country"],
    'mobile' => $data2["mobile"],
    'ua' => $data2["ua"],
);

//abre o arquivo json
$data_results = file_get_contents('avisos.json');
//transforma o objeto em um array
$tempArray = json_decode($data_results);
//cria variavel para armazenar o novo visitorId atual
$searchString = $data2["visitorId"];
//verifica se o visitorId já existe no arquivo json
$result = getArrayIndex($tempArray, $searchString);

//se o visitorId não existir, adiciona o novo array ao array principal
if (empty($result)) {
    //adiciona o novo array ao array principal
    $tempArray[] = $additionalArray;
    //transforma o array principal em um objeto
    $jsonData = json_encode($tempArray);
    //salva o objeto no arquivo json
    file_put_contents('avisos.json', $jsonData);
    //download file
    header('Location: ./teste.zip');
} else { //faz o donwload do arquivo mais não conta no contador
    //repetido
    header('Location: ./teste.zip');
}


//função para procurar o index do array
function getArrayIndex($array, $searchString)
{
    //verifica se o array possui registros
    if (count($array)) {
        //percorre o array
        foreach ($array as $user) {
            //verifica se o visitorId do array é igual ao visitorId passado por parâmetro
            if ($user->visitorId == $searchString) {
                //retorna verdadeiro
                return true;
            }
        }
    }
    //retorna falso
    return false;
}