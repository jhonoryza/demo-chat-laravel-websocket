import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const channel = Echo.channel('public.1');
channel.subscribe(() => {
    console.log('subscribed');
})
channel.listen('.playground', (event) => {
    console.log(event);
})
