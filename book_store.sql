CREATE DATABASE IF NOT EXISTS `book_store`;

USE `book_store`;

CREATE USER IF NOT EXISTS 'bookstore_user'@'localhost' IDENTIFIED BY 'bookpassw0rd';


GRANT ALL PRIVILEGES ON *.* TO 'bookstore_user'@'localhost';

DROP TABLE IF EXISTS `books`;


CREATE TABLE `books` (
	`id` int not null auto_increment,
	`book_name` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
	`author` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
	`year` varchar(5) COLLATE utf8mb4_general_ci DEFAULT NULL,
	`price` decimal(10,2) DEFAULT NULL,
	`description` text COLLATE utf8mb4_general_ci DEFAULT NULL,
	`image_url` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
	primary key(id)
);

INSERT INTO `books` (`book_name`, `author`, `year`, `price`, `description`, `image_url`) VALUES
('To Kill a Mockingbird', 'Harper Lee', '1960', '10.99', 'A classic novel about growing up in the American South during the 1930s', 'https://s.yimg.com/fz/api/res/1.2/tGFlVGm8.4eqm5lCkNx.ng--~C/YXBwaWQ9c3JjaGRkO2ZpPWZpdDtoPTI2MDtxPTgwO3c9MjA4/https://s.yimg.com/zb/imgv1/65e07696-5ba6-305a-91ec-62a68cbeb15d/t_500x300'),
('Pride and Prejudice', 'Jane Austen', '1813', '12.99', 'A romantic novel about love, family, and societal expectations in early 19th century England', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTOITbD3D2aiWhBqdiWLUrS5oxlsatwO4WaKxqC1yseG_jCyb3c'),
('1984', 'George Orwell', '1949', '14.99', 'A dystopian novel about a future totalitarian society where individuality and independent thought are suppressed', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0R2GSlq0QtyslLaaWlp2JudgyFbcv5np1gQ&usqp=CAU'),
('Animal Farm', 'George Orwell', '1945', '9.99', 'A satirical allegory about a group of farm animals who rebel against their human farmer', 'https://m.media-amazon.com/images/I/91LUbAcpACL.jpg'),
('Brave New World', 'Aldous Huxley', '1932', '12.49', 'A dystopian novel set in a futuristic society where people are conditioned to be happy with their lives', 'https://upload.wikimedia.org/wikipedia/en/6/62/BraveNewWorld_FirstEdition.jpg'),
('The Great Gatsby', 'F. Scott Fitzgerald', '1925', '10.49', 'A tragic story of love, wealth, and social status set in the Roaring Twenties', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982146702/the-great-gatsby-9781982146702_xlg.jpg'),
('Moby-Dick', 'Herman Melville', '1851', '14.95', 'A whaling voyage narrated by Ishmael, chronicling Captain Ahabs obsession with the great white whale', 'https://tse1.mm.bing.net/th?id=OIP.WTbE7_qIyqfSbkS2CNdPRAHaJl&pid=Api&P=0'),
('The Catcher in the Rye', 'J.D. Salinger', '1951', '11.99', 'A coming-of-age story about a teenage boy, Holden Caulfield, and his experiences in New York City', 'https://s.yimg.com/fz/api/res/1.2/RLqix4MX5ffHj6XRaIZVmw--~C/YXBwaWQ9c3JjaGRkO2ZpPWZpdDtoPTI2MDtxPTgwO3c9MjIy/https://s.yimg.com/zb/imgv1/e9566934-9b79-3cfb-91d5-54223c6b0acf/t_500x300'),
('Crime and Punishment', 'Fyodor Dostoevsky', '1866', '13.95', 'A psychological novel exploring the mind of a man who commits a murder and his subsequent guilt and moral dilemmas', 'https://i.thenile.io/r1000/9780486415871.jpg?r=5e4284a48e904'),
('The Odyssey', 'Homer', '8th century BC', '12.50', 'An epic poem telling the story of the hero Odysseus and his long journey home after the Trojan War', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781451674187/the-odyssey-9781451674187_hr.jpg'),
('Frankenstein', 'Mary Shelley', '1818', '11.00', 'A Gothic novel about a scientist who creates a living being, leading to disastrous consequences', 'https://g.christianbook.com/g/slideshow/5/532244/main/532244_1_ftc.jpg'),
('The Adventures of Huckleberry Finn', 'Mark Twain', '1884', '9.50', 'A story of friendship and adventure along the Mississippi River, exploring themes of race and identity', 'https://tse3.mm.bing.net/th?id=OIP.k--w3KXyH0vqdW-v5gsFgAHaLb&pid=Api&P=0'),
('Catch-22', 'Joseph Heller', '1961', '12.75', 'A satirical novel about the absurdity of war, following the experiences of a bombardier during World War II', 'https://tse3.mm.bing.net/th?id=OIP.8176UT2wXeN8km6wuq_imwHaLc&pid=Api&P=0'),
('Jane Eyre', 'Charlotte Bronte', '1847', '10.95', 'A classic novel about love, independence, and self-discovery, following the life of orphan Jane Eyre', 'https://g.christianbook.com/g/slideshow/6/66784/main/66784_1_ftc_dp.jpg'),
('Wuthering Heights', 'Emily Bronte', '1847', '11.25', 'A dark and passionate tale of love, obsession, and revenge set on the Yorkshire moors', 'https://g.christianbook.com/g/slideshow/7/714072/main/714072_1_ftc.jpg'),
('Great Expectations', 'Charles Dickens', '1861', '13.50', 'The coming-of-age story of an orphan named Pip, exploring themes of wealth, love, and social class', 'https://g.christianbook.com/g/slideshow/5/531184/main/531184_1_ftc.jpg'),
('The Grapes of Wrath', 'John Steinbeck', '1939', '14.00', 'A powerful story of a family of sharecroppers during the Great Depression and their journey to California', 'https://g.christianbook.com/g/slideshow/0/000663/main/000663_1_ftc_dp.jpg'),
('War and Peace', 'Leo Tolstoy', '1869', '18.95', 'A vast and epic novel about the lives of five aristocratic Russian families during the Napoleonic Wars', 'https://blackwells.co.uk/jacket/l/9781400079988.jpg'),
('The Brothers Karamazov', 'Fyodor Dostoevsky', '1880', '15.99', 'A philosophical novel exploring themes of faith, morality, and family through the story of three brothers', 'https://tse3.mm.bing.net/th?id=OIP.gr9YtD0OL9EoY4lQBeotgwHaL2&pid=Api&P=0'),
('Lolita', 'Vladimir Nabokov', '1955', '11.75', 'A controversial novel narrated by a man with an obsession for a young girl, exploring themes of obsession and manipulation', 'https://upload.wikimedia.org/wikipedia/commons/5/57/Lolita_1955.JPG');

SELECT * FROM books ORDER BY year DESC;
