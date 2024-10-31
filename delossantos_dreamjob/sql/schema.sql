CREATE TABLE WebDeveloperRegistration (
    DeveloperID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    PasswordHash VARCHAR(255) NOT NULL,
    PortfolioURL VARCHAR(255),
    Skills TEXT,
    RegistrationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
