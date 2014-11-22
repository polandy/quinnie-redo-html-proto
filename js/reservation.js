var reservation = reservation || {};

reservation.manager = function () {
    var seatInput = $('[name="numSeats"]');

    $('.res-chair').click(function () {
        var chair = $(this),
            numSeats = seatInput.val(),
            chairs = [];

        $('.res-chair.selected').removeClass('selected');

        for (var i = 0; i < numSeats; i++) {
            if (!chair.length || chair.hasClass('occupied')) {
                $('.res-dialog').modal();
                return;
            } else {
                chairs.push(chair);
                chair = chair.next();
            }
        }

        $.each(chairs, function (index, element) {
            $(element).addClass('selected');
        });
    });
};

$(function () {
    new reservation.manager();
});

