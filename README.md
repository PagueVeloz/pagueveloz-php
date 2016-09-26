<p align="center">
<img src="https://www.pagueveloz.com.br/Content/Img/logo-pagueveloz-topo_03.png" alt="PagueVeloz"/>
</p>

<p align="center">
<a href="https://styleci.io/repos/27489184">
<img src="https://styleci.io/repos/27489184/shield" alt="StyleCI"/>
</a>
<a href="https://travis-ci.org/PagueVeloz/pagueveloz-php">
<img src="https://travis-ci.org/PagueVeloz/pagueveloz-php.svg" alt="Build Status"/>
</a>
<a href="https://codecov.io/gh/PagueVeloz/pagueveloz-php">
<img src="https://codecov.io/gh/PagueVeloz/pagueveloz-php/branch/master/graph/badge.svg" alt="codecov"/>
</a>
</p>

<p align="center">
Cliente PHP da API do <a href="https://www.pagueveloz.com.br">PagueVeloz</a>, com base nas informações contidas no <a href="https://www.pagueveloz.com.br/help">help</a>.
</p>

**Pré-requisitos**

 * PHP 5.4 ou superior
 * Extensão cURL
 * [Composer](https://getcomposer.org)

**Instalação via composer:**
```
composer require pagueveloz/pagueveloz
```

### Serviços disponíveis:
|                   	| V1 	| V2 	| V3 	|V4  |
|-------------------	|----	|----	|----	|----|
| Assinar           	|    	|   	|    	| x  |
| Boleto            	|    	|   	| x  	|    |
| Cep               	| x  	|    	|    	|    |
| Cliente           	| x  	|    	|    	|    |
| CreditoSMS        	| x  	|    	|    	|    |
| Consultar         	| x  	|    	|    	|    |
| ConsultarBoleto   	| x  	|    	|    	|    |
| ComprarCreditoSMS 	|    	| x  	|    	|    |
| Consultar         	|    	| x  	|    	|    |
| ContaBancaria     	|    	| x  	|    	| x  |
| DefaultBoleto     	| x  	|    	|    	|    |
| Extrato           	| x  	|    	|    	|    |
| MensagemSMS       	| x  	|    	|    	|    |
| PacoteSMS         	| x  	|    	|    	|    |
| Ping              	| x  	|    	|    	|    |
| Saldo             	| x  	|    	|    	|    |
| Saque             	| x  	|    	|    	|    |
| Tarifa            	| x  	|    	|    	|    |
| Transferencia     	| x  	|    	|    	|    |
| UsuarioCliente    	| x  	|    	|    	|    |

# Exemplos:

### Assinar

```php
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
## Operações de financiamento via cartão digitado

> Obs.: O cliente deve ter o termo CHARGEBACK assinado com o PAGUEVELOZ

#### Verificar se a operação de Financiamento via VendaDigitada está habilitada para o cliente:

```php
<?php
$cartaoHabilitado = PagueVeloz::CartaoHabilitado();

$cartaoHabilitado->auth->setEmail('suaassinaturacompagueveloz@dominio.com')
                       ->setToken('seutokenacessoaopagueveloz')
                       ->setSenha('senhaassinatura');

$response = $cartaoHabilitado->Get();

$cartaoHabilitado = (bool)$response->body;

/**
 * [{
 *    "Id": "33",
 *    "Nome": "Diners"
 *  },
 *  {
 *    "Id": "2",
 *    "Nome": "Master Card"
 *  },
 *  {
 *    "Id": "1",
 *    "Nome": "Visa"
 *  }]
 */
```
#### Listagem de parcelas por bandeira:

```php
$bandeiras = PagueVeloz::BandeirasCartao();

$bandeiras->auth->setEmail('suaassinaturacompagueveloz@dominio.com')
                ->setToken('seutokenacessoaopagueveloz')
                ->setSenha('senhaassinatura');

$response = $bandeiras->Get();

$bandeiras = json_decode($response->body);

/**
 * [{
 *   "Parcelas": 1,
 *   "ValorParcela": 510,
 *   "ValorServico": 500.50,
 *   "ValorTotal": 510
 * },
 * {
 *   "Parcelas": 2,
 *   "ValorParcela": 257,
 *   "ValorServico": 500.50,
 *   "ValorTotal": 514
 * }]
 */
```
#### Criando uma transação:

```php
$parcelamento = PagueVeloz::Parcelamento();

$parcelamento->auth->setEmail('suaassinaturacompagueveloz@dominio.com')
                   ->setToken('seutokenacessoaopagueveloz')
                   ->setSenha('senhaassinatura');

$parcelamento->dto->setBandeira($bandeira)
                  ->setValor($servico->getValor());

$response = $parcelamento->Get();

$parcelamento = json_decode($response->body);

/**
 * Caso o request retorne 200 a api retorna o Id da transação no PagueVeloz
 * { "Id": 123 }
 */
```
#### Fazendo um pagamento:

```php
$transacaoPV = PagueVeloz::Transacao();

$transacaoPV->auth->setEmail('suaassinaturacompagueveloz@dominio.com')
                ->setToken('seutokenacessoaopagueveloz')
                ->setSenha('senhaassinatura');

$proprietarioDTO = $transacaoPV->dto->getProprietarioCartao();

$proprietarioDTO->setNome('	Lorem ipsum dolor sit amet.')
                ->setRG('1234567890')
                ->setCPF('12345678901')
                ->setTelefoneFixo('47 21234000')
                ->setTelefoneCelular('47 99887755');

$transacaoPV->dto
          ->setNSU('1a2b3c')
          ->setValorTransacao(9.99)
          ->setValorServico(9.99)
          ->setParcelas(1)
          ->setBandeira(1)
          ->setDescricao('Lorem ipsum dolor sit amet, consectetur adipisicing.')
          ->setProprietarioCartao($proprietarioDTO);

$response = $transacaoPV->Post();

$transacaoPagueVeloz = json_decode($response->body);

/**
 * Ex. recusa:
 * {
 *  "Id": 740,
 *  "Sucesso": false,
 *  "Mensagem": "Houve um problema de transação com o emissor do cartão. Mensagem recebida do emissor do cartão: (denied  *card)",
 *  "NSU": "123abc",
 *  "CupomEstabelecimento": null,
 *  "CupomCliente": null
 *}
 *
 * Ex. OK:
 * {
 * "Id": 740,
 * "Sucesso": true,
 * "Mensagem": "",
 * "NSU": "123abc",
 * "CupomEstabelecimento": "S...I...M...U...L...A...D...O....",
 * "CupomCliente": "S...I...M...U...L...A...D...O...."
 *	}
 */
```
#### Confirmando ou cancelando um pagamento:

```php
$pagamento = PagueVeloz::Pagamento();

$pagamento->auth
          ->setEmail('suaassinaturacompagueveloz@dominio.com')
          ->setToken('seutokenacessoaopagueveloz')
          ->setSenha('senhaassinatura');

$pagamento->dto
          ->setId(740)
          ->setNumeroCartao('400000000000044')
          ->setCodigoSeguranca('123')
          ->setValidade('1016');

$response = $pagamento->Post();
$pagamentoPagueVeloz = json_decode($response->body);

$confirmaPagamento = PagueVeloz::Confirmacao();

$confirmaPagamento->auth
                  ->setEmail('suaassinaturacompagueveloz@dominio.com')
                  ->setToken('seutokenacessoaopagueveloz')
                  ->setSenha('senhaassinatura');

$confirmaPagamento->dto
                  ->setId(740)
                  ->setConfirmado('true'); //Pode ser true ou false

$response = $confirmaPagamento->Post();
```

> Observação : Todo retorno será um objeto do tipo "PagueVeloz\Service\Context\HttpResponse"

### Serviços com autenticação

Serviços que necessitem de autenticação devem enviar o cabeçalho ***"Authentication"*** com o valor ***"Basic valor"***, sendo ***"valor"*** igual ao texto em base64 do e-mail do usuário concatenado com o caracter ":" concatenado com o token do usuário.

```php
$token = base64_encode("email@dominio.com.br" . ":" . "token");
```

### Serviços sem autenticação

Alguns serviços não necessitam de autenticação e podem ser chamados diretamente, veja abaixo alguns:

 * Assinar
 * Cep
