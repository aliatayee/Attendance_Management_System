function getCountDown(cdate) {
	// Set the unit values in milliseconds.
	var msecPerMinute = 1000 * 60;
	var msecPerHour = msecPerMinute * 60;
	var msecPerDay = msecPerHour * 24;

	// Set a date and get the milliseconds
	var date = new Date();
	var dateMsec = date.getTime();

	// Set the date to January 1, at midnight, of the specified year. 2014,7,20,5,25,30,500

	date = cdate;

	// Get the difference in milliseconds.
	var interval = date.getTime() - dateMsec;

	// Calculate how many days the interval contains. Subtract that
	// many days from the interval to determine the remainder.
	var days = Math.floor(interval / msecPerDay);
	interval = interval - (days * msecPerDay );

	// Calculate the hours, minutes, and seconds.
	var hours = Math.floor(interval / msecPerHour);
	interval = interval - (hours * msecPerHour );

	var minutes = Math.floor(interval / msecPerMinute);
	interval = interval - (minutes * msecPerMinute );

	var seconds = Math.floor(interval / 1000);

	// Display the result.
	//				document.write(days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds.");

	return (((days < 10) ? '0' + days : days) + " : " + ((hours < 10) ? '0' + hours : hours) + " : " + ((minutes < 10) ? '0' + minutes : minutes) + " : " + ((seconds < 10) ? '0' + seconds : seconds));
}

function initNumbers() {
	var x = 260;
	var y = 230;
	var d = 215;
	var r = [];
	for ( i = 11; i >= 0; i--) {
		var span = $('<span class="clock-number"></span>');
		span.text(((i == 0) ? 12 : i) + '');
		span.css('left', (x + (d) * Math.cos(1.57 - 30 * i * (Math.PI / 180))) + 'px');
		span.css('top', (y - (d) * Math.sin(1.57 - 30 * i * (Math.PI / 180))) + 'px');
		r.push(span);
	}
	return r;
}

function scaleCoordinates(delta, firstTime) {
	$('#ticker, #timelable, #timeleft, .clock-number').each(function() {
		//Get X,Y,font size

		if(firstTime == false) {
			$(this).css({'left':$(this).data('x'), 'top':$(this).data('y'), 'fontSize' : $(this).data('font')});
		}

		var x = $(this).css('left');
		//-px
		x = x.substr(0, x.length - 2);
		var y = $(this).css('top');
		y = y.substr(0, y.length - 2);
		var fs = $(this).css('font-size');
		fs = fs.substr(0, fs.length - 2);
		//-px
		if(firstTime) {
			$(this).attr({ 'data-x' : x, 'data-y' : y, 'data-font' : fs });
		}
		//-%
		x = +x + Math.round((delta * x) / 555);
		//Set new X
		y = +y + Math.round((delta * y) / 555);
		//Set new Y
		fs = +fs + ((delta * fs) / 555);
		//set new font size %

		//apply new values to attributes
		$(this).css({
			"left" : x + "px",
			"top" : y + "px",
			"font-size" : fs + "px"
		});
	});
}


$(document).ready(function() {
	if( jQuery('link[href*="css/dark-theme.css"]').length ) {
		var opts={plate:"#424242",marks:"#424242",label:"#424242",hours:"#424242",minutes:"#424242",seconds:"#424242"};
	} else {
		var opts={plate:"#FFFFFF",marks:"#FFFFFF",label:"#FFFFFF",hours:"#FFFFFF",minutes:"#FFFFFF",seconds:"#FFFFFF"};
	}


	SVG('canvas', '100%').clock('100%', '', opts).start();

	var n = initNumbers();
	$('#time-container .numbers-container').append(n);

	$("#canvas").everyTime("1s", function(i) {

		/* Date and time when your site starts to work */

		var c = {
			year : 2020,
			month : 11,
			day : 8,
			hh : 00,
			min : 00,
			sec : 0,
			milsec : 0
		};
		var cd = new Date();
		cd.setYear(c.year);
		cd.setMonth(c.month);
		//month start from 0
		cd.setDate(c.day);
		cd.setHours(c.hh, c.min, c.sec, c.milsec);
		//hh min sec milsec
		$('#timeleft').text(getCountDown(cd));
	});

	//////////////////////////////////////////////////////////////////////////////////////
	var delta = 0;
	var curWidth = $('#time-container').width();
	if (curWidth != null) {
		delta = curWidth - 555;
		scaleCoordinates(delta, true);
	}
	//555 , 450 , 250
	$(window).resize(function() {
		scaleCoordinates($('#time-container').width() - 555, false);
	});
	///////////////////////////////////////////////////////////////////////////////////////

});