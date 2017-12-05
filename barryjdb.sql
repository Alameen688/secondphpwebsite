-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 11, 2015 at 12:07 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `muselord`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `articles`
-- 

CREATE TABLE `articles` (
  `aid` int(12) NOT NULL auto_increment,
  `pubdate` date NOT NULL,
  `cat_id` smallint(12) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `last_modified` date default NULL,
  `articleimage` varchar(225) default NULL,
  `adescription` varchar(225) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `articles`
-- 

INSERT INTO `articles` (`aid`, `pubdate`, `cat_id`, `title`, `content`, `last_modified`, `articleimage`, `adescription`, `keywords`) VALUES 
(1, '2015-02-10', 1, 'Till The Penance of the jews', 'Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you''ll need to use a different clearing method. The most reliable . This will have the same clearing effect. An image placeholder was used in this layout in the .header where you''ll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. Be aware that if you use the Property inspector to navigate to your', '2015-02-10', NULL, 'Poem on the jews ', 'jews, poem, poetry'),
(2, '2015-02-10', 2, 'Osteoid medical cast is better than the convenctional Plaster cast(POP) and also enhances healing', 'Designer Deniz Karashin has designed a customizable 3D printed medical cast .Unlike convectional medical cast made of plaster(also known as POP, plaster of paris) the osteoid is easy to build and fully customizeable to the patients needs, it is also lighter in weight and also provides enough ventilation for the broken or fractured limb, the osteoid is designed to allow air flow using the cancellous spongy bone geometry structure.\r\nTo be honest, I know what it is like carrying an heavy plaster molded on a broken or fractured limb, I broke my right arm while I was in High School (Senior Secondary School). I had the doctor mold an heavy plaster on my arm. During the period you don''t get enough ventilation and you even suffer from itching an a bad smell over time due to limited exposure to water and after carrying the bulky plaster for months and getting such experience you go back to the clinic for the doctor to rip the plaster appart, the next feeling you get is a lifeless and shrinked limb ready to be blown off by the slightest wind. Okay, enough of the story telling, thanks to Deniz for designing the new light and durable alternative. When osteoid is combined with Low Intensity Pulsed Ultrasound bone Simulator (LIPUS) sytem, for a single 20 minute session this system promises to reduce the healing process up to 38% and increases the heal rate up to 80% in non-union fractures. However, for this to happen the LIPUS probes has to be placed on the injured area with direct skin contact. By the rule of thumb this system cannot be used with convectional medical casts(POP). The size of the osteoid medical cast solely depends on the case of the patient but the dimension of the model is 130 x 108 x 315mms while the size of the simulator is 130 x 145 x 40mms. Okay, you want to shove around stylishly flaunting your broken or fracture arm in the osteoid, the osteoid is available in variety of colors. ', NULL, NULL, 'Explains about new hats', 'osteod, medicine, cast, POP'),
(3, '2015-02-11', 1, 'My Nigerian Dream', 'Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you''ll need to use a different clearing method. The most reliable . This will have the same clearing effect. An image placeholder was used in this layout in the .header where you''ll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there. Browsers are inconsistent in the way they round div sizes in percent-based layouts. If the browser must render a number like 144.5px or 564.5px, they have to round it to the nearest whole number. Safari and Opera round down, Internet Explorer rounds up and Firefox rounds one column up and one down filling the container completely. These rounding issues can cause inconsistencies in some layouts. In this IECC there is a 1px negative margin to fix IE. You may move it to any of the columns (and on either the left or right) to suit your layout needs. The zoom property was added to the anchor within the navigation list since, in some cases, extra white space will be rendered in IE6 and IE7. Zoom gives IE its proprietary hasLayout property to fix this issue. By nature, the background color on any div will only show for the length of the content. This means if you''re using a background color or border to create the look of a side column, it won''t extend all the way to the footer but will stop when the content ends. If the .content div will always contain more content, you can place a border on the .content div to divide it from the column. Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you''ll need to use a different clearing method. The most reliable . This will have the same clearing effect. An image placeholder was used in this layout in the .header where you''ll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there. ', NULL, NULL, 'where i see Nigeria', 'Nigeria, sleep'),
(4, '2015-02-11', 2, 'From the pyre cometh the phoenix', 'Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you''ll need to use a different clearing method. The most reliable . This will have the same clearing effect. An image placeholder was used in this layout in the .header where you''ll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there. Browsers are inconsistent in the way they round div sizes in percent-based layouts. If the browser must render a number like 144.5px or 564.5px, they have to round it to the nearest whole number. Safari and Opera round down, Internet Explorer rounds up and Firefox rounds one column up and one down filling the container completely. These rounding issues can cause inconsistencies in some layouts. In this IECC there is a 1px negative margin to fix IE. You may move it to any of the columns (and on either the left or right) to suit your layout needs. The zoom property was added to the anchor within the navigation list since, in some cases, extra white space will be rendered in IE6 and IE7. Zoom gives IE its proprietary hasLayout property to fix this issue. By nature, the background color on any div will only show for the length of the content. This means if you''re using a background color or border to create the look of a side column, it won''t extend all the way to the footer but will stop when the content ends. If the .content div will always contain more content, you can place a border on the .content div to divide it from the column. Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you''ll need to use a different clearing method. The most reliable . This will have the same clearing effect. An image placeholder was used in this layout in the .header where you''ll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there. ', NULL, NULL, 'Poem on the jews', 'jews, poem, poetry'),
(5, '2015-02-11', 2, 'Electric Skateboard Balaboard', 'Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you\\''ll need to use a different clearing method. The most reliable . This will have the same clearing effect. An image placeholder was used in this layout in the .header where you\\''ll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there. Browsers are inconsistent in the way they round div sizes in percent-based layouts. If the browser must render a number like 144.5px or 564.5px, they have to round it to the nearest whole number. Safari and Opera round down, Internet Explorer rounds up and Firefox rounds one column up and one down filling the container completely. These rounding issues can cause inconsistencies in some layouts. In this IECC there is a 1px negative margin to fix IE. You may move it to any of the columns (and on either the left or right) to suit your layout needs. The zoom property was added to the anchor within the navigation list since, in some cases, extra white space will be rendered in IE6 and IE7. Zoom gives IE its proprietary hasLayout property to fix this issue. By nature, the background color on any div will only show for the length of the content. This means if you\\''re using a background color or border to create the look of a side column, it won\\''t extend all the way to the footer but will stop when the content ends. If the .content div will always contain more content, you can place a border on the .content div to divide it from the column. Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you\\''ll need to use a different clearing method. The most reliable . This will have the same clearing effect. An image placeholder was used in this layout in the .header where you\\''ll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there. ', NULL, NULL, 'Poem on the jews', 'jews, poem, poetry'),
(6, '2015-02-11', 1, 'Why we do what we do.', 'Whe love it', NULL, NULL, 'where i see Nigeria', 'osteod, medicine, cast, POP');

-- --------------------------------------------------------

-- 
-- Table structure for table `bookreview`
-- 

CREATE TABLE `bookreview` (
  `id` int(12) NOT NULL auto_increment,
  `revdate` date NOT NULL,
  `revby` varchar(225) NOT NULL,
  `revemail` varchar(225) NOT NULL,
  `revcontent` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `bookreview`
-- 

INSERT INTO `bookreview` (`id`, `revdate`, `revby`, `revemail`, `revcontent`) VALUES 
(1, '2015-02-01', 'PoemGuru', 'ogundiran2315@gmail.com', 'I really like this books, thank you for putting it up for free'),
(2, '2015-02-01', 'Dr Speech', 'ogundiran12@gmail.com', 'Ooh my God Battle Scars is so interesting'),
(3, '2015-02-01', 'gittx', 'ogundiran12@gmail.com', 'nice book\r\n'),
(4, '2015-02-01', 'gittx', 'ogundiran12@gmail.com', 'nice book');

-- --------------------------------------------------------

-- 
-- Table structure for table `books`
-- 

CREATE TABLE `books` (
  `bookid` int(12) NOT NULL auto_increment,
  `bookname` varchar(225) NOT NULL,
  `extension` varchar(12) NOT NULL,
  `bookdesc` text NOT NULL,
  `downloads` int(12) NOT NULL,
  PRIMARY KEY  (`bookid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `books`
-- 

INSERT INTO `books` (`bookid`, `bookname`, `extension`, `bookdesc`, `downloads`) VALUES 
(1, 'Kiss of life', '', '', 3),
(2, 'Battle Scars', 'pdf', '', 1),
(3, 'The Reminiscence', '', '', 18),
(4, 'The Incest', 'docx', '', 9);

-- --------------------------------------------------------

-- 
-- Table structure for table `categories`
-- 

CREATE TABLE `categories` (
  `cid` int(12) NOT NULL auto_increment,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) default NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `categories`
-- 

INSERT INTO `categories` (`cid`, `name`, `description`) VALUES 
(1, 'Poetry', 'Index of Poems under the Category : Poetry..'),
(2, 'Good Thinking', 'Index of Posts under the Category : Good thinking.');

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

CREATE TABLE `comments` (
  `comid` int(12) NOT NULL auto_increment,
  `comby` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `comdate` date NOT NULL,
  `comcontent` text NOT NULL,
  `aid` int(12) NOT NULL,
  PRIMARY KEY  (`comid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `comments`
-- 

INSERT INTO `comments` (`comid`, `comby`, `email`, `comdate`, `comcontent`, `aid`) VALUES 
(1, 'PoemGuru', '', '2015-01-30', 'I really like this poem To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and ', 1),
(2, 'Plato', '', '2015-01-30', 'I really like this poem, it gave me a real picture of how Nigeria used to be. ', 1),
(3, 'MuseLord', 'pelihon@gmail.com', '2015-02-01', 'Thank you everyone! I appreciate your feedback.', 1),
(4, 'Al-Ameen', 'ogundiran12@gmail.com', '2015-02-02', 'Awesome post', 3),
(5, 'Al-Ameen', 'ogundiran12@gmail.com', '2015-02-02', 'Awesome', 1),
(6, 'lawson', 'lawal.adefemi@yahoo.com', '2015-02-02', 'nice article\r\n', 2),
(7, 'Al-Ameen', 'ogundiran12@gmail.com', '2015-02-03', 'I love this post', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `id` int(12) NOT NULL auto_increment,
  `contname` varchar(225) NOT NULL,
  `contemail` varchar(225) NOT NULL,
  `contmessage` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `contact`
-- 

INSERT INTO `contact` (`id`, `contname`, `contemail`, `contmessage`) VALUES 
(1, 'Al-Ameen', 'ogundiran12@gmail.com', 'I like what you do on this website'),
(2, 'Al-Ameen', 'olumite2010@gmail.com', 'This site is just awesome'),
(3, 'olumide', 'olumite2010@gmail.com', 'This site is just awesome');

-- --------------------------------------------------------

-- 
-- Table structure for table `mailinglist`
-- 

CREATE TABLE `mailinglist` (
  `id` int(12) NOT NULL auto_increment,
  `email` varchar(225) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `mailinglist`
-- 

INSERT INTO `mailinglist` (`id`, `email`) VALUES 
(1, 'olumite2010@gmail.com'),
(2, 'Ogundiran12@gmail.com'),
(3, 'Ogundiran2315@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `replies`
-- 

CREATE TABLE `replies` (
  `repid` int(12) NOT NULL auto_increment,
  `repdate` datetime NOT NULL,
  `repby` varchar(225) NOT NULL,
  `repcontent` text NOT NULL,
  `commentid` int(12) NOT NULL,
  `aid` int(12) NOT NULL,
  PRIMARY KEY  (`repid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `replies`
-- 

INSERT INTO `replies` (`repid`, `repdate`, `repby`, `repcontent`, `commentid`, `aid`) VALUES 
(1, '2015-01-29 15:00:17', 'Anonymous', 'Yeah me! too ', 2, 1);
