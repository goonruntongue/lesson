$("form").on("submit", function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    $.ajax({
        url: "backend.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(result) {
            console.log(result);
        }
    })
})