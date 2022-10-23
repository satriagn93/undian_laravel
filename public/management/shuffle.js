function dp1() {
    document.getElementById('doorprizevalue').value = "1";
    $("#formdiv").show('');
    $('#p1value').html("1");
}
function dp2() {
    document.getElementById('doorprizevalue').value = "2";
    $("#formdiv").show('');
    $('#p1value').html("2");
}
function dp3() {
    document.getElementById('doorprizevalue').value = "3";
    $("#formdiv").show('');
    $('#p1value').html("3");
}
function dp4() {
    document.getElementById('doorprizevalue').value = "4";
    $("#formdiv").show('');
    $('#p1value').html("4");
}
function dp5() {
    document.getElementById('doorprizevalue').value = "5";
    $("#formdiv").show('');
    $('#p1value').html("5");
}
function dp7() {
    document.getElementById('doorprizevalue').value = "7";
    $("#formdiv").show('');
    $('#p1value').html("7");
}
function dp8() {
    document.getElementById('doorprizevalue').value = "8";
    $("#formdiv").show('');
    $('#p1value').html("8");
}
function dp9() {
    document.getElementById('doorprizevalue').value = "9";
    $("#formdiv").show('');
    $('#p1value').html("9");
}
function dp10() {
    document.getElementById('doorprizevalue').value = "10";
    $("#formdiv").show('');
    $('#p1value').html("10");
}
function dp6() {
    document.getElementById('doorprizevalue').value = "6";
    $("#formdiv").show('');
    $('#p1value').html("6");
}
function dp11() {
    document.getElementById('doorprizevalue').value = "11";
    $("#formdiv").show('');
    $('#p1value').html("11");
}
function dp12() {
    document.getElementById('doorprizevalue').value = "12";
    $("#formdiv").show('');
    $('#p1value').html("12");
}
function dp13() {
    document.getElementById('doorprizevalue').value = "13";
    $("#formdiv").show('');
    $('#p1value').html("13");
}
function dp14() {
    document.getElementById('doorprizevalue').value = "14";
    $("#formdiv").show('');
    $('#p1value').html("14");
}
function dp15() {
    document.getElementById('doorprizevalue').value = "15";
    $("#formdiv").show('');
    $('#p1value').html("15");
}
function dp16() {
    document.getElementById('doorprizevalue').value = "16";
    $("#formdiv").show('');
    $('#p1value').html("16");
}

function addshuffle() {
    id = $("#doorprizevalue").val();
    $.ajax({
        type: "GET",
        url: "/participantbyid/" + id,
        success: function(data) {
            $("#edit-Items").modal('show');

            $("#form-create input[name=name_model]").val(data.detail.name);
            $("#form-create input[name=number_model]").val(data.detail.number);
            $("#form-create input[name=doorprize_model]").val(id);
        }
    });
}