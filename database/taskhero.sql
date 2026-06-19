CREATE DATABASE taskhero;
USE taskhero;

CREATE TABLE users (

    id INT AUTO_INCREMENT PRIMARY KEY,

    username VARCHAR(50) NOT NULL,

    email VARCHAR(100) NOT NULL UNIQUE,

    password VARCHAR(255) NOT NULL,

    avatar VARCHAR(255) DEFAULT 'default.png',

    xp INT DEFAULT 0,

    level_user INT DEFAULT 1,

    coins INT DEFAULT 0,

    role ENUM('user','admin')
    DEFAULT 'user',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE tasks (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    title VARCHAR(255) NOT NULL,

    description TEXT,

    difficulty ENUM(
        'easy',
        'medium',
        'hard'
    ) DEFAULT 'easy',

    xp_reward INT DEFAULT 10,

    status ENUM(
        'pending',
        'completed'
    ) DEFAULT 'pending',

    due_date DATE,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE

);

CREATE TABLE pomodoro_sessions (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    duration INT NOT NULL,

    xp_earned INT DEFAULT 5,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE

);


CREATE TABLE achievements (

    id INT AUTO_INCREMENT PRIMARY KEY,

    title VARCHAR(100),

    description TEXT,

    badge_icon VARCHAR(255)

);




CREATE TABLE user_achievements (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    achievement_id INT NOT NULL,

    unlocked_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE,

    FOREIGN KEY (achievement_id)
    REFERENCES achievements(id)
    ON DELETE CASCADE

);


CREATE TABLE tournaments (

    id INT AUTO_INCREMENT PRIMARY KEY,

    title VARCHAR(255),

    description TEXT,

    start_date DATE,

    end_date DATE,

    reward VARCHAR(255)

);


CREATE TABLE tournament_participants (

    id INT AUTO_INCREMENT PRIMARY KEY,

    tournament_id INT,

    user_id INT,

    score INT DEFAULT 0,

    FOREIGN KEY (tournament_id)
    REFERENCES tournaments(id)
    ON DELETE CASCADE,

    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE

);


INSERT INTO achievements
(title, description, badge_icon)
VALUES

(
'First Quest',
'Selesaikan tugas pertama',
'badge1.svg'
),

(
'Focus Master',
'Selesaikan 10 sesi pomodoro',
'badge2.svg'
),

(
'Level 5 Hero',
'Mencapai level 5',
'badge3.svg'
);