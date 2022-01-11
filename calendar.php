<?php

include "models/personne.class.php";
$personne = new personne("", "", "", "", "", "", "", "", "", "", "", "", "","");
$res_pers = $personne->detail($_REQUEST["pers"]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<base href="https://www.pigno.se/barn/PIGNOSE-Calendar/">
<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta property="og:url" content="http://www.pigno.se/barn/PIGNOSE-Calendar">
<meta property="og:type" content="product" />
<meta property="og:title" content="PIGNOSE Calendar" />
<meta property="og:description" content="PIGNOSE Calendar is beautiful and eidetic jQuery date picker plugin" />
<meta property="og:image" content="http://www.pigno.se/barn/PIGNOSE-Calendar/demo/img/cover@250.png" />
<meta property="og:site_name" content="PIGNOSE" />
<title>PIGNOSE Calendar</title>
<meta name="description" content="PIGNOSE Calendar is beautiful and eidetic jQuery date picker plugin" />
<link rel="shortcut icon" type="image/x-icon" href="demo/img/pignose-ico.ico" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/themes/prism.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/components/icon.min.css">
<link rel="stylesheet" type="text/css" href="demo/css/style.css" />
<link rel="stylesheet" type="text/css" href="demo/css/ui.css" />
<link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.min.css" />
<style>
      .pignose-calendar .pignose-calendar-header .pignose-calendar-week.pignose-calendar-week-sat, .pignose-calendar .pignose-calendar-header .pignose-calendar-week.pignose-calendar-week-sun {
            color: #372ad1;
      }
      .pignose-calendar .pignose-calendar-unit.pignose-calendar-unit-active a {
            background-color: #372ad1;
            
      }
      .pignose-calendar .pignose-calendar-unit.pignose-calendar-unit-sat a, .pignose-calendar .pignose-calendar-unit.pignose-calendar-unit-sun a {
            color: #372ad1;

      }
      .pignose-calendar .pignose-calendar-top {
            background-color: #372ad1;
            color:#FFF;
      }
      .pignose-calendar .pignose-calendar-top .pignose-calendar-top-year {
            color:#FFF;
      }
      .btnSend {
            cursor: pointer;
            background: #372ad1;
    color: #FFF;
    padding: 10px 20px;
    border: 0px;
    border-radius: 20px;
      }
      #clickEvent {
            cursor:pointer;
            color: #1e70bf;
    text-decoration: none;
      }
      .resume {
            display:none;
      }
      .recap {
            display:none;
            background: linear-gradient(
0deg, rgba(157,157,157,1) 0%, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 77%, rgba(223,223,223,1) 100%);
    padding: 30px;
    margin: 10px;
      }
      .listCreneaux {
            display: inline-flex;
    justify-content: center;
    list-style: none;
    margin-left: -40px;
      }
      .listCreneaux li {
            cursor :pointer;
            margin: 0 10px;
    padding: 3px 10px;
    background: #b7bbff;
    color: #673ab7;
    border-radius: 3px;
    font-weight: bold;
      }
      .article {
            border-top : 0 !important;
            margin-top: 0 !important;
            margin-top: -62px !important;
            width: 100%;
      }
      .pignose-calendar {
    width: 99%;
    max-width: 100%;
      }
      .pignose-calendar .pignose-calendar-unit a {
            display: inline-block;
    width: 100%;
    height: 100%;
     border-radius: 0;
    color: #787878;
    border: 1px solid #CCC;
    line-height: 2.4em;
    text-align: center;
    text-decoration: none;
    -webkit-transition: background-color .3s ease,color .3s ease;
    transition: background-color .3s ease,color .3s ease;
      }
      .pignose-calendar .pignose-calendar-unit.pignose-calendar-unit-disabled a {
    opacity: .5;
    background-color: #757575;
    color: #FFF;
} 
</style>

</head>
<body>
<div id="wrapper">

<div class="resume">
      <h3>Rendez-vous avec <?php echo ($res_pers->nom_prenom_pers); ?></h3>
      <h4 id="date2"></h4>
      
      <span>Choisissez un créneau horaire pour vous inscrire</span>
      <div>
            <ul class="listCreneaux">
      <li data="13h - 14h">13-14h</li>
      <li data="14h - 15h" >14h-15h</li>
      <li data="15h - 16h">15-16h</li>

</ul>
<div class="recap">
<p>Le <b id="date"></b> de <b id="creneau"></b> autour de la photographie à Centre DuoForm</p>
<div align="center">
<button class="btnSend">Envoyer Demande</button>
</div>
</div>

</div>

</div>


<div id="disabled" class="article">
<div class="box"></div>

