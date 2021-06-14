CREATE TABLE messages(
    message_id INT(11) AUTO_INCREMENT NOT NULL,
    message_name VARCHAR(255) NOT NULL,
    message_email VARCHAR(255) NOT NULL,
    message_text TEXT NOT NULL,
    PRIMARY KEY(message_id)
);