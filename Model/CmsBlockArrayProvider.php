<?php declare(strict_types=1);

namespace Hyva\AdminIntro\Model;

use Hyva\Admin\Api\HyvaGridArrayProviderInterface;
use Magento\Cms\Model\ResourceModel\Block\CollectionFactory as CmsBlockCollectionFactory;

class CmsBlockArrayProvider implements HyvaGridArrayProviderInterface
{
    private $cmsBlockCollectionFactory;

    public function __construct(CmsBlockCollectionFactory $cmsBlockCollectionFactory)
    {
        $this->cmsBlockCollectionFactory = $cmsBlockCollectionFactory;
    }

    public function getHyvaGridData(): array
    {
        $collection = $this->cmsBlockCollectionFactory->create();
        return $collection->walk('getData');
    }
}
