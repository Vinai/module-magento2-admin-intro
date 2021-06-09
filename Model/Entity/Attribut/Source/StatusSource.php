<?php declare(strict_types=1);

namespace Hyva\AdminIntro\Model\Entity\Attribut\Source;

use Magento\Framework\Data\OptionSourceInterface;

class StatusSource implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Disabled')],
            ['value' => 1, 'label' => __('Enabled')],
        ];
    }
}
