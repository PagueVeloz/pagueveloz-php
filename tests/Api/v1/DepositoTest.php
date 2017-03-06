<?php

namespace PagueVeloz\Api\v1;

use TestCase;
use PagueVeloz\PagueVeloz;
use PagueVeloz\Api\v1\Dto\DepositoDTOTest;

class DepositoTest extends TestCase
{
    protected $deposito;

    public function setUp()
    {
        parent::setUp();
        $version = 'v1';
        $this->deposito = PagueVeloz::Deposito($version);
    }

    public function versionDataProvider()
    {
        return [
            ['v1'],
            ['v2'],
            ['v3'],
            ['v4'],
        ];
    }

    /**
     * @dataProvider versionDataProvider
     */
    public function testNew($version)
    {
        $object = PagueVeloz::Assinar($version);
        $class = 'PagueVeloz\Api\\'.$version.'\Assinar';
        $this->assertInstanceOf($class, $object);
    }

    /**
     * @expectedException Exception
     */
    public function testPostThrowExceptionIfNoParams()
    {
        $this->deposito->Post();
    }

    public function testPost()
    {
        $contaBancariaDTO = new \PagueVeloz\Api\v1\Dto\ContaBancariaDTO;
        $contaBancariaDTO->setCodigoBanco($this->faker->numerify("###"))
            ->setCodigoAgencia($this->faker->numerify("###"))
            ->setNumeroConta($this->faker->numerify("####"))
            ->setDescricao($this->faker->text)
            ->setId(1);

        $this->deposito->dto
            ->setValor($this->faker->randomFloat(2,0,100))
            ->setComprovanteBase64(base64_encode($this->faker->text))
            ->setNomeArquivoComprovante($this->faker->lexify("????.pdf"))
            ->setContaBancaria($contaBancariaDTO)
            ->setDataSolicitacao((new \DateTime)->format('Y-m-d'));

        $this->deposito->auth = $this->auth();

        $response = $this->deposito->Post();

        $this->assertTrue(in_array($response->status, [200, 201]), $response->body);
        $this->assertJson($response->body);

        $response = json_decode($response->body, true);
        $this->assertArrayHasKey('Id', $response);

        return $response['Id'];
    }

    /**
     * @depends testPost
     */
    public function testGet($id)
    {
        $this->deposito->auth = $this->auth();

        $response = $this->deposito->Get();

        $this->assertInstanceOf('PagueVeloz\Service\Context\HttpResponse', $response);
        $this->assertEquals(200, $response->status);
        $this->assertJson($response->body);
        $response = json_decode($response->body, true);
        $this->assertGreaterThan(0, count($response));
        foreach($response as $deposito) {
            $this->assertArrayHasKey('Banco', $deposito);
            $this->assertArrayHasKey('Status', $deposito);
            $this->assertArrayHasKey('Valor', $deposito);
            $this->assertArrayHasKey('DataSolicitacao', $deposito);
            $this->assertArrayHasKey('DataProcessamento', $deposito);
            $this->assertArrayHasKey('Id', $deposito);
        }
        $this->assertContains($id, array_column($response, 'Id'));
    }

    /**
     * @depends testPost
     */
    public function testGetById($id)
    {
        $this->deposito->auth = $this->auth();

        $response = $this->deposito->GetById($id);

        $this->assertInstanceOf('PagueVeloz\Service\Context\HttpResponse', $response);
        $this->assertEquals(200, $response->status);
        $this->assertJson($response->body);
        $response = json_decode($response->body, true);
        $response = array_pop($response);
        $this->assertArrayHasKey('Banco', $response);
        $this->assertArrayHasKey('Status', $response);
        $this->assertArrayHasKey('Valor', $response);
        $this->assertArrayHasKey('DataSolicitacao', $response);
        $this->assertArrayHasKey('DataProcessamento', $response);
        $this->assertArrayHasKey('Id', $response);
        $this->assertEquals($id, $response["Id"]);
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testPut()
    {
        $this->deposito->Put(1);
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testDelete()
    {
        $this->deposito->Delete(1);
    }
}
