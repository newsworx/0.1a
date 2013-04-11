<!DOCTYPE html> 
<html> 
<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Compass 0.1</h1>
	</div><!-- /header -->
	
	<div data-role="content">	

	<form>
			<h2>Simple list</h2>

			<ul data-role="listview" data-inset="true">
				<li><a href="index.html">Acura</a></li>
				<li><a href="index.html">Audi</a></li>
				<li><a href="index.html">BMW</a></li>
				<li><a href="index.html">Cadillac</a></li>
				<li><a href="index.html">Ferrari</a></li>
			</ul>

		<h2>Count bubbles</h2>
		<ul data-role="listview" data-inset="true">
			<li><a href="index.html">Inbox <span class="ui-li-count">12</span></a></li>
				<li><a href="index.html">Outbox <span class="ui-li-count">0</span></a></li>
				<li><a href="index.html">Drafts <span class="ui-li-count">4</span></a></li>
				<li><a href="index.html">Sent <span class="ui-li-count">328</span></a></li>
				<li><a href="index.html">Trash <span class="ui-li-count">62</span></a></li>
		</ul>
		
		<h2>Numbered list</h2>
			<ol data-role="listview" data-inset="true">
				<li><a href="index.html">The Godfather</a></li>
				<li><a href="index.html">Inception</a></li>
				<li><a href="index.html">The Good, the Bad and the Ugly </a></li>
				<li><a href="index.html">Pulp Fiction</a></li>
				<li><a href="index.html">Schindler's List</a></li>
			</ol>
			
		<h2>Formatted content</h2>
		<ul data-role="listview" data-inset="true">
			<li><a href="index.html">
				<h3>Stephen Weber</h3>
				<p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
				<p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
				<p class="ui-li-aside"><strong>6:24</strong>PM</p>
			</a></li>
			<li><a href="index.html">
				<h3>jQuery Team</h3>
				<p><strong>Boston Conference Planning</strong></p>
				<p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
				<p class="ui-li-aside"><strong>9:18</strong>AM</p>
			</a></li>
		</ul>
		
			

		
		<h2>Icon list</h2>
		<ul data-role="listview" data-inset="true">
			<li><a href="index.html"><img src="images/gf.png" alt="France" class="ui-li-icon ui-corner-none">France <span class="ui-li-count">4</span></a></li>
			<li><a href="index.html"><img src="images/de.png" alt="Germany" class="ui-li-icon">Germany <span class="ui-li-count">4</span></a></li>
			<li><a href="index.html"><img src="images/gb.png" alt="Great Britain" class="ui-li-icon">Great Britain <span class="ui-li-count">0</span></a></li>
			<li><a href="index.html"><img src="images/fi.png" alt="Finland" class="ui-li-icon">Finland <span class="ui-li-count">12</span></a></li>
			<li><a href="index.html"><img src="images/sj.png" alt="Norway" class="ui-li-icon">Norway <span class="ui-li-count">328</span></a></li>
			<li><a href="index.html"><img src="images/us.png" alt="United States" class="ui-li-icon ui-corner-none">United States <span class="ui-li-count">62</span></a></li>
		</ul>
		
		<h2>Thumbnail, split button list</h2>

			<ul data-role="listview" data-inset="true">
				<li><a href="index.html">
				<img src="images/album-bb.jpg" />
				<h3>Broken Bells</h3>
				<p>Broken Bells</p>
				</a><a href="lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="index.html">
				<img src="images/album-hc.jpg" />
				<h3>Warning</h3>
				<p>Hot Chip</p>
			</a><a href="lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			<li><a href="index.html">
				<img src="images/album-p.jpg" />
				<h3>Wolfgang Amadeus Phoenix</h3>
				<p>Phoenix</p>
				</a><a href="lists-split-purchase.html" data-rel="dialog" data-transition="slideup">Purchase album
			</a></li>
			</ul>
			
		<h2>Divided, filterable list</h2>
			<ul data-role="listview" data-filter="true" data-inset="true">
				<li data-role="list-divider">A</li>
				<li><a href="index.html">Adam Kinkaid</a></li>
				<li><a href="index.html">Alex Wickerham</a></li>
				<li><a href="index.html">Avery Johnson</a></li>
				<li data-role="list-divider">B</li>
				<li><a href="index.html">Bob Cabot</a></li>
				<li data-role="list-divider">C</li>
				<li><a href="index.html">Caleb Booth</a></li>
				<li><a href="index.html">Christopher Adams</a></li>
			</ul>



		
		</form>
		
		
	</div><!-- /content -->

<div data-role="footer">
<a href="index.html" data-icon="gear" data-role="button">Edit Profile</a>
<a href="index.html" data-icon="plus" data-role="button">New Lane</a>
<a href="index.html" data-icon="plus" data-role="button">New Memory</a>
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>