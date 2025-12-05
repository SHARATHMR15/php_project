$(document).ready(function () {
    $("#regForm").submit(function () {
        let phone = $("input[name='phone']").val();

        if (phone.length != 10 || isNaN(phone)) {
            alert("Please enter a valid 10-digit phone number");
            return false;
        }
    });
});
