import $ from 'jquery';

class CookieTray {
    constructor() {
        this.tray = $('.cookie-tray');
        this.button = $('.cookie-tray__button');
        this.events();
    }

    events() {
        this.button.on('click', this.closeTray.bind(this));
    }

    closeTray() {
        this.tray.addClass('clicked');
    }
}

export default CookieTray;