<?php

namespace WdgCafepress\Element;

class Section {

    public $id;
    public $memberId;
    public $storeId;
    public $parentSectionId;
    public $caption;
    public $description;
    public $visible;
    public $active;
    public $defaultMarkupProfile;
    public $defaultProductMarkup;
    public $sectionImageId;
    public $sectionImageWidth;
    public $sectionImageHeight;
    public $sortPriority;
    public $itemsAcross;
    public $categoryId;
    public $imageType;
    public $defaultProductDescription;
    public $defaultProductImageId;
    public $defaultProductName;
    public $teaser;

    /**
     * Set id
     * @param string $id
     * @return \WdgCafepress\Element\Section
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     * 
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set Member Id
     * 
     * @param string $memberId
     * @return \WdgCafepress\Element\Section
     */
    public function setMemberId($memberId) {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get Member Id
     * 
     * @return string
     */
    public function getMemberId() {
        return $this->memberId;
    }

    /**
     * Set StoreId
     * 
     * @param string $storeId
     * @return \WdgCafepress\Element\Section
     */
    public function setStoreId($storeId) {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get 
     * 
     * @return string
     */
    public function getStoreId() {
        return $this->storeId;
    }

    /**
     * Set ParentSectionId
     * 
     * @param string $parentSectionId
     * @return \WdgCafepress\Element\Section
     */
    public function setParentSectionId($parentSectionId) {
        $this->parentSectionId = $parentSectionId;

        return $this;
    }

    /**
     * Get ParentSectionId
     * 
     * @return string
     */
    public function getParentSectionId() {
        return $this->parentSectionId;
    }

    /**
     * Set Caption
     * 
     * @param string $caption
     * @return \WdgCafepress\Element\Section
     */
    public function setCaption($caption) {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get Caption
     * 
     * @return string
     */
    public function getCaption() {
        return $this->caption;
    }

    /**
     * Set Description
     * 
     * @param string $description
     * @return \WdgCafepress\Element\Section
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Description
     * 
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set Visible
     * 
     * @param string $visible
     * @return \WdgCafepress\Element\Section
     */
    public function setVisible($visible) {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get Visible
     * 
     * @return string
     */
    public function getVisible() {
        return $this->visible;
    }

    /**
     * Set Active
     * 
     * @param string $active
     * @return \WdgCafepress\Element\Section
     */
    public function setActive($active) {
        $this->active = $active;

        return $this;
    }

    /**
     * Get Active
     * 
     * @return string
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Set DefaultMarkupProfile
     * 
     * @param string $defaultMarkupProfile
     * @return \WdgCafepress\Element\Section
     */
    public function setDefaultMarkupProfile($defaultMarkupProfile) {
        $this->defaultMarkupProfile = $defaultMarkupProfile;

        return $this;
    }

    /**
     * Get DefaultMarkupProfile
     * 
     * @return string
     */
    public function getDefaultMarkupProfile() {
        return $this->defaultMarkupProfile;
    }

    /**
     * Set DefaultProductMarkup
     * 
     * @param string $defaultProductMarkup
     * @return \WdgCafepress\Element\Section
     */
    public function setDefaultProductMarkup($defaultProductMarkup) {
        $this->defaultProductMarkup = $defaultProductMarkup;

        return $this;
    }

    /**
     * Get DefaultProductMarkup
     * 
     * @return string
     */
    public function getDefaultProductMarkup() {
        return $this->defaultProductMarkup;
    }

    /**
     * Set SectionImageId
     * 
     * @param string $sectionImageId
     * @return \WdgCafepress\Element\Section
     */
    public function setSectionImageId($sectionImageId) {
        $this->sectionImageId = $sectionImageId;

        return $this;
    }

    /**
     * Get SectionImageId
     * 
     * @return string
     */
    public function getSectionImageId() {
        return $this->sectionImageId;
    }

    /**
     * Set SectionImageWidth
     * 
     * @param string $sectionImageWidth
     * @return \WdgCafepress\Element\Section
     */
    public function setSectionImageWidth($sectionImageWidth) {
        $this->sectionImageWidth = $sectionImageWidth;

        return $this;
    }

    /**
     * Get SectionImageWidth
     * 
     * @return string
     */
    public function getSectionImageWidth() {
        return $this->sectionImageWidth;
    }

    /**
     * Set SectionImageHeight
     * 
     * @param string $sectionImageHeight
     * @return \WdgCafepress\Element\Section
     */
    public function setSectionImageHeight($sectionImageHeight) {
        $this->sectionImageHeight = $sectionImageHeight;

        return $this;
    }

    /**
     * Get SectionImageHeight
     * 
     * @return string
     */
    public function getSectionImageHeight() {
        return $this->sectionImageHeight;
    }

    /**
     * Set SortPriority
     * 
     * @param string $sortPriority
     * @return \WdgCafepress\Element\Section
     */
    public function setSortPriority($sortPriority) {
        $this->sortPriority = $sortPriority;

        return $this;
    }

    /**
     * Get SortPriority
     * 
     * @return string
     */
    public function getSortPriority() {
        return $this->sortPriority;
    }

    /**
     * Set ItemsAcross
     * 
     * @param string $itemsAcross
     * @return \WdgCafepress\Element\Section
     */
    public function setItemsAcross($itemsAcross) {
        $this->itemsAcross = $itemsAcross;

        return $this;
    }

    /**
     * Get ItemsAcross
     * 
     * @return string
     */
    public function getItemsAcross() {
        return $this->itemsAcross;
    }

    /**
     * Set CategoryId
     * 
     * @param string $categoryId
     * @return \WdgCafepress\Element\Section
     */
    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get CategoryId
     * 
     * @return string
     */
    public function getCategoryId() {
        return $this->categoryId;
    }

    /**
     * Set ImageType
     * 
     * @param string $imageType
     * @return \WdgCafepress\Element\Section
     */
    public function setImageType($imageType) {
        $this->imageType = $imageType;

        return $this;
    }

    /**
     * Get ImageType
     * 
     * @return string
     */
    public function getImageType() {
        return $this->imageType;
    }

    /**
     * Set DefaultProductDescription
     * 
     * @param string $defaultProductDescription
     * @return \WdgCafepress\Element\Section
     */
    public function setDefaultProductDescription($defaultProductDescription) {
        $this->defaultProductDescription = $defaultProductDescription;

        return $this;
    }

    /**
     * Get DefaultProductDescription
     * 
     * @return string
     */
    public function getDefaultProductDescription() {
        return $this->defaultProductDescription;
    }

    /**
     * Set DefaultProductImageId
     * 
     * @param string $defaultProductImageId
     * @return \WdgCafepress\Element\Section
     */
    public function setDefaultProductImageId($defaultProductImageId) {
        $this->defaultProductImageId = $defaultProductImageId;

        return $this;
    }

    /**
     * Get DefaultProductImageId
     * 
     * @return string
     */
    public function getDefaultProductImageId() {
        return $this->defaultProductImageId;
    }

    /**
     * Set DefaultProductName
     * 
     * @param string $defaultProductName
     * @return \WdgCafepress\Element\Section
     */
    public function setDefaultProductName($defaultProductName) {
        $this->defaultProductName = $defaultProductName;

        return $this;
    }

    /**
     * Get DefaultProductName
     * 
     * @return string
     */
    public function getDefaultProductName() {
        return $this->defaultProductName;
    }

    /**
     * Set Teaser
     * 
     * @param string $teaser
     * @return \WdgCafepress\Element\Section
     */
    public function setTeaser($teaser) {
        $this->teaser = $teaser;

        return $this;
    }

    /**
     * Get Teaser
     * 
     * @return string
     */
    public function getTeaser() {
        return $this->teaser;
    }

}
