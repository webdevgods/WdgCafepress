<?php
namespace WdgCafepress\Mapper;

class StoreSection extends Base
{
    /**
     * Get Id
     * 
     * @return string
     */
    public function getId()
    {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@id");
    }

    /**
     * Get Member Id
     * 
     * @return string
     */
    public function getMemberId() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@memberId");
    }

    /**
     * Get 
     * 
     * @return string
     */
    public function getStoreId() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@storeId");
    }

    /**
     * Get ParentSectionId
     * 
     * @return string
     */
    public function getParentSectionId() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@parentSectionId");
    }

    /**
     * Get Caption
     * 
     * @return string
     */
    public function getCaption() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@caption");
    }

    /**
     * Get Description
     * 
     * @return string
     */
    public function getDescription() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@description");
    }

    /**
     * Get Visible
     * 
     * @return string
     */
    public function getVisible() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@visible");
    }

    /**
     * Get Active
     * 
     * @return string
     */
    public function getActive() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@active");
    }

    /**
     * Get DefaultMarkupProfile
     * 
     * @return string
     */
    public function getDefaultMarkupProfile() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@defaultMarkupProfile");
    }

    /**
     * Get DefaultProductMarkup
     * 
     * @return string
     */
    public function getDefaultProductMarkup() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@defaultProductMarkup");
    }

    /**
     * Get SectionImageId
     * 
     * @return string
     */
    public function getSectionImageId() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@sectionImageId");
    }

    /**
     * Get SectionImageWidth
     * 
     * @return string
     */
    public function getSectionImageWidth() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@sectionImageWidth");
    }

    /**
     * Get SectionImageHeight
     * 
     * @return string
     */
    public function getSectionImageHeight() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@sectionImageHeight");
    }

    /**
     * Get SortPriority
     * 
     * @return string
     */
    public function getSortPriority() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@sortPriority");
    }

    /**
     * Get ItemsAcross
     * 
     * @return string
     */
    public function getItemsAcross() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@itemsAcross");
    }

    /**
     * Get CategoryId
     * 
     * @return string
     */
    public function getCategoryId() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@categoryId");
    }

    /**
     * Get ImageType
     * 
     * @return string
     */
    public function getImageType() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@imageType");
    }

    /**
     * Get DefaultProductDescription
     * 
     * @return string
     */
    public function getDefaultProductDescription() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@defaultProductDescription");
    }

    /**
     * Get DefaultProductImageId
     * 
     * @return string
     */
    public function getDefaultProductImageId() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@defaultProductImageId");
    }

    /**
     * Get DefaultProductName
     * 
     * @return string
     */
    public function getDefaultProductName() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@defaultProductName");
    }

    /**
     * Get Teaser
     * 
     * @return string
     */
    public function getTeaser() {
        return $this->simpleXmlElement->getXPathValue("//storeSection/@teaser");
    }
}
