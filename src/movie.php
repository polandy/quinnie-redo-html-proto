<?php
include "layout/header.php"; ?>

<div onclick="window.history.back();" class="back-button">
	 <span class="glyphicon glyphicon-chevron-left"></span>
	 Zur&uuml;ck
</div>

<div data-bind="with: selectedMovie()" class="movie-details">
	<h2 data-bind="text: name"> Movie </h2>
	<img data-bind="attr { src: image, title: name }" class="movie-image"/>

	<div class="panel panel-default movie-info">
		<div class="panel-body">

			<dl class="dl-horizontal">
				<dt>Release Date</dt>
				<dd data-bind="text: releaseMoment().format('DD MMM YYYY')"></dd>

				<dt>Kategorien</dt>
				<dd data-bind="foreach: categories">
					<span data-bind="text: $data"></span>, 
				</dd>

				<dt>Direktor</dt>
				<dd data-bind="text: director"></dd>

				<dt>Schauspieler</dt>
				<dd data-bind="foreach: actors">
					<span data-bind="text: $data"></span>, 
				</dd>
			</dl>
		</div>
	</div>

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
												<span class="reservation-link" data-bind="text: show.momentDate().format('HH:mm'), clickBubble: false, click: $root.openReservation.bind($data, $data, $parents[0], $parents[1])"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[1]), as: 'show' }">
												<span class="reservation-link" data-bind="text: show.momentDate().format('HH:mm'), clickBubble: false, click: $root.openReservation.bind($data, $data, $parents[0], $parents[1])"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[2]), as: 'show' }">
												<span class="reservation-link" data-bind="text: show.momentDate().format('HH:mm'), clickBubble: false, click: $root.openReservation.bind($data, $data, $parents[0], $parents[1])"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[3]), as: 'show' }">
												<span class="reservation-link" data-bind="text: show.momentDate().format('HH:mm'), clickBubble: false, click: $root.openReservation.bind($data, $data, $parents[0], $parents[1])"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[4]), as: 'show' }">
												<span class="reservation-link" data-bind="text: show.momentDate().format('HH:mm'), clickBubble: false, click: $root.openReservation.bind($data, $data, $parents[0], $parents[1])"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[5]), as: 'show' }">
												<span class="reservation-link" data-bind="text: show.momentDate().format('HH:mm'), clickBubble: false, click: $root.openReservation.bind($data, $data, $parents[0], $parents[1])"></span>
											</td>

											<td data-bind="foreach: { data: showsAtDay($root.nextSevenDays()[6]), as: 'show' }">
												<span class="reservation-link" data-bind="text: show.momentDate().format('HH:mm'), clickBubble: false, click: $root.openReservation.bind($data, $data, $parents[0], $parents[1])"></span>
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