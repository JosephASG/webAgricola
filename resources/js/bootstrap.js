import _ from 'lodash';
window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

let js = `
    |--------------------------------------------|
    |    ░░░░░██╗░██████╗                        |
    |    ░░░░░██║██╔════╝                        |
    |    ░░░░░██║╚█████╗░                        |
    |    ██╗░░██║░╚═══██╗                        |
    |    ╚█████╔╝██████╔╝                        |
    |    ░╚════╝░╚═════╝░                        |
    |                                            |
    |    Front-end & Web Design by JoSePh SaN    |
            |    Visit portfolio ->>> joseph-san.com     |
    |--------------------------------------------|
    `
let js_logo = `%c

    JJSSSSSSSSSSSSSSSS
    JJJJJJ          SSSSSSSSSSSSSSSSSSSS
    JJSSSSSSSSJJ      JJSSSSSSSSSSSSSSSSSSJJ
    JJSSSSSSSSJJ      SSSSSSSSSSSSSSSSSSSSJJ
    SSSSSSSSSSJJ    SSSS        JJJJJJSS
    JJSSSSSSSSJJ    SSSS
    JJSSSSSSSSJJ  SSSSJ
    SSSSSSSSJJ  JJSSJJ
    JJSSSSSSSSJJ JJSSSSJ
    JJSSSSSSJJ  JJSSJJ
    JJSSSSSSSS  JJSSSS
    JJSSSSSSJJ  JJSSJJ
    JJSSSSSS  JJSSSSJJ
    JJSSSSSSJJ  JJSSJJ
    JJSSSSSS  JJSSSSJJ
    SSSSSSJJ  JJSSJJ
    JJSSSSJJ  JJSSSS
    JJSSSS    SSSSJJ
    JJJJJJJJJJJJJJ            JJSSSSJJ  SSSSJJ
    SSSSSSSSSSSSSSSSJJJJ        JJSSJJ  SSSSJJ
    SSSSJJJJJJJJSSSSSSSSSSSSJJJJJJSSSSJJSSSS
    SSSSJJ      JJJJJJSSSSSSSSSSSSSSSSSSSSJJ
    JJSSSS              JJJJJJJJJJSSSSJJ
    JJSSSSJJ                    JJSSJJ
    JJSSSSJJ                  JJSSJJ
    JJSSSSJJ                JJSSJJ
    JJSSSSSSJJ            JJSSJJ
    JJSSSSSSJJJJ      JJSSSSJJ
    JJSSSSSSSSSSSSSSSSSS
    JJSSSSSSSSSSJJJJ

    `
var url = "https://joseph-san.com/";

let legend = `%c
    \t|                                      |\t
    \t|--------------------------------------|\t
    \t|                                      |\t
    \t| Front-end & Web Design by JoSePh SaN |\t
    \t|                                      |\t
    \t|--------------------------------------|\t
    \t|                                      |\t\n
\t Visit portfolio ->>> ${url} \t\n
    \t|--------------------------------------|\t
    \t|                                      |\t\n\n`

console.log(js_logo + legend, "color:red", "color: white;font-size: 12px;");

