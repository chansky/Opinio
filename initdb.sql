DROP DATABASE IF EXISTS opiniodb;
CREATE DATABASE opiniodb;

USE opiniodb;

CREATE TABLE User (
    u_id INT NOT NULL AUTO_INCREMENT, 
    username VARCHAR(20),
    email VARCHAR(100),
    phonenumber INT(10),
    password VARCHAR(20),
    PRIMARY KEY (u_id),
    UNIQUE (username),
    UNIQUE (email)
);

CREATE Table Poll (
    p_id int NOT NULL,
    authorname VARCHAR(100),
    question VARCHAR(255),
    title VARCHAR(100),
    starttime DATETIME NOT NULL DEFAULT NOW(),
    endtime DATETIME NOT NULL,
    pollid VARCHAR(100),
    PRIMARY KEY (p_id),
    FOREIGN KEY (authorname) REFERENCES User(username)
);

CREATE TABLE Vote (
    v_id int NOT NULL,
    p_id int NOT NULL,
    username VARCHAR(100),
    PRIMARY KEY (v_id),
    FOREIGN KEY (username) REFERENCES User(username),
    FOREIGN KEY (p_id) REFERENCES Poll(p_id)
);

CREATE Table Choice (
    c_id int NOT NULL,
    p_id int NOT NULL,
    title VARCHAR(100),
    ordernum int,
    text VARCHAR(255),
    imagepath VARCHAR(100),
    PRIMARY KEY (c_id),
    FOREIGN KEY (p_id) REFERENCES Poll(p_id)
);

CREATE Table ChoiceImage (
    ci_id int NOT NULL,
    c_id int NOT NULL,
    path VARCHAR(255),
    title VARCHAR(100),
    PRIMARY KEY (ci_id),
    FOREIGN KEY (c_id) REFERENCES Choice(c_id)
);


CREATE Table ProfileImage (
    u_id INT NOT NULL,
    pi_id INT NOT NULL,
    imagepath VARCHAR(255),
    title VARCHAR(100),
    PRIMARY KEY (pi_id),
    FOREIGN KEY (u_id) REFERENCES User(u_id)
);

