<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$config['payment_gateways'] = [
    'Dinheiro' => [
		'name' => 'Dinheiro',
		],
		 'payment_methods' => [
            [
                'name' => 'À vista',
                'value' => 'a vista',
            ]
        ],
		'transaction_status' => [
            'pending' => 'O usuário ainda não concluiu o processo de pagamento',
            'approved' => 'O pagamento foi aprovado e credenciado',
            'authorized' => 'O pagamento foi autorizado, mas ainda não foi capturado',
            'in_process' => 'O pagamento está sendo revisado',
            'in_mediation' => 'Os usuários iniciaram uma disputa',
            'rejected' => 'O pagamento foi rejeitado, o usuário pode tentar o pagamento novamente',
            'cancelled' => 'O pagamento foi cancelado por uma das partes ou porque o prazo para pagamento expirou',
            'refunded' => 'O pagamento foi reembolsado ao usuário',
            'charged_back' => 'Foi feito um estorno no cartão de crédito do comprador'
        ],
];
