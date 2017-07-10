/**
 * Created by Maxime on 21/03/2017.
 */
$(document).ready(function () {
    $('#Accueil').click(function () {
        $('body,html').animate({scrollTop: $('.bg-1').offset().top}, 'slow');
    });
    $('#Parcour').click(function () {
        $('body,html').animate({scrollTop: $('.bg-2').offset().top}, 'slow');
    });
    $('#Projets').click(function () {
        $('body,html').animate({scrollTop: $('.bg-3').offset().top}, 'slow');
    });
});