<div class="disabled-dates-calendar"></div>


</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script type="text/javascript" src="dist/js/pignose.calendar.full.min.js"></script>
<script type="text/javascript">


$(document).on ("click", ".btnSend", function () {
      window.parent.$('#btnModal').trigger('click');

      setTimeout(function () {
            window.parent.$('#step1').hide();

            window.parent.$('#step2').fadeIn("fast");
}, 1500);

});

          $(document).on ("click", "#clickEvent", function () {
    
            $('.disabled-dates-calendar').fadeOut('fast');
            $('.box').fadeOut('fast');

      $('.resume').fadeIn('fast');

      });
$('.listCreneaux li').click(function() {
      var creneau = $(this).attr('data');
      $('.recap #creneau').html(creneau);
      $('.recap').fadeIn('fast');

})

    //<![CDATA[
    $(function () {
        $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.version);

        function onSelectHandler(date, context) {
            /**
             * @date is an array which be included dates(clicked date at first index)
             * @context is an object which stored calendar interal data.
             * @context.calendar is a root element reference.
             * @context.calendar is a calendar element reference.
             * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
             * @context.storage.events is all events associated to this date
             */

            var $element = context.element;
            var $calendar = context.calendar;
            var $box = $element.siblings('.box').show();
            var text = 'Prendre rendez-vous le ';

            if (date[0] !== null) {
                text += date[0].format('YYYY-MM-DD');
                $('.recap #date').html(date[0].format('YYYY-MM-DD'));
                $('.recap #date2').html(date[0].format('YYYY-MM-DD'));

            }

            if (date[0] !== null && date[1] !== null) {
                text += ' ~ ';
            }
            else if (date[0] === null && date[1] == null) {
                text += 'nothing';
            }

            if (date[1] !== null) {
                text += date[1].format('YYYY-MM-DD');
            }
            text = "<span  id='clickEvent'>"+text+"</span>";

            $box.html(text);
        }

        function onApplyHandler(date, context) {
            /**
             * @date is an array which be included dates(clicked date at first index)
             * @context is an object which stored calendar interal data.
             * @context.calendar is a root element reference.
             * @context.calendar is a calendar element reference.
             * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
             * @context.storage.events is all events associated to this date
             */

            var $element = context.element;
            var $calendar = context.calendar;
            var $box = $element.siblings('.box').show();
            var text = 'You applied date ';

            if (date[0] !== null) {
                text += date[0].format('YYYY-MM-DD');
            }

            if (date[0] !== null && date[1] !== null) {
                text += ' ~ ';
            }
            else if (date[0] === null && date[1] == null) {
                text += 'nothing';
            }

            if (date[1] !== null) {
                text += date[1].format('YYYY-MM-DD');
            }

            $box.text(text);
        }

        // Default Calendar
        $('.calendar').pignoseCalendar({
            select: onSelectHandler
        });

        // Input Calendar
        $('.input-calendar').pignoseCalendar({
            apply: onApplyHandler,
            buttons: true, // It means you can give bottom button controller to the modal which be opened when you click.
        });

        // Calendar modal
        var $btn = $('.btn-calendar').pignoseCalendar({
            apply: onApplyHandler,
            modal: true, // It means modal will be showed when you click the target button.
            buttons: true
        });

        // Color theme type Calendar
        $('.calendar-dark').pignoseCalendar({
            theme: 'dark', // light, dark, blue
            select: onSelectHandler
        });

        // Blue theme type Calendar
        $('.calendar-blue').pignoseCalendar({
            theme: 'blue', // light, dark, blue
            select: onSelectHandler
        });

        // Schedule Calendar
        $('.calendar-schedules').pignoseCalendar({
            scheduleOptions: {
                colors: {
                    holiday: '#2fabb7',
                    seminar: '#5c6270',
                    meetup: '#ef8080'
                }
            },
            schedules: [{
                name: 'holiday',
                date: '2017-08-08'
            }, {
                name: 'holiday',
                date: '2017-09-16'
            }, {
                name: 'holiday',
                date: '2017-10-01',
            }, {
                name: 'holiday',
                date: '2017-10-05'
            }, {
                name: 'holiday',
                date: '2017-10-18',
            }, {
                name: 'seminar',
                date: '2017-11-14'
            }, {
                name: 'seminar',
                date: '2017-12-01',
            }, {
                name: 'meetup',
                date: '2018-01-16'
            }, {
                name: 'meetup',
                date: '2018-02-01',
            }, {
                name: 'meetup',
                date: '2018-02-18'
            }, {
                name: 'meetup',
                date: '2018-03-04',
            }, {
                name: 'meetup',
                date: '2018-04-01'
            }, {
                name: 'meetup',
                date: '2018-04-19',
            }],
            select: function (date, context) {
                var message = `You selected ${(date[0] === null ? 'null' : date[0].format('YYYY-MM-DD'))}.
							   <br />
							   <br />
							   <strong>Events for this date</strong>
							   <br />
							   <br />
							   <div class="schedules-date"></div>`;
                var $target = context.calendar.parent().next().show().html(message);

                for (var idx in context.storage.schedules) {
                    var schedule = context.storage.schedules[idx];
                    if (typeof schedule !== 'object') {
                        continue;
                    }
                    $target.find('.schedules-date').append('<span class="ui label default">' + schedule.name + '</span>');
                }
            }
        });

        // Multiple picker type Calendar
        $('.multi-select-calendar').pignoseCalendar({
            multiple: true,
            select: onSelectHandler
        });

        // Toggle type Calendar
        $('.toggle-calendar').pignoseCalendar({
            toggle: true,
            select: function (date, context) {
                var message = `You selected ${(date[0] === null ? 'null' : date[0].format('YYYY-MM-DD'))}.
                                <br />
                                <br />
                                <strong>Events for this date</strong>
                                <br />
                                <br />
                                <div class="active-dates"></div>`;
                var $target = context.calendar.parent().next().show().html(message);

                for (var idx in context.storage.activeDates) {
                    var date = context.storage.activeDates[idx];
                    if (typeof date !== '<span class="ui label"><i class="fas fa-code"></i>string</span>') {
                        continue;
                    }
                    $target.find('.active-dates').append('<span class="ui label default">' + date + '</span>');
                }
            }
        });

        // Disabled date settings.
        (function () {
            // IIFE Closure
            var times = 30;
            var disabledDates = [];
            for (var i = 0; i < times; /* Do not increase index */) {
                var year = moment().year();
                var month = 0;
                var day = parseInt(Math.random() * 364 + 1);
                var date = moment().year(year).month(month).date(day).format('YYYY-MM-DD');
                if ($.inArray(date, disabledDates) === -1) {
                    disabledDates.push(date);
                    i++;
                }
            }

            disabledDates.sort();

            var $dates = $('.disabled-dates-calendar').siblings('.guide').find('.guide-dates');
            for (var idx in disabledDates) {
                $dates.append('<span>' + disabledDates[idx] + '</span>');
            }

            $('.disabled-dates-calendar').pignoseCalendar({
                select: onSelectHandler,
                disabledDates: disabledDates
            });
        }());

        // Disabled Weekdays Calendar.
        $('.disabled-weekdays-calendar').pignoseCalendar({
            select: onSelectHandler,
            disabledWeekdays: [0, 6]
        });

        // Disabled Range Calendar.
        var minDate = moment().set('dates', Math.min(moment().day(), 2 + 1)).format('YYYY-MM-DD');
        var maxDate = moment().set('dates', Math.max(moment().day(), 24 + 1)).format('YYYY-MM-DD');
        $('.disabled-range-calendar').pignoseCalendar({
            select: onSelectHandler,
            minDate: minDate,
            maxDate: maxDate
        });

        // Multiple Week Select
        $('.pick-weeks-calendar').pignoseCalendar({
            pickWeeks: true,
            multiple: true,
            select: onSelectHandler
        });

        // Disabled Ranges Calendar.
        $('.disabled-ranges-calendar').pignoseCalendar({
            select: onSelectHandler,
            disabledRanges: [
                ['2016-10-05', '2016-10-21'],
                ['2016-11-01', '2016-11-07'],
                ['2016-11-19', '2016-11-21'],
                ['2016-12-05', '2016-12-08'],
                ['2016-12-17', '2016-12-18'],
                ['2016-12-29', '2016-12-30'],
                ['2017-01-10', '2017-01-20'],
                ['2017-02-10', '2017-04-11'],
                ['2017-07-04', '2017-07-09'],
                ['2017-12-01', '2017-12-25'],
                ['2018-02-10', '2018-02-26'],
                ['2018-05-10', '2018-09-17'],
            ]
        });

        // I18N Calendar
        $('.language-calendar').each(function () {
            var $this = $(this);
            var lang = $this.data('lang');
            $this.pignoseCalendar({
                lang: lang
            });
        });

        // This use for DEMO page tab component.
        $('.menu .item').tab();
    });
    //]]>
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/prism.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/components/prism-javascript.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/components/prism-typescript.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/components/prism-json.min.js"></script>
<script type="text/javascript" src="https://twemoji.maxcdn.com/2/twemoji.min.js?2.5"></script>
</body>
</html>
