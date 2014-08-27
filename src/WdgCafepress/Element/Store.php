<?php

namespace WdgCafepress\Element;

class Store {

    public $id;
    public $storeNo;
    public $memberNo;
    public $name;
    public $isPremiumStore;
    public $isSelfBuy;
    public $homePage;
    public $defaultProductImageId;
    public $defaultProductMarkup;
    public $logoType;
    public $logoLink;
    public $logoWrapText;
    public $description;
    public $title;
    public $keywords;
    public $metaDescription;
    public $isPrivate;
    public $displayBio;
    public $lastUpdated;
    public $hasOptedOutOfMarketplace;
    public $disabled;
    public $paidTill;
    public $upgradeDate;
    public $headTag;
    public $bodyTag;
    public $header;
    public $footer;
    public $showFrontPageListing;
    public $showSubscribeForm;
    public $extraSideBarContent;
    public $showSideBar;
    public $showNestedSections;
    public $fontFace;
    public $textColor;
    public $linkColor;
    public $activeLinkColor;
    public $visitedLinkColor;
    public $backgroundColor;
    public $checkoutBgColor;
    public $alertMessageColor;
    public $headlineColor;
    public $thBgColor;
    public $thFgColor;
    public $tableFgColor;
    public $tableBgColor;
    public $tableFg2Color;
    public $tableBg2Color;
    public $imageBorderColor;
    public $imageBorderWidth;
    public $sidebarTextColor;
    public $sidebarBgColor;
    public $prodImageColor;
    public $defaultSectionNo;
    public $billingOption;
    public $storeTypeNo;
    public $fixedPricingCommissionPercentage;
    public $storeLogoImage;
    public $descriptionHtml;

