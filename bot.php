<?php
    
$token = "8633661222:AAEktiBF8KiOG23a03sn3bDBnxBJHuKEk14";
$url = "https://api.telegram.org/bot{$token}/sendMessage";
$input = file_get_contents("php://input");

$update = json_decode($input, true);

$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];


switch ($text)
{
    case '/start': 
        $response = "Inicializando MattAiepBot";
        break;
    case "Hola":
        $response = "Hola. Estás hablando con MattAiepBot, gestor de supermercados ¿quieres consultar sobre los contenidos de un pasillo? De ser así, dime, por ejemplpo \"Pasillo 1\" y te daré la información que corresponde a dicho pasillo.";
        break;
    case "Pasillo 1":
        $response = "En el pasillo 1 tenemos carne, queso y jamón. Si quieres saber sobre el contenido de otro pasillo, vuelve a intentarlo.";
        break;
    case "Pasillo 2":
        $response = "En el pasillo 2 tenemos leche, yogurth y cereal. Si quieres saber sobre el contenido de otro pasillo, vuelve a intentarlo.";
        break;
    case "Pasillo 3":
        $response = "En el pasillo 3 tenemos bebidas y jugos. Si quieres saber sobre el contenido de otro pasillo, vuelve a intentarlo.";
        break;
    case "Pasillo 4":
        $response = "En el pasillo 4 tenemos pan, pasteles y tortas. Si quieres saber sobre el contenido de otro pasillo, vuelve a intentarlo.";
        break;
    case "Pasillo 5":
        $response = "En el pasillo 5 tenemos detergente y lavalozas. Si quieres saber sobre el contenido de otro pasillo, vuelve a intentarlo.";
        break;
    default:
        $response =  "No comprendo que me intentas decir 🤔";
        break;
}

$data = [
    "chat_id" => $chat_id,
    "text" => "aaaa"
];

file_get_contents($url . "?" . http_build_query($data));
