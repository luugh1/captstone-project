CREATE DATABASE IF NOT EXISTS brandit;

USE brandit;

CREATE TABLE IF NOT EXISTS services (
service_id INT auto_increment NOT NULL UNIQUE,
service_name VARCHAR(100) NOT NULL UNIQUE,
PRIMARY KEY (service_id)
);

CREATE TABLE IF NOT EXISTS packages (
package_id INT auto_increment NOT NULL UNIQUE,
package_name VARCHAR(100) NOT NULL,
PRIMARY KEY (package_id)
);

CREATE TABLE IF NOT EXISTS service_packages(
service_package_id INT auto_increment NOT NULL UNIQUE,
service_id INT,
package_id INT,
price DECIMAL,

PRIMARY KEY(service_package_id),
FOREIGN KEY(service_id) REFERENCES services(service_id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (package_id) REFERENCES packages(package_id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS service_features(
service_feature_id INT auto_increment NOT NULL UNIQUE,
service_id INT,
feature_name VARCHAR(100),

PRIMARY KEY (service_feature_id),
FOREIGN KEY (service_id) REFERENCES services(service_id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS service_package_features(
service_package_feature_id INT auto_increment NOT NULL UNIQUE,
service_package_id INT,
service_feature_id INT,

PRIMARY KEY (service_package_feature_id),
FOREIGN KEY (service_package_id) REFERENCES service_packages(service_package_id) ON UPDATE CASCADE ON DELETE CASCADE

);





-- Populating Table

INSERT INTO Services (service_name) VALUES
('Design Services'),
('Development Services'),
('Branding Services');

INSERT INTO Packages (package_name) VALUES
('Starter'),
('Standard'),
('Premium');

 -- Design Services
INSERT INTO Service_Packages (service_id, package_id, price) VALUES
(1, 1, 5000.00), -- Starter
(1, 2, 9000.00), -- Standard
(1, 3, 12000.00); -- Premium

-- Development Services
INSERT INTO Service_Packages (service_id, package_id, price) VALUES
(2, 1, 20000.00), -- Starter
(2, 2, 25000.00), -- Standard
(2, 3, 30000.00); -- Premium

-- Branding Services
INSERT INTO Service_Packages (service_id, package_id, price) VALUES
(3, 1, 8500.00), -- Starter
(3, 2, 10000.00), -- Standard
(3, 3, 15000.00); -- Premium


-- Design Services
INSERT INTO Service_Features (service_id, feature_name) VALUES
(1, 'Website Design and Development'),
(1, 'Landing Page Design'),
(1, 'Website Redesign'),
(1, 'User Experience (UX) Design'),
(1, 'E-commerce Website Design'),
(1, 'Responsive and Mobile Design'),
(1, 'UI/UX Testing and Analysis');


-- Development Services 
INSERT INTO Service_Features (service_id, feature_name) VALUES
(2, 'Front-End Development'),
(2, 'Mobile Responsive Design and Dev.'),
(2, 'Testing and Quality Assurance'),
(2, 'E-commerce Application Dev.'),
(2, 'Search Engine Optimization (SEO)'),
(2, 'Maintenance and Support Services'),
(2, 'Back-End Development'),
(2, 'Performance Optimization'),
(2, 'Security Enhancement'),
(2, 'Cloud-Based Application Dev');

-- Branding Services

INSERT INTO Service_Features (service_id, feature_name) VALUES
(3, 'Brand Strategy and Consultation'),
(3, 'Brand Identity Design (logo, typography, color scheme)'),
(3, 'Brand Naming and Tagline Creation'),
(3, 'Market Research and Positioning'),
(3, 'Visual Brand Assets Creation (icons, patterns, illustrations)'),
(3, 'Brand Collateral Design (business cards, letterheads, signage)'),
(3, 'Online and Offline Brand Presence Strategy'),
(3, 'Brand Audits and Health Check');

-- Design Features
INSERT INTO service_package_features(service_package_id, service_feature_id) VALUES
-- Design Starter
(1, 1),
(1, 2),
(1, 3),

-- Design Standard

(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),

-- Design Premium

(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7);

-- Development Features
INSERT INTO service_package_features(service_package_id, service_feature_id) VALUES
-- Design Starter
(4, 8),
(4, 9),
(4, 10),

-- Design Standard

(5, 8),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),

-- Design Premium

(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 16),
(6, 17);

-- Branding Features
INSERT INTO service_package_features(service_package_id, service_feature_id) VALUES
-- Design Starter
(7, 18),
(7, 19),
(7, 20),

-- Design Standard

(8, 18),
(8, 19),
(8, 20),
(8, 21),
(8, 22),


-- Design Premium

(9, 18),
(9, 19),
(9, 20),
(9, 21),
(9, 22),
(9, 23),
(9, 24),
(9, 25);


-- test
SELECT sf.feature_name, s.service_name
FROM service_features sf
INNER JOIN services s
ON sf.service_id = s.service_id
WHERE s.service_name = 'Development Services';


