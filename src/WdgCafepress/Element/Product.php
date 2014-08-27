<?php

namespace WdgCafepress\Element;

class Product {

    public $id;
    public $name;
    public $merchandiseId;
    public $sellPrice;
    public $marketplacePrice;
    public $currencyName;
    public $currencyCode;
    public $currencySymbol;
    public $description;
    public $memberId;
    public $storeId;
    public $sectionId;
    public $defaultOrientation;
    public $defaultPerspective;
    public $basePrice;
    public $shortCaption;
    public $defaultCaption;
    public $shortDescription;
    public $categoryId;
    public $categoryCaption;
    public $stockAvailability;
    public $stockAvailabilityStatusId;
    public $merchandiseAvailability;
    public $merchandiseAvailabilityStatusId;
    public $defaultProductUri;
    public $marketplaceUri;
    public $storeUri;
    public $additionalPhotoCount;
    public $isCalendar;
    public $isBook;
    public $isCD;
    public $isAudioCD;
    public $isPoster;
    public $legacyHeightValue;
    public $legacyWidthValue;
    public $sortPriority;
    public $isSellable;
    public $isFullfillment;
    public $colors;
    public $sizes;
    public $perspectives;
    public $mediaConfiguration;
    public $productImages;

    /**
     * 
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param string $id
     * @return \WdgCafepress\Element\Product
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 
     * @param string $name
     * @return \WdgCafepress\Element\Product
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getMerchandiseId() {
        return $this->merchandiseId;
    }

    /**
     * 
     * @param string $merchandiseId
     * @return \WdgCafepress\Element\Product
     */
    public function setMerchandiseId($merchandiseId) {
        $this->merchandiseId = $merchandiseId;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getSellPrice() {
        return $this->sellPrice;
    }

    /**
     * 
     * @param string $sellPrice
     * @return \WdgCafepress\Element\Product
     */
    public function setSellPrice($sellPrice) {
        $this->sellPrice = $sellPrice;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getMarketplacePrice() {
        return $this->marketplacePrice;
    }

    /**
     * 
     * @param string $marketplacePrice
     * @return \WdgCafepress\Element\Product
     */
    public function setMarketplacePrice($marketplacePrice) {
        $this->marketplacePrice = $marketplacePrice;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getCurrencyName() {
        return $this->currencyName;
    }

    /**
     * 
     * @param string $currencyName
     * @return \WdgCafepress\Element\Product
     */
    public function setCurrencyName($currencyName) {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getCurrencyCode() {
        return $this->currencyCode;
    }

    /**
     * 
     * @param string $currencyCode
     * @return \WdgCafepress\Element\Product
     */
    public function setCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getCurrencySymbol() {
        return $this->currencySymbol;
    }

    /**
     * 
     * @param string $currencySymbol
     * @return \WdgCafepress\Element\Product
     */
    public function setCurrencySymbol($currencySymbol) {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * 
     * @param string $description
     * @return \WdgCafepress\Element\Product
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getMemberId() {
        return $this->memberId;
    }

    /**
     * 
     * @param string $memberId
     * @return \WdgCafepress\Element\Product
     */
    public function setMemberId($memberId) {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getStoreId() {
        return $this->storeId;
    }

    /**
     * 
     * @param string $storeId
     * @return \WdgCafepress\Element\Product
     */
    public function setStoreId($storeId) {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getSectionId() {
        return $this->sectionId;
    }

    /**
     * 
     * @param string $sectionId
     * @return \WdgCafepress\Element\Product
     */
    public function setSectionId($sectionId) {
        $this->sectionId = $sectionId;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultOrientation() {
        return $this->defaultOrientation;
    }

    /**
     * 
     * @param string $defaultOrientation
     * @return \WdgCafepress\Element\Product
     */
    public function setDefaultOrientation($defaultOrientation) {
        $this->defaultOrientation = $defaultOrientation;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultPerspective() {
        return $this->defaultPerspective;
    }

    /**
     * 
     * @param string $defaultPerspective
     * @return \WdgCafepress\Element\Product
     */
    public function setDefaultPerspective($defaultPerspective) {
        $this->defaultPerspective = $defaultPerspective;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getBasePrice() {
        return $this->basePrice;
    }

    /**
     * 
     * @param string $basePrice
     * @return \WdgCafepress\Element\Product
     */
    public function setBasePrice($basePrice) {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getShortCaption() {
        return $this->shortCaption;
    }

    /**
     * 
     * @param string $shortCaption
     * @return \WdgCafepress\Element\Product
     */
    public function setShortCaption($shortCaption) {
        $this->shortCaption = $shortCaption;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultCaption() {
        return $this->defaultCaption;
    }

    /**
     * 
     * @param string $defaultCaption
     * @return \WdgCafepress\Element\Product
     */
    public function setDefaultCaption($defaultCaption) {
        $this->defaultCaption = $defaultCaption;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getShortDescription() {
        return $this->shortDescription;
    }

    /**
     * 
     * @param string $shortDescription
     * @return \WdgCafepress\Element\Product
     */
    public function setShortDescription($shortDescription) {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getCategoryId() {
        return $this->categoryId;
    }

    /**
     * 
     * @param string $categoryId
     * @return \WdgCafepress\Element\Product
     */
    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getCategoryCaption() {
        return $this->categoryCaption;
    }

    /**
     * 
     * @param string $categoryCaption
     * @return \WdgCafepress\Element\Product
     */
    public function setCategoryCaption($categoryCaption) {
        $this->categoryCaption = $categoryCaption;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getStockAvailability() {
        return $this->stockAvailability;
    }

    /**
     * 
     * @param string $stockAvailability
     * @return \WdgCafepress\Element\Product
     */
    public function setStockAvailability($stockAvailability) {
        $this->stockAvailability = $stockAvailability;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getStockAvailabilityStatusId() {
        return $this->stockAvailabilityStatusId;
    }

    /**
     * 
     * @param string $stockAvailabilityStatusId
     * @return \WdgCafepress\Element\Product
     */
    public function setStockAvailabilityStatusId($stockAvailabilityStatusId) {
        $this->stockAvailabilityStatusId = $stockAvailabilityStatusId;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getMerchandiseAvailability() {
        return $this->merchandiseAvailability;
    }

    /**
     * 
     * @param string $merchandiseAvailability
     * @return \WdgCafepress\Element\Product
     */
    public function setMerchandiseAvailability($merchandiseAvailability) {
        $this->merchandiseAvailability = $merchandiseAvailability;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getMerchandiseAvailabilityStatusId() {
        return $this->merchandiseAvailabilityStatusId;
    }

    /**
     * 
     * @param string $merchandiseAvailabilityStatusId
     * @return \WdgCafepress\Element\Product
     */
    public function setMerchandiseAvailabilityStatusId($merchandiseAvailabilityStatusId) {
        $this->merchandiseAvailabilityStatusId = $merchandiseAvailabilityStatusId;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultProductUri() {
        return $this->defaultProductUri;
    }

    /**
     * 
     * @param string $defaultProductUri
     * @return \WdgCafepress\Element\Product
     */
    public function setDefaultProductUri($defaultProductUri) {
        $this->defaultProductUri = $defaultProductUri;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getMarketplaceUri() {
        return $this->marketplaceUri;
    }

    /**
     * 
     * @param string $marketplaceUri
     * @return \WdgCafepress\Element\Product
     */
    public function setMarketplaceUri($marketplaceUri) {
        $this->marketplaceUri = $marketplaceUri;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getStoreUri() {
        return $this->storeUri;
    }

    /**
     * 
     * @param string $storeUri
     * @return \WdgCafepress\Element\Product
     */
    public function setStoreUri($storeUri) {
        $this->storeUri = $storeUri;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getAdditionalPhotoCount() {
        return $this->additionalPhotoCount;
    }

    /**
     * 
     * @param string $additionalPhotoCount
     * @return \WdgCafepress\Element\Product
     */
    public function setAdditionalPhotoCount($additionalPhotoCount) {
        $this->additionalPhotoCount = $additionalPhotoCount;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getIsCalendar() {
        return $this->isCalendar;
    }

    /**
     * 
     * @param string $isCalendar
     * @return \WdgCafepress\Element\Product
     */
    public function setIsCalendar($isCalendar) {
        $this->isCalendar = $isCalendar;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getIsBook() {
        return $this->isBook;
    }

    /**
     * 
     * @param string $isBook
     * @return \WdgCafepress\Element\Product
     */
    public function setIsBook($isBook) {
        $this->isBook = $isBook;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getIsCD() {
        return $this->isCD;
    }

    /**
     * 
     * @param string $isCD
     * @return \WdgCafepress\Element\Product
     */
    public function setIsCD($isCD) {
        $this->isCD = $isCD;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getIsAudioCD() {
        return $this->isAudioCD;
    }

    /**
     * 
     * @param string $isAudioCD
     * @return \WdgCafepress\Element\Product
     */
    public function setIsAudioCD($isAudioCD) {
        $this->isAudioCD = $isAudioCD;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getIsPoster() {
        return $this->isPoster;
    }

    /**
     * 
     * @param string $isPoster
     * @return \WdgCafepress\Element\Product
     */
    public function setIsPoster($isPoster) {
        $this->isPoster = $isPoster;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getLegacyHeightValue() {
        return $this->legacyHeightValue;
    }

    /**
     * 
     * @param string $legacyHeightValue
     * @return \WdgCafepress\Element\Product
     */
    public function setLegacyHeightValue($legacyHeightValue) {
        $this->legacyHeightValue = $legacyHeightValue;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getLegacyWidthValue() {
        return $this->legacyWidthValue;
    }

    /**
     * 
     * @param string $legacyWidthValue
     * @return \WdgCafepress\Element\Product
     */
    public function setLegacyWidthValue($legacyWidthValue) {
        $this->legacyWidthValue = $legacyWidthValue;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getSortPriority() {
        return $this->sortPriority;
    }

    /**
     * 
     * @param string $sortPriority
     * @return \WdgCafepress\Element\Product
     */
    public function setSortPriority($sortPriority) {
        $this->sortPriority = $sortPriority;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getIsSellable() {
        return $this->isSellable;
    }

    /**
     * 
     * @param string $isSellable
     * @return \WdgCafepress\Element\Product
     */
    public function setIsSellable($isSellable) {
        $this->isSellable = $isSellable;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getIsFullfillment() {
        return $this->isFullfillment;
    }

    /**
     * 
     * @param string $isFullfillment
     * @return \WdgCafepress\Element\Product
     */
    public function setIsFullfillment($isFullfillment) {
        $this->isFullfillment = $isFullfillment;
        return $this;
    }

}
