/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function () {

//    $('#autocomplete').autocomplete({
//        serviceUrl: '/autocomplete/countries',
//        onSelect: function (suggestion) {
//            alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
//        }
//    });
//    
    $("#roomsQty").change(function () {

        if ($("#roomsQty").val() == 1) {

            $("#room").addClass("show");

            $("#room1").removeClass("show");
            $("#room2").removeClass("show");
            $("#room3").removeClass("show");
            $("#room4").removeClass("show");

            $("#room1").addClass("hide");
            $("#room2").addClass("hide");
            $("#room3").addClass("hide");
            $("#room4").addClass("hide");
        }
        if ($("#roomsQty").val() == 2) {
            $("#room").removeClass("show");
            $("#room").addClass("hide");
            $("#room1").removeClass("hide");
            $("#room1").addClass("show");
            $("#room2").removeClass("hide");
            $("#room2").addClass("show");
            $("#room3").removeClass("show");
            $("#room3").addClass("hide");
            $("#room4").removeClass("show");
            $("#room4").addClass("hide");
        }

        if ($("#roomsQty").val() == 3) {
            $("#room").removeClass("show");
            $("#room").addClass("hide");
            $("#room1").removeClass("hide");
            $("#room1").addClass("show");
            $("#room2").removeClass("hide");
            $("#room2").addClass("show");
            $("#room2").removeClass("hide");
            $("#room3").addClass("show");
            $("#room4").removeClass("show");
            $("#room4").addClass("hide");
        }

        if ($("#roomsQty").val() == 4) {
            $("#room").removeClass("show");
            $("#room").addClass("hide");
            $("#room1").removeClass("hide");
            $("#room1").addClass("show");
            $("#room2").removeClass("hide");
            $("#room2").addClass("show");
            $("#room2").removeClass("hide");
            $("#room3").addClass("show");
            $("#room4").removeClass("hide");
            $("#room4").addClass("show");
        }
    });

    //seleccion de niños
    //bloque 0
    $("#lblAge").addClass("hide");
    $("#childAge1room").addClass("hide");
    $("#childAge2room").addClass("hide");
    $("#childAge3room").addClass("hide");
    $("#childAge4room").addClass("hide");
    $("#childAge5room").addClass("hide");
    $("#childAge6room").addClass("hide");
    $("#childAge7room").addClass("hide");


    $("#childrenRoom").change(function () {

        if ($("#childrenRoom").val() > 0) {
            $("#lblAge").removeClass("hide");
            $("#lblAge").addClass("show");
        } else {
            $("#lblAge").removeClass("show");
            $("#lblAge").addClass("hide");
        }

        if ($("#childrenRoom").val() == 0) {
            $("#childAge1room").removeClass("show");
            $("#childAge2room").removeClass("show");
            $("#childAge3room").removeClass("show");
            $("#childAge4room").removeClass("show");
            $("#childAge5room").removeClass("show");
            $("#childAge6room").removeClass("show");
            $("#childAge7room").removeClass("show");

            $("#childAge1room").addClass("hide");
            $("#childAge2room").addClass("hide");
            $("#childAge3room").addClass("hide");
            $("#childAge4room").addClass("hide");
            $("#childAge5room").addClass("hide");
            $("#childAge6room").addClass("hide");
            $("#childAge7room").addClass("hide");

        }

        if ($("#childrenRoom").val() == 1) {

            $("#childAge2room").removeClass("show");
            $("#childAge3room").removeClass("show");
            $("#childAge4room").removeClass("show");
            $("#childAge5room").removeClass("show");
            $("#childAge6room").removeClass("show");
            $("#childAge7room").removeClass("show");

            $("#childAge1room").removeClass("hide");
            $("#childAge1room").addClass("show");

            $("#childAge2room").addClass("hide");
            $("#childAge3room").addClass("hide");
            $("#childAge4room").addClass("hide");
            $("#childAge5room").addClass("hide");
            $("#childAge6room").addClass("hide");
            $("#childAge7room").addClass("hide");

        }

        if ($("#childrenRoom").val() == 2) {

            $("#childAge3room").removeClass("show");
            $("#childAge4room").removeClass("show");
            $("#childAge5room").removeClass("show");
            $("#childAge6room").removeClass("show");
            $("#childAge7room").removeClass("show");

            $("#childAge1room").removeClass("hide");
            $("#childAge1room").addClass("show");
            $("#childAge2room").removeClass("hide");
            $("#childAge2room").addClass("show");

            $("#childAge3room").addClass("hide");
            $("#childAge4room").addClass("hide");
            $("#childAge5room").addClass("hide");
            $("#childAge6room").addClass("hide");
            $("#childAge7room").addClass("hide");

        }

        if ($("#childrenRoom").val() == 3) {

            $("#childAge4room").removeClass("show");
            $("#childAge5room").removeClass("show");
            $("#childAge6room").removeClass("show");
            $("#childAge7room").removeClass("show");

            $("#childAge1room").removeClass("hide");
            $("#childAge1room").addClass("show");
            $("#childAge2room").removeClass("hide");
            $("#childAge2room").addClass("show");
            $("#childAge3room").removeClass("hide");
            $("#childAge3room").addClass("show");

            $("#childAge4room").addClass("hide");
            $("#childAge5room").addClass("hide");
            $("#childAge6room").addClass("hide");
            $("#childAge7room").addClass("hide");

        }

        if ($("#childrenRoom").val() == 4) {

            $("#childAge5room").removeClass("show");
            $("#childAge6room").removeClass("show");
            $("#childAge7room").removeClass("show");

            $("#childAge1room").removeClass("hide");
            $("#childAge1room").addClass("show");
            $("#childAge2room").removeClass("hide");
            $("#childAge2room").addClass("show");
            $("#childAge3room").removeClass("hide");
            $("#childAge3room").addClass("show");
            $("#childAge4room").removeClass("hide");
            $("#childAge4room").addClass("show");

            $("#childAge5room").addClass("hide");
            $("#childAge6room").addClass("hide");
            $("#childAge7room").addClass("hide");

        }

        if ($("#childrenRoom").val() == 5) {

            $("#childAge6room").removeClass("show");
            $("#childAge7room").removeClass("show");

            $("#childAge1room").removeClass("hide");
            $("#childAge1room").addClass("show");
            $("#childAge2room").removeClass("hide");
            $("#childAge2room").addClass("show");
            $("#childAge3room").removeClass("hide");
            $("#childAge3room").addClass("show");
            $("#childAge4room").removeClass("hide");
            $("#childAge4room").addClass("show");
            $("#childAge5room").removeClass("hide");
            $("#childAge5room").addClass("show");

            $("#childAge6room").addClass("hide");
            $("#childAge7room").addClass("hide");

        }

        if ($("#childrenRoom").val() == 6) {

            $("#childAge7room").removeClass("show");

            $("#childAge1room").removeClass("hide");
            $("#childAge1room").addClass("show");
            $("#childAge2room").removeClass("hide");
            $("#childAge2room").addClass("show");
            $("#childAge3room").removeClass("hide");
            $("#childAge3room").addClass("show");
            $("#childAge4room").removeClass("hide");
            $("#childAge4room").addClass("show");
            $("#childAge5room").removeClass("hide");
            $("#childAge5room").addClass("show");
            $("#childAge6room").removeClass("hide");
            $("#childAge6room").addClass("show");

            $("#childAge7room").addClass("hide");

        }

        if ($("#childrenRoom").val() == 7) {

            $("#childAge1room").removeClass("hide");
            $("#childAge1room").addClass("show");
            $("#childAge2room").removeClass("hide");
            $("#childAge2room").addClass("show");
            $("#childAge3room").removeClass("hide");
            $("#childAge3room").addClass("show");
            $("#childAge4room").removeClass("hide");
            $("#childAge4room").addClass("show");
            $("#childAge5room").removeClass("hide");
            $("#childAge5room").addClass("show");
            $("#childAge6room").removeClass("hide");
            $("#childAge6room").addClass("show");
            $("#childAge7room").removeClass("hide");
            $("#childAge7room").addClass("show");
        }

    });
    //close bloque 0

    //seleccion de niños
    //bloque 1
    $("#lblAge1").addClass("hide");
    $("#childAge1room1").addClass("hide");
    $("#childAge2room1").addClass("hide");
    $("#childAge3room1").addClass("hide");
    $("#childAge4room1").addClass("hide");
    $("#childAge5room1").addClass("hide");
    $("#childAge6room1").addClass("hide");
    $("#childAge7room1").addClass("hide");


    $("#childrenRoom1").change(function () {

        if ($("#childrenRoom1").val() > 0) {
            $("#lblAge1").removeClass("hide");
            $("#lblAge1").addClass("show");
        } else {
            $("#lblAge1").removeClass("show");
            $("#lblAge1").addClass("hide");
        }

        if ($("#childrenRoom1").val() == 0) {
            $("#childAge1room1").removeClass("show");
            $("#childAge2room1").removeClass("show");
            $("#childAge3room1").removeClass("show");
            $("#childAge4room1").removeClass("show");
            $("#childAge5room1").removeClass("show");
            $("#childAge6room1").removeClass("show");
            $("#childAge7room1").removeClass("show");

            $("#childAge1room1").addClass("hide");
            $("#childAge2room1").addClass("hide");
            $("#childAge3room1").addClass("hide");
            $("#childAge4room1").addClass("hide");
            $("#childAge5room1").addClass("hide");
            $("#childAge6room1").addClass("hide");
            $("#childAge7room1").addClass("hide");

        }

        if ($("#childrenRoom1").val() == 1) {

            $("#childAge2room1").removeClass("show");
            $("#childAge3room1").removeClass("show");
            $("#childAge4room1").removeClass("show");
            $("#childAge5room1").removeClass("show");
            $("#childAge6room1").removeClass("show");
            $("#childAge7room1").removeClass("show");

            $("#childAge1room1").removeClass("hide");
            $("#childAge1room1").addClass("show");

            $("#childAge2room1").addClass("hide");
            $("#childAge3room1").addClass("hide");
            $("#childAge4room1").addClass("hide");
            $("#childAge5room1").addClass("hide");
            $("#childAge6room1").addClass("hide");
            $("#childAge7room1").addClass("hide");

        }

        if ($("#childrenRoom1").val() == 2) {

            $("#childAge3room1").removeClass("show");
            $("#childAge4room1").removeClass("show");
            $("#childAge5room1").removeClass("show");
            $("#childAge6room1").removeClass("show");
            $("#childAge7room1").removeClass("show");

            $("#childAge1room1").removeClass("hide");
            $("#childAge1room1").addClass("show");
            $("#childAge2room1").removeClass("hide");
            $("#childAge2room1").addClass("show");

            $("#childAge3room1").addClass("hide");
            $("#childAge4room1").addClass("hide");
            $("#childAge5room1").addClass("hide");
            $("#childAge6room1").addClass("hide");
            $("#childAge7room1").addClass("hide");

        }

        if ($("#childrenRoom1").val() == 3) {

            $("#childAge4room1").removeClass("show");
            $("#childAge5room1").removeClass("show");
            $("#childAge6room1").removeClass("show");
            $("#childAge7room1").removeClass("show");

            $("#childAge1room1").removeClass("hide");
            $("#childAge1room1").addClass("show");
            $("#childAge2room1").removeClass("hide");
            $("#childAge2room1").addClass("show");
            $("#childAge3room1").removeClass("hide");
            $("#childAge3room1").addClass("show");

            $("#childAge4room1").addClass("hide");
            $("#childAge5room1").addClass("hide");
            $("#childAge6room1").addClass("hide");
            $("#childAge7room1").addClass("hide");

        }

        if ($("#childrenRoom1").val() == 4) {

            $("#childAge5room1").removeClass("show");
            $("#childAge6room1").removeClass("show");
            $("#childAge7room1").removeClass("show");

            $("#childAge1room1").removeClass("hide");
            $("#childAge1room1").addClass("show");
            $("#childAge2room1").removeClass("hide");
            $("#childAge2room1").addClass("show");
            $("#childAge3room1").removeClass("hide");
            $("#childAge3room1").addClass("show");
            $("#childAge4room1").removeClass("hide");
            $("#childAge4room1").addClass("show");

            $("#childAge5room1").addClass("hide");
            $("#childAge6room1").addClass("hide");
            $("#childAge7room1").addClass("hide");

        }

        if ($("#childrenRoom1").val() == 5) {

            $("#childAge6room1").removeClass("show");
            $("#childAge7room1").removeClass("show");

            $("#childAge1room1").removeClass("hide");
            $("#childAge1room1").addClass("show");
            $("#childAge2room1").removeClass("hide");
            $("#childAge2room1").addClass("show");
            $("#childAge3room1").removeClass("hide");
            $("#childAge3room1").addClass("show");
            $("#childAge4room1").removeClass("hide");
            $("#childAge4room1").addClass("show");
            $("#childAge5room1").removeClass("hide");
            $("#childAge5room1").addClass("show");

            $("#childAge6room1").addClass("hide");
            $("#childAge7room1").addClass("hide");

        }

        if ($("#childrenRoom1").val() == 6) {

            $("#childAge7room1").removeClass("show");

            $("#childAge1room1").removeClass("hide");
            $("#childAge1room1").addClass("show");
            $("#childAge2room1").removeClass("hide");
            $("#childAge2room1").addClass("show");
            $("#childAge3room1").removeClass("hide");
            $("#childAge3room1").addClass("show");
            $("#childAge4room1").removeClass("hide");
            $("#childAge4room1").addClass("show");
            $("#childAge5room1").removeClass("hide");
            $("#childAge5room1").addClass("show");
            $("#childAge6room1").removeClass("hide");
            $("#childAge6room1").addClass("show");

            $("#childAge7room1").addClass("hide");

        }

        if ($("#childrenRoom1").val() == 7) {

            $("#childAge1room1").removeClass("hide");
            $("#childAge1room1").addClass("show");
            $("#childAge2room1").removeClass("hide");
            $("#childAge2room1").addClass("show");
            $("#childAge3room1").removeClass("hide");
            $("#childAge3room1").addClass("show");
            $("#childAge4room1").removeClass("hide");
            $("#childAge4room1").addClass("show");
            $("#childAge5room1").removeClass("hide");
            $("#childAge5room1").addClass("show");
            $("#childAge6room1").removeClass("hide");
            $("#childAge6room1").addClass("show");
            $("#childAge7room1").removeClass("hide");
            $("#childAge7room1").addClass("show");

        }

    });
    //close bloque 1

    //bloque 2
    $("#lblAge2").addClass("hide");
    $("#childAge1room2").addClass("hide");
    $("#childAge2room2").addClass("hide");
    $("#childAge3room2").addClass("hide");
    $("#childAge4room2").addClass("hide");
    $("#childAge5room2").addClass("hide");
    $("#childAge6room2").addClass("hide");
    $("#childAge7room2").addClass("hide");


    $("#childrenRoom2").change(function () {

        if ($("#childrenRoom2").val() > 0) {
            $("#lblAge2").removeClass("hide");
            $("#lblAge2").addClass("show");
        } else {
            $("#lblAge2").removeClass("show");
            $("#lblAge2").addClass("hide");
        }

        if ($("#childrenRoom2").val() == 0) {
            $("#childAge1room2").removeClass("show");
            $("#childAge2room2").removeClass("show");
            $("#childAge3room2").removeClass("show");
            $("#childAge4room2").removeClass("show");
            $("#childAge5room2").removeClass("show");
            $("#childAge6room2").removeClass("show");
            $("#childAge7room2").removeClass("show");

            $("#childAge1room2").addClass("hide");
            $("#childAge2room2").addClass("hide");
            $("#childAge3room2").addClass("hide");
            $("#childAge4room2").addClass("hide");
            $("#childAge5room2").addClass("hide");
            $("#childAge6room2").addClass("hide");
            $("#childAge7room2").addClass("hide");

        }

        if ($("#childrenRoom2").val() == 1) {

            $("#childAge2room2").removeClass("show");
            $("#childAge3room2").removeClass("show");
            $("#childAge4room2").removeClass("show");
            $("#childAge5room2").removeClass("show");
            $("#childAge6room2").removeClass("show");
            $("#childAge7room2").removeClass("show");

            $("#childAge1room2").removeClass("hide");
            $("#childAge1room2").addClass("show");

            $("#childAge2room2").addClass("hide");
            $("#childAge3room2").addClass("hide");
            $("#childAge4room2").addClass("hide");
            $("#childAge5room2").addClass("hide");
            $("#childAge6room2").addClass("hide");
            $("#childAge7room2").addClass("hide");

        }

        if ($("#childrenRoom2").val() == 2) {

            $("#childAge3room2").removeClass("show");
            $("#childAge4room2").removeClass("show");
            $("#childAge5room2").removeClass("show");
            $("#childAge6room2").removeClass("show");
            $("#childAge7room2").removeClass("show");

            $("#childAge1room2").removeClass("hide");
            $("#childAge1room2").addClass("show");
            $("#childAge2room2").removeClass("hide");
            $("#childAge2room2").addClass("show");

            $("#childAge3room2").addClass("hide");
            $("#childAge4room2").addClass("hide");
            $("#childAge5room2").addClass("hide");
            $("#childAge6room2").addClass("hide");
            $("#childAge7room2").addClass("hide");

        }

        if ($("#childrenRoom2").val() == 3) {

            $("#childAge4room2").removeClass("show");
            $("#childAge5room2").removeClass("show");
            $("#childAge6room2").removeClass("show");
            $("#childAge7room2").removeClass("show");

            $("#childAge1room2").removeClass("hide");
            $("#childAge1room2").addClass("show");
            $("#childAge2room2").removeClass("hide");
            $("#childAge2room2").addClass("show");
            $("#childAge3room2").removeClass("hide");
            $("#childAge3room2").addClass("show");

            $("#childAge4room2").addClass("hide");
            $("#childAge5room2").addClass("hide");
            $("#childAge6room2").addClass("hide");
            $("#childAge7room2").addClass("hide");

        }

        if ($("#childrenRoom2").val() == 4) {

            $("#childAge5room2").removeClass("show");
            $("#childAge6room2").removeClass("show");
            $("#childAge7room2").removeClass("show");

            $("#childAge1room2").removeClass("hide");
            $("#childAge1room2").addClass("show");
            $("#childAge2room2").removeClass("hide");
            $("#childAge2room2").addClass("show");
            $("#childAge3room2").removeClass("hide");
            $("#childAge3room2").addClass("show");
            $("#childAge4room2").removeClass("hide");
            $("#childAge4room2").addClass("show");

            $("#childAge5room2").addClass("hide");
            $("#childAge6room2").addClass("hide");
            $("#childAge7room2").addClass("hide");

        }

        if ($("#childrenRoom2").val() == 5) {

            $("#childAge6room2").removeClass("show");
            $("#childAge7room2").removeClass("show");

            $("#childAge1room2").removeClass("hide");
            $("#childAge1room2").addClass("show");
            $("#childAge2room2").removeClass("hide");
            $("#childAge2room2").addClass("show");
            $("#childAge3room2").removeClass("hide");
            $("#childAge3room2").addClass("show");
            $("#childAge4room2").removeClass("hide");
            $("#childAge4room2").addClass("show");
            $("#childAge5room2").removeClass("hide");
            $("#childAge5room2").addClass("show");

            $("#childAge6room2").addClass("hide");
            $("#childAge7room2").addClass("hide");

        }

        if ($("#childrenRoom2").val() == 6) {

            $("#childAge7room2").removeClass("show");

            $("#childAge1room2").removeClass("hide");
            $("#childAge1room2").addClass("show");
            $("#childAge2room2").removeClass("hide");
            $("#childAge2room2").addClass("show");
            $("#childAge3room2").removeClass("hide");
            $("#childAge3room2").addClass("show");
            $("#childAge4room2").removeClass("hide");
            $("#childAge4room2").addClass("show");
            $("#childAge5room2").removeClass("hide");
            $("#childAge5room2").addClass("show");
            $("#childAge6room2").removeClass("hide");
            $("#childAge6room2").addClass("show");

            $("#childAge7room2").addClass("hide");

        }

        if ($("#childrenRoom2").val() == 7) {

            $("#childAge1room2").removeClass("hide");
            $("#childAge1room2").addClass("show");
            $("#childAge2room2").removeClass("hide");
            $("#childAge2room2").addClass("show");
            $("#childAge3room2").removeClass("hide");
            $("#childAge3room2").addClass("show");
            $("#childAge4room2").removeClass("hide");
            $("#childAge4room2").addClass("show");
            $("#childAge5room2").removeClass("hide");
            $("#childAge5room2").addClass("show");
            $("#childAge6room2").removeClass("hide");
            $("#childAge6room2").addClass("show");
            $("#childAge7room2").removeClass("hide");
            $("#childAge7room2").addClass("show");

        }
    });
    //close bloque 2

    //bloque 3
    $("#lblAge3").addClass("hide");
    $("#childAge1room3").addClass("hide");
    $("#childAge2room3").addClass("hide");
    $("#childAge3room3").addClass("hide");
    $("#childAge4room3").addClass("hide");
    $("#childAge5room3").addClass("hide");
    $("#childAge6room3").addClass("hide");
    $("#childAge7room3").addClass("hide");


    $("#childrenRoom3").change(function () {

        if ($("#childrenRoom3").val() > 0) {
            $("#lblAge3").removeClass("hide");
            $("#lblAge3").addClass("show");
        } else {
            $("#lblAge3").removeClass("show");
            $("#lblAge3").addClass("hide");
        }

        if ($("#childrenRoom3").val() == 0) {
            $("#childAge1room3").removeClass("show");
            $("#childAge2room3").removeClass("show");
            $("#childAge3room3").removeClass("show");
            $("#childAge4room3").removeClass("show");
            $("#childAge5room3").removeClass("show");
            $("#childAge6room3").removeClass("show");
            $("#childAge7room3").removeClass("show");

            $("#childAge1room3").addClass("hide");
            $("#childAge2room3").addClass("hide");
            $("#childAge3room3").addClass("hide");
            $("#childAge4room3").addClass("hide");
            $("#childAge5room3").addClass("hide");
            $("#childAge6room3").addClass("hide");
            $("#childAge7room3").addClass("hide");

        }

        if ($("#childrenRoom3").val() == 1) {

            $("#childAge2room3").removeClass("show");
            $("#childAge3room3").removeClass("show");
            $("#childAge4room3").removeClass("show");
            $("#childAge5room3").removeClass("show");
            $("#childAge6room3").removeClass("show");
            $("#childAge7room3").removeClass("show");

            $("#childAge1room3").removeClass("hide");
            $("#childAge1room3").addClass("show");

            $("#childAge2room3").addClass("hide");
            $("#childAge3room3").addClass("hide");
            $("#childAge4room3").addClass("hide");
            $("#childAge5room3").addClass("hide");
            $("#childAge6room3").addClass("hide");
            $("#childAge7room3").addClass("hide");

        }

        if ($("#childrenRoom3").val() == 2) {

            $("#childAge3room3").removeClass("show");
            $("#childAge4room3").removeClass("show");
            $("#childAge5room3").removeClass("show");
            $("#childAge6room3").removeClass("show");
            $("#childAge7room3").removeClass("show");

            $("#childAge1room3").removeClass("hide");
            $("#childAge1room3").addClass("show");
            $("#childAge2room3").removeClass("hide");
            $("#childAge2room3").addClass("show");

            $("#childAge3room3").addClass("hide");
            $("#childAge4room3").addClass("hide");
            $("#childAge5room3").addClass("hide");
            $("#childAge6room3").addClass("hide");
            $("#childAge7room3").addClass("hide");

        }

        if ($("#childrenRoom3").val() == 3) {

            $("#childAge4room3").removeClass("show");
            $("#childAge5room3").removeClass("show");
            $("#childAge6room3").removeClass("show");
            $("#childAge7room3").removeClass("show");

            $("#childAge1room3").removeClass("hide");
            $("#childAge1room3").addClass("show");
            $("#childAge2room3").removeClass("hide");
            $("#childAge2room3").addClass("show");
            $("#childAge3room3").removeClass("hide");
            $("#childAge3room3").addClass("show");

            $("#childAge4room3").addClass("hide");
            $("#childAge5room3").addClass("hide");
            $("#childAge6room3").addClass("hide");
            $("#childAge7room3").addClass("hide");

        }

        if ($("#childrenRoom3").val() == 4) {

            $("#childAge5room3").removeClass("show");
            $("#childAge6room3").removeClass("show");
            $("#childAge7room3").removeClass("show");

            $("#childAge1room3").removeClass("hide");
            $("#childAge1room3").addClass("show");
            $("#childAge2room3").removeClass("hide");
            $("#childAge2room3").addClass("show");
            $("#childAge3room3").removeClass("hide");
            $("#childAge3room3").addClass("show");
            $("#childAge4room3").removeClass("hide");
            $("#childAge4room3").addClass("show");

            $("#childAge5room3").addClass("hide");
            $("#childAge6room3").addClass("hide");
            $("#childAge7room3").addClass("hide");

        }

        if ($("#childrenRoom3").val() == 5) {

            $("#childAge6room3").removeClass("show");
            $("#childAge7room3").removeClass("show");

            $("#childAge1room3").removeClass("hide");
            $("#childAge1room3").addClass("show");
            $("#childAge2room3").removeClass("hide");
            $("#childAge2room3").addClass("show");
            $("#childAge3room3").removeClass("hide");
            $("#childAge3room3").addClass("show");
            $("#childAge4room3").removeClass("hide");
            $("#childAge4room3").addClass("show");
            $("#childAge5room3").removeClass("hide");
            $("#childAge5room3").addClass("show");

            $("#childAge6room3").addClass("hide");
            $("#childAge7room3").addClass("hide");

        }

        if ($("#childrenRoom3").val() == 6) {

            $("#childAge7room3").removeClass("show");

            $("#childAge1room3").removeClass("hide");
            $("#childAge1room3").addClass("show");
            $("#childAge2room3").removeClass("hide");
            $("#childAge2room3").addClass("show");
            $("#childAge3room3").removeClass("hide");
            $("#childAge3room3").addClass("show");
            $("#childAge4room3").removeClass("hide");
            $("#childAge4room3").addClass("show");
            $("#childAge5room3").removeClass("hide");
            $("#childAge5room3").addClass("show");
            $("#childAge6room3").removeClass("hide");
            $("#childAge6room3").addClass("show");

            $("#childAge7room3").addClass("hide");
        }

        if ($("#childrenRoom3").val() == 7) {

            $("#childAge1room3").removeClass("hide");
            $("#childAge1room3").addClass("show");
            $("#childAge2room3").removeClass("hide");
            $("#childAge2room3").addClass("show");
            $("#childAge3room3").removeClass("hide");
            $("#childAge3room3").addClass("show");
            $("#childAge4room3").removeClass("hide");
            $("#childAge4room3").addClass("show");
            $("#childAge5room3").removeClass("hide");
            $("#childAge5room3").addClass("show");
            $("#childAge6room3").removeClass("hide");
            $("#childAge6room3").addClass("show");
            $("#childAge7room3").removeClass("hide");
            $("#childAge7room3").addClass("show");
        }

    });
    //close bloque 3

    //bloque 4
    $("#lblAge4").addClass("hide");
    $("#childAge1room4").addClass("hide");
    $("#childAge2room4").addClass("hide");
    $("#childAge3room4").addClass("hide");
    $("#childAge4room4").addClass("hide");
    $("#childAge5room4").addClass("hide");
    $("#childAge6room4").addClass("hide");
    $("#childAge7room4").addClass("hide");


    $("#childrenRoom4").change(function () {

        if ($("#childrenRoom4").val() > 0) {
            $("#lblAge4").removeClass("hide");
            $("#lblAge4").addClass("show");
        } else {
            $("#lblAge4").removeClass("show");
            $("#lblAge4").addClass("hide");
        }

        if ($("#childrenRoom4").val() == 0) {
            $("#childAge1room4").removeClass("show");
            $("#childAge2room4").removeClass("show");
            $("#childAge3room4").removeClass("show");
            $("#childAge4room4").removeClass("show");
            $("#childAge5room4").removeClass("show");
            $("#childAge6room4").removeClass("show");
            $("#childAge7room4").removeClass("show");

            $("#childAge1room4").addClass("hide");
            $("#childAge2room4").addClass("hide");
            $("#childAge3room4").addClass("hide");
            $("#childAge4room4").addClass("hide");
            $("#childAge5room4").addClass("hide");
            $("#childAge6room4").addClass("hide");
            $("#childAge7room4").addClass("hide");

        }

        if ($("#childrenRoom4").val() == 1) {

            $("#childAge2room4").removeClass("show");
            $("#childAge3room4").removeClass("show");
            $("#childAge4room4").removeClass("show");
            $("#childAge5room4").removeClass("show");
            $("#childAge6room4").removeClass("show");
            $("#childAge7room4").removeClass("show");

            $("#childAge1room4").removeClass("hide");
            $("#childAge1room4").addClass("show");

            $("#childAge2room4").addClass("hide");
            $("#childAge3room4").addClass("hide");
            $("#childAge4room4").addClass("hide");
            $("#childAge5room4").addClass("hide");
            $("#childAge6room4").addClass("hide");
            $("#childAge7room4").addClass("hide");

        }

        if ($("#childrenRoom4").val() == 2) {

            $("#childAge3room4").removeClass("show");
            $("#childAge4room4").removeClass("show");
            $("#childAge5room4").removeClass("show");
            $("#childAge6room4").removeClass("show");
            $("#childAge7room4").removeClass("show");

            $("#childAge1room4").removeClass("hide");
            $("#childAge1room4").addClass("show");
            $("#childAge2room4").removeClass("hide");
            $("#childAge2room4").addClass("show");

            $("#childAge3room4").addClass("hide");
            $("#childAge4room4").addClass("hide");
            $("#childAge5room4").addClass("hide");
            $("#childAge6room4").addClass("hide");
            $("#childAge7room4").addClass("hide");

        }

        if ($("#childrenRoom4").val() == 3) {

            $("#childAge4room4").removeClass("show");
            $("#childAge5room4").removeClass("show");
            $("#childAge6room4").removeClass("show");
            $("#childAge7room4").removeClass("show");

            $("#childAge1room4").removeClass("hide");
            $("#childAge1room4").addClass("show");
            $("#childAge2room4").removeClass("hide");
            $("#childAge2room4").addClass("show");
            $("#childAge3room4").removeClass("hide");
            $("#childAge3room4").addClass("show");

            $("#childAge4room4").addClass("hide");
            $("#childAge5room4").addClass("hide");
            $("#childAge6room4").addClass("hide");
            $("#childAge7room4").addClass("hide");

        }

        if ($("#childrenRoom4").val() == 4) {

            $("#childAge5room4").removeClass("show");
            $("#childAge6room4").removeClass("show");
            $("#childAge7room4").removeClass("show");

            $("#childAge1room4").removeClass("hide");
            $("#childAge1room4").addClass("show");
            $("#childAge2room4").removeClass("hide");
            $("#childAge2room4").addClass("show");
            $("#childAge3room4").removeClass("hide");
            $("#childAge3room4").addClass("show");
            $("#childAge4room4").removeClass("hide");
            $("#childAge4room4").addClass("show");

            $("#childAge5room4").addClass("hide");
            $("#childAge6room4").addClass("hide");
            $("#childAge7room4").addClass("hide");

        }

        if ($("#childrenRoom4").val() == 5) {

            $("#childAge6room4").removeClass("show");
            $("#childAge7room4").removeClass("show");

            $("#childAge1room4").removeClass("hide");
            $("#childAge1room4").addClass("show");
            $("#childAge2room4").removeClass("hide");
            $("#childAge2room4").addClass("show");
            $("#childAge3room4").removeClass("hide");
            $("#childAge3room4").addClass("show");
            $("#childAge4room4").removeClass("hide");
            $("#childAge4room4").addClass("show");
            $("#childAge5room4").removeClass("hide");
            $("#childAge5room4").addClass("show");

            $("#childAge6room4").addClass("hide");
            $("#childAge7room4").addClass("hide");

        }

        if ($("#childrenRoom4").val() == 6) {

            $("#childAge7room4").removeClass("show");

            $("#childAge1room4").removeClass("hide");
            $("#childAge1room4").addClass("show");
            $("#childAge2room4").removeClass("hide");
            $("#childAge2room4").addClass("show");
            $("#childAge3room4").removeClass("hide");
            $("#childAge3room4").addClass("show");
            $("#childAge4room4").removeClass("hide");
            $("#childAge4room4").addClass("show");
            $("#childAge5room4").removeClass("hide");
            $("#childAge5room4").addClass("show");
            $("#childAge6room4").removeClass("hide");
            $("#childAge6room4").addClass("show");

            $("#childAge7room4").addClass("hide");
        }

        if ($("#childrenRoom4").val() == 7) {

            $("#childAge1room4").removeClass("hide");
            $("#childAge1room4").addClass("show");
            $("#childAge2room4").removeClass("hide");
            $("#childAge2room4").addClass("show");
            $("#childAge3room4").removeClass("hide");
            $("#childAge3room4").addClass("show");
            $("#childAge4room4").removeClass("hide");
            $("#childAge4room4").addClass("show");
            $("#childAge5room4").removeClass("hide");
            $("#childAge5room4").addClass("show");
            $("#childAge6room4").removeClass("hide");
            $("#childAge6room4").addClass("show");
            $("#childAge7room4").removeClass("hide");
            $("#childAge7room4").addClass("show");
        }


    });
    //close bloque 4
});