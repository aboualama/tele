function resetInputs() {
    $("input[type=text],input, textarea").val("");
}

function notifySuccess(data, type = 'success') {
    $.notify(data.msg, type);
}
