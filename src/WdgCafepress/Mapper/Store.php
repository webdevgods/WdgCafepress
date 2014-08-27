<?php
namespace WdgCafepress\Mapper;

class Store extends Base
{
    /**
     * @return string
     */
    public function getId()
    {
        return $this->simpleXmlElement->getXPathValue("//store/@id");
    }

    /**
     * 
     * @return  string
     */
    public function getStoreNo() {
        return $this->simpleXmlElement->getXPathValue("//store/@storeNo");
    }

    /**
     * 
     * @return  string
     */
    public function getMemberNo() {
        return $this->simpleXmlElement->getXPathValue("//store/@memberNo");
    }

    /**
     * 
     * @return  string
     */
    public function getName() {
        return $this->simpleXmlElement->getXPathValue("//store/@name");
    }

    /**
     * 
     * @return  string
     */
    public function getIsPremiumStore() {
        return $this->simpleXmlElement->getXPathValue("//store/@isPremiumStore");
    }

    /**
     * 
     * @return  string
     */
    public function getIsSelfBuy() {
        return $this->simpleXmlElement->getXPathValue("//store/@isSelfBuy");
    }

    /**
     * 
     * @return  string
     */
    public function getHomePage() {
        return $this->simpleXmlElement->getXPathValue("//store/@homePage");
    }

    /**
     * 
     * @return  string
     */
    public function getDefaultProductImageId() {
        return $this->simpleXmlElement->getXPathValue("//store/@defaultProductImageId");
    }

    /**
     * 
     * @return  string
     */
    public function getDefaultProductMarkup() {
        return $this->simpleXmlElement->getXPathValue("//store/@defaultProductMarkup");
    }

    /**
     * 
     * @return  string
     */
    public function getLogoType() {
        return $this->simpleXmlElement->getXPathValue("//store/@logoType");
    }

    /**
     * 
     * @return  string
     */
    public function getLogoLink() {
        return $this->simpleXmlElement->getXPathValue("//store/@logoLink");
    }

    /**
     * 
     * @return  string
     */
    public function getLogoWrapText() {
        return $this->simpleXmlElement->getXPathValue("//store/@logoWrapText");
    }

    /**
     * 
     * @return  string
     */
    public function getDescription() {
        return $this->simpleXmlElement->getXPathValue("//store/@description");
    }

    /**
     * 
     * @return  string
     */
    public function getTitle() {
        return $this->simpleXmlElement->getXPathValue("//store/@title");
    }

    /**
     * 
     * @return  string
     */
    public function getKeywords() {
        return $this->simpleXmlElement->getXPathValue("//store/@keywords");
    }

    /**
     * 
     * @return  string
     */
    public function getMetaDescription() {
        return $this->simpleXmlElement->getXPathValue("//store/@metaDescription");
    }

    /**
     * 
     * @return  string
     */
    public function getIsPrivate() {
        return $this->simpleXmlElement->getXPathValue("//store/@isPrivate");
    }

    /**
     * 
     * @return  string
     */
    public function getDisplayBio() {
        return $this->simpleXmlElement->getXPathValue("//store/@displayBio");
    }

    /**
     * 
     * @return  string
     */
    public function getLastUpdated() {
        return $this->simpleXmlElement->getXPathValue("//store/@lastUpdated");
    }

    /**
     * 
     * @return  string
     */
    public function getHasOptedOutOfMarketplace() {
        return $this->simpleXmlElement->getXPathValue("//store/@hasOptedOutOfMarketplace");
    }

    /**
     * 
     * @return  string
     */
    public function getDisabled() {
        return $this->simpleXmlElement->getXPathValue("//store/@disabled");
    }

    /**
     * 
     * @return  string
     */
    public function getPaidTill() {
        return $this->simpleXmlElement->getXPathValue("//store/@paidTill");
    }

    /**
     * 
     * @return  string
     */
    public function getUpgradeDate() {
        return $this->simpleXmlElement->getXPathValue("//store/@upgradeDate");
    }

    /**
     * 
     * @return  string
     */
    public function getHeadTag() {
        return $this->simpleXmlElement->getXPathValue("//store/@headTag");
    }

    /**
     * 
     * @return  string
     */
    public function getBodyTag() {
        return $this->simpleXmlElement->getXPathValue("//store/@bodyTag");
    }

    /**
     * 
     * @return  string
     */
    public function getHeader() {
        return $this->simpleXmlElement->getXPathValue("//store/@header");
    }

