<?php

namespace PagueVeloz;

abstract class PagueVeloz
{
    private static $servicesAvailable = [
        ['service' => 'Assinar', 'version' => ['v1', 'v2', 'v3'], 'default' => 'v3'],
        ['service' => 'Cep', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Cliente', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Consultar', 'version' => ['v1', 'v2'], 'default' => 'v2'],
        ['service' => 'CreditoSMS', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Extrato', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Saldo', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Tarifa', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Saque', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Transferencia', 'version' => ['v1', 'v2'], 'default' => 'v2'],
        ['service' => 'UsuarioCliente', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'MensagemSMS', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'PacotesSMS', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Ping', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'DefaultBoleto', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'ConsultarBoleto', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'ContaBancaria', 'version' => ['v1', 'v2'], 'default' => 'v2'],
        ['service' => 'Boleto', 'version' => ['v2', 'v3'], 'default' => 'v3'],
        ['service' => 'ComprarCreditoSMS', 'version' => ['v2'], 'default' => 'v2'],
        ['service' => 'TarifarBoleto', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'ContaPag', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Deposito', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'BandeirasCartao', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Parcelamento', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Transacao', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Pagamento', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Confirmacao', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'CartaoHabilitado', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'ConsultaCartao', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'Formulario', 'version' => ['v1'], 'default' => 'v1'],
        ['service' => 'PinPadOperacoes', 'version' => ['v1'], 'default' => 'v1'],
    ];

    private static $version;

    public static $url;

    public static $urlCartao;

    public static function ApiVersion($v)
    {
        self::$version = $v;

        return self;
    }

    public static function Url($url)
    {
        self::$url = $url;
    }

    public static function UrlCartao($url)
    {
        self::$urlCartao = $url;
    }

    private static function GetVersion($service, $v)
    {
        $version = null;

        if (!empty(self::$version)) {
            $version = array_pop(array_filter($service['version'], function ($el) {
                if ($el === self::$version) {
                    return $el;
                }

            }));
        } elseif (!empty($v)) {
            $version = array_pop(array_filter($service['version'], function ($el) use ($v) {
                if ($el === $v) {
                    return $el;
                }

            }));
        } else {
            $version = $service['default'];
        }

        if (empty($version)) {
            throw new \Exception('Verão da API não encontrada', 1);
        }

        return $version;
    }

    public static function Get()
    {
        return self::$servicesAvailable;
    }

    private static function GetService($service)
    {
        $listService = array_filter(self::Get(), function ($el) use ($service) {
            if ($el['service'] === $service) {
                return $el;
            }
        });

        if (empty($listService) || count($listService) === 0 || count($listService) > 1) {
            throw new \Exception('Erro ao localizar Serviço', 1);
        }

        return array_pop($listService);
    }

    public static function Assinar($version = null)
    {
        $service = self::GetService('Assinar');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $dto = new \PagueVeloz\Api\v1\Dto\AssinarDTO();
                $service = new \PagueVeloz\Api\v1\Assinar($dto);
                break;
            case 'v2':
                $dto = new \PagueVeloz\Api\v2\Dto\AssinarDTO();
                $service = new \PagueVeloz\Api\v2\Assinar($dto);
                break;

            case 'v3':
                $dto = new \PagueVeloz\Api\v3\Dto\AssinarDTO();
                $service = new \PagueVeloz\Api\v3\Assinar($dto);
                break;
        }

        return $service;
    }

    public static function Cep($version = null)
    {
        $service = self::GetService('Cep');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\Cep();
                break;

        }

        return $service;
    }

    public static function ContaPag($version = null)
    {
        $service = self::GetService('ContaPag');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\ContaPagDTO();
                $service = new \PagueVeloz\Api\v1\ContaPag($dto);
                break;

        }

        return $service;
    }

    public static function Deposito($version = null)
    {
        $service = self::GetService('Deposito');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\DepositoDTO();
                $service = new \PagueVeloz\Api\v1\Deposito($dto);
                break;

        }

