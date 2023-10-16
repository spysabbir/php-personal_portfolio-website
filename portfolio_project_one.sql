-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 08:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_project_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_photo`) VALUES
(24, 'Client-1', '2817888831631673186.png'),
(25, 'Client-2', '1963375311630470390.png'),
(27, 'Client-3', '16450568311630470518.png'),
(28, 'Client-4', '5331566341631354620.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_messages`
--

CREATE TABLE `contacts_messages` (
  `id` int(11) NOT NULL,
  `client_full_name` varchar(100) NOT NULL,
  `client_email_address` varchar(100) NOT NULL,
  `client_message` text NOT NULL,
  `message_send_time` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts_messages`
--

INSERT INTO `contacts_messages` (`id`, `client_full_name`, `client_email_address`, `client_message`, `message_send_time`, `status`) VALUES
(6, 'Md Sabbir Ahammed', 'sabbir@live.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta, earum dolorem reiciendis voluptate ipsum? Nam consectetur maxime aliquid necessitatibus natus. Fugiat inventore sit esse eveniet molestiae illum laborum hic eaque ex ratione ad laboriosam optio maiores est maxime in, ducimus nostrum atque eligendi nemo? Quos numquam, officiis quibusdam sint iste nostrum, odit aut quasi totam, earum saepe. Deleniti odit tenetur quisquam libero veniam? Labore sit velit quam voluptates in! Impedit sint rem harum voluptatem, id incidunt, veritatis totam veniam odio deserunt dolor omnis accusantium. Sed ut beatae, quisquam nobis animi dolorem porro nisi atque necessitatibus facilis odit consequuntur magnam tenetur nemo. Aliquam ad aliquid modi laboriosam, ab officia mollitia debitis vel a soluta. Sit perferendis nesciunt dolorum totam quibusdam alias deleniti, quod pariatur explicabo. Itaque fuga numquam cupiditate, explicabo necessitatibus adipisci quam iure nam accusantium maxime rerum officiis eligendi nihil a dignissimos, architecto ad molestias ex fugiat impedit sapiente. Rerum, sequi nulla! Illo rem dolores expedita sequi quaerat ab fuga quis ratione perspiciatis eaque ex, veniam sint iusto praesentium, amet harum natus. Beatae, esse! Unde quo animi delectus expedita qui quisquam, optio mollitia aut corrupti eum. Doloribus corrupti aliquid hic ab accusantium beatae. Minima corporis consequatur vero iste nihil.', '2021-09-06 18:47:19', 'read'),
(7, 'Sovon Khan', 'sovon@live.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta, earum dolorem reiciendis voluptate ipsum? Nam consectetur maxime aliquid necessitatibus natus. Fugiat inventore sit esse eveniet molestiae illum laborum hic eaque ex ratione ad laboriosam optio maiores est maxime in, ducimus nostrum atque eligendi nemo? Quos numquam, officiis quibusdam sint iste nostrum, odit aut quasi totam, earum saepe. Deleniti odit tenetur quisquam libero veniam? Labore sit velit quam voluptates in! Impedit sint rem harum voluptatem, id incidunt, veritatis totam veniam odio deserunt dolor omnis accusantium. Sed ut beatae, quisquam nobis animi dolorem porro nisi atque necessitatibus facilis odit consequuntur magnam tenetur nemo. Aliquam ad aliquid modi laboriosam, ab officia mollitia debitis vel a soluta. Sit perferendis nesciunt dolorum totam quibusdam alias deleniti, quod pariatur explicabo. Itaque fuga numquam cupiditate, explicabo necessitatibus adipisci quam iure nam accusantium maxime rerum officiis eligendi nihil a dignissimos, architecto ad molestias ex fugiat impedit sapiente. Rerum, sequi nulla! Illo rem dolores expedita sequi quaerat ab fuga quis ratione perspiciatis eaque ex, veniam sint iusto praesentium, amet harum natus. Beatae, esse! Unde quo animi delectus expedita qui quisquam, optio mollitia aut corrupti eum. Doloribus corrupti aliquid hic ab accusantium beatae. Minima corporis consequatur vero iste nihil.', '2021-09-06 21:15:27', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company_name`, `duration`, `designation`, `description`) VALUES
(26, 'Chakladar Corp', '2017-2018', 'Junior Officer', 'Past Job.............'),
(27, 'M&J Group', '2018-2021', 'Junior  Executive', 'Present Job........'),
(28, 'Spy IT Firm', '2021-2021', 'Founder', 'Future Plan.......'),
(29, 'Spy IT eSchool', '2021-2021', 'CEO', 'Future Plan......');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_headline` varchar(100) NOT NULL,
  `news_details` text NOT NULL,
  `news_cover_photo` varchar(200) NOT NULL,
  `news_uploaded_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_headline`, `news_details`, `news_cover_photo`, `news_uploaded_date_time`) VALUES
(2, '10 Ways to Discover if Freelancing is for You.', '      Freelancing is a popular career choice for many people, especially those with an entrepreneurial spirit and a desire to escape a boring 9-to-5 office job. Yet while a freelancing career can be liberating in many ways, itï¿½s also a very difficult route to take. Not everyone is suited to this way of working.\r\n\r\nThere are a number of character traits and natural tendencies you need in order to succeed as a freelance professional. If you donï¿½t have at least some of these characteristics, then youï¿½ll soon find working for your own clients is even more grueling than working for a boss.\r\n\r\nBeing self-employed and growing your own business is a lot harder than people imagine. A lot of people try freelancing but end up returning to a more traditional job after a year or two. In most cases, this is because they were not really suited to a freelance way of working in the first place.\r\n\r\nSo how can you tell whether youï¿½ll love freelancing or soon find it an anxiety-inducing struggle?', '13982327741631639012.jpg', '2021-08-31 21:46:03'),
(3, 'How To Become A Successful Freelancer!', 'So you’re reading this because you want to become a freelancer. You’ve thought about what you want to freelance in, you’ve got a couple of useful email addresses and you’ve even bought yourself some sweatpants that will look great with your slippers.\r\n\r\nSo you’re ready to dump that job and get cracking on your first assignment, right?\r\n\r\nWrong.\r\n\r\nOne of the biggest misconceptions about freelancing is that you sit at home and work comes to you. When the reality is you have to fight for it, and fight hard.\r\n\r\nAs our friend Leif Kendall aptly put it:\r\n\r\n“First: you must strive. Nothing good is ever easy.”\r\n\r\nI hate to break it to you, but working freelance means working. And I mean really working. Unlike your 9-5 cubicle, there is nothing cushy about freelancing, nothing stable about it until YOU have made it that way.\r\n\r\nBut there are some simple secrets to becoming a successful freelancer which I am going to share with you in this blog post. Here they are in brief—feel free to select one to jump straight to it, or read on for the full story.\r\n\r\nContact everyone you know.\r\nWork on your personal brand.\r\nWrite a plan of action.\r\nDo your research and pay attention to competition.\r\nGet yourself a mentor—and your first client.', '15407827111630424793.jpg', '2021-08-31 21:46:33'),
(4, 'How to Start Freelancing in 9 Steps!', ' With remote work on the rise, more people than ever want to become a freelancer or start freelancing. Which begs the next obvious question…HOW to start freelancing? Thankfully, it’s easier to become a freelancer than ever before. More than 57 million Americans freelanced in 2019, and the trend continues to grow with more than 50% of Gen Z opting to start freelancing. Not only is it more popular to become a freelancer than ever before, but companies are getting more and more comfortable hiring freelancers rather than full-time employees. A lot of jobs can be done remotely, and companies don’t need to provide the same financial or healthcare benefits to freelancers as they do to full-time employees. So maybe it’s time for YOU to become self-employed and start a freelancing business.\r\n\r\nWith remote work on the rise, more people than ever want to become a freelancer or start freelancing. Which begs the next obvious question…HOW to start freelancing? Thankfully, it’s easier to become a freelancer than ever before. More than 57 million Americans freelanced in 2019, and the trend continues to grow with more than 50% of Gen Z opting to start freelancing. Not only is it more popular to become a freelancer than ever before, but companies are getting more and more comfortable hiring freelancers rather than full-time employees. A lot of jobs can be done remotely, and companies don’t need to provide the same financial or healthcare benefits to freelancers as they do to full-time employees. So maybe it’s time for YOU to become self-employed and start a freelancing business.', '20195373871630425582.jpg', '2021-08-31 21:59:42'),
(19, 'What is Web Design?', ' Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. Web design used to be focused on designing websites for desktop browsers; however, since the mid-2010s, design for mobile and tablet browsers has become ever-increasingly important.\r\n\r\nA web designer works on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. A good web design is easy to use, aesthetically pleasing and suits the user group and brand of the website. Many web pages are designed with a focus on simplicity so that no extraneous information and functionality that might distract or confuse users appears. As the keystone of a web designer’s output is a site that wins and fosters the trust of the target audience, removing as many potential points of user frustration as possible is a critical consideration.\r\n\r\nTwo of the most common methods for designing websites that work well both on desktop and mobile are responsive and adaptive design. In responsive design, content moves dynamically depending on screen size; in adaptive design, the website content is fixed in layout sizes that match common screen sizes. Preserving a layout that is as consistent as possible between devices is crucial to maintaining user trust and engagement. As responsive design can present difficulties in this regard, designers must be careful in relinquishing control of how their work will appear. If they are responsible for the content as well, while they may need to broaden their skill set, they will enjoy having the advantage of full control of the finished product.', '8139589791632127312.jpg', '2021-09-07 09:03:30'),
(30, 'What is Web Development?', 'Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.\r\n\r\nWeb developers, or ‘devs’, do this by using a variety of coding languages. The languages they use depends on the types of tasks they are performing and the platforms on which they are working.\r\n\r\nWeb development skills are in high demand worldwide and well paid too – making development a great career option. It is one of the easiest accessible higher-paid fields as you do not need a traditional university degree to become qualified.\r\n\r\nThe field of web development is generally broken down into the front-end (the user-facing side) and back-end (the server-side). Let’s delve into the details.', '604249801632127295.jpg', '2021-09-20 14:41:35'),
(31, 'What is Graphic Design?', 'Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users’ specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience.\r\n\r\nGraphic design is an ancient craft, dating back past Egyptian hieroglyphs to at least 17,000-year-old cave paintings. It’s a term that originated in the 1920s’ print industry. It continues to cover a range of activities including logo creation. Graphic design in this sense concerns aesthetic appeal and marketing. Graphic designers attract viewers using images, color, and typography. However, graphic designers working in user experience (UX) design must justify stylistic choices regarding, say, image locations and font with a human-centered approach. That means you need to focus on—and seek to empathize the most with—your specific users while you create good-looking designs that maximize usability. Aesthetics must serve a purpose—in UX design we don’t create art for art’s sake. So, graphic designers must branch into visual design. When designing for UX, you should:\r\n\r\nConsider the information architecture of your interactive designs, to ensure accessibility for users.\r\n\r\nLeverage graphic design skills to create work that considers the entire user experience, including users’ visual processing abilities.\r\n\r\nFor instance, if an otherwise pleasing mobile app can’t offer users what they need in several thumb-clicks, its designer/s will have failed to marry graphic design to user experience. The scope of graphic design in UX covers the creation of beautiful designs that users find highly pleasurable, meaningful, and usable.', '20182155761632127486.jpg', '2021-09-20 14:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_type` varchar(100) NOT NULL,
  `clients_name` varchar(200) NOT NULL,
  `complettion_date` date NOT NULL,
  `budget` varchar(50) NOT NULL,
  `project_cover_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_type`, `clients_name`, `complettion_date`, `budget`, `project_cover_photo`) VALUES