    /**
     * 
     * @return  string
     */
    public function getFooter() {
        return $this->simpleXmlElement->getXPathValue("//store/@footer");
    }

    /**
     * 
     * @return  string
     */
    public function getShowFrontPageListing() {
        return $this->simpleXmlElement->getXPathValue("//store/@showFrontPageListing");
    }

    /**
     * 
     * @return  string
     */
    public function getShowSubscribeForm() {
        return $this->simpleXmlElement->getXPathValue("//store/@showSubscribeForm");
    }

    /**
     * 
     * @return  string
     */
    public function getExtraSideBarContent() {
        return $this->simpleXmlElement->getXPathValue("//store/@extraSideBarContent");
    }

    /**
     * 
     * @return  string
     */
    public function getShowSideBar() {
        return $this->simpleXmlElement->getXPathValue("//store/@showSideBar");
    }

    /**
     * 
     * @return  string
     */
    public function getShowNestedSections() {
        return $this->simpleXmlElement->getXPathValue("//store/@showNestedSections");
    }

    /**
     * 
     * @return  string
     */
    public function getFontFace() {
        return $this->simpleXmlElement->getXPathValue("//store/@fontFace");
    }

    /**
     * 
     * @return  string
     */
    public function getTextColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@textColor");
    }

    /**
     * 
     * @return  string
     */
    public function getLinkColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@linkColor");
    }

    /**
     * 
     * @return  string
     */
    public function getActiveLinkColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@activeLinkColor");
    }

    /**
     * 
     * @return  string
     */
    public function getVisitedLinkColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@visitedLinkColor");
    }

    /**
     * 
     * @return  string
     */
    public function getBackgroundColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@backgroundColor");
    }

    /**
     * 
     * @return  string
     */
    public function getCheckoutBgColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@checkoutBgColor");
    }

    /**
     * 
     * @return  string
     */
    public function getAlertMessageColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@alertMessageColor");
    }

    /**
     * 
     * @return  string
     */
    public function getHeadlineColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@headlineColor");
    }

    /**
     * 
     * @return  string
     */
    public function getThBgColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@thBgColor");
    }

    /**
     * 
     * @return  string
     */
    public function getThFgColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@thFgColor");
    }

    /**
     * 
     * @return  string
     */
    public function getTableFgColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@tableFgColor");
    }

    /**
     * 
     * @return  string
     */
    public function getTableBgColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@tableBgColor");
    }

    /**
     * 
     * @return  string
     */
    public function getTableFg2Color() {
        return $this->simpleXmlElement->getXPathValue("//store/@tableFg2Color");
    }

    /**
     * 
     * @return  string
     */
    public function getTableBg2Color() {
        return $this->simpleXmlElement->getXPathValue("//store/@tableBg2Color");
    }

    /**
     * 
     * @return  string
     */
    public function getImageBorderColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@imageBorderColor");
    }

    /**
     * 
     * @return  string
     */
    public function getImageBorderWidth() {
        return $this->simpleXmlElement->getXPathValue("//store/@imageBorderWidth");
    }

    /**
     * 
     * @return  string
     */
    public function getSidebarTextColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@sidebarTextColor");
    }

    /**
     * 
     * @return  string
     */
    public function getSidebarBgColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@sidebarBgColor");
    }

    /**
     * 
     * @return  string
     */
    public function getProdImageColor() {
        return $this->simpleXmlElement->getXPathValue("//store/@prodImageColor");
    }

    /**
     * 
     * @return  string
     */
    public function getDefaultSectionNo() {
        return $this->simpleXmlElement->getXPathValue("//store/@defaultSectionNo");
    }

    /**
     * 
     * @return  string
     */
    public function getBillingOption() {
        return $this->simpleXmlElement->getXPathValue("//store/@billingOption");
    }

    /**
     * 
     * @return  string
     */
    public function getStoreTypeNo() {
        return $this->simpleXmlElement->getXPathValue("//store/@storeTypeNo");
    }

    /**
     * 
     * @return  string
     */
    public function getFixedPricingCommissionPercentage() {
        return $this->simpleXmlElement->getXPathValue("//store/@fixedPricingCommissionPercentage");
    }

    /**
     * 
     * @return  string
     */
    public function getStoreLogoImage() {
        return $this->simpleXmlElement->getXPathValue("//store/@storeLogoImage");
    }

    /**
     * 
     * @return  string
     */
    public function getDescriptionHtml() {
        return $this->simpleXmlElement->getXPathValue("//store/@descriptionHtml");
    }
}