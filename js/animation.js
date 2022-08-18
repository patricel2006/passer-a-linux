$(function () {

    console.log("coucou")


    function deplacementTitre() {
        $('#titreSite').animate({
            left: '400px'
        }, 3000);
    }

    setInterval(deplacementTitre, 3000);
    deplacementTitre();

    function deplacementLogo() {
        $('#imageTux')
            .animate({ left: '100px' }, 1000, 'linear', function () { $(this).css('transform', 'rotateZ(180deg)') })
            .animate({ top: '100px' }, 1000, 'linear', function () { $(this).css('transform', 'rotateZ(0)') })
            .animate({ left: '10px' }, 1000, 'linear', function () { $(this).css('transform', 'rotateZ(30deg)') })
            .animate({ top: '' }, 500, 'linear', function () { $(this).css('transform', 'rotateZ(-30deg)') })
            .animate({ top: '+=100px' }, 500, 'linear', function () { $(this).css('transform', 'rotateZ(0)') })
            .animate({ top: '' }, 1000, 'linear');
    }

    timer2 = setInterval(deplacementLogo, 2000);
    deplacementLogo(); // lancement immédiat la premiere fois

    clearInterval(timer2);
    
    
    /**********************************************************************JS**************************************************************************/
    
    document.querySelector(function () {

    console.log("coucou")


    function deplacementTitre() {
        document.querySelector('#titreSite').animate({
            left: '400px'
        }, 3000);
    }

    setInterval(deplacementTitre, 3000);
    deplacementTitre();

    function deplacementLogo() {
        document.querySelector('#imageTux')
            .animate({ left: '100px' }, 1000, 'linear', function () { document.querySelector(this).css('transform', 'rotateZ(180deg)') })
            .animate({ top: '100px' }, 1000, 'linear', function () { document.querySelector(this).css('transform', 'rotateZ(0)') })
            .animate({ left: '10px' }, 1000, 'linear', function () { document.querySelector(this).css('transform', 'rotateZ(30deg)') })
            .animate({ top: '' }, 500, 'linear', function () { document.querySelector(this).css('transform', 'rotateZ(-30deg)') })
            .animate({ top: '+=100px' }, 500, 'linear', function () { document.querySelector(this).css('transform', 'rotateZ(0)') })
            .animate({ top: '' }, 1000, 'linear');
    }

    timer2 = setInterval(deplacementLogo, 2000);
    deplacementLogo(); // lancement immédiat la premiere fois

    clearInterval(timer2);
