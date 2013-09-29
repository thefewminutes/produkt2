<?php # index.php
// this is the main page of the site

// include the configuration file for error management and such
require_once ('./includes/config.inc.php');

// set the page title and include the HTML header
$page_title = 'Mark D. Johnson';
include ('./includes/header.php');
?>
        	<hgroup>
   	    		<h1>Witness to the Evolution of the Internet</h1>
        		<h2>I've seen a lot of changes during my 12 years as a Web Developer.</h2>
        	</hgroup>
        	<p><img class="contentImageRight" src="media/layout/drumbeat2000.jpg" width="250" height="302" alt="Macromedia Drumbeat 2000">While working at a Development firm called IMG2 in 2000 a team of Macromedia Software Engineers came to visit. They wanted to know how we were using their <a href="http://www.adobe.com/products/dreamweaver.html" target="_blank">Dreamweaver</a> product, and if we had any improvement suggestions. Macromedia had recently acquired Elemental Software, creators of the forward thinking Web Authoring Application Drumbeat 2000. In a brand-new industry Drumbeat 2000 emerged with an innovative development paradigm that separated structure from presentation and scripting using early <abbr title="Cascading Style Sheets">CSS</abbr>, Javascript, database connectivity and <code>html</code> (sound <a href="http://www.alistapart.com/articles/separationdilemma/" target="_blank">familiar</a>?) to create dynamic websites. Macromedia quickly released a new version of Drumbeat 2000 under their brand but ultimately decided to kill Drumbeat 2000 and promote Dreamweaver - their previously static-html-only Authoring Application - as their product for developing dynamic, database-driven websites. <img class="contentImageLeft" src="media/layout/ultradev4.jpg" width="200" height="200" alt="Dreamweaver Ultradev 4">Dreamweaver would now be offered in 2 flavors: the static <code>html</code> version and the extended version called Dreamweaver Ultradev; an ironic hat-tip to Microsoft's Visual Interdev. In spite of Drumbeat 2000's brilliant development paradigm Macromedia's Engineers were championing html tables as the presentational layout standard and workaround for browser compatibility issues even though it made no sense (a layout is not tabular data). Macromedia foresaw an Internet full of <code>table</code> layouts and <code>font</code> tags, with everything dumped at the page level, and their Software Engineers told us so. Of course this made updating pure insanity so they provided proprietary template functionality as a work-around. Their vision prevailed for a few years until the <abbr title="World Wide Web Consortium">w3c</abbr> came to the rescue.</p>
            <h2>Rise of the w3c</h2>
            <p>Although formally established in 1994 with the purpose of standardizing web technology, the major browsers were slow to adopt the <a href="http://www.w3.org" target="_blank">World Wide Web Consortium</a>'s <a href="http://www.w3.org/standards/" target="_blank">recommendations</a>. Lack of consistent CSS support was arguably the most impactful shortcoming from the Developer standpoint. <a href="http://www.w3.org/" target="_blank"><img class="contentImageLeft" src="media/w3c_home.png" width="72" height="48" alt="w3c Logo" /></a>Although <abbr title="Internet Explorer">IE</abbr> 3 and 4 and Netscape 4 claimed to support CSS 1 the reality was incomplete and buggy. The result was poor cross-platform page rendering and horribly inconsistent user experiences. To compensate Developers were forced to create browser-specific pages <em>without</em> CSS. Of course this was the impetus for the aforementioned Macromedia presentation paradigm.</p>
            <h2>Today</h2>
            <p>Eventually, with better browser support, web standards that had been put into place were adhered to by Developers on a much wider basis. The resulting streamlining of the Development phase pleased investors and carried with it an improved user experience. Gone are the days of wacky, inconsistent browser page rendering; now we browse in the era of graceful degradation. From both points of view, Developer and User, the Internet has grown into an adept young adult with whom it's a joy to interact.</p>

<?php
include ('./includes/footer.php');
?>
