<?php
namespace WdgCafepress\Mapper;

class Product extends Base
{
    /**
     * Get Id
     * 
     * @return string
     */
    public function getId()
    {
        return $this->simpleXmlElement->getXPathValue("//product/@id");
    }

    /**
     * 
     * @return string
     */
    public function getName() {
        return $this->simpleXmlElement->getXPathValue("//product/@name");
    }

    /**
     * 
     * @return string
     */
    public function getMerchandiseId() {
        return $this->simpleXmlElement->getXPathValue("//product/@merchandiseId");
    }

    /**
     * 
     * @return string
     */
    public function getSellPrice() {
        return $this->simpleXmlElement->getXPathValue("//product/@sellPrice");
    }

    /**
     * 
     * @return string
     */
    public function getMarketplacePrice() {
        return $this->simpleXmlElement->getXPathValue("//product/@marketplacePrice");
    }

    /**
     * 
     * @return string
     */
    public function getCurrencyName() {
        return $this->simpleXmlElement->getXPathValue("//product/@currencyName");
    }

    /**
     * 
     * @return string
     */
    public function getCurrencyCode() {
        return $this->simpleXmlElement->getXPathValue("//product/@currencyCode");
    }

    /**
     * 
     * @return string
     */
    public function getCurrencySymbol() {
        return $this->simpleXmlElement->getXPathValue("//product/@currencySymbol");
    }

    /**
     * 
     * @return string
     */
    public function getDescription() {
        return $this->simpleXmlElement->getXPathValue("//product/@description");
    }

    /**
     * 
     * @return string
     */
    public function getMemberId() {
        return $this->simpleXmlElement->getXPathValue("//product/@memberId");
    }

    /**
     * 
     * @return string
     */
    public function getStoreId() {
        return $this->simpleXmlElement->getXPathValue("//product/@storeId");
    }

    /**
     * 
     * @return string
     */
    public function getSectionId() {
        return $this->simpleXmlElement->getXPathValue("//product/@sectionId");
    }

    /**
     * 
     * @return string
     */
    public function getDefaultOrientation() {
        return $this->simpleXmlElement->getXPathValue("//product/@defaultOrientation");
    }

    /**
     * 
     * @return string
     */
    public function getDefaultPerspective() {
        return $this->simpleXmlElement->getXPathValue("//product/@defaultPerspective");
    }

    /**
     * 
     * @return string
     */
    public function getBasePrice() {
        return $this->simpleXmlElement->getXPathValue("//product/@basePrice");
    }

    /**
     * 
     * @return string
     */
    public function getShortCaption() {
        return $this->simpleXmlElement->getXPathValue("//product/@shortCaption");
    }

    /**
     * 
     * @return string
     */
    public function getDefaultCaption() {
        return $this->simpleXmlElement->getXPathValue("//product/@defaultCaption");
    }

    /**
     * 
     * @return string
     */
    public function getShortDescription() {
        return $this->simpleXmlElement->getXPathValue("//product/@shortDescription");
    }

    /**
     * 
     * @return string
     */
    public function getCategoryId() {
        return $this->simpleXmlElement->getXPathValue("//product/@categoryId");
    }

    /**
     * 
     * @return string
     */
    public function getCategoryCaption() {
        return $this->simpleXmlElement->getXPathValue("//product/@categoryCaption");
    }

    /**
     * 
     * @return string
     */
    public function getStockAvailability() {
        return $this->simpleXmlElement->getXPathValue("//product/@stockAvailability");
    }

    /**
     * 
     * @return string
     */
    public function getStockAvailabilityStatusId() {
        return $this->simpleXmlElement->getXPathValue("//product/@stockAvailabilityStatusId");
    }

    /**
     * 
     * @return string
     */
    public function getMerchandiseAvailability() {
        return $this->simpleXmlElement->getXPathValue("//product/@merchandiseAvailability");
    }

    /**
     * 
     * @return string
     */
    public function getMerchandiseAvailabilityStatusId() {
        return $this->simpleXmlElement->getXPathValue("//product/@merchandiseAvailabilityStatusId");
    }

    /**
     * 
     * @return string
     */
    public function getDefaultProductUri() {
        return $this->simpleXmlElement->getXPathValue("//product/@defaultProductUri");
    }

    /**
     * 
     * @return string
     */
    public function getMarketplaceUri() {
        return $this->simpleXmlElement->getXPathValue("//product/@marketplaceUri");
    }

    /**
     * 
     * @return string
     */
    public function getStoreUri() {
        return $this->simpleXmlElement->getXPathValue("//product/@storeUri");
    }

    /**
     * 
     * @return string
     */
    public function getAdditionalPhotoCount() {
        return $this->simpleXmlElement->getXPathValue("//product/@additionalPhotoCount");
    }

    /**
     * 
     * @return string
     */
    public function getIsCalendar() {
        return $this->simpleXmlElement->getXPathValue("//product/@isCalendar");
    }

    /**
     * 
     * @return string
     */
    public function getIsBook() {
        return $this->simpleXmlElement->getXPathValue("//product/@isBook");
    }

    /**
     * 
     * @return string
     */
    public function getIsCD() {
        return $this->simpleXmlElement->getXPathValue("//product/@isCD");
    }

    /**
     * 
     * @return string
     */
    public function getIsAudioCD() {
        return $this->simpleXmlElement->getXPathValue("//product/@isAudioCD");
    }

    /**
     * 
     * @return string
     */
    public function getIsPoster() {
        return $this->simpleXmlElement->getXPathValue("//product/@isPoster");
    }

    /**
     * 
     * @return string
     */
    public function getLegacyHeightValue() {
        return $this->simpleXmlElement->getXPathValue("//product/@legacyHeightValue");
    }

    /**
     * 
     * @return string
     */
    public function getLegacyWidthValue() {
        return $this->simpleXmlElement->getXPathValue("//product/@legacyWidthValue");
    }

    /**
     * 
     * @return string
     */
    public function getSortPriority() {
        return $this->simpleXmlElement->getXPathValue("//product/@sortPriority");
    }

    /**
     * 
     * @return string
     */
    public function getIsSellable() {
        return $this->simpleXmlElement->getXPathValue("//product/@isSellable");
    }

    /**
     * 
     * @return string
     */
    public function getIsFullfillment() {
        return $this->simpleXmlElement->getXPathValue("//product/@isFullfillment");
    }
}
