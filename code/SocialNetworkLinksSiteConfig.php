<?php

class SiteConfig_SocialNetworkLinks extends DataExtension {

    static $db                    = array(
        "SharePagesOn" => "Varchar",
    );
    static $many_many             = array(
        'SocialNetworkLinks' => 'SocialNetworkLink'
    );
    static $many_many_extraFields = array(
        'SocialNetworkLinks' => array(
            'SortOrder' => 'Int'
        )
    );

    function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.SocialMedia", GridField::create(
                        "SocialNetworkLinks", "Social Network Links", $this->owner->SocialNetworkLinks(), $config = GridFieldConfig_RelationEditor::create()
                )
        );

        if (class_exists("GridFieldOrderableRows")) {
            $config->addComponent(new GridFieldOrderableRows('SortOrder'));
        }
        $fields->addFieldToTab('Root.SocialMedia', $sharePagesOnField = new CheckboxSetField("SharePagesOn", "Share pages with", SocialNetworkLink::create()->dbObject('Network')->enumValues()));
    }

//    public function GetSharePagesOn() {
//        return $this->owner->SharePagesOn ? explode(',', $this->owner->SharePagesOn) : false;
//    }

}