        return $service;
    }

    public static function Ping($version = null)
    {
        $service = self::GetService('Ping');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\Ping();
                break;

        }

        return $service;
    }

    public static function PacotesSMS($version = null)
    {
        $service = self::GetService('PacotesSMS');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\PacotesSMS();
                break;

        }

        return $service;
    }

    public static function Saldo($version = null)
    {
        $service = self::GetService('Saldo');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\Saldo();
                break;

        }

        return $service;
    }

    public static function ConsultarBoleto($version = null)
    {
        $service = self::GetService('ConsultarBoleto');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\ConsultarBoleto();
                break;

        }

        return $service;
    }

    public static function Saque($version = null)
    {
        $service = self::GetService('Saque');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\SaqueDTO();
                $service = new \PagueVeloz\Api\v1\Saque($dto);
                break;

        }

        return $service;
    }

    public static function ComprarCreditoSMS($version = null)
    {
        $service = self::GetService('ComprarCreditoSMS');

        switch (self::GetVersion($service, $version)) {
            case 'v2':
                $dto = new \PagueVeloz\Api\v2\Dto\ComprarCreditoSMSDTO();
                $service = new \PagueVeloz\Api\v2\ComprarCreditoSMS($dto);
                break;

        }

        return $service;
    }

    public static function Boleto($version = null)
    {
        $service = self::GetService('Boleto');

        switch (self::GetVersion($service, $version)) {
            case 'v2':
                $dto = new \PagueVeloz\Api\v2\Dto\BoletoDTO();
                $service = new \PagueVeloz\Api\v2\Boleto($dto);
                break;
            case 'v3':
                $dto = new \PagueVeloz\Api\v3\Dto\BoletoDTO();
                $service = new \PagueVeloz\Api\v3\Boleto($dto);
                break;

        }

        return $service;
    }

    public static function ContaBancaria($version = null)
    {
        $service = self::GetService('ContaBancaria');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\ContaBancariaDTO();
                $service = new \PagueVeloz\Api\v1\ContaBancaria($dto);
                break;

            case 'v2':
                $dto = new \PagueVeloz\Api\v2\Dto\ContaBancariaDTO();
                $service = new \PagueVeloz\Api\v2\ContaBancaria($dto);
                break;

        }

        return $service;
    }

    public static function DefaultBoleto($version = null)
    {
        $service = self::GetService('DefaultBoleto');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\DefaultBoletoDTO();
                $service = new \PagueVeloz\Api\v1\DefaultBoleto($dto);
                break;

        }

        return $service;
    }

    public static function MensagemSMS($version = null)
    {
        $service = self::GetService('MensagemSMS');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\MensagemSMSDTO();
                $service = new \PagueVeloz\Api\v1\MensagemSMS($dto);
                break;

        }

        return $service;
    }

    public static function UsuarioCliente($version = null)
    {
        $service = self::GetService('UsuarioCliente');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\UsuarioClienteDTO();
                $service = new \PagueVeloz\Api\v1\UsuarioCliente($dto);
                break;

        }

        return $service;
    }

    public static function Transferencia($version = null)
    {
        $service = self::GetService('Transferencia');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\TransferenciaDTO();
                $service = new \PagueVeloz\Api\v1\Transferencia($dto);
                break;
            case 'v2':
                $dto = new \PagueVeloz\Api\v2\Dto\TransferenciaDTO();
                $service = new \PagueVeloz\Api\v2\Transferencia($dto);
                break;

        }

        return $service;
    }

    public static function Tarifa($version = null)
    {
        $service = self::GetService('Tarifa');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\Tarifa();
                break;

        }

        return $service;
    }

    public static function TarifarBoleto($version = null)
    {
        $service = self::GetService('TarifarBoleto');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\TarifarBoletoDTO();
                $service = new \PagueVeloz\Api\v1\TarifarBoleto($dto);
                break;

        }

        return $service;
    }

    public static function Extrato($version = null)
    {
        $service = self::GetService('Cep');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\Extrato();
                break;

        }

        return $service;
    }

    public static function CreditoSMS($version = null)
    {
        $service = self::GetService('Cep');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\v1\CreditoSMS();
                break;

        }

        return $service;
    }

    public static function Consultar($version = null)
    {
        $service = self::GetService('Consultar');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\ConsultarDTO();
                $service = new \PagueVeloz\Api\v1\Consultar($dto);
                break;
            case 'v2':
                $dto = new \PagueVeloz\Api\v2\Dto\ConsultarDTO();
                $service = new \PagueVeloz\Api\v2\Consultar($dto);
                break;

        }

        return $service;
    }

    public static function Cliente($version = null)
    {
        $service = self::GetService('Cep');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\v1\Dto\ClienteDTO();

                $service = new \PagueVeloz\Api\v1\Cliente($dto);
                break;

        }

        return $service;
    }

    public static function BandeirasCartao($version = null)
    {
        $service = self::GetService('BandeirasCartao');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\Cartao\v1\BandeirasCartao();
                break;

        }

        return $service;
    }

    public static function Parcelamento($version = null)
    {
        $service = self::GetService('Parcelamento');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\Cartao\v1\Dto\ParcelamentoDTO();
                $service = new \PagueVeloz\Api\Cartao\v1\Parcelamento($dto);
                break;

        }

        return $service;
    }

    public static function Transacao($version = null)
    {
        $service = self::GetService('Transacao');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\Cartao\v1\Dto\TransacaoDTO();
                $service = new \PagueVeloz\Api\Cartao\v1\Transacao($dto);
                break;

        }

        return $service;
    }

    public static function Pagamento($version = null)
    {
        $service = self::GetService('Pagamento');

        switch (self::GetVersion($service, $version)) {
            case 'v1':
                $dto = new \PagueVeloz\Api\Cartao\v1\Dto\PagamentoDTO();
                $service = new \PagueVeloz\Api\Cartao\v1\Pagamento($dto);
                break;

        }

        return $service;
    }

    public static function Confirmacao($version = null)
    {
        $service = self::GetService('Confirmacao');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $dto = new \PagueVeloz\Api\Cartao\v1\Dto\ConfirmacaoDTO();
                $service = new \PagueVeloz\Api\Cartao\v1\Confirmacao($dto);
                break;

        }

        return $service;
    }

    public static function CartaoHabilitado($version = null)
    {
        $service = self::GetService('CartaoHabilitado');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\Cartao\v1\Habilitado();
                break;

        }

        return $service;
    }

    public static function ConsultaCartao($version = null)
    {
        $service = self::GetService('ConsultaCartao');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\Cartao\v1\ConsultaCartao();
                break;

        }

        return $service;
    }

    public static function Formulario($version = null)
    {
        $service = self::GetService('Formulario');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\Cartao\v1\Formulario();
                break;

        }

        return $service;
    }

    public static function PinPadOperacoes($version = null)
    {
        $service = self::GetService('PinPadOperacoes');

        switch (self::GetVersion($service, $version)) {
            case 'v1':

                $service = new \PagueVeloz\Api\Cartao\v1\Operacoes();
                break;

        }

        return $service;
    }
}
