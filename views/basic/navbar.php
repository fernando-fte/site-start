<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">Navbar</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<?php foreach ($settings->get('navbar')['menu'] as $nav) { ?>
			<li class="nav-item <?php echo ($settings->get('page-name')) === $nav['path']?'actived':false ?>">
				<a class="nav-link" href="/<?php echo $nav['path'] ?>"><?php echo $nav['text'] ?></a>
			</li>
			<?php } ?>
		</ul>
	</div>
</nav>
