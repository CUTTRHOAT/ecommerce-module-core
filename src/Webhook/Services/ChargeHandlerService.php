<?php

namespace Mundipagg\Core\Webhook\Services;

use Exception;
use Mundipagg\Core\Kernel\Aggregates\Charge;
use Mundipagg\Core\Kernel\Exceptions\InvalidParamException;
use Mundipagg\Core\Kernel\Exceptions\NotFoundException;
use Mundipagg\Core\Kernel\Services\APIService;
use Mundipagg\Core\Kernel\Services\ChargeService;
use Mundipagg\Core\Webhook\Aggregates\Webhook;

final class ChargeHandlerService
{
    const COMPONENT_KERNEL = 'Kernel';
    const COMPONENT_RECURRENCE = 'Recurrence';

    /**
     * @var ChargeRecurrenceService|ChargeOrderService
     */
    private $listChargeHandleService;

    /**
     * @param $component
     * @throws Exception
     */
    public function build($component)
    {
        $listChargeHandleService = [
            self::COMPONENT_KERNEL => new ChargeOrderService(),
            self::COMPONENT_RECURRENCE => new ChargeRecurrenceService()
        ];

        if (empty($listChargeHandleService[$component])) {
            throw new Exception('Não foi encontrado o tipo de charge a ser carregado', 400);
        }

        $this->listChargeHandleService = $listChargeHandleService[$component];
    }

    /**
     * @param Webhook $webhook
     * @return mixed
     * @throws InvalidParamException
     * @throws NotFoundException
     * @throws Exception
     */
    public function handle(Webhook $webhook)
    {
        $this->build($webhook->getComponent());

//        $multiMeiosCanceled = $this->tryCancelMultiMeios($webhook);
//        if ($multiMeiosCanceled) {
//            return $multiMeiosCanceled;
//        }

        return $this->listChargeHandleService->handle($webhook);
    }

    public function tryCancelMultiMethods(Webhook $webhook)
    {
        /** @var Charge $charge  */
        $charge = $webhook->getEntity();

        $chargeService = new ChargeService();
        $apiService = new APIService();

        $order = $apiService->getOrder($charge->getOrderId());

        $chargeList = $chargeService->checkHasChargesPaidBetweenFailed(
            $order->getCharges()
        );

        $listResponse = [];
        foreach ($chargeList as $charge) {
            $listResponse = $chargeService->cancelJustInMundiPagg($charge);
        }

        return $listResponse;
    }
}
