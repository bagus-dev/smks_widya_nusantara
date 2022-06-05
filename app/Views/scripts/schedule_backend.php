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
            events: "<?= base_url('admin/dashboard/regist_schedule/load'); ?>",
            selectable: true,
            select: function(start, end, allDay) {
                Swal.fire({
                    title: "Masukkan Judul Acara",
                    input: "text",
                    showCancelButton: true,
                    cancelButtonColor: "#d33",
                    confirmButtonText: "OK",
                    cancelButtonText: "Batal",
                    showLoaderOnConfirm: true,
                    preConfirm: (judul) => {
                        var startDate = FullCalendar.formatDate(start.startStr, {
                            year: 'numeric',
                            month: '2-digit',
                            day: '2-digit',
                            hour: '2-digit',
                            minute: '2-digit',
                            second: '2-digit',
                            hour12: false
                        });

                        var endDate = FullCalendar.formatDate(start.endStr, {
                            year: 'numeric',
                            month: '2-digit',
                            day: '2-digit',
                            hour: '2-digit',
                            minute: '2-digit',
                            second: '2-digit',
                            hour12: false
                        });

                        $.ajax({
                            type: "POST",
                            url: "/admin/dashboard/regist_schedule/save",
                            data: {title: judul, start:startDate, end:endDate},
                            success: function(response) {
                                calendar.refetchEvents();
                            }
                        })
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if(result.value) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        
                        Toast.fire({
                            icon: 'success',
                            title: 'Acara Berhasil Ditambah.'
                        });
                    }
                })
            },
            editable: true,
            dayMaxEvents: true,
            eventResize: function(info) {
                var startDate = FullCalendar.formatDate(info.event.start, {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                });

                var endDate = FullCalendar.formatDate(info.event.end, {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                });

                var title = info.event.title;
                var id = info.event.id;

                $.ajax({
                    type: "POST",
                    url: "/admin/dashboard/regist_schedule/update",
                    data: {start:startDate, end:endDate, id:id},
                    success: function() {
                        calendar.refetchEvents();
                    },
                    complete: function() {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        
                        Toast.fire({
                            icon: 'success',
                            title: 'Waktu Acara Berhasil Diubah.'
                        });
                    }
                })
            },
            eventDrop: function(info) {
                var startDate = FullCalendar.formatDate(info.event.start, {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                });
                var endDate = FullCalendar.formatDate(info.event.end, {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                });

                var title = info.event.title;
                var id = info.event.id;

                $.ajax({
                    type: "POST",
                    url: "/admin/dashboard/regist_schedule/update",
                    data: {start: startDate, end: endDate, id: id},
                    success: function() {
                        calendar.refetchEvents();
                    },
                    complete: function() {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        
                        Toast.fire({
                            icon: 'success',
                            title: 'Waktu Acara Berhasil Diubah.'
                        });
                    }
                })
            },
            eventClick: function(info) {
                Swal.fire({
                    icon: "question",
                    title: "Konfirmasi Hapus Acara",
                    text: "Yakin Ingin Menghapus Acara?",
                    showCancelButton: true,
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus",
                    cancelButtonText: "Batal",
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        var id = info.event.id;

                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('admin/dashboard/regist_schedule/delete') ?>",
                            data: {id: id},
                            success: function() {
                                calendar.refetchEvents();
                            }
                        })
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if(result.value) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        
                        Toast.fire({
                            icon: 'success',
                            title: 'Acara Berhasil Dihapus.'
                        });
                    }
                })
            },
            navLinks: true
        });

        calendar.render();
    });
</script>