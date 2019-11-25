import $ from 'jquery';

class Modal {
    constructor() {
        this.openLink = $(".modal__open");
        this.closeLink = $(".modal__exit");
        this.modal = $(".modal");
        this.events();
    }
    
    events() {
        this.openLink.on('click', this.openModal.bind(this));
        this.closeLink.on('click', this.closeModal.bind(this));
    }

    openModal(e) {
        e.preventDefault();
        console.log("open");
        this.modal.addClass('open');
    }

    closeModal(e) {
        e.preventDefault();
        console.log("close");
        this.modal.removeClass('open');
    }
}

export default Modal;