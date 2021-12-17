<?php 

use PHPUnit\Framework\TestCase;
use PerseuTeste\DigitalCep\Search;
class SearchTest extends TestCase{
    /**
     *  @dataProvider dadosTeste
     */
    public function testGetAddressFromZipCode(string $input, array $waitfor){
        $result = new Search;
        $result = $result->getAddressFromZipCode($input);

   
        $this->assertEquals($waitfor, $result);
    }

    public function dadosTeste(){
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                   "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",          
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço qualquer" => [
                "03624010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luís Asson",
                    "complemento" => "",
                   "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",          
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ],
            ]
        ];
    }
}