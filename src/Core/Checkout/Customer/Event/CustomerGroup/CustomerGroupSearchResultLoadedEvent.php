<?php declare(strict_types=1);

namespace Shopware\Checkout\Customer\Event\CustomerGroup;

use Shopware\Checkout\Customer\Struct\CustomerGroupSearchResult;
use Shopware\Application\Context\Struct\ApplicationContext;
use Shopware\Framework\Event\NestedEvent;

class CustomerGroupSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'customer_group.search.result.loaded';

    /**
     * @var CustomerGroupSearchResult
     */
    protected $result;

    public function __construct(CustomerGroupSearchResult $result)
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
