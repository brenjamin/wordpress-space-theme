import $ from 'jquery';

class Preloader {
    constructor() {
        this.status = $('#status');
        this.preloader = $('#preloader');
        this.body = $('body');
        this.initPreloader();
    }
    initPreloader() {
        this.status.fadeOut(); // will first fade out the loading animation 
        this.preloader.delay(250).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        // this.body.delay(250).css({'overflow':'visible'});
    }
    


}

export default Preloader;
