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
			<h2>Next Up</h2>

			<div id="next-up">
				<ul data-bind="foreach: nextMovies" class="movie-list">
					<li class="clearfix panel panel-default" data-bind="click: $parent.openMovieDetails">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow">
								<span data-bind="text: nextCinemaShow().cinema()+' ( '+nextCinemaShow().language()+' ) ' +nextCinemaShow().nextShow().formatDate()"></span>
							</p>

							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6">
			<h2>Soon</h2>
			<div id="upcoming-movies">
				<ul data-bind="foreach: upcomingMovies" class="movie-list">
					<li class="clearfix panel panel-default" data-bind="click: $parent.openMovieDetails">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow">
								<span data-bind="text: nextCinemaShow().cinema()+' ( '+nextCinemaShow().language()+' ) ' +nextCinemaShow().nextShow().formatDate()"></span>
							</p>

							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>

			<h2>Hot</h2>
			<div id="hot-movies">
				<ul data-bind="foreach: newestMovies" class="movie-list">
					<li class="clearfix panel panel-default" data-bind="click: $parent.openMovieDetails">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow">
								<span data-bind="text: nextCinemaShow().cinema()+' ( '+nextCinemaShow().language()+' ) ' +nextCinemaShow().nextShow().formatDate()"></span>
							</p>

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