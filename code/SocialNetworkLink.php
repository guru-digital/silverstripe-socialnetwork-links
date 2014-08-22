<?php

class SocialNetworkLink extends DataObject {

    static $db      = array(
        "Name"     => "Varchar",
        "Text"     => "Varchar",
        "CSSClass" => "Varchar",
        "URL"      => "Varchar(500)"
    );
    static $has_one = array(
        "Parent" => "SiteConfig"
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->removeByName("ParentID");
        return $fields;
    }

}
