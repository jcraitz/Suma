<!doctype html>
<!-- =================================================================================================================== -->
<html lang="en">

<!-- =================================================================================================================== -->
<head>
	<meta charset="utf-8">

	<title>nestedSortable jQuery Plugin</title>
	<meta name="description" content="Demo page of the Nested Sortable jQuery Plugin">
	<meta name="author" content="Manuele J Sarfatti">

	<script>

		(function(){
			if (!/*@cc_on!@*/0) return;
			var e = ("abbr article aside audio canvas command datalist details figure figcaption footer "+
				"header hgroup mark meter nav output progress section summary time video").split(' '),
			i=e.length;
			while (i--) {
			document.createElement(e[i])
			}
		})(document.documentElement,'className');

	</script>

	<style type="text/css">

		html {
			background-color: #eee;
		}

		body {
			color: #333;
			background-color: #fff;
			font-size: 13px;
			font-family: "Helvetica Neue", Corbel, "Nimbus Sans L", Helvetica, Arial, sans-serif;
			padding: 2em 4em;
			width: 860px;
			margin: 0 auto;
		}

		pre, code {
			font-size: 12px;
		}

		pre {
			width: 100%;
			overflow: auto;
		}

		small {
			font-size: 90%;
		}

		small code {
			font-size: 11px;
		}

		.placeholder {
			background-color: #cfcfcf;
		}

		.ui-nestedSortable-error {
			background:#fbe3e4;
			color:#8a1f11;
		}

		ol {
			margin: 0;
			padding: 0;
			padding-left: 30px;
		}

		ol.sortable, ol.sortable ol {
			margin: 0 0 0 25px;
			padding: 0;
			list-style-type: none;
		}

		ol.sortable {
			margin: 4em 0;
		}

		.sortable li {
			margin: 7px 0 0 0;
			padding: 0;
		}

		.sortable li div  {
			border: 1px solid black;
			padding: 3px;
			margin: 0;
			cursor: move;
		}

		h1 {
			font-size: 2em;
			margin-bottom: 0;
		}

		h2 {
			font-size: 1.2em;
			font-weight: normal;
			font-style: italic;
			margin-top: .2em;
			margin-bottom: 1.5em;
		}

		h3 {
			font-size: 1em;
			margin: 1em 0 .3em;;
		}

		p, ol, ul, pre, form {
			margin-top: 0;
			margin-bottom: 1em;
		}

		dl {
			margin: 0;
		}

		dd {
			margin: 0;
			padding: 0 0 0 1.5em;
		}

		code {
			background: #e5e5e5;
		}

		input {
			vertical-align: text-bottom;
		}

		.notice {
			color: #c33;
		}

	</style>


<!-- =================================================================================================================== -->
<body>

<header>
	<h1>nestedSortable jQuery Plugin</h1>
	<h2>Sort and move list items between nested lists</h2>
</header>

<section>
	<p>
		Latest version: <b>1.3.4</b> / <b>Apr 28, 2011</b> <span class="notice">*recommended update!</span>
	<p class="notice">
		<strong>ANNOUNCEMENT: Since the jQuery Forum post was becoming too big to be managed, I decided to open
		a nestedSortable specific <a href="./forum">forum</a>.<br />
		I hope this move will improve the interaction between me and you, and bring to better development for a
		better plugin!</strong>
	</p>
</section> <!-- END section -->

<section id="demo">
	<ol class="sortable">
		<li id="list_1"><div>Item 1</div>
		<li id="list_2"><div>Item 2</div>
			<ol>
				<li id="list_3"><div>Sub Item 2.1</div>
				<li id="list_4"><div>Sub Item 2.2</div>
				<li id="list_5"><div>Sub Item 2.3</div>
				<li id="list_6"><div>Sub Item 2.4</div>
			</ol>
		<li id="list_7" class="no-nest"><div>Item 3 (no-nesting)</div>
		<li id="list_8" class="no-nest"><div>Item 4 (no-nesting)</div>
		<li id="list_9"><div>Item 5</div>
		<li id="list_10"><div>Item 6</div>
			<ol>
				<li id="list_11"><div>Sub Item 6.1</div>
				<li id="list_12" class="no-nest"><div>Sub Item 6.2 (no-nesting)</div>
				<li id="list_13"><div>Sub Item 6.3</div>
				<li id="list_14"><div>Sub Item 6.4</div>
			</ol>
		<li id="list_15"><div>Item 7</div>
		<li id="list_16"><div>Item 8</div>
	</ol>

	<h3>Try the custom methods:</h3>

	<p><br />
		<input type="submit" name="serialize" id="serialize" value="Serialize" />
	<pre id="serializeOutput"></pre>

	<p>
		<input type="submit" name="toArray" id="toArray" value="To array" />
	<pre id="toArrayOutput"></pre>

	<p>
		<input type="submit" name="toHierarchy" id="toHierarchy" value="To hierarchy" />
	<pre id="toHierarchyOutput"></pre>
	<p>
		<em>Note: This demo has the <code>maxLevels</code> option set to '3'.</em>
	</p>
