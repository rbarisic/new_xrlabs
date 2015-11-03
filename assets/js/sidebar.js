function gets(element) {
    return document.getElementById(element)
}

// function animateSidebar(element, round) {
//  var recursive = function() { animateSidebar(element, round) };
    
//  round = round + 1

//  element.style.left = parseInt(-32 + round * 1.28) + '%'

//  element.style.opacity = (0 + (round*4)) / 100;

//  if( round < 25 ) {
//      window.setTimeout(recursive, 16);
//  }
// }

function toggleMenu(element) {
    var menu = gets(element)
    if (menu.style.display == '' || menu.style.display == 'none') {
        menu.style.display = 'block';
        menu.style.animationName = 'slideIn';
    }
    else {
        menu.style.animationName = 'slideOut';
        window.setTimeout(function() {
            menu.style.display = 'none';},500);
    }
}