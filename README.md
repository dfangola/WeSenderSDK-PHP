# WeSender SDK para PHP
  SDK para conexão com a API em PHP

**A chave da api deve ser passada na instância da classe, como construtor**

`composer require digitalfactory/wesendersdk`

## Métodos diponiveis no momento
### - sendMessage
Esse metodo recebe um `payload` com as informações que devem ser enviadas e para quem deve ser enviado.
 ```php
  sendMessage(Array destines, String Message, Bool hasSpecialCharacter = false)
  ```
Resposta do método é a mesma que a da API:
```php

{
"Success" : Boolean ,
"Message" : String,
}

```

## Exemplo

```php

require 'vendor/autoload.php';
use WeSender\WeSenderSDK;

$WSDK = new WeSenderSDK('apikey');

$res = $WSDK->sendMessage(["926000000"], "Olá");

```

## License
MIT

## Autor
[Acidiney Dias](mailto:mailto:acidiney.dias@digitalfactory.co.ao)
