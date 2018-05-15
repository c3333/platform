<?php declare(strict_types=1);

namespace Shopware\System\Country\Event\Country;

use Shopware\System\Country\Struct\CountrySearchResult;
use Shopware\Application\Context\Struct\ApplicationContext;
use Shopware\Framework\Event\NestedEvent;

class CountrySearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'country.search.result.loaded';

    /**
     * @var CountrySearchResult
     */
    protected $result;

    public function __construct(CountrySearchResult $result)
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
