var reservation = reservation || {};

reservation.manager = function () {

    var bookingData,
        rows,
        buttons = $('.res-btn'),
        btnReservation = $('#res-reservation'),
        btnBuy = $('#res-buy'),
        msg = $('#res-choose-seat'),
        seatFields = $('.res-seat-field'),
        nameField = $('#res-name .res-data'),
        locationField = $('#res-location .res-data'),
        dateField = $('#res-date .res-data'),
        timeField = $('#res-time .res-data'),
        languageField = $('#res-language .res-data'),
        rowField = $('#res-row .res-data'),
        seatsField = $('#res-seats .res-data'),
        priceField = $('#res-price .res-data');


    this.init = function () {
        rows = $('.res-chair-row').length;
        initBookingData();
        initFocusEventHandler();
        initSelectionEventHandler();
        initReservationHandler();
        initBuyHandler();
        updateSeats();
    };

    var initBookingData = function () {
        var data = location.hash.substr(1).split(';;');
        bookingData = {
            name: data[0],
            language: data[1],
            location: data[2],
            pricePerSeat: data[3],
            dateTime: moment(new Date(parseInt(data[4], 10))),
            price: 0,
            row: 0,
            seats: ''
        };

        nameField.text(bookingData.name);
        languageField.text(bookingData.language);
        locationField.text(bookingData.location);
        dateField.text(bookingData.dateTime.format("dddd, Do MMMM YYYY"))
        timeField.text(bookingData.dateTime.format("HH:mm"));
    };

    var initFocusEventHandler = function () {
        var seatInput = $('[name="numSeats"]');

        $('.res-chair:not(.occupied)').mouseover(function () {
            var chair = $(this),
                numSeats = seatInput.val(),
                chairs = [],
                prevChair = chair.prev(),
                isSelected = chair.hasClass('focused') && (!prevChair.length || !prevChair.hasClass('focused'));

            $('.res-chair.focused').removeClass('focused');

            if (!isSelected) {
                for (var i = 0; i < numSeats; i++) {
                    if (!chair.length || chair.hasClass('occupied')) {
                        return;
                    } else {
                        chairs.push(chair);
                        chair = chair.next();
                    }
                }

                $.each(chairs, function (index, element) {
                    $(element).addClass('focused');
                });
            }

        });

        $(document).on('mouseout', '.res-chair.focused', function () {
            $('.res-chair.focused').removeClass('focused');
        })
    };

    var initSelectionEventHandler = function () {
        var seatInput = $('[name="numSeats"]');

        $('.res-chair:not(.occupied)').click(function () {
            var chair = $(this),
                numSeats = seatInput.val(),
                chairs = [],
                prevChair = chair.prev(),
                isSelected = chair.hasClass('selected') && (!prevChair.length || !prevChair.hasClass('selected'));

            $('.res-chair.selected').removeClass('selected');
            $('.res-chair.focused').removeClass('focused');

            if (!isSelected) {
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
            }

            updateSeats();
        });
    };

    var updateSeats = function () {
        var selectedSeats = $('.res-chair.selected');
        if (!selectedSeats.length) {
            buttons.prop('disabled', true);
            msg.show();
            seatFields.hide();
            return;
        }

        var row = rows - selectedSeats.parent().index(),
            firstSeat = 1 + selectedSeats.index(),
            numSeats = selectedSeats.length,
            seats = numSeats > 1 ? firstSeat + ' - ' + (firstSeat + numSeats - 1) : firstSeat;

        bookingData.row = row;
        bookingData.seats = seats;
        bookingData.price = bookingData.pricePerSeat * numSeats;

        rowField.text(bookingData.row);
        seatsField.text(bookingData.seats);
        priceField.text('CHF ' + bookingData.price);

        buttons.prop('disabled', false);
        msg.hide();
        seatFields.show();
    };

    var initBuyHandler = function () {
        btnBuy.click(function () {
            $('.res-404').modal();
        });
    };

    var initReservationHandler = function () {
        btnReservation.click(function () {
            postToUrl('ticket.php', bookingData);
        });
    };

    var postToUrl = function (url, params, method, target) {
        // create form
        var form = $('<form/>').attr({method: method || "post", action: url});
        // add target
        if (target) {
            form.attr('target', target);
        }
        // append parameters
        $.each(params, function (key, value) {
            $('<input type="hidden"/>').attr('name', key).val(value).appendTo(form);
        });
        // submit form
        form.appendTo('body').submit();
    }
};

$(function () {
    var manager = new reservation.manager();
    manager.init();
});