</section> <!-- END #demo -->


<section id="documentation">
	<p>
		<strong>Download full package (jQuery, jQuery UI, nestedSortable and demo page):</strong>
		<a href="nestedSortable-1.3.4.zip">nestedSortable-1.3.4.zip</a><br />
		<strong>View the source code:</strong> <a href="jquery.ui.nestedSortable.js">jquery.ui.nestedSortable.js</a>

	<p>
		<em>If you want to talk about this plugin, have suggestions, got into some bug, want support, or you have
		anything else to tell me, please use the nestedSortable <a href="./forum">forum</a>. The jQuery Forum post
		shouldn't be used anymore.</em>

	<h3>Features:</h3>
	<ul>
		<li>Designed to work seamlessly with the <a href="http://en.wikipedia.org/wiki/Nested_set_model"
		title="Link to the Wikipedia article">nested</a>
		<a href="http://articles.sitepoint.com/article/hierarchical-data-database"
		   title="Link to a Sitepoint tutorial on the use of MYSQL and PHP">set</a> model (have a look at the
		<code>toArray</code> method).
		<li>Items can be sorted in their own list, moved across the tree, or nested under other items.
		<li>All jQuery Sortable options, events and methods are available.
		<li>It is possible to define elements that will not accept a new nested item/list (<code>no-nesting</code> in the
		above list).
		<li>It is possible to indicate a maximum number of nesting levels.
	</ul>

	<h3>Usage:</h3>
	<pre>
&lt;ul class="sortable"&gt;
	&lt;li&gt;&lt;div&gt;Some content&lt;/div&gt;&lt;/li&gt;
	&lt;li&gt;&lt;div&gt;Some content&lt;/div&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;div&gt;Some sub-item content&lt;/div&gt;&lt;/li&gt;
			&lt;li&gt;&lt;div&gt;Some sub-item content&lt;/div&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;&lt;div&gt;Some content&lt;/div&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
	<p>
		<small>
		<code>&lt;div&gt;</code> can be any tag (e.g. <code>&lt;span&gt;</code>), but it has to be some tag. This
		same tag has to be set as the 'toleranceElement' in the options, and this, or one of its children, as the
		'handle'.<br />
		Any <code>&lt;li&gt;</code> can have either one or two tags, the second being <code>&lt;ul&gt;</code>.
		</small>

	<h3>Custom options:</h3>
	<dl>
		<dt><code>tabSize</code>
			<dd>How far right or left (in pixels) the item has to travel in order to be nested or to be sent
			outside its current list. Default: <code>20</code>
		<dt><code>disableNesting</code>
			<dd>The class name of the items that will not accept nested lists. Default:
			<code>'ui-nestedSortable-no-nesting'</code>
		<dt><code>errorClass</code>
			<dd>The class given to the placeholder in case of error. Default:
			<code>'ui-nestedSortable-error'</code>
		<dt><code>listType</code>
			<dd>The list type used (ordered or unordered). Default: <code>'ol'</code> (see 1.2 Changelog)
		<dt><code>maxLevels</code>
			<dd>How many nesting levels can the list have at the most. If set to <code>'0'</code> the levels are unlimited.
			Default: <code>'0'</code>
		<dt><code>noJumpFix</code>
			<dd>Set this to <code>'1'</code> to deactivate the fix (see 1.2.2 Changelog), in case it messes
			things up for you. Default: <code>'0'</code>
	</dl>

	<h3>Custom methods:</h3>
	<dl>
		<dt><code>serialize</code>
			<dd>Serializes the nested list into a string like
			<strong><em>setName</em>[<em>itemId</em>]=<em>parentId</em>&<em>setName</em>[<em>itemId</em>]=<em>parentId</em></strong>
			from each item's id reading 'setName_itemId' (where itemId is a number).<br />
			It accepts the same options as the UI Sortable method (<code>key</code>, <code>attribute</code> and
			<code>expression</code>).
		<dt><code>toArray</code>
			<dd>Builds an array where each element is in the form:
			<pre>

