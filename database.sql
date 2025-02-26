-- Create the database
CREATE DATABASE IF NOT EXISTS CeylonExplorer;
USE CeylonExplorer;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    country VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    tour_package VARCHAR(100) NOT NULL,
    guests INT NOT NULL,
    arrival_date DATE NOT NULL,
    departure_date DATE NOT NULL,
    accommodation_type VARCHAR(50) NOT NULL,
    special_interests TEXT, -- Stores selected interests as comma-separated values
    special_requests TEXT, -- Optional user requests
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Alter bookings table to add status column if it doesn't exist
ALTER TABLE bookings
ADD COLUMN status ENUM('pending', 'confirmed', 'cancelled') NOT NULL DEFAULT 'pending',
ADD COLUMN updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;

-- Create booking_history table for tracking changes
CREATE TABLE booking_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT NOT NULL,
    action VARCHAR(50) NOT NULL,
    performed_by VARCHAR(100) NOT NULL,
    details TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (booking_id) REFERENCES bookings(id) ON DELETE CASCADE
);

-- Create index on booking_id for faster lookups
CREATE INDEX idx_booking_history_booking_id ON booking_history(booking_id);

-- Create index on created_at for chronological queries
CREATE INDEX idx_booking_history_created_at ON booking_history(created_at);