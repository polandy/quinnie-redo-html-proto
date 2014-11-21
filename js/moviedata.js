var quinnie = quinnie || {};
quinnie.objects = quinnie.objects || {};

quinnie.objects.movie = function (name, description, releaseDate, image, categories, director, actors, cinemaShows)
{
	this.name = ko.observable(name);
	this.description = ko.observable(description);
	this.image = ko.observable(image);
	this.releaseDate = ko.observable(new Date(releaseDate));

	this.releaseMoment = ko.observable(moment(this.releaseDate()));

	this.categories = ko.observableArray(categories);
	this.director = ko.observable(director);
	this.actors = ko.observableArray(actors);

	this.cinemaShows = ko.observableArray(cinemaShows);
	var self = this;

	this.nextCinemaShow = ko.computed(function () {
		var now = new Date().getTime();

		var result = Enumerable
				.From(self.cinemaShows())
				.OrderBy(function (x) {
					var ticksInFuture = x.nextShow().showDate().getTime() - now;
					return ticksInFuture < 0 ? Number.MAX_VALUE : ticksInFuture;
				})
				.FirstOrDefault();

		return result;
	});
};

quinnie.objects.cinemaShows = function (language, cinema, cost, shows)
{
	this.language = ko.observable(language);
	this.cinema = ko.observable(cinema);
	this.cost = ko.observable(cost);
	
	this.shows = ko.observableArray(shows);

	var self = this;

	this.nextShow = ko.computed(function () {
		var now = new Date().getTime();

		return Enumerable
				.From(self.shows())
				.OrderBy(function(x) {
					var ticksInFuture = x.showDate().getTime() - now;
					return ticksInFuture < 0 ? Number.MAX_VALUE : ticksInFuture;
				})
				.FirstOrDefault();
	});

	this.showsAtDay = function (mom) {
		var result =  Enumerable
				.From(self.shows())
				.Where(function (x) {
					return mom.isSame(x.momentDate(), 'day');
			}).ToArray();

		return result;
	};
};

quinnie.objects.shows = function (time) {
	this.time = ko.observable(time);

	this.showDate = ko.computed(function() {
		return new Date(time);
	});

	this.momentDate = ko.computed(function () {
		return moment(this.showDate());
	}, this);
};

quinnie.objects.movieData = function () {
	var self = this;
	this.movies = ko.observableArray();

	this.filters = ko.observable(new quinnie.objects.filter());

	this.filteredMovies = ko.computed(function () {

		
		return Enumerable.From(this.movies())
			.Where(function (movie) {

				// filter by category

				var foundMatch = false;
				
				$(self.filters().activeCategories()).
					each(function() {
						if (foundMatch) { return; }
						foundMatch = $.inArray("" + this.label(), movie.categories()) >= 0;
				});

				return foundMatch;
			})
			.Where(function (movie) {

				// filter by cinema name.

				var foundMatch = false;

				$(self.filters().activeCinemas()).
					each(function () {
						var cinemaName = this.label();
						if (foundMatch) { return; }

						foundMatch = Enumerable
										.From(movie.cinemaShows())
										.Any(function (cinemaShow) {

											return "" + cinemaShow.cinema() == "" + cinemaName;
										});
					});

				return foundMatch;
			})
			.Where(function (movie) {

				// filter by language.

				var foundMatch = false;

				$(self.filters().activeLanguages()).
					each(function () {
						var languageLabel = this.label();
						if (foundMatch) { return; }

						foundMatch = Enumerable
										.From(movie.cinemaShows())
										.Any(function (cinemaShow) {

											return "" + cinemaShow.language() == "" + languageLabel;
										});
					});

				return foundMatch;
			})
			.ToArray();

	}, this);

	this.openMovieDetails = function () {
		window.location = "movie.php#" + this.name();
	};

	this.isSameDay = function(day1, day2) {
		return day1.startOf("day") == day2.startOf("day");
	};

	this.nextSevenDays = ko.computed(function() {
		var data = [
			moment(),
			moment().add(1, "days"),
			moment().add(2, "days"),
			moment().add(3, "days"),
			moment().add(4, "days"),
			moment().add(5, "days"),
			moment().add(6, "days")
		];

		return data;
	});

	this.newestMovies = ko.computed(function () {
		var now = new Date();

		return Enumerable
			.From(self.movies())
			.Where(function (x) {
				return x.releaseDate().getTime() < now.getTime();
			})
			.OrderByDescending(function (x) {
				return x.releaseDate().getTime();
			})
			.Take(3)
			.ToArray();
	});

	this.upcomingMovies = ko.computed(function () {
		var now = new Date();

		return Enumerable
			.From(self.movies())
			.Where(function (x) {
				return x.releaseDate().getTime() > now.getTime();
			})
			.OrderBy(function (x) {
				return x.releaseDate().getTime();
			})
			.Take(3)
			.ToArray();
	});

	this.nextMovies = ko.computed(function() {
		var now = new Date();

		return Enumerable
			.From(self.movies())
			.Where(function (x) {
				return x.nextCinemaShow() != null && x.nextCinemaShow().nextShow().showDate().getTime() > now.getTime();
			})
			.OrderBy(function (x) {
				return x.nextCinemaShow().nextShow().showDate().getTime();
			})
			.Take(3)
			.ToArray();
	});

	this.selectedMovie = ko.computed(function() {
		var hash = window.location.hash.substring(1);

		return Enumerable
			.From(this.movies())
			.Where(function(x) {
				return x.name() == hash;
			})
			.FirstOrDefault();
	}, this);
};


