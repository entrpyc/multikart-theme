import { getCookie, setCookie } from './../util/cookies';

export default class CookieBox {
    static init () {
        CookieBox.$cookieBoxEl = $('#js-cookie-panel');
        CookieBox.$cookieBoxAcceptButton = $('#js-cookie-panel .accept-cookies');
        CookieBox.$cookieBoxCloseButton = $('#js-cookie-panel .close-cookies');

        CookieBox.checkCookies();
    }

    static checkCookies () {
        const cookie = getCookie('accepted-cookies');
        if (cookie) {
            return;
        }

        this.initEvents();
    }

    static initEvents () {
        CookieBox.$cookieBoxEl.addClass('is-active');
        CookieBox.$cookieBoxAcceptButton.click(CookieBox.handleAcceptButtonClick);
        CookieBox.$cookieBoxCloseButton.click(CookieBox.handleCloseButtonClick);
    }

    static handleAcceptButtonClick (e) {
        e.preventDefault();
        setCookie('accepted-cookies', true, 30);
        CookieBox.$cookieBoxEl.remove();
    }

    static handleCloseButtonClick (e) {
        console.log('here');
        e.preventDefault();
        CookieBox.$cookieBoxEl.remove();
    }
}