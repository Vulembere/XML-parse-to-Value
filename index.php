<?php

$var = '<?xml version=\'1.0\' encoding=\'UTF-8\'?>
    <S:Envelope xmlns:S="http://schemas.xmlsoap.org/soap/envelope/\">
        <S:Body>
            <ns2:TcheckBalResponse xmlns:ns2="http://services.ws1.com/">
                <return>
                    <balance> 0,634</balance>
                    <partnId>0000</partnId>
                    <resultCode>0</resultCode>
                    <resultDesc>"You have currently 0  USD available on your account and Your Normal wallet of MFS provider ORANGE MONEY is debited with service charge 0 USD, Commission 0 USD and 0 FCFA set aside for pending confirmation_fr"</resultDesc>
                    <transId>43434343434343434343</transId>
                </return>
            </ns2:TcheckBalResponse>
        </S:Body>
    </S:Envelope>';


$reponse = getXmlValue($var,'return'); // Appel de la fonction

echo  $reponse;

function getXmlValue($xml,$value){

    $tag = '<'.$value.'>'; // Création du premier tag dans lequel on veut extraire la valeur ex: <value>
    $tagNext = '</'.$value.'>'; // Création deuxieme tag dans lequel on veut extraire la valeur ex : </value>

    $x1 = strlen(substr($xml,0,strpos($xml,$tag))); // Tag de la premiere valeur

    $str = substr($xml,($x1+strlen($tag)),strlen($xml)); // Tag de la deuxieme valeur

    $index = substr($str,0,strpos($str,$tagNext)); // Tag de la derniere valeur

return  $index;
}
