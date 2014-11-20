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

	<table class="table">
		<thead>
			<tr>
				<th>Kino</th>
				<th>Sprache</th>
				<th>Preis</th>

				<!-- ko foreach: $root.nextSevenDays() -->
					<th><span data-bind="text: $data.format('dd')"></span></th>
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

	<script>
		ko.applyBindings(quinnie.data);
	</script>
</div>

<?php include "layout/footer.php";