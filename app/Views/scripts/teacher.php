<script>
    $(".custom-file-input").on("change", function() {
        var image = document.getElementById("image");
        
        if(image.value.trim() !== "") {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            $("#btn-image").removeAttr("disabled");
        } else {
            $("#image").val("");
            $(".custom-file-label").text("Pilih File");
            $("#btn-image").attr("disabled","disabled");
        }
    });

    $("#homeroomStatus").change(() => {
        if($('#homeroomStatus').is(':checked')) {
            $('#formHomeroom').css("display","block");
        } else {
            $('#formHomeroom').css("display","none");
        }
    });

    $("#frontStatus").change(() => {
        if($('#frontStatus').is(':checked')) {
            $('#formFront').css("display","block");
        } else {
            $('#formFront').css("display","none");
        }
    })

    $("#imageStatus").change(() => {
        if($('#imageStatus').is(':checked')) {
            $('#image').removeAttr('disabled');
        } else {
            $('#image').attr('disabled','disabled');
        }
    });
</script>