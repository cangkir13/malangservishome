<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#a">
				<span class="sr-only">Menu Toggle</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="#" class="navbar-brand" style="float: left; color: black;">
				Malang&nbsp;Home&nbsp;Service
			</a>
		</div>

		<div class="collapse navbar-collapse" id="a">
			<ul class="nav navbar-nav navbar-right">
				<li><?php echo anchor('Home', ' Home', 'class="glyphicon glyphicon-home"');?></li>
				<li><a href="#" class="glyphicon glyphicon-tree-deciduous"> Landscape</a></li>
				<li><?php echo anchor('Home/contact', ' Contact Us', 'class="glyphicon glyphicon-phone-alt"');?></li>
				<li><?php echo anchor('Admin', ' Login', 'class="glyphicon glyphicon-log-in"')?></li>
			</ul>
		</div>
	</div>
</nav>