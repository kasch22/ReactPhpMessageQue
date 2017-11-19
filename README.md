# ReactPhpMessageQue
A concept example of a React PHP server and message que tutorial

This code is based on the tutoiral found at https://florian.ec/articles/implementing-an-asynchronous-message-queue-in-php-with-react/

This project is meant as introduction the concepts around Asynchronous PHP.


##To Run

download the respository.

change directory into the project. and run ```composer install```

run ```php server.php```

This will start the php server

in a seperate terminal run ```php index.php```

This should create and populate the message.log file.

in a sperate terminal run ```telnet localhost 4000`` to create a connection the server and type text into the terminal send a message. This will appear in the message.log file.
