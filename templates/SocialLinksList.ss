<% if SiteConfig.SocialNetworkLinks %>
<aside class="social-links">
    <div class="follow-on">
        <% loop SiteConfig.SocialNetworkLinks.sort(Sort) %>
        <a title="$Tagline.XML" href="$URL.RAW" target="_blank" class="$Network.RAW $ExtraClass.RAW">
            <i class="icon"></i>
            <span class="tag-line">$Tagline.RAW</span>
        </a>
        <% end_loop %>
    </div>
</aside>
<% end_if %>
