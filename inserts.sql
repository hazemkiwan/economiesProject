INSERT INTO `categories` (title) VALUES ('NASDAQ');
INSERT INTO `categories` (title) VALUES ('Dow Jones');
INSERT INTO `categories` (title) VALUES ('Gold');
INSERT INTO `articles` (name, body, category_id) VALUES ('first article', 'first article body', 1);
INSERT INTO `articles` (name, body, category_id) VALUES ('second article', 'second article body', 2);
INSERT INTO `countries` (name, phone_prefix) VALUES ('Palestine', 970);
INSERT INTO `countries` (NAME, phone_prefix) VALUES ('Jordan', 962);
INSERT INTO `countries` (NAME, phone_prefix) VALUES ('Eygpt', 20);
INSERT INTO `countries` (NAME, phone_prefix) VALUES ('Germany', 49);
INSERT INTO `stocks` (name, factor, price ,last_updated) VALUES ('NASDAQ', 3, 1.0, '2017-12-8 17:08');
INSERT INTO `stocks` (name, factor, price ,last_updated) VALUES ('Dow Jones', 4, 1.0, '2017-12-8 17:08');
INSERT INTO `stocks` (name, factor, price ,last_updated) VALUES ('Gold', 5, 1.0, '2017-12-8 17:08');