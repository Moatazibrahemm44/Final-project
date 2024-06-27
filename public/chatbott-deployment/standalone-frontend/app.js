document.addEventListener('DOMContentLoaded', () => {
    const SCRIPT_ROOT = "http://127.0.0.1:5000";  // Ensure this matches your Flask server URL

    class Chatbox {
        constructor() {
            this.args = {
                openButton: document.querySelector('.chatbox__button'),
                chatBox: document.querySelector('.chatbox__support'),
                sendButton: document.querySelector('.send__button'),
                chatMessages: document.querySelector('.chatbox__messages')
            };

            this.state = false;
            this.messages = [];
        }

     

        display() {
            const { openButton, chatBox, sendButton } = this.args;

            if (openButton) {
                openButton.addEventListener('click', () => this.toggleState(chatBox));
            }

            if (sendButton) {
                sendButton.addEventListener('click', () => this.onSendButton(chatBox));
            }

            const inputField = chatBox.querySelector('input');
            if (inputField) {
                inputField.addEventListener("keyup", ({ key }) => {
                    if (key === "Enter") {
                        this.onSendButton(chatBox);
                    }
                });
            }
        }

        toggleState(chatBox) {
            this.state = !this.state;

            if (this.state) {
                chatBox.classList.add('chatbox--active');
            } else {
                chatBox.classList.remove('chatbox--active');
            }
        }

        onSendButton(chatBox) {
            const textField = chatBox.querySelector('input');
            const text = textField.value.trim();

            if (text === '') {
                return;
            }

            const userMessage = { name: "User", message: text };
            this.messages.push(userMessage);
            this.updateChatText(chatBox, userMessage, 'user');  // Display user's message immediately

            textField.value = '';  // Clear the input field

            // Fetch chatbot response from Flask server
            fetch(SCRIPT_ROOT + '/predict', {
                method: 'POST',
                body: JSON.stringify({ message: text }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                const chatbotMessage = { name: "Sam", message: data.answer };
                this.messages.push(chatbotMessage);
                this.updateChatText(chatBox, chatbotMessage, 'chatbot');  // Display chatbot's response
            })
            .catch(error => console.error('Error:', error));
        }

        updateChatText(chatbox) {
            var html = '';
            this.messages.slice().reverse().forEach(function(item, index) {
                if (item.name === "Sam")
                {
                    html += '<div class="messages__item messages__item--visitor">' + item.message + '</div>'
                }
                else
                {
                    html += '<div class="messages__item messages__item--operator">' + item.message + '</div>'
                }
              });
    
            const chatmessage = chatbox.querySelector('.chatbox__messages');
            chatmessage.innerHTML = html;
        }
    }

    const chatbox = new Chatbox();
    chatbox.display();
});
