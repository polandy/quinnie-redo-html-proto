<script>
var movie = function () 
{
	this.name = ko.observable();
	this.description = ko.observable();
	this.image = ko.observable();

	this.categories = ko.observableArray();
	this.director = ko.obersvable();
	this.actors = ko.observableArray();
	
};

var cinemaShows = function () 
{
	this.language = ko.observable();
	this.cinema = ko.observable();
	this.cost = ko.observable();
	
	this.shows = ko.observableArray();
};

var shows = function ()
{
	this.weekday = ko.observable();
	this.time = ko.obersvable();
};


var _movies = 
</script>