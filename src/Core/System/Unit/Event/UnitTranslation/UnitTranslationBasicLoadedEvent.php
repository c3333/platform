<?php declare(strict_types=1);

namespace Shopware\System\Unit\Event\UnitTranslation;

use Shopware\System\Unit\Collection\UnitTranslationBasicCollection;
use Shopware\Application\Context\Struct\ApplicationContext;
use Shopware\Framework\Event\NestedEvent;

class UnitTranslationBasicLoadedEvent extends NestedEvent
{
    public const NAME = 'unit_translation.basic.loaded';

    /**
     * @var ApplicationContext
     */
    protected $context;

    /**
     * @var UnitTranslationBasicCollection
     */
    protected $unitTranslations;

    public function __construct(UnitTranslationBasicCollection $unitTranslations, ApplicationContext $context)
    {
        $this->context = $context;
        $this->unitTranslations = $unitTranslations;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): ApplicationContext
    {
        return $this->context;
    }

    public function getUnitTranslations(): UnitTranslationBasicCollection
    {
        return $this->unitTranslations;
    }
}