(14, 'Project-1', 'Technoogy', 'Sovon', '2021-02-11', '$800', '17596137431631676187.jpg'),
(15, 'Project-2', 'Restaurant', 'Alif', '2021-09-01', '$500', '14180776531630470724.jpg'),
(16, 'Project-3', 'GYM', 'Shahariya', '2021-09-01', '$1000', '2003825641632127795.jpg'),
(20, 'Project-4', 'Hospital', 'Sabbir', '2021-09-05', '$600', '14012950381630940698.jpg'),
(26, 'Project-5', 'Personal Portfolio', 'Queen', '2021-09-09', '$700', '11011447671632126531.jpg'),
(27, 'Project-6', 'Newspaper', 'Prine, Tanvir', '2021-09-19', '$1200', '2938075421632126808.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_icon_name` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_photo` varchar(100) NOT NULL,
  `service_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon_name`, `service_name`, `service_photo`, `service_details`) VALUES
(13, 'fa-leaf', 'Graphic Design', '9960518641631677178.jpg', 'The main purpose here is to make you able to use graphic design tools and techniques in a professional way. Graphic Design helps to build the brand identity of a company.'),
(14, 'fa-file-code-o', 'Web Design', '18262421771630925026.jpg', 'Web design means creating websites with a user-friendly structure and with an aesthetic approach. Web designers always think about the layout, color scheme, and unique design of a website. But their task does not just end there.	'),
(15, 'fa-database', 'Web Development', '12211578431631351940.jpg', 'Web Development consists of two segments front-end development and backend development. Front-end Developers work with visual designs of a website and build the sites using code.'),
(16, 'fa-bullhorn', 'Digital Marketing', '13602364051630925157.jpg', 'At a high level, digital marketing refers to advertising delivered through digital channels such as search engines, websites, social media, email, and mobile apps. Using these online media channels, digital marketing is the method by which companies endorse goods, services, and brands.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(50) NOT NULL,
  `percentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `percentage`) VALUES
(3, 'Graphics Design', 60),
(4, 'Web Design', 80),
(5, 'Web Development', 50),
(6, 'Digital Marketing', 40);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `subscriber_email` varchar(100) NOT NULL,
  `subscribe_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `subscriber_email`, `subscribe_date`) VALUES
