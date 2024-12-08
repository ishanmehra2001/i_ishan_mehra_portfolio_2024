-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2024 at 06:36 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: portfolio-database-new
--

-- --------------------------------------------------------

--
-- Table structure for table contact
--

CREATE TABLE contact (
  id int UNSIGNED NOT NULL,
  fname varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  lname varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  email varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  company varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  message varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  attachment varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table contact
--

INSERT INTO contact (id, fname, lname, email, company, message, attachment) VALUES
(1, 'harry', 'davison', 'harry@123', 'quatro', 'Lorem ipsum dolor sit amet, cokfuodsyf gyusyfs dkf dkgf kjsgs kjdfzdh jdjkgfudf kjdjgfdsgf ksjghds jsghuds jsjhghg jhgj ', ''),
(2, 'ram', 'singh', 'ram@123', 'kavorka', 'Lorem ipsum dolor sit am,g,hrs jghd dh ksg kjgh kgf et, co', ''),
(18, 'ishan', '', 'ishanmehra22@gmail.c', '', 'tested mail on 27 nov', ''),
(19, 'Ishan', '', 'mehraishan2001@gmail', '', 'tested for thankyou page', ''),
(20, 'riya', '', 'mehraishan2001@gmail', '', 'hello ishan!', ''),
(21, 'riya', '', 'riya@gmail.com', '', 'hello ishan!', ''),
(22, 'Rahul', '', 'Rahul123@gmail.com', '', 'Testing send message 29 November.', ''),
(23, 'marco', '', 'marco123@gmail.com', '', 'hello ishan!', ''),
(24, 'Rahul', '', 'rahul123@gmail.com', '', 'tested on 5 December', ''),
(25, 'Rahila', '', 'rahila123@gmail.com', '', 'tested on 8 december', '');

-- --------------------------------------------------------

--
-- Table structure for table project-info
--

CREATE TABLE `project-info` (
  id int UNSIGNED NOT NULL,
  statement varchar(3000) NOT NULL,
  findings varchar(3000) NOT NULL,
  solution varchar(3000) NOT NULL,
  project_id int UNSIGNED NOT NULL,
  photo1 varchar(100) NOT NULL,
  photo2 varchar(100) NOT NULL,
  photo3 varchar(100) NOT NULL,
  photo4 varchar(100) NOT NULL,
  video varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  duration varchar(100) NOT NULL,
  tools varchar(100) NOT NULL,
  website varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table project-info
--

INSERT INTO project-info (id, statement, findings, solution, project_id, photo1, photo2, photo3, photo4, video, duration, tools, website) VALUES
(1, 'As i was not familiar with the 3d software and 3d modelling, i came across many challenges even after getting lessons from professor . Common problems like centralizing the axis of 3d elements and then setting up camera arose but could be solved after asking prof. However, modelling 3d shapes as per design was the most difficult part as it requires hands on experience and knowledge of all the tools of the specific software. After that, setting up keyframes to make the desired animation was another problem as i could not make the camera movement and product (earbud) movement smooth and slow. So, these were the main problems that i faced in the very beginning', 'After analysing all the problems, i came to know that i am not selecting accurate shapes and other elements to create my earbuds. For example, where i needed to have separate circles and then joining then by applying loft, i was constantly using sphere in order to achieve elliptical shape of the earbud.\r\nAnother common issue was, i was not selecting the specific layer to be moved and i continued to set keyframes on wrong layers, which created the animation problem', 'Reaching out professor to get the solution was mandatorily obvious. Along with that, i went through YouTube tutorials and also watched the basic tutorial videos given by the software itself. After regular practise and trying making different shapes, i got familiarize with the software and specially the tools that it offers.', 1, 'images/earbuds/earbud2', 'images/earbuds/POSTER-1', 'images/earbuds/POSTER-2', 'images/earbuds/POSTER-3', 'videos/commercial-earbud', '10 days', 'photoshop, Cinema4d, After effects', 'http://localhost/i_ishan_mehra_portfolio_2024-final/home.php'),
(2, 'When I first started developing Kavorka, I thought blending skincare and branding would be a straightforward process. However, the journey was anything but simple. Despite my background in design and development, the challenge of creating a memorable brand identity with products that stand out in a competitive beauty market was daunting.\r\nMy initial struggles were mainly with formulation clarity and brand positioning. For example, balancing the natural ingredients—aloe vera, lavender, and green tea—with the luxurious feel of Kavorka required extensive research. Additionally, translating my vision into a hand-drawn logo that felt both authentic and polished tested my creativity.', 'As I dove deeper, I realized that while the beauty industry embraces natural ingredients, it often lacks a personal connection between the brand and its users. My research highlighted key issues:\r\n\r\nConsumer Desire for Simplicity: People want minimal, effective skincare routines with trustworthy ingredients.\r\nVisual Identity Matters: A handcrafted touch resonates with consumers craving authenticity.\r\nMarket Gaps in Brand Storytelling: Skincare brands focusing on a strong narrative and unique design leave lasting impressions.\r\nI also discovered through user feedback that while the ingredients were appreciated, communicating their benefits effectively was just as crucial as having them in the products.', 'To overcome these challenges, I adopted a hands-on learning approach. I spent hours experimenting with formulations and redesigning the logo until it reflected Kavorka’s essence: a blend of nature, luxury, and personal touch.\r\nI sought feedback from potential users and refined the product presentation based on their insights. Watching tutorials on branding, revisiting design principles, and even reworking my packaging multiple times helped sharpen Kavorka’s visual identity. This iterative process allowed me to craft a cohesive brand that not only stands out visually but also speaks directly to consumers\' needs for authentic, effective skincare.', 2, 'images/kavorka/FACEBOOK-1.jpg', 'images/kavorka/FACEBOOK-2.jpg', 'images/kavorka/FACEBOOK-3.jpg', 'images/kavorka/MAGAZINE.jpg', 'videos/commercial-kavorka', '3 Days', 'Photoshop, After-effects, Adobe-illustrator, Adobe XD', NULL),
(3, 'Our college needed a website for its Industry Night event where students showcase their portfolios, and guests select the winning team. The challenge was to create a platform that effectively presented student work, provided event details, and facilitated a seamless voting process, all while being visually appealing and easy to navigate.', 'User Experience Needs: Attendees required easy access to schedules, portfolio galleries, and voting functionality.\r\nDesign Preferences: A professional yet engaging design was essential to appeal to both industry professionals and students.\r\nTechnical Requirements: The site needed to handle dynamic content updates and real-time voting securely.\r\nSimilar Event Sites: Research into similar events highlighted the importance of interactive elements and a smooth, responsive design.', 'We developed a responsive, visually engaging website with the following features:\r\n\r\nPortfolio Showcase: A clean, interactive gallery for students\' work.\r\nEvent Information Section: Clear schedules, speaker bios, and venue maps.\r\nVoting System: A secure, user-friendly voting interface integrated with real-time updates.\r\nTechnologies Used: Photoshop and After Effects for visuals, VS Code for coding, and GitHub for version control to ensure smooth collaboration.', 3, 'images/hackathon/banner2', 'images/hackathon/banner3', 'images/hackathon/banner4', 'images/hackathon/banner5', NULL, '20 Days', 'VS Code, Github, After-effects, Photoshop, Adobe illustrator, Adobe XD', NULL),
(4, 'As a designer, I often struggled to find high-quality 3D statues that matched the materials I needed, like metal, stone, or wood. Creating these models from scratch or customizing existing ones took too much time, which slowed down my workflow and limited my creativity.', 'Through my experience, I realized that having access to a variety of well-made 3D models would allow me to focus more on the creative side of my projects. By exploring different resources, I discovered that detailed models in various materials could be both time-saving and customizable, offering a great balance of quality and flexibility.', 'To streamline my process, I started curating a collection of 3D statues made from different materials like metal, stone, and wood. Using these ready-made models allows me to save time and energy, so I can focus on bringing my ideas to life. The ability to customize these models gives me the freedom to incorporate them seamlessly into my work, improving both efficiency and creativity.', 4, 'images/3d/3d-5.png', 'images/3d/3d-2.png', 'images/3d/3d-3.png', 'images/3d/3d-4.png', '', '5 hours', 'Cinema 4dnu', '');

-- --------------------------------------------------------

--
-- Table structure for table projects
--

CREATE TABLE projects (
  id int UNSIGNED NOT NULL,
  description varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  title varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  image varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table projects
--

INSERT INTO projects (id, description, title, image) VALUES
(1, 'I created realistic 3D earbuds in Cinema 4D as part of an assignment focused on mastering 3D modeling techniques. The project involved not only designing the product but also creating promotional posters and advertisements to showcase the final design. This exercise helped me develop skills in both 3D design and visual communication for marketing purposes.', 'EARBUDS', 'images/earbuds/earbud1.png'),
(2, 'For this assignment, I created an entire new skincare brand, Kavorka, from scratch. The project involved designing three 3D skincare products, along with creating promotional posters, advertisements, and a comprehensive style guide. This experience allowed me to explore the entire branding process, from product design to visual identity, honing my skills in 3D modeling, brand development, and marketing communication.', 'KAVORKA', 'images/kavorka/kavorka-1.png'),
(3, 'For our mid-term assignment, I collaborated with two teammates to design and develop a website for our school, intended to be used for an upcoming event. As a group, we handled all aspects of the project, from layout and user interface design to coding and functionality. This assignment provided valuable experience in web development and teamwork, allowing us to create a functional and visually appealing site tailored to the event’s needs.', 'WEBSITE', 'images/hackathon/Desktop_hackathon.png'),
(4, 'This collection features 3D statues created using a range of materials taken from an online source. Each piece showcases the intricate craftsmanship and diverse textures of digital sculpture, offering a unique blend of traditional and modern artistic forms. While these models are not created by me, I have carefully curated them to highlight their stunning detail and material richness, perfect for various design and creative applications.', '3D-models', 'images/3d/3d-1.png');

-- --------------------------------------------------------

--
-- Table structure for table testimonials
--

CREATE TABLE testimonials (
  role varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table contact
--
ALTER TABLE contact
  ADD PRIMARY KEY (id);

--
-- Indexes for table project-info
--
ALTER TABLE project-info
  ADD PRIMARY KEY (id);

--
-- Indexes for table projects
--
ALTER TABLE projects
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contact
--
ALTER TABLE contact
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table project-info
--
ALTER TABLE project-info
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table projects
--
ALTER TABLE projects
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
