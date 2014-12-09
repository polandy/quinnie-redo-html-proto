<?php
include "layout/header.php"; ?>

<div>
	<div class="row">
		<div class="col-sm-12">
			<h1>Home</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<h2>Als nächstes im Kino</h2>

			<div id="next-up">
				<ul data-bind="foreach: nextMovies" class="movie-list">
					<li class="clearfix panel panel-default" data-bind="click: $parent.openMovieDetails">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow, clickBubble: false, click: $root.openReservation.bind($data, $data.nextCinemaShow().nextShow(), $data.nextCinemaShow(), $data)">
								<span class="reservation-link" data-bind="text: nextCinemaShow().cinema()+' ( '+nextCinemaShow().language()+' ) ' + nextCinemaShow().nextShow().momentDate().format('DD.mm')+' | ' + nextCinemaShow().nextShow().momentDate().fromNow()"></span>
							</p>

							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>

			<a href="programm.php">Mehr Filme</a>
		</div>
		<div class="col-sm-6">
			<h2>Die nächsten Premieren</h2>
			<div id="upcoming-movies">
				<ul data-bind="foreach: upcomingMovies" class="movie-list">
					<li class="clearfix panel panel-default" data-bind="click: $parent.openMovieDetails">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow, clickBubble: false, click: $root.openReservation.bind($data, $data.nextCinemaShow().nextShow(), $data.nextCinemaShow(), $data)">
								<span class="reservation-link" data-bind="text: nextCinemaShow().cinema()+' ( '+nextCinemaShow().language()+' ) ' + nextCinemaShow().nextShow().momentDate().format('DD.mm')+' | ' + nextCinemaShow().nextShow().momentDate().fromNow()"></span>
							</p>

							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>
			<a href="programm.php">Mehr Premieren</a>

			<h2>Neu im Kino</h2>
			<div id="hot-movies">
				<ul data-bind="foreach: newestMovies" class="movie-list">
					<li class="clearfix panel panel-default" data-bind="click: $parent.openMovieDetails">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow, clickBubble: false, click: $root.openReservation.bind($data, $data.nextCinemaShow().nextShow(), $data.nextCinemaShow(), $data)">
								<span class="reservation-link" data-bind="text: nextCinemaShow().cinema()+' ( '+nextCinemaShow().language()+' ) ' + nextCinemaShow().nextShow().momentDate().format('DD.mm')+' | ' + nextCinemaShow().nextShow().momentDate().fromNow()"></span>
							</p>

							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>
			<a href="programm.php">Mehr Neuerscheinungen</a>
		</div>
	</div>

	<script>
		ko.applyBindings(quinnie.data);
	</script>
</div>

<?php include "layout/footer.php";