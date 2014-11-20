<?php
include "layout/header.php"; ?>

<div>
	<div class="row">
		<div class="col-sm-12">
			<h1>Programm</h1>

			<div id="filters" data-bind="with: filters">

				<div class="flyout">
					<span class="Button">Sprachen auswählen</span>

					<ul class="flyout-menu" data-bind="foreach: languages">
						<input type="checkbox" data-bind="checked: checked, attr: { id: 'fil_lang_' + label() }" />
						<label data-bind="text: label, attr: { 'for': 'fil_lang_' + label() }"></label>
					</ul>
				</div>

				<div class="flyout">
					<span class="Button">Kino auswählen</span>

					<ul class="flyout-menu" data-bind="foreach: cinemas">
						<input type="checkbox" data-bind="checked: checked" />
						<label data-bind="text: label"></label>
					</ul>
				</div>

				<div class="flyout">
					<span class="Button">Kategorie auswählen</span>

					<ul class="flyout-menu" data-bind="foreach: categories">
						<input type="checkbox" data-bind="checked: checked, attr: { 'id': 'fil_cat_' + label() }" />
						<label data-bind="text: label, attr: { 'for': 'fil_cat_' + label() }"></label>
					</ul>
				</div>
			</div>

			<div id="movie-list">
				<ul data-bind="foreach: filteredMovies()" class="movie-list">
					<li class="clearfix panel panel-default">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>
							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<script>
		ko.applyBindings(quinnie.data);
	</script>
</div>

<?php include "layout/footer.php";