		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Calendar JS -->
		<script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/fullcalendar.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/js/chart.js"></script>
		
		<!-- Calender Plugin --->
		<script>

			$(function() {
				
				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next,today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay,listWeek'
					},
					height: 590,
					
					editable: true,
					navLinks: true,
					eventLimit: true, // allow "more" link when there are too many events
					selectable: true,
					selectHelper: true,
					select: function(start, end) {
						
						$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
						$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
						$('#ModalAdd').modal('show');
					},
					eventAfterRender: function(eventObj, $el) {
						var request = new XMLHttpRequest();
						request.open('GET', '', true);
						request.onload = function () {
							$el.popover({
								title: eventObj.title,
								content: eventObj.description,
								trigger: 'hover',
								placement: 'top',
								container: 'body'
							});
						}
					request.send();
					},
			
					eventRender: function(event, element) {
						element.bind('click', function() {
							$('#ModalEdit #id').val(event.id);
							$('#ModalEdit #title').val(event.title);
							$('#ModalEdit #description').val(event.description);
							$('#ModalEdit #color').val(event.color);
							$('#ModalEdit').modal('show');
						});
					},
					eventDrop: function(event, delta, revertFunc) { // si changement de position

						edit(event);

					},
					eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

						edit(event);

					},
					events: './calender/load.php'
				});
				
			});

		</script>

		<script src="calender/add-event.js"></script>
		<script src="includes/update.js"></script>

		
		<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3jQOcOFgfWrdqFWXvCl3RzsyS_c1DYmY&callback=initAutocomplete&libraries=places&v=weekly"
		async
		></script>
		<script src="auto.js"></script>
		
    </body>
</html>