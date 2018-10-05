<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 04/10/18
 * Time: 11:17
 */

require_once __DIR__ . '/boletophp-master/boleto_bradesco.php';

$invoice = filter_input(INPUT_GET, 'invoice', FILTER_VALIDATE_INT);

if($invoice === 10) {

    $invoice = array(
        'client_name' => 'Robson V. Leite',
        'address1' => 'Rua dos bobos, 0',
        'address2' => 'Floripa/SC - CEP: 88048-301',
        'value' => '123,45'
    );

} elseif ($invoice === 11) {

    $invoice = array(
        'client_name' => 'Kaue Francisquini',
        'address1' => 'Rua dos bobos, 123',
        'address2' => 'Floripa/SC - CEP: 88048-301',
        'value' => '321,89'
    );

} else {

    $invoice = array(
        'client_name' => 'Gah Morandi',
        'address1' => 'Rua dos bobos, 333',
        'address2' => 'Floripa/SC - CEP: 88048-301',
        'value' => '531,65'
    );

}

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $invoice['client_name'];
$dadosboleto["endereco1"] = $invoice['address1'];
$dadosboleto["endereco2"] = $invoice['address2'];
$dadosboleto["valor_boleto"] = $invoice['value'];
$dadosboleto["valor_unitario"] = $dadosboleto["valor_boleto"];

require_once __DIR__ . '/boletophp-master/include/funcoes_bradesco.php';
require_once __DIR__ . '/boletophp-master/include/layout_bradesco.php';