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
				<ul data-bind="foreach: movies" class="movie-list">
					<li class="clearfix panel panel-default">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow">
								<span data-bind="text: nextCinemaShow().cinema()+' '+nextCinemaShow().language()+' ' +nextCinemaShow().nextShow().showDate()"></span>
							</p>

							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>

			<script>
				ko.applyBindings(quinnie.data, document.getElementById("#next-up"));
			</script>
		</div>
		<div class="col-sm-6">
			<h2>Soon</h2>

			<h2>Hot</h2>
		</div>
	</div>
</div>

<?php include "layout/footer.php";