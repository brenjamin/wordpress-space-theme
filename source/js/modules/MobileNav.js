import $ from 'jquery';

class MobileNav {
    constructor() {
        this.mobileNav = $('.mobile-nav-toggle');
        this.navItem = $('.nav .nav-item');
        this.init();
        this.events();
    }

    init() {
        this.navItem.append('<div class="expand"><span>+</span></div>');
        this.expandNavItem = $('.expand');
    }

    events() {
        this.mobileNav.on('click', this.toggleNavigation.bind(this));
        this.expandNavItem.on('click', this.toggleDropdown.bind(this));
    }

    toggleNavigation() {
        $('.expand span').html('+');
        $('.nav-item.active').removeClass('active');
        this.mobileNav.toggleClass('up');
    }

    toggleDropdown(e) {
        const target = $(e.target);
        let expandContent = target.closest('.expand').children().html();
        if (expandContent == '-') {
            target.closest('.expand').children().html('+');
        } else {
            target.closest('.expand').children().html('-');
        }
        target.closest('.nav-item').siblings('.active').find('.expand').find('span').html('+');
        target.closest('.nav-item').siblings('.active').removeClass('active');
        target.closest('.nav-item').toggleClass('active');
    }
}

export default MobileNav;