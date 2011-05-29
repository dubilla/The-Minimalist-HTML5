	<div id="sidebar">

		<p>Hi, my name is Dan.  I am a creative mind living in Boston, MA.  An <a href="/portfolio" title="Portfolio">online portfolio</a> of my web work is available.  Also, be sure to explore some of my current inspirations below.</p>
		
		<div class="social-box">
			<h4 class="social-title">Latest Tweet</h4>
			<p class="social-content"><?php twitter_feed('dubilla'); ?></p>
			<a class="social-link" href="http://www.twitter.com/dubilla" target="_blank">&raquo; to my Twitter account</a>
			<br class="clear" />
		</div>
		<div class="social-box">
			<h4 class="social-title">Current Albums</h4>
			<p class="social-content"><?php $my_albums = new LastFMRecords; $my_albums->display_lastfm(); ?></p>
			<a class="social-link" href="http://www.last.fm/user/djubilla" target="_blank">&raquo; to my last.fm account</a>
			<br class="clear" />
		</div>
		<div class="social-box">
			<h4 class="social-title">Current Movies</h4>
			<p class="social-content"><?php netflix(); ?></p>
			<br class="clear" />
		</div>
		<div class="social-box">
			<h4 class="social-title">Current Reads</h4>
			<p class="social-content"><?php goodshelf(); ?></p>
			<a class="social-link" href="http://www.goodreads.com/review/list/2417523" target="_blank">&raquo; to my GoodReads account</a>
			<br class="clear" />
		</div>
		<div class="social-box">
			<h4 class="social-title">Latest Photo</h4>
			<p class="social-content"><?php get_flickrRSS(); ?></p>
			<br class="clear" />
			<a class="social-link" href="http://www.flickr.com/photos/7565600@N05/" target="_blank">&raquo; to my Flickr account</a>
			<br class="clear" />
		</div>
		<div class="social-box last">
			<h4 class="social-title">Citing Artistic Differences</h4>
			<br class="clear" />
			<a class="social-link" href="http://www.danubilla.com/cad">&raquo; to Citing Artistic Differences</a>
			<br class="clear" />
		</div>
	</div>
