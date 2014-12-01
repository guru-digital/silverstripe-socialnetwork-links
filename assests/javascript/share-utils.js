(function () {
    var socialLinks = $(".social-links");
    var shareBtn = socialLinks.find(".toggle-share");
    socialLinks.find(".share-on").each(function () {
        var networks = $(this).data("share-on");
        if (networks && networks.length) {
            $(this).share({"networks": networks.split(","), "orientation": "horizontal", "theme": "ss-theme"});
        }
    });
    socialLinks.bind('toggleShare', function () {
        var shareWrapperEl = $(this);
        var followWrap = shareWrapperEl.find(".follow-on");
        var shareOnWrap = shareWrapperEl.find(".share-on");
        var position = shareWrapperEl.position();
        var halfWidth = $(window).width() / 2;
//        var halfheight = $(window).height() / 2;
        var isLeft = position.left < halfWidth;
//        var istop = position.top < halfheight;
        var direction = isLeft ? 'left' : 'right';
        if (shareOnWrap.is(':visible')) {
            shareOnWrap.hide('slide', {direction: direction}, 500, function () {
                followWrap.show('slide', {direction: direction}, 500);
            });
        } else {
            followWrap.hide('slide', {direction: direction}, 500, function () {
                shareOnWrap.show('slide', {direction: direction}, 500);
            });
        }
    });
    shareBtn.click(function (e) {
        e.preventDefault();
        $(this).parents(".social-links").trigger('toggleShare');
    });
    $("body").click(function (e) {
        socialLinks.each(function () {
            var shareWrapperEl = $(this);
            var followWrap = shareWrapperEl.find(".follow-on");
            if (followWrap.is(':hidden')) {
                shareWrapperEl.trigger('toggleShare');
            }
        });
    });
})();