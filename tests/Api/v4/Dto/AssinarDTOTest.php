<?php

namespace PagueVeloz\Api\v4\Dto;

use TestCase;
use PagueVeloz\Api\Common\Dto\CepV2DTO;
use PagueVeloz\Api\Common\Dto\CidadeDTO;
use PagueVeloz\Api\Common\Dto\TelefoneDTO;
use PagueVeloz\Api\Common\Dto\UsuarioNaGravacaoDTO;

class AssinarDTOTest extends TestCase {

	protected $dto;

	public function setUp() {
		parent::setUp();

		$this->dto = new AssinarDTO;
	}

	public function testGetNotEmpty()
	{
		$this->assertTrue(is_array($this->dto->getNotEmpty()));
	}

	public function testSetId()
	{
		$id = $this->faker->randomNumber;

		$this->dto->setId($id);

		$this->assertAttributeEquals($id, 'Id', $this->dto);

		return $id;
	}

	/**
	 * @depends testSetId
	 */
	public function testGetId($id)
	{
		$this->dto->setId($id);

		$this->assertEquals($id, $this->dto->getId());
	}

	public function testSetNome()
	{
		$nome = $this->faker->name;

		$this->dto->setNome($nome);

		$this->assertAttributeEquals($nome, 'Nome', $this->dto);

		return $nome;
	}

	public function testSetNomeEmpresa()
	{
		$nome = $this->faker->company;

		$this->dto->setNome($nome);

		$this->assertAttributeEquals($nome, 'Nome', $this->dto);

		return $nome;
	}

	/**
	 * @depends testSetNome
	 */
	public function testGetNome($nome)
	{
		$this->dto->setNome($nome);

		$this->assertEquals($nome, $this->dto->getNome());
	}

	public function testSetDocumentoCPF()
	{
		$documento = $this->faker->cpf(true);

		$this->dto->setDocumento($documento);

		$this->assertAttributeEquals($documento, 'Documento', $this->dto);

		return $documento;
	}

	public function testSetDocumentoCNPJ()
	{
		$documento = $this->faker->cnpj(true);

		$this->dto->setDocumento($documento);

		$this->assertAttributeEquals($documento, 'Documento', $this->dto);

		return $documento;
	}

	/**
	 * @depends testSetDocumentoCPF
	 */
	public function testGetDocumento($documento)
	{
		$this->dto->setDocumento($documento);

		$this->assertEquals($documento, $this->dto->getDocumento());
	}

	public function testSetTipoPessoa()
	{
		$tipoPessoa = $this->faker->randomElement([0,1,2]);

		$this->dto->setTipoPessoa($tipoPessoa);

		$this->assertAttributeEquals($tipoPessoa, 'TipoPessoa', $this->dto);

		return $tipoPessoa;
	}

	/**
	 * @depends testSetTipoPessoa
	 */
	public function testGetTipoPessoa($tipoPessoa)
	{
		$this->dto->setTipoPessoa($tipoPessoa);

		$this->assertEquals($tipoPessoa, $this->dto->getTipoPessoa());
	}

	public function testSetUsuario()
	{
		$usuario = new UsuarioNaGravacaoDTO;
		$usuario->Nome = $this->faker->name;
		$usuario->Email = $this->faker->freeEmail;
		$senha = $this->faker->bothify("P????###");
		$usuario->Senha = $senha;
		$usuario->ConfirmacaoSenha = $senha;

		$this->dto->setUsuario($usuario);

		$this->assertAttributeEquals($usuario, 'Usuario', $this->dto);

		return $usuario;
	}

	/**
	 * @depends testSetUsuario
	 */
	public function testGetUsuario($loginUsuarioDefault)
	{
		$this->dto->setUsuario($loginUsuarioDefault);

		$this->assertEquals($loginUsuarioDefault, $this->dto->getUsuario());
	}

	public function testSetEmail()
	{
		$email = $this->faker->bothify("#?#?#?#?#?#?#?#?#@gmail.com");;

		$this->dto->setEmail($email);

		$this->assertAttributeEquals($email, 'Email', $this->dto);

		return $email;
	}

	/**
	 * @depends testSetEmail
	 */
	public function testGetEmail($email)
	{
		$this->dto->setEmail($email);

		$this->assertEquals($email, $this->dto->getEmail());
	}

