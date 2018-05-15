<?php declare(strict_types=1);

namespace Shopware\Checkout\Order\Event\OrderLineItem;

use Shopware\Checkout\Order\Collection\OrderLineItemBasicCollection;
use Shopware\Application\Context\Struct\ApplicationContext;
use Shopware\Framework\Event\NestedEvent;

class OrderLineItemBasicLoadedEvent extends NestedEvent
{
    public const NAME = 'order_line_item.basic.loaded';

    /**
     * @var ApplicationContext
     */
    protected $context;

    /**
     * @var OrderLineItemBasicCollection
     */
    protected $orderLineItems;

    public function __construct(OrderLineItemBasicCollection $orderLineItems, ApplicationContext $context)
    {
        $this->context = $context;
        $this->orderLineItems = $orderLineItems;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): ApplicationContext
    {
        return $this->context;
    }

    public function getOrderLineItems(): OrderLineItemBasicCollection
    {
        return $this->orderLineItems;
    }
}