(1, 'spysabbir@spyitfirm.com', '2021-09-15 14:31:29'),
(2, 'spysabbirr@spyitfirm.com', '2021-09-15 14:34:30'),
(5, 'spysabbirrv@spryitfirm.com', '2021-09-15 14:49:13'),
(6, 'sabbir@gmail.com', '2021-09-17 13:55:18'),
(7, 'sabbir@live.com', '2021-09-17 13:57:40'),
(9, 'sabbirsovon@gmail.com', '2021-09-17 14:12:06'),
(11, 'sabbir420@gmail.com', '2021-09-17 14:21:14'),
(12, 'dmxsabbir@gmail.com', '2021-09-17 15:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_details` varchar(100) NOT NULL,
  `testimonials_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `customer_name`, `customer_details`, `testimonials_details`) VALUES
(2, 'latoya603', 'CEO OF........ (United States)', 'He was very knowledgeable and very thorough with his work. I am very happy with the quality of work delivered. Thank you.'),
(3, 'trevino34', 'CEO of ........... (United Kingdom)', 'The delivery date and quality of the code were outstanding! Fantastic work that exceeds expectations! Highly recommended, will definitely use his services again!'),
(4, 'leonard46', 'CEO OF........ (United States)', 'Seller really help me a lot, and the work is really fast. I really recommend this seller. And I for sure will make a business with him again.'),
(5, 'slatif', 'CEO OF 7eTouch. (Bangladesh)', 'He is a professional seller. He is a static website designer. Fantastic work that exceeds expectations! will definitely use his services again! Recommended');

-- --------------------------------------------------------

--
-- Table structure for table `theme_default`
--

CREATE TABLE `theme_default` (
  `id` int(11) NOT NULL,
  `default_item_name` varchar(200) NOT NULL,
  `default_item_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theme_default`
--

INSERT INTO `theme_default` (`id`, `default_item_name`, `default_item_value`) VALUES
(1, 'owner_name', 'Spy Sabbir'),
(2, 'owner_email_address', 'spysabbir@spyitfirm.com'),
(5, 'owner_phone_number', '+8801953321402'),
(6, 'owner_about_details', 'I am an experienced freelancer. I believe in providing professional work as soon as possible. I can do every work related to Graphic Design, Web Design, Web Development and  Digital Marketing.'),
(7, 'years_of_experience', '5'),
(8, 'primary_background_color', '#1f1f1f'),
(9, 'facebook_link', 'https://www.facebook.com/spysabbirahammed/'),
(10, 'twitter_link', 'https://twitter.com/spysabbir'),
(11, 'instagram_link', 'https://www.instagram.com/spysabbir/'),
(12, 'linkedin_link', 'https://www.linkedin.com/in/spysabbir/'),
(13, 'banner_photo', '1294089981632114620.jpg'),
(14, 'experience_details', 'I am an experienced freelancer. I believe in providing professional work as soon as possible. I can do every work related to Graphic Design, Web Design, Web Development and Digital Marketing. I am available 24/7 online so feel free to hire me if you have any work.'),
(15, 'upload_cv', '12014904151631885891.doc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `designation` varchar(200) NOT NULL DEFAULT 'user',
  `email_address` varchar(100) NOT NULL,
  `phone_number` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL DEFAULT '2000-01-01',
  `password` varchar(50) NOT NULL,
  `profile_photo` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `designation`, `email_address`, `phone_number`, `gender`, `date_of_birth`, `password`, `profile_photo`, `created_at`) VALUES
(27, 'Md Sabbir Ahammed', 'admin', 'admin@email.com', '01953321402', 'male', '1999-10-09', '25d55ad283aa400af464c76d713c07ad', '11346426981632064416.png', '2021-09-01 21:21:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_messages`
--
ALTER TABLE `contacts_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_default`
--
ALTER TABLE `theme_default`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `default_item_name` (`default_item_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts_messages`
--
ALTER TABLE `contacts_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theme_default`
--
ALTER TABLE `theme_default`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
