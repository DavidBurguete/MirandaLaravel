window.addEventListener("load", () => {
    const false_ci = document.getElementById("false_check_in");
    const real_ci = document.getElementById("real_check_in");
    const false_co = document.getElementById("false_check_out");
    const real_co = document.getElementById("real_check_out");
    const today_and_forward = new Date();
    real_ci.value = today_and_forward.toISOString().split("T")[0];
    const format_today = today_and_forward.toString().split(" ").slice(0, 4);
    today_and_forward.setDate(today_and_forward.getDate() + 2);
    const format_forward = today_and_forward.toString().split(" ").slice(0, 4);
    real_co.value = today_and_forward.toISOString().split("T")[0];

    $("#real_check_in").datepicker({
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        minDate: 0
    });
    $("#real_check_out").datepicker({
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        minDate: 0
    });

    false_ci.value = format_today[0] + ", " + format_day(format_today[2]) + " " + format_today[1] + " " + format_today[3];
    false_co.value = format_forward[0] + ", " + format_day(format_forward[2]) + " " + format_forward[1] + " " + format_forward[3];

    false_ci.addEventListener("click", () => {
        $("#real_check_in").datepicker("show");
    });
    false_co.addEventListener("click", () => {
        $("#real_check_out").datepicker("show");
    });

    $("#real_check_in").on("change", () => {
        var newDay = new Date(real_ci.value).toString().split(" ").slice(0, 4);
        newDay = newDay[0] + ", " + format_day(newDay[2]) + " " + newDay[1] + " " + newDay[3];
        false_ci.value = newDay;

        false_co.value = real_ci.value > real_co.value ? newDay : false_co.value;
    });
    $("#real_check_out").on("change", () => {
        var newDay = new Date(real_co.value).toString().split(" ").slice(0, 4);
        false_co.value = newDay[0] + ", " + format_day(newDay[2]) + " " + newDay[1] + " " + newDay[3];
    });
});

function format_day(toFormat){
    var day = "";
    switch(toFormat % 10){
        case 1:
            day = parseInt(toFormat/10)+"1st";
            break;
        case 2:
            day = parseInt(toFormat/10)+"2nd";
            break;
        case 3:
            day = parseInt(toFormat/10)+"3rd";
            break;
        default:
            day = toFormat + "th";
            break;
    }
    return day;
}