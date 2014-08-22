<div class="social-networks">
    <% loop SiteConfig.SocialNetworkLinks.sort(Sort) %>
    <a href="$URL.Raw" title="$Text.Raw" class="$CSSClass.Raw" target="_blank" >$Text</a>
    <% end_loop %>
</div>