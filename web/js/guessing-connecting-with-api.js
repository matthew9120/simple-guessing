function sendNumber() {
    var text = $("#ng-text-field").val();

    if (text >= 1 && text <= 100) {
        $.ajax("api/number?guess=" + text, {
            success: function(data, textStatus, jqXHR) {
                if (data > 0) {
                    $("#success-paragraph").html("");
                    $("#error-paragraph").html("Za dużo");
                } else if (data < 0) {
                    $("#success-paragraph").html("");
                    $("#error-paragraph").html("Za mało");
                } else {
                    $("#error-paragraph").html("");
                    $("#success-paragraph").html('Gratulacje trafione!<br><a href="#" class="btn btn-info" onclick="randomizeAnotherNumber();">Zagraj jeszcze raz</a>');
                }
            }
        });
    } else {
        $("#error-paragraph").html("Wpisany numer nie jest pomiędzy 1 i 100");
    }
}

function randomizeAnotherNumber() {
    $("#success-paragraph").html("");
    $("#error-paragraph").html("");
    $.ajax("api/create-number");
}

randomizeAnotherNumber();

$("#ng-accept-button").click(sendNumber);
