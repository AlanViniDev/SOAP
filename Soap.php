<?php

include ("nusoap.php");

class Soap
{
    public function Request()
    {
        $client = new nusoap_client("http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL",true);
        
        $ap_param = array(
		'nCdEmpresa'=>'',
		'sDsSenha'=>'',
		'nCdServico'=>'41106',
		'sCepOrigem'=>'99010150',
		'sCepDestino'=>'78896000',
		'nVlPeso'=>'1',
		'nCdFormato'=>'1',
		'nVlAltura'=>'20',
		'nVlLargura'=>'30',
		'nVlDiametro'=>'40',
		'nVlComprimento'=>'20',
		'sCdMaoPropria'=>'S',
		'nVlValorDeclarado'=>'200',
		'sCdAvisoRecebimento'=>'S'
	);
        
        $resultado = $client->call('CalcPrecoPrazo',$ap_param);
        print_r($resultado);  
    }
}

$execute = new Soap();
$execute->Request();
