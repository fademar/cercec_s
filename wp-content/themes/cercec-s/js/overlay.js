$(document).ready(function () {
    new jBox('Modal', {
        attach: '.overlay-search',
        content: $('#search-form-overlay'),
        addClass: 'search-wrapper',
        overlay: true,
    });
});