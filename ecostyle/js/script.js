'use strict';

let text = '';
let img = '';

switch (new Date().getMonth()) {
    case 0:
        img = 'img/winter.jpg';
        break;
    case 1:
        img = 'img/winter.jpg';
        break;
    case 2:
        img = 'img/spring.jpg';
        break;
    case 3:
        img = 'img/spring.jpg';
        break;
    case 4:
       img = 'img/spring.jpg';
        break;
    case 5:
        img = 'img/summer.jpg';
        break;
    case 6:
        img = 'img/summer.jpg';
        break;
    case 7:
        img = 'img/summer.jpg';
        break;
    case 8:
        img = 'img/autumn.jpg';
        break;
    case 9:
        img = 'img/autumn.jpg';
        break;
    case 10:
        img = 'img/autumn.jpg';
        break;
    case 11:
        img = 'img/winter.jpg';
        break;
    default:
        img = 'img/winter.jpg';
        break;
}

document.getElementById('output_image').src = img;
