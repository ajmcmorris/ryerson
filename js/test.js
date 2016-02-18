$(function() {
	var feed = new Instafeed({
        clientId: '36b5d16795ad4d4c9a188b868223b0cf',
        accessToken:'2271763754.1677ed0.2c8add8a963844dfbaa2b11b62b8df41',
        target: 'instafeed',
        get: 'user',
        userId: 2271763754,
        links: true,
        limit: 16,
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        template: '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a></div><div class="description">{{caption}}<a href="{{link}}" target="_blank"><div class="coms">{{comments}} Comments</div></a><div class="loc">{{location}}</div></div></div></div>'
    });
    feed.run();
});