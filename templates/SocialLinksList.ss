<% if SiteConfig.SocialNetworkLinks %>
<aside class="social-links $Position">
    <div class="follow-on">
        <% loop SiteConfig.SocialNetworkLinks.sort(SortOrder) %>
        <a title="$Tagline.XML" href="$URL.RAW" target="_blank" class="$Network.RAW $ExtraClass.RAW">
            <i class="icon"></i>
            <span class="tag-line">$Tagline.RAW</span>
        </a>
        <% end_loop %>
        <% if $SiteConfig.SharePagesOn %>
        <a title="Share this page" href="#" class="share toggle-share">
            <i class="icon"></i>
            <span class="tag-line">Share this page</span>
        </a>
        <% end_if %> 

    </div>
    <% if $SiteConfig.SharePagesOn %>
    <div class="share-on" style="display: none;" data-share-on="$SiteConfig.SharePagesOn">
    </div>
    <% end_if %>

</aside>
<% end_if %>
<% if $SiteConfig.SharePagesOn %>
<% require javascript("framework/thirdparty/jquery/jquery.js") %>
<% require javascript("framework/thirdparty/jquery-ui/jquery-ui.js") %>
<% require javascript("silverstripe-socialnetwork-links/assests/javascript/jquery-share/jquery.share.js") %>
<% require javascript("silverstripe-socialnetwork-links/assests/javascript/jquery-share/jquery.share.js") %>
<% require javascript("silverstripe-socialnetwork-links/assests/javascript/share-utils.js") %>
<% end_if %>

