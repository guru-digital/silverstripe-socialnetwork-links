<?php

class SiteConfig_SocialNetworkLinks extends DataExtension {

    static $many_many = array(
        'SocialNetworkLinks' => 'SocialNetworkLink'
    );
    static $many_many_extraFields = array(
        'SocialNetworkLinks' => array(
            'Sort' => 'Int'
        )
    );

    function updateCMSFields(FieldList $fields) {

        $fields->addFieldToTab("Root.SocialNetworkLinks", GridField::create(
                        "SocialNetworkLinks", "Social Network Links", $this->owner->SocialNetworkLinks(), $config = GridFieldConfig_RelationEditor::create()
                )
        );

        if (class_exists("GridFieldOrderableRows")) {
            $config->addComponent(new GridFieldOrderableRows());
        }
    }

}