    /**
     * 
     * @return  string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param string $id
     * @return \WdgCafepress\Element\Store
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getStoreNo() {
        return $this->storeNo;
    }

    /**
     * 
     * @param string $storeNo
     * @return \WdgCafepress\Element\Store
     */
    public function setStoreNo($storeNo) {
        $this->storeNo = $storeNo;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getMemberNo() {
        return $this->memberNo;
    }

    /**
     * 
     * @param string $memberNo
     * @return \WdgCafepress\Element\Store
     */
    public function setMemberNo($memberNo) {
        $this->memberNo = $memberNo;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 
     * @param string $name
     * @return \WdgCafepress\Element\Store
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getIsPremiumStore() {
        return $this->isPremiumStore;
    }

    /**
     * 
     * @param string $isPremiumStore
     * @return \WdgCafepress\Element\Store
     */
    public function setIsPremiumStore($isPremiumStore) {
        $this->isPremiumStore = $isPremiumStore;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getIsSelfBuy() {
        return $this->isSelfBuy;
    }

    /**
     * 
     * @param string $isSelfBuy
     * @return \WdgCafepress\Element\Store
     */
    public function setIsSelfBuy($isSelfBuy) {
        $this->isSelfBuy = $isSelfBuy;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getHomePage() {
        return $this->homePage;
    }

    /**
     * 
     * @param string $homePage
     * @return \WdgCafepress\Element\Store
     */
    public function setHomePage($homePage) {
        $this->homePage = $homePage;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getDefaultProductImageId() {
        return $this->defaultProductImageId;
    }

    /**
     * 
     * @param string $defaultProductImageId
     * @return \WdgCafepress\Element\Store
     */
    public function setDefaultProductImageId($defaultProductImageId) {
        $this->defaultProductImageId = $defaultProductImageId;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getDefaultProductMarkup() {
        return $this->defaultProductMarkup;
    }

    /**
     * 
     * @param string $defaultProductMarkup
     * @return \WdgCafepress\Element\Store
     */
    public function setDefaultProductMarkup($defaultProductMarkup) {
        $this->defaultProductMarkup = $defaultProductMarkup;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getLogoType() {
        return $this->logoType;
    }

    /**
     * 
     * @param string $logoType
     * @return \WdgCafepress\Element\Store
     */
    public function setLogoType($logoType) {
        $this->logoType = $logoType;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getLogoLink() {
        return $this->logoLink;
    }

    /**
     * 
     * @param string $logoLink
     * @return \WdgCafepress\Element\Store
     */
    public function setLogoLink($logoLink) {
        $this->logoLink = $logoLink;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getLogoWrapText() {
        return $this->logoWrapText;
    }

    /**
     * 
     * @param string $logoWrapText
     * @return \WdgCafepress\Element\Store
     */
    public function setLogoWrapText($logoWrapText) {
        $this->logoWrapText = $logoWrapText;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * 
     * @param string $description
     * @return \WdgCafepress\Element\Store
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @param string $title
     * @return \WdgCafepress\Element\Store
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getKeywords() {
        return $this->keywords;
    }

    /**
     * 
     * @param string $keywords
     * @return \WdgCafepress\Element\Store
     */
    public function setKeywords($keywords) {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getMetaDescription() {
        return $this->metaDescription;
    }

    /**
     * 
     * @param string $metaDescription
     * @return \WdgCafepress\Element\Store
     */
    public function setMetaDescription($metaDescription) {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getIsPrivate() {
        return $this->isPrivate;
    }

    /**
     * 
     * @param string $isPrivate
     * @return \WdgCafepress\Element\Store
     */
    public function setIsPrivate($isPrivate) {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getDisplayBio() {
        return $this->displayBio;
    }

    /**
     * 
     * @param string $displayBio
     * @return \WdgCafepress\Element\Store
     */
    public function setDisplayBio($displayBio) {
        $this->displayBio = $displayBio;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getLastUpdated() {
        return $this->lastUpdated;
    }

    /**
     * 
     * @param string $lastUpdated
     * @return \WdgCafepress\Element\Store
     */
    public function setLastUpdated($lastUpdated) {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getHasOptedOutOfMarketplace() {
        return $this->hasOptedOutOfMarketplace;
    }

    /**
     * 
     * @param string $hasOptedOutOfMarketplace
     * @return \WdgCafepress\Element\Store
     */
    public function setHasOptedOutOfMarketplace($hasOptedOutOfMarketplace) {
        $this->hasOptedOutOfMarketplace = $hasOptedOutOfMarketplace;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getDisabled() {
        return $this->disabled;
    }

    /**
     * 
     * @param string $disabled
     * @return \WdgCafepress\Element\Store
     */
    public function setDisabled($disabled) {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getPaidTill() {
        return $this->paidTill;
    }

    /**
     * 
     * @param string $paidTill
     * @return \WdgCafepress\Element\Store
     */
    public function setPaidTill($paidTill) {
        $this->paidTill = $paidTill;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getUpgradeDate() {
        return $this->upgradeDate;
    }

    /**
     * 
     * @param string $upgradeDate
     * @return \WdgCafepress\Element\Store
     */
    public function setUpgradeDate($upgradeDate) {
        $this->upgradeDate = $upgradeDate;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getHeadTag() {
        return $this->headTag;
    }

    /**
     * 
     * @param string $headTag
     * @return \WdgCafepress\Element\Store
     */
    public function setHeadTag($headTag) {
        $this->headTag = $headTag;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getBodyTag() {
        return $this->bodyTag;
    }

    /**
     * 
     * @param string $bodyTag
     * @return \WdgCafepress\Element\Store
     */
    public function setBodyTag($bodyTag) {
        $this->bodyTag = $bodyTag;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getHeader() {
        return $this->header;
    }

    /**
     * 
     * @param string $header
     * @return \WdgCafepress\Element\Store
     */
    public function setHeader($header) {
        $this->header = $header;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getFooter() {
        return $this->footer;
    }

    /**
     * 
     * @param string $footer
     * @return \WdgCafepress\Element\Store
     */
    public function setFooter($footer) {
        $this->footer = $footer;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getShowFrontPageListing() {
        return $this->showFrontPageListing;
    }

    /**
     * 
     * @param string $showFrontPageListing
     * @return \WdgCafepress\Element\Store
     */
    public function setShowFrontPageListing($showFrontPageListing) {
        $this->showFrontPageListing = $showFrontPageListing;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getShowSubscribeForm() {
        return $this->showSubscribeForm;
    }

    /**
     * 
     * @param string $showSubscribeForm
     * @return \WdgCafepress\Element\Store
     */
    public function setShowSubscribeForm($showSubscribeForm) {
        $this->showSubscribeForm = $showSubscribeForm;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getExtraSideBarContent() {
        return $this->extraSideBarContent;
    }

    /**
     * 
     * @param string $extraSideBarContent
     * @return \WdgCafepress\Element\Store
     */
    public function setExtraSideBarContent($extraSideBarContent) {
        $this->extraSideBarContent = $extraSideBarContent;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getShowSideBar() {
        return $this->showSideBar;
    }

    /**
     * 
     * @param string $showSideBar
     * @return \WdgCafepress\Element\Store
     */
    public function setShowSideBar($showSideBar) {
        $this->showSideBar = $showSideBar;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getShowNestedSections() {
        return $this->showNestedSections;
    }

    /**
     * 
     * @param string $showNestedSections
     * @return \WdgCafepress\Element\Store
     */
    public function setShowNestedSections($showNestedSections) {
        $this->showNestedSections = $showNestedSections;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getFontFace() {
        return $this->fontFace;
    }

    /**
     * 
     * @param string $fontFace
     * @return \WdgCafepress\Element\Store
     */
    public function setFontFace($fontFace) {
        $this->fontFace = $fontFace;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getTextColor() {
        return $this->textColor;
    }

    /**
     * 
     * @param string $textColor
     * @return \WdgCafepress\Element\Store
     */
    public function setTextColor($textColor) {
        $this->textColor = $textColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getLinkColor() {
        return $this->linkColor;
    }

    /**
     * 
     * @param string $linkColor
     * @return \WdgCafepress\Element\Store
     */
    public function setLinkColor($linkColor) {
        $this->linkColor = $linkColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getActiveLinkColor() {
        return $this->activeLinkColor;
    }

    /**
     * 
     * @param string $activeLinkColor
     * @return \WdgCafepress\Element\Store
     */
    public function setActiveLinkColor($activeLinkColor) {
        $this->activeLinkColor = $activeLinkColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getVisitedLinkColor() {
        return $this->visitedLinkColor;
    }

    /**
     * 
     * @param string $visitedLinkColor
     * @return \WdgCafepress\Element\Store
     */
    public function setVisitedLinkColor($visitedLinkColor) {
        $this->visitedLinkColor = $visitedLinkColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    /**
     * 
     * @param string $backgroundColor
     * @return \WdgCafepress\Element\Store
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getCheckoutBgColor() {
        return $this->checkoutBgColor;
    }

    /**
     * 
     * @param string $checkoutBgColor
     * @return \WdgCafepress\Element\Store
     */
    public function setCheckoutBgColor($checkoutBgColor) {
        $this->checkoutBgColor = $checkoutBgColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getAlertMessageColor() {
        return $this->alertMessageColor;
    }

    /**
     * 
     * @param string $alertMessageColor
     * @return \WdgCafepress\Element\Store
     */
    public function setAlertMessageColor($alertMessageColor) {
        $this->alertMessageColor = $alertMessageColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getHeadlineColor() {
        return $this->headlineColor;
    }

    /**
     * 
     * @param string $headlineColor
     * @return \WdgCafepress\Element\Store
     */
    public function setHeadlineColor($headlineColor) {
        $this->headlineColor = $headlineColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getThBgColor() {
        return $this->thBgColor;
    }

    /**
     * 
     * @param string $thBgColor
     * @return \WdgCafepress\Element\Store
     */
    public function setThBgColor($thBgColor) {
        $this->thBgColor = $thBgColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getThFgColor() {
        return $this->thFgColor;
    }

    /**
     * 
     * @param string $thFgColor
     * @return \WdgCafepress\Element\Store
     */
    public function setThFgColor($thFgColor) {
        $this->thFgColor = $thFgColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getTableFgColor() {
        return $this->tableFgColor;
    }

    /**
     * 
     * @param string $tableFgColor
     * @return \WdgCafepress\Element\Store
     */
    public function setTableFgColor($tableFgColor) {
        $this->tableFgColor = $tableFgColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getTableBgColor() {
        return $this->tableBgColor;
    }

    /**
     * 
     * @param string $tableBgColor
     * @return \WdgCafepress\Element\Store
     */
    public function setTableBgColor($tableBgColor) {
        $this->tableBgColor = $tableBgColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getTableFg2Color() {
        return $this->tableFg2Color;
    }

    /**
     * 
     * @param string $tableFg2Color
     * @return \WdgCafepress\Element\Store
     */
    public function setTableFg2Color($tableFg2Color) {
        $this->tableFg2Color = $tableFg2Color;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getTableBg2Color() {
        return $this->tableBg2Color;
    }

    /**
     * 
     * @param string $tableBg2Color
     * @return \WdgCafepress\Element\Store
     */
    public function setTableBg2Color($tableBg2Color) {
        $this->tableBg2Color = $tableBg2Color;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getImageBorderColor() {
        return $this->imageBorderColor;
    }

    /**
     * 
     * @param string $imageBorderColor
     * @return \WdgCafepress\Element\Store
     */
    public function setImageBorderColor($imageBorderColor) {
        $this->imageBorderColor = $imageBorderColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getImageBorderWidth() {
        return $this->imageBorderWidth;
    }

    /**
     * 
     * @param string $imageBorderWidth
     * @return \WdgCafepress\Element\Store
     */
    public function setImageBorderWidth($imageBorderWidth) {
        $this->imageBorderWidth = $imageBorderWidth;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getSidebarTextColor() {
        return $this->sidebarTextColor;
    }

    /**
     * 
     * @param string $sidebarTextColor
     * @return \WdgCafepress\Element\Store
     */
    public function setSidebarTextColor($sidebarTextColor) {
        $this->sidebarTextColor = $sidebarTextColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getSidebarBgColor() {
        return $this->sidebarBgColor;
    }

    /**
     * 
     * @param string $sidebarBgColor
     * @return \WdgCafepress\Element\Store
     */
    public function setSidebarBgColor($sidebarBgColor) {
        $this->sidebarBgColor = $sidebarBgColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getProdImageColor() {
        return $this->prodImageColor;
    }

    /**
     * 
     * @param string $prodImageColor
     * @return \WdgCafepress\Element\Store
     */
    public function setProdImageColor($prodImageColor) {
        $this->prodImageColor = $prodImageColor;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getDefaultSectionNo() {
        return $this->defaultSectionNo;
    }

    /**
     * 
     * @param string $defaultSectionNo
     * @return \WdgCafepress\Element\Store
     */
    public function setDefaultSectionNo($defaultSectionNo) {
        $this->defaultSectionNo = $defaultSectionNo;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getBillingOption() {
        return $this->billingOption;
    }

    /**
     * 
     * @param string $billingOption
     * @return \WdgCafepress\Element\Store
     */
    public function setBillingOption($billingOption) {
        $this->billingOption = $billingOption;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getStoreTypeNo() {
        return $this->storeTypeNo;
    }

    /**
     * 
     * @param string $storeTypeNo
     * @return \WdgCafepress\Element\Store
     */
    public function setStoreTypeNo($storeTypeNo) {
        $this->storeTypeNo = $storeTypeNo;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getFixedPricingCommissionPercentage() {
        return $this->fixedPricingCommissionPercentage;
    }

    /**
     * 
     * @param string $fixedPricingCommissionPercentage
     * @return \WdgCafepress\Element\Store
     */
    public function setFixedPricingCommissionPercentage($fixedPricingCommissionPercentage) {
        $this->fixedPricingCommissionPercentage = $fixedPricingCommissionPercentage;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getStoreLogoImage() {
        return $this->storeLogoImage;
    }

    /**
     * 
     * @param string $storeLogoImage
     * @return \WdgCafepress\Element\Store
     */
    public function setStoreLogoImage($storeLogoImage) {
        $this->storeLogoImage = $storeLogoImage;
        return $this;
    }

    /**
     * 
     * @return  string
     */
    public function getDescriptionHtml() {
        return $this->descriptionHtml;
    }

    /**
     * 
     * @param string $descriptionHtml
     * @return \WdgCafepress\Element\Store
     */
    public function setDescriptionHtml($descriptionHtml) {
        $this->descriptionHtml = $descriptionHtml;
        return $this;
    }

}
