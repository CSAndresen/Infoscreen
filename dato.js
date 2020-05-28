// JavaScript source code
function showDate() {

    var w = new Date();
    var d = new Date();
    var m = new Date();
    var y = new Date();

    var weekdays = ["Søndag", "Mandag", "Tirsdag", "Onsdag", "Torsdag", "Fredag", "Lørdag"];
    var months = ["Januar", "Februar", "Marts", "April", "Maj", "Juni", "Juli", "August", "September", "Oktober", "November", "December"];
    document.getElementById("dagensdato").innerHTML = weekdays[w.getDay()] + " " + d.getDate() + " " + months[m.getMonth()] + " " + y.getFullYear();
}