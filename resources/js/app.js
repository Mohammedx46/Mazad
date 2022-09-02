import './bootstrap';


const channel = Echo.channel('public.playground.1');

channel.subscribed(() => {
    console.log('subscribed');
}).listen('playground', (event)=>{
    console.log(event);
    console.log("how are you")
})

