<script>
    $('.summernote').summernote({
        dialogsInBody: true,
        maxHeight: 500,
        callbacks: {
            onImageUpload: image => {
                uploadImage(image[0]);
            },
            onMediaDelete: target => {
                deleteImage(target[0].src);
            }
        }
    });

    function uploadImage(image) {
        let data = new FormData();
        data.append("image", image);

        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/dashboard/summernote/upload') ?>",
            data: data,
            dataType: "json",
            cache: false,
            contentType: false,
            processData: false,
            success: response => {
                if(response.status == 1) {
                    $(".summernote").summernote("insertImage", response.url, function($image) {
                        $image.addClass("img-fluid")
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Mengunggah Gambar',
                        text: 'Internal Server Error'
                    });
                }
            }
        })
    }

    function deleteImage(src) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/dashboard/summernote/delete') ?>",
            data: {src: src},
            success: response => {
                if(response != 1) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Menghapus Gambar',
                        text: 'Internal Server Error'
                    });
                }
            },
            error: (request, status, error) => {
                console.log(request.responseText);
            }
        })
    }
</script>