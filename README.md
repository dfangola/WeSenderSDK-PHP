# WeSender SDK para PHP
  SDK para conexão com a API em PHP

**A chave da api deve ser passada na instância da classe, como construtor**

`composer require digitalfactory/wesendersdk`

## Métodos diponiveis no momento
### - sendMessage
Esse metodo recebe um `3 parametros` com as informações que devem ser enviadas e para quem deve ser enviado, sendo que o `hasSpecialCharacter` é opcional e por padrão é `false`.
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

## 🤔 Como contribuir

- Faça um fork desse repositório;
- Cria uma branch com a sua feature: `git checkout -b minha-feature`;
- Faça commit das suas alterações: `git commit -m 'feat: Minha nova feature'`;
- Faça push para a sua branch: `git push origin minha-feature`.

Depois que o merge da sua pull request for feito, você pode deletar a sua branch.

## :memo: Licença

Esse projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE.md) para mais detalhes.

## Contribuidores

[Carlos Garcia](https://github.com/CarlCr)

## Autor
[Acidiney Dias](mailto:mailto:acidiney.dias@digitalfactory.co.ao)
