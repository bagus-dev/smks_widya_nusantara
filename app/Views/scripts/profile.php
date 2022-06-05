<script>
    const base_url = "<?= base_url() ?>";

    $('#btnCertif').click(function() {
        document.getElementById('certificate').click();
    });

    $('#certificate').on('change', () => {
        let certif = document.getElementById('certificate');
        
        if(certif.value.trim() !== "") {
            $.ajax({
                type: "POST",
                url: "/registration/file/certificate",
                data: new FormData(document.getElementById('form_certif')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#btnCertif").html('<i class="fas fa-spinner fa-spin" id="btnload"></i> Loading...');
                    $("#btnCertif").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        $('#td-certif').html(`
                            <a href="${base_url}/assets/files/certificate/${response.name}" title="Lihat Ijazah" target="_blank">${base_url}/assets/files/certificate/${response.name}</a>
                        `);
                        $("#certificate").val("");
                        $("#invalidCertif").text("");

                        Swal.fire({
                            icon: 'success',
                            title: 'Ijazah Berhasil Diubah!',
                            timer: 4000,
                            timerProgressBar: true
                        });
                    } else if(response.status === 0) {
                        if(response.errors["certificate"]) {
                            $("#invalidCertif").text(response.errors['certificate']);
                        } else {
                            $("#invalidCertif").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Ijazah Gagal Diubah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Ijazah Gagal Diubah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#btnCertif").html('<i class="fas fa-edit"></i> Edit');
                    $("#btnCertif").removeAttr("disabled");
                }
            });
        } else {
            $("#certificate").val("");
            $("#invalidCertif").text("");
        }
    });

    $('#btnSkhu').click(function() {
        document.getElementById('skhu').click();
    });

    $('#skhu').on('change', () => {
        let skhu = document.getElementById('skhu');
        
        if(skhu.value.trim() !== "") {
            $.ajax({
                type: "POST",
                url: "/registration/file/skhu",
                data: new FormData(document.getElementById('form_skhu')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#btnSkhu").html('<i class="fas fa-spinner fa-spin" id="btnload"></i> Loading...');
                    $("#btnSkhu").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        $('#td-skhu').html(`
                            <a href="${base_url}/assets/files/skhu/${response.name}" title="Lihat SKHU" target="_blank">${base_url}/assets/files/skhu/${response.name}</a>
                        `);
                        $("#skhu").val("");
                        $("#invalidSkhu").text("");

                        Swal.fire({
                            icon: 'success',
                            title: 'SKHU Berhasil Diubah!',
                            timer: 4000,
                            timerProgressBar: true
                        });
                    } else if(response.status === 0) {
                        if(response.errors["skhu"]) {
                            $("#invalidSkhu").text(response.errors['skhu']);
                        } else {
                            $("#invalidSkhu").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'SKHU Gagal Diubah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'SKHU Gagal Diubah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#btnSkhu").html('<i class="fas fa-edit"></i> Edit');
                    $("#btnSkhu").removeAttr("disabled");
                }
            });
        } else {
            $("#skhu").val("");
            $("#invalidSkhu").text("");
        }
    });

    $('#btnFamily').click(function() {
        document.getElementById('family_card').click();
    });

    $('#family_card').on('change', () => {
        let family_card = document.getElementById('family_card');
        
        if(family_card.value.trim() !== "") {
            $.ajax({
                type: "POST",
                url: "/registration/file/family_card",
                data: new FormData(document.getElementById('form_family_card')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#btnFamily").html('<i class="fas fa-spinner fa-spin" id="btnload"></i> Loading...');
                    $("#btnFamily").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        $('#td-kk').html(`
                            <a href="${base_url}/assets/files/family_card/${response.name}" title="Lihat Kartu Keluarga" target="_blank">${base_url}/assets/files/family_card/${response.name}</a>
                        `);
                        $("#family_card").val("");
                        $("#invalidFamily").text("");

                        Swal.fire({
                            icon: 'success',
                            title: 'Kartu Keluarga(KK) Berhasil Diubah!',
                            timer: 4000,
                            timerProgressBar: true
                        });
                    } else if(response.status === 0) {
                        if(response.errors["family_card"]) {
                            $("#invalidFamily").text(response.errors['family_card']);
                        } else {
                            $("#invalidFamily").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Kartu Keluarga(KK) Gagal Diubah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Kartu Keluarga(KK) Gagal Diubah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#btnFamily").html('<i class="fas fa-edit"></i> Edit');
                    $("#btnFamily").removeAttr("disabled");
                }
            });
        } else {
            $("#family_card").val("");
            $("#invalidFamily").text("");
        }
    });

    $('#btnImage').click(function() {
        document.getElementById('image').click();
    });

    $('#image').on('change', () => {
        let image = document.getElementById('image');
        
        if(image.value.trim() !== "") {
            $.ajax({
                type: "POST",
                url: "/registration/file/image",
                data: new FormData(document.getElementById('form_image')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#btnImage").html('<i class="fas fa-spinner fa-spin" id="btnload"></i> Loading...');
                    $("#btnImage").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        $('#td-image').html(`
                            <a href="${base_url}/assets/img/users/${response.name}" title="Lihat Pas Foto" target="_blank">${base_url}/assets/img/users/${response.name}</a>
                        `);
                        $("#image").val("");
                        $("#invalidImage").text("");

                        let img = document.getElementById('imgProfile');
                        img.src = `${base_url}/assets/img/users/${response.name}`;

                        Swal.fire({
                            icon: 'success',
                            title: 'Pas Foto Berhasil Diubah!',
                            timer: 4000,
                            timerProgressBar: true
                        });
                    } else if(response.status === 0) {
                        if(response.errors["image"]) {
                            $("#invalidImage").text(response.errors['image']);
                        } else {
                            $("#invalidImage").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Pas Foto Gagal Diubah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Pas Foto Gagal Diubah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#btnImage").html('<i class="fas fa-edit"></i> Edit');
                    $("#btnImage").removeAttr("disabled");
                }
            });
        } else {
            $("#image").val("");
            $("#invalidImage").text("");
        }
    });
</script>