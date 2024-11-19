// JavaScript code for handling the AJAX request and updating the chat interface
var chatForm = document.getElementById('chatForm');
var chatMessages = document.getElementById('chatMessages');

chatForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    var userInput = document.getElementById('userInput').value;
    var userMessage = '<div class="user-message"><p>' + userInput + '</p></div>';

    // Append user message to chat messages
    chatMessages.innerHTML += userMessage;
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Send AJAX request to the PHP script
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'chatbot.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            var botMessage = '<div class="bot-message"><p>' + response.botResponse + '</p></div>';
            chatMessages.innerHTML += botMessage;
            chatMessages.scrollTop = chatMessages.scrollHeight;
            document.getElementById('userInput').value = '';
        }
    };

    xhr.send('userInput=' + userInput);
});