setName[n] =>
{
	'item_id': <em>itemId</em>,
	'parent_id': <em>parentId</em>,
	'depth': <em>depth</em>,
	'left': <em>left</em>,
	'right': <em>right</em>,
}</pre>
			looking at the items' id's as in <code>serialize</code>.<br />
			The <strong>left</strong> and <strong>right</strong> values comply with the nested set model.<br />
			This method accepts two options:<br />
			<code>startDepthCount</code> sets the starting depth number (default is 0), <code>expression</code>
			is the regex used to extract the number from the item's id (default is the same as
			<code>serialize</code>), <code>attribute</code> is the element's attribute that the method will look
			at (default is 'id').<br />
			The first array element is the root element which contains all the others, and it is built from the
			available data with no need for any special entry.
		<dt><code>toHierarchy</code>
			<dd>Builds a hierarchical object with data from the nested elements in the form:
			<pre>

'0' ...
	'id' => <em>itemId</em>
'1' ...
	'id' => <em>itemId</em>
	'children' ...
		'0' ...
			'id' => <em>itemId</em>
		'1' ...
			'id' => <em>itemId</em>
'2' ...
	'id' => <em>itemId</em></pre>
			Similarly to <code>toArray</code>, it accepts the <code>attribute</code> and <code>expression</code>
			options.
	</dl>

	<h3>1.3.4 Changelog:</h3>
	<ul>
		<li>Fixed: the depth of a list item's subtree was miscalculated, having top-level elements accasionally
		kicked out of the main <code>&lt;ol></code> containter.
	</ul>

	<h3>1.3.3 Changelog:</h3>
	<ul>
		<li>Fixed: if <code>&lt;li></code> items had the end tag and an element was moved upwards, a text node was
		detected as <i>previousItem</i> instead of the correct <code>&lt;li></code> element.
	</ul>

	<h3>1.3.2 Changelog:</h3>
	<ul>
		<li>Fixed: the position error wasn't detected at the exact moment an item was moved in a not-allowed position, but
		only after moving it 1px more.
	</ul>

	<h3>1.3.1 Changelog:</h3>
	<ul>
		<li>Fixed: single-item maxLevels error wasn't recognized.
		<li>Fixed: <code>toArray</code> ran twice through nested items.
		<li>Added: an item nested too deep is now sent to the closest allowed position.
	</ul>

	<h3>1.3 Changelog:</h3>
	<ul>
		<li>Implemented the <code>maxLevels</code> option.
	</ul>

	<h3>1.2.3 Changelog:</h3>
	<ul>
		<li>The <code>change</code> event is now correctly triggered.
		<li>Using <code>toArray</code> and <code>toHierarchy</code> inside a <code>change</code> callback function
		(and possibly other events' callback functions as well) doesn't result in an error anymore.
		<li>The <code>toArray</code> method now outputs an ordered array.
	</ul>

	<h3>1.2.2 Changelog:</h3>
	<ul>
		<li>Fixed an issue with the page jumping upwards in some situations with the list taller then the viewport.
		<li>Fix to prevent an item to be moved under a no-nest item while moved to the right.
		 (Thanks to <a href="//philworks.com/">Philippe Archambault</a>)
		<li>Added <code>toHierarchy</code> method. (Thanks to <a href="//www.millan.rs">Milan Petrovic</a>)
	</ul>

	<h3>1.2.1 Changelog:</h3>
	<ul>
		<li>Finally made <code>serialize</code> and <code>toArray</code> work in IE6+ (In fact,
		<code>serialize</code> already worked, but it was badly implemented in this demo page).
	</ul>

	<h3>1.2b Changelog:</h3>
	<ul>
		<li>There was a trailing comma too much on line 21. Either download 1.2b or remove that comma yourself.
	</ul>

	<h3>1.2 Changelog:</h3>
	<ul>
		<li>Added a custom option to specify the desired list type, and changed the default list type to
		<code>&lt;ol&gt;</code>. Since we are dealing with ordering sets of items ordered lists are the way to go
		according to HTML specifications.
	</ul>

	<h3>1.1.1 Changelog:</h3>
	<ul>
		<li>Improved the <code>toArray</code> method (<strong>right</strong> and <strong>left</strong> values have
		been added, <strong>item_id</strong> and <strong>parent_id</strong> are now actual numbers).
	</ul>

	<h3>1.1 Changelog:</h3>
	<ul>
		<li>Implemented <code>serialize</code> and <code>toArray</code> methods.
	</ul>

	<h3>1.0.3 Changelog:</h3>
	<ul>
		<li>Fixed a bug that made IE 6 & 7 to not detect the correct placeholder height.
		<li>Fixed a minor visual issue.
	</ul>

	<h3>1.0.2 Changelog:</h3>
	<ul>
		<li>Definitive fix for absolutely positioned lists.
	</ul>

	<h3>Known bugs:</h3>
	<p>
		Text gets ugly when you sort items in some versions of IE, in certain situation. This is a sortable bug.

	<h3>Roadmap:</h3>
	<dl>
		<dt><del>1.1</del>
			<dd><del>Adapt <code>serialize</code> and <code>toArray</code> in order to have it show the
			indentation level, somehow.</del>
		<dt><del>1.3</del>
			<dd><del>Make a <code>maxLevel</code> option.</del>
	</dl>

	<h3>Requires:</h3>
	<p>
		jQuery 1.4+<br />
		jQuery UI Sortable 1.8+

	<h3>Browser compatibility:</h3>
	<p>
		Tested with: IE 6, Firefox 3.6, Chrome 10, Safari 3<br />
		Will also work with: IE 6+, Firefox 3.5+, Chrome 4+, Safari 3+

	<h3>Licence:</h3>
	<p>
		This work is licensed under a <a rel="license" href="//creativecommons.org/licenses/by-sa/3.0/">Creative
		Commons Attribution-ShareAlike 3.0 Unported License</a>.
	<p>
		This work is now <em>pizzaware</em>. If it saved your life, or you just feel good at heart, please consider
		offering me a pizza. This can be done in two ways: (1) use the Paypal button below; (2) send me cash via
		traditional mail to my home address in Italy. Is the second method legal? It is in Italy if you use Posta
		assicurata. You should check with your local laws if you live elsewhere.
	</p>

		<!-- Paypal Donate Button -->
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_donations">
		<input type="hidden" name="business" value="RSJEW3N9PRMYY">
		<input type="hidden" name="lc" value="GB">
		<input type="hidden" name="item_name" value="nestedSortable">
		<input type="hidden" name="item_number" value="002">
		<input type="hidden" name="currency_code" value="EUR">
		<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHosted">
		<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
		<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/it_IT/i/scr/pixel.gif" width="1" height="1">
		<a href="../../info.php">contact me</a>
		</form>
		<!-- END Paypal Donate Button -->

	<p>
		© <?= 2010 == date('Y') ? date('Y') : '2010&ndash;'.date('Y'); ?> Manuele J Sarfatti
	</p>
</section> <!-- END #documentation -->

<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="jquery.ui.nestedSortable.js"></script>

<script>

	$(document).ready(function(){

		$('ol.sortable').nestedSortable({
			disableNesting: 'no-nest',
			forcePlaceholderSize: true,
			handle: 'div',
			helper:	'clone',
			items: 'li',
			maxLevels: 3,
			opacity: .6,
			placeholder: 'placeholder',
			revert: 250,
			tabSize: 25,
			tolerance: 'pointer',
			toleranceElement: '> div'
		});

		$('#serialize').click(function(){
			serialized = $('ol.sortable').nestedSortable('serialize');
			$('#serializeOutput').text(serialized+'\n\n');
		})

		$('#toHierarchy').click(function(e){
			hiered = $('ol.sortable').nestedSortable('toHierarchy');
			hiered = dump(hiered);
			(typeof($('#toHierarchyOutput')[0].textContent) != 'undefined') ?
			$('#toHierarchyOutput')[0].textContent = hiered : $('#toHierarchyOutput')[0].innerText = hiered;
		})

		$('#toArray').click(function(e){
			arraied = $('ol.sortable').nestedSortable('toArray', {startDepthCount: 0});
			arraied = dump(arraied);
			(typeof($('#toArrayOutput')[0].textContent) != 'undefined') ?
			$('#toArrayOutput')[0].textContent = arraied : $('#toArrayOutput')[0].innerText = arraied;
		})

	});

	function dump(arr,level) {
		var dumped_text = "";
		if(!level) level = 0;

		//The padding given at the beginning of the line.
		var level_padding = "";
		for(var j=0;j<level+1;j++) level_padding += "    ";

		if(typeof(arr) == 'object') { //Array/Hashes/Objects
			for(var item in arr) {
				var value = arr[item];

				if(typeof(value) == 'object') { //If it is an array,
					dumped_text += level_padding + "'" + item + "' ...\n";
					dumped_text += dump(value,level+1);
				} else {
					dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
				}
			}
		} else { //Strings/Chars/Numbers etc.
			dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
		}
		return dumped_text;
	}

</script>