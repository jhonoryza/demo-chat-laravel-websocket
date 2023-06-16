import './bootstrap';

const channel = Echo.channel('public.1');
channel.subscribe(() => {
    console.log('subscribed');
})
channel.listen('.playground', (event) => {
    console.log(event);
})
