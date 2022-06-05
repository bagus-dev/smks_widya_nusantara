<script>
    const base_url = "<?= base_url() ?>";

    $('.certif-input').on('change', () => {
        let certif = document.getElementById('certificate');
        
        if(certif.value.trim() !== "") {
            $('.certif-label').text($('#certificate').val().split(/(\\|\/)/g).pop());

            $.ajax({
                type: "POST",
                url: "/registration/file/certificate",
                data: new FormData(document.getElementById('form_certif')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#certificate").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        if(response.files === 1) {
                            let slug = response.slug;

                            window.open(`${base_url}/student/${slug}`,'_self')
                        } else {
                            $('#r-certif').html(`
                                <td colspan="2">
                                    <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                                        <i class="fas fa-check-circle"></i> Ijazah Berhasil Diunggah
                                    </div>
                                </td>
                            `)
                        }
                    } else if(response.status === 0) {
                        if(response.errors["certificate"]) {
                            $("#certificate").addClass("is-invalid");
                            $("#invalidCertif").text(response.errors['certificate']);
                        } else {
                            $("#certificate").removeClass("is-invalid");
                            $("#invalidCertif").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Ijazah Gagal Diunggah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Ijazah Gagal Diunggah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#certificate").removeAttr("disabled");
                }
            });
        } else {
            $("#certificate").val("");
            $(".certif-label").text("Pilih File");
            $("#invalidCertif").text("");
            $("#certificate").removeClass("is-invalid");
        }
    });

    $('#skhu').on('change', () => {
        let skhu = document.getElementById('skhu');
        
        if(skhu.value.trim() !== "") {
            $('.skhu-label').text($('#skhu').val().split(/(\\|\/)/g).pop());

            $.ajax({
                type: "POST",
                url: "/registration/file/skhu",
                data: new FormData(document.getElementById('form_skhu')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#skhu").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        if(response.files === 1) {
                            let slug = response.slug;

                            window.open(`${base_url}/student/${slug}`,'_self')
                        } else {
                            $('#r-skhu').html(`
                                <td colspan="2">
                                    <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                                        <i class="fas fa-check-circle"></i> SKHU Berhasil Diunggah
                                    </div>
                                </td>
                            `)
                        }
                    } else if(response.status === 0) {
                        if(response.errors["skhu"]) {
                            $("#skhu").addClass("is-invalid");
                            $("#invalidSkhu").text(response.errors['skhu']);
                        } else {
                            $("#skhu").removeClass("is-invalid");
                            $("#invalidSkhu").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Surat Keterangan Hasil Ujan (SKHU) Gagal Diunggah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Surat Keterangan Hasil Ujan (SKHU) Gagal Diunggah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#skhu").removeAttr("disabled");
                }
            });
        } else {
            $("#skhu").val("");
            $(".skhu-label").text("Pilih File");
            $("#invalidSkhu").text("");
            $("#skhu").removeClass("is-invalid");
        }
    });

    $('#family_card').on('change', () => {
        let family_card = document.getElementById('family_card');
        
        if(family_card.value.trim() !== "") {
            $('.family-label').text($('#family_card').val().split(/(\\|\/)/g).pop());

            $.ajax({
                type: "POST",
                url: "/registration/file/family_card",
                data: new FormData(document.getElementById('form_kk')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#family_card").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        if(response.files === 1) {
                            let slug = response.slug;

                            window.open(`${base_url}/student/${slug}`,'_self')
                        } else {
                            $('#r-family').html(`
                                <td colspan="2">
                                    <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                                        <i class="fas fa-check-circle"></i> Kartu Keluarga (KK) Berhasil Diunggah
                                    </div>
                                </td>
                            `)
                        }
                    } else if(response.status === 0) {
                        if(response.errors["family_card"]) {
                            $("#family_card").addClass("is-invalid");
                            $("#invalidFamily").text(response.errors['family_card']);
                        } else {
                            $("#family_card").removeClass("is-invalid");
                            $("#invalidFamily").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Kartu Keluarga (KK) Gagal Diunggah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Kartu Keluarga (KK) Gagal Diunggah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#family_card").removeAttr("disabled");
                }
            });
        } else {
            $("#family_card").val("");
            $(".family-label").text("Pilih File");
            $("#invalidFamily").text("");
            $("#family_card").removeClass("is-invalid");
        }
    });

    $('#image').on('change', () => {
        let image = document.getElementById('image');
        
        if(image.value.trim() !== "") {
            $('.image-label').text($('#image').val().split(/(\\|\/)/g).pop());

            $.ajax({
                type: "POST",
                url: "/registration/file/image",
                data: new FormData(document.getElementById('form_image')),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: () => {
                    $("#image").attr("disabled","disabled")
                },
                success: response => {
                    if(response.status === 1) {
                        if(response.files === 1) {
                            let slug = response.slug;

                            window.open(`${base_url}/student/${slug}`,'_self')
                        } else {
                            $('#r-image').html(`
                                <td colspan="2">
                                    <div class="alert alert-success w-100 text-center" style="font-size:15pt">
                                        <i class="fas fa-check-circle"></i> Pas Foto Berhasil Diunggah
                                    </div>
                                </td>
                            `)
                        }
                    } else if(response.status === 0) {
                        if(response.errors["image"]) {
                            $("#image").addClass("is-invalid");
                            $("#invalidImage").text(response.errors['image']);
                        } else {
                            $("#image").removeClass("is-invalid");
                            $("#invalidImage").text("");
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Pas Foto Gagal Diunggah!',
                            text: 'Cek kembali isian form...'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Pas Foto Gagal Diunggah!',
                            text: 'Internal Server Error...'
                        });
                    }
                },
                complete: () => {
                    $("#image").removeAttr("disabled");
                }
            });
        } else {
            $("#image").val("");
            $(".image-label").text("Pilih File");
            $("#invalidImage").text("");
            $("#image").removeClass("is-invalid");
        }
    });
</script>