import axios from 'axios';
import './bootstrap';

const form = document.getElementById('form')
const inputMessage= document.getElementById('input-message')
const listMessage= document.getElementById('list-messages')

form.addEventListener('submit', function(event){
    event.preventDefault();
    const userInput = inputMessage.value;

    axios.post('/chat-message' , {
        message:userInput
    });
})

const channel = Echo.channel('public.chat.1');

channel.subscribed(() => {
    console.log('subscribed');
}).listen('.chat-message', (event)=>{

    console.log(event);
    console.log("how are you");
    const message = event.message;

    const li = document.createElement('li');
    listMessage.append(li);
})

