<?php
namespace WdgCafepress\Hydrator;

use \WdgCafepress\Mapper\Product as Mapper,
    \WdgCafepress\Element\Product as ProductElement;

class Product {

    public function hydrate(ProductElement $product, Mapper $mapper)
    {
        $product
            ->setId($mapper->getId())
            ->setName($mapper->getName())
            ->setMerchandiseId($mapper->getMerchandiseId())
            ->setSellPrice($mapper->getSellPrice())
            ->setMarketplacePrice($mapper->getMarketplacePrice())
            ->setCurrencyName($mapper->getCurrencyName())
            ->setCurrencyCode($mapper->getCurrencyCode())
            ->setCurrencySymbol($mapper->getCurrencySymbol())
            ->setDescription($mapper->getDescription())
            ->setMemberId($mapper->getMemberId())
            ->setStoreId($mapper->getStoreId())
            ->setSectionId($mapper->getSectionId())
            ->setDefaultOrientation($mapper->getDefaultOrientation())
            ->setDefaultPerspective($mapper->getDefaultPerspective())
            ->setBasePrice($mapper->getBasePrice())
            ->setShortCaption($mapper->getShortCaption())
            ->setDefaultCaption($mapper->getDefaultCaption())
            ->setShortDescription($mapper->getShortDescription())
            ->setCategoryId($mapper->getCategoryId())
            ->setCategoryCaption($mapper->getCategoryCaption())
            ->setStockAvailability($mapper->getStockAvailability())
            ->setStockAvailabilityStatusId($mapper->getStockAvailabilityStatusId())
            ->setMerchandiseAvailability($mapper->getMerchandiseAvailabilityStatusId())
            ->setMerchandiseAvailabilityStatusId($mapper->getMerchandiseAvailabilityStatusId())
            ->setDefaultProductUri($mapper->getDefaultProductUri())
            ->setMarketplaceUri($mapper->getMarketplaceUri())
            ->setStoreUri($mapper->getStoreUri())
            ->setAdditionalPhotoCount($mapper->getAdditionalPhotoCount())
            ->setIsCalendar($mapper->getIsCalendar())
            ->setIsBook($mapper->getIsBook())
            ->setIsCD($mapper->getIsCD())
            ->setIsAudioCD($mapper->getIsAudioCD())
            ->setIsPoster($mapper->getIsPoster())
            ->setLegacyHeightValue($mapper->getLegacyHeightValue())
            ->setLegacyWidthValue($mapper->getLegacyWidthValue())
            ->setSortPriority($mapper->getSortPriority())
            ->setIsSellable($mapper->getIsSellable())
            ->setIsFullfillment($mapper->getIsFullfillment());
        
        return $this;
    }

}
