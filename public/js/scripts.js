const $header = document.querySelector('header');
const $logo = document.querySelectorAll('.img-logo-max')[0];
const $subir = document.querySelector('div.menu-flutuante');
$subir.classList.remove('menu-flutuante');


window.addEventListener('scroll', toggleHeader, false);
function toggleHeader() {
    if (window.pageYOffset > 60 && $header.classList.contains('max-header')) {
        $subir.classList.add('menu-flutuante');
        $header.classList.remove('max-header');
        $header.classList.add('min-header');
        $logo.classList.remove('img-logo-max');
        $logo.classList.add('img-logo-min');
    } else if (window.pageYOffset <= 60 && $header.classList.contains('min-header')) {
        $subir.classList.remove('menu-flutuante');
        $header.classList.add('max-header');
        $header.classList.remove('min-header');
        $logo.classList.add('img-logo-max');
        $logo.classList.remove('img-logo-min');
    }
}
