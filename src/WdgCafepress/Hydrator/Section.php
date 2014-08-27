<?php

namespace WdgCafepress\Hydrator;

use WdgCafepress\Mapper\StoreSection as Mapper,
    \WdgCafepress\Element\Section as SectionElement;

class Section {

    public function hydrate(SectionElement $section, Mapper $mapper)
    {
        $section
            ->setId($mapper->getId())
            ->setMemberId($mapper->getMemberId())
            ->setStoreId($mapper->getStoreId())
            ->setParentSectionId($mapper->getParentSectionId())
            ->setCaption($mapper->getCaption())
            ->setDescription($mapper->getDescription())
            ->setVisible($mapper->getVisible())
            ->setActive($mapper->getActive())
            ->setDefaultMarkupProfile($mapper->getDefaultMarkupProfile())
            ->setDefaultProductMarkup($mapper->getDefaultProductMarkup())
            ->setSectionImageId($mapper->getSectionImageId())
            ->setSectionImageWidth($mapper->getSectionImageWidth())
            ->setSectionImageHeight($mapper->getSectionImageHeight())
            ->setSortPriority($mapper->getSortPriority())
            ->setItemsAcross($mapper->getItemsAcross())
            ->setCategoryId($mapper->getCategoryId())
            ->setImageType($mapper->getImageType())
            ->setDefaultProductDescription($mapper->getDefaultProductDescription())
            ->setDefaultProductImageId($mapper->getDefaultProductImageId())
            ->setDefaultProductName($mapper->getDefaultProductName())
            ->setTeaser($mapper->getTeaser());
        
        return $this;
    }

}
