import $ from 'jquery';

class Tabset {
    constructor() {
        this.tab = $('.tabset__tab');
        this.tab1 = $('.tabset__tab--1');
        this.tab2 = $('.tabset__tab--2');
        this.content1 = $('.tabset__content--1');
        this.content2 = $('.tabset__content--2');
        this.events();
    }

    events() {
        this.tab1.on('click', this.switchToFirst.bind(this));
        this.tab2.on('click', this.switchToSecond.bind(this));
    }

    switchToFirst() {
        this.tab1.addClass('active');
        this.tab2.removeClass('active');
        this.content1.addClass('active');
        this.content2.removeClass('active');
    }

    switchToSecond() {
        this.tab1.removeClass('active');
        this.tab2.addClass('active');
        this.content1.removeClass('active');
        this.content2.addClass('active');

    }
}

export default Tabset;