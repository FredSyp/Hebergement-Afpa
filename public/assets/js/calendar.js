
$(function (e) {
	'use strict'

    //select2 dropdown
    $('.select2-show-search').select2({
        minimumResultsForSearch: Infinity,
        width: '100%'
    });

    //Date Picker
    $("#bootstrapDatePicker").datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
    }).datepicker('update', new Date());

    //Time Picker
    $('#tp4').timepicker();

    $(document).on('click', '#setTimeButton', function () {
        $('#tp4').timepicker('setTime', new Date());
    });
})
$('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    businessHours: {
      // Configuration des heures de travail pour les jours de la semaine
      dow: [1, 2, 3], // Lundi, Mardi, Mercredi
      start: '08:00', // Heure de début (8:00 AM)
      end: '18:00' // Heure de fin (6:00 PM)
    },
    events: [
      // Insérez ici vos événements
    ]
  });
  