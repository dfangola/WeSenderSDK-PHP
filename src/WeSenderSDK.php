<?php

namespace WeSender;

/**
 * @author Acidiney Dias <acidiney.dias@digitalfactory.co.ao>
 * @link https://www.wesender.co.ao
 * @version 0.0.1
 */

class WeSenderSDK {
  private $_apiKey;
  private $_apiUrl = "https://api.wesender.co.ao";

  public function __construct($apiKey) {
    $this->_apiKey = $apiKey;
  }

  public function sendMessage(Array $destine, String $message, $hasSpecialCharacter = false) {
    $data = [
      "ApiKey" => $this->_apiKey,
      "Mensagem" => $message,
      "Destino" => $destine,
      "CEspecial" => $hasSpecialCharacter
    ];

    $header = [
      'http' => [
        'method' => 'POST',
        'header' => [
          'Content-Type: application/json',
          "Content-Length: " . strlen(json_encode($data)) . "\r\n"
        ],
        'content' => json_encode($data)
      ],
    ];

    $context = stream_context_create($header);
    $response = file_get_contents(
        $this->_apiUrl.'/envio/apikey',
        false,
        $context
    );

    $responseDecode = json_decode($response, true);
    $res = [
      "Success" => false,
      "Message" => 'Não foi possivel enviar mensagens'
    ];

    if ($responseDecode['Exito']) {
      $res = [
        "Success" => true,
        "Message" => $responseDecode['Mensagem']
      ];
    }

    return $res;
  }
}
