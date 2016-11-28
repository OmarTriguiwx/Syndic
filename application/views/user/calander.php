<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Calendar</title>

	<style>

	body, h1, h2, h3 { margin: 0; font-size: 100%; font-weight: normal; }

	body { padding: 1.25em; font-family: 'Helvetica Neue', Arial, sans-serif; }

	h1 { font-size: 2em; }
	h2 { font-size: 1.5em; }
	h1, h2 { margin: .5em 0; font-weight: bold; }

	.calendar { width: 100%; font-size: 0.75em;/*12*/ line-height: 1.25em;/*15*/ border-collapse: collapse; border-spacing: 0; }

	.calendar th { text-align: left; font-size: 1.75em; }
	.calendar th span { display: none; }

	.calendar tr { display: block; }
	.calendar td,
	.calendar th { display: none; }

	.calendar .day { margin: 1em 0 .5em 0; font-weight: bold; }

	.calendar .events { display: block; }

	.calendar ul { display: block; list-style: none; margin: 0 1.25em 0 0;/*15*/ padding: 0; }
	.calendar li { display: block; position: relative; margin: 0; padding: 0; height: 1.25em;/*15*/ }
	.calendar li a { display: block; position: absolute; left: 0; right: 0; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;  }

	.calendar tr td:nth-of-type(1n) .day:before { content: 'Monday '; }
	.calendar tr td:nth-of-type(2n) .day:before { content: 'Tueday '; }
	.calendar tr td:nth-of-type(3n) .day:before { content: 'Wednesday '; }
	.calendar tr td:nth-of-type(4n) .day:before { content: 'Thursday '; }
	.calendar tr td:nth-of-type(5n) .day:before { content: 'Friday '; }
	.calendar tr td:nth-of-type(6n) .day:before { content: 'Saturday '; }
	.calendar tr td:nth-of-type(7n) .day:before { content: 'Sunday '; }

	.calendar .prev-month,
	.calendar .next-month { display: none; }

	@media only screen and (min-width: 30em) { /*480*/


		.calendar tr { display: table-row; }
		.calendar th, .calendar td { display: table-cell !important; margin: 0; width: 14.2857%; padding: 0.4166em;/*10*/ border: 1px solid #babcbf; vertical-align: top; }

		.calendar .prev-month .day,
		.calendar .next-month .day { color: #bbb; }

		.calendar td .day { display: block; float: right; margin: 0; font-weight: normal; }
		.calendar td .day:before { display: none; }
		.calendar td .suffix { display: none; }

	}

	@media only screen and (min-width: 40em) { /*640*/

		/* show full days (e.g. "Mon" to "Monday") */
		.calendar th span { display: inline; }

	}

	@media only screen and (min-width: 40em) and (min-height: 20em) {

		.calendar td { height: 2.5em;/*30*/ }

	}
	@media only screen and (min-width: 40em) and (min-height: 40em) {

		.calendar td { height: 6.25em;/*75*/ }

	}
	</style>

	<!--[if lte IE 8]>

	/* Fixed width in IE6–8 */

	<style>
		.calendar tr { display: inline !important; }
		.calendar th, .calendar td { display: inline !important; margin: 0; width: 14.2857%; padding: 0.4166em;/*10*/ border: 1px solid #babcbf; vertical-align: top; }
		.calendar .prev-month .day,
		.calendar .next-month .day { color: #bbb; }
		.calendar td .day { display: block; float: right; margin: 0; font-weight: normal; }
		.calendar td .day:before { display: none; }
		.calendar td .suffix { display: none; }
		.calendar th span { display: inline; }
		.calendar td { height: 2.5em;/*30*/ }
		.calendar td { height: 6.25em;/*75*/ }
	</style>

	<![endif]-->

 </head>
<body>


	<table class="calendar">
		<thead>
			<tr>

				<th>lundi</th>
				<th>mardi</th>
				<th>mercredi</th>
				<th>jeudi</th>
				<th>vendredi</th>
				<th>samedi</th>
				<th>dimanche</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="prev-month">
					<h3 class="day"><span class="num">26<span class="suffix">th</span></span></h3>
				</td>
				<td class="prev-month">
					<h3 class="day"><span class="num">27<span class="suffix">th</span></span></h3>
				</td>
				<td class="prev-month">
					<h3 class="day"><span class="num">28<span class="suffix">th</span></span></h3>
				</td>
				<td class="prev-month">
					<h3 class="day"><span class="num">29<span class="suffix">th</span></span></h3>
				</td>
				<td class="prev-month">
					<h3 class="day"><span class="num">30<span class="suffix">th</span></span></h3>
				</td>
				<td class="prev-month">
					<h3 class="day"><span class="num">31<span class="suffix">st</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">1<span class="suffix">st</span></span></h3>
				</td>
			</tr>
			<tr>
				<td>
					<h3 class="day"><span class="num">2<span class="suffix">nd</span></span></h3>
				</td>
				<td class="events">
					<h3 class="day"><span class="num">3<span class="suffix">rd</span></span></h3>
					<ul>
						<li><a href="#/event/1/">Event One</a></li>
						<li><a href="#/event/2/">Event Two</a></li>
						<li><a href="#/event/3/">Event Three</a></li>
					</ul>
				</td>
				<td>
					<h3 class="day"><span class="num">4<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">5<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">6<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">7<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">8<span class="suffix">th</span></span></h3>
				</td>
			</tr>
			<tr>
				<td class="events">
					<h3 class="day"><span class="num">9<span class="suffix">th</span></span></h3>
					<ul>
						<li><a href="#/event/4/">Event Four</a></li>
					</ul>
				</td>
				<td>
					<h3 class="day"><span class="num">10<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">11<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">12<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">13<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">14<span class="suffix">th</span></span></h3>
				</td>
				<td style="background-color:rgba(0,255,0,0.3);">
					<h3 class="day"><span class="num">15<span class="suffix">th</span></span></h3>
				</td>
			</tr>
			<tr>
				<td style="background-color:rgba(0,255,0,0.3);">
					<h3 class="day"><span class="num">16<span class="suffix">th</span></span></h3>
				</td>
				<td style="background-color:rgba(0,255,0,0.3);">
					<h3 class="day"><span class="num">17<span class="suffix">th</span></span></h3>
				</td>
				<td class="events">
					<h3 class="day"><span class="num">18<span class="suffix">th</span></span></h3>
					<ul>
						<li><a href="#/event/5/">Event Five</a></li>
					</ul>
				</td>
				<td class="events">
					<h3 class="day"><span class="num">19<span class="suffix">th</span></span></h3>
					<ul>
						<li><a href="#/event/6/">Event Six</a></li>
					</ul>
				</td>
				<td >
					<h3 class="day"><span class="num">20<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">21<span class="suffix">st</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">22<span class="suffix">nd</span></span></h3>
				</td>
			</tr>
			<tr>
				<td>
					<h3 class="day"><span class="num">23<span class="suffix">rd</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">24<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">25<span class="suffix">th</span></span></h3>
				</td>
				<td style="background-color:rgba(255,0,0,0.3);">
					<h3 class="day" ><span class="num">26<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">27<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">28<span class="suffix">th</span></span></h3>
				</td>
				<td class="events">
					<h3 class="day"><span class="num">29<span class="suffix">th</span></span></h3>
					<ul>
						<li><a href="#/event/7/">Event Seven</a></li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<h3 class="day"><span class="num">30<span class="suffix">th</span></span></h3>
				</td>
				<td>
					<h3 class="day"><span class="num">31<span class="suffix">st</span></span></h3>
				</td>
				<td class="next-month">
					<h3 class="day"><span class="num">1<span class="suffix">st</span></span></h3>
				</td>
				<td class="next-month">
					<h3 class="day"><span class="num">2<span class="suffix">nd</span></span></h3>
				</td>
				<td class="next-month">
					<h3 class="day"><span class="num">3<span class="suffix">rd</span></span></h3>
				</td>
				<td class="next-month">
					<h3 class="day"><span class="num">4<span class="suffix">th</span></span></h3>
				</td>
				<td class="next-month">
					<h3 class="day"><span class="num">5<span class="suffix">th</span></span></h3>
				</td>
			</tr>
		</tbody>
	</table>
	

</body>
</html>