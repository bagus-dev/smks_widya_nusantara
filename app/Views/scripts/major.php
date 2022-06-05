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
</script>