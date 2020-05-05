<?php

namespace Mundipagg\Core\Kernel\I18N;

use Mundipagg\Core\Kernel\Abstractions\AbstractI18NTable;

class PTBR extends AbstractI18NTable
{
    protected function getTable()
    {
        return [
            'Invoice created: #%s.' => 'Invoice criada: #%s',
            'Invoice canceled: #%s.' => 'Invoice cancelada: #%s',
            'Webhook received: %s.%s' => 'Webhook recebido: %s.%s',
            'Order paid.' => 'Pedido pago.',
            'Order created at Mundipagg. Id: %s' => 'Pedido criado na Mundipagg. Id %s',
            'Order waiting for online retries at Mundipagg.' => 'Pedido aguardando por retentativas online na Mundipagg.',
            'Order canceled.' => 'Pedido cancelado.',
            'Payment received: %.2f' => 'Pagamento recebido: %.2f',
            'Canceled amount: %.2f' => 'Quantia cancelada: %.2f',
            'Refunded amount: %.2f' => 'Quantia estornada: %.2f',
            'Partial Payment' => 'Pagamento Parcial',
            'Charge canceled.' => 'Cobrança cancelada.',
            'Charge not found' => 'Cobrança não encontrada',
            'Creditmemo created: #%s.' => 'Creditmemo criado: #%s.',
            'until now' => 'até agora',
            'Extra amount paid: %.2f' => "Quantia extra paga: %.2f",
            "Order '%s' canceled at Mundipagg" => "Pedido '%s' cancelado na Mundipagg",
            'Remaining amount: %.2f' => "Quantidade faltante: %.2f",
            "Some charges couldn't be canceled at Mundipagg. Reasons:" => "Algumas cobranças não puderam ser canceladas na Mundipagg. Razões:",
            "without interest" => "sem juros",
            "with %.2f%% of interest" => "com %.2f%% de juros",
            "%dx of %s %s (Total: %s)" => "%dx de %s %s (Total: %s)",
            "Order payment failed" => "Pagamento do pedido falhou",
            "The order will be canceled" => "O pedido será cancelado",
            "An error occurred when trying to create the order. Please try again. Error Reference: %s" => 'Ocorreu um erro ao tentar criar o pedido. Por favor, tente novamente. Referência do erro: %s',
            "Can't cancel current order. Please cancel it by Mundipagg panel" => "Não foi possível cancelar o pedido. Por favor, realize o cancelamento no portal Mundipagg.",
            "Charge canceled with success" => "Charge cancelada com sucesso",
            'Invalid address. Please fill the street lines and try again.' => 'Endereço inválido. Preencha rua, número e bairro e tente novamente.',
            "The informed card couldn't be deleted." => "O cartão informado não pode ser deletado.",
            "The card '%s' was deleted." => "O cartão '%s' foi deletado.",
            "The card '%s' couldn't be deleted." => "O cartão '%s' não pôde ser deletado.",
            "Different paid amount for this invoice. Paid value: %.2f" => "Esta Invoice foi paga com um valor diferente do Grand Total do pedido. Valor pago: %.2f",
            "The %s should not be empty!" => "O campo %s não deve estar vazio",
            "street" => "rua",
            "number" => "número",
            "neighborhood" => "bairro",
            "city" => "cidade",
            "country" => "país",
            "state" => "estado",
            "document" => "CPF",
            "Can't create order." => "Não foi possível criar o pedido",
            'Invalid address configuration. Please fill the address configuration on admin panel.' => 'Configurações de endereço inválidas. Preencha as configurações de endereço no painel de administração',
            'week' => "semana",
            'weeks' => "semanas",
            'month' => "mês",
            'months' => "meses",
            'year' => "ano",
            'years' => "anos",
            'discount' => "desconto",
            'Credit Card' => "Cartão de Crédito",
            'Subscription invoice paid.' => 'Fatura de assinatura paga.',
            'invoice' => 'fatura',
            'Subscription canceled with success!' => "Assinatura cancelada com sucesso!",
            'Error on cancel subscription' => "Erro ao cancelar a assinatura",
            'Subscription not found' => "Assinatura não encontrada",
            'Subscription already canceled' => "Assinatura já está cancelada",
            'monthly' => 'Mensal',
            'bimonthly' => 'Bimestral',
            'quarterly' => 'Trimestral',
            'yearly' => 'Anual',
            'biennial' => 'Bienal',
            'Subscription created at Mundipagg. Id: %s' => 'Assinatura criada na Mundipagg. Id %s',
            'weekly' => 'Semanal',
            'semiannual' => 'Semestral',
            'Invalid address configuration. Please fill the address configuration on admin panel.' => 'Configurações de endereço inválido. Preencha as configurações de endereço no painel de administração',
            'New order status: %s' => 'Novo status do pedido: %s',
            'Subscription invoice created: %.2f' => 'Fatura de assinatura criada: %.2f',
            'Url boleto' => 'Boleto url',
            'You can only add two or more subscriptions to your cart that have the same payment method (credit card or boleto) and same frequency (monthly, annual, etc)' => 'Você só pode adicionar duas ou mais assinaturas que possuam o mesmo tipo de pagamento (cartão e ou boleto) e mesma frequência (mensal, semestral, anual...).',
            "It's not possible to have any other product with a product plan" => 'Não é possível ter nenhum outro tipo de produto no carrinho, junto com um produto plano',
            'You must have only one product plan in the cart' => 'Você só pode ter um produto plano no carrinho',
            "The sum of payments is different than the order amount!" => "A soma do total do pagamento é diferente do que o total do pedido!",
        ];
    }
}