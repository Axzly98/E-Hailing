<?php

// Function to get bot's response based on user input
function getBotResponse($userInput) {
    // Define bot responses based on user input
    $botResponses = array(
        "hi" => "Hello! How can I assist you today?",
        "how are you" => "I'm doing well, thank you! How about you?",
        "good" => "That's great to hear!",
        "help" => "Sure, I'm here to help. What do you need assistance with?",
        "bye" => "Goodbye! Have a nice day!",
        "what is the system about?" => "Our system provide the rental car and e-hailing services for the UMP Student!",
        "how to login" => "Go to the homepage and choose the roles you are. Then enter the username and password.",
        "is it expensive?" => "It is not expensive as any others or outside. Our system provide affordable price for the student.",
        "how to register" => "Go to our homepage and choose either you are a driver or student, then click sign up button if you do not have account."
        // Add more responses based on user input
    );

    // Convert user input to lowercase for case-insensitive matching
    $userInput = strtolower($userInput);

    // Check if user input matches any predefined responses
    if (array_key_exists($userInput, $botResponses)) {
        return $botResponses[$userInput];
    } else {
        return "I'm sorry, I didn't understand.";
    }
}

// Handle user input and get bot's response
if (isset($_POST['userInput'])) {
    $userInput = $_POST['userInput'];
    $botResponse = getBotResponse($userInput);
} else {
    $botResponse = "Hello! How can I assist you today?";
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
    <style>
        .chat-container {
  max-width: 400px;
  margin: 20px auto;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
}

.chat-header {
  padding: 10px;
  background-color: #f1f1f1;
  text-align: center;
}

.chat-messages {
  padding: 10px;
  max-height: 300px;
  overflow-y: auto;
}

.bot-message {
  background-color: #e9e9e9;
  padding: 8px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.user-message {
  background-color: #d4e6f1;
  padding: 8px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.chat-input {
  padding: 10px;
  background-color: #f1f1f1;
}

.chat-input form {
  display: flex;
}

.chat-input input[type="text"] {
  flex-grow: 1;
  padding: 6px;
  border: none;
  border-radius: 3px;
  margin-right: 10px;
}

.chat-input button {
  padding: 6px 12px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
</style>
    <!-- Add your CSS stylesheets and other head content here -->
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <h3>ChatBot</h3>
        </div>
        
        <div class="chat-messages" id="chatMessages">
        <div id="chatbox">
        <p><?php echo $botResponse; ?></p>
    </div>
        </div>
        <div class="chat-input">
        <form method="POST" action="chatbot.php">
        <input type="text" name="userInput" placeholder="Enter your message">
        <input type="submit" value="Send">
    </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
    
