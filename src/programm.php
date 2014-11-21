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
							<ul data-bind="foreach: cinemas">
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

				<div class='input-group date' id='movie-date'>
					<input type='text' class="form-control" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
				<script>
					jQuery(function ($) {
						$(document).ready(function () {
							$("#movie-date").datetimepicker({pickTime: false, minDate: moment().format("MM/dd/YYYY")}).change(function (){
								moment.locale("de");
								quinnie.data.filters().movieDate(moment($(this).find("input").val(), "DD.MM.YYYY"));
							});
						});
					});
				</script>
			</div>

			<div id="movie-list">
				<ul data-bind="foreach: filteredMovies()" class="movie-list">
					<li class="clearfix panel panel-default" data-bind="click: $parent.openMovieDetails">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>
							<p data-bind="text: description"></p>


							<table class="table">
								<colgroup>
									<col />
									<col />
									<col />

									<col width="80px" />
									<col width="80px" />
									<col width="80px" />
									<col width="80px" />
									<col width="80px" />
									<col width="80px" />
									<col width="80px" />
								</colgroup>

								<thead>
									<tr>
										<th>Kino</th>
										<th>Sprache</th>
										<th>Preis</th>

										<!-- ko foreach: $root.nextSevenDays() -->
										<th>
											<span data-bind="text: $data.format('dd')"></span>
										</th>
										<!-- /ko -->
									</tr>
								</thead>

								<tbody>
									<tbody data-bind="foreach { data: cinemaShows, as: 'cinemaShow' }">
										<tr>
											<td data-bind="text: cinemaShow.cinema"></td>
											<td data-bind="text: cinemaShow.language"></td>
											<td data-bind="text: cinemaShow.cost"></td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[0]), as: 'show' }">
												<span data-bind="text: show.momentDate().format('HH:mm')"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[1]), as: 'show' }">
												<span data-bind="text: show.momentDate().format('HH:mm')"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[2]), as: 'show' }">
												<span data-bind="text: show.momentDate().format('HH:mm')"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[3]), as: 'show' }">
												<span data-bind="text: show.momentDate().format('HH:mm')"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[4]), as: 'show' }">
												<span data-bind="text: show.momentDate().format('HH:mm')"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[5]), as: 'show' }">
												<span data-bind="text: show.momentDate().format('HH:mm')"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[6]), as: 'show' }">
												<span data-bind="text: show.momentDate().format('HH:mm')"></span>
											</td>
										</tr>
									</tbody>
								</tbody>
							</table>
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