	public function testSetUrlNotificacao()
	{
		$url = $this->faker->url;

		$this->dto->setUrlNotificacao($url);

		$this->assertAttributeEquals($url, 'UrlNotificacao', $this->dto);

		return $url;
	}

	/**
	 * @depends testSetUrlNotificacao
	 */
	public function testGetUrlNotificacao($url)
	{
		$this->dto->setUrlNotificacao($url);

		$this->assertEquals($url, $this->dto->getUrlNotificacao());
	}

	public function testSetEndereco()
	{
		$cidade = new CidadeDTO;
		$cidade->setNome($this->faker->city);
		$cidade->setEstado($this->faker->stateAbbr);

		$endereco = new CepV2DTO();
		$endereco->setCidade($cidade);
		$endereco->setLogradouro($this->faker->address);
		$endereco->setNumero(123);
		$endereco->setCEP($this->faker->postcode);
		$endereco->setBairro($this->faker->streetName);
		$endereco->setComplemento($this->faker->randomElement(['casa', 'apartamento']));

		$this->dto->setEndereco($endereco);

		$this->assertAttributeEquals($endereco, 'Endereco', $this->dto);

		return $endereco;
	}

	/**
	 * @depends testSetEndereco
	 */
	public function testGetEndereco($endereco)
	{
		$this->dto->setEndereco($endereco);

		$this->assertEquals($endereco, $this->dto->getEndereco());
	}

	public function testSetCupom()
	{
		$cupom = $this->faker->randomNumber;

		$this->dto->setCupom($cupom);

		$this->assertAttributeEquals($cupom, 'Cupom', $this->dto);

		return $cupom;
	}

	/**
	 * @depends testSetCupom
	 */
	public function testGetCupom($cupom)
	{
		$this->dto->setCupom($cupom);

		$this->assertEquals($cupom, $this->dto->getCupom());
	}

	public function testSetTelefones()
	{
		$telefones = [];
		for ($i=0; $i < 3; $i++) {
			$telefone = new TelefoneDTO;
			$telefone->setNumero($this->faker->numerify("##########"));
			$telefone->setTipo($this->faker->randomElement([1,2,4]));
			$telefone->setObservacao($this->faker->text(10));
			$telefone->setId($this->faker->randomNumber());
			$telefones[] = $telefone;
		}

		$this->dto->setTelefones($telefones);
		$this->assertAttributeEquals($telefones, 'Telefones', $this->dto);
		return $telefones;
	}

	/**
	 * @depends testSetTelefones
	 */
	public function testGetTelefones($telefones)
	{
		$this->dto->setTelefones($telefones);

		$this->assertEquals($telefones, $this->dto->getTelefones());
	}

	public function testSetDataNascimento()
	{
		$dataNascimento = $this->faker->date('Y-m-d H:i:s');
		$this->dto->setDataNascimento($dataNascimento);
		$this->assertAttributeEquals($dataNascimento, 'DataNascimento', $this->dto);
		return $dataNascimento;
	}

	/**
	 * @depends testSetDataNascimento
	 */
	public function testGetDataNascimento($dataNascimento)
	{
		$this->dto->setDataNascimento($dataNascimento);

		$this->assertEquals($dataNascimento, $this->dto->getDataNascimento());
	}

	public function testSetInscricaoEstadual()
	{
		$number = $this->faker->randomNumber;
		$this->dto->setInscricaoEstadual($number);
		$this->assertAttributeEquals($number, 'InscricaoEstadual', $this->dto);
		return $number;
	}

	/**
	 * @depends testSetInscricaoEstadual
	 */
	public function testGetInscricaoEstadual($number)
	{
		$this->dto->setInscricaoEstadual($number);

		$this->assertEquals($number, $this->dto->getInscricaoEstadual());
	}

	public function testSetInscricaoMunicipal()
	{
		$number = $this->faker->randomNumber;
		$this->dto->setInscricaoMunicipal($number);
		$this->assertAttributeEquals($number, 'InscricaoMunicipal', $this->dto);
		return $number;
	}

	/**
	 * @depends testSetInscricaoMunicipal
	 */
	public function testGetInscricaoMunicipal($number)
	{
		$this->dto->setInscricaoMunicipal($number);

		$this->assertEquals($number, $this->dto->getInscricaoMunicipal());
	}
}
