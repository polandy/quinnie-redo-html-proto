<?php
include "layout/header.php"; ?>

<div>
	<div class="row">
		<div class="col-sm-12">
			<h1>Programm</h1>

			<div id="filters" class="clearfix" data-bind="with: filters">

				<div class="flyout">
					<span class="btn">
						Sprachen auswählen <span class="glyphicon glyphicon-chevron-down"></span>
					</span>

					<div class="panel panel-default flyout-menu">
						<div class="panel-body">
							<ul data-bind="foreach: languages">
								<li>
									<input type="checkbox" data-bind="checked: checked, attr: { id: 'fil_lang_' + label() }" />
									<label data-bind="text: label, attr: { 'for': 'fil_lang_' + label() }"></label>
								</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="flyout">
					<span class="btn">
						Kino auswählen <span class="glyphicon glyphicon-chevron-down"></span>
					</span>

					<div class="panel panel-default flyout-menu">
						<div class="panel-body">
							<ul data-bind="foreach: languages">
								<li>
									<input type="checkbox" data-bind="checked: checked, attr: { id: 'fil_lang_' + label() }" />
									<label data-bind="text: label, attr: { 'for': 'fil_lang_' + label() }"></label>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="flyout">
					<span class="btn">
						Kategorie auswählen <span class="glyphicon glyphicon-chevron-down"></span>
					</span>

					<div class="panel panel-default flyout-menu">
						<div class="panel-body">
							<ul data-bind="foreach: categories">
								<li>
									<input type="checkbox" data-bind="checked: checked, attr: { 'id': 'fil_cat_' + label() }" />
									<label data-bind="text: label, attr: { 'for': 'fil_cat_' + label() }"></label>
								</li>
							</ul>
						</div>
					</div>

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