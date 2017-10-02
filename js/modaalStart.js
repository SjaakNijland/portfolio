$(document).ready(function () {
    //halen inhoud weg
    var werk1 = $('#werk1').detach();
    var werk2 = $('#werk2').detach();
    var werk3 = $('#werk3').detach();
    var werk4 = $('#werk4').detach();
    //als je klikt opent het modaal venster
    $('#werk1Thumb').on('click', function () {
        modaalVenObj.openen({
            inhoud: werk1,
            breedte: 700
        });
    })
    $('#werk2Thumb').on('click', function () {
        modaalVenObj.openen({
            inhoud: werk2,
            breedte: 700
        });
    })

    $('#werk3Thumb').on('click', function () {
        modaalVenObj.openen({
            inhoud: werk3,
            breedte: 700
        });
    })

    $('#werk4Thumb').on('click', function () {
        modaalVenObj.openen({
            inhoud: werk4,
            breedte: 700
        });
    })
});