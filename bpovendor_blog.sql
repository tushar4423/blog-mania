-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2023 at 02:02 PM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpovendor_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Admin', 'pawan@gmail.com', 'pawan');

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `articleid` int(30) NOT NULL,
  `articletitle` varchar(255) DEFAULT NULL,
  `articlecontant` longtext,
  `articledate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT 'Admin',
  `status` tinyint(1) NOT NULL,
  `slug` varchar(55555) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `views` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`articleid`, `articletitle`, `articlecontant`, `articledate`, `category_id`, `username`, `status`, `slug`, `meta_title`, `meta_desc`, `meta_keyword`, `views`) VALUES
(3, 'How Predictive Dialer Solutions Can Improve Customer Experience', '<p>In today\'s fast-paced business environment, customer experience is a critical factor for success. Customers expect quick, personalized attention and are less likely to tolerate long wait times or unhelpful customer service.&nbsp;</p><p>This is where <a href=\"https://predictivedialersolutions.in/\">Predictive Dialer solutions</a> come in.</p><p>The goal of a Predictive Dialer is to improve call center efficiency by reducing the amount of time agents spend dialing numbers and increasing the number of successful connections.</p><p>&nbsp;Here are the key ways Predictive Dialer solutions can improve&nbsp;customer experience:</p><p>1. Quicker Response Times: Predictive Dialers eliminate the need for manual dialing, saving agents valuable time and allowing them to focus on speaking with customers and closing sales. This results in quicker response times and a better overall customer experience.</p><p>2.&nbsp;&nbsp;Reduced Wait Times:&nbsp;Predictive Dialers help to reduce the amount of time customers spend on hold or waiting for a call to be answered. This results in a better overall customer experience, with faster response times and more personalized attention.<br>&nbsp;</p><p>3.&nbsp;Personalized Attention: Predictive Dialers prioritize calls based on specific criteria, such as target demographics, high-value customers, or specific call center goals. This allows agents to provide more personalized attention and focus their efforts on the most valuable prospects and customers.</p><p>4. Increased Satisfaction: By providing quicker response times and personalized attention, Predictive Dialer solutions result in increased customer satisfaction. Customers are more likely to feel valued and appreciated, which can improve brand loyalty and lead to repeat business.</p><p>5. Better Understanding of Customer Needs: Predictive Dialers provide businesses with advanced reporting and analytics, giving them valuable insights into their call center operations and performance. This allows businesses to better understand their customers\' needs and make data-driven decisions to improve the customer experience.</p><p>6. Increased Flexibility: Predictive Dialers can be scaled up or down as needed, making them a cost-effective solution for businesses of all sizes. This allows businesses to efficiently manage their call center operations and respond to changing customer needs and trends.</p><p>&nbsp;In conclusion, Predictive Dialer solutions offer a range of benefits for businesses looking to improve their customer experience. By reducing wait times, providing personalized attention, and giving businesses valuable insights into their call center operations, Predictive Dialers help to improve the customer experience and drive customer satisfaction.&nbsp;</p><p>If you\'re looking to improve your call center operations and provide a better customer experience, consider implementing a <a href=\"https://predictivedialersolutions.in/contact.php\">Predictive Dialer solution</a> today.</p><p>If you know more about predictive dialer solutions and&nbsp;our services feel free&nbsp;</p><p>contact us :&nbsp;<a href=\"https://predictivedialersolutions.in/contact.php\">https://predictivedialersolutions.in/contact.php</a></p><p>It\'s important to note that while Predictive Dialers can improve the customer experience, they should be used in conjunction with other customer experience best practices.&nbsp;</p><p>For example, training agents to provide excellent customer service, using customer feedback to continuously improve the customer experience, and providing customers with multiple channels for support (such as email, chat, and social media) can all help to enhance the overall customer experience.</p><h4>&nbsp;</h4><h4>About Us</h4><p>Consultants, affiliates, Inbound ACD, VoIP, IVRS, IPPBX, Toll-Free, DID, Voice Logger, and CRM Solutions and Reseller Inquiries also solicited transfer price, profit sharing models, Single Stop for Predictive / Progressive / Manual Outbound Dialer. 475 + Live Reference Call Center clients and BPOs in Ajmer, Pondicherry, Goa, Kolkata, Guwahati, Imphal, Dimapur, Manila, Bangkok, Jammu, Chandigarh, Delhi, Jalandhar, Ludhiana, Delhi, Mumbai, Pune, Nashik, Nagpur, Kanpur, Lucknow, Hyderabad, Chennai, Coimbatore, Vizag, Indore, Patna, Aurangabad, Ranchi, Dehradun, Cebu, Gaboroneâ€™s, Sydney, Dhaka, Karachi, Lahore, Paris, Johannesburg, Thimphu, Gurgaon, Faridabad, Ghaziabad, Noida, Jaipur, Udaipur, Kota, Bhopal, Agra, Jabalpur, Meerut, Ranchi, Ahmedabad, Surat, Baroda, and Many More.</p><p><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_HscLrGM0TRoLCmMf5J6lLQgg5zOz6PugZzuD71xeKre2KTTnXq1breyGl50GnDcaI_T5a9DYkcAwi8RdlIvps4LTCAts7xxa9j6eCRW7rzhGZlFg8Mof5-T2bP3P0yCSP0gjI_nveHdDgpBe_aMmk3CufbnrRetigwFb3LGCZxPQHhxCRWARr36fEA/s360/avyukta-logo-2.png\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_HscLrGM0TRoLCmMf5J6lLQgg5zOz6PugZzuD71xeKre2KTTnXq1breyGl50GnDcaI_T5a9DYkcAwi8RdlIvps4LTCAts7xxa9j6eCRW7rzhGZlFg8Mof5-T2bP3P0yCSP0gjI_nveHdDgpBe_aMmk3CufbnrRetigwFb3LGCZxPQHhxCRWARr36fEA/s320/avyukta-logo-2.png\"></a></p><p>For further information and queries, please visit our website:&nbsp;<a href=\"https://www.predictivedialersolutions.in/\">www.predictivedialersolutions.in</a>&nbsp;or call us at&nbsp; <a href=\"tel:+91-856-0000-600\">+91-856-0000-600</a>;&nbsp;<a href=\"tel:+1-408-791-3820\">+1-408-791-3820</a>&nbsp;or WhatsApp Us on&nbsp;<a href=\"https://api.whatsapp.com/send?phone=+918560000600&amp;text=Hi%20Team\">+91-856-0000-600</a>&nbsp;or Skype Us on avyuktaindia</p>', '2023-02-20 07:58:24', 3, 'Admin', 1, 'how-predictive-dialer-solutions-can-improve-customer-experience', 'How Predictive Dialer Solutions Can Improve Customer Experience', 'How Predictive Dialer Solutions Can Improve Customer Experience', 'Cloud-based Auto Predictive Dialer Solutions, Integrated Auto Predictive Dialer Software\" \"Scalable Predictive Dialing Solutions\" \"Artificial Intelligence Powered Predictive Dialing\" \"Multi-Channel Predictive Dialer for Sales Teams\"', 42),
(4, 'The Benefits of Using Predictive Dialer Solutions for Telemarketing in India', '<p>Introduction:</p><p>In India, telemarketing has become an important part of the marketing strategy for businesses of all sizes. To maximize the efficiency of telemarketing efforts, many companies are now using <a href=\"https://predictivedialersolutions.in/\">predictive dialer solutions</a>. These advanced software tools automate and streamline the dialing process, making it easier for businesses to reach out to customers and prospects. In this article, we will explore some of the key benefits of using predictive dialer solutions for telemarketing in India.</p><p>visit our website :-&nbsp;<a href=\"https://predictivedialersolutions.in/\">https://predictivedialersolutions.in/</a></p><p>Improved Efficiency:</p><p>A. Automatic Dialing:&nbsp;</p><p>One of the primary benefits of using <a href=\"https://predictivedialersolutions.in/\">predictive dialer</a> solutions is that they automate the dialing process. This means that businesses can spend less time manually dialing phone numbers, and more time actually talking to customers and prospects. By streamlining the dialing process, businesses can significantly improve the efficiency of their telemarketing efforts.</p><p>B. Call Routing and Filtering:</p><p>Predictive dialer solutions can also automatically route calls to the most appropriate agent, based on factors such as customer preferences, past interactions, and other data. This helps ensure that customers and prospects are connected with the right person, which can lead to more successful sales calls and better customer experiences.</p><p>Increased Productivity:&nbsp;</p><p>A. Reduced Downtime:</p><p>Another advantage of using predictive dialer solutions is that they can reduce downtime between calls. With manual dialing, agents may spend significant time waiting for the next call to connect. <a href=\"https://predictivedialersolutions.in/\">Predictive dialer</a> software can reduce this downtime by automatically dialing the next number as soon as the current call is completed, helping agents stay engaged and productive.</p><p>B. Call Scripting and Management:</p><p>Many predictive dialer solutions also include call scripting and management tools. These tools can help businesses create and manage effective call scripts, ensuring that agents have the information and guidance they need to make successful calls. By providing a structured framework for calls, businesses can improve the quality of their telemarketing efforts and increase their chances of success.</p><p>Better Data Management :&nbsp;</p><p>A. Data Collection and Analysis</p><p>Predictive dialer solutions can also help businesses collect and analyze important data related to their telemarketing efforts. This data can include call volume, call duration, and other metrics that can be used to optimize <a href=\"https://predictivedialersolutions.in/\">telemarketing</a> strategies. By using predictive dialer software to collect and analyze this data, businesses can gain valuable insights into their telemarketing efforts, and make data-driven decisions to improve their outcomes.</p><p>B. Integration with <a href=\"https://avyuktacrm.com/\">CRM</a> and Other Systems</p><p>Many predictive dialer solutions also offer integration with customer relationship management (<a href=\"https://avyuktacrm.com/\">CRM</a>) systems and other software tools. This makes it easier for businesses to manage customer data and track interactions across different channels. By integrating predictive dialer solutions with other systems, businesses can create a more cohesive and efficient telemarketing strategy.</p><p>Conclusion:</p><p>Predictive dialer solutions offer a range of benefits for businesses engaged in telemarketing in India. By automating and streamlining the dialing process, these tools can help businesses improve efficiency, increase productivity, and better manage customer data. As such, they are a valuable asset for any business looking to optimize their telemarketing efforts and boost their bottom line.</p><p>for any query related to predictive dialer solutions feel free to contact us :-</p><p><a href=\"https://predictivedialersolutions.in/contact.php\">https://predictivedialersolutions.in/contact.php&nbsp;</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjJrSBGxZIL5qvaQEh79xMv-q7vfaAvko2PMHrvfM1OmYkEQJjNTiTwDjZiuDT-UnbkU-G8YoQeKdtnHfqPFPuk3bMet4fgVsYLT7nPnChkdzUUA5fJYMjdkSyzGySReiqKeIz086bRTb0Irsj2c8oeHKQCnMeewQ32kPVaj_waLqTa6XkYKA3LIKXMNg/s360/avyukta-logo-2.png\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjJrSBGxZIL5qvaQEh79xMv-q7vfaAvko2PMHrvfM1OmYkEQJjNTiTwDjZiuDT-UnbkU-G8YoQeKdtnHfqPFPuk3bMet4fgVsYLT7nPnChkdzUUA5fJYMjdkSyzGySReiqKeIz086bRTb0Irsj2c8oeHKQCnMeewQ32kPVaj_waLqTa6XkYKA3LIKXMNg/w320-h53/avyukta-logo-2.png\" alt=\"Avyukta Intellicall Logo\"></a></p><p>&nbsp;</p><p>For further information and queries, feel free to visit our website:&nbsp;<a href=\"https://predictivedialersolutions.in/contact.php\">https://predictivedialersolutions.in/</a></p><p>email us at: <a href=\"mailto:leads@gmail.com\">leads@gmail.com&nbsp;</a>&nbsp;</p><p>call us at IND:<a href=\"tel:+91-856-0000-600\">+91-856-0000-600</a>;&nbsp;</p><p>US&nbsp;<a href=\"tel:+1-408-791-3820\">+1-408-791-3820</a></p><p><a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23AutomateDialingProcess\">#AutomateDialingProcess</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23avyukta\">#avyukta</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23BoostProductivity\">#BoostProductivity</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23CRMIntegration\">#CRMIntegration</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23DataDrivenDecisions\">#DataDrivenDecisions</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23EffectiveCallScripts\">#EffectiveCallScripts</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23ImproveCallRouting\">#ImproveCallRouting</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23PredictiveDialerSolutions\">#PredictiveDialerSolutions</a> <a href=\"https://dialervendorpredictivecallcenter.blogspot.com/search/label/%23TelemarketingEfficiency\">#TelemarketingEfficiency</a></p>', '2023-02-20 08:06:23', 3, 'Admin', 1, 'the-benefits-of-using-predictive-dialer-solutions-for-telemarketing-in-india', 'Benefits of Using Predictive Dialer Solutions for Telemarketing India', 'The Benefits of Using Predictive Dialer Solutions for Telemarketing in India | Predictive Dialer in India | Dialer solutions | CRM', 'Increased Productivity with Predictive Dialer Solutions in Indian Telemarketing, Improved Sales Conversions through Predictive Dialer Solutions in Indian Market, Enhanced Customer Engagement with Predictive Dialer Solutions in Indian Telemarketing ,Cost-e', 35),
(5, '\"Improve Call Quality and Reduce Costs with a SIP-Based Softphone VoIP Dialer\"', '<p>A Session Initiation Protocol (SIP)-based softphone VoIP dialer can be a cost-effective and efficient solution for improving call quality and reducing costs for businesses or individuals. Here are some benefits and tips to keep in mind when using a SIP-based softphone VoIP dialer:</p><ol><li>Easy to use: A softphone VoIP dialer can be installed on a computer, laptop, or mobile device and can be used to make calls over the internet without the need for a physical phone. This makes it easy to use and reduces the need for expensive hardware. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li><li>Cost-effective: A SIP-based softphone VoIP dialer can be a cost-effective solution compared to traditional phone systems. VoIP calls can be significantly cheaper than traditional phone calls, especially for international calls. Additionally, a softphone VoIP dialer can reduce the need for a physical phone and can eliminate the need for expensive maintenance and upgrades. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li><li>High-quality calls: SIP-based softphone VoIP dialers use high-quality codecs to transmit voice data, resulting in clear and high-quality calls. With a reliable internet connection, a softphone VoIP dialer can provide superior call quality compared to traditional phone systems. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>Customizable: SIP-based softphone VoIP dialers can be customized with different features, such as call recording, voicemail, call transfer, and call waiting, among others. This allows businesses to tailor their phone systems to their specific needs. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li><li>Reliable internet connection: A reliable internet connection is essential for ensuring high-quality calls with a SIP-based softphone VoIP dialer. Make sure to use a stable and fast internet connection to avoid call drops and poor call quality.</li></ol><p>conclusion</p><p>To conclude, a SIP-based softphone VoIP dialer is a cost-effective and customizable solution that can improve call quality and reduce costs for businesses or individuals. With the ability to use high-quality codecs, customize features, and eliminate the need for expensive hardware and maintenance, a softphone VoIP dialer can be an efficient alternative to traditional phone systems. However, a reliable internet connection is essential for ensuring high-quality calls, and it\'s important to use a stable and fast internet connection to avoid call drops and poor call quality. Overall, a SIP-based softphone VoIP dialer is a useful tool for businesses or individuals looking to optimize their communication capabilities while reducing costs.</p><h3>About us&nbsp;</h3><p>Started in 2008 Avyukta Intellicall Consulting Pvt. Ltd. is a global call centre and software service provider and till now has helped 1500+ businesses to set up their call centres and provided them with qualityoriented product applications, software, and CRM development unit</p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2538255649201476307/3204040868256518288#\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjqsGsDvOyq_nQAcXaSAy1iM7GbY2_aJOoZvp7kjpdwsL4Pw5ClxUz-YnVN_BMUeqa8FkhUS27M3btvmnc7kuNnOmhfSCr8GVf1eXGwtsf3dqYpqZv6WPz9YrnIRiKPya9gLZ6-Jk_JLOcHlxjYJuYV3g6UNFOhVNovA6CVbygGkJehryAD6BEtmnsG/s320/logoo.png\"></a></p><p>For further information and queries, feel free to visit our website: <a href=\"https://www.voipdialer.in/\">https://www.voipdialer.in</a> or email us at: <a href=\"https://www.voipdialer.in/\">sales@edialerindia.com </a>or call us at<a href=\"tel: +91-856-0000-600; +1-408-791-3820\"> +91-856-0000-600; +1-408-791-3820</a></p><p><br>&nbsp;</p>', '2023-02-20 08:20:05', 3, 'Admin', 1, '-improve-call-quality-and-reduce-costs-with-a-sip-based-softphone-voip-dialer-', '\"Improve Call Quality and Cut Costs with a SIP-Based Softphone\"', 'Learn how to cut communication costs and improve call quality with a SIP-based softphone VoIP dialer. Explore its benefits and tips in this informative article.', 'SIP-based softphone, VoIP dialer, call quality, cost reduction, internet connection, codecs, customization, business communication.', 37),
(6, '\"Transform Your Business Communication with an Enterprise-Grade VoIP Dialer\"', '<p>Avyukta Intellicall is a leading provider of enterprise-grade VoIP dialer solutions that can transform the way businesses communicate. Here are some ways that Avyukta Intellicall\'s VoIP dialer can benefit your business communication:</p><ul><li>Cost Savings: Traditional telephone systems can be expensive to install and maintain. VoIP dialers offer significant cost savings by using the internet to make and receive calls. With Avyukta Intellicall\'s VoIP dialer, you can save up to 50% on your communication costs. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li><li>Enhanced Productivity: Avyukta Intellicall\'s VoIP dialer comes with a range of features that can enhance productivity. For example, the dialer can be integrated with your CRM system, which means that your sales team can make calls directly from the CRM. This can save time and improve the accuracy of your customer data. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li><li>Increased Functionality: Avyukta Intellicall\'s VoIP dialer is a feature-rich solution that can improve your business communication in many ways. For example, the dialer supports call recording, which can be useful for training and quality assurance. The dialer also supports call forwarding, call transfer, and conference calling. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>Mobility: With Avyukta Intellicall\'s VoIP dialer, you can make and receive calls from anywhere in the world. The dialer is compatible with mobile devices, which means that your employees can use the dialer on their smartphones and tablets.</li></ul><p>Overall, Avyukta Intellicall\'s VoIP dialer can transform your business communication by providing cost savings, increased functionality, enhanced productivity, and mobility. If you are looking for a reliable and scalable VoIP dialer solution, Avyukta Intellicall is a great choice</p><p>&nbsp;</p>', '2023-02-20 08:34:51', 3, 'Admin', 1, '-transform-your-business-communication-with-an-enterprise-grade-voip-dialer-', 'Revolutionize Business Communication with Avyukta Intellicall\'s VoIP D', 'Discover how Avyukta Intellicall\'s VoIP dialer can transform your business communication with cost savings, enhanced productivity, and increased functionality. Learn', 'Avyukta Intellicall, VoIP Dialer, Business Communication, Cost Savings, Enhanced Productivity, Increased Functionality, Mobility, CRM Integration, Call Recording.', 31);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(3, 'General', 'general'),
(4, 'Sales', 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `image`) VALUES
(1, 1, 'blog1.jpg'),
(2, 2, 'blog2.jpg'),
(3, 3, 'blog3.jpg'),
(4, 4, 'blog4.jpg'),
(5, 5, 'download1.png'),
(6, 6, 'overview_bg.jpg'),
(7, 7, 'Gemstone.jpg'),
(8, 8, 'vastu_abt.jpg'),
(9, 9, 'tarot_single.jpg'),
(10, 10, 'zandu.jpg'),
(11, 11, 'Blog pic.JPG'),
(12, 12, 'Blog pic 1.JPG'),
(13, 13, 'avyukta-logo-6.png'),
(14, 14, 'avyukta-logo.webp'),
(15, 15, 'avyukta-logo-2.png'),
(16, 16, 'dial-pad.png'),
(17, 17, 'contact.png'),
(18, 18, 'call center about.jpeg'),
(19, 19, 'gemology.png'),
(20, 20, 'rudrakhsa.png'),
(21, 21, 'Ethical Principles in Vedic Gemology.png'),
(22, 22, 'evnus transit ..png'),
(23, 23, 'gallery-4.jpg'),
(24, 24, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(25, 25, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(26, 26, 'pandit ji on call logo JPEG (2).jpg'),
(27, 27, 'gallery-4 (1).jpg'),
(28, 28, 'WhatsApp Image 2022-09-22 at 12.24.30 AM.jpeg'),
(29, 29, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(30, 30, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(31, 31, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(32, 32, 'WhatsApp Image 2022-11-30 at 4.19.11 PM.jpeg'),
(33, 33, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(34, 34, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(35, 35, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(36, 36, 'WhatsApp Image 2022-12-05 at 2.47.42 PM.jpeg'),
(37, 37, '5 mukhi blog img.png'),
(38, 38, 'role of astro in matchmaking blog img.png'),
(39, 39, 'kaal sarp dosh.png'),
(40, 40, 'kaal sarp dosh.png'),
(41, 41, 'shri yantra.png'),
(42, 42, 'blue sapphire.png'),
(43, 43, '16 transit.png'),
(44, 44, 'astrology affects love life.png'),
(45, 45, 'mangal dosh.png'),
(46, 46, 'greatest strength astro.png'),
(47, 47, 'astrolgy in career and edu.png'),
(48, 48, 'mood swings.png'),
(49, 49, 'blogs cover 17.png'),
(50, 50, 'blogs cover .png'),
(51, 51, 'blogs cover 3.png'),
(52, 52, 'blogs cover 5.png');

-- --------------------------------------------------------

--
-- Table structure for table `month_year`
--

CREATE TABLE `month_year` (
  `id` int(11) NOT NULL,
  `month_year_name` varchar(255) NOT NULL,
  `month_year_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month_year`
--

INSERT INTO `month_year` (`id`, `month_year_name`, `month_year_value`) VALUES
(1, 'January 2023', '2023-01'),
(2, 'February 2022', '2022-02'),
(3, 'March 2022', '2022-03'),
(4, 'April 2022', '2022-04'),
(5, 'May 2022', '2022-05'),
(6, 'June 2022', '2022-06'),
(7, 'July 2022', '2022-07'),
(8, 'Augst 2022', '2022-08'),
(9, 'September 2022', '2022-09'),
(10, 'October 2022', '2022-10'),
(11, 'November 2022', '2022-11'),
(12, 'December 2022', '2022-12');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'pawan'),
(2, 'omi'),
(3, 'anurag'),
(4, 'ganesh'),
(5, 'vijay'),
(6, 'lakhan'),
(7, 'viaksh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(55) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `company_name`, `address`, `create_at`) VALUES
(1, '', '', 'pawan', 'pawan@gmail.com', 2147483647, '1234', '', '', '2023-02-17 06:29:16'),
(2, '', '', 'jbzsb', 'hhbdhdvb@gmail.com', 2147483647, '34567876', '', '', '2023-02-18 07:33:38'),
(3, '', '', 'Charlespef', 'je.an.p.a.u.lio.n.o.d.ewit.t@gmail.com', 2147483647, '62j7Plwx@vP', '', '', '2023-02-20 08:31:23'),
(4, '', '', 'MichaelNag', 'h.o.lm.es.s.t.ep.h.0.6@gmail.com', 2147483647, 'o%b4qOw77kD', '', '', '2023-02-21 13:14:11'),
(5, '', '', 'WilliamCep', 'lawof.fi.c.e.bouchardse.o@gmail.com', 2147483647, 'cV7zd%r33sJ', '', '', '2023-02-21 18:24:21'),
(6, '', '', 'Gava', 'lanvigatorsiny@gmail.com', 2147483647, 'uaUw#844erA', '', '', '2023-02-23 18:06:11'),
(7, '', '', 'Jasonpet', 'j.a.s.on.per.e.z.434.2@gmail.com', 2147483647, 's5v6K%3ceuK', '', '', '2023-02-24 10:54:52'),
(8, '', '', 'RichardLip', 'j.a.y.t.a.yt.ay.t.ay7.3.3@gmail.com', 2147483647, 'jrkb^y6N12O', '', '', '2023-02-25 18:04:22'),
(9, '', '', 'JameskistE', 'ry.a.n.so.lde.r.3@gmail.com', 2147483647, '4dna@td16TR', '', '', '2023-02-28 01:57:45'),
(10, '', '', 'Thomashot', 'cu.rt.b.al.ch20.22@gmail.com', 2147483647, 's6Z#tlvu44C', '', '', '2023-03-01 09:50:01'),
(11, '', '', 'you_cash', 'elfridabolshakova901892@mail.ru', 2147483647, 'pokPq#9c53Q', '', '', '2023-03-02 03:35:54'),
(12, '', '', 'jhajbfj', 'sdvhbefh@gmail.com', 2147483647, '09878', '', '', '2023-03-06 05:30:59'),
(13, '', '', 'hxizwhyofyq', 'zrztbrrbxkr@hotmails.com', 2147483647, 'Y52flzfq8V', '', '', '2023-03-06 07:39:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`articleid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month_year`
--
ALTER TABLE `month_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `articleid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `month_year`
--
ALTER TABLE `month_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
