# Consumir API do PagueVeloz

==========================
---------------
Utilize composer para instalar as dependências do package.

***Necessário instanciar o autoload do projeto:***
````
require __DIR__.'/vendor/autoload.php';
````

Este Client Package foi criado para consumir serviços disponíveis na API do PagueVeloz. 

Foi desenvolvido com base nas informações contidas no help do PagueVeloz, disponível em: https://www.pagueveloz.com.br/help


Serviços disponíveis:
## V1
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

## V2
------
- Assinar
- Boleto
- ComprarCreditoSMS
- Consultar
- ContaBancaria

## V3
-----
- Boleto

=========================
# Exemplo de Utilização 
-Assinar (Serviço de assinatura do PagueVeloz)
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

----
**
 *Ps.: O retorno sempre será em um objeto "PagueVeloz\Service\Context\HttpResponse"

---
Todos os serviços disponíveis devem enviar ***obrigatoriamente*** a autenticação ***(email+token)*** do cliente.
***Métodos que não utilizam autenticação:***
````
- Assinar;
- Cep;
````