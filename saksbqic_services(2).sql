-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2023 at 11:44 PM
-- Server version: 10.5.20-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saksbqic_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` varchar(200) DEFAULT 'no-image.png',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `thumbnail`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdfdsf', 'fdsfsdfsd', 'fsdfsdf', 'sdfsdfs', '2023-02-23 18:50:16', '2023-02-23 18:50:16'),
(2, 'test', 'test', 'test', '109', '2023-02-23 22:02:19', '2023-02-23 22:02:19'),
(3, 'wer', 'werwer', 'werew', '109', '2023-02-23 22:02:29', '2023-02-23 22:02:29'),
(4, '324324', '324324', '432432', '109', '2023-02-23 22:02:36', '2023-02-23 22:02:36'),
(5, '324324', '324324', '32432432', '109', '2023-02-23 22:02:43', '2023-02-23 22:02:43'),
(6, 'Visa free for USA citizen', 'Visa free for USA citizen', 'Visa free for USA citizen', '109', '2023-03-06 15:59:01', '2023-03-06 15:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `bulk_messages`
--

CREATE TABLE `bulk_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text DEFAULT NULL,
  `plateforms` varchar(255) DEFAULT NULL,
  `lead_tags` varchar(300) DEFAULT NULL,
  `scheduled_at` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bulk_messages`
--

INSERT INTO `bulk_messages` (`id`, `content`, `plateforms`, `lead_tags`, `scheduled_at`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '<p>sdfdsfsdf</p>', 'sdfsd,f,s,dfsdfsd,telegram', NULL, '2023-07-29 02:22:00', 'pending', '109', '2023-07-25 15:23:25', '2023-07-25 15:29:33'),
(2, '<p>sdfdsfsdf</p>', 'sdfsd,f,s,dfsdfsd', NULL, '2023-07-29 02:22:00', 'pending', '109', '2023-07-25 15:23:44', '2023-07-25 15:29:38'),
(3, '<p>sdfdsfdfdfd</p>', 'whatsapp,sms,telegram,email', NULL, '0000-00-00 00:00:00', 'pending', '109', '2023-07-25 15:26:15', '2023-07-25 15:29:26'),
(4, '<p>sdfsdfds</p>', 'telegram,email,whatsapp,sms', NULL, '0000-00-00 00:00:00', 'pending', '109', '2023-07-25 15:26:33', '2023-07-25 15:26:33'),
(5, '<p>test</p>', 'telegram,whatsapp,sms,email', NULL, '2023-11-11 16:11:00', 'pending', '109', '2023-08-01 18:36:34', '2023-08-01 18:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `delete____properties3333333`
--

CREATE TABLE `delete____properties3333333` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aminities` varchar(1000) DEFAULT NULL,
  `project_name` varchar(1000) DEFAULT NULL,
  `property_thumbnail_url` varchar(1000) DEFAULT NULL,
  `project_details` text DEFAULT NULL,
  `bedrooms` varchar(255) DEFAULT NULL,
  `starting_price` varchar(255) DEFAULT NULL,
  `tenure` varchar(255) DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `size_from` varchar(255) DEFAULT NULL,
  `completion` varchar(255) DEFAULT NULL,
  `interiors` varchar(255) DEFAULT NULL,
  `payment_plan_short` varchar(255) DEFAULT NULL,
  `payment_plan_details` text DEFAULT NULL,
  `down_payment` varchar(255) DEFAULT NULL,
  `connectivity` text DEFAULT NULL,
  `unit_details` varchar(255) DEFAULT NULL,
  `floor_details` varchar(255) DEFAULT NULL,
  `amenities` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location_gps` varchar(255) DEFAULT NULL,
  `latitude` varchar(300) DEFAULT NULL,
  `longitude` varchar(300) DEFAULT NULL,
  `garage` varchar(10) DEFAULT NULL,
  `bathrooms` varchar(10) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `video_url` varchar(300) DEFAULT NULL,
  `brochure_url` varchar(300) DEFAULT NULL,
  `broucher` varchar(255) DEFAULT NULL,
  `connectivities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`connectivities`)),
  `broker_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `developer` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `project_tags` varchar(300) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Publish',
  `gallery_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery_url`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delete____properties3333333`
--

