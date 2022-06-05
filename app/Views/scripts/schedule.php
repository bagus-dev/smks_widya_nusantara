<script>
    $(function() {
        const Calendar = FullCalendar.Calendar;
        const CalendarEl = document.getElementById("calendar");

        const calendar = new Calendar(CalendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            locale: 'id',
            themeSystem: 'bootstrap',
            events: "<?= base_url('registration/schedule/load'); ?>",
            dayMaxEvents: true,
            navLinks: true,
            initialView: 'listMonth'
        });

        calendar.render();
    });
</script>