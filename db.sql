-- Usunięcie dodanych wcześniej tabel

DROP TABLE cms_articles;
DROP TABLE cms_category;

-- Polecenia dla dodania tabel w bazie

CREATE TABLE IF NOT EXISTS cms_category (ca_id INT AUTO_INCREMENT PRIMARY KEY, ca_name VARCHAR(20) NOT NULL);
CREATE TABLE IF NOT EXISTS cms_articles (ar_id INT AUTO_INCREMENT PRIMARY KEY, ar_title VARCHAR(100) NOT NULL, ar_description VARCHAR(100) NOT NULL, ar_h1 VARCHAR(100) NOT NULL, ar_content TEXT, ar_link VARCHAR(100) NOT NULL, ar_date CHAR(10), ar_idCategory INT NOT NULL, FOREIGN KEY (ar_idCategory) REFERENCES cms_category(ca_id));

-- Testowe uzupełnienie tabel 

INSERT INTO cms_category (ca_id, ca_name) VALUES (NULL, 'Gry PS4');
INSERT INTO cms_category (ca_id, ca_name) VALUES (NULL, 'Gry PS3');
INSERT INTO cms_articles (ar_id, ar_title, ar_description, ar_h1, ar_content, ar_link, ar_date, ar_idCategory) VALUES (NULL, 'Far Cry 5, sprawdź koniecznie!', 'Przeczytaj recenzję o Far Cry 5', 'Far Cry 5, czy warto?', 'Opis Far Cry 5', 'far-cry-5', '2019-04-18', 2);
INSERT INTO cms_articles (ar_id, ar_title, ar_description, ar_h1, ar_content, ar_link, ar_date, ar_idCategory) VALUES (NULL, 'GTA 5, wiele godzin zabawy!', 'Sprawdź najlepszą odsłonę serii GTA', 'Najlepsze GTA', 'Opis GTA 5', 'gta-5', '2019-04-17', 1);