INSERT INTO `delete____properties3333333` (`id`, `aminities`, `project_name`, `property_thumbnail_url`, `project_details`, `bedrooms`, `starting_price`, `tenure`, `property_type`, `size_from`, `completion`, `interiors`, `payment_plan_short`, `payment_plan_details`, `down_payment`, `connectivity`, `unit_details`, `floor_details`, `amenities`, `location`, `address`, `location_gps`, `latitude`, `longitude`, `garage`, `bathrooms`, `gallery`, `video_url`, `brochure_url`, `broucher`, `connectivities`, `broker_id`, `user_id`, `developer`, `tags`, `project_tags`, `status`, `gallery_url`, `created_at`, `updated_at`) VALUES
(1, '[{\"value\":\"Children\'s Playground\"},{\"value\":\"Fitness Center\"},{\"value\":\"Swimming Pool\"},{\"value\":\"Yoga Area\"},{\"value\":\"Children Splash Pool\"},{\"value\":\"Games Table Zone\"}]', 'Beach Oasis', 'property_thumbnail/1689005581__1688902382__646b4d98b4ba7_sw_6450e473e9125_sw_dg1-living-apartments-business-bay-4 (Custom).jpg', '<h4>1, 2 &amp; 3 Bedroom Residences in Dubai Water Canal, Dubai | Handover: Q3 2026</h4><p>Welcome to Al Habtoor Tower - This majestic tower in the most coveted neighbourhood, on the banks of the Dubai Water Canal, represents exceptional living elevated to the highest level of luxury in an all-inclusive setting, and boasting stunning views of the city and sea.&nbsp;An array of elegant spaces and endless everyday luxuries. Al Habtoor Tower is more than a place to call home. It is an ecosystem of opulence — a vertical city where lifestyle takes on a definition entirely its own. From state-of-theart fitness centres and gravity-defying infinity pools to elegant, spacious apartment homes with breathtaking views of the Dubai skyline, it’s a masterpiece of modern living. There\'s no better place to reside.</p>', NULL, '{\"aed\":\"480000\",\"usd\":\"130679\"}', 'Freehold', 'Apartments', '323 - 1686 Sqft', 'Q2 2024', 'Unfurnished', '40/60', '<p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Payment</strong></td><td><strong>Milestone</strong></td></tr><tr><td>10%</td><td>On Reservation</td></tr><tr><td>30%</td><td>During Construction</td></tr><tr><td>60%</td><td>On Completion</td></tr></tbody></table></figure><p>&nbsp;</p>', NULL, NULL, 'Studio, 1 & 2 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sq8yDhlUfUE', NULL, NULL, NULL, '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1688902382__646b4d98b4ba7_sw_6450e473e9125_sw_dg1-living-apartments-business-bay-4 (Custom).jpg\",\"property_gallery\\/1688902382__646b52f5cee88_sw_644cdf12592c6_sw_mykonos-damac-lagoons-townhouses-7.jpg\",\"property_gallery\\/1688902389__644610c3e5653_sw_beach-oasis-azizi-2.jpg\",\"property_gallery\\/1688902390__6446105dcd6e6_sw_beach-oasis-azizi.jpg\",\"property_gallery\\/1688902391__6446105dce5fa_sw_beach-oasis-azizi-4.jpg\",\"property_gallery\\/1688902392__6446105dcddb9_sw_beach-oasis-azizi-1.jpg\",\"property_gallery\\/1688902392__6446105dce47e_sw_beach-oasis-azizi-3.jpg\",\"property_gallery\\/1688902393__6446105dce750_sw_beach-oasis-azizi-5.jpg\",\"property_gallery\\/1688902394__6446105dce94b_sw_beach-oasis-azizi-6.jpg\",\"property_gallery\\/1688902394__6446105dceb21_sw_beach-oasis-azizi-7.jpg\",\"property_gallery\\/1688902395__644616956cf66_sw_the-ritz-carlton-residences-1.jpg\"]', '2023-07-09 15:32:23', '2023-08-01 11:07:17'),
(10, 'Elite Family Seating,Open Air Cinema,Elite Business Center,Elite Cafe,Prayer Hall,Kids Play Zone,Kids Splash Pad,BBQ Area', 'South Bay', 'property_thumbnail/1689007380__648d865f3cf7e_sw_SOUTH BAY_0012_Layer 3-min.jpg', '<h4>3, 4, 5, 6 &amp; 7 Bedroom Residences in Dubai South, Dubai | Handover: 2026</h4><p>A fully integrated and master-planned city built for happy, creative and empowered people, Dubai South offers a diverse range of residential homes to suit different lifestyles. Strategically constructed around what will be the world’s largest airport, Dubai South is an inclusive and cohesive community supported by a&nbsp;smart and sustainable environment.</p><p><br>Located in the Residential District of Dubai South, South Bay is set to be an exclusive gated community offering premium residential units that centre around a stunning 3 kilometre crystal lagoon. South Bay will comprise five clusters with more than 1200 units, each providing breathtaking views of the lagoon and world class facilities. So whether you want to sunbathe, indulge in exciting water sports, relax, test your palate, spend quality time with family and friends, or focus on your work, we’ve got you covered.</p>', NULL, '{\"aed\":\"2200000\",\"usd\":\"598949.12\"}', 'Freehold', 'Townhouses, Villas & Mansions', '2,894 - 13,682 Sqft.', 'Q3 2026', 'Unfurnished', '50/50 Post Handover', '<figure class=\"table\"><table><tbody><tr><td><strong>Payment</strong></td><td><strong>Milestone</strong></td></tr><tr><td>5%</td><td>Down Payment</td></tr><tr><td>50%</td><td>During Construction</td></tr><tr><td>50%</td><td>2 Years Post Completion</td></tr></tbody></table></figure>', '5', '<p><img src=\"https://www.newlaunchproperties.ae/communitylist/thumbnail/small/645c5bf4840be_sw_airport.png\"></p><p>15 Mins</p><p><img src=\"https://www.newlaunchproperties.ae/communitylist/thumbnail/small/6461cc2caf6d8_sw_burj-khalifa (1).png\"></p><p>5 Mins</p><p><img src=\"https://www.newlaunchproperties.ae/communitylist/thumbnail/small/645bed65bf899_sw_palm-islands.png\"></p><p>15 Mins</p><p><img src=\"https://www.newlaunchproperties.ae/communitylist/thumbnail/small/6461cc8536326_sw_waves.png\"></p><p>20 Mins</p><p><img src=\"https://www.newlaunchproperties.ae/communitylist/thumbnail/small/6461cc4b7d50b_sw_education.png\"></p><p>10 Mins</p><p><img src=\"https://www.newlaunchproperties.ae/communitylist/thumbnail/small/6461cc6d763ba_sw_stethoscope.png\"></p><p>10 Mins</p>', '3, 4, 5, 6 & 7 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/sq8yDhlUfUE', NULL, NULL, NULL, '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689007170__643f971f5191a_sw_petalz-danube.jpg\",\"property_gallery\\/1689007172__648d865f3cf7e_sw_SOUTH BAY_0012_Layer 3-min.jpg\",\"property_gallery\\/1689007172__648d8654b0a86_sw_SOUTH BAY_0005_Layer 10-min.jpg\",\"property_gallery\\/1689007173__648d8654b1a5c_sw_SOUTH BAY_0008_Layer 7-min.jpg\",\"property_gallery\\/1689007174__648d8654b0fb9_sw_SOUTH BAY_0006_Layer 9-min.jpg\",\"property_gallery\\/1689007175__648d8654b1dc6_sw_SOUTH BAY_0009_Layer 6-min.jpg\",\"property_gallery\\/1689007175__648d8654b3a79_sw_SOUTH BAY_0001_Layer 14-min.jpg\",\"property_gallery\\/1689007176__648d8654b2e11_sw_SOUTH BAY_0013_Layer 2-min.jpg\",\"property_gallery\\/1689007176__648d8654b009c_sw_SOUTH BAY_0004_Layer 11-min.jpg\",\"property_gallery\\/1689007177__648d8654b25cf_sw_SOUTH BAY_0011_Layer 4-min.jpg\",\"property_gallery\\/1689007177__648d8654b21f4_sw_SOUTH BAY_0010_Layer 5-min.jpg\",\"property_gallery\\/1689007178__648d8654b42bd_sw_SOUTH BAY_0002_Layer 13-min.jpg\",\"property_gallery\\/1689007179__648d8654b42bd_sw_SOUTH BAY_0002_Layer 13-min(2).jpg\",\"property_gallery\\/1689007179__648d8654b163e_sw_SOUTH BAY_0007_Layer 8-min.jpg\",\"property_gallery\\/1689007180__648d8654b3721_sw_SOUTH BAY_0000_Layer 15-min.jpg\",\"property_gallery\\/1689007181__648d8654b3157_sw_SOUTH BAY_0014_Layer 1-min.jpg\",\"property_gallery\\/1689007182__648d8654b4643_sw_SOUTH BAY_0003_Layer 12-min.jpg\",\"property_gallery\\/1689007182__648d8654b4643_sw_SOUTH BAY_0003_Layer 12-min(2).jpg\",\"property_gallery\\/1689007187__6444086ed4bf3_sw_jomana-mjl-meraas-10.jpg\",\"property_gallery\\/1689007188__6438385164b01_sw_1-min.jpg\"]', '2023-07-05 09:47:40', '2023-07-15 09:42:06'),
(34, 'Elite Family Seating,Open Air Cinema,Elite Business Center,Elite Cafe,Prayer Hall,Kids Play Zone,Kids Splash Pad,BBQ Area', 'Maimoon Gardens', 'property_thumbnail/1689051985__643f8fc668d8b_sw_crest-grande-apartments-sobha-hartland-5.jpg', '<h4>Studio, 1, 2 &amp; 3 Bedroom Residences in Jumeirah Village Circle, Dubai | Handover: Q4 2025</h4><p>Introducing Maimoon Gardens by Fakhruddin Properties offers 50-storey high-rise twin towers with 2 &amp; 3-bedroom apartments at JVC, Dubai. The development features a range of spacious apartments with well-planned layouts and elegant designs. Each apartment is designed with an emphasis on natural light and air circulation, creating a bright and airy atmosphere. The interiors are finished with high-quality materials, including marble and hardwood flooring, custom cabinetry, and stylish fixtures and fittings.<br><br>The residents of Maimoon Gardens can enjoy a range of on-site amenities that cater to their leisure and fitness needs. These include a large swimming pool, a fully equipped gymnasium, a clubhouse, and a children\'s play area. The development also features beautifully landscaped gardens, providing a peaceful and serene environment for residents to relax and unwind.</p>', NULL, '{\"aed\":\"540000\",\"usd\":\"147014.78\"}', 'Freehold', 'Apartments', '388 - 1276 Sqft.', 'Q4 2025', 'Unfurnished', '40/60', '<figure class=\"table\"><table><thead><tr><th>Installment</th><th>Payment</th><th>Milestone</th></tr></thead><tbody><tr><td>Down Payment</td><td>10%</td><td>On Booking Date</td></tr><tr><td>1st Installment</td><td>5%</td><td>Within 2 months from the booking date</td></tr><tr><td>2nd to 7th Installment</td><td>6%</td><td>For 6 months (1% monthly)</td></tr><tr><td>8th Installment</td><td>4%</td><td>Within 9 months from the booking date</td></tr><tr><td>9th to 13th Installment</td><td>5%</td><td>For 5 months (1% monthly)</td></tr><tr><td>14th Installment</td><td>4%</td><td>Within 15 months from the booking date</td></tr><tr><td>15th to 25th Installment</td><td>11%</td><td>For 11 months(1% monthly)</td></tr><tr><td>26th Installment</td><td>4%</td><td>Within 27 months from the booking date</td></tr><tr><td>27th to 31st Installment</td><td>5%</td><td>For 5 months (1% monthly)</td></tr><tr><td>32nd Installment</td><td>1%</td><td>On Handover</td></tr><tr><td>33rd Installment</td><td>5%</td><td>Within 1 month from handover</td></tr><tr><td>34th to 73rd Installment</td><td>40%</td><td>For 40 months (1% monthly)</td></tr></tbody></table></figure>', NULL, NULL, 'Studio, 1, 2 & 3 Bedroom', '<p>.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/sq8yDhlUfUE', NULL, NULL, NULL, '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689051934__643f8fc668d8b_sw_crest-grande-apartments-sobha-hartland-5.jpg\",\"property_gallery\\/1689051936__644b40790e244_sw_maimoon-gardens-jvc.jpg\",\"property_gallery\\/1689051936__644b40790e87a_sw_maimoon-gardens-jvc-2.jpg\",\"property_gallery\\/1689051937__644b40790e609_sw_maimoon-gardens-jvc-1.jpg\",\"property_gallery\\/1689051937__644b40790ebec_sw_maimoon-gardens-jvc-4.jpg\",\"property_gallery\\/1689051938__644b40790ee33_sw_maimoon-gardens-jvc-5.jpg\",\"property_gallery\\/1689051939__644b40790f001_sw_maimoon-gardens-jvc-6.jpg\",\"property_gallery\\/1689051939__644b40790f6a6_sw_maimoon-gardens-jvc-10.jpg\",\"property_gallery\\/1689051940__644b40790f7c2_sw_maimoon-gardens-jvc-11.jpg\",\"property_gallery\\/1689051940__644b40790f8e5_sw_maimoon-gardens-jvc-12.jpg\",\"property_gallery\\/1689051941__644b40790f45a_sw_maimoon-gardens-jvc-8.jpg\",\"property_gallery\\/1689051941__644b40790f55d_sw_maimoon-gardens-jvc-9.jpg\",\"property_gallery\\/1689051942__644b40790f332_sw_maimoon-gardens-jvc-7.jpg\",\"property_gallery\\/1689051944__646f150ac69fb_sw_fairway-villas-2-emaar-south-1.jpg\",\"property_gallery\\/1689051952__64539cf06a022_sw_damac-bay-2-cavalli-13.jpg\"]', '2023-07-09 14:23:59', '2023-07-15 09:42:31'),
(35, 'Children\'s Playground,Fitness Center,Swimming Pool,Parks & Open Spaces,Sports Court,Spa,Sauna Room', 'The Sanctuary', 'property_thumbnail/1689051705__647f0d32a2993_sw_AHS_0012_Cam 3-min.jpg', '<h4>4, 5 &amp; 6 Bedroom Residences in MBR City, Dubai | Handover: Q4 2025</h4><p>Introducing Ultra Luxury Villas \"The Sanctuary\" by Ellington - The Sanctuary is Ellington’s first master community development. An exclusive collection of distinctively designed villas with seamless access to everything Dubai has to offer, together with spectacular views of the iconic Dubai skyline and the Burj Khalifa.<br><br>This limited collection of exquisite homes is nestled in a private gated community that brings with it an inspirational lifestyle. These 4 to 6-bedroom homes are presented in four different styles with distinctive designs and options. Each contemporary villa is meticulously curated with its pool, rooftop terrace, and courtyard and is a short stroll away from a beautiful central lagoon.</p>', NULL, '{\"aed\":\"16160000\",\"usd\":\"4399553\"}', 'Freehold', 'Townhouses & Villas', '7,845 - 14,606 Sqft', 'Q4 2025', 'Unfurnished', '60/40', '<figure class=\"table\"><table><thead><tr><th>Installment</th><th>Payment (%)</th><th>Milestone</th></tr></thead><tbody><tr><td>Down Payment</td><td>20%</td><td>On Booking Date</td></tr><tr><td>1st Installment</td><td>5%</td><td>Within 60 days from booking date</td></tr><tr><td>3rd Installment</td><td>5%</td><td>Within 120 days from booking date</td></tr><tr><td>4th Installment</td><td>5%</td><td>Within 240 days from booking date</td></tr><tr><td>5th Installment</td><td>5%</td><td>Within 360 days from booking date</td></tr><tr><td>6th Installment</td><td>5%</td><td>Within 450 days from booking date</td></tr><tr><td>7th Installment</td><td>5%</td><td>Within 540 days from booking date</td></tr><tr><td>8th Installment</td><td>5%</td><td>Within 720 days from booking date</td></tr><tr><td>9th Installment</td><td>5%</td><td>Within 900 days from booking date</td></tr><tr><td>Final Installment</td><td>40%</td><td>On Completion</td></tr></tbody></table></figure>', NULL, NULL, '4, 5 & 6 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, 'MBR City', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/sq8yDhlUfUE', 'property_brochure/1689413823__Web 3 Work Samples.pdf', NULL, '[{\"name\":\"International Airport\",\"distance\":\"15 Minute\"},{\"name\":\"burj khalifa\",\"distance\":\"15 Minute\"}]', '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689051633__647f0d32a2993_sw_AHS_0012_Cam 3-min.jpg\",\"property_gallery\\/1689051641__64520c4eb4d35_sw_the-sanctuary-villas-mbr-city-7.jpg\",\"property_gallery\\/1689051641__6461f3358be48_sw_nobles-tower-business-bay-7.jpg\",\"property_gallery\\/1689051642__64520c7f0582c_sw_the-sanctuary-villas-mbr-city-7.jpg\",\"property_gallery\\/1689051643__64520c6704c09_sw_the-sanctuary-villas-mbr-city-6.jpg\",\"property_gallery\\/1689051643__64520c6706a04_sw_the-sanctuary-villas-mbr-city.jpg\",\"property_gallery\\/1689051644__64520c6706f5b_sw_the-sanctuary-villas-mbr-city-1.jpg\",\"property_gallery\\/1689051644__64520c6707cae_sw_the-sanctuary-villas-mbr-city-4.jpg\",\"property_gallery\\/1689051645__64520c6707cae_sw_the-sanctuary-villas-mbr-city-4(2).jpg\",\"property_gallery\\/1689051646__64520c67050e1_sw_the-sanctuary-villas-mbr-city-9.jpg\",\"property_gallery\\/1689051647__64520c67077df_sw_the-sanctuary-villas-mbr-city-3.jpg\",\"property_gallery\\/1689051647__64520c67077df_sw_the-sanctuary-villas-mbr-city-3(2).jpg\",\"property_gallery\\/1689051648__64520c670604b_sw_the-sanctuary-villas-mbr-city-10.jpg\",\"property_gallery\\/1689051648__64520c6704373_sw_the-sanctuary-villas-mbr-city-5.jpg\",\"property_gallery\\/1689051649__64520c6707370_sw_the-sanctuary-villas-mbr-city-2.jpg\",\"property_gallery\\/1689051651__64391804d919d_sw_anya-2-arabian-ranches-3-emaar-10.jpg\",\"property_gallery\\/1689056157__646f150ac69fb_sw_fairway-villas-2-emaar-south-1.jpg\"]', '2023-07-09 15:06:37', '2023-07-15 14:34:59'),
(36, 'Children\'s Playground,Swimming Pool,Parks & Open Spaces,Barbecue Area,Fully Equipped Gym', 'Tiraz', 'property_thumbnail/1689050905__644a2778ad293_sw_tiraz-aljada-sharjah-arada-2.jpg', '<h4>Studio, 1 &amp; 2 Bedroom Residences in Aljada, Sharjah | Handover: Q2 2024</h4><p>Wake up every morning to a feeling of excitement and endless possibility. Explore the sights and sounds of a new destination, where the journey never ends. And relax in the knowledge that everything you need to enjoy life is right on your doorstep. Ideally located in the heart of Sharjah, a city where culture and the arts take centre stage, Aljada is the perfect place for you and your family to grow. It is a place where living, working, playing and creating all come together. And it’s a place where the past and the future come together, offering the best of both worlds.<br><br>Engage with like-minded people in a progressive and collaborative residential space. Explore cosy cafes and beautiful gardens. Enjoy contemporary design and premium facilities. Featuring a range of studios, and 1 &amp; 2-bedroom apartments, the Tiraz buildings overlook open courtyards and garden spaces. Smart home features come as standard at all Tiraz apartments, and residents can also enjoy exclusive access to a health club, two swimming pools, children’s play areas and a family barbecue space.</p>', NULL, '{\"aed\":\"730000\",\"usd\":\"198742.21\"}', 'Freehold', 'Apartments', '293 - 1,487 Sqft', 'Q2 2024', 'Unfurnished', '30/70', '<figure class=\"table\"><table><thead><tr><th>Installment</th><th>Payment (%)</th><th>Milestone</th></tr></thead><tbody><tr><td>Down Payment</td><td>5%</td><td>On Booking date</td></tr><tr><td>1st Installment</td><td>5%</td><td>Within 30 days from the booking Date</td></tr><tr><td>2nd Installment</td><td>5%</td><td>Within 120 days from the booking Date</td></tr><tr><td>3rd Installment</td><td>5%</td><td>Within 210 days from the booking Date</td></tr><tr><td>4th Installment</td><td>5%</td><td>Within 270&nbsp;days from the booking Date</td></tr><tr><td>5th Installment</td><td>5%</td><td>Within 330&nbsp;days from the booking Date</td></tr><tr><td>Final Installment</td><td>70%</td><td>On Completion</td></tr></tbody></table></figure>', NULL, NULL, 'Studio, 1 & 2 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/sq8yDhlUfUE', NULL, NULL, NULL, '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689050687__644a2778ad293_sw_tiraz-aljada-sharjah-arada-2.jpg\",\"property_gallery\\/1689050689__644a276386acf_sw_tiraz-aljada-sharjah-arada-4(2).jpg\",\"property_gallery\\/1689050689__644a276386acf_sw_tiraz-aljada-sharjah-arada-4.jpg\",\"property_gallery\\/1689050690__644a276386bef_sw_tiraz-aljada-sharjah-arada-5.jpg\",\"property_gallery\\/1689050691__644a276386bef_sw_tiraz-aljada-sharjah-arada-5(2).jpg\",\"property_gallery\\/1689050691__644a2763867c3_sw_tiraz-aljada-sharjah-arada-1.jpg\",\"property_gallery\\/1689050692__644a2763869d4_sw_tiraz-aljada-sharjah-arada-3.jpg\",\"property_gallery\\/1689050692__644a276386590_sw_tiraz-aljada-sharjah-arada.jpg\",\"property_gallery\\/1689050701__64461b9bbd3e0_sw_living-garden-jvc-lootah-5.jpg\",\"property_gallery\\/1689050702__6462132417acc_sw_masaar-sequoia-arada-sharjah-6.jpg\"]', '2023-07-09 15:14:36', '2023-07-15 09:43:45'),
(37, 'Children\'s Playground,Swimming Pool,24-hr Security,Parks & Open Spaces,Fully Equipped Gym,outdoor Dinning Area', 'Creek Views 2', 'property_gallery/1688911327__644610c3e5653_sw_beach-oasis-azizi-2.jpg', '<h4>Studio, 1 &amp; 2 Bedroom Residences in Dubai Healthcare City, Dubai | Handover: Q4 2023</h4><p>Creek Views 2 is a new residential premium project by Azizi Developments located in Dubai Healthcare City. The popular community is renowned for its wellness facilities. It also includes many lifestyle and shopping options. Creek Views 2 will give you scenic views as well as elegant state-of-the-art designs and finishes. Apart from a wide range of healthcare centres, and wellness facilities, the Dubai Healthcare City district also has entertainment establishments and a great number of retail outlets, cafes and restaurants. The apartments in Creek Views 2 feature stylish, contemporary interiors and magnificent views of Dubai.</p>', NULL, '{\"aed\":\"746250\",\"usd\":\"203166.26\"}', 'Freehold', 'Apartments', '1046', 'Q4 2023', 'Unfurnished', '60/40', '<figure class=\"table\"><table><thead><tr><th>Installment</th><th>Payment</th><th>Milestone</th></tr></thead><tbody><tr><td>Down Payment</td><td>10%</td><td>On Booking Date</td></tr><tr><td>1st Installment</td><td>5%</td><td>Within 60 days from the booking date</td></tr><tr><td>2nd Installment</td><td>5%</td><td>Within 120 days from the booking date</td></tr><tr><td>3rd Installment</td><td>5%</td><td>Within 180 days from the booking date</td></tr><tr><td>4th Installment</td><td>5%</td><td>Within 240 days from the booking date</td></tr><tr><td>Final Installment</td><td>70%</td><td>On Completion</td></tr></tbody></table></figure>', NULL, NULL, '341 - 1266 Sqft', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/sq8yDhlUfUE', NULL, NULL, NULL, '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1688901772__64a40ce1eef7d_sw_Eywa_0005_Main-min.jpg\",\"property_gallery\\/1688901773__643f7f6258d4d_sw_waves-opulence-apartments-sobha-hartland.jpg\",\"property_gallery\\/1688901774__644adec6bd90f_sw_azizi-creek-views.jpg\",\"property_gallery\\/1688901774__644adec6bdc65_sw_azizi-creek-views-1.jpg\"]', '2023-07-09 15:17:20', '2023-07-15 09:44:25'),
(39, 'hhh', 'The Sanctuary', 'property_thumbnail/1689050552__64520c7f0582c_sw_the-sanctuary-villas-mbr-city-7.jpg', '<h4>4, 5 &amp; 6 Bedroom Residences in MBR City, Dubai | Handover: Q4 2025</h4><p>Introducing Ultra Luxury Villas \"The Sanctuary\" by Ellington - The Sanctuary is Ellington’s first master community development. An exclusive collection of distinctively designed villas with seamless access to everything Dubai has to offer, together with spectacular views of the iconic Dubai skyline and the Burj Khalifa.<br><br>This limited collection of exquisite homes is nestled in a private gated community that brings with it an inspirational lifestyle. These 4 to 6-bedroom homes are presented in four different styles with distinctive designs and options. Each contemporary villa is meticulously curated with its pool, rooftop terrace, and courtyard and is a short stroll away from a beautiful central lagoon.</p>', NULL, NULL, 'Freehold', 'Townhouses & Villas', '7,845 - 14,606 Sqft', 'Q4 2025', 'Unfurnished', '60/40', '<figure class=\"table\"><table><thead><tr><th>Installment</th><th>Payment (%)</th><th>Milestone</th></tr></thead><tbody><tr><td>Down Payment</td><td>20%</td><td>On Booking Date</td></tr><tr><td>1st Installment</td><td>5%</td><td>Within 60 days from booking date</td></tr><tr><td>3rd Installment</td><td>5%</td><td>Within 120 days from booking date</td></tr><tr><td>4th Installment</td><td>5%</td><td>Within 240 days from booking date</td></tr><tr><td>5th Installment</td><td>5%</td><td>Within 360 days from booking date</td></tr><tr><td>6th Installment</td><td>5%</td><td>Within 450 days from booking date</td></tr><tr><td>7th Installment</td><td>5%</td><td>Within 540 days from booking date</td></tr><tr><td>8th Installment</td><td>5%</td><td>Within 720 days from booking date</td></tr><tr><td>9th Installment</td><td>5%</td><td>Within 900 days from booking date</td></tr><tr><td>Final Installment</td><td>40%</td><td>On Completion</td></tr></tbody></table></figure>', NULL, NULL, '4, 5 & 6 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/embed/sq8yDhlUfUE', NULL, NULL, '[{\"name\":\"dfsfds\",\"distance\":null},{\"name\":\"test\",\"distance\":\"32423\"},{\"name\":\"122\",\"distance\":\"123\"},{\"name\":\"1\",\"distance\":\"1\"},{\"name\":\"2\",\"distance\":\"2\"},{\"name\":\"444\",\"distance\":\"444\"},{\"name\":\"444\",\"distance\":\"444\"},{\"name\":\"kanpur\",\"distance\":\"232\"},{\"name\":\"kanpur2\",\"distance\":\"23\"},{\"name\":\"kanpur2\",\"distance\":\"23\"},{\"name\":\"kanpur2\",\"distance\":\"r\"}]', '109', NULL, NULL, NULL, '[{\"value\":\"Top Property\"},{\"value\":\"Urgent Property\"}]', 'Published', '[\"property_gallery\\/1688901080__643a74cf7eba9_sw_camelia-townhouses-damac-7.jpg\",\"property_gallery\\/1688901081__643a4d6cf1b6c_sw_la-violeta-villanova-townhouses-9.jpg\",\"property_gallery\\/1688901088__6454a22bedfbc_sw_Crestmark_0004_The Crestmark - hero shot wide-min.jpg\",\"property_gallery\\/1688901092__64520c4eb4d35_sw_the-sanctuary-villas-mbr-city-7.jpg\",\"property_gallery\\/1688901092__64520c7f0582c_sw_the-sanctuary-villas-mbr-city-7.jpg\",\"property_gallery\\/1688901093__64520c6704c09_sw_the-sanctuary-villas-mbr-city-6.jpg\",\"property_gallery\\/1688901094__64520c6706a04_sw_the-sanctuary-villas-mbr-city.jpg\",\"property_gallery\\/1688901094__64520c6706f5b_sw_the-sanctuary-villas-mbr-city-1.jpg\",\"property_gallery\\/1688901095__64520c6707cae_sw_the-sanctuary-villas-mbr-city-4(2).jpg\",\"property_gallery\\/1688901096__64520c67050e1_sw_the-sanctuary-villas-mbr-city-9.jpg\",\"property_gallery\\/1688901096__64520c67077df_sw_the-sanctuary-villas-mbr-city-3.jpg\",\"property_gallery\\/1688901097__64520c67077df_sw_the-sanctuary-villas-mbr-city-3(2).jpg\",\"property_gallery\\/1688901097__64520c670604b_sw_the-sanctuary-villas-mbr-city-10.jpg\",\"property_gallery\\/1688901098__64520c6704373_sw_the-sanctuary-villas-mbr-city-5.jpg\",\"property_gallery\\/1688901099__64520c6707370_sw_the-sanctuary-villas-mbr-city-2.jpg\"]', '2023-07-10 12:59:03', '2023-07-29 17:19:41'),
(40, 'Children\'s Playground,Barbecue Area,Landscaped Gardens,Yoga Area,Sports Court,Fully Equipped Gym', '320 Reverside Crescent', 'property_thumbnail/1689266751__64a3ee04a4b0f_sw_Crescent_0002_Layer 6-min.jpg', '<h4>1, 1.5, 2, 3 Bedroom Residences in Sobha Hartland II, Dubai | Handover: Q3 2027</h4><p>320 Riverside Crescent&nbsp;at&nbsp;Sobha Hartland 2&nbsp;is the new rise of residential epitome architecture by&nbsp;Sobha Group&nbsp;that features luxury design&nbsp;1, 1.5,&nbsp;2 and 3 bedroom apartments&nbsp;at service. This exclusive residential development promises to redefine luxury living in the heart of Dubai, combining impeccable design with 57-storey towers, top-notch amenities, and a prime location. Let\'s delve into the details of this remarkable project and discover what sets it apart.<br><br>The residents can experience stunning views across all floors, community views on the front, clear views of the Dubai Al Ain Road on one side &amp; shimmering city lights on the other. Take in the unique beachfront views from the open podiums and balconies</p>', NULL, '{\"aed\":\"1362087\",\"usd\":\"370827.64\"}', 'Freehold', 'Apartments', '524 - 1657 Sqft', 'Q3 2027', 'Unfurnished', '80/20', '<figure class=\"table\"><table><tbody><tr><td><strong>Installments</strong></td><td><strong>Payment</strong></td><td><strong>Milestones</strong></td></tr><tr><td>Booking Amount</td><td>20%</td><td>On Booking date</td></tr><tr><td>First Insallment</td><td>10%</td><td>9 Months from booking date</td></tr><tr><td>Second Insallment</td><td>10%</td><td>15 Months from booking date</td></tr><tr><td>Third Insallment</td><td>10%</td><td>21 Months from booking date</td></tr><tr><td>Fourth Insallment</td><td>10%</td><td>27 Months from booking date</td></tr><tr><td>Fifth Insallment</td><td>10%</td><td>33 Months from booking date</td></tr><tr><td>Sixth Insallment</td><td>10%</td><td>39 Months from booking date</td></tr><tr><td>Final Installment</td><td>20%</td><td>On Completion</td></tr></tbody></table></figure><p>&nbsp;</p><p>&nbsp;</p>', NULL, NULL, '1, 1.5, 2, 3 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[{\"name\":\"International Airport\",\"distance\":\"12 Minute\"},{\"name\":\"burj khalifa\",\"distance\":\"15 Minute\"},{\"name\":\"palm jumeirah\",\"distance\":\"25 Minute\"},{\"name\":\"School\",\"distance\":\"20 Minute\"},{\"name\":\"hospital\",\"distance\":\"15 Minute\"}]', '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689266670__64a3ee04a2fe6_sw_Crescent_0003_Layer 5-min.jpg\",\"property_gallery\\/1689266670__64a3ee04a3cd6_sw_Crescent_0007_Layer 1-min.jpg\",\"property_gallery\\/1689266672__64a3ee04a4b0f_sw_Crescent_0002_Layer 6-min.jpg\",\"property_gallery\\/1689266673__64a3ee04a389e_sw_Crescent_0006_Layer 2-min.jpg\",\"property_gallery\\/1689266674__64a3ee04a3528_sw_Crescent_0005_Layer 3-min.jpg\",\"property_gallery\\/1689266675__64a3ee04a4762_sw_Crescent_0001_Layer 7-min.jpg\",\"property_gallery\\/1689266676__64a3ee1486d73_sw_Crescent_0004_Layer 4-min.jpg\",\"property_gallery\\/1689266677__64aba9d7b75ac_sw_CW2_0007_Layer 2-min.jpg\",\"property_gallery\\/1689266680__644b8a3512767_sw_emaar-cedar-apartments-new-launch-dubai-2.jpg\",\"property_gallery\\/1689266681__64a3ee04a42fe_sw_Crescent_0000_Layer 8-min.jpg\",\"property_gallery\\/1689266687__6450fa4a1ac7b_sw_sobha-reserve-villas-dubailand-1.jpg\"]', '2023-07-13 20:34:48', '2023-07-15 09:53:13'),
(41, 'Swimming Pool,24-hr Security,Barbecue Area,Parks & Open Spaces,Sports Court,Retail Shops', 'RIVANA', 'property_thumbnail/1689267512__6491ec6903a27_sw_Rivana_0003_RIVANA_BRANDED_RENDERS13-min.jpg', '<h4>3, 4 &amp; 5 Bedroom Residences in The Valley, Dubai | Handover: Q1 2027</h4><p><strong>Welcome to Rivana at The Valley -&nbsp;</strong>Discover your dream home at the heart of a suburban oasis, in an idyllic gated community that blends seamlessly with nature, yet is connected to a vast array of world-class amenities. With green open spaces, natural beauty, and a world of recreational options to choose from, you and your family will have all you need for an active and balanced lifestyle, right on your doorstep.</p><p>&nbsp;</p><p>A picturesque neighbourhood of stylish twin villas, Rivana combines comfort and modernity with beauty and serenity. Boasting a wide variety of indoor and outdoor retail options, as well as The Valley’s Golden Beach, verdant pocket parks, a local farmers’ market, and gourmet dining options, Rivana is where families can feel a true sense of belonging as integral members of a thriving community.</p>', NULL, '{\"aed\":\"2,800,000\",\"usd\":\"2,800,000\"}', 'Freehold', 'Apartments', '3,152 Sqft. to 5,192 Sqft.', 'Q1 2027', 'Unfurnished', '90/10', '<p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Instalment</strong></td><td><strong>Payment</strong></td><td><strong>Milestone</strong></td></tr><tr><td>Down Payment</td><td>10%</td><td>June 2023</td></tr><tr><td>1st Instalment</td><td>10%</td><td>August 2023</td></tr><tr><td>2nd&nbsp;Instalment</td><td>10%</td><td>February 2024</td></tr><tr><td>3rd&nbsp;Instalment</td><td>10%</td><td>August 2024</td></tr><tr><td>4th&nbsp;Instalment</td><td>10%</td><td>February 2025</td></tr><tr><td>5th&nbsp;Instalment</td><td>10%</td><td>August 2025</td></tr><tr><td>6th&nbsp;Instalment</td><td>15%</td><td>January 2026</td></tr><tr><td>7th&nbsp;Instalment</td><td>15%</td><td>July 2026</td></tr><tr><td>Final Instalment</td><td>10%</td><td>March 2027</td></tr></tbody></table></figure><p>&nbsp;</p>', NULL, NULL, '3, 4 & 5 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, NULL, NULL, NULL, '25.0193', '55.4473', NULL, NULL, NULL, NULL, NULL, NULL, '[{\"name\":\"International Airport\",\"distance\":\"26 Minute\"},{\"name\":\"burj khalifa\",\"distance\":\"27 Minute\"},{\"name\":\"palm jumeirah\",\"distance\":\"37 Minute\"},{\"name\":\"School\",\"distance\":\"21 Minute\"},{\"name\":\"Doctor\",\"distance\":\"20 Minute\"}]', '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689267406__644b4f9bd3c37_sw_samana-mykonos-apartments-dubai-9.jpg\",\"property_gallery\\/1689267408__647dae63e4daf_sw_retail-store-icon-23.jpg\",\"property_gallery\\/1689267411__6437eb3462dba_sw_st-regis-residences-dubai-13.jpg\",\"property_gallery\\/1689267415__6491ec6903a27_sw_Rivana_0003_RIVANA_BRANDED_RENDERS13-min.jpg\",\"property_gallery\\/1689267416__6491ec6903d2f_sw_Rivana_0005_RIVANA_BRANDED_RENDERS11-min.jpg\",\"property_gallery\\/1689267417__6491ec6903bda_sw_Rivana_0004_RIVANA_BRANDED_RENDERS12-min.jpg\",\"property_gallery\\/1689267417__6491ec6903e85_sw_Rivana_0006_RIVANA_BRANDED_RENDERS10-min.jpg\",\"property_gallery\\/1689267418__6491ec69034f2_sw_Rivana_0001_RIVANA_BRANDED_RENDERS16-min.jpg\",\"property_gallery\\/1689267418__6491ec6903840_sw_Rivana_0002_RIVANA_BRANDED_RENDERS14-min.jpg\",\"property_gallery\\/1689267420__6491ecde05a3b_sw_Rivana_0012_RIVANA_BRANDED_RENDERS4-min.jpg\",\"property_gallery\\/1689267421__6491ecde05e75_sw_Rivana_0013_RIVANA_BRANDED_RENDERS3-min.jpg\",\"property_gallery\\/1689267421__6491ec6904052_sw_Rivana_0007_RIVANA_BRANDED_RENDERS9-min.jpg\",\"property_gallery\\/1689267422__6491ecde06315_sw_Rivana_0015_RIVANA_BRANDED_RENDERS-min.jpg\",\"property_gallery\\/1689267423__6491ed2991a76_sw_Rivana_0011_RIVANA_BRANDED_RENDERS5-min.jpg\",\"property_gallery\\/1689267423__6491ed665d533_sw_Rivana_0014_RIVANA_BRANDED_RENDERS2-min.jpg\",\"property_gallery\\/1689267424__6491ed29910ce_sw_Rivana_0008_RIVANA_BRANDED_RENDERS8-min.jpg\",\"property_gallery\\/1689267425__6491ed29917b3_sw_Rivana_0010_RIVANA_BRANDED_RENDERS6-min.jpg\",\"property_gallery\\/1689267425__6491ed2991544_sw_Rivana_0009_RIVANA_BRANDED_RENDERS7-min.jpg\",\"property_gallery\\/1689267428__6444086ed4bf3_sw_jomana-mjl-meraas-10.jpg\"]', '2023-07-13 20:49:35', '2023-07-13 20:58:32'),
(42, '24-hr Security,Infinity Pool,Fully Equipped Gym,Sports Court,Spa,Retail Shops', 'Al Habtoor Tower', 'property_thumbnail/1689268062__6492c4793a5a1_sw_Habtoor_0007_Al Habtoor tower Interior Render 6-min.jpg', '<h4>1, 2 &amp; 3 Bedroom Residences in Dubai Water Canal, Dubai | Handover: Q3 2026</h4><p>Welcome to Al Habtoor Tower - This majestic tower in the most coveted neighbourhood, on the banks of the Dubai Water Canal, represents exceptional living elevated to the highest level of luxury in an all-inclusive setting, and boasting stunning views of the city and sea.&nbsp;An array of elegant spaces and endless everyday luxuries. Al Habtoor Tower is more than a place to call home. It is an ecosystem of opulence — a vertical city where lifestyle takes on a definition entirely its own. From state-of-theart fitness centres and gravity-defying infinity pools to elegant, spacious apartment homes with breathtaking views of the Dubai skyline, it’s a masterpiece of modern living. There\'s no better place to reside.</p>', NULL, '{\"aed\":\"2099730\",\"usd\":\"2099\"}', 'Freehold', 'Apartments', '1,046 Sqft.', 'Q3 2026', 'Unfurnished', '60/40', '<p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Instalment</strong></td><td><strong>Payment</strong></td><td><strong>Milestone</strong></td></tr><tr><td>Down Payment</td><td>10%</td><td>On Booking</td></tr><tr><td>1st Instalment</td><td>10%</td><td>30 days from booking</td></tr><tr><td>2nd&nbsp;Instalment</td><td>5%</td><td>20% Completion</td></tr><tr><td>3rd&nbsp;Instalment</td><td>5%</td><td>30%&nbsp;Completion</td></tr><tr><td>4th&nbsp;Instalment</td><td>5%</td><td>40%&nbsp;Completion</td></tr><tr><td>5th&nbsp;Instalment</td><td>5%</td><td>50%&nbsp;Completion</td></tr><tr><td>6th&nbsp;Instalment</td><td>5%</td><td>60%&nbsp;Completion</td></tr><tr><td>7th&nbsp;Instalment</td><td>5%</td><td>70%&nbsp;Completion</td></tr><tr><td>8th&nbsp;Instalment</td><td>5%</td><td>80%&nbsp;Completion</td></tr><tr><td>9th&nbsp;Instalment</td><td>5%</td><td>90%&nbsp;Completion</td></tr><tr><td>Final Instalment</td><td>40%</td><td>100%&nbsp;Completion</td></tr></tbody></table></figure><p>&nbsp;</p>', NULL, NULL, '1, 2 & 3 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, 'Dubai Water Canal', NULL, NULL, '25.1335932', '55.1290988', NULL, NULL, NULL, 'TWo0Cj0lQt0', NULL, NULL, '[{\"name\":\"International Airport\",\"distance\":\"15 Minute\"},{\"name\":\"burj khalifa\",\"distance\":\"5 Mins\"},{\"name\":\"palm jumeirah\",\"distance\":\"15 Mins\"},{\"name\":\"School\",\"distance\":\"10 Mins\"},{\"name\":\"Doctor\",\"distance\":\"10 Mins\"}]', '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689268046__643aae1f2f395_sw_meraas-design-quarter-apartments.jpg\",\"property_gallery\\/1689268047__643a784a7e86f_sw_Chic-Damac-business-bay-25.jpeg\",\"property_gallery\\/1689268049__647dae63e4daf_sw_retail-store-icon-23.jpg\",\"property_gallery\\/1689268050__647daed447192_sw_png-clipart-swimming-pools-hotel-apartment-swimming-cdr-text.png\",\"property_gallery\\/1689268055__6492c4793a0f4_sw_Habtoor_0004_Al Habtoor tower Interior Render 9-min.jpg\",\"property_gallery\\/1689268056__6492c4793a5a1_sw_Habtoor_0007_Al Habtoor tower Interior Render 6-min.jpg\",\"property_gallery\\/1689268056__6492c4793a266_sw_Habtoor_0005_Al Habtoor tower Interior Render 8-min.jpg\",\"property_gallery\\/1689268057__6492c4793a402_sw_Habtoor_0006_Al Habtoor tower Interior Render 7-min.jpg\",\"property_gallery\\/1689268059__6492c4793a758_sw_Habtoor_0008_Al Habtoor tower Interior Render 5-min.jpg\",\"property_gallery\\/1689268060__6492c4793a911_sw_Habtoor_0009_Al Habtoor tower Interior Render 4-min.jpg\",\"property_gallery\\/1689268062__6492c4793aa9a_sw_Habtoor_0010_Al Habtoor tower Interior Render 3-min.jpg\",\"property_gallery\\/1689268062__6492c4793abf1_sw_Habtoor_0011_Al Habtoor tower Interior Render 2-min.jpg\",\"property_gallery\\/1689268064__6492c47939c24_sw_Habtoor_0001_Al Habtoor tower Interior Render 12-min.jpg\",\"property_gallery\\/1689268064__6492c4793ad30_sw_Habtoor_0012_Al Habtoor tower Interior Render 1-min.jpg\",\"property_gallery\\/1689268065__6492c47939de9_sw_Habtoor_0002_Al Habtoor tower Interior Render 11-min.jpg\",\"property_gallery\\/1689268066__6492c47939f58_sw_Habtoor_0003_Al Habtoor tower Interior Render 10-min.jpg\",\"property_gallery\\/1689268067__6492c47939898_sw_Habtoor_0000_Al Habtoor tower Interior Render 13-min.jpg\",\"property_gallery\\/1689268068__64461c41a2885_sw_kempinski-residences-the-creek-dubai-9.jpg\"]', '2023-07-13 20:59:28', '2023-07-15 10:18:51'),
(43, 'Children\'s Playground,Swimming Pool,24-hr Security,Fitness Center,Parks & Open Spaces,Yoga Area', 'One Zaabeel The Residences', 'property_thumbnail/1689268515__643a6c8abd2e6_sw_One-Zaabeel-7.jpg', '<h4>1, 2 &amp; 3 Bedroom Residences in World Trade Center, Dubai | Handover: Q4 2024</h4><p>One Za’abeel represents the ultimate address for the modern urban citizen, located at the heart of one of the most dynamic cities in the world. One Za’abeel has been designed to incorporate the world’s best living, working, and leisure experiences in the heart of Dubai, to create something simply spectacular and everlasting.</p>', NULL, '{\"aed\":\"480,000\",\"usd\":\"480,000\"}', 'Freehold', 'Apartments', 'Starting from 1,158 Sqft.', 'Q4 2024', 'Unfurnished', '40/60', '<p>&nbsp;</p><p>NA</p><p>&nbsp;</p>', NULL, NULL, '1, 2 & 3 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, 'World Trade Center', NULL, NULL, '25.2384834', '55.3029143', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '109', NULL, NULL, NULL, NULL, 'Published', '[\"property_gallery\\/1689268461__643a6c8abc748_sw_One-Zaabeel-1.jpg\",\"property_gallery\\/1689268461__643a6c8abca77_sw_One-Zaabeel-2.jpg\",\"property_gallery\\/1689268462__643a6c8abce2f_sw_One-Zaabeel-4.jpg\",\"property_gallery\\/1689268462__643a6c8abcbf5_sw_One-Zaabeel-3.jpg\",\"property_gallery\\/1689268463__643a6c8abd2e6_sw_One-Zaabeel-7.jpg\",\"property_gallery\\/1689268463__643a6c8abcf7f_sw_One-Zaabeel-5.jpg\",\"property_gallery\\/1689268464__643a6c8abd6fa_sw_One-Zaabeel-10.jpg\",\"property_gallery\\/1689268464__643a6c8abd8c5_sw_One-Zaabeel-11.jpg\",\"property_gallery\\/1689268465__643a6c8abd43e_sw_One-Zaabeel-8.jpg\",\"property_gallery\\/1689268465__643a6c8abd57d_sw_One-Zaabeel-9.jpg\",\"property_gallery\\/1689268466__643a6c8abd141_sw_One-Zaabeel-6.jpg\",\"property_gallery\\/1689268466__643a6c8abda48_sw_One-Zaabeel-12.jpg\",\"property_gallery\\/1689268467__643a6c8abdb9a_sw_One-Zaabeel-13.jpg\",\"property_gallery\\/1689268467__643a6c8abdd19_sw_One-Zaabeel-14.jpg\",\"property_gallery\\/1689268468__643a6c8abde5f_sw_One-Zaabeel-15.jpg\",\"property_gallery\\/1689268468__643a6c8abdf90_sw_One-Zaabeel-16.jpg\",\"property_gallery\\/1689268469__643a6c8abe0db_sw_One-Zaabeel-17.jpg\",\"property_gallery\\/1689268469__643a6c8ac291d_sw_One-Zaabeel-18.jpg\",\"property_gallery\\/1689268470__643a6c8ac9702_sw_One-Zaabeel-19.jpg\",\"property_gallery\\/1689268470__643a6c8ad0bde_sw_One-Zaabeel-20.jpg\",\"property_gallery\\/1689268471__644b4f9bd3c37_sw_samana-mykonos-apartments-dubai-9.jpg\",\"property_gallery\\/1689268474__647ecb0b9255e_sw_Picture1.jpg\",\"property_gallery\\/1689268482__6461f3358be48_sw_nobles-tower-business-bay-7.jpg\",\"property_gallery\\/1689268483__643838d35a2b9_sw_One-Zaabeel-9.jpg\",\"property_gallery\\/1689268483__643838d35a7c9_sw_One-Zaabeel-7.jpg\",\"property_gallery\\/1689268484__643838d35a615_sw_One-Zaabeel-8.jpg\",\"property_gallery\\/1689268484__643838d35a914_sw_One-Zaabeel-6.jpg\",\"property_gallery\\/1689268485__643838d35aa56_sw_One-Zaabeel-5.jpg\",\"property_gallery\\/1689268485__643838d35ad4a_sw_One-Zaabeel-3.jpg\",\"property_gallery\\/1689268486__643838d35af6d_sw_One-Zaabeel-1.jpg\"]', '2023-07-13 21:12:02', '2023-07-13 21:15:15'),
(44, 'Children\'s Playground,Swimming Pool,24-hr Security,Barbecue Area,Landscaped Gardens,Lagoon Beach', 'Elysian', 'property_thumbnail/1689403636__64ad475000649_sw_the-oasis-min-1.jpg', '<h4>1, 2 &amp; 3 Bedroom Residences in Dubai Water Canal, Dubai | Handover: Q3 2026</h4><p>Welcome to Al Habtoor Tower - This majestic tower in the most coveted neighbourhood, on the banks of the Dubai Water Canal, represents exceptional living elevated to the highest level of luxury in an all-inclusive setting, and boasting stunning views of the city and sea.&nbsp;An array of elegant spaces and endless everyday luxuries. Al Habtoor Tower is more than a place to call home. It is an ecosystem of opulence — a vertical city where lifestyle takes on a definition entirely its own. From state-of-theart fitness centres and gravity-defying infinity pools to elegant, spacious apartment homes with breathtaking views of the Dubai skyline, it’s a masterpiece of modern living. There\'s no better place to reside.</p>', NULL, '{\"aed\":\"1\",\"usd\":\"2\"}', 'Freehold', NULL, '10,344 Sqft.', 'Q2 2024', 'Unfurnished', '40/60', '<p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td><strong>Payment</strong></td><td><strong>Milestone</strong></td></tr><tr><td>10%</td><td>Down Payment</td></tr><tr><td>30%</td><td>During Construction</td></tr><tr><td>60%</td><td>On Handover</td></tr></tbody></table></figure><p>&nbsp;</p>', NULL, NULL, '5, 6 & 7 Bedroom', '<p>https://www.newlaunchproperties.ae/property-list/6492c3a2a0429_sw_Al-habtoot-tower-floor-plan.pdf</p>', NULL, 'Tilal Al Ghaf', NULL, NULL, '25.027241', '55.231459', NULL, NULL, NULL, NULL, '', NULL, '[{\"name\":\"International Airport\",\"distance\":\"12 Minute\"},{\"name\":\"burj khalifa\",\"distance\":\"15 Minute\"},{\"name\":\"palm jumeirah\",\"distance\":\"25 Minute\"},{\"name\":\"School\",\"distance\":\"20 Minute\"},{\"name\":\"hospital\",\"distance\":\"15 Minute\"},{\"name\":\"burj khalifa\",\"distance\":\"32\"},{\"name\":\"2\",\"distance\":\"32\"},{\"name\":\"2\",\"distance\":\"32\"},{\"name\":\"kanpur2\",\"distance\":\"32\"},{\"name\":\"International Airport\",\"distance\":\"15 Minute\"},{\"name\":\"test\",\"distance\":\"3\"},{\"name\":\"International Airport\",\"distance\":\"15 Minute\"}]', '109', NULL, NULL, NULL, '[{\"value\":\"Top Property\"},{\"value\":\"Featured Property\"},{\"value\":\"Urgent Property\"}]', 'Published', '[\"property_gallery\\/1689268689__643a6eabb00b5_sw_peninsula-four-the-plaza-8.jpg\",\"property_gallery\\/1689268691__643a736d1735f_sw_canal-heights-de-grisogono-damac-12.jpg\",\"property_gallery\\/1689268706__6438385163ab5_sw_8-min.jpg\",\"property_gallery\\/1689268707__6438385163d11_sw_7-min.jpg\",\"property_gallery\\/1689268709__6438385164b01_sw_1-min.jpg\",\"property_gallery\\/1689268709__6438385163f6c_sw_6-min.jpg\",\"property_gallery\\/1689268711__64383851633a3_sw_9-min.jpg\",\"property_gallery\\/1689268711__64383851644e4_sw_4-min.jpg\",\"property_gallery\\/1689268713__64383851646b3_sw_3-min.jpg\",\"property_gallery\\/1689268713__643838516429d_sw_5-min.jpg\",\"property_gallery\\/1689268714__6438385164941_sw_2-min.jpg\"]', '2023-07-13 21:15:25', '2023-08-01 11:09:20'),
(45, NULL, 'Elysian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Publish', NULL, '2023-08-01 13:23:28', '2023-08-01 13:23:28'),
(46, NULL, 'Elysian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Publish', NULL, '2023-08-01 13:23:35', '2023-08-01 13:23:35'),
(47, NULL, 'Elysian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Publish', NULL, '2023-08-01 13:29:28', '2023-08-01 13:29:28'),
(48, NULL, 'Elysian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Publish', NULL, '2023-08-01 13:31:06', '2023-08-01 13:31:06'),
(49, NULL, 'Elysian', NULL, NULL, NULL, NULL, '1', NULL, '3510', 'Q2 2024', '2', '40/60', NULL, NULL, NULL, '3 Bedroom', 'Floor details', NULL, 'MBR City', NULL, NULL, '25.0193', '55.297325', '2', '3', NULL, 'Set Video (youtube video ID)', NULL, NULL, NULL, '132', NULL, NULL, NULL, NULL, 'Publish', NULL, '2023-08-01 13:31:57', '2023-08-01 13:31:57'),
(50, NULL, 'Elysian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Q2 2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MBR City', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '132', NULL, NULL, NULL, NULL, 'Publish', NULL, '2023-08-01 13:34:46', '2023-08-01 13:34:46'),
(51, NULL, 'Elysian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Q2 2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MBR City', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '132', NULL, NULL, NULL, NULL, 'Publish', NULL, '2023-08-01 13:36:30', '2023-08-01 13:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `tags`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'Can I get a 10-year resident visa for my family and me if I buy a property in Dubai?', 'Yes, obtaining a 10-year residency visa in Dubai is possible if you purchase a property. The Dubai government has implemented a scheme under which property buyers can obtain long-term visas, which includes a 10-year visa for the property owner and their family. The requirements for obtaining a residency visa through property ownership may vary, but typically, you would need to show proof of ownership of a property in Dubai and meet specific financial criteria, such as a minimum salary or income level. It is advisable to check the latest visa regulations and requirements with the relevant Dubai authorities or a local immigration consultant for the most accurate and up-to-date information.', NULL, '109', '2023-07-30 10:58:28', '2023-07-30 10:58:28'),
(17, 'Can foreigners buy property in Dubai?', '<p>Yes, foreigners can buy and own property in Dubai. The real estate market in Dubai is open to foreign investment, and there are no restrictions on foreign ownership of property. In recent years, the government has made it easier for foreign nationals to purchase property in the city, including simplifying the process for obtaining mortgages and reducing property transfer fees.</p>\r\n\r\n<p>However, there are some specific regulations and requirements that must be met in order to purchase property in Dubai. For example, all properties must be registered with the Dubai Land Department, and buyers must provide proof of identity and proof of residency. It&#39;s also essential to carefully research the different areas and types of properties available, as some areas may have specific regulations or restrictions.</p>\r\n\r\n<p>Overall, Dubai&#39;s property market is seen as a lucrative investment opportunity for foreign nationals, offering the potential for capital growth and rental income. However, as with any investment, it&#39;s essential to research and seeks professional advice before making any decisions.</p>', NULL, '109', '2023-07-30 11:04:44', '2023-07-30 11:04:44'),
(18, 'What are the essential factors to know before investing in real estate in Dubai?', '<p>Before investing in real estate in Dubai, it&#39;s essential to consider the following factors:</p>\r\n\r\n<p>Considering these factors and taking the time to carefully research and plan your investment, you can increase the chances of success and minimize the risks associated with real estate investment in Dubai.</p>\r\n\r\n<ol>\r\n	<li><strong>Location:</strong>&nbsp;Location is a crucial factor in real estate investment. Research the different areas of Dubai, and consider factors such as proximity to schools, shopping, transportation, and amenities.</li>\r\n	<li><strong>Market conditions:</strong>&nbsp;Keep an eye on the real estate market in Dubai, and look for trends such as rising prices, new developments, and changes in demand.</li>\r\n	<li><strong>Investment objectives:</strong>&nbsp;Consider what you want to achieve through your real estate investment, such as rental income, long-term capital growth, or a combination of both.</li>\r\n	<li><strong>Legal and regulatory environment:</strong>&nbsp;Make sure you understand the laws and regulations surrounding real estate investment in Dubai, including restrictions on foreign ownership and requirements for registering property.</li>\r\n	<li><strong>Due diligence:</strong>&nbsp;Thoroughly research the property you are interested in, including its history, ownership, and any outstanding debts or liens.</li>\r\n	<li><strong>Financing:</strong>&nbsp;Consider the costs involved in purchasing property, including down payment requirements, closing costs, and ongoing expenses such as maintenance and property taxes.</li>\r\n	<li><strong>Professional advice:</strong>&nbsp;Seek the advice of a qualified real estate professional or attorney to help you navigate the process of buying property in Dubai and ensure that your investment is protected.</li>\r\n</ol>', NULL, '109', '2023-07-30 11:05:22', '2023-07-30 11:05:22'),
(19, 'Are all residential properties freehold in Dubai?', '<p>No, not all residential properties in Dubai are freehold. Freehold property ownership is a system that allows individuals to own a property in perpetuity, with full rights to use, transfer, or sell the property. In Dubai, freehold ownership is restricted to certain designated areas and is granted by the government.</p>\r\n\r\n<p>In contrast, some areas of Dubai are designated as leaseholds, meaning that individuals have the right to use and occupy the property for a specified period, typically between 50&nbsp;and 99 years. At the end of the lease period, the property reverts to the government or the landowner</p>\r\n\r\n<p>It&#39;s essential to carefully research the ownership status of a property before making a purchase, as this will significantly impact the value and potential returns from your investment. In general, freehold properties tend to be more highly valued and are seen as a more secure investment option.</p>', NULL, '109', '2023-07-30 11:05:51', '2023-07-30 11:05:51'),
(20, 'What&#039;s the difference between leasehold and freehold properties in Dubai?', '<p>Freehold ownership allows individuals to own a property in perpetuity, with full rights to use, transfer, or sell the property. Freehold properties are typically more highly valued and are seen as a more secure investment option.</p>\r\n\r\n<p>On the other hand, leasehold ownership allows individuals to use and occupy a property for a specified period of time, typically between 50 and 99 years. At the end of the lease period, the property reverts back to the government or the landowner. Leasehold properties are generally less expensive than freehold properties and may offer a lower entry point for individuals looking to invest in Dubai&#39;s real estate market.</p>\r\n\r\n<p>It&#39;s essential to consider both options&#39; pros and cons and carefully research a property&#39;s ownership status before making a purchase. Factors to consider include the lease&#39;s length, the lease agreement&#39;s terms, and the potential for future capital growth and rental income. By working with a qualified real estate professional, you can ensure that you understand the differences between leasehold and freehold ownership and make an informed decision that aligns with your investment goals and objectives.</p>', NULL, '109', '2023-07-30 11:06:19', '2023-07-30 11:06:19'),
(21, 'Is it better to buy your own home or rent a home in Dubai?', '<p>Buying or renting a home in Dubai will depend on your circumstances and financial goals.</p>\r\n\r\n<p>Owning a home in Dubai can be a good investment option as the city&#39;s real estate market has a strong track record of growth and appreciation. By purchasing a home, you can build equity and benefit from the potential appreciation in value over time. Additionally, owning a home can provide a sense of stability and permanence and offer the freedom to make changes and personalize your living space.</p>\r\n\r\n<p>However, buying a home also requires a significant upfront investment, including the cost of the down payment, closing costs, and ongoing expenses such as maintenance and property taxes. Additionally, you&#39;ll need to factor in the time and effort required to manage the property, including repairs and upgrades.</p>\r\n\r\n<p>On the other hand, renting a home in Dubai can provide more flexibility and affordability. Renting allows you to try out different neighborhoods and living arrangements before committing to a long-term investment and eliminates the need for a large upfront investment. Additionally, rental properties are generally easier to manage, as the landlord is typically responsible for maintenance and repairs.</p>\r\n\r\n<p>Ultimately, deciding between buying or renting a home in Dubai will depend on your circumstances and financial goals. Consider your long-term plans, budget, and comfort level with risk when making this critical decision.</p>', NULL, '109', '2023-07-30 11:06:48', '2023-07-30 11:06:48'),
(22, 'Is it better to invest in an off-plan or ready property in Dubai?', '<p>The decision between investing in an off-plan or ready property in Dubai will depend on several factors, including your investment goals, budget, and risk tolerance.</p>\r\n\r\n<p>Off-plan properties are properties that are still under construction and are being sold prior to completion. Investing in an off-plan property can offer several advantages, including lower prices compared to ready properties and the opportunity to benefit from potential capital growth as the property is completed and the market appreciates.</p>\r\n\r\n<p>However, investing in an off-plan property also comes with risks. There is a possibility of delays in the construction process, which can impact the return on investment and timeline for completion. Additionally, the final product may not match the specifications and quality promised by the developer.</p>\r\n\r\n<p>Ready properties, on the other hand, are properties that have already been built and are available for immediate occupancy. Investing in a ready property offers a more secure investment, as the property is already built, and you can physically inspect it and its features. Ready properties are typically more expensive than off-plan properties but offer a lower level of risk and the opportunity for immediate rental income.</p>\r\n\r\n<p>Ultimately, deciding between investing in an off-plan or ready property in Dubai will depend on your circumstances, investment goals, and risk tolerance. Consider factors such as budget, timeline for return on investment, and personal comfort level with risk when making this decision. It may also be helpful to seek the advice of a qualified real estate professional to help you make an informed decision.</p>', NULL, '109', '2023-07-30 11:07:15', '2023-07-30 11:07:15'),
(23, 'Is it better to buy a property in Dubai on a mortgage or pay it fully with personal savings?', '<p>Buying a property in Dubai with a mortgage or paying in full with personal savings will depend on your financial situation and investment goals.</p>\r\n\r\n<p>Paying for a property in full with personal savings can offer several advantages, including:</p>\r\n\r\n<ul>\r\n	<li><strong>No monthly mortgage payments:</strong>&nbsp;By paying in full, you will not have to worry about making monthly mortgage payments, which can free up cash flow for other expenses or investments.</li>\r\n	<li><strong>No interest costs:</strong>&nbsp;By not borrowing, you will not have to pay interest on a mortgage, which can add up over time.</li>\r\n	<li><strong>Increased equity:</strong>&nbsp;By paying in full, you will own the property outright and have full control over the property</li>\r\n</ul>\r\n\r\n<p>However, paying for a property in full with personal savings can also have drawbacks, including:</p>\r\n\r\n<ul>\r\n	<li><strong>Tied-up capital:</strong>&nbsp;Paying for a property in full will tie up a significant amount of capital that could be used for other investments or expenses.</li>\r\n	<li><strong>Limited access to funds:</strong>&nbsp;By investing all of your savings into one property, you may limit your access to funds for other expenses or investments.</li>\r\n</ul>\r\n\r\n<p>Taking out a mortgage to buy a property in Dubai can offer several advantages, including:</p>\r\n\r\n<ul>\r\n	<li><strong>More affordable upfront cost:</strong>&nbsp;By borrowing, you can purchase a property with a smaller upfront investment, freeing up your savings for other expenses or investments.</li>\r\n	<li><strong>Opportunity to build equity:</strong>&nbsp;By making monthly mortgage payments, you can build equity in the property over time.</li>\r\n	<li><strong>Monthly payments:</strong>&nbsp;Borrowing can spread the cost of the property over a longer period of time, which can lower your monthly payments.</li>\r\n</ul>\r\n\r\n<p>However, taking out a mortgage to buy a property in Dubai can also have drawbacks, including:</p>\r\n\r\n<ul>\r\n	<li><strong>Monthly mortgage payments:</strong>&nbsp;You will need to make monthly mortgage payments, which can reduce your cash flow and impact your overall budget.</li>\r\n	<li><strong>Interest costs:</strong>&nbsp;Borrowing will come with interest costs, which can add up over time and increase the overall cost of the property.</li>\r\n</ul>\r\n\r\n<p>Ultimately, deciding between paying for a property in full with personal savings or taking out a mortgage will depend on your financial situation and investment goals. Consider your budget, cash flow, and long-term financial goals when making this decision. It may also be helpful to seek the advice of a financial advisor to help you make an informed decision.</p>', NULL, '109', '2023-07-30 11:08:05', '2023-07-30 11:08:05'),
(24, 'What are the popular residential communities in Dubai?', '<p>There are many popular residential communities in Dubai, each offering unique features and amenities to suit a variety of lifestyles and preferences. Some of the most popular residential communities in Dubai include:</p>\r\n\r\n<ol>\r\n	<li><strong>Emirates Hills:</strong>&nbsp;A luxury gated community featuring large, villa-style homes and golf course views.</li>\r\n	<li><strong>Dubai Marina:</strong>&nbsp;A bustling waterfront community featuring high-rise apartments, restaurants, and shopping.</li>\r\n	<li><strong>Jumeirah Beach Residence (JBR):</strong>&nbsp;A popular beachfront community featuring apartments, restaurants, and shopping.</li>\r\n	<li><strong>The Springs:</strong>&nbsp;A gated community featuring townhouses and villas set among lush green spaces and lakes.</li>\r\n	<li><strong>The Palm Jumeirah:</strong>&nbsp;A man-made island in the shape of a palm tree featuring a mix of villas, apartments, and hotels.</li>\r\n	<li><strong>Jumeirah Park:</strong>&nbsp;A gated community featuring spacious villas set among parks and lakes.</li>\r\n	<li><strong>Downtown Dubai:</strong>&nbsp;A bustling urban center featuring high-rise apartments, shopping, and entertainment.</li>\r\n	<li><strong>The Greens &amp; The Views:</strong>&nbsp;A gated community featuring apartments and townhouses set among lush green spaces.</li>\r\n</ol>\r\n\r\n<p>These are just a few of the many popular residential communities in Dubai. When considering where to live in Dubai, it is essential to consider factors such as location, access to amenities, and proximity to work and school.</p>', NULL, '109', '2023-07-30 11:08:40', '2023-07-30 11:08:40'),
(25, 'Which are the most popular gated villa communities in Dubai?', '<p>Dubai is known for its luxury villa communities, many of which are gated for added security and privacy. Some of the most popular gated villa communities in Dubai include:</p>\r\n\r\n<p>These gated communities offer residents a peaceful and secure living environment while still being conveniently located near popular shopping, dining, and entertainment destinations. When considering a gated villa community in Dubai, it is essential to consider factors such as location, access to amenities, and the community&#39;s specific features and benefits.</p>\r\n\r\n<ol>\r\n	<li><strong>Emirates Hills:</strong>&nbsp;A luxury gated community featuring large, villa-style homes with golf course views.</li>\r\n	<li>T<strong>he Springs:</strong>&nbsp;A gated community featuring townhouses and villas set among lush green spaces and lakes.</li>\r\n	<li><strong>Jumeirah Park:</strong>&nbsp;A gated community featuring spacious villas set among parks and lakes.</li>\r\n	<li><strong>The Meadows:</strong>&nbsp;A gated community featuring villas set among lush green spaces and lakes.</li>\r\n	<li><strong>The Lakes</strong>: A gated community featuring villas set around a series of interconnected lakes.</li>\r\n	<li><strong>Arabian Ranches</strong>:&nbsp;A gated community featuring villas set among lush green spaces and golf courses.</li>\r\n	<li><strong>Victory Heights:</strong>&nbsp;A gated community featuring villas set around a golf course.</li>\r\n	<li><strong>The Villa:</strong>&nbsp;A gated community featuring villas set among lush green spaces.</li>\r\n</ol>', NULL, '109', '2023-07-30 11:09:11', '2023-07-30 11:09:11'),
(26, 'Which locations in Dubai have the best rental yield?', '<p>Dubai has a diverse real estate market, with different areas offering different rental yields based on location, property type, and demand. However, some of the locations in Dubai that are known for having good rental yields include:</p>\r\n\r\n<ol>\r\n	<li><strong>Dubai Marina:</strong>&nbsp;A bustling waterfront community is known for its high-rise apartments and strong demand from renters.</li>\r\n	<li><strong>Jumeirah Lake Towers (JLT):</strong>&nbsp;An up-and-coming community known for its highrise apartments and good rental yields.</li>\r\n	<li><strong>Discovery Gardens:</strong>&nbsp;A popular community known for its garden-style apartments and good rental yields.</li>\r\n	<li><strong>International City:</strong>&nbsp;A budget-friendly community known for its good rental yields on studio and one-bedroom apartments.</li>\r\n	<li><strong>Business Bay:</strong>&nbsp;A commercial and residential hub known for its high-rise apartments and good rental yields.</li>\r\n	<li><strong>Dubai Sports City:</strong>&nbsp;A sports-focused community known for its good rental yields on apartments and townhouses.</li>\r\n</ol>\r\n\r\n<p>It is important to note that rental yields in Dubai can vary depending on the specific property and market conditions. It is advisable to seek professional advice from a real estate agent or market expert before investing in rental property in Dubai.</p>', NULL, '109', '2023-07-30 11:09:37', '2023-07-30 11:09:37'),
(27, 'What is the average rental yield of residential properties in Dubai?', '<p>The average rental yield of residential properties in Dubai can vary greatly depending on location, property type, demand, and supply factors. However, generally, the average rental yield for residential properties in Dubai is estimated to be around 5-7%.</p>\r\n\r\n<p>It is important to note that rental yields can vary greatly depending on the specific property and market conditions. High-end properties in prime locations may have lower rental yields, while budget-friendly properties in more affordable areas may have higher rental yields. It is advisable to seek professional advice from a real estate agent or market expert to get a more accurate estimate of rental yields in a specific area.</p>', NULL, '109', '2023-07-30 11:10:12', '2023-07-30 11:10:12'),
(28, 'Which are the top 10 real estate developers in Dubai?', '<p>Dubai is home to many leading real estate developers, each with their own portfolio of high-quality projects. Here is a list of the top 10 real estate developers in Dubai:</p>\r\n\r\n<ol>\r\n	<li><strong>Emaar Properties:</strong>&nbsp;One of the largest and most prominent real estate developers in Dubai, with a portfolio that includes high-rise towers, residential communities, and shopping centers.</li>\r\n	<li><strong>Dubai Properties:</strong>&nbsp;A subsidiary of the Dubai Holding Group, Dubai Properties is known for developing luxury residential and commercial projects.</li>\r\n	<li><strong>Nakheel:</strong>&nbsp;A leading real estate developer is known for its large-scale developments, including man-made islands, residential communities, and shopping centers.</li>\r\n	<li><strong>Damac Properties:</strong>&nbsp;A leading real estate developer known for its luxury residential and commercial projects, including high-rise towers and golf course communities.</li>\r\n	<li><strong>Meraas:</strong>&nbsp;A diversified real estate developer known for its mixed-use developments, including residential communities, shopping centers, and tourist attractions.</li>\r\n	<li><strong>Azizi Developments:</strong>&nbsp;A leading real estate developer known for its luxury residential projects, including high-rise towers and gated communities.</li>\r\n	<li><strong>Sobha Group:</strong>&nbsp;A leading real estate developer known for its luxury residential projects, including high-rise towers and gated communities.</li>\r\n	<li><strong>Deyaar:</strong>&nbsp;A leading real estate developer known for its high-quality residential and commercial projects, including high-rise towers and gated communities.</li>\r\n	<li><strong>Ellington Properties:</strong>&nbsp;A leading real estate developer known for its high-quality residential and commercial projects, including high-rise tower communities.</li>\r\n	<li><strong>Danube Properties:</strong>&nbsp;A leading real estate developer known for its high-quality residential and commercial projects, including high-rise towers</li>\r\n</ol>\r\n\r\n<p>These real estate developers have a proven track record of delivering high-quality projects, and many have plans for further expansion. When considering investing in real estate in Dubai, it is advisable to research and compare the portfolios of different developers to determine which one best meets your needs and investment goals.</p>', NULL, '109', '2023-07-30 11:10:47', '2023-07-30 11:10:47'),
(29, 'What are the Top 5 luxury neighborhoods to live in Dubai?', '<p>Dubai is home to many luxury neighborhoods, each offering a unique lifestyle and a range of high-end amenities. Here is a list of the top 5 luxury neighborhoods in Dubai:</p>\r\n\r\n<ol>\r\n	<li><strong>Emirates Hills:</strong>&nbsp;Emirates Hills is a luxury gated community located in the heart of Dubai, known for its elegant villas, lush green spaces, and scenic lakes.</li>\r\n	<li><strong>The Palm Jumeirah:&nbsp;</strong>The Palm Jumeirah is a man-made island that is home to some of the most luxurious residences in Dubai, including private villas and highrise apartments.</li>\r\n	<li><strong>Downtown Dubai:&nbsp;</strong>Downtown Dubai is a bustling neighborhood located at the heart of the city, known for its high-end shopping centers, luxury hotels, and residential towers.</li>\r\n	<li><strong>Jumeirah Beach Residence (JBR):&nbsp;</strong>JBR is a popular beachfront neighborhood known for its luxurious high-rise apartments and vibrant community life, with access to a wide range of restaurants, cafes, and shopping options.</li>\r\n	<li><strong>The Meadows:&nbsp;</strong>The Meadows is a gated community located in the heart of Dubai, known for its elegant villas, lush green spaces, and scenic lakes.</li>\r\n</ol>\r\n\r\n<p>These neighborhoods offer a high standard of living and a range of amenities, making them popular among high-end buyers and renters. However, it is essential to note that living in a luxury neighborhood in Dubai can be expensive, and it is advisable to consider your budget and lifestyle needs before making a decision.</p>', NULL, '109', '2023-07-30 11:11:14', '2023-07-30 11:11:14'),
(30, 'What are the Top 10 upcoming luxury residential projects locations in Dubai?', '<p>It is difficult to definitively say which are the top 10 upcoming luxury residential projects in Dubai, as the dynamic real estate market and projects can change. However, here are some of the highly anticipated luxury residential projects in Dubai:</p>\r\n\r\n<ol>\r\n	<li><strong>Burj Jumeirah:</strong>&nbsp;A luxury development by Meraas in Jumeirah offering luxury residences and world-class amenities.</li>\r\n	<li><strong>The Royal Atlantis Resort &amp; Residences:</strong>&nbsp;A high-end residential development located on the Palm Jumeirah, offering panoramic views of the Arabian Gulf.</li>\r\n	<li><strong>Dubai Creek Harbour:</strong>&nbsp;A new mixed-use development located along the creek, offering luxury residences, retail, and leisure options.</li>\r\n	<li><strong>Bluewaters Island:</strong>&nbsp;A man-made island located off the coast of Jumeirah Beach Residence, offering high-end residences, retail, and entertainment options.</li>\r\n	<li><strong>MBR City:</strong>&nbsp;A new luxury residential development located in the heart of Dubai, offering a range of high-end amenities and stunning views of the city.</li>\r\n	<li><strong>Damac Hills:</strong>&nbsp;A luxury gated community located near the intersection of Al Qudra Road and Emirates Road, offering high-end villas, townhouses, and apartments.</li>\r\n	<li><strong>Dubai Harbour:</strong>&nbsp;A new mixed-use development located near Jumeirah Beach Residence, offering luxury residences, retail, and leisure options.</li>\r\n	<li><strong>The Beach at JBR:</strong>&nbsp;A new high-end residential development located in JBR, offering stunning views of the Arabian Gulf and a range of luxurious amenities.</li>\r\n	<li><strong>Dubai Hills Estate:</strong>&nbsp;A master-planned community located in the heart of Dubai, offering a range of luxury residences, retail, and leisure options.</li>\r\n	<li><strong>Marsa Al Arab:</strong>&nbsp;A luxury development located on the man-made islands of the Dubai Water Canal, offering a range of high-end amenities and stunning views of the city.</li>\r\n</ol>\r\n\r\n<p>Please note that this is not an exhaustive list and there are many other luxury residential projects in Dubai, some of which may also be highly anticipated. Before investing in a property in Dubai, it is crucial to consider factors such as location, market conditions, and your budget.</p>', NULL, '109', '2023-07-30 11:11:43', '2023-07-30 11:11:43'),
(31, 'Is Dubai a safe city to live in ?', '<p>Dubai is generally considered a safe city to live in. The city has a low crime rate, and the police force is highly regarded for its efficiency and commitment to maintaining safety and security. However, like any other large city, it&#39;s always important to take basic safety precautions and be aware of your surroundings.</p>', NULL, '109', '2023-07-30 11:12:09', '2023-07-30 11:12:09'),
(32, 'Is Dubai a good city to do business?', '<p>Dubai is widely considered to be a good city for business. The city has a dynamic and diverse economy with a strong focus on trade, tourism, and finance. The government has made significant investments in infrastructure and established various free zones that offer favorable business conditions, including tax exemptions and relaxed regulations. Additionally, Dubai&#39;s strategic location at the crossroads of Europe, Asia, and Africa makes it an attractive destination for multinational corporations looking to access new markets. Overall, the city offers a favorable environment for businesses looking to establish themselves in the region.</p>', NULL, '109', '2023-07-30 11:12:31', '2023-07-30 11:12:31'),
(33, 'How are the medical facilities in Dubai?', '<p>Dubai has high-quality medical facilities, offering both public and private healthcare options. The city is home to numerous top-rated hospitals and medical centers that are well-equipped with state-of-the-art technology and staffed by highly trained medical professionals. Many of these facilities offer various medical services, including routine check-ups, diagnostic testing, and specialist treatment.</p>\r\n\r\n<p>Additionally, Dubai has a well-established medical tourism industry, with many international patients traveling to the city for medical procedures and treatments. The city also has a thriving pharmaceutical industry and is a hub for medical research and innovation in the region.</p>\r\n\r\n<p>Medical care in Dubai is generally considered high, and expatriates living in the city can expect to receive good-quality medical treatment. However, it&#39;s always advisable to research the available options and facilities before making any healthcare decisions.</p>', NULL, '109', '2023-07-30 11:12:55', '2023-07-30 11:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `purpose` varchar(300) DEFAULT NULL,
  `refer` varchar(300) DEFAULT NULL,
  `service_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `request_url` varchar(255) NOT NULL,
  `timezone` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `email`, `phone`, `purpose`, `refer`, `service_id`, `user_id`, `ip_address`, `request_url`, `timezone`, `created_at`, `updated_at`) VALUES
(1, 'susheel', 'nbs.app@gmail.com', '918840574997', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:f189:a06e:e73c:1630', 'call_me_back', NULL, '2023-03-08 15:28:36', '2023-03-08 15:28:36'),
(2, 'susheel', 'nbs.app@gmail.com', '918840574997', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:f189:a06e:e73c:1630', 'call_me_back', NULL, '2023-03-08 15:29:02', '2023-03-08 15:29:02'),
(3, 'dfff', 'susheel3010@gmail.com', '918840574997', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:f189:a06e:e73c:1630', 'call_me_back', NULL, '2023-03-08 15:29:10', '2023-03-08 15:29:10'),
(4, 'susheel', 'nbs.app@gmail.com', '22', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:f189:a06e:e73c:1630', 'call_me_back', NULL, '2023-03-08 15:29:46', '2023-03-08 15:29:46'),
(5, 'susheel', 'susheel3010@gmail.com', '918840574997', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:f189:a06e:e73c:1630', 'call_me_back', NULL, '2023-03-08 15:30:45', '2023-03-08 15:30:45'),
(6, 'susheel@gmail.com', 'susheel3010@gmail.com', '918840574997', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:f189:a06e:e73c:1630', 'call_me_back', NULL, '2023-03-08 15:37:41', '2023-03-08 15:37:41'),
(7, 'susheel', 'sakshk2019@gmail.com', '918840574997', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:65c8:2fb8:2680:c673', 'call_me_back', NULL, '2023-03-17 09:43:42', '2023-03-17 09:43:42'),
(8, 'susheel', 'susheel3010@gmail.com', '9874561235', 'download_brochure', NULL, '7', '0', '2405:201:600f:60c2:adc3:19ec:e363:11c3', 'call_me_back', NULL, '2023-03-20 05:29:19', '2023-03-20 05:29:19'),
(9, 'susheel', 'susheel2339@gmail.com', '43543543', 'download_brochure', NULL, '17', '109', '2405:201:600f:60c2:545a:f259:197d:7c61', 'call_me_back', NULL, '2023-03-25 22:09:32', '2023-03-25 22:09:32'),
(10, 'susheel', 'susheel2339@gmail.com', '43543545', 'download_brochure', NULL, '17', '109', '2405:201:600f:60c2:545a:f259:197d:7c61', 'call_me_back', NULL, '2023-03-25 22:10:23', '2023-03-25 22:10:23'),
(11, 'sakshk2019@gmail.com', 'susheel2339@gmail.com', '435435', 'download_brochure', NULL, '17', '109', '2405:201:600f:60c2:545a:f259:197d:7c61', 'call_me_back', NULL, '2023-03-25 22:11:06', '2023-03-25 22:11:06'),
(12, 'susheel', 'susheel2339@qgxmail.com', '8840574997', 'download_brochure', NULL, '17', '120', '2405:201:600f:60c2:6143:f3f5:7cb6:32bd', 'call_me_back', NULL, '2023-03-30 15:24:17', '2023-03-30 15:24:17'),
(13, 'susheel', 'susheel2339@gmail.com', '2023-07-26T02:33', 'download_brochure', NULL, '11', '109', '49.36.171.251', 'call_me_back', NULL, '2023-07-09 20:26:03', '2023-07-09 20:26:03'),
(14, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 10:42:50', '2023-07-15 10:42:50'),
(15, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 10:43:37', '2023-07-15 10:43:37'),
(16, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 10:43:54', '2023-07-15 10:43:54'),
(17, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 10:44:21', '2023-07-15 10:44:21'),
(18, 'susheel', 'susheel2339@gmail.com', '332323232323232', 'download_brochure', NULL, '44', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 10:56:20', '2023-07-15 10:56:20'),
(19, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 13:36:51', '2023-07-15 13:36:51'),
(20, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 13:37:04', '2023-07-15 13:37:04'),
(21, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 13:37:46', '2023-07-15 13:37:46'),
(22, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 13:38:07', '2023-07-15 13:38:07'),
(23, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'download_brochure', NULL, '35', '109', '49.36.169.21', 'download_brochure', NULL, '2023-07-15 13:39:09', '2023-07-15 13:39:09'),
(24, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'call_me_back', NULL, '0', '109', '49.36.169.21', 'call_me_back', NULL, '2023-07-16 16:46:31', '2023-07-16 16:46:31'),
(25, 'susheel', 'susheel2339@gmail.com', '332323232323232', 'call_me_back', NULL, '0', '109', '49.36.169.21', 'call_me_back', NULL, '2023-07-16 16:49:57', '2023-07-16 16:49:57'),
(26, 'susheel', 'susheel2339@gmail.com', '332323232323232', 'call_me_back', 'Whatsapp', '0', '109', '49.36.169.21', 'call_me_back', NULL, '2023-07-16 16:53:16', '2023-07-16 16:53:16'),
(27, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'call_me_back', 'Facebook', '0', '0', '49.36.169.21', 'call_me_back', NULL, '2023-07-17 06:04:27', '2023-07-17 06:04:27'),
(28, 'susheel', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'call_me_back', 'Whatsapp', '0', '0', '49.36.169.21', 'call_me_back', NULL, '2023-07-17 15:26:36', '2023-07-17 15:26:36'),
(29, 'susheel', 'susheel2339@gmail.com', '332323232323232', 'call_me_back', 'Whatsapp', '0', '0', '49.36.169.21', 'call_me_back', NULL, '2023-07-17 15:28:15', '2023-07-17 15:28:15'),
(30, 'susheel3010@gmail.com', 'susheel2339@gmail.com', '+91 (8840) 574-997', 'call_me_back', 'Search Engine', '44', '0', '49.36.169.21', 'call_me_back', NULL, '2023-07-22 17:14:45', '2023-07-22 17:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `login_histories`
--

CREATE TABLE `login_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_histories`
--

INSERT INTO `login_histories` (`id`, `user_id`, `ip`, `created_at`, `updated_at`) VALUES
(1, '102', '49.36.168.243', '2023-01-22 19:41:35', '2023-01-22 19:41:35'),
(2, '102', '49.36.168.243', '2023-01-22 20:09:53', '2023-01-22 20:09:53'),
(3, '105', '49.36.168.243', '2023-01-22 20:47:57', '2023-01-22 20:47:57'),
(4, '102', '49.36.168.243', '2023-01-22 20:49:22', '2023-01-22 20:49:22'),
(5, '107', '49.36.168.243', '2023-01-22 21:07:04', '2023-01-22 21:07:04'),
(6, '102', '49.36.168.243', '2023-01-22 21:07:34', '2023-01-22 21:07:34'),
(7, '102', '49.36.168.243', '2023-01-22 21:19:17', '2023-01-22 21:19:17'),
(8, '102', '49.36.168.243', '2023-01-22 21:35:42', '2023-01-22 21:35:42'),
(9, '102', '49.36.168.243', '2023-01-23 04:35:00', '2023-01-23 04:35:00'),
(10, '108', '49.36.168.243', '2023-01-23 05:00:45', '2023-01-23 05:00:45'),
(11, '102', '49.36.168.243', '2023-01-23 07:22:11', '2023-01-23 07:22:11'),
(12, '102', '49.36.168.243', '2023-01-23 09:56:21', '2023-01-23 09:56:21'),
(13, '102', '49.36.168.243', '2023-01-23 10:56:34', '2023-01-23 10:56:34'),
(14, '102', '49.36.168.243', '2023-01-23 10:56:56', '2023-01-23 10:56:56'),
(15, '109', '49.36.168.243', '2023-01-24 17:27:43', '2023-01-24 17:27:43'),
(16, '109', '49.36.168.243', '2023-01-24 17:29:39', '2023-01-24 17:29:39'),
(17, '109', '49.36.168.243', '2023-01-27 10:26:22', '2023-01-27 10:26:22'),
(18, '109', '49.36.168.243', '2023-01-28 21:47:59', '2023-01-28 21:47:59'),
(19, '109', '49.36.168.243', '2023-01-29 17:09:46', '2023-01-29 17:09:46'),
(20, '109', '49.36.168.243', '2023-01-30 15:48:41', '2023-01-30 15:48:41'),
(21, '109', '49.36.168.243', '2023-01-30 18:49:40', '2023-01-30 18:49:40'),
(22, '110', '49.36.168.243', '2023-02-01 14:00:45', '2023-02-01 14:00:45'),
(23, '111', '49.36.168.243', '2023-02-01 14:01:42', '2023-02-01 14:01:42'),
(24, '112', '49.36.168.243', '2023-02-01 14:05:05', '2023-02-01 14:05:05'),
(25, '112', '49.36.168.243', '2023-02-01 22:38:22', '2023-02-01 22:38:22'),
(26, '112', '49.36.168.243', '2023-02-02 06:44:44', '2023-02-02 06:44:44'),
(27, '109', '49.36.168.243', '2023-02-02 09:43:57', '2023-02-02 09:43:57'),
(28, '111', '49.36.168.243', '2023-02-02 09:44:22', '2023-02-02 09:44:22'),
(29, '112', '49.36.168.243', '2023-02-02 09:45:27', '2023-02-02 09:45:27'),
(30, '113', '49.36.168.243', '2023-02-02 09:49:59', '2023-02-02 09:49:59'),
(31, '109', '49.36.168.243', '2023-02-02 09:55:07', '2023-02-02 09:55:07'),
(32, '109', '49.36.168.243', '2023-02-02 15:23:08', '2023-02-02 15:23:08'),
(33, '109', '49.36.168.243', '2023-02-02 18:41:20', '2023-02-02 18:41:20'),
(34, '109', '49.36.168.243', '2023-02-02 20:02:17', '2023-02-02 20:02:17'),
(35, '110', '49.36.168.243', '2023-02-03 05:39:27', '2023-02-03 05:39:27'),
(36, '109', '49.36.168.243', '2023-02-03 07:45:37', '2023-02-03 07:45:37'),
(37, '109', '49.36.168.243', '2023-02-03 14:49:35', '2023-02-03 14:49:35'),
(38, '109', '49.36.168.243', '2023-02-05 15:48:32', '2023-02-05 15:48:32'),
(39, '109', '49.36.168.243', '2023-02-05 15:49:33', '2023-02-05 15:49:33'),
(40, '109', '49.36.168.243', '2023-02-06 12:42:24', '2023-02-06 12:42:24'),
(41, '109', '49.36.168.243', '2023-02-07 06:23:09', '2023-02-07 06:23:09'),
(42, '109', '2405:201:600f:60c2:20bc:938e:92f:31e3', '2023-02-07 10:55:36', '2023-02-07 10:55:36'),
(43, '109', '2405:201:600f:60c2:e923:d12b:a7ed:6373', '2023-02-07 15:55:42', '2023-02-07 15:55:42'),
(44, '109', '2405:201:600f:60c2:e923:d12b:a7ed:6373', '2023-02-07 22:03:40', '2023-02-07 22:03:40'),
(45, '109', '2405:201:600f:60c2:a5b9:2046:fe7:24d1', '2023-02-08 08:49:02', '2023-02-08 08:49:02'),
(46, '105', '2405:201:600f:60c2:48e1:b113:ae10:7166', '2023-02-08 10:57:27', '2023-02-08 10:57:27'),
(47, '113', '2405:201:600f:60c2:48e1:b113:ae10:7166', '2023-02-08 10:57:50', '2023-02-08 10:57:50'),
(48, '109', '2405:201:600f:60c2:48e1:b113:ae10:7166', '2023-02-08 10:58:05', '2023-02-08 10:58:05'),
(49, '105', '2405:201:600f:60c2:48e1:b113:ae10:7166', '2023-02-08 10:58:31', '2023-02-08 10:58:31'),
(50, '113', '2405:201:600f:60c2:4816:f65a:dc3c:1265', '2023-02-08 14:19:19', '2023-02-08 14:19:19'),
(51, '109', '2405:201:600f:60c2:4816:f65a:dc3c:1265', '2023-02-08 14:19:35', '2023-02-08 14:19:35'),
(52, '105', '2405:201:600f:60c2:4816:f65a:dc3c:1265', '2023-02-08 14:28:18', '2023-02-08 14:28:18'),
(53, '109', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-10 11:18:37', '2023-02-10 11:18:37'),
(54, '114', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-10 11:19:36', '2023-02-10 11:19:36'),
(55, '111', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-10 11:43:59', '2023-02-10 11:43:59'),
(56, '103', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 12:15:33', '2023-02-11 12:15:33'),
(57, '105', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 12:15:48', '2023-02-11 12:15:48'),
(58, '103', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 12:44:15', '2023-02-11 12:44:15'),
(59, '103', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 13:29:17', '2023-02-11 13:29:17'),
(60, '103', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 13:37:15', '2023-02-11 13:37:15'),
(61, '110', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 21:49:23', '2023-02-11 21:49:23'),
(62, '110', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 21:56:37', '2023-02-11 21:56:37'),
(63, '103', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 22:11:22', '2023-02-11 22:11:22'),
(64, '111', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 22:11:38', '2023-02-11 22:11:38'),
(65, '109', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-11 22:26:37', '2023-02-11 22:26:37'),
(66, '109', '2405:201:600f:60c2:f418:316c:2b6e:8f9a', '2023-02-13 12:01:27', '2023-02-13 12:01:27'),
(67, '109', '2405:201:600f:60c2:804:84d0:9e00:49a4', '2023-02-14 22:11:28', '2023-02-14 22:11:28'),
(68, '109', '2405:201:600f:60c2:804:84d0:9e00:49a4', '2023-02-15 07:53:40', '2023-02-15 07:53:40'),
(69, '109', '2405:201:600f:60c2:b001:d3c8:743f:6ca', '2023-02-16 19:21:33', '2023-02-16 19:21:33'),
(70, '109', '2405:201:600f:60c2:1d3b:46c1:b541:77db', '2023-02-18 23:11:09', '2023-02-18 23:11:09'),
(71, '103', '2405:201:600f:60c2:f52f:a444:af66:e656', '2023-02-19 08:13:50', '2023-02-19 08:13:50'),
(72, '109', '2405:201:600f:60c2:f52f:a444:af66:e656', '2023-02-19 18:59:13', '2023-02-19 18:59:13'),
(73, '109', '2405:201:600f:60c2:1013:a344:41ed:577f', '2023-02-20 18:12:03', '2023-02-20 18:12:03'),
(74, '109', '2405:201:600f:60c2:1013:a344:41ed:577f', '2023-02-20 20:02:39', '2023-02-20 20:02:39'),
(75, '109', '2405:201:600f:60c2:1013:a344:41ed:577f', '2023-02-21 15:41:02', '2023-02-21 15:41:02'),
(76, '109', '2405:201:600f:60c2:218a:edb3:9fd5:fcf7', '2023-02-21 17:16:34', '2023-02-21 17:16:34'),
(77, '109', '2405:201:600f:60c2:1013:a344:41ed:577f', '2023-02-21 21:25:20', '2023-02-21 21:25:20'),
(78, '113', '2405:201:600f:60c2:bd83:7bd1:9aa9:3b73', '2023-02-22 11:11:10', '2023-02-22 11:11:10'),
(79, '109', '2405:201:600f:60c2:bd83:7bd1:9aa9:3b73', '2023-02-22 11:11:26', '2023-02-22 11:11:26'),
(80, '105', '2405:201:600f:60c2:bd83:7bd1:9aa9:3b73', '2023-02-22 11:57:08', '2023-02-22 11:57:08'),
(81, '113', '2405:201:600f:60c2:bd83:7bd1:9aa9:3b73', '2023-02-22 13:01:50', '2023-02-22 13:01:50'),
(82, '115', '2405:201:600f:60c2:bd83:7bd1:9aa9:3b73', '2023-02-22 13:21:04', '2023-02-22 13:21:04'),
(83, '109', '2405:201:600f:60c2:6ce3:b3ea:efc7:245e', '2023-02-22 20:35:24', '2023-02-22 20:35:24'),
(84, '109', '2405:201:600f:60c2:e842:4c37:8237:f906', '2023-02-23 18:39:05', '2023-02-23 18:39:05'),
(85, '109', '2405:201:600f:60c2:e842:4c37:8237:f906', '2023-02-23 21:16:36', '2023-02-23 21:16:36'),
(86, '109', '2405:201:600f:60c2:856f:6e26:7f8a:dbd3', '2023-02-24 10:54:31', '2023-02-24 10:54:31'),
(87, '109', '2405:201:600f:60c2:39e6:bcd4:8eef:83c2', '2023-02-27 09:08:11', '2023-02-27 09:08:11'),
(88, '109', '2405:201:600f:60c2:71fd:6e5c:bccb:8e5d', '2023-02-27 20:21:03', '2023-02-27 20:21:03'),
(89, '109', '2405:201:600f:60c2:d8f3:a724:ce7d:d9cb', '2023-02-28 22:23:18', '2023-02-28 22:23:18'),
(90, '109', '2405:201:600f:60c2:81b4:20f2:216f:7144', '2023-03-03 22:58:08', '2023-03-03 22:58:08'),
(91, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-04 23:22:39', '2023-03-04 23:22:39'),
(92, '116', '2405:201:600f:60c2:d62:4bd0:3b57:6b58', '2023-03-05 09:27:45', '2023-03-05 09:27:45'),
(93, '109', '49.36.168.243', '2023-03-05 09:29:08', '2023-03-05 09:29:08'),
(94, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-05 20:10:23', '2023-03-05 20:10:23'),
(95, '110', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-05 23:10:04', '2023-03-05 23:10:04'),
(96, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-05 23:10:15', '2023-03-05 23:10:15'),
(97, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-06 13:29:52', '2023-03-06 13:29:52'),
(98, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-06 15:30:47', '2023-03-06 15:30:47'),
(99, '117', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-06 15:50:03', '2023-03-06 15:50:03'),
(100, '111', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-06 15:57:17', '2023-03-06 15:57:17'),
(101, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-06 15:58:23', '2023-03-06 15:58:23'),
(102, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-07 21:44:18', '2023-03-07 21:44:18'),
(103, '109', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-08 15:38:38', '2023-03-08 15:38:38'),
(104, '111', '2405:201:600f:60c2:f189:a06e:e73c:1630', '2023-03-08 19:07:11', '2023-03-08 19:07:11'),
(105, '109', '2405:201:600f:60c2:513b:1eea:4ba6:b076', '2023-03-10 08:13:58', '2023-03-10 08:13:58'),
(106, '109', '2405:201:600f:60c2:d2d:9149:21b4:5b5a', '2023-03-10 20:06:26', '2023-03-10 20:06:26'),
(107, '110', '2405:201:600f:60c2:65c8:2fb8:2680:c673', '2023-03-17 09:46:31', '2023-03-17 09:46:31'),
(108, '110', '2405:201:600f:60c2:65c8:2fb8:2680:c673', '2023-03-17 09:56:13', '2023-03-17 09:56:13'),
(109, '109', '2405:201:600f:60c2:65c8:2fb8:2680:c673', '2023-03-17 09:56:30', '2023-03-17 09:56:30'),
(110, '109', '2405:201:600f:60c2:9830:dd9b:de9a:64e1', '2023-03-17 18:20:44', '2023-03-17 18:20:44'),
(111, '109', '2405:201:600f:60c2:9830:dd9b:de9a:64e1', '2023-03-17 20:53:12', '2023-03-17 20:53:12'),
(112, '109', '2405:201:600f:60c2:f577:69a:bd71:f49e', '2023-03-18 06:24:53', '2023-03-18 06:24:53'),
(113, '109', '2405:201:600f:60c2:a848:e92d:2193:879c', '2023-03-18 14:44:46', '2023-03-18 14:44:46'),
(114, '109', '2405:201:600f:60c2:2887:67b5:5df:e2d6', '2023-03-19 12:58:44', '2023-03-19 12:58:44'),
(115, '109', '2405:201:600f:60c2:2887:67b5:5df:e2d6', '2023-03-19 13:00:13', '2023-03-19 13:00:13'),
(116, '109', '2409:4081:ad0d:a356::368a:4210', '2023-03-19 13:52:54', '2023-03-19 13:52:54'),
(117, '109', '2405:201:600f:60c2:adc3:19ec:e363:11c3', '2023-03-20 14:54:40', '2023-03-20 14:54:40'),
(118, '112', '2405:201:600f:60c2:adc3:19ec:e363:11c3', '2023-03-20 15:00:51', '2023-03-20 15:00:51'),
(119, '112', '2405:201:600f:60c2:adc3:19ec:e363:11c3', '2023-03-20 15:01:04', '2023-03-20 15:01:04'),
(120, '112', '2405:201:600f:60c2:adc3:19ec:e363:11c3', '2023-03-20 15:01:44', '2023-03-20 15:01:44'),
(121, '112', '2405:201:600f:60c2:adc3:19ec:e363:11c3', '2023-03-20 15:09:21', '2023-03-20 15:09:21'),
(122, '112', '2405:201:600f:60c2:adc3:19ec:e363:11c3', '2023-03-20 15:18:55', '2023-03-20 15:18:55'),
(123, '109', '2405:201:600f:60c2:adc3:19ec:e363:11c3', '2023-03-20 15:19:22', '2023-03-20 15:19:22'),
(124, '109', '2405:201:600f:60c2:2537:619:6931:920', '2023-03-21 07:42:04', '2023-03-21 07:42:04'),
(125, '109', '2405:201:600f:60c2:2900:b6db:a8f0:ee5', '2023-03-21 12:56:34', '2023-03-21 12:56:34'),
(126, '109', '2405:201:600f:60c2:2533:cfe4:dacd:ff3e', '2023-03-22 08:26:31', '2023-03-22 08:26:31'),
(127, '109', '2405:201:600f:60c2:14ab:4630:87c4:59bb', '2023-03-25 18:24:45', '2023-03-25 18:24:45'),
(128, '103', '2405:201:600f:60c2:545a:f259:197d:7c61', '2023-03-25 20:29:12', '2023-03-25 20:29:12'),
(129, '109', '2405:201:600f:60c2:545a:f259:197d:7c61', '2023-03-25 22:01:24', '2023-03-25 22:01:24'),
(130, '110', '2405:201:600f:60c2:b492:2661:3c86:bf35', '2023-03-27 16:57:26', '2023-03-27 16:57:26'),
(131, '109', '2405:201:600f:60c2:b492:2661:3c86:bf35', '2023-03-27 16:57:38', '2023-03-27 16:57:38'),
(132, '109', '2405:201:600f:60c2:d8b0:bbbf:47a:8fe3', '2023-03-29 14:16:07', '2023-03-29 14:16:07'),
(133, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 19:40:54', '2023-03-29 19:40:54'),
(134, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 19:48:15', '2023-03-29 19:48:15'),
(135, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 19:50:13', '2023-03-29 19:50:13'),
(136, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 20:04:49', '2023-03-29 20:04:49'),
(137, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 20:05:01', '2023-03-29 20:05:01'),
(138, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 20:16:31', '2023-03-29 20:16:31'),
(139, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 20:21:52', '2023-03-29 20:21:52'),
(140, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 21:17:28', '2023-03-29 21:17:28'),
(141, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 21:20:39', '2023-03-29 21:20:39'),
(142, '118', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 21:28:09', '2023-03-29 21:28:09'),
(143, '118', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 21:29:14', '2023-03-29 21:29:14'),
(144, '119', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 21:29:41', '2023-03-29 21:29:41'),
(145, '109', '2405:201:600f:60c2:39ce:47eb:e4c5:3909', '2023-03-29 21:30:07', '2023-03-29 21:30:07'),
(146, '120', '2405:201:600f:60c2:6143:f3f5:7cb6:32bd', '2023-03-30 14:24:31', '2023-03-30 14:24:31'),
(147, '109', '2405:201:600f:60c2:7c5d:70e5:2aca:ba19', '2023-03-31 08:57:51', '2023-03-31 08:57:51'),
(148, '121', '2405:201:600f:60c2:7c5d:70e5:2aca:ba19', '2023-03-31 09:01:32', '2023-03-31 09:01:32'),
(149, '109', '2405:201:600f:60c2:7c5d:70e5:2aca:ba19', '2023-03-31 09:18:21', '2023-03-31 09:18:21'),
(150, '109', '2405:201:600f:60c2:ac8a:d843:588c:7dd', '2023-03-31 13:57:51', '2023-03-31 13:57:51'),
(151, '109', '2405:201:600f:60c2:ac8a:d843:588c:7dd', '2023-03-31 14:01:02', '2023-03-31 14:01:02'),
(152, '109', '2405:201:600f:60c2:21dd:5245:d1:a1cd', '2023-03-31 16:17:02', '2023-03-31 16:17:02'),
(153, '109', '2405:201:600f:60c2:21dd:5245:d1:a1cd', '2023-03-31 16:20:26', '2023-03-31 16:20:26'),
(154, '109', '2405:201:600f:60c2:21dd:5245:d1:a1cd', '2023-03-31 16:24:41', '2023-03-31 16:24:41'),
(155, '109', '2405:201:600f:60c2:21dd:5245:d1:a1cd', '2023-03-31 16:26:14', '2023-03-31 16:26:14'),
(156, '109', '2405:201:600f:60c2:21dd:5245:d1:a1cd', '2023-03-31 16:27:25', '2023-03-31 16:27:25'),
(157, '109', '2405:201:600f:60c2:fc79:dac2:ddda:6d41', '2023-03-31 22:08:37', '2023-03-31 22:08:37'),
(158, '109', '2405:201:600f:60c2:dde8:4424:ca58:ede6', '2023-04-01 06:40:57', '2023-04-01 06:40:57'),
(159, '109', '2405:201:600f:60c2:dde8:4424:ca58:ede6', '2023-04-01 06:44:29', '2023-04-01 06:44:29'),
(160, '109', '2405:201:600f:60c2:7853:4627:14a0:3e37', '2023-04-01 12:17:49', '2023-04-01 12:17:49'),
(161, '109', '2405:201:600f:60c2:ccd9:bb69:4cd:aa0', '2023-04-01 17:36:57', '2023-04-01 17:36:57'),
(162, '103', '2405:201:600f:60c2:75bf:db05:b311:f5e8', '2023-04-02 20:07:25', '2023-04-02 20:07:25'),
(163, '109', '2405:201:600f:60c2:c536:833e:4764:8287', '2023-04-03 04:49:03', '2023-04-03 04:49:03'),
(164, '122', '2405:201:600f:60c2:c844:cac6:612e:3715', '2023-04-21 13:32:01', '2023-04-21 13:32:01'),
(165, '103', '2405:201:600f:60c2:c844:cac6:612e:3715', '2023-04-21 13:32:25', '2023-04-21 13:32:25'),
(166, '105', '2405:201:600f:60c2:c844:cac6:612e:3715', '2023-04-21 13:44:35', '2023-04-21 13:44:35'),
(167, '109', '2405:201:600f:60c2:c844:cac6:612e:3715', '2023-04-21 13:45:22', '2023-04-21 13:45:22'),
(168, '103', '2405:201:600f:60aa:7055:c425:abd6:fbbd', '2023-04-29 05:22:46', '2023-04-29 05:22:46'),
(169, '109', '2405:201:600f:60aa:7055:c425:abd6:fbbd', '2023-04-29 05:23:47', '2023-04-29 05:23:47'),
(170, '109', '49.36.171.204', '2023-06-04 10:54:33', '2023-06-04 10:54:33'),
(171, '109', '2405:201:600f:6052:813b:426f:5a01:93fd', '2023-06-18 08:46:35', '2023-06-18 08:46:35'),
(172, '109', '2405:201:600f:6052:310a:7034:11e7:aa3f', '2023-06-18 13:02:48', '2023-06-18 13:02:48'),
(173, '109', '49.36.171.251', '2023-07-07 14:37:01', '2023-07-07 14:37:01'),
(174, '109', '49.36.171.251', '2023-07-07 19:41:54', '2023-07-07 19:41:54'),
(175, '122', '49.36.171.251', '2023-07-08 04:36:01', '2023-07-08 04:36:01'),
(176, '109', '49.36.171.251', '2023-07-08 10:59:08', '2023-07-08 10:59:08'),
(177, '109', '49.36.171.251', '2023-07-08 13:56:13', '2023-07-08 13:56:13'),
(178, '109', '49.36.171.251', '2023-07-09 14:05:42', '2023-07-09 14:05:42'),
(179, '109', '49.36.171.251', '2023-07-10 09:49:50', '2023-07-10 09:49:50'),
(180, '109', '49.36.171.251', '2023-07-10 18:42:40', '2023-07-10 18:42:40'),
(181, '109', '49.36.171.251', '2023-07-11 08:36:54', '2023-07-11 08:36:54'),
(182, '109', '49.36.171.251', '2023-07-11 13:54:31', '2023-07-11 13:54:31'),
(183, '109', '49.36.171.251', '2023-07-11 16:28:22', '2023-07-11 16:28:22'),
(184, '109', '49.36.169.21', '2023-07-13 10:00:56', '2023-07-13 10:00:56'),
(185, '109', '49.36.169.21', '2023-07-13 17:34:36', '2023-07-13 17:34:36'),
(186, '109', '49.36.169.21', '2023-07-13 20:32:41', '2023-07-13 20:32:41'),
(187, '109', '49.36.169.21', '2023-07-14 09:47:42', '2023-07-14 09:47:42'),
(188, '109', '49.36.169.21', '2023-07-15 08:42:23', '2023-07-15 08:42:23'),
(189, '109', '49.36.169.21', '2023-07-16 11:22:59', '2023-07-16 11:22:59'),
(190, '109', '49.36.169.21', '2023-07-17 17:04:32', '2023-07-17 17:04:32'),
(191, '109', '49.36.169.21', '2023-07-18 09:05:04', '2023-07-18 09:05:04'),
(192, '109', '49.36.169.21', '2023-07-18 10:45:16', '2023-07-18 10:45:16'),
(193, '109', '49.36.169.21', '2023-07-18 15:32:53', '2023-07-18 15:32:53'),
(194, '109', '49.36.169.21', '2023-07-19 10:28:54', '2023-07-19 10:28:54'),
(195, '109', '49.36.169.21', '2023-07-19 12:41:10', '2023-07-19 12:41:10'),
(196, '109', '49.36.169.21', '2023-07-19 14:32:06', '2023-07-19 14:32:06'),
(197, '109', '49.36.169.21', '2023-07-19 14:34:46', '2023-07-19 14:34:46'),
(198, '109', '49.36.169.21', '2023-07-19 14:35:27', '2023-07-19 14:35:27'),
(199, '109', '49.36.169.21', '2023-07-19 14:43:29', '2023-07-19 14:43:29'),
(200, '109', '49.36.169.21', '2023-07-19 14:45:52', '2023-07-19 14:45:52'),
(201, '109', '49.36.169.21', '2023-07-19 14:53:48', '2023-07-19 14:53:48'),
(202, '109', '49.36.169.21', '2023-07-19 15:37:39', '2023-07-19 15:37:39'),
(203, '109', '49.36.169.21', '2023-07-19 15:38:02', '2023-07-19 15:38:02'),
(204, '109', '49.36.169.21', '2023-07-21 06:57:20', '2023-07-21 06:57:20'),
(205, '109', '49.36.169.21', '2023-07-23 20:04:01', '2023-07-23 20:04:01'),
(206, '109', '49.36.169.21', '2023-07-24 11:34:17', '2023-07-24 11:34:17'),
(207, '109', '49.36.169.21', '2023-07-24 16:38:39', '2023-07-24 16:38:39'),
(208, '109', '49.36.169.21', '2023-07-25 09:33:08', '2023-07-25 09:33:08'),
(209, '109', '49.36.169.21', '2023-07-25 14:08:32', '2023-07-25 14:08:32'),
(210, '109', '49.36.169.21', '2023-07-26 10:06:44', '2023-07-26 10:06:44'),
(211, '109', '49.36.169.21', '2023-07-27 11:08:52', '2023-07-27 11:08:52'),
(212, '109', '49.36.169.21', '2023-07-28 11:07:57', '2023-07-28 11:07:57'),
(213, '109', '49.36.169.21', '2023-07-29 14:59:03', '2023-07-29 14:59:03'),
(214, '109', '49.36.169.21', '2023-07-30 10:43:38', '2023-07-30 10:43:38'),
(215, '109', '49.36.169.21', '2023-07-31 19:55:26', '2023-07-31 19:55:26'),
(216, '109', '49.36.169.21', '2023-08-01 06:29:12', '2023-08-01 06:29:12'),
(217, '109', '49.36.169.21', '2023-08-01 18:36:00', '2023-08-01 18:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_22_115056_create_permission_tables', 2),
(7, '2023_01_22_135424_create_notifications_table', 3),
(9, '2023_01_22_143512_create_login_histories_table', 4),
(10, '2023_01_30_113220_create_tickets_table', 5),
(11, '2023_02_06_075400_create_tag_tables', 6),
(12, '2023_02_07_053641_create_services_table', 7),
(13, '2023_02_07_053722_create_orders_table', 7),
(14, '2023_02_07_084122_create_order__messages_table', 8),
(16, '2023_02_07_113716_create_order_services_table', 9),
(17, '2023_02_11_055713_create_o_t_p_s_table', 10),
(18, '2023_02_14_171319_create_custom_fields_table', 11),
(19, '2023_02_23_110237_create_pages_table', 12),
(20, '2023_02_23_110304_create_blogs_table', 12),
(21, '2023_02_23_135514_create_faqs_table', 13),
(22, '2023_03_04_182344_create_products_table', 14),
(23, '2023_03_07_175605_create_leads_table', 15),
(24, '2023_07_25_062010_create_posts_table', 16),
(26, '2023_07_25_062529_create_bulk_messages_table', 17),
(27, '2023_07_25_062628_create_teams_table', 17),
(28, '2023_07_25_062501_create_testimonials_table', 18),
(29, '2023_07_27_065939_create_vendors_table', 19),
(30, '2023_07_28_110100_create_subscriptions_table', 20),
(31, '2023_07_28_143551_create_subscribers_table', 21),
(32, '2023_08_01_032005_create_views_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 102),
(1, 'App\\Models\\User', 106),
(1, 'App\\Models\\User', 109),
(5, 'App\\Models\\User', 105),
(5, 'App\\Models\\User', 107),
(5, 'App\\Models\\User', 108),
(5, 'App\\Models\\User', 110),
(5, 'App\\Models\\User', 111),
(5, 'App\\Models\\User', 112),
(5, 'App\\Models\\User', 113),
(5, 'App\\Models\\User', 114),
(5, 'App\\Models\\User', 115),
(5, 'App\\Models\\User', 116),
(5, 'App\\Models\\User', 117),
(6, 'App\\Models\\User', 123);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('14004b95-3a77-448e-9154-11d306401e1d', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-24 16:38:39', '2023-07-24 16:38:39'),
('46be46d9-a656-4585-8d26-200c6eebfdce', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-29 14:59:04', '2023-07-29 14:59:04'),
('54e27c8a-9054-4101-9fe9-ffdeadf57a9a', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-08-01 06:29:12', '2023-08-01 06:29:12'),
('63b5d316-7bca-438e-8be0-a39dae364065', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-27 11:08:52', '2023-07-27 11:08:52'),
('69914a04-8b73-4170-9660-790d1cc4b006', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-24 11:34:18', '2023-07-24 11:34:18'),
('892c290f-162d-4bb8-9639-339eddc4b7a0', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-26 10:06:45', '2023-07-26 10:06:45'),
('9bd5a13d-d548-4a82-bf94-4593be52d994', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-25 09:33:09', '2023-07-25 09:33:09'),
('b2c3a526-dd9b-41a7-8b01-f8e4866bb7c3', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-19 15:37:39', '2023-07-19 15:37:39'),
('c6fcda9e-f165-4446-84e9-bde8cebc279b', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-28 11:07:57', '2023-07-28 11:07:57'),
('c807f429-287b-482d-b7b8-663ed6ef7770', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-21 06:57:20', '2023-07-21 06:57:20'),
('ca2cb923-975b-463c-b350-a2d98b7a1632', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-23 20:04:02', '2023-07-23 20:04:02'),
('ea92178c-f449-48c4-944f-39ee0e7695ba', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-19 15:38:02', '2023-07-19 15:38:02'),
('ec8b4ea2-92e1-4cb3-9679-54005a8084e4', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-30 10:43:38', '2023-07-30 10:43:38'),
('f4f8d67a-9c48-4fd1-b129-cef0d8336ef2', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-08-01 18:36:00', '2023-08-01 18:36:00'),
('fc711195-d037-49a0-8cb1-4c3e4bd8632f', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-25 14:08:32', '2023-07-25 14:08:32'),
('fcce9ad6-d870-410d-8957-b938b0adae39', 'App\\Notifications\\LoginNotifications', 'App\\Models\\User', 109, '{\"message\":\"Login was successfully from the IP address 49.36.169.21\"}', NULL, '2023-07-31 19:55:26', '2023-07-31 19:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`id`, `code`, `purpose`, `user_id`, `created_at`, `updated_at`) VALUES
(116, '223322', 'Login', 109, '2023-07-19 15:37:18', '2023-07-19 15:37:18'),
(117, '223322', 'Login', 109, '2023-07-19 15:37:57', '2023-07-19 15:37:57'),
(118, '223322', 'Login', 109, '2023-07-21 06:57:15', '2023-07-21 06:57:15'),
(119, '223322', 'Login', 109, '2023-07-22 17:25:54', '2023-07-22 17:25:54'),
(120, '223322', 'Login', 109, '2023-07-23 20:03:56', '2023-07-23 20:03:56'),
(121, '223322', 'Login', 109, '2023-07-24 11:34:09', '2023-07-24 11:34:09'),
(122, '223322', 'Login', 109, '2023-07-24 16:35:42', '2023-07-24 16:35:42'),
(123, '223322', 'Login', 109, '2023-07-24 16:38:34', '2023-07-24 16:38:34'),
(124, '223322', 'Login', 109, '2023-07-25 09:33:04', '2023-07-25 09:33:04'),
(125, '223322', 'Login', 109, '2023-07-25 14:08:16', '2023-07-25 14:08:16'),
(126, '223322', 'Login', 109, '2023-07-26 10:06:39', '2023-07-26 10:06:39'),
(127, '223322', 'Login', 109, '2023-07-27 11:08:46', '2023-07-27 11:08:46'),
(128, '223322', 'Login', 109, '2023-07-28 11:07:52', '2023-07-28 11:07:52'),
(129, '223322', 'Login', 109, '2023-07-29 14:58:57', '2023-07-29 14:58:57'),
(130, '223322', 'Login', 109, '2023-07-30 10:43:31', '2023-07-30 10:43:31'),
(131, '223322', 'Login', 109, '2023-07-31 19:30:25', '2023-07-31 19:30:25'),
(132, '223322', 'Login', 109, '2023-08-01 06:29:04', '2023-08-01 06:29:04'),
(133, '223322', 'Login', 109, '2023-08-01 18:35:55', '2023-08-01 18:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` varchar(200) DEFAULT 'no-image.png',
  `status` varchar(20) NOT NULL DEFAULT 'draft',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `thumbnail`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(11, 'Terms', 'terms', '<p>Coming soon .. Contact to system admin for the same</p>', NULL, 'draft', '109', '2023-03-31 09:39:10', '2023-03-31 09:39:10'),
(12, 'About Us', 'about-us', '<p>We are a real estate company that helps you find your dream home. Whether you are looking for a cozy apartment, a spacious villa, or a modern office, we have the right property for you. We have been in the business for over 10 years, and we have a network of trusted partners and clients across the country. We have a team of experienced and professional agents who will guide you through every step of the process. We value your time, budget, and preferences, and we work hard to meet your expectations.</p><p>Our mission is to provide you with the best service and the best results. We listen to your needs and wants, and we tailor our search to match them. We use the latest technology and market data to find the most suitable properties for you. We negotiate on your behalf and handle all the paperwork and legal issues. We also offer after-sales support and advice to ensure your satisfaction.</p><p>Our vision is to be the leading real estate company in the region. We aim to build long-term relationships with our clients and partners, and to contribute to the development and growth of our communities. We strive to uphold the highest standards of ethics, professionalism, and excellence in our work. We are passionate about what we do, and we love to see our clients happy.</p><p>Our values are honesty, integrity, respect, and trust. We believe that these are the foundations of any successful business and any lasting relationship. We treat our clients and partners with respect and honesty, and we expect the same from them. We act with integrity and transparency in all our dealings, and we honor our commitments and promises. We trust our team members and empower them to make decisions and take actions that benefit our clients and our company.</p><p>If you are looking for a real estate company that cares about you and your goals, look no further than us. Contact us today and let us help you turn your vision into reality.</p>', NULL, 'draft', '109', '2023-07-15 14:47:19', '2023-07-18 10:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sakshk2019@gmail.com', '$2y$10$HlyoMOWeiEv6vnDgr3lfvOnYlsLwXxVAoMFPGILoDuqghw0BKYW3a', '2023-01-23 05:00:05'),
('susheel2339@gmail.com', '$2y$10$8rhPVFoGmRfOues/7d8jh.vJ/JgnIjsOtifP.Gxmc7GNB3v0lMyLy', '2023-01-24 17:19:42'),
('susheel3010@gmail.com', '$2y$10$QmaDiZk2Lp6cwcbu7a7xdOdMzzXus6kShZr4GG6ofQq1vrSB90Z6K', '2023-02-01 14:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(8, 'Property Management', 'web', '2023-07-23 20:51:56', '2023-07-23 20:51:56'),
(10, 'Manage Contents', 'web', '2023-07-23 20:52:47', '2023-07-23 20:52:47'),
(11, 'Manage System Settings', 'web', '2023-07-23 20:52:57', '2023-07-23 20:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `tags` varchar(300) DEFAULT NULL,
  `thumbnail` text DEFAULT 'no-image.png',
  `status` varchar(300) NOT NULL DEFAULT 'Publish',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `tags`, `thumbnail`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdfdsfsdfdsf', '<p>dfsdfsdfsdf</p>', '[{\"value\":\"fsd dsfsdf\"},{\"value\":\"sdfsd sdfsd\"},{\"value\":\"sdf\"},{\"value\":\"s\"},{\"value\":\"ss\"}]', 'no-image.png', 'Published', '109', '2023-07-25 15:52:17', '2023-07-25 15:53:20'),
(2, 'sdfsdf', '<p>sdfdsfrrrr</p>', '[{\"value\":\"sd323\"},{\"value\":\"23\"},{\"value\":\"3\"},{\"value\":\"333\"}]', 'thumbnail/1690286316__644a2763867c3_sw_tiraz-aljada-sharjah-arada-1.jpg', 'Published', '109', '2023-07-25 15:53:33', '2023-07-25 15:58:36'),
(3, '232title', '<p>232content</p>', '232tags', 'no-image.png', 'Publish', '109', '2023-07-29 16:59:39', '2023-07-29 16:59:39'),
(4, '4444title', '<p>4444content</p>', '4444tags', 'no-image.png', 'Publish', '109', '2023-07-29 16:59:49', '2023-07-29 16:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aminities` varchar(1000) DEFAULT NULL,
  `project_name` varchar(1000) DEFAULT NULL,
  `property_thumbnail_url` varchar(1000) DEFAULT NULL,
  `project_details` text DEFAULT NULL,
  `bedrooms` varchar(255) DEFAULT NULL,
  `starting_price` varchar(255) DEFAULT NULL,
  `tenure` varchar(255) DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `size_from` varchar(255) DEFAULT NULL,
  `completion` varchar(255) DEFAULT NULL,
  `interiors` varchar(255) DEFAULT NULL,
  `payment_plan_short` varchar(255) DEFAULT NULL,
  `payment_plan_details` text DEFAULT NULL,
  `down_payment` varchar(255) DEFAULT NULL,
  `connectivity` text DEFAULT NULL,
  `unit_details` varchar(255) DEFAULT NULL,
  `floor_details` varchar(255) DEFAULT NULL,
  `amenities` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location_gps` varchar(255) DEFAULT NULL,
  `latitude` varchar(300) DEFAULT NULL,
  `longitude` varchar(300) DEFAULT NULL,
  `garage` varchar(10) DEFAULT NULL,
  `bathrooms` varchar(10) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `video_url` varchar(300) DEFAULT NULL,
  `brochure_url` varchar(300) DEFAULT NULL,
  `broucher` varchar(255) DEFAULT NULL,
  `connectivities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`connectivities`)),
  `broker_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `developer` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `project_tags` varchar(300) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Publish',
  `gallery_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery_url`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `aminities`, `project_name`, `property_thumbnail_url`, `project_details`, `bedrooms`, `starting_price`, `tenure`, `property_type`, `size_from`, `completion`, `interiors`, `payment_plan_short`, `payment_plan_details`, `down_payment`, `connectivity`, `unit_details`, `floor_details`, `amenities`, `location`, `address`, `location_gps`, `latitude`, `longitude`, `garage`, `bathrooms`, `gallery`, `video_url`, `brochure_url`, `broucher`, `connectivities`, `broker_id`, `user_id`, `developer`, `tags`, `project_tags`, `status`, `gallery_url`, `created_at`, `updated_at`) VALUES
(1, 'Children\'s Playground,Fitness Center,Swimming Pool,Yoga Area,Children Splash Pool,Games Table Zone', 'Elegance Tower', 'property_thumbnail/1690886622__643a7a11e79bb_sw_elegance-tower-downtown-dubai-1.jpeg', NULL, NULL, '{\"aed\":\"1790000\",\"usd\":\"487330.72\"}', 'Freehold', '[{\"value\":\"Apartment\"}]', 'Starting from 740 Sqft.', 'Q4 2026', 'Unfurnished', '80/20', '<figure class=\"table\"><table><tbody><tr><td><strong>Instalment</strong></td><td><strong>Payment</strong></td><td><strong>Milestone</strong></td></tr><tr><td>Down Payment</td><td>20%</td><td>On Booking</td></tr><tr><td>1st Instalment</td><td>5%</td><td>Within 3 months from booking date</td></tr><tr><td>2nd&nbsp;Instalment</td><td>5%</td><td>Within 6 months from booking date</td></tr><tr><td>3rd&nbsp;Instalment</td><td>5%</td><td>Within 9 months from booking date</td></tr><tr><td>4th&nbsp;Instalment</td><td>5%</td><td>Within 12 months from booking date</td></tr><tr><td>5th&nbsp;Instalment</td><td>4%</td><td>Within 15 months from booking date</td></tr><tr><td>6th&nbsp;Instalment</td><td>4%</td><td>Within 18 months from booking date</td></tr><tr><td>7th&nbsp;Instalment</td><td>4%</td><td>Within 21 months from booking date</td></tr><tr><td>8th&nbsp;Instalment</td><td>4%</td><td>Within 24 months from booking date</td></tr><tr><td>9th&nbsp;Instalment</td><td>4%</td><td>Within 27 months from booking date</td></tr><tr><td>10th&nbsp;Instalment</td><td>4%</td><td>Within 30 months from booking date</td></tr><tr><td>11th&nbsp;Instalment</td><td>4%</td><td>Within 33 months from booking date</td></tr><tr><td>12th&nbsp;Instalment</td><td>3%</td><td>Within 36 months from booking date</td></tr><tr><td>14th&nbsp;Instalment</td><td>3%</td><td>On 70% Completion</td></tr><tr><td>15th&nbsp;Instalment</td><td>3%</td><td>On 80% Completion</td></tr><tr><td>16th&nbsp;Instalment</td><td>3%</td><td>&nbsp;On 90% Completion</td></tr><tr><td>Final&nbsp;Instalment</td><td>20%</td><td>On Handover</td></tr></tbody></table></figure>', NULL, NULL, '1 & 2 Bedroom', NULL, NULL, 'Downtown', NULL, NULL, '25.197237', '55.28171', NULL, NULL, NULL, 'd2UpoP3zdU4', NULL, NULL, '[{\"name\":\"Airport\",\"distance\":\"10 Minute\"},{\"name\":\"burj-khalifa\",\"distance\":\"30 minute\"},{\"name\":\"palm-islands\",\"distance\":\"30 minute\"},{\"name\":\"School\",\"distance\":\"30 minute\"},{\"name\":\"Hospital\",\"distance\":\"25 Minute\"}]', '109', NULL, NULL, NULL, '', 'Publish', '[\"property_gallery\\/1690886516__643a7a11e7c95_sw_elegance-tower-downtown-dubai-2.jpeg\",\"property_gallery\\/1690886516__643a7a1c20389_sw_Elegance-min.jpg\",\"property_gallery\\/1690886522__643a7a11e7e19_sw_elegance-tower-downtown-dubai-3.jpeg\",\"property_gallery\\/1690886523__643a7a11e7f88_sw_elegance-tower-downtown-dubai-4.jpeg\",\"property_gallery\\/1690886525__643a7a11e79bb_sw_elegance-tower-downtown-dubai-1.jpeg\",\"property_gallery\\/1690886526__643a7a11e813e_sw_elegance-tower-downtown-dubai-5.jpeg\",\"property_gallery\\/1690886527__643a7a11e8273_sw_elegance-tower-downtown-dubai-6.jpeg\",\"property_gallery\\/1690886530__643d27e02155c_sw_the_paragon_by_igo_business_bay_dubai-1.jpg\",\"property_gallery\\/1690886612__Flag_of_Germany.png\",\"property_gallery\\/1690886615__6446217f64805_sw_CP-FERN-EXT-07.jpg\"]', '2023-08-01 14:11:28', '2023-08-01 14:43:42'),
(2, 'Day Care Centers,Children\'s Playground,Fitness Center,Swimming Pool,Yoga Area,24-hr Security', 'St Regis Residences', 'property_thumbnail/1690886007__6437e98d6901d_sw_st-regis-residences-dubai-2.jpg', NULL, NULL, '{\"aed\":\"2192888\",\"usd\":\"597017.71\"}', 'Freehold', '[{\"value\":\"Apartment\"}]', '791 - 1,410 Sqft', 'Q4 2026', 'Unfurnished', '70/30', '<p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td>10%</td><td>On Reservation</td></tr><tr><td>60%</td><td>During Construction</td></tr><tr><td>30%</td><td>On Completion</td></tr></tbody></table></figure><p>&nbsp;</p>', NULL, NULL, '1 to 2 Bedroom', NULL, NULL, 'Downtown', NULL, NULL, '25.1949651', '55.2526663', NULL, NULL, NULL, 'sREX_UObiDA', '', NULL, '[{\"name\":\"Airport\",\"distance\":\"15 Minute\"},{\"name\":\"burj-khalifa\",\"distance\":\"30 minute\"},{\"name\":\"palm-islands\",\"distance\":\"30 minute\"},{\"name\":\"School\",\"distance\":\"35 minutes\"}]', '109', NULL, NULL, NULL, '', 'Publish', '[\"property_gallery\\/1690885912__643a6c8ad0bde_sw_One-Zaabeel-20.jpg\",\"property_gallery\\/1690885916__6437e9a446254_sw_st-regis-residences-dubai-4.jpg\",\"property_gallery\\/1690885917__6437e9b303a8c_sw_st-regis-residences-dubai-7.jpg\",\"property_gallery\\/1690885919__6437e96c106a7_sw_st-regis-residences-dubai.jpg\",\"property_gallery\\/1690885921__6437e98d6901d_sw_st-regis-residences-dubai-2.jpg\",\"property_gallery\\/1690885922__6437e999a2c86_sw_st-regis-residences-dubai-3.jpg\",\"property_gallery\\/1690885923__6437e9843213e_sw_st-regis-residences-dubai-1.jpg\",\"property_gallery\\/1690885925__6437eb0db2b50_sw_st-regis-residences-dubai-9.jpg\",\"property_gallery\\/1690885926__6437eb1d756fb_sw_st-regis-residences-dubai-10.jpg\",\"property_gallery\\/1690885929__6437eb2773e9c_sw_st-regis-residences-dubai-11.jpg\",\"property_gallery\\/1690885940__6437eb026810d_sw_st-regis-residences-dubai-8.jpg\",\"property_gallery\\/1690885940__6437eb3462dba_sw_st-regis-residences-dubai-13.jpg\",\"property_gallery\\/1690885965__64535d0401038_sw_signature-mansions-jge-dubai-8.jpg\",\"property_gallery\\/1690886004__Flag_of_Germany.png\",\"property_gallery\\/1690886008__maxresdefault.jpg\"]', '2023-08-01 14:13:20', '2023-08-01 14:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-01-22 17:44:47', '2023-01-22 17:44:47'),
(5, 'customer', 'web', '2023-01-22 21:05:57', '2023-01-22 21:05:57'),
(6, 'Executive', 'web', '2023-07-23 20:53:36', '2023-07-23 20:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(8, 1),
(10, 1),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `calls` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `whatsapp`, `calls`, `status`, `created_at`, `updated_at`) VALUES
(1, 'susheel', 'susheel2339@gmail.com', '88503838383', '32423423432', NULL, '2023-07-28 18:44:02', '2023-07-28 18:44:02'),
(2, '234324', '32423', '23432', '423423423', NULL, '2023-07-28 18:44:14', '2023-07-28 18:44:14'),
(3, NULL, NULL, '88503838383', NULL, NULL, '2023-07-28 18:48:20', '2023-07-28 18:48:20'),
(4, NULL, NULL, '8850383838333', NULL, NULL, '2023-07-28 18:48:55', '2023-07-28 18:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `property_submission` varchar(255) DEFAULT NULL,
  `featured_property` varchar(255) DEFAULT NULL,
  `top_property` varchar(255) DEFAULT NULL,
  `urgent_property` varchar(255) DEFAULT NULL,
  `line_1` varchar(255) DEFAULT NULL,
  `line_2` varchar(255) DEFAULT NULL,
  `line_3` varchar(255) DEFAULT NULL,
  `line_4` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `amount`, `currency`, `property_submission`, `featured_property`, `top_property`, `urgent_property`, `line_1`, `line_2`, `line_3`, `line_4`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Free', '0', 'AED', '20', '0', '0', '0', 'Aminities', 'Nearest Location', 'Property Plan', 'Additional Information', '109', '2023-07-28 16:18:09', '2023-07-28 16:18:09'),
(3, 'Gold', '10', 'AED', '10', '1', '1', '1', 'Aminities', 'Nearest Location', 'Property Plan', 'Additional Information', '109', '2023-07-28 16:19:22', '2023-07-28 16:20:55'),
(4, 'Premium', '99', 'AED', '100', '10', '10', '10', 'Aminities', 'Nearest Location', 'Property Plan', 'Additional Information', '109', '2023-07-28 16:20:12', '2023-07-28 16:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_type` varchar(255) NOT NULL,
  `taggable_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`tag_id`, `taggable_type`, `taggable_id`) VALUES
(1, 'App\\Models\\User', 113),
(2, 'App\\Models\\User', 113),
(3, 'App\\Models\\User', 113),
(4, 'App\\Models\\User', 113),
(5, 'App\\Models\\User', 113),
(6, 'App\\Models\\User', 113),
(7, 'App\\Models\\User', 113),
(8, 'App\\Models\\User', 105),
(8, 'App\\Models\\User', 113),
(8, 'App\\Models\\User', 115),
(8, 'App\\Models\\User', 116),
(9, 'App\\Models\\User', 113),
(10, 'App\\Models\\User', 105),
(10, 'App\\Models\\User', 113),
(10, 'App\\Models\\User', 115),
(10, 'App\\Models\\User', 116),
(11, 'App\\Models\\User', 109),
(11, 'App\\Models\\User', 111),
(11, 'App\\Models\\User', 112),
(11, 'App\\Models\\User', 117),
(12, 'App\\Models\\User', 112),
(13, 'App\\Models\\User', 110),
(14, 'App\\Models\\User', 105),
(15, 'App\\Models\\User', 116),
(16, 'App\\Models\\User', 116),
(17, 'App\\Models\\User', 116),
(18, 'App\\Models\\User', 116),
(19, 'App\\Models\\User', 116),
(20, 'App\\Models\\User', 116),
(21, 'App\\Models\\User', 105),
(21, 'App\\Models\\User', 115),
(21, 'App\\Models\\User', 116),
(22, 'App\\Models\\User', 105),
(22, 'App\\Models\\User', 115),
(22, 'App\\Models\\User', 116),
(23, 'App\\Models\\User', 105),
(23, 'App\\Models\\User', 115),
(24, 'App\\Models\\User', 105),
(24, 'App\\Models\\User', 115),
(25, 'App\\Models\\User', 115),
(26, 'App\\Models\\User', 105),
(26, 'App\\Models\\User', 115),
(27, 'App\\Models\\User', 115),
(28, 'App\\Models\\User', 115),
(29, 'App\\Models\\User', 115),
(30, 'App\\Models\\User', 117);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `order_column` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `order_column`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"1234\"}', '{\"en\":\"1234\"}', NULL, 1, '2023-02-06 12:58:21', '2023-02-06 12:58:21'),
(2, '{\"en\":\"wewerew,33,3333,eeeee,222\"}', '{\"en\":\"wewerew333333eeeee222\"}', NULL, 2, '2023-02-06 12:58:41', '2023-02-06 12:58:41'),
(3, '{\"en\":\"wewerew\"}', '{\"en\":\"wewerew\"}', NULL, 3, '2023-02-06 13:01:34', '2023-02-06 13:01:34'),
(4, '{\"en\":\"33\"}', '{\"en\":\"33\"}', NULL, 4, '2023-02-06 13:01:34', '2023-02-06 13:01:34'),
(5, '{\"en\":\"3333\"}', '{\"en\":\"3333\"}', NULL, 5, '2023-02-06 13:01:34', '2023-02-06 13:01:34'),
(6, '{\"en\":\"eeeee\"}', '{\"en\":\"eeeee\"}', NULL, 6, '2023-02-06 13:01:34', '2023-02-06 13:01:34'),
(7, '{\"en\":\"222\"}', '{\"en\":\"222\"}', NULL, 7, '2023-02-06 13:01:34', '2023-02-06 13:01:34'),
(8, '{\"en\":\"1\"}', '{\"en\":\"1\"}', NULL, 8, '2023-02-06 13:06:48', '2023-02-06 13:06:48'),
(9, '{\"en\":\"22\"}', '{\"en\":\"22\"}', NULL, 9, '2023-02-06 13:20:34', '2023-02-06 13:20:34'),
(10, '{\"en\":\"2\"}', '{\"en\":\"2\"}', NULL, 10, '2023-02-06 13:37:57', '2023-02-06 13:37:57'),
(11, '{\"en\":\"test\"}', '{\"en\":\"test\"}', NULL, 11, '2023-02-06 13:42:32', '2023-02-06 13:42:32'),
(12, '{\"en\":\"teststs\"}', '{\"en\":\"teststs\"}', NULL, 12, '2023-02-06 13:42:34', '2023-02-06 13:42:34'),
(13, '{\"en\":\"11\"}', '{\"en\":\"11\"}', NULL, 13, '2023-02-06 13:43:44', '2023-02-06 13:43:44'),
(14, '{\"en\":\"13\"}', '{\"en\":\"13\"}', NULL, 14, '2023-02-06 16:25:02', '2023-02-06 16:25:02'),
(15, '{\"en\":\"[{\\\"value\\\":\\\"sdfsd\\\"}\"}', '{\"en\":\"valuesdfsd\"}', NULL, 15, '2023-03-22 09:49:33', '2023-03-22 09:49:33'),
(16, '{\"en\":\"{\\\"value\\\":\\\"sdfsdf\\\"}\"}', '{\"en\":\"valuesdfsdf\"}', NULL, 16, '2023-03-22 09:49:33', '2023-03-22 09:49:33'),
(17, '{\"en\":\"{\\\"value\\\":\\\"sdfsdfds\\\"}]\"}', '{\"en\":\"valuesdfsdfds\"}', NULL, 17, '2023-03-22 09:49:33', '2023-03-22 09:49:33'),
(18, '{\"en\":\"sdfsd\"}', '{\"en\":\"sdfsd\"}', NULL, 18, '2023-03-22 10:22:24', '2023-03-22 10:22:24'),
(19, '{\"en\":\"sdfsdf\"}', '{\"en\":\"sdfsdf\"}', NULL, 19, '2023-03-22 10:22:24', '2023-03-22 10:22:24'),
(20, '{\"en\":\"sdfsdfds\"}', '{\"en\":\"sdfsdfds\"}', NULL, 20, '2023-03-22 10:22:24', '2023-03-22 10:22:24'),
(21, '{\"en\":\"3\"}', '{\"en\":\"3\"}', NULL, 21, '2023-03-22 10:22:24', '2023-03-22 10:22:24'),
(22, '{\"en\":\"5\"}', '{\"en\":\"5\"}', NULL, 22, '2023-03-22 10:22:24', '2023-03-22 10:22:24'),
(23, '{\"en\":\"4\"}', '{\"en\":\"4\"}', NULL, 23, '2023-03-22 10:22:42', '2023-03-22 10:22:42'),
(24, '{\"en\":\"6\"}', '{\"en\":\"6\"}', NULL, 24, '2023-03-22 10:22:42', '2023-03-22 10:22:42'),
(25, '{\"en\":\"34\"}', '{\"en\":\"34\"}', NULL, 25, '2023-03-22 10:31:18', '2023-03-22 10:31:18'),
(26, '{\"en\":\"7\"}', '{\"en\":\"7\"}', NULL, 26, '2023-03-22 10:31:18', '2023-03-22 10:31:18'),
(27, '{\"en\":\"8\"}', '{\"en\":\"8\"}', NULL, 27, '2023-03-22 10:31:18', '2023-03-22 10:31:18'),
(28, '{\"en\":\"ddd\"}', '{\"en\":\"ddd\"}', NULL, 28, '2023-03-22 10:39:09', '2023-03-22 10:39:09'),
(29, '{\"en\":\"232\"}', '{\"en\":\"232\"}', NULL, 29, '2023-03-22 10:39:18', '2023-03-22 10:39:18'),
(30, '{\"en\":\"testtt\"}', '{\"en\":\"testtt\"}', NULL, 30, '2023-04-21 13:45:54', '2023-04-21 13:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `about` text DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `linked_url` varchar(255) DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT 'no-image.png',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `full_name`, `about`, `instagram_url`, `facebook_url`, `linked_url`, `whatsapp_number`, `avatar`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Sushil Kumar Verma', 'I am a real estate agent with experience of 10+ years', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.whatsapp.com/', NULL, '109', '2023-07-31 19:56:33', '2023-07-31 19:56:33'),
(4, 'Team member 1', 'I am a real estate agent with experience of 10+ years', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.whatsapp.com/', NULL, '109', '2023-07-31 19:57:16', '2023-07-31 19:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` text DEFAULT 'no-image.png',
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `content`, `thumbnail`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'our life convenient.', '<p>Schools, Shopping malls &amp; Hospitals all in close proximity will make our life convenient.</p>', 'thumbnail/1690351860__644a2778ad293_sw_tiraz-aljada-sharjah-arada-2.jpg', '109', '2023-07-26 10:08:33', '2023-07-26 10:11:00'),
(6, 'Thanks for all your help and support.', '<p>The service provided by Shri Vriddhi was incredible. They helped me to clear out all my doubts and queries about purchasing the property. Thanks for all your help and support.</p>', 'thumbnail/1690351898__644a276386acf_sw_tiraz-aljada-sharjah-arada-4.jpg', '109', '2023-07-26 10:08:53', '2023-07-26 10:11:38'),
(7, 'our second home in Vrinda Gardens', '<p>After experiencing the lifestyle at Ashiana Greenwood, we decided to buy our second home in Vrinda Gardens</p>', 'thumbnail/1690351903__644a2763867c3_sw_tiraz-aljada-sharjah-arada-1.jpg', '109', '2023-07-26 10:09:32', '2023-07-26 10:11:43'),
(8, 'I found your services quite customer', '<p>Well, I found your services quite customer friendly and most of the time ready with all necessary information and also a helping attitude towards customers, particularly to the distant home buyers.</p>', 'thumbnail/1690351929__6462132417acc_sw_masaar-sequoia-arada-sharjah-6.jpg', '109', '2023-07-26 10:09:54', '2023-07-26 10:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active',
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `status`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `last_login_at`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(109, 'susheel', 'susheel2339@gmail.com', 'susheel2339@gmail.com', '2023-01-24 17:30:37', '$2y$10$yc4mDZANoLucBn.77.opDOIRNXQ2hmL2wfp1hoyFadWq.9/GcBdFG', 'Active', NULL, NULL, NULL, NULL, '2023-08-01 18:36:00', '49.36.169.21', '2023-01-24 17:27:43', '2023-08-01 18:36:00'),
(123, 'Agent', 'agent@sakshamapp.com', 'agent@sakshamapp.com', NULL, 'test', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-24 18:30:52', '2023-07-24 18:30:52'),
(124, NULL, 'sushe33el22339@gmail.com', 'sushe33el22339@gmail.com', NULL, NULL, 'Active', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 14:50:42', '2023-07-27 14:50:42'),
(125, NULL, 'susheel2@gmail.com', 'susheel2@gmail.com', NULL, NULL, 'Active', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 14:50:49', '2023-07-27 14:50:49'),
(126, NULL, 'globocoins.trade@gmail.com', 'globocoins.trade@gmail.com', NULL, NULL, 'Active', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 14:50:56', '2023-07-27 14:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `registeration_number` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `referral` varchar(255) DEFAULT NULL,
  `selected_plan` varchar(255) DEFAULT NULL,
  `annual_earning` varchar(255) DEFAULT NULL,
  `total_experience` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `user_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `company_name`, `registeration_number`, `phone`, `mobile`, `date_of_birth`, `address`, `city`, `state`, `country`, `pin`, `referral`, `selected_plan`, `annual_earning`, `total_experience`, `timezone`, `avatar`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(1, 'susheel', 'susheel2@gmail.com', 'saksham', '2342', '+91 (8840) 574-997', '+91 (8840) 574-997', '22-12-2023', 'kanpur', 'kanpur', 'uP', 'INDIA', '208017', 'KANPUR', 'FREE', '900000', '10YEARS', 'IST', NULL, 109, '2023-07-27 11:41:39', '2023-07-27 14:50:49', 'accepted'),
(2, 'susheel', 'globocoins.trade@gmail.com', 'saksham', '2342', '+91 (8840) 574-997', '+91 (8840) 574-997', '22-12-2023', 'kanpur', 'kanpur', 'uP', 'INDIA', '208017', 'KANPUR', 'FREE', '900000', '10YEARS', 'IST', NULL, 109, '2023-07-27 12:44:24', '2023-07-27 14:50:56', 'accepted'),
(4, 'susheel', 'sushe33el22339@gmail.com', 'na', 'sdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, '2023-07-27 14:39:43', '2023-07-27 14:50:16', 'accepted'),
(109, 'susheel', 'susheel2339@gmail.com', NULL, 'sdf', NULL, '9559190379', NULL, 'kanpur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, '2023-07-27 14:33:28', '2023-08-01 06:30:28', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `vendorssss`
--

CREATE TABLE `vendorssss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `registeration_number` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `referral` varchar(255) DEFAULT NULL,
  `selected_plan` varchar(255) DEFAULT NULL,
  `annual_earning` varchar(255) DEFAULT NULL,
  `total_experience` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `user_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendorssss`
--

INSERT INTO `vendorssss` (`id`, `name`, `email`, `company_name`, `registeration_number`, `phone`, `mobile`, `date_of_birth`, `address`, `city`, `state`, `country`, `pin`, `referral`, `selected_plan`, `annual_earning`, `total_experience`, `timezone`, `avatar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'susheel', 'susheel2@gmail.com', 'saksham', '2342', '+91 (8840) 574-997', '+91 (8840) 574-997', '22-12-2023', 'kanpur', 'kanpur', 'uP', 'INDIA', '208017', 'KANPUR', 'FREE', '900000', '10YEARS', 'IST', NULL, 109, '2023-07-27 11:41:39', '2023-07-27 11:41:39'),
(2, 'susheel', 'globocoins.trade@gmail.com', 'saksham', '2342', '+91 (8840) 574-997', '+91 (8840) 574-997', '22-12-2023', 'kanpur', 'kanpur', 'uP', 'INDIA', '208017', 'KANPUR', 'FREE', '900000', '10YEARS', 'IST', NULL, 109, '2023-07-27 12:44:24', '2023-07-27 12:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(255) NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text DEFAULT NULL,
  `collection` varchar(255) DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `collection`, `viewed_at`) VALUES
(1, 'App\\Models\\Post', 1, '53YNQXCVoxJYjSctlRUe79TUGTBL6yl1XdtYIdYziny1YCYTWRNduPfVHYjmStWVUdFEJFUchau2BwXB', NULL, '2023-08-01 07:49:39'),
(2, 'App\\Models\\Post', 1, '53YNQXCVoxJYjSctlRUe79TUGTBL6yl1XdtYIdYziny1YCYTWRNduPfVHYjmStWVUdFEJFUchau2BwXB', NULL, '2023-08-01 07:50:03'),
(3, 'App\\Models\\Post', 1, '53YNQXCVoxJYjSctlRUe79TUGTBL6yl1XdtYIdYziny1YCYTWRNduPfVHYjmStWVUdFEJFUchau2BwXB', NULL, '2023-08-01 07:51:39'),
(4, 'App\\Models\\Property', 42, '53YNQXCVoxJYjSctlRUe79TUGTBL6yl1XdtYIdYziny1YCYTWRNduPfVHYjmStWVUdFEJFUchau2BwXB', NULL, '2023-08-01 09:17:30'),
(5, 'App\\Models\\Property', 2, '0rZHewL6nmQFXzp1WfVmVr0WcUMgwYK03NRcJo6YY3KkuLr8Oe8gWBDfIlMBIVSfLzzhuCnA7NgZ2TMB', NULL, '2023-08-01 14:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulk_messages`
--
ALTER TABLE `bulk_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delete____properties3333333`
--
ALTER TABLE `delete____properties3333333`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_histories`
--
ALTER TABLE `login_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD UNIQUE KEY `taggables_tag_id_taggable_id_taggable_type_unique` (`tag_id`,`taggable_id`,`taggable_type`),
  ADD KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_email_unique` (`email`);

--
-- Indexes for table `vendorssss`
--
ALTER TABLE `vendorssss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bulk_messages`
--
ALTER TABLE `bulk_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delete____properties3333333`
--
ALTER TABLE `delete____properties3333333`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login_histories`
--
ALTER TABLE `login_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `vendorssss`
--
ALTER TABLE `vendorssss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
