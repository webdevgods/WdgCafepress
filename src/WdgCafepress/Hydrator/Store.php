<?php

namespace WdgCafepress\Hydrator;

use \WdgCafepress\Mapper\Store as Mapper,
    \WdgCafepress\Element\Store as StoreElement;

class Store {

    public function hydrate(StoreElement $store, Mapper $mapper)
    {
        $store
            ->setId($mapper->getId())
            ->setStoreNo($mapper->getStoreNo())
            ->setMemberNo($mapper->getMemberNo())
            ->setName($mapper->getName())
            ->setIsPremiumStore($mapper->getIsPremiumStore())
            ->setIsSelfBuy($mapper->getIsSelfBuy())
            ->setHomePage($mapper->getHomePage())
            ->setDefaultProductImageId($mapper->getDefaultProductImageId())
            ->setDefaultProductMarkup($mapper->getDefaultProductMarkup())
            ->setLogoType($mapper->getLogoType())
            ->setLogoLink($mapper->getLogoLink())
            ->setLogoWrapText($mapper->getLogoWrapText())
            ->setDescription($mapper->getDescription())
            ->setTitle($mapper->getTitle())
            ->setKeywords($mapper->getKeywords())
            ->setMetaDescription($mapper->getMetaDescription())
            ->setIsPrivate($mapper->getIsPrivate())
            ->setDisplayBio($mapper->getDisplayBio())
            ->setLastUpdated($mapper->getLastUpdated())
            ->setHasOptedOutOfMarketplace($mapper->getHasOptedOutOfMarketplace())
            ->setDisabled($mapper->getDisabled())
            ->setPaidTill($mapper->getPaidTill())
            ->setUpgradeDate($mapper->getUpgradeDate())
            ->setHeadTag($mapper->getHeadTag())
            ->setBodyTag($mapper->getBodyTag())
            ->setHeader($mapper->getHeader())
            ->setFooter($mapper->getFooter())
            ->setShowFrontPageListing($mapper->getShowFrontPageListing())
            ->setShowSubscribeForm($mapper->getShowSubscribeForm())
            ->setExtraSideBarContent($mapper->getExtraSideBarContent())
            ->setShowSideBar($mapper->getShowSideBar())
            ->setShowNestedSections($mapper->getShowNestedSections())
            ->setFontFace($mapper->getFontFace())
            ->setTextColor($mapper->getTextColor())
            ->setLinkColor($mapper->getLinkColor())
            ->setActiveLinkColor($mapper->getActiveLinkColor())
            ->setVisitedLinkColor($mapper->getVisitedLinkColor())
            ->setBackgroundColor($mapper->getBackgroundColor())
            ->setCheckoutBgColor($mapper->getCheckoutBgColor())
            ->setAlertMessageColor($mapper->getAlertMessageColor())
            ->setHeadlineColor($mapper->getHeadlineColor())
            ->setThBgColor($mapper->getThBgColor())
            ->setThFgColor($mapper->getThFgColor())
            ->setTableFgColor($mapper->getTableFgColor())
            ->setTableBgColor($mapper->getTableBgColor())
            ->setTableFg2Color($mapper->getTableFg2Color())
            ->setTableBg2Color($mapper->getTableBg2Color())
            ->setImageBorderColor($mapper->getImageBorderColor())
            ->setImageBorderWidth($mapper->getImageBorderWidth())
            ->setSidebarTextColor($mapper->getSidebarTextColor())
            ->setSidebarBgColor($mapper->getSidebarBgColor())
            ->setProdImageColor($mapper->getProdImageColor())
            ->setDefaultSectionNo($mapper->getDefaultSectionNo())
            ->setBillingOption($mapper->getBillingOption())
            ->setStoreTypeNo($mapper->getStoreTypeNo())
            ->setFixedPricingCommissionPercentage($mapper->getFixedPricingCommissionPercentage());
        
        return $this;
    }

}
