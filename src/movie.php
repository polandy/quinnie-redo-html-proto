<?php
include "layout/header.php"; ?>

<div data-bind="with: selectedMovie()">
	<h2 data-bind="text: name"> Movie </h2>
	<img data-bind="attr { src: image, title: name }" />
	<p data-bind="text: description"></p>

	<ul>
		<li>
			<label>Release Date</label>
			<span data-bind="text: releaseDate"></span>
		</li>
		<li>
			<label>Kategorien</label>
			<span data-bind="foreach: categories">
				<span data-bind="text: $data"></span>, 
			</span>
		</li>
		<li>
			<label>Direktor</label>
			<span data-bind="text: director"></span>
		</li>
		<li>
			<label>Schauspieler</label>
			<span data-bind="foreach: actors">
				<span data-bind="text: $data"></span>, 
			</span>
		</li>
	</ul>

	<ul data-bind="foreach: cinemaShows">
		<li>
			<h3 data-bind="text: cinema"></h3>
			<span data-bind="text: language"></span>
			<span data-bind="text: cost"></span>

			<ul data-bind="foreach: shows">
				<li data-bind="text: formatDate"></li>
			</ul>
		</li>
	</ul>


	<script>
		ko.applyBindings(quinnie.data);
	</script>
</div>

<?php include "layout/footer.php";