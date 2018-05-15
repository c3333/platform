<?php declare(strict_types=1);

namespace Shopware\Checkout\Order\Event\OrderTransaction;

use Shopware\Checkout\Order\Struct\OrderTransactionSearchResult;
use Shopware\Application\Context\Struct\ApplicationContext;
use Shopware\Framework\Event\NestedEvent;

class OrderTransactionSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'order_transaction.search.result.loaded';

    /**
     * @var OrderTransactionSearchResult
     */
    protected $result;

    public function __construct(OrderTransactionSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): ApplicationContext
    {
        return $this->result->getContext();
    }
}
