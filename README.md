# Cliente API do [PagueVeloz](https://www.pagueveloz.com.br/)

**Instalação via composer:**
```
  composer require pagueveloz/pagueveloz
```

Este cliente foi criado para consumir serviços disponíveis na API do [PagueVeloz](https://www.pagueveloz.com.br), com base nas informações contidas no [help do PagueVeloz](https://www.pagueveloz.com.br/help) .

## Serviços disponíveis:

### V1
------------
- Cep
- Cliente
- Consultar
- ConsultarBoleto
- CreditoSMS
- DefaultBoleto
- Extrato
- MensagemSMS
- PacoteSMS
- Ping
- Saldo
- Saque
- Tarifa
- Transferencia
- UsuarioCliente

### V2
------
- Assinar
- Boleto
- ComprarCreditoSMS
- Consultar
- ContaBancaria

### V3
-----
- Boleto

# Exemplos:

Assinar (Serviço de assinatura do PagueVeloz)
```
require_once __DIR__."/vendor/autoload.php";

use PagueVeloz\PagueVeloz;

PagueVeloz::Url('https://www.pagueveloz.com.br/api');

$assinar = PagueVeloz::Assinar();

$assinar->dto
	->setNome('xxxxxxxx')
	->setDocumento('xxxxxxxxxxx')
	->setTipoPessoa(x)
	->setLoginUsuarioDefault('xxxxx@xxxx.xxx.xx')
	->setEmail('xxxxx@xxxx.xxx.xx');

$assinar->Post();
```
Observação : Todo retorno será um objeto do tipo "PagueVeloz\Service\Context\HttpResponse"

### Métodos com autenticação

Métodos que necessitem de autenticação devem enviar o cabeçalho ***"Authentication"*** com o valor ***"Basic valor"***, sendo ***"valor"*** igual ao texto em base64 do e-mail do usuário concatenado com o caracter ":" concatenado com o token do usuário.

### Métodos sem autenticação

Os métodos abaixo não necessitam de autenticação e podem ser chamados diretamente.
````
Assinar
Cep
````