quinnie.objects.filterOptions = function(text) {
	this.label = ko.observable(text);
	this.checked = ko.observable(true);
};


quinnie.objects.filter = function() {
	this.languages = ko.observableArray(asFilterOptions(["D", "Edf", "F"]));
	this.activeLanguages = ko.computed(function() {
		return Enumerable.From(this.languages()).Where(function(x) { return x.checked(); }).ToArray();
	}, this);

	this.categories = ko.observableArray(asFilterOptions(["Action", "Drama", "Romance", "Adventure", "SciFi"]));
	this.activeCategories = ko.computed(function () {
		return Enumerable.From(this.categories()).Where(function (x) { return x.checked(); }).ToArray();
	}, this);

	this.cinemas = ko.observableArray(asFilterOptions(["Bubenberg","Camera","Club","Movie 1", "Movie 2", "Movie 3"]));
	this.activeCinemas = ko.computed(function () {
		return Enumerable.From(this.cinemas()).Where(function (x) { return x.checked(); }).ToArray();
	}, this);

	function asFilterOptions(options) {
		var result = new Array();

		$(options).each(function() {
			result.push(new quinnie.objects.filterOptions(this));
		});

		return result;
	}
};

moment.locale("de");
quinnie.data = new quinnie.objects.movieData();

quinnie.data.movies.push(new quinnie.objects.movie(
	"Marco Polo", 
	"In a world replete with greed, betrayal, sexual intrigue and rivalry, \"Marco Polo\" is based on the famed explorer's adventures in Kublai Khan's court in 13th century China.",
	"11/18/2014",
	"http://ia.media-imdb.com/images/M/MV5BMTcwMDU5NzMzOV5BMl5BanBnXkFtZTgwNzk5NTE0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Adventure", "Action"],
	"Unknown",
	["Chin Han", "Mahesh Jadu", "Lorenzo Richelmy"],
	[new quinnie.objects.cinemaShows("Edf", "Bubenberg", 15, [
		new quinnie.objects.shows("11/23/2014 20:00"),
		new quinnie.objects.shows("11/24/2014 20:00"),
		new quinnie.objects.shows("11/24/2014 13:00"),
		new quinnie.objects.shows("11/25/2014 20:00"),
		new quinnie.objects.shows("11/26/2014 20:00"),
		new quinnie.objects.shows("11/27/2014 20:00"),
		new quinnie.objects.shows("11/28/2014 20:00"),
		new quinnie.objects.shows("11/29/2014 20:00"),
		new quinnie.objects.shows("11/30/2014 20:00")
	]),
	new quinnie.objects.cinemaShows("D", "Camera", 15, [
		new quinnie.objects.shows("11/21/2014 17:15"),
		new quinnie.objects.shows("11/22/2014 17:15"),
		new quinnie.objects.shows("11/23/2014 17:15"),
		new quinnie.objects.shows("11/24/2014 17:15")
	])]));
	
quinnie.data.movies.push(new quinnie.objects.movie(
	"Cake",
	"Claire initiates a dubious relationship with a widower while confronting fantastical hallucinations of his dead wife.",
	"3/1/2015",
	"http://ia.media-imdb.com/images/M/MV5BMTc4NDYzNTcyM15BMl5BanBnXkFtZTgwNjQ5NzQ0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Drama"],
	"Daniel Barnz",
	["Jennifer Aniston", "Anna Kendrick", "Britt Robertson"],
	[new quinnie.objects.cinemaShows("Edf", "Bubenberg", 15, [
		new quinnie.objects.shows("11/23/2014 20:00"),
		new quinnie.objects.shows("11/24/2014 20:00"),
		new quinnie.objects.shows("11/24/2014 13:00"),
		new quinnie.objects.shows("11/25/2014 20:00"),
		new quinnie.objects.shows("11/26/2014 20:00"),
		new quinnie.objects.shows("11/27/2014 20:00"),
		new quinnie.objects.shows("11/28/2014 20:00"),
		new quinnie.objects.shows("11/29/2014 20:00"),
		new quinnie.objects.shows("11/30/2014 20:00")
	])]));
	
quinnie.data.movies.push(new quinnie.objects.movie(
	"Fifty Shades of Grey",
	"Literature student Anastasia Steele's life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.",
	"2/13/2015",
	"http://ia.media-imdb.com/images/M/MV5BMjE1MTM4NDAzOF5BMl5BanBnXkFtZTgwNTMwNjI0MzE@._V1_SX214_AL_.jpg",
	["Drama", "Romance"],
	"Sam Taylor-Johnson",
	["Dakota Johnson", "Jamie Dornan", "Aaron Taylor-Johnson"],
	[
	new quinnie.objects.cinemaShows("D", "Camera", 15, [
		new quinnie.objects.shows("11/21/2014 17:15"),
		new quinnie.objects.shows("11/22/2014 17:15"),
		new quinnie.objects.shows("11/23/2014 17:15"),
		new quinnie.objects.shows("11/24/2014 17:15")
	])]));