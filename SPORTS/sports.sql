
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_email VARCHAR(255) NOT NULL UNIQUE,
    admin_password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a sample admin user (the password should be hashed)
INSERT INTO admin_users (admin_email, admin_password)
VALUES ('admin@example.com', '$2y$10$Kbqi2B1h.KfrEBU/dT5Q.eLPEPe.zsJhM75Dx8bZ2itfwQOHUJ9fG'); -- Password is 'password123' hashed

-- Create the athletes table
CREATE TABLE IF NOT EXISTS athletes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    athlete_email VARCHAR(255) NOT NULL UNIQUE,
    athlete_password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a sample athlete user (password is hashed using bcrypt)
INSERT INTO athletes (athlete_email, athlete_password)
VALUES ('athlete@example.com', '$2y$10$e0MYzXyjpJS2GzG6bTWzYue3/CxW6JLaxgZ2ZGZj3L/OE2hJjhk2C');


-- Create the coaches table
CREATE TABLE IF NOT EXISTS coaches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    coach_email VARCHAR(255) NOT NULL UNIQUE,
    coach_password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a sample coach user (for testing purposes, the password should be hashed in practice)
INSERT INTO coaches (coach_email, coach_password)
VALUES ('coach@example.com', '12345');

-- Create the directors table
CREATE TABLE IF NOT EXISTS directors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    director_email VARCHAR(255) NOT NULL UNIQUE,
    director_password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert a sample director user (for testing purposes, the password should be hashed in practice)
INSERT INTO directors (director_email, director_password)
VALUES ('director@example.com', '$2y$10$examplehashedpassword');


-- Create the achievements table
CREATE TABLE IF NOT EXISTS achievements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data (optional, for testing purposes)
INSERT INTO achievements (title, date, description)
VALUES 
('First Achievement', '2023-06-01', 'Description of the first achievement'),
('Second Achievement', '2023-06-15', 'Description of the second achievement');

-- Create the sports_events table
CREATE TABLE IF NOT EXISTS sports_events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(100) NOT NULL,
    indoor_outdoor ENUM('indoor', 'outdoor') NOT NULL,
    event_date DATE NOT NULL,
    event_location VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create table for storing top performers
CREATE TABLE IF NOT EXISTS top_performers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    photo_url VARCHAR(255) NOT NULL,
    sport_name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create table for storing uploaded files
CREATE TABLE IF NOT EXISTS uploads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    filepath VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE event_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    event_location VARCHAR(255) NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_phone VARCHAR(255) NOT NULL
);
