<?php

class SocialNetworkLink extends DataObject
{

    public static $db                     = array(
        "Network"    => "enum('facebook, twitter, tumblr, youtube, digg, googleplus, linkedin, reddit, pinterest, stumbleupon, email, instagram, yelp')",
        "Tagline"    => "Varchar",
        "URL"        => "Varchar(500)",
        "ExtraClass" => "Varchar",
    );
    public static $has_one                = array(
        "Parent" => "SiteConfig"
    );
    private static $summary_fields = array(
        'Network' => 'Netwrok',
        'Tagline' => 'Tagline',
        'URL'     => 'URL'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName("ParentID");
        return $fields;
    }
}
