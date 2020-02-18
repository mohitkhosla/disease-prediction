/*
var def_width= 470.133
var def_height= 400

$('#culturalBlock, #sportsBlock, #techfestBlock, #nssBlock').click(function() {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
    var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)

    if ($(this).height()> 500) {
        $(this).animate({height: def_height, width: def_width});
    }
    else {
        $(this).animate({height: 100%, width: 100%});
    }
});*/

/*
var $root = $('html, body');
$('a').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });
    return false;
});
*/

function expandContent(caller) {
    $('#feedback').css('display', 'none');
    switch (caller) {
        case 1:
            $('#cardPage').css('display','none');
            $('#culturalContent').css('display','block');
        break;
        case 2:
            $('#cardPage').css('display','none');
            $('#sportsContent').css('display','block');
        break;
        case 4:
            $('#cardPage').css('display','none');
            $('#nssContent').css('display','block');
            window.scrollTo(0,0);
        break;
        default:

    }
}

function closeContent(caller) {
    $('#feedback').css('display', 'block');
    switch (caller) {
        case 1:
            $('#cardPage').css('display','block');
            $('#culturalContent').css('display','none');
        break;
        case 2:
            $('#cardPage').css('display','block');
            $('#sportsContent').css('display','none');
        break;
        case 4:
            $('#cardPage').css('display','block');
            $('#nssContent').css('display','none');
        break;
        default:
    }
}

$('#culturalBlock').click(function() {expandContent(1);});
$('#sportsBlock').click(function() {expandContent(2);});
$('#nssBlock').click(function() {expandContent(4);});

$('#closeCulture').click(function() {closeContent(1);});
$('#closeSports').click(function() {closeContent(2);});
$('#closeNss').click(function() {closeContent(4);});
