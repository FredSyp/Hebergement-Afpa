// Full Calendar
document.addEventListener('DOMContentLoaded', function () {
	var containerEl = document.getElementById('external-events');
	new FullCalendar.Draggable(containerEl, {
		itemSelector: '.fc-event',
		eventData: function (eventEl) {
			return {
				title: eventEl.innerText.trim(),
				className: eventEl.className + ' overflow-hidden'
			}
		}
	});
	var calendarEl = document.getElementById('calendar2');

	var calendar = new FullCalendar.Calendar(calendarEl, {
		headerToolbar: {
			left: 'prev,next today',
			center: 'title',
			right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
		},

		initialView: 'dayGridMonth', // Utilisez "initialView" au lieu de "defaultView"

		navLinks: true,
		businessHours: {
			daysOfWeek: [1, 2, 3], // Lundi, Mardi, Mercredi
			startTime: '08:00', // Heure de début (8:00 AM)
			endTime: '18:00' // Heure de fin (6:00 PM)
		},
		editable: true,
		selectable: true,
		selectMirror: true,
		droppable: true,
		select: function (arg) {
			var title = prompt('Event Title:');
			if (title) {
				calendar.addEvent({
					title: title,
					start: arg.start,
					end: arg.end,
					allDay: arg.allDay
				});
			}
			calendar.unselect();
		},
		eventClick: function (arg) {
			if (confirm('Êtes-vous sûr de supprimer cet événement?')) {
				arg.event.remove();
			}
		},
		dayMaxEvents: true,
		events: [
			{
				title: 'Business Lunch',
				start: '2023-10-03T13:00:00',
				constraint: 'businessHours'
			},
			{
				title: 'Meeting',
				start: '2023-10-13T11:00:00',
				constraint: 'availableForMeeting',
				color: '#38cab3'
			},
			{
				title: 'Conference',
				start: '2023-10-18',
				end: '2023-10-20',
				color: '#f74f75'
			},
			{
				title: 'Party',
				start: '2023-11-29T20:00:00',
				color: '#ffbd5a'
			},
		],
		eventConstraint: {
			id: 'availableForMeeting',
			start: '2023-10-11T10:00:00',
			end: '2023-10-11T16:00:00',
		},
	});
	calendar.render();
});

// List FullCalendar
document.addEventListener('DOMContentLoaded', function () {
	var calendarEl = document.getElementById('calendar');
	var calendar = new FullCalendar.Calendar(calendarEl, {
		height: 'auto',
		headerToolbar: {
			left: 'prev,next today',
			center: 'title',
			right: 'listDay,listWeek'
		},
		views: {
			listDay: { buttonText: 'Liste jour' },
			listWeek: { buttonText: 'Liste semaine' }
		},
	});
	calendar.render();
});

// Sélectionnez2 dropdown (vous devez inclure la bibliothèque Select2 dans votre projet)
$('.select2').select2({
	minimumResultsForSearch: Infinity,
	width: '100%'
});

$('.select2-show-search').select2({
	minimumResultsForSearch: '',
	width: '100%'
});
