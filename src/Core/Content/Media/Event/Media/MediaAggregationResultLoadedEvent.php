<?php declare(strict_types=1);

namespace Shopware\Content\Media\Event\Media;

use Shopware\Framework\ORM\Search\AggregatorResult;
use Shopware\Application\Context\Struct\ApplicationContext;
use Shopware\Framework\Event\NestedEvent;

class MediaAggregationResultLoadedEvent extends NestedEvent
{
    public const NAME = 'media.aggregation.result.loaded';

    /**
     * @var AggregatorResult
     */
    protected $result;

    public function __construct(AggregatorResult $result)
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

    public function getResult(): AggregatorResult
    {
        return $this->result;
    }
}
