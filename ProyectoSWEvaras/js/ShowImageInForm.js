function display(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader()
        var display = document.createElement("img");
        display.id = "display";
        display.width = "100";
		display.height="80";
        document.fquestion.appendChild(display);

        reader.onload = function (e) {
            $('#display').attr('src', e.target.result);

        }

        reader.readAsDataURL(input.files[0])
    }
}


$('document').ready(function () {
    $('#FOTO').change(function () {
        display(this);
    })
})