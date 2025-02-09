CREATE TABLE roles (
    id SERIAL PRIMARY KEY,
    role_name VARCHAR(255) NOT NULL,
    role_description TEXT
);

CREATE TABLE competence (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) UNIQUE,
    rating FLOAT,
    photo VARCHAR(255),
    role_id INT REFERENCES roles (id) ON DELETE CASCADE
);

CREATE TABLE user_roles (
    user_id INT REFERENCES users (id) ON DELETE CASCADE,
    role_id INT REFERENCES roles (id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, role_id)
);

CREATE TABLE user_competence (
    user_id INT REFERENCES users (id) ON DELETE CASCADE,
    skill_id INT REFERENCES competence (id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, skill_id)
);

CREATE TABLE messages (
    id SERIAL PRIMARY KEY,
    content TEXT NOT NULL,
    expediteur_id INT REFERENCES users (id) ON DELETE CASCADE,
    destinataire_id INT REFERENCES users (id) ON DELETE CASCADE,
    created_at TIMESTAMP DEFAULT NOW()
);

CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT
);

CREATE TABLE tags (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE projets (
    id SERIAL PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    budget FLOAT,
    duration INT,
    photo VARCHAR(255),
    client INT REFERENCES users (id),
    category_id INT REFERENCES categories (id) ON DELETE SET NULL
);

CREATE TABLE projet_tags (
    projet_id INT REFERENCES projets (id) ON DELETE CASCADE,
    tag_id INT REFERENCES tags (id) ON DELETE CASCADE,
    PRIMARY KEY (projet_id, tag_id)
);

CREATE TABLE offres (
    id SERIAL PRIMARY KEY,
    projet_id INT REFERENCES projets (id) ON DELETE CASCADE,
    budget FLOAT NOT NULL,
    freelancer INT REFERENCES users (id),
    client INT REFERENCES users (id)
);

CREATE TABLE contrats (
    id SERIAL PRIMARY KEY,
    contenu TEXT,
    freelancer_id INT REFERENCES users (id) ON DELETE CASCADE,
    client_id INT REFERENCES users (id) ON DELETE CASCADE,
    created_date DATE DEFAULT CURRENT_DATE
);

CREATE TABLE factures (
    id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users (id) ON DELETE CASCADE,
    duration INT,
    date DATE DEFAULT CURRENT_DATE,
    projet_id INT REFERENCES projets (id) ON DELETE CASCADE
);

CREATE TABLE paiements (
    id SERIAL PRIMARY KEY,
    facture_id INT REFERENCES factures (id) ON DELETE CASCADE,
    paiement_date DATE DEFAULT CURRENT_DATE
);

-- Insert into roles table
INSERT INTO roles (role_name, role_description)
VALUES 
('Admin', 'Has full access to all resources and settings.'),
('Freelancer', 'A user who offers services on projects.'),
('Client', 'A user who hires freelancers for projects.');

-- Insert into competence table
INSERT INTO competence (name)
VALUES
('Web Development'),
('Graphic Design'),
('SEO'),
('Marketing'),
('Writing');

-- Insert into users table
INSERT INTO users (firstname, lastname, email, password, phone, rating, photo, role_id)
VALUES
('Omar', 'Bennani', 'omar.bennani@example.com', 'password123', '0601234567', 4.5, 'omar.jpg', 1),
('Khadija', 'El Hachimi', 'khadija.elh@example.com', 'password123', '0612345678', 4.7, 'khadija.jpg', 2),
('Rachid', 'Alami', 'rachid.alami@example.com', 'password123', '0623456789', 4.3, 'rachid.jpg', 3),
('Yassine', 'Boussif', 'yassine.boussif@example.com', 'password123', '0634567890', 4.8, 'yassine.jpg', 2),
('Sara', 'Jouhari', 'sara.jouhari@example.com', 'password123', '0645678901', 5.0, 'sara.jpg', 3);

-- Insert into user_roles table
INSERT INTO user_roles (user_id, role_id)
VALUES
(1, 1), 
(2, 2), 
(3, 3), 
(4, 2),
(5, 3);

-- Insert into user_competence table
INSERT INTO user_competence (user_id, skill_id)
VALUES
(1, 1), 
(2, 2), 
(3, 3), 
(4, 4),
(5, 5);

-- Insert into messages table
INSERT INTO messages (content, expediteur_id, destinataire_id, created_at)
VALUES
('Hello, I would like to discuss the project details with you.', 1, 2, NOW()),
('I received your proposal and I have a few questions.', 2, 1, NOW()),
('Can we schedule a meeting for tomorrow?', 3, 4, NOW()),
('Thank you for your work on the project.', 4, 5, NOW()),
('Please send the final report as soon as possible.', 5, 1, NOW());

-- Insert into categories table
INSERT INTO categories (titre, description)
VALUES
('Web Development', 'Projects related to creating websites and web applications.'),
('Design', 'Projects focused on graphic design and visual arts.'),
('Marketing', 'Projects related to digital marketing and strategy.');

-- Insert into tags table
INSERT INTO tags (name)
VALUES
('E-commerce'),
('UI/UX'),
('SEO'),
('Responsive Design'),
('Social Media');

-- Insert into projets table
INSERT INTO projets (titre, description, budget, duration, photo, client, category_id)
VALUES
('E-commerce Website', 'Build a complete e-commerce platform for a clothing store.', 5000.0, 3, 'ecommerce.jpg', 1, 1),
('Logo Design', 'Design a unique logo for a new startup.', 300.0, 1, 'logo.jpg', 2, 2),
('Social Media Strategy', 'Develop a social media marketing strategy for a restaurant.', 1500.0, 2, 'social_media.jpg', 3, 3);

-- Insert into projet_tags table
INSERT INTO projet_tags (projet_id, tag_id)
VALUES
(1, 1), 
(2, 2),
(3, 4);

-- Insert into offres table
INSERT INTO offres (projet_id, budget, freelancer, client)
VALUES
(1, 4500.0, 2, 1),
(2, 250.0, 3, 2),
(3, 1300.0, 4, 3);

-- Insert into contrats table
INSERT INTO contrats (contenu, freelancer_id, client_id, created_date)
VALUES
('The freelancer will design the website and set up the payment system.', 2, 1, CURRENT_DATE),
('The freelancer will create the logo based on client specifications.', 3, 2, CURRENT_DATE),
('The freelancer will create a content plan and schedule for the social media accounts.', 4, 3, CURRENT_DATE);

-- Insert into factures table
INSERT INTO factures (user_id, duration, date, projet_id)
VALUES
(2, 3, CURRENT_DATE, 1),
(3, 1, CURRENT_DATE, 2),
(4, 2, CURRENT_DATE, 3);

-- Insert into paiements table
INSERT INTO paiements (facture_id, paiement_date)
VALUES
(1, CURRENT_DATE),
(2, CURRENT_DATE),
(3, CURRENT_DATE);
