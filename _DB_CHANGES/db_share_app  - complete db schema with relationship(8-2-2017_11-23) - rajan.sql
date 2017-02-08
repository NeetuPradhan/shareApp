-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 06:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_share_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_login_date` datetime DEFAULT NULL,
  `access_level` int(2) DEFAULT NULL,
  `pw_reset_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `del_flag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `session_id`, `name`, `email`, `last_login_date`, `access_level`, `pw_reset_key`, `status`, `del_flag`) VALUES
(1, 'admin', 'b37cd570449d78aa4f0a065f306501a935b4da46ff6701f4451c63d0761f92df94a434c5bffaef0cae3cb03e5a3ca8be5b30806cd82106f8c88df8048042b27fn4j2+clyYhw0rlrwo9+Nvc8UfiPf0A==', '', 'admin', 'jobportalnepal@gmail.com', NULL, NULL, '38Yuw3Z9jJ1912RR', '', 0),
(2, 'admin', '8c0e106ff7ceb9f6e33659e8416d5af4caaa74bb99cc667ac85b1c45ac93761711a3c0896794a2c15a805e5a46d41a46f5e67ae9465ec5f27a42db0f7a27f882otSSBJc8E+IM9lna2L64Wm/39u+dag==', '', 'admin', 'admin@admin.com', '0000-00-00 00:00:00', NULL, '33d1338e01ed47bc487080fb883266a0', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `fiscal_year` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_broker`
--

CREATE TABLE `tbl_broker` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE `tbl_cms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `head_text` varchar(255) DEFAULT NULL,
  `content` longtext,
  `meta_keywords` longtext NOT NULL,
  `meta_description` longtext NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `del_flag` tinyint(4) NOT NULL DEFAULT '0',
  `added_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `display_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`id`, `title`, `head_text`, `content`, `meta_keywords`, `meta_description`, `status`, `del_flag`, `added_date`, `modified_date`, `display_order`) VALUES
(23, 'about_us', 'About Us', '<p>\r\n Job Portal a comprehensive online business directory<br />\r\n Job Portal is Job Portal Internet Venture&#39;s latest foray into the field of providing information to cater to immediate, impulsive and urgent requirement of customers for companies, products, and services. Job Portal&#39;s service is available Online. The online search service has an extensive directory of information from across Nepal that is both accurate as well as varied.<br />\r\n As a user, you enjoy the following features on Job Portal:<br />\r\n Fast and Accurate Search<br />\r\n Detailed information on businesses to enable you to pick the business that most suits your requirements<br />\r\n As a business, you can reach your customers whenever and wherever they are looking for you using our robust and cost-effective service. In addition to listing your business on the Job Portal website, you can also<br />\r\n Add photos, price lists and menus.<br />\r\n Add events,deals,offers and announcements.<br />\r\n Track the popularity of and manage your business listing<br />\r\n The Job Portal Voice service will be available 24X7 for consumers in the near future.</p>\r\n', 'About Us', 'About Us', 1, 0, NULL, NULL, 0),
(35, 'user_activation', 'User Activation', '<p>\r\n <b>Please Check Your e-mail for the activation link</b></p>\r\n', 'User Activation', 'User Activation', 1, 0, NULL, NULL, 0),
(36, 'activation_success', 'Activation Success', '<p>\n	<b>Your Account is activated. Please <a href=\\"http://uno.com.np/login\\">Login</a></b></p>\n', 'Activation Success', 'Activation Success', 1, 0, NULL, NULL, 0),
(37, 'activation_failed', 'Activation Failed', '<p>\n	Activation Failure</p>\n', 'Activation Failed', 'Activation Failed', 1, 0, NULL, NULL, 0),
(41, 'contact_us', 'Contact Us', '<p>\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n', 'Contact us', 'Contact us', 1, 0, NULL, NULL, 0),
(42, 'f_a_qs', 'FAQs', '<p>\r\n Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'FAQ', 'FAQ', 1, 0, NULL, NULL, 0),
(43, 't_a_c', 'Terms & Conditions', '<p>\n	<strong>Terms of Service</strong></p>\n<p>\n	<br />\n	Please read the following agreement carefully before using this website or any service there under.</p>\n<p>\n	<br />\n	YOUR ACCESS TO OR USE OF THE Uno SERVICES AND/OR Uno WEBSITE (AS DEFINED BELOW) CONSTITUTES YOUR ACCEPTANCE OF ALL THE PROVISIONS OF THESE TERMS OF SERVICE.</p>\n<p>\n	<br />\n	IF YOU ARE UNWILLING TO BE BOUND BY THESE TERMS OF SERVICE, DO NOT ACCESS OR USE THE Uno SERVICES AND/OR Uno WEBSITE.</p>\n<p>\n	<br />\n	By using the Uno Services (as defined below) which are owned and operated by Uno Internet Ventures and by accessing the Uno Site located at http://www.Uno.com.np, and all linked pages owned and operated by Uno (the &quot;Uno Site&quot;), you agree to be bound by these terms of service, as well as any other guidelines, rules and additional terms referenced herein, and all such guidelines, terms and rules are hereby incorporated herein by this reference (collectively, &quot;Terms of Service&quot;). Uno&#39;s on-line services which are available at the Uno Site, among other things, offers online local search service that helps buyers quickly and conveniently find businesses and establishments while helping sellers improve the effectiveness of their marketing spends and as a business, (collectively &quot;Uno Services&quot;) to know more about Uno Services, click here. When you access or use any of the Uno Services and/or the Uno Site you agree to be bound by these Terms of Service. These Terms of Service set out the legally binding terms with respect to your use of and our provision of the Uno Site and Uno Services. Please read these Terms of Service carefully.<br />\n	<strong><br />\n	1. Eligibility.</strong><br />\n	Your are must be 18 or over, and you must be capable of entering into a binding contract in your jurisdiction to register as a member of Uno Site or use the Uno Site and/or Uno Services. If you are under the age of 18 or the applicable legal age in your jurisdiction, you can use the Uno Services only in conjunction with, and under the supervision of, your parent or guardian who has agreed to the Terms of Service. If you do not qualify, do not use the Service. By using the Uno Site and/or Uno Services, you represent and warrant that you have the right, authority, competency and capacity to enter into these Terms of Service and to abide by all of the terms and conditions set forth herein.<br />\n	<strong><br />\n	2. Changes to the Agreement or the Uno Services.</strong><br />\n	You agree and understand that these Terms of Service, the Uno Site and the Uno Services may be modified by Uno at any time without prior notice, and such modifications will be effective upon Uno&#39;s posting of the new terms and/or upon implementation of the new changes on the Uno Site or Uno Services. You agree to review the Terms of Service periodically so that you are aware of any modifications. Your continued use of the Uno Services after any modifications indicates your acceptance of the modified Terms of Service. Unless expressly stated otherwise by Uno, any new features, new services, enhancements or modifications to the Uno Services implemented after your initial access to the Service shall be subject to these Terms of Service.<br />\n	<br />\n	<strong>3. Registration and Security.</strong><br />\n	In order to use or access some of the Uno Services, you may be required to register with Uno Site and to select a password and user name, which shall consist of an email address you own and use (&quot;User ID&quot;). If you register, you agree to provide Uno with accurate, complete, and updated registration information and update and rectify the same from time to time. Failure to do so shall constitute a breach of these Terms of Service, which may result in immediate termination of your account. You may not: enter, select or use a false name or an email address owned or controlled by another person with the intent to impersonate that person, or, use as a User ID a name subject to any rights of a person other than yourself without appropriate authorization. Uno reserves the right to refuse registration of, or cancel a User ID in its discretion. You shall be responsible for maintaining the confidentiality of your password and are fully responsible for all activities that occur under your User ID and password. Uno shall not be liable for any loss or damage arising from your failure to comply with the above requirements. Any User ID and password provided to you for your access to the Uno Services shall be for your personal use only. You agree to immediately notify Uno of any unauthorized use of your User ID or password, and ensure that you exit from your account at the end of each session.<br />\n	<br />\n	<strong>4. Use of the Site/Services by Members.</strong><br />\n	You may search the Uno Site database for business and other listings, reviews and business contact information. You may invite people you know to join Uno Site. Uno does not control the information, data, reviews, text, sound, photographs, graphics, video, messages and other materials (&quot;Content&quot;) posted or provided by third parties via the Uno Services or Uno Site, including the content of any business and/or establishment, and does not guarantee the accuracy, integrity or quality of such Content. You understand that by using the Uno Services you may be exposed to Content that is offensive, indecent or objectionable. Under no circumstances will Uno be liable in any way for any Content, including any errors or omissions in any Content, or any loss or damage of any kind incurred as a result of your posting or use of any Content. You are responsible for complying with all laws applicable to the Content you submit via the Uno Services. You agree that you must evaluate and bear all risks associated with the use or posting of any Content, including any reliance on the content, integrity, and accuracy of such Content.</p>\n<p>\n	<br />\n	By using the &ldquo;Send to Phone&rdquo; application/feature in the Uno Site you authorize us &amp; our associate partners to send solicitation messages/service messages/ promotional messages to the mobile phone number provided by you in the Uno Site or call you to offer services.<br />\n	All those sections in the Uno Services that invite user participation will contain views, opinion, suggestion, comments and other information provided by the general public, and Uno will at no point of time be responsible for the accuracy or correctness of such information. Uno reserves the absolute right to accept/reject information from readers and/or advertisements from advertisers and impose/relax Uno Services access rules and regulations for any user(s).<br />\n	<strong>&nbsp;<br />\n	5. Restrictions on Rights to Use.</strong><br />\n	You shall not (and you agree not to allow any third party to):<br />\n	modify, adapt, translate, or reverse engineer any portion of the Uno Site and/or Uno Services; remove any copyright, trademark or other proprietary rights notices contained in or on the Uno Site and/or Uno Services; use any robot, spider, site search/retrieval application, or other device to retrieve or index any portion of the Uno Site and/or Uno Services; collect any information about other users or members (including but not limited to usernames and/or email addresses) for any purpose; reformat or frame any portion of the web pages that are part of the Uno Site and/or Uno Services; create user accounts by automated means or under false or fraudulent pretenses; create or transmit unwanted electronic communications such as &quot;spam&quot; to other users or members of the Uno Site and/or Uno Services or otherwise interfere with other user&#39;s or member&#39;s enjoyment of the Uno Site and/or Uno Services; submit any third party materials or Content without such third party&#39;s prior written consent; submit any Content or material that falsely express or imply that such Content or material is sponsored or endorsed by Uno; submit any Content or material that infringes, misappropriates or violates the intellectual property, publicity, privacy or other proprietary rights of any party; transmit any viruses, worms, defects, Trojan horses or other items of a destructive nature; use of the Uno Site or Uno Services to violate the security of any computer network, crack passwords or security encryption codes, transfer or store illegal material including that are deemed threatening or obscene; copy or store any Content offered on the Uno Site for other than your own personal use and/or use the same for any other purpose (other than your own personal use) whether for commercial purposes or otherwise ; submit Content or materials that are unlawful or promote or encourage illegal activity; submit false or misleading information to Uno or at Uno Site; take any action that imposes, or may impose in our sole discretion, an unreasonable or disproportionately large load on our IT infrastructure; use the Uno Site and/ or Uno Services, intentionally or unintentionally, to violate any applicable local, state, national or international law; or collect or store personal data about other users in connection with the prohibited activities described in this paragraph.<br />\n	<strong><br />\n	6. Content Posted By You on the Uno Site.</strong><br />\n	You shall not post, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights. You understand and agree that Uno reserve its right (but has no obligation) to review and delete/remove any Content, business or other listings, (including business name, address, phone, fax, distance, reviews, questions, answers, comments, plans, ideas, rating, reviews or like) that, in the sole judgment of Uno Internet Ventures, violates these Terms of Service or which might be offensive, illegal, or that might violate the rights of, harm, or threaten the safety of other users or members of the Uno Site and/or other website users. You also understand and agree that Uno reserves the right to review, delete or remove any Content without any cause or liability. Notwithstanding anything to the contrary contained herein you are solely responsible for the any Content that you publish, upload, submit or display on the Uno Site or transmit to other members and/or other website users (hereinafter, &quot;Posted Content&quot;).<br />\n	You are solely responsible for any Content submitted, posted or uploaded through your User ID on the Uno Site. You agree that you will only post Content that you believe to be true and you will not purposely provide false or misleading information.</p>\n<p>\n	<br />\n	By posting Posted Content on the Uno Site, you agree to and hereby do grant, and you represent and warrant that you have the right to grant, Uno, its contractors, and the users of the Uno Site an irrevocable, perpetual, exclusive, royalty-free, fully sub-licensable, fully paid up, worldwide license to use, copy, publicly perform, digitally perform, publicly display, and distribute such Posted Content and to prepare derivative works of, or incorporate into other works, such Posted Content and to otherwise exploit the same for commercial or other purposes.<br />\n	You should only provide Content which is in conformity with these Terms of Service.<br />\n	The following is a partial list of the kind of Content and communications that are illegal or prohibited on/through the Uno Site. Uno reserves the right to investigate and take appropriate legal action in its sole discretion against anyone who violates this provision, including without limitation, removing such Content and/or communication from the Uno Services and terminating the membership of such violators or blocking your/violators use of the Uno Services and/or Uno Site. You shall not post Content that: is false or intentionally misleading; is patently offensive, such as Content or messages that promotes racism, bigotry, hatred or physical harm of any kind against any group or individual; harasses or advocates harassment of another person; involves the transmission of unsolicited mass mailing or &quot;spamming&quot;; promotes illegal activities or conduct that is abusive; is threatening, derogatory, indecent, obscene, defamatory or libelous; is pornographic or sexually explicit in nature; and seeks or recommends providers of material that exploits people under the age of 18 in a sexual or violent manner, or seeks or recommends providers that solicit personal information from anyone under 18 years of age.<br />\n	Otherwise illegal and/or immoral in any manner whatsoever.</p>\n<p>\n	<br />\n	<strong>7. Copyright Dispute Policy.</strong><br />\n	Uno has adopted the following general policy toward copyright infringement. ANy Notification of Claimed Infringement must me communicated to Uno Internet Ventures, GPO Box-470,Kathmandu,Nepal by registered postIt is Uno&#39;s policy to block access to or remove material that it believes in good faith to be copyrighted material that has been illegally copied and distributed by any of our advertisers,affiliates, Content providers, members or users; and remove and discontinue service to repeat offenders. If you believe that material or Content residing on or accessible through the Uno Site or Service infringes a copyright, please provide the following information to the Designated Agent listed below:<br />\n	A physical or electronic signature of a person authorized to act on behalf of the owner of the copyright that has been allegedly infringed;<br />\n	Identification of works or materials being infringed; Identification of the material that is claimed to be infringing including information regarding the location of the infringing materials that the copyright owner seeks to have removed, with sufficient detail so that Uno is capable of finding and verifying its existence; Complete contact information about the notifier including address, telephone number and, if available, email address; A statement that the notifier has a good faith belief that the material is not authorized by the copyright owner, its agent, or the law; and<br />\n	Upon Receipt of information pertaining to copyright infringement, Uno may disable access to and/or remove the infringing material<br />\n	If the Content provider, member or user believes that the material that was removed or to which access was disabled is either not infringing, or the Content provider, member or user believes that it has the right to post and use such material from the copyright owner, the copyright owner&#39;s agent, or pursuant to the law, the Content provider, member or user must send the following information to the Designated Agent listed below:<br />\n	A physical or electronic signature of the Content provider, member or user; Identification of the material that has been removed or to which access to has been disabled and the location at which the material appeared before it was removed or disabled; A statement that the Content provider, member or user has a good faith belief that the material was removed or disabled as a result of mistake or a misidentification of the material; and The Content provider&#39;s, member&#39;s or user&#39;s name, address, telephone number, and, if available, email address and a statement that such person or entity consents to the jurisdiction of the Court for the judicial district in which the Content provider&#39;s, member&#39;s or user&#39;s address is located, or if the Content provider&#39;s, member&#39;s or user&#39;s address is located outside Nepal, for any judicial district in which Uno is located, and that such person or entity will accept service of process from the person who provided notification of the alleged infringement.<br />\n	If a counter-notice is received by the Designated Agent, Uno may send a copy of the counter-notice to the original complaining party informing that person that it may replace the removed material or cease disabling it in 10 business days. Unless the copyright owner files an action seeking a court order against the Content provider, member or user, the removed material may be replaced or access to it restored in 10 to 14 business days or more after receipt of the counter-notice, at Uno&#39;s discretion.</p>\n<p>\n	Please contact Uno Internet Ventures, GPO-470, Kuleshwor, Kathmandu, Nepal.</p>\n<p>\n	<br />\n	<strong>8. Privity of Contract with you.</strong><br />\n	If you enter into correspondence or engage in commercial transactions with third parties in connection with your use of the Uno Services, such activity is solely between you and the applicable third party. Uno shall have no liability, obligation or responsibility for any such activity. You hereby release Uno from all claims arising from such activity.</p>\n<p>\n	<br />\n	<strong>9. Privacy.</strong><br />\n	Use of the Uno Site and/or the Uno Services or any Content uploaded/posted in the Uno Site is also governed by our Privacy Policy.To know more about our Privacy Policy click here</p>\n<p>\n	<br />\n	<strong>10. Term.</strong><br />\n	These Terms of Service will remain in full force and effect while you use the Uno Site and/or Uno Services. Either Party may terminate these Terms of Service for any reason, at any time. Sections 9, 10, 11, 12, 13, 14 and 15 shall survive any termination or expiration of these Terms of Service.</p>\n<p>\n	<strong><br />\n	11. Ownership.</strong><br />\n	Except for the Content submitted by members, advertisers or users, which are governed by the provisions contained elsewhere in this Terms of Service, the Uno Services the Uno Site and all aspects thereof, including all copyrights, trademarks, and other intellectual property or proprietary rights therein, is owned by Uno or its licensors. You acknowledge that the Uno Services and any underlying technology or software used in connection with the Uno Services contain Uno&#39;s proprietary information. Shall not modify, reproduce, distribute, create derivative works of, publicly display or in any way exploit, any of the content, software, and/or materials available on the Uno Site, or Uno Services in whole or in part except as expressly provided in Uno&#39;s policies and procedures made available via the Uno Services. Except as expressly and unambiguously provided herein, Uno and its suppliers do not grant you any express or implied rights, and all rights in the Uno Services not expressly granted by Uno to you are retained by Uno.</p>\n<p>\n	<br />\n	<strong>12. Links to Third Party Sites</strong><br />\n	The links in this Uno Site may allow you to leave the Uno Site. These linked sites that are not under the control of Uno are not reviewed or approved by Uno. Uno shall not be responsible for the contents of any linked site or any links contained in a linked site. The inclusion of any linked site does not imply endorsement by Uno of the site. Your correspondence or business dealing with or participation in the sales promotions of advertisers or service providers found on or through the Uno Services, including payment and delivery of related goods or services, and any other terms, conditions, and warranties or representations associated with such dealings, are solely between you and such advertisers or service providers. You assume all risks arising out of or resulting from your transaction of business over the Internet, and you agree that we are not responsible or liable for any loss or result of the presence of information about or links to such advertisers or service providers on the Uno Services. You acknowledge and agree that we are not responsible or liable for the availability, accuracy, authenticity, copyright compliance, legality, decency or any other aspect of the content, advertising, products, services, or other materials on or available from such sites or resources. You acknowledge and agree that your use of these linked sites is subject to different terms of use than these Terms of Service, and may be subject to different privacy practices than those set forth in the Privacy Policy governing the use of the Uno Services. We do not assume any responsibility for review or enforcement of any local licensing requirements that may be applicable to businesses listed on the Uno Services. You acknowledge sole responsibility for and assume all risk arising from your use of any such websites or resources.</p>\n<p>\n	<br />\n	<strong>13. Disclaimer.</strong><br />\n	THE Uno SITE AND Uno SERVICE ARE PROVIDED BY Uno ON AN &quot;AS IS&quot; BASIS. Uno AND ITS LICENSORS AND AFFILIATES MAKE NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS, STATUTORY OR IMPLIED AS TO THE OPERATION OF THE Uno SITE, Uno SERVICES OR SOFTWARE OR THE INFORMATION, CONTENT, MATERIALS, OR PRODUCTS INCLUDED ON THE Uno SITE OR IN ASSOCIATION WITH THE Uno SERVICES. TO THE FULLEST EXTENT PERMISSIBLE BY APPLICABLE LAW, Uno AND ITS LICENSORS AND AFFILIATES DISCLAIM ALL WARRANTIES, EXPRESS, STATUTORY, OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. Uno AND ITS LICENSORS AND AFFILIATES FURTHER DO NOT WARRANT THE ACCURACY OR COMPLETENESS OF THE INFORMATION, TEXT, GRAPHICS, LINKS OR OTHER ITEMS CONTAINED WITHIN THE Uno SITE. Uno SHALL NOT BE RESPONSIBLE IN ANY MANNER FOR THE CONDUCT, OF ANY USER OF THE Uno SITE OR Uno SERVICES. Uno DOES NOT WARRANT OR COVENANT THAT THE Uno SERVICES WILL BE AVAILABLE AT ANY TIME OR FROM ANY PARTICULAR LOCATION, WILL BE SECURE OR ERROR-FREE, THAT DEFECTS WILL BE CORRECTED, OR THAT THE Uno SERVICES IS FREE OF VIRUSES OR OTHER POTENTIALLY HARMFUL COMPONENTS. ANY MATERIAL OR CONTENT DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE Uno SERVICES IS ACCESSED AT YOUR OWN DISCRETION AND RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY SUCH MATERIAL. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY ANY USER FROM Uno, THE Uno SITE OR THROUGH OR FROM THE Uno SERVICES SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED HEREIN. Uno SHALL NOT LIABLE FOR ANY KIND OF DAMAGES, LOSSES OR ACTION ARISING DIRECTLY OR INDIRECTLY, DUE TO ACCESS AND/OR USE OF THE CONTENT IN THE Uno SERVICES INCLUDING BUT NOT LIMITED TO ANY DECISIONS BASED ON CONTENT IN THE Uno SERVICES RESULTING IN LOSS OF DATA, REVENUE, PROFITS, PROPERTY, INFECTION BY VIRUSES ETC.</p>\n<p>\n	<strong><br />\n	14. Limitation on Liability.</strong><br />\n	Unoshall not be liable for any failure to perform its obligations hereunder where such failure results from any cause beyond Uno&#39;s reasonable control, including, without limitation, mechanical, electronic or communications failure or degradation (including &quot;line-noise&quot; interference).</p>\n<p>\n	WITHOUT LIMITING THE FOREGOING, Uno AND ITS AFFILIATES AND SUPPLIERS WILL NOT BE LIABLE UNDER ANY THEORY OF LAW, FOR ANY INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES, INCLUDING, BUT NOT LIMITED TO LOSS OF PROFITS, BUSINESS INTERRUPTION, AND/OR LOSS OF INFORMATION OR DATA. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATIONS AND EXCLUSIONS MAY NOT APPLY TO YOU. NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, Uno&#39;S MAXIMUM AGGREGATE LIABILITY TO YOU FOR ANY CAUSES WHATSOEVER, AND REGARDLESS OF THE FORM OF ACTION, WILL AT ALL TIMES BE LIMITED TO THE GREATER OF:</p>\n<p>\n	&nbsp;</p>\n<p>\n	(i) THE AMOUNT PAID, IF ANY, BY YOU TO Uno FOR THE Uno SERVICES IN THE 12 MONTHS PRIOR TO THE ACTION GIVING RISE TO LIABILITY OR,</p>\n<p>\n	(ii) NRs. 1,000/-.</p>\n<p>\n	<br />\n	<strong>15. Indemnity.</strong><br />\n	You agree to indemnify and hold Uno, its parents, subsidiaries, affiliates, officers and employees, harmless, including costs and attorneys&#39; fees, from any claim or demand made by any third party due to or arising out of (i) your access to the Uno Site, (ii) your use of the Uno Services, (iii) the violation of these Terms of Service by you, or (iv) the infringement by you, or any third party using your account or User ID or password, of any intellectual property or other right of any person or entity.</p>\n<p>\n	<br />\n	<strong>16. Jurisdiction:</strong><br />\n	The terms of this agreement are exclusively based on and subject to Nepalese law. You hereby irrevocably consent to the exclusive jurisdiction and venue of courts in Nepal in all disputes arising out of or relating to the use of this website. Use of this website is unauthorized in any jurisdiction that does not give effect to all provisions of these terms and conditions, including without limitation this paragraph.</p>\n<p>\n	<br />\n	<strong>17. Miscellaneous.</strong><br />\n	No agency, partnership, joint venture, or employment is created as a result of these Terms of Service and you do not have any authority of any kind to bind Uno in any respect whatsoever. Uno may provide you with notices, including those regarding changes to the Terms of Service by email, regular mail or postings on the Uno Services. These Terms of Service, accepted upon use of the Uno Site, and all terms, guidelines and rules referenced herein contain the entire agreement between you and Uno regarding the use of the Uno Site and/or the Uno Services. The failure of Uno to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision. The failure of either party to exercise in any respect any right provided for herein shall not be deemed a waiver of any further rights hereunder. If any provision of these Terms of Service is found to be unenforceable or invalid, that provision shall be limited or eliminated to the minimum extent necessary so that these Terms of Service shall otherwise remain in full force and effect and enforceable. Uno reserves the right to investigate complaints or reported violations of these Terms of Service and to take any action we deem necessary and appropriate. Such action may include reporting any suspected unlawful activity to law enforcement officials, regulators, or other third parties. In addition, we may take action to disclose any information necessary or appropriate to such persons or entities relating to user profiles, e-mail addresses, usage history, posted materials, IP addresses and traffic information. Uno reserves the right to seek all remedies available at law and in equity for violations of these Terms of Service. These Terms of Service are not assignable, transferable or sub-licensable by you except with Uno&#39;s prior written consent. The section titles in these Terms of Service are for convenience only and have no legal or contractual effect. These Terms of Service include Uno&#39;s acceptable use policy for Content posted on the Uno Site, Uno&#39;s Privacy Policy, and any notices regarding the Uno Site.</p>\n<p>\n	<br />\n	<strong>18. Contact and Violations.</strong><br />\n	Please contact us with any questions regarding these Terms of Service. Please report any violations of the Terms of Service to info@uno.com.np</p>\n<p>\n	<br />\n	<strong>19. Mark.</strong><br />\n	Uno is a proprietary registered trade mark of Uno Internet Ventures, GPO Box-470, Kuleshwor, kathmandu, Nepal.</p>\n', 'Terms & Condition', 'Terms & Condition', 1, 0, NULL, NULL, 0),
(44, 'advertise', 'Advertise With Us', '<p>\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n', 'Advertise With Us', 'Advertise With Us', 1, 0, NULL, NULL, 0),
(45, 'how_it_works', 'How It Works', '<p>\n	<span style=\\"font-size:14px;\\"><strong>How to create a Business/Professional Page in Uno</strong></span><br />\n	<br />\n	<strong>Tips to create a great business information page on Uno:</strong><br />\n	In a few short steps you can build the most comprehensive information page for your business. This Business Listing feature is totally FREE for business owners or their authorised representatives. You don&#39;t have to pay any hosting, maintenance, or bandwidth costs.</p>\n<p>\n	Uno allows you to enrich your business listing by adding business description, operating hours, contact information, products or services, photo galleries (premium feature), price list / menu (premium feature)&nbsp;etc.</p>\n<p>\n	&nbsp;</p>\n<p>\n	<strong>To add your business on Uno follow these simple steps:</strong><br />\n	Click on the Register link.<br />\n	Fill out your basic details.</p>\n<p>\n	If you are doing this for the first time, you&#39;ll be asked to verify your by clicking on the link you receive in your email. Uno account holder can directly Sign In with their Uno ID and Password.<br />\n	Once you have verified or signed in, you can begin enhancing your business information page. Uno gives you many ways to enrich your business information, these include:<br />\n	<br />\n	<strong>Business Name:</strong> This is the official/registered name of your business.<br />\n	<strong><br />\n	Business Address:</strong> The address should look exactly the way you&#39;d write it on a paper mailing envelope. Uno also lets you plot your address easily on the map. Tip: With a landmark and exact location on map, it becomes easy for customers to locate your business.Contact Details: Be sure to include atleast one contact number. You can add mobile, landline, fax, and toll-free numbers of your business.<br />\n	<br />\n	<strong>Tip:</strong> It&#39;s always good to specify all contact numbers through which customers can reach your business.Operating Hours: These are the working hours during which your business stays open.<br />\n	<br />\n	<strong>Tip: </strong>Customers are more likely to get in touch with you if they know your operating hoursProducts/ Services: These are the products manufactured, sold, serviced by your business. You can even add services offered by your business.<br />\n	<br />\n	<strong>Tip:</strong> Make sure your product/service page has all relevant products and services. This helps more people explore your business, and hence more sales leads.Business Description: A comprehensive description of your business introduces customers to your business.<br />\n	<br />\n	<strong>Tip: </strong>Specifying if you are a manufacturer, retailer, service provider, distributor, etc. gives clarity to people searching for your business.<br />\n	Documents: Upload the photos, catalogues, menu cards, promotions related to your business.This feature is only available to Uno Partner Merchants or the Uno Premium Merchants. Please contact Uno Customer Service Department for further details.<br />\n	<br />\n	<strong>Tip:</strong> Uploading your rate card, menu card, work samples ensures visibility of your business amongst potential customers.<br />\n	Sign Up to create an account with Uno and verify your email.</p>\n<p>\n	<br />\n	Once your business details have been verified by us, you can access your Business dashboard.</p>\n', 'How to create a Business/Professional Page in Uno', 'How to create a Business/Professional Page in Uno', 1, 0, NULL, NULL, 0),
(46, 'why_uno', 'Why Uno', '<p>\n	<strong>Why you need to be on Uno?</strong><br />\n	<br />\n	<strong>1. Get direct business leads</strong><br />\n	Get referrals and direct sales leads for your business by having a presence on Uno. Everyday thousands of people use Uno to find manufacturers, distributors, wholesalers and retailers for specific products and services.<br />\n	<br />\n	<br />\n	<strong>2. Enhance your business information</strong><br />\n	It&#39;s very simple to add contact information, business description, operating hours, photos, catalogs, videos and more for your business listing through Uno.<br />\n	<br />\n	<br />\n	<strong>3. Nepal&#39;s leading business platform</strong><br />\n	Uno has become the number one source to discover local businesses by both consumers and other businesses.<br />\n	<br />\n	<br />\n	<strong>4. It&#39;s simple and FREE</strong><br />\n	In a few short steps you can build the most comprehensive information page for your business. This feature is free for business owners or their authorised representatives. You don&#39;t have to pay any hosting, maintenance, or bandwidth costs.</p>\n', 'Why you need to be on Uno?', 'Why you need to be on Uno?', 1, 0, NULL, NULL, 0),
(47, 'test_1', 'Test', '<p>\r\n	fszgsvdsafc</p>\r\n', 'adsf', 'adsf', 0, 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL,
  `stock_symbol` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `company_type` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `del_flag` tinyint(4) DEFAULT '0',
  `verification_status` varchar(255) DEFAULT '0' COMMENT '0: Unverified, 1: Email Verified, 2: Email & Admin Verified',
  `account_status` varchar(20) NOT NULL DEFAULT '1' COMMENT '1: Active, 2: Suspended, 3: Blocked',
  `activation_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_type`
--

CREATE TABLE `tbl_company_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `display_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_type`
--

INSERT INTO `tbl_company_type` (`id`, `type`, `added_date`, `updated_date`, `status`, `display_order`) VALUES
(1, 'HydroPower', '2016-11-16 23:41:02', NULL, 1, 1),
(2, 'Agro', '2016-11-16 23:54:55', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `weekday_start_time` varchar(20) DEFAULT NULL,
  `weekday_end_time` varchar(20) DEFAULT NULL,
  `weekend_start_time` varchar(20) DEFAULT NULL,
  `weekend_end_time` varchar(20) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `pos_acc` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `phone`, `fax`, `email`, `weekday_start_time`, `weekday_end_time`, `weekend_start_time`, `weekend_end_time`, `lat`, `lon`, `pos_acc`, `address`) VALUES
(1, '+977-4-000000', '+977-4-000000', 'enquiry@jobportal.com', '9:30', '5:30', '10:00', '1:30', 27.70378886189014, 85.32323308260948, '', 'Putalisadak, Kathmandu 44600, Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_settings`
--

CREATE TABLE `tbl_email_settings` (
  `id` int(11) NOT NULL,
  `mailtype` varchar(50) NOT NULL,
  `protocol` varchar(50) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` int(50) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `receive_email` varchar(255) NOT NULL,
  `charset` varchar(50) NOT NULL,
  `newline` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `del_flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_settings`
--

INSERT INTO `tbl_email_settings` (`id`, `mailtype`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `receive_email`, `charset`, `newline`, `status`, `del_flag`) VALUES
(1, 'html', 'smtp', 'ssl://smtp.gmail.com', 465, 'jobportalnepal@gmail.com', '9e7f53b38357c69eafc6c6d30c8267d5b73226fcbd15824245d9e7425123dc862ca6531c1498b05ae4ffe37aa7549ce3e4b8ad799bf97d8a8b1497d6f2de9e5aHvQaXT6f8FxdeLvTna13mkbmLGMVy6i8u4e9d1cI', 'enquiry@shareapp.com', 'utf-8', '\\r\\n', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_templates`
--

CREATE TABLE `tbl_email_templates` (
  `id` int(11) NOT NULL,
  `template_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `del_flag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_email_templates`
--

INSERT INTO `tbl_email_templates` (`id`, `template_code`, `subject`, `content`, `status`, `del_flag`) VALUES
(1, 'REGISTRATION', 'Complete Your Registration', '<p>\r\n Dear <strong>[USERNAME]</strong>,</p>\r\n<div id="cke_pastebin">\r\n Thank you for registering with JobPortal. In order to activate your account</div>\r\n<div id="cke_pastebin">\r\n please click on the confirmation link below.</div>\r\n<p>\r\n <strong>[CONFIRM]</strong><br />\r\n <br />\r\n <strong>Support Team<br />\r\n [SITENAME]</strong></p>\r\n<p>\r\n <strong><span [removed]="" border-box;="" font-weight:="" 700;="" color:="" rgb(51,="" 51,="" 51);="" font-family:="" &#39;helvetica="" neue&#39;,="" helvetica,="" arial,="" sans-serif;="" font-size:="" 11.9px;="" line-height:="" 17px;"="">[LINK]</strong></p>\r\n<p>\r\n  </p>\r\n', '', 0),
(14, 'FORGOT_PWD', 'Reset My Stock Watch Password', '<p>\r\n Dear <strong>[USERNAME]</strong>,</p>\r\n<p>\r\n Please click on the link below to reset your <strong>[SITENAME] </strong>password.<br />\r\n <br />\r\n <strong>Click [LINK] </strong>to reset your <strong>[SITENAME]</strong> password.</p>\r\n<p>\r\n Support Team<br />\r\n <strong>[SITENAME]</strong></p>\r\n<p>\r\n <strong><span [removed]="" border-box;="" font-weight:="" 700;="" color:="" rgb(51,="" 51,="" 51);="" font-family:="" &#39;helvetica="" neue&#39;,="" helvetica,="" arial,="" sans-serif;="" font-size:="" 11.9px;="" line-height:="" 17px;"="">[SITELINK]</strong></p>\r\n', '', 0),
(53, 'NEWSLETTER_SUBSCRIBED', 'NEWSLETTER_SUBSCRIBED', '<p>\r\n Hey <strong><span [removed]="" 12px;"=""> [EMAIL]</strong></p>\r\n<p>\r\n  </p>\r\n<p>\r\n Thank you for subscibing to our newsletter services.<br />\r\n  </p>\r\n<p>\r\n Support Team<br />\r\n <strong>[SITENAME]</strong></p>\r\n<p>\r\n <strong>[SITELINK]</strong></p>\r\n', '', 0),
(52, 'NEWSLETTER_UNSUBSCRIBED', 'NEWSLETTER_UNSUBSCRIBED', '<p>\r\n Hey <strong><span font-family:="" font-size:="" font-weight:="" for="" helvetica="" line-height:="" msg="" please="" span="" successful="" support="" write="">[USERNAME]</span></strong></p>\r\n<p>\r\n <span font-family:="" font-size:="" font-weight:="" for="" helvetica="" line-height:="" msg="" please="" span="" successful="" support="" write="">You&#39;ve successfully unsubscribed to our newsletter services.</span></p>\r\n<p>\r\n <span font-family:="" font-size:="" font-weight:="" for="" helvetica="" line-height:="" msg="" please="" span="" successful="" support="" write="">We are really sorry to see you go.</span></p>\r\n<p>\r\n <span font-family:="" font-size:="" font-weight:="" for="" helvetica="" line-height:="" msg="" please="" span="" successful="" support="" write="">Support Team,</span></p>\r\n<p>\r\n <strong>[SITENAME]</strong></p>\r\n<p>\r\n <strong>[SITELINK]</strong></p>\r\n', '', 0),
(54, 'NOTIFY_USER', 'SELECTED FOR JOB', '<p>\r\n Hey <strong><span font-family:="" font-size:="" font-weight:="" for="" helvetica="" line-height:="" msg="" please="" span="" successful="" support="" write="">[USERNAME]</span></strong></p>\r\n<p>\r\n <span font-family:="" font-size:="" font-weight:="" for="" helvetica="" line-height:="" msg="" please="" span="" successful="" support="" write="">Congratulations you are selected for the jobs.</span></p>\r\n\r\n <span font-family:="" font-size:="" font-weight:="" for="" helvetica="" line-height:="" msg="" please="" span="" successful="" support="" write="">Support Team,</span></p>\r\n<p>\r\n <strong>[SITENAME]</strong></p>\r\n<p>\r\n <strong>[SITELINK]</strong></p>\r\n', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nepse_api_data`
--

CREATE TABLE `tbl_nepse_api_data` (
  `id` int(11) NOT NULL,
  `api_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `stock_symbol` varchar(255) DEFAULT NULL,
  `opening_price` varchar(10) DEFAULT NULL,
  `last_trade_price` varchar(255) DEFAULT NULL,
  `last_trade_time` time DEFAULT NULL,
  `daily_stock_stats_average_price` varchar(255) NOT NULL,
  `daily_stock_stats_52_week_high` varchar(255) DEFAULT NULL,
  `daily_stock_stats_52_week_low` varchar(255) DEFAULT NULL,
  `daily_stock_stats_highest_price` varchar(255) DEFAULT NULL,
  `daily_stock_stats_lowest_price` varchar(255) DEFAULT NULL,
  `daily_stock_stats_percentage_change_in_price` varchar(255) DEFAULT NULL,
  `daily_stock_stats_last_trade_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_last_highest_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_last_lowest_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_total_traded_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_percentage_change_in_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_total_no_of_trades` varchar(255) DEFAULT NULL,
  `daily_stock_stats_turn_over` varchar(255) DEFAULT NULL,
  `daily_stock_stats_adsolute_change_in_price` varchar(255) DEFAULT NULL,
  `daily_stock_price_movement_id` varchar(255) DEFAULT NULL,
  `contract_type` char(10) DEFAULT NULL,
  `daily_stock_stats_previous_day_closing_price` varchar(255) DEFAULT NULL,
  `stock_name` varchar(255) DEFAULT NULL,
  `pulled_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nepse_api_data`
--

INSERT INTO `tbl_nepse_api_data` (`id`, `api_id`, `date`, `time`, `stock_symbol`, `opening_price`, `last_trade_price`, `last_trade_time`, `daily_stock_stats_average_price`, `daily_stock_stats_52_week_high`, `daily_stock_stats_52_week_low`, `daily_stock_stats_highest_price`, `daily_stock_stats_lowest_price`, `daily_stock_stats_percentage_change_in_price`, `daily_stock_stats_last_trade_volume`, `daily_stock_stats_last_highest_volume`, `daily_stock_stats_last_lowest_volume`, `daily_stock_stats_total_traded_volume`, `daily_stock_stats_percentage_change_in_volume`, `daily_stock_stats_total_no_of_trades`, `daily_stock_stats_turn_over`, `daily_stock_stats_adsolute_change_in_price`, `daily_stock_price_movement_id`, `contract_type`, `daily_stock_stats_previous_day_closing_price`, `stock_name`, `pulled_datetime`) VALUES
(1, 3381259, '2016-11-16', '14:58:15', 'ADBL', '595', '595', '14:58:15', '595.791', '1113', '360', '600', '588', '-0.1678', '450', '500', '0', '4803', '-39', '39', '2861580', '-1', '3963023', '0', '596', 'Agriculture Development Bank Limited', '2016-11-16 21:09:37'),
(2, 3380896, '2016-11-16', '14:46:49', 'AHPC', '295', '290', '14:46:49', '292.924', '485', '250', '296', '290', '-2.6846', '631', '1000', '0', '5329', '100', '18', '1561000', '-8', '3962660', '0', '298', 'Arun Valley Hydropower Development Co. Ltd.', '2016-11-16 21:09:37'),
(3, 3380379, '2016-11-16', '14:27:05', 'ALDBL', '403', '392', '14:27:05', '394.02', '766', '234', '403', '392', '-4.6229', '400', '400', '0', '811', '45', '5', '319550', '-19', '3962143', '0', '411', 'Alpine Development Bank Limited', '2016-11-16 21:09:38'),
(4, 3381025, '2016-11-16', '14:51:05', 'ALICL', '1725', '1780', '14:51:05', '1764.26', '1989', '775', '1795', '1725', '3.7296', '500', '905', '0', '6002', '243', '41', '10589100', '64', '3962789', '0', '1716', 'Asian Life Insurance Co. Limited', '2016-11-16 21:09:38'),
(5, 3381216, '2016-11-16', '14:56:33', 'API', '560', '569', '14:56:33', '557.186', '888', '301', '569', '545', '0', '10', '500', '0', '2636', '360', '46', '1468740', '0', '3962980', '0', '569', 'Api Power Company Ltd.', '2016-11-16 21:09:38'),
(6, 3380406, '2016-11-16', '14:28:16', 'ARUN', '109', '115', '14:28:16', '111.679', '130', '52', '115', '109', '7.4766', '2000', '3063', '0', '7763', '0', '4', '866967', '8', '3962170', '0', '107', 'Arun Finance Limited', '2016-11-16 21:09:38'),
(7, 3380261, '2016-11-16', '14:21:57', 'BARUN', '360', '360', '14:21:57', '360.69', '570', '250', '365', '360', '-1.3699', '10', '150', '0', '290', '-29', '15', '104600', '-5', '3962025', '0', '365', 'Barun Hydropower Co. Ltd.', '2016-11-16 21:09:38'),
(8, 3381220, '2016-11-16', '14:56:40', 'BOKL', '700', '691', '14:56:40', '693.256', '819', '414', '700', '690', '-1.0029', '100', '1000', '0', '19983', '-69', '115', '13853300', '-7', '3962984', '0', '698', 'Bank of Kathmandu Lumbini Ltd.', '2016-11-16 21:09:38'),
(9, 3380899, '2016-11-16', '14:46:54', 'BPCL', '683', '685', '14:46:54', '684.177', '1030', '513', '685', '680', '0.2928', '100', '333', '0', '750', '-62', '5', '513133', '2', '3962663', '0', '683', 'Butwal Power Company Limited', '2016-11-16 21:09:38'),
(10, 3380916, '2016-11-16', '14:47:19', 'CBBL', '2000', '2015', '14:47:19', '2019.29', '2688', '1275', '2040', '2000', '-0.5429', '700', '700', '0', '2401', '19', '17', '4848300', '-11', '3962680', '0', '2026', 'Chhimek Laghubitta Bikas Bank Limited', '2016-11-16 21:09:38'),
(11, 3381201, '2016-11-16', '14:56:13', 'CBL', '325', '321', '14:56:13', '319.459', '369', '232', '325', '318', '-0.6192', '70', '3145', '0', '40898', '-57', '167', '13065300', '-2', '3962965', '0', '323', 'Civil Bank Ltd', '2016-11-16 21:09:38'),
(12, 3381270, '2016-11-16', '14:58:40', 'CCBL', '419', '421', '14:58:40', '413.744', '615', '250', '421', '410', '0', '20', '1000', '0', '10416', '7', '70', '4309560', '0', '3963034', '0', '421', 'Century Commercial Bank Ltd.', '2016-11-16 21:09:38'),
(13, 3381269, '2016-11-16', '14:58:38', 'CHCL', '1180', '1175', '14:58:38', '1175.75', '1815', '1150', '1190', '1165', '-1.6736', '500', '1000', '0', '10094', '23', '70', '11868000', '-20', '3963033', '0', '1195', 'Chilime Hydropower Company Limited', '2016-11-16 21:09:38'),
(14, 3380169, '2016-11-16', '14:18:09', 'CIT', '4601', '4525', '14:18:09', '4539.41', '5610', '2980', '4601', '4500', '0.3104', '17', '50', '0', '236', '-46', '10', '1071300', '14', '3961933', '0', '4511', 'Citizen Investment Trust', '2016-11-16 21:09:38'),
(15, 3381312, '2016-11-16', '14:59:33', 'CZBIL', '525', '520', '14:59:33', '520.79', '870', '358', '525', '517', '-0.9524', '310', '1500', '0', '9483', '-47', '70', '4938650', '-5', '3963076', '0', '525', 'Citizen Bank International Limited', '2016-11-16 21:09:38'),
(16, 3381091, '2016-11-16', '14:53:24', 'DBBL', '345', '347', '14:53:24', '348.856', '458', '169', '355', '345', '-0.8571', '63', '1000', '0', '4033', '83', '25', '1406940', '-3', '3962855', '0', '350', 'Deva Bikas Bank Limited', '2016-11-16 21:09:38'),
(17, 3381320, '2016-11-16', '14:59:44', 'DDBL', '2759', '2731', '14:59:44', '2782.38', '3700', '1035', '2900', '2731', '0.9612', '53', '200', '0', '1648', '1', '22', '4585360', '26', '3963084', '0', '2705', 'Deprosc Development Bank Limited', '2016-11-16 21:09:38'),
(18, 3381328, '2016-11-16', '15:00:04', 'EBL', '3780', '3795', '15:00:04', '3800.79', '3900', '1600', '3900', '3706', '2.4015', '500', '3500', '0', '102479', '118', '595', '389502000', '89', '3963092', '0', '3706', 'Everest Bank Limited', '2016-11-16 21:09:38'),
(19, 3381176, '2016-11-16', '14:55:41', 'EDBL', '662', '671', '14:55:41', '663.5', '895', '510', '671', '662', '-0.5926', '20', '100', '0', '120', '-93', '2', '79620', '-4', '3962940', '0', '675', 'Excel Development Bank Ltd.', '2016-11-16 21:09:38'),
(20, 3381207, '2016-11-16', '14:56:17', 'EIC', '1940', '1910', '14:56:17', '1926.69', '2260', '647', '1940', '1906', '-2.3018', '100', '200', '0', '957', '59', '11', '1843840', '-45', '3962971', '0', '1955', 'Everest Insurance Co. Ltd.', '2016-11-16 21:09:38'),
(21, 3376919, '2016-11-16', '11:25:08', 'FMDBL', '1290', '1290', '11:25:08', '1290', '2250', '516', '1290', '1290', '0.3891', '100', '100', '0', '100', '0', '1', '129000', '5', '3958683', '0', '1285', 'First Micro Finance Development Bank Ltd.', '2016-11-16 21:09:38'),
(22, 3381286, '2016-11-16', '14:59:04', 'GBBL', '438', '435', '14:59:04', '428.037', '454', '287', '454', '415', '1.1628', '50', '3800', '0', '121689', '7974', '429', '52087400', '5', '3963050', '0', '430', 'Garima Bikas Bank Limited', '2016-11-16 21:09:38'),
(23, 3381231, '2016-11-16', '14:57:11', 'GBIME', '490', '477', '14:57:11', '480.947', '623', '366', '490', '475', '-1.6495', '100', '4250', '0', '11369', '0', '39', '5467880', '-8', '3962995', '0', '485', 'Global IME Bank Limited', '2016-11-16 21:09:38'),
(24, 3379463, '2016-11-16', '13:43:06', 'GFCL', '380', '384', '13:43:06', '375.209', '606', '186', '384', '373', '1.0526', '100', '3000', '0', '4300', '760', '4', '1613400', '4', '3961227', '0', '380', 'Goodwill Finance Co. Ltd.', '2016-11-16 21:09:38'),
(25, 3380987, '2016-11-16', '14:49:34', 'GLICL', '900', '895', '14:49:34', '883.544', '1150', '442', '900', '875', '0.5618', '100', '400', '0', '2270', '-15', '19', '2005640', '5', '3962751', '0', '890', 'Gurans Life Insurance Company Ltd.', '2016-11-16 21:09:38'),
(26, 3381074, '2016-11-16', '14:53:05', 'GMFIL', '295', '291', '14:53:05', '291.276', '508', '187', '295', '286', '-1.3559', '100', '1000', '0', '2540', '63', '6', '739840', '-4', '3962838', '0', '295', 'Guheshowori Merchant Bank & Finance Co. Ltd.', '2016-11-16 21:09:38'),
(27, 3381203, '2016-11-16', '14:56:16', 'HAMRO', '510', '513', '14:56:16', '513.276', '634', '212', '518', '510', '-1.5385', '150', '500', '0', '2510', '189', '8', '1288320', '-7', '3962967', '0', '520', 'Hamro Bikas Bank Ltd.', '2016-11-16 21:09:38'),
(28, 3380794, '2016-11-16', '14:42:44', 'HBL', '1325', '1350', '14:42:44', '1328.33', '1714', '705', '1350', '1321', '0.7463', '100', '200', '0', '886', '-32', '10', '1176900', '10', '3962558', '0', '1340', 'Himalayan Bank Limited', '2016-11-16 21:09:38'),
(29, 3381185, '2016-11-16', '14:55:54', 'HGI', '1830', '1849', '14:55:54', '1843.86', '2203', '368', '1850', '1830', '1.0929', '30', '140', '0', '923', '-12', '12', '1701880', '19', '3962949', '0', '1830', 'Himalayan General Insurance Co. Ltd', '2016-11-16 21:09:38'),
(30, 3381149, '2016-11-16', '14:54:54', 'HIDCL', '282', '283', '14:54:54', '280.987', '501', '268', '290', '277', '0.7117', '56', '6112', '0', '20539', '-53', '140', '5771200', '2', '3962913', '0', '281', 'Jalabidyut Lagani tatha Bikas Co. Ltd.', '2016-11-16 21:09:38'),
(31, 3381071, '2016-11-16', '14:53:01', 'ICFC', '290', '284', '14:53:01', '288.529', '473', '198', '295', '284', '-2.7397', '107', '450', '0', '1997', '161', '12', '576193', '-8', '3962835', '0', '292', 'ICFC Finance Limited', '2016-11-16 21:09:39'),
(32, 3380731, '2016-11-16', '14:40:52', 'ILFCM', '841', '780', '14:40:52', '798.849', '2000', '318', '841', '774', '-9.0909', '10', '140', '0', '960', '74', '27', '766895', '-78', '3962495', '0', '858', 'ILFCO Microfinance Bittiya Sanstha Ltd.', '2016-11-16 21:09:39'),
(33, 3381202, '2016-11-16', '14:56:15', 'JBBL', '374', '378', '14:56:15', '375.387', '442', '144', '383', '372', '-0.7874', '70', '420', '0', '1938', '-61', '24', '727500', '-3', '3962966', '0', '381', 'Jyoti Bikas Bank Limited', '2016-11-16 21:09:39'),
(34, 3378052, '2016-11-16', '12:31:28', 'JEFL', '260', '260', '12:31:28', '260', '376', '113', '260', '260', '-1.8868', '500', '500', '0', '500', '-56', '1', '130000', '-5', '3959816', '0', '265', 'Jebils Finance Ltd.', '2016-11-16 21:09:39'),
(35, 3381221, '2016-11-16', '14:56:41', 'JFL', '350', '352', '14:56:41', '350.846', '495', '290', '352', '350', '1.4409', '400', '600', '0', '1300', '-58', '3', '456100', '5', '3962985', '0', '347', 'Janaki Finance Ltd.', '2016-11-16 21:09:39'),
(36, 3381215, '2016-11-16', '14:56:33', 'JSLBB', '2840', '2740', '14:56:33', '2763.96', '3100', '381', '2840', '2740', '-3.5211', '10', '100', '0', '450', '125', '33', '1243780', '-100', '3962979', '0', '2840', 'Janautthan Samudayic Laghubitta Bikas Bank Ltd.', '2016-11-16 21:09:39'),
(37, 3381250, '2016-11-16', '14:57:43', 'KBBL', '603', '603', '14:57:43', '604.472', '827', '304', '607', '603', '-0.3306', '33', '285', '0', '958', '-67', '7', '579084', '-2', '3963014', '0', '605', 'Kailash Bikas Bank Ltd.', '2016-11-16 21:09:39'),
(38, 3381032, '2016-11-16', '14:51:33', 'KBL', '612', '606', '14:51:33', '607.541', '640', '295', '616', '602', '-0.6557', '38', '1000', '0', '16542', '-69', '106', '10049900', '-4', '3962796', '0', '610', 'Kumari Bank Limited', '2016-11-16 21:09:39'),
(39, 3380587, '2016-11-16', '14:35:12', 'KMBL', '418', '406', '14:35:12', '404.878', '522', '274', '418', '400', '-2.4038', '45', '1000', '0', '11454', '368', '44', '4637470', '-10', '3962351', '0', '416', 'Kamana Bikas Bank Limited', '2016-11-16 21:09:39'),
(40, 3380328, '2016-11-16', '14:24:40', 'KMCDB', '1800', '1800', '14:24:40', '1800', '2657', '710', '1800', '1800', '-1.0989', '70', '70', '0', '70', '-72', '1', '126000', '-20', '3962092', '0', '1820', 'Kalika Microcredit Development Bank Ltd.', '2016-11-16 21:09:39'),
(41, 3381106, '2016-11-16', '14:53:44', 'KMFL', '3920', '3940', '14:53:44', '4002.76', '4729', '315', '4060', '3920', '-1.725', '30', '500', '0', '1100', '77', '18', '4403040', '-60', '3962870', '0', '4000', 'Kisan Microfinance Bittiya Sanstha Ltd.', '2016-11-16 21:09:39'),
(42, 3378004, '2016-11-16', '12:28:35', 'KNBL', '649', '649', '12:28:35', '649', '693', '168', '649', '649', '1.8838', '430', '430', '0', '430', '-49', '1', '279070', '12', '3959768', '0', '637', 'Kankai Bikas Bank Ltd.', '2016-11-16 21:09:39'),
(43, 3381317, '2016-11-16', '14:59:41', 'LBL', '825', '830', '14:59:41', '824.219', '972', '390', '830', '820', '0.6061', '239', '630', '0', '2249', '-69', '14', '1853670', '5', '3963081', '0', '825', 'Laxmi Bank Limited', '2016-11-16 21:09:39'),
(44, 3379237, '2016-11-16', '13:31:50', 'LFLC', '412', '410', '13:31:50', '410.533', '540', '184', '412', '410', '-1.2048', '600', '600', '0', '1500', '-7', '3', '615800', '-5', '3961001', '0', '415', 'Lumbini Finance Ltd.', '2016-11-16 21:09:39'),
(45, 3381264, '2016-11-16', '14:58:26', 'LGIL', '1765', '1759', '14:58:26', '1764.02', '1900', '265', '1780', '1751', '-0.0568', '30', '500', '0', '9991', '-15', '54', '17624300', '-1', '3963028', '0', '1760', 'Lumbini General Insurance Co. Ltd.', '2016-11-16 21:09:39'),
(46, 3380669, '2016-11-16', '14:38:28', 'LICN', '3264', '3191', '14:38:28', '3206.44', '4245', '1850', '3264', '3190', '-0.3125', '100', '1500', '0', '5855', '426', '32', '18773700', '-9', '3962433', '0', '3200', 'Life Insurance Co. Nepal', '2016-11-16 21:09:39'),
(47, 3380834, '2016-11-16', '14:44:47', 'LLBS', '1638', '1610', '14:44:47', '1620.84', '3450', '628', '1638', '1606', '-1.7094', '72', '72', '0', '402', '-6', '9', '651576', '-28', '3962598', '0', '1638', 'Laxmi Laghubitta Bittiya Sanstha Ltd.', '2016-11-16 21:09:39'),
(48, 3381240, '2016-11-16', '14:57:24', 'LVF1', '12.85', '13.11', '14:57:24', '12.8822', '18.03', '9.3', '13.11', '12.85', '2.0233', '5000', '50000', '0', '59000', '10054', '3', '760050', '0.26', '3963004', '0', '12.85', 'Laxmi Value Fund-1', '2016-11-16 21:09:39'),
(49, 3381254, '2016-11-16', '14:58:07', 'MBL', '555', '542', '14:58:07', '542.688', '941', '447', '555', '536', '-0.7326', '100', '1230', '0', '17673', '-17', '96', '9590930', '-4', '3963018', '0', '546', 'Machhapuchhre Bank Limited', '2016-11-16 21:09:39'),
(50, 3379371, '2016-11-16', '13:38:31', 'MDB', '585', '574', '13:38:31', '576.129', '1326', '373', '585', '570', '-3.3898', '40', '110', '0', '310', '233', '4', '178600', '-16', '3961135', '0', '590', 'Miteri Development Bank Limited', '2016-11-16 21:09:39'),
(51, 3381306, '2016-11-16', '14:59:29', 'MEGA', '490', '489', '14:59:29', '489.307', '630', '355', '495', '482', '-0.8114', '60', '1394', '0', '12477', '-38', '60', '6105090', '-4', '3963070', '0', '493', 'Mega  Bank Nepal Ltd.', '2016-11-16 21:09:39'),
(52, 3380804, '2016-11-16', '14:43:03', 'MFIL', '415', '415', '14:43:03', '413.529', '503', '150', '415', '410', '-1.1905', '200', '1000', '0', '1700', '100', '3', '703000', '-5', '3962568', '0', '420', 'Manjushree Financial Institution Ltd.', '2016-11-16 21:09:39'),
(53, 3378265, '2016-11-16', '12:42:33', 'MIDBL', '620', '611', '12:42:33', '614.886', '836', '170', '620', '611', '-1.9262', '100', '100', '0', '176', '-30', '2', '108220', '-12', '3960029', '0', '623', 'Mission Development Bank Ltd.', '2016-11-16 21:09:39'),
(54, 3378165, '2016-11-16', '12:36:45', 'MMFDB', '3100', '3225', '12:36:45', '3209.33', '3395', '399', '3225', '3100', '3.3323', '100', '100', '0', '120', '0', '3', '385120', '104', '3959929', '0', '3121', 'Mirmire Microfinance Development Bank Ltd.', '2016-11-16 21:09:39'),
(55, 3381314, '2016-11-16', '14:59:37', 'MNBBL', '980', '970', '14:59:37', '970.797', '1657', '471', '980', '965', '-1.3225', '20', '300', '0', '2371', '-57', '24', '2301760', '-13', '3963078', '0', '983', 'Muktinath Bikas Bank Ltd.', '2016-11-16 21:09:39'),
(56, 3381156, '2016-11-16', '14:55:11', 'MSMBS', '1032', '975', '14:55:11', '988.244', '2030', '309', '1032', '974', '-7.4074', '10', '100', '0', '410', '-36', '17', '405180', '-78', '3962920', '0', '1053', 'Mahila Sahayatra Microfinance Bittiya Sanstha Ltd.', '2016-11-16 21:09:39'),
(57, 3381305, '2016-11-16', '14:59:28', 'NABIL', '1721', '1695', '14:59:28', '1706.74', '2794', '1575', '1721', '1695', '-1.2238', '26', '500', '0', '6094', '29', '51', '10400900', '-21', '3963069', '0', '1716', 'Nabil Bank Limited', '2016-11-16 21:09:39'),
(58, 3381319, '2016-11-16', '14:59:42', 'NABILP', '1220', '1248', '14:59:42', '1240.69', '2050', '1081', '1250', '1220', '1.381', '100', '1050', '0', '5281', '80', '22', '6552100', '17', '3963083', '0', '1231', 'NABIL Bank Limited Promotor Share', '2016-11-16 21:09:39'),
(59, 3381256, '2016-11-16', '14:58:11', 'NBB', '820', '810', '14:58:11', '812.989', '1255', '385', '820', '810', '0', '100', '5450', '0', '17245', '42', '70', '14020000', '0', '3963020', '0', '810', 'Nepal Bangladesh Bank Limited', '2016-11-16 21:09:39'),
(60, 3380957, '2016-11-16', '14:48:36', 'NBBL', '5000', '5074', '14:48:36', '5048.23', '5094', '1484', '5094', '5000', '1.8876', '50', '109', '0', '1095', '1', '32', '5527820', '94', '3962721', '0', '4980', 'NagBeli LaghuBitta Bikas Bank Ltd.', '2016-11-16 21:09:39'),
(61, 3377266, '2016-11-16', '11:44:40', 'NBF1', '21.5', '21.5', '11:44:40', '21.5', '27', '12.2', '21.5', '21.5', '-1.3761', '2697', '2697', '0', '2697', '-75', '1', '57985.5', '-0.3', '3959030', '0', '21.8', 'Nabil Balance Fund 1', '2016-11-16 21:09:40'),
(62, 3381276, '2016-11-16', '14:58:47', 'NBL', '490', '476', '14:58:47', '484.553', '640', '225', '490', '476', '-2.8571', '642', '2000', '0', '18532', '-54', '47', '8979730', '-14', '3963040', '0', '490', 'Nepal Bank Limited', '2016-11-16 21:09:40'),
(63, 3377967, '2016-11-16', '12:25:29', 'NCDB', '410', '390', '12:25:29', '400.933', '521', '170', '410', '390', '-3.4653', '80', '1000', '0', '3000', '14900', '5', '1202800', '-14', '3959731', '0', '404', 'Nepal Community Development Bank Ltd.', '2016-11-16 21:09:40'),
(64, 3381210, '2016-11-16', '14:56:27', 'NGBBL', '680', '680', '14:56:27', '659.917', '1304', '108', '680', '654', '-1.8759', '10', '400', '0', '1354', '-13', '10', '893528', '-13', '3962974', '0', '693', 'Nepal Grameen Bikas Bank  Ltd.', '2016-11-16 21:09:40'),
(65, 3380399, '2016-11-16', '14:28:01', 'NGPL', '335', '325', '14:28:01', '333.165', '487', '277', '335', '325', '-3.2738', '10', '58', '0', '218', '-86', '17', '72630', '-11', '3962163', '0', '336', 'Ngadi Group Power Ltd.', '2016-11-16 21:09:40'),
(66, 3379992, '2016-11-16', '14:08:12', 'NHPC', '161', '164', '14:08:12', '163.035', '235', '98', '167', '161', '0.6135', '500', '2000', '0', '9650', '-29', '16', '1573290', '1', '3961756', '0', '163', 'National Hydro Power Company Limited', '2016-11-16 21:09:40'),
(67, 3381225, '2016-11-16', '14:57:01', 'NIB', '771', '767', '14:57:01', '768.701', '1224', '573', '774', '765', '-1.0323', '300', '2600', '0', '14481', '-14', '95', '11131600', '-8', '3962989', '0', '775', 'Nepal Investment Bank Limited', '2016-11-16 21:09:40'),
(68, 3381163, '2016-11-16', '14:55:26', 'NIBPO', '680', '697', '14:55:26', '689.931', '1039', '417', '697', '680', '3.2593', '200', '1400', '0', '4070', '640', '10', '2808020', '22', '3962927', '0', '675', 'Nepal Investment Bank Ltd. Promoter Share', '2016-11-16 21:09:40'),
(69, 3380103, '2016-11-16', '14:14:08', 'NIBSF1', '12.5', '12.6', '14:14:08', '12.5769', '16.02', '8.9', '12.6', '12.5', '0.7194', '5000', '5000', '0', '6500', '-56', '2', '81750', '0.09', '3961867', '0', '12.51', 'NIBL Samriddhi Fund 1', '2016-11-16 21:09:40'),
(70, 3380934, '2016-11-16', '14:48:10', 'NICA', '571', '570', '14:48:10', '572.772', '1157', '509', '579', '570', '0', '300', '643', '0', '8105', '-49', '50', '4642310', '0', '3962698', '0', '570', 'NIC Asia Bank Ltd.', '2016-11-16 21:09:40'),
(71, 3381223, '2016-11-16', '14:56:54', 'NICL', '1170', '1175', '14:56:54', '1174.26', '1490', '306', '1190', '1170', '-1.4262', '100', '1000', '0', '7492', '1021', '22', '8797570', '-17', '3962987', '0', '1192', 'Nepal Insurance Co. Ltd.', '2016-11-16 21:09:40'),
(72, 3381211, '2016-11-16', '14:56:30', 'NIL', '2205', '2190', '14:56:30', '2193.24', '2300', '404', '2205', '2190', '0.4587', '60', '650', '0', '3353', '-14', '22', '7353920', '10', '3962975', '0', '2180', 'Neco Insurance Co. Ltd.', '2016-11-16 21:09:40'),
(73, 3380435, '2016-11-16', '14:29:17', 'NLBBL', '1830', '1790', '14:29:17', '1823.7', '2850', '998', '1870', '1790', '-1.6484', '200', '200', '0', '929', '-57', '10', '1694220', '-30', '3962199', '0', '1820', 'Nerude Laghubita Bikas Bank Limited', '2016-11-16 21:09:40'),
(74, 3380314, '2016-11-16', '14:24:07', 'NLG', '2095', '2100', '14:24:07', '2097.01', '2400', '500', '2100', '2094', '-0.0476', '250', '500', '0', '1322', '-65', '11', '2772250', '-1', '3962078', '0', '2101', 'NLG Insurance Company Ltd.', '2016-11-16 21:09:40'),
(75, 3381224, '2016-11-16', '14:56:58', 'NLIC', '3770', '3700', '14:56:58', '3720.09', '4998', '2245', '3780', '3675', '0', '50', '600', '0', '3775', '10', '35', '14043300', '0', '3962988', '0', '3700', 'Nepal Life Insurance Co. Ltd.', '2016-11-16 21:09:40'),
(76, 3381304, '2016-11-16', '14:59:27', 'NLICL', '3436', '3560', '14:59:27', '3617.29', '3705', '1595', '3705', '3436', '5.6693', '100', '2685', '0', '62897', '437', '446', '227517000', '191', '3963068', '0', '3369', 'National Life Insurance Co. Ltd.', '2016-11-16 21:09:40'),
(77, 3377739, '2016-11-16', '12:15:25', 'NLICLP', '1755', '1755', '12:15:25', '1755', '1755', '980', '1755', '1755', '0', '3120', '3120', '0', '3120', '0', '1', '5475600', '0', '3959503', '0', '1755', 'National Life Insurance Co. Ltd. Promoter Share', '2016-11-16 21:09:40'),
(78, 3381322, '2016-11-16', '14:59:47', 'NMB', '708', '700', '14:59:47', '697.445', '940', '389', '708', '691', '-0.9901', '200', '12432', '0', '27167', '-8', '47', '18947500', '-7', '3963086', '0', '707', 'NMB Bank Limited', '2016-11-16 21:09:40'),
(79, 3378788, '2016-11-16', '13:06:54', 'NMBMF', '2050', '2040', '13:06:54', '2047.83', '4692', '325', '2050', '2040', '-0.9709', '10', '50', '0', '92', '-44', '5', '188400', '-20', '3960552', '0', '2060', 'NMB  Microfinance Bittiya Sanstha Ltd.', '2016-11-16 21:09:40'),
(80, 3381026, '2016-11-16', '14:51:08', 'NMBSF1', '13.05', '13.05', '14:51:08', '13.05', '17.69', '9.02', '13.05', '13.05', '-1.8797', '5000', '5000', '0', '5000', '-49', '1', '65250', '-0.25', '3962790', '0', '13.3', 'NMB Sulav Investment Fund-1', '2016-11-16 21:09:40'),
(81, 3378159, '2016-11-16', '12:36:30', 'NNLB', '1380', '1380', '12:36:30', '1380', '2055', '715', '1380', '1380', '0.5831', '46', '46', '0', '46', '-66', '1', '63480', '8', '3959923', '0', '1372', 'Naya Nepal Laghubitta Bikas Bank Ltd.', '2016-11-16 21:09:40'),
(82, 3380763, '2016-11-16', '14:41:34', 'NTC', '690', '685', '14:41:34', '686.36', '723', '541', '689', '681', '0', '100', '200', '0', '1000', '-71', '9', '686360', '0', '3962527', '0', '685', 'Nepal Doorsanchar Comapany Limited', '2016-11-16 21:09:40'),
(83, 3378021, '2016-11-16', '12:29:46', 'NUBL', '1513', '1525', '12:29:46', '1512.52', '2680', '1011', '1525', '1510', '-0.974', '45', '200', '0', '545', '-53', '5', '824325', '-15', '3959785', '0', '1540', 'Nirdhan Utthan Bank Limited', '2016-11-16 21:09:40'),
(84, 3378869, '2016-11-16', '13:11:34', 'OHL', '485', '503', '13:11:34', '491.429', '770', '385', '503', '485', '3.7113', '10', '22', '0', '42', '-95', '3', '20640', '18', '3960633', '0', '485', 'Oriental Hotels Limited', '2016-11-16 21:09:40'),
(85, 3381321, '2016-11-16', '14:59:46', 'PCBL', '592', '585', '14:59:46', '590.065', '932', '387', '600', '582', '-2.5', '82', '1000', '0', '13817', '53', '64', '8152920', '-15', '3963085', '0', '600', 'Prime Commercial Bank Ltd.', '2016-11-16 21:09:40'),
(86, 3381140, '2016-11-16', '14:54:42', 'PIC', '2210', '2190', '14:54:42', '2185.23', '2560', '420', '2211', '2165', '-1.1287', '40', '500', '0', '2741', '438', '15', '5989700', '-25', '3962904', '0', '2215', 'Premier Insurance Co. Ltd.', '2016-11-16 21:09:40'),
(87, 3380355, '2016-11-16', '14:25:53', 'PICL', '1541', '1541', '14:25:53', '1541', '1750', '346', '1541', '1541', '0.0649', '50', '50', '0', '50', '-96', '1', '77050', '1', '3962119', '0', '1540', 'Prudential Insurance Co. Ltd.', '2016-11-16 21:09:40'),
(88, 3381188, '2016-11-16', '14:56:01', 'PLIC', '2200', '2249', '14:56:01', '2233.03', '2585', '891', '2258', '2200', '3.8799', '300', '400', '0', '2873', '334', '28', '6415480', '84', '3962952', '0', '2165', 'Prime Life Insurance Company Limited', '2016-11-16 21:09:40'),
(89, 3381092, '2016-11-16', '14:53:25', 'PRIN', '1480', '1455', '14:53:25', '1460.78', '1906', '334', '1480', '1455', '-1.0204', '13', '120', '0', '303', '-89', '5', '442615', '-15', '3962856', '0', '1470', 'Prabhu Insurance Ltd.', '2016-11-16 21:09:40'),
(90, 3377783, '2016-11-16', '12:18:10', 'PROFL', '229', '229', '12:18:10', '229', '329', '116', '229', '229', '1.7778', '9880', '9880', '0', '16850', '-57', '2', '3858650', '4', '3959547', '0', '225', 'ProgressiveFinance Limited', '2016-11-16 21:09:41'),
(91, 3380151, '2016-11-16', '14:17:02', 'PURBL', '473', '465', '14:17:02', '469.878', '790', '270', '473', '465', '-1.6913', '48', '150', '0', '328', '228', '4', '154120', '-8', '3961915', '0', '473', 'Purnima Bikas Bank Ltd.', '2016-11-16 21:09:41'),
(92, 3381124, '2016-11-16', '14:54:22', 'RBBBL', '477', '480', '14:54:22', '474.648', '640', '171', '480', '471', '-1.2346', '50', '227', '0', '717', '-59', '15', '340323', '-6', '3962888', '0', '486', 'Raptibheri Bikas Bank Ltd.', '2016-11-16 21:09:41'),
(93, 3381222, '2016-11-16', '14:56:43', 'RBCL', '12960', '12490', '14:56:43', '12802.1', '16900', '4995', '13000', '12490', '-5.3788', '70', '100', '0', '617', '1', '12', '7898880', '-710', '3962986', '0', '13200', 'Rastriya Beema Company Limited', '2016-11-16 21:09:41'),
(94, 3380851, '2016-11-16', '14:45:20', 'RBCLPO', '12750', '12010', '14:45:20', '12317.5', '18500', '3100', '12750', '12010', '-3.92', '23', '500', '0', '733', '363', '4', '9028730', '-490', '3962615', '0', '12500', 'Rastriya Beema Company Limited Promoter Share', '2016-11-16 21:09:41'),
(95, 3380282, '2016-11-16', '14:23:06', 'RHPC', '257', '250', '14:23:06', '251.366', '508', '246', '257', '246', '-2.7237', '11', '21', '0', '208', '-88', '17', '52284', '-7', '3962046', '0', '257', 'Ridi Hydropower Development Company Ltd.', '2016-11-16 21:09:41'),
(96, 3377337, '2016-11-16', '11:51:17', 'RLFL', '309', '321', '11:51:17', '310.532', '417', '130', '321', '309', '2.2293', '50', '400', '0', '470', '1466', '3', '145950', '7', '3959101', '0', '314', 'Reliance Lotus Finance Ltd.', '2016-11-16 21:09:41'),
(97, 3380661, '2016-11-16', '14:38:01', 'RMDC', '775', '753', '14:38:01', '762.221', '1728', '586', '780', '753', '-0.9211', '37', '500', '0', '2181', '-50', '25', '1662400', '-7', '3962425', '0', '760', 'Rural Microfinance Development Centre Ltd.', '2016-11-16 21:09:41'),
(98, 3381168, '2016-11-16', '14:55:33', 'RMFL', '1911', '1841', '14:55:33', '1874.78', '2703', '321', '1911', '1841', '-5.5897', '11', '11', '0', '343', '-61', '33', '643049', '-109', '3962932', '0', '1950', 'Reliable Microfinance Bittiya Sanstha Ltd.', '2016-11-16 21:09:41'),
(99, 3378750, '2016-11-16', '13:05:28', 'SADBL', '445', '445', '13:05:28', '444.368', '610', '292', '445', '442', '-1.7778', '150', '150', '0', '190', '-93', '2', '84430', '-5', '3960514', '0', '450', 'Shangrila Development Bank Ltd.', '2016-11-16 21:09:41'),
(100, 3381287, '2016-11-16', '14:59:09', 'SAFL', '521', '513', '14:59:09', '516.385', '635', '161', '525', '513', '-1.5355', '100', '7000', '0', '11100', '590', '22', '5731880', '-8', '3963051', '0', '521', 'Sagarmatha  Finance Limited', '2016-11-16 21:09:41'),
(101, 3379364, '2016-11-16', '13:38:03', 'SAJHA', '290', '275', '13:38:03', '286.25', '415', '246', '290', '275', '-5.1724', '10', '100', '0', '180', '221', '4', '51525', '-15', '3961128', '0', '290', 'Sajha Bikas Bank Ltd.', '2016-11-16 21:09:41'),
(102, 3381257, '2016-11-16', '14:58:11', 'SANIMA', '605', '598', '14:58:11', '598.547', '945', '452', '605', '593', '-0.6656', '20', '1700', '0', '20274', '-14', '90', '12134900', '-3', '3963021', '0', '601', 'Sanima Bank Limited', '2016-11-16 21:09:41'),
(103, 3381268, '2016-11-16', '14:58:37', 'SBI', '1657', '1660', '14:58:37', '1648.71', '2152', '740', '1665', '1640', '-0.3003', '100', '3699', '0', '17686', '429', '41', '29159100', '-5', '3963032', '0', '1665', 'Nepal SBI Bank Limited', '2016-11-16 21:09:41'),
(104, 3381266, '2016-11-16', '14:58:27', 'SBL', '1070', '1065', '14:58:27', '1064.81', '1448', '554', '1075', '1050', '-0.0938', '100', '1500', '0', '16199', '-42', '75', '17248800', '-1', '3963030', '0', '1066', 'Siddhartha Bank Limited', '2016-11-16 21:09:41'),
(105, 3381273, '2016-11-16', '14:58:43', 'SCB', '3210', '3143', '14:58:43', '3121.66', '3952', '1639', '3210', '3080', '-0.8517', '20', '1890', '0', '10667', '52', '96', '33298700', '-27', '3963037', '0', '3170', 'Standard Chartered Bank Limited', '2016-11-16 21:09:41'),
(106, 3381245, '2016-11-16', '14:57:33', 'SDBL', '480', '470', '14:57:33', '473.665', '585', '150', '487', '470', '-1.6736', '200', '2000', '0', '12851', '62', '37', '6087060', '-8', '3963009', '0', '478', 'Siddhartha Development Bank Ltd.', '2016-11-16 21:09:41'),
(107, 3379905, '2016-11-16', '14:04:30', 'SEOS', '12.8', '13', '14:04:30', '12.9707', '17.17', '9.21', '13', '12.8', '2.7668', '2000', '10000', '0', '17100', '42', '5', '221799', '0.35', '3961669', '0', '12.65', 'Siddhartha Equity Orineted Scheme', '2016-11-16 21:09:41'),
(108, 3380255, '2016-11-16', '14:21:42', 'SETI', '245', '245', '14:21:42', '242.079', '594', '157', '245', '241', '-2', '10', '450', '0', '890', '48', '5', '215450', '-5', '3962019', '0', '250', 'Seti Finance Limited', '2016-11-16 21:09:41'),
(109, 3381034, '2016-11-16', '14:51:39', 'SEWA', '338', '331', '14:51:39', '332.14', '740', '250', '337', '331', '-2.3599', '440', '440', '0', '679', '-78', '5', '225523', '-8', '3962798', '0', '339', 'Sewa Bikas Bank Limited', '2016-11-16 21:09:41'),
(110, 3377812, '2016-11-16', '12:18:56', 'SFFIL', '591', '638', '12:18:56', '618.167', '638', '60', '638', '591', '10', '20', '20', '0', '60', '0', '5', '37090', '58', '3959576', '0', '580', 'Shrijana Finance  (Bittaya Sanstha)', '2016-11-16 21:09:41'),
(111, 3380213, '2016-11-16', '14:19:55', 'SHINE', '586', '586', '14:19:55', '585.492', '695', '315', '586', '580', '0', '51', '469', '0', '602', '-60', '4', '352466', '0', '3961977', '0', '586', 'Shine Resunga Development Bank Ltd.', '2016-11-16 21:09:41'),
(112, 3381248, '2016-11-16', '14:57:42', 'SHL', '420', '420', '14:57:42', '418.907', '518', '305', '420', '415', '1.9417', '650', '2000', '0', '13270', '185', '19', '5558900', '8', '3963012', '0', '412', 'Soaltee Hotel Limited', '2016-11-16 21:09:41'),
(113, 3381274, '2016-11-16', '14:58:45', 'SHPC', '904', '913', '14:58:45', '913.128', '1234', '586', '917', '904', '-0.5447', '410', '410', '0', '2577', '-23', '25', '2353130', '-5', '3963038', '0', '918', 'Sanima Mai Hydropower Ltd.', '2016-11-16 21:09:41'),
(114, 3378608, '2016-11-16', '12:58:43', 'SIC', '2210', '2210', '12:58:43', '2210', '3099', '701', '2210', '2210', '0', '100', '100', '0', '100', '-66', '1', '221000', '0', '3960372', '0', '2210', 'Sagarmatha Insurance Co. Ltd.', '2016-11-16 21:09:41'),
(115, 3381315, '2016-11-16', '14:59:38', 'SICL', '4060', '4065', '14:59:38', '4072.94', '4320', '490', '4099', '4051', '0', '40', '500', '0', '4011', '-50', '37', '16336600', '0', '3963079', '0', '4065', 'Shikhar Insurance Co. Ltd.', '2016-11-16 21:09:41'),
(116, 3381119, '2016-11-16', '14:54:18', 'SIL', '2500', '2478', '14:54:18', '2481.53', '2720', '486', '2500', '2478', '-1.2749', '104', '500', '0', '3485', '10', '32', '8648140', '-32', '3962883', '0', '2510', 'Siddhartha Insurance Ltd.', '2016-11-16 21:09:41'),
(117, 3381271, '2016-11-16', '14:58:41', 'SINDU', '425', '412', '14:58:41', '409.953', '700', '180', '425', '400', '-3.5129', '10', '200', '0', '635', '84', '7', '260320', '-15', '3963035', '0', '427', 'Sindhu Bikash Bank Ltd', '2016-11-16 21:09:41'),
(118, 3380662, '2016-11-16', '14:38:06', 'SKBBL', '1674', '1645', '14:38:06', '1652.82', '2800', '974', '1674', '1645', '0.0608', '219', '400', '0', '2945', '-43', '27', '4867540', '1', '3962426', '0', '1644', 'Sana Kisan Bikas Bank Ltd', '2016-11-16 21:09:41'),
(119, 3380982, '2016-11-16', '14:49:20', 'SKDBL', '503', '495', '14:49:20', '492.375', '657', '316', '503', '486', '0.2024', '35', '117', '0', '459', '4490', '16', '226000', '1', '3962746', '0', '494', 'Saptakoshi Development Bank Ltd.', '2016-11-16 21:09:41'),
(120, 3380537, '2016-11-16', '14:33:01', 'SLBBL', '1951', '1951', '14:33:01', '1951', '3060', '1423', '1951', '1951', '0.0513', '200', '200', '0', '200', '0', '1', '390200', '1', '3962301', '0', '1950', 'Swarojgar Laghu Bitta Bikas Bank Ltd.', '2016-11-16 21:09:42'),
(121, 3381235, '2016-11-16', '14:57:15', 'SLICL', '890', '890', '14:57:15', '887.688', '1353', '432', '894', '881', '1.0227', '20', '500', '0', '2675', '155', '15', '2374570', '10', '3962999', '0', '880', 'Surya Life Insurance Company Limited', '2016-11-16 21:09:42'),
(122, 3381284, '2016-11-16', '14:59:01', 'SMFDB', '2800', '2775', '14:59:01', '2782.63', '3468', '1021', '2800', '2775', '-1.9435', '200', '200', '0', '332', '0', '3', '923832', '-55', '3963048', '0', '2830', 'Summit Micro Finance Development Bank Ltd.', '2016-11-16 21:09:42'),
(123, 3381313, '2016-11-16', '14:59:35', 'SRBL', '540', '539', '14:59:35', '537.189', '1024', '317', '540', '535', '-0.1852', '16', '884', '0', '3692', '-56', '22', '1983300', '-1', '3963077', '0', '540', 'Sunrise Bank Limited', '2016-11-16 21:09:42'),
(124, 3381123, '2016-11-16', '14:54:21', 'SWBBL', '2400', '2352', '14:54:21', '2364.44', '3220', '1425', '2400', '2352', '-1.3836', '29', '200', '0', '1687', '127', '20', '3988810', '-33', '3962887', '0', '2385', 'Swabalamban Bikas Bank Limited', '2016-11-16 21:09:42'),
(125, 3379919, '2016-11-16', '14:05:18', 'SYFL', '175', '170', '14:05:18', '173.036', '228', '80', '175', '170', '-1.7341', '29', '200', '0', '560', '60', '6', '96900', '-3', '3961683', '0', '173', 'Synergy Finance Ltd.', '2016-11-16 21:09:42'),
(126, 3381039, '2016-11-16', '14:51:51', 'TDBL', '515', '515', '14:51:51', '515.506', '597', '190', '517', '515', '-1.341', '100', '250', '0', '1114', '41', '9', '574274', '-7', '3962803', '0', '522', 'Tourism Development Bank Limited', '2016-11-16 21:09:42'),
(127, 3379775, '2016-11-16', '13:58:10', 'TNBL', '485', '476', '13:58:10', '478.997', '740', '212', '485', '476', '-1.2448', '54', '210', '0', '614', '69', '7', '294104', '-6', '3961539', '0', '482', 'Tinau Development Bank Limited', '2016-11-16 21:09:42'),
(128, 3379198, '2016-11-16', '13:29:57', 'TRH', '250', '255', '13:29:57', '253.333', '365', '200', '255', '250', '0', '200', '200', '0', '300', '-85', '2', '76000', '0', '3960962', '0', '255', 'Taragaon Regency Hotel Limited', '2016-11-16 21:09:42'),
(129, 3381051, '2016-11-16', '14:52:30', 'UFCL', '185', '184', '14:52:30', '183.578', '243', '87', '185', '182', '-1.6043', '150', '209', '0', '652', '340', '5', '119693', '-3', '3962815', '0', '187', 'Union Finance Co. Ltd.', '2016-11-16 21:09:42'),
(130, 3381205, '2016-11-16', '14:56:17', 'UIC', '1351', '1385', '14:56:17', '1363.28', '1709', '341', '1400', '1350', '2.9412', '260', '500', '0', '2960', '-41', '16', '4035300', '25', '3962969', '0', '1360', 'United Insurance Co. (Nepal) Ltd.', '2016-11-16 21:09:42'),
(131, 3380686, '2016-11-16', '14:39:18', 'VLBS', '1151', '1170', '14:39:18', '1164.09', '2153', '312', '1174', '1151', '-0.3407', '20', '170', '0', '554', '-58', '16', '644905', '-4', '3962450', '0', '1174', 'Vijaya laghubitta Bittiya Sanstha Ltd.', '2016-11-16 21:09:42'),
(132, 3381043, '2016-11-16', '14:52:15', 'VSDBL', '221', '220', '14:52:15', '219.368', '239', '125', '222', '217', '-1.3453', '10', '2000', '0', '37178', '24', '99', '8155680', '-3', '3962807', '0', '223', 'Vibor Society Development Bank Limited', '2016-11-16 21:09:42'),
(133, 3380975, '2016-11-16', '14:49:04', 'WDBL', '340', '334', '14:49:04', '338', '637', '208', '340', '334', '-1.7647', '200', '300', '0', '600', '-57', '3', '202800', '-6', '3962739', '0', '340', 'Western Development Bank Limited', '2016-11-16 21:09:42'),
(134, 3381084, '2016-11-16', '14:53:15', 'YETI', '333', '331', '14:53:15', '332.511', '433', '107', '335', '329', '-1.4925', '200', '1000', '0', '4125', '142', '22', '1371610', '-4', '3962848', '0', '335', 'Yeti  Development Bank Limited', '2016-11-16 21:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nepse_api_data_secondary`
--

CREATE TABLE `tbl_nepse_api_data_secondary` (
  `id` int(11) NOT NULL,
  `api_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `stock_symbol` varchar(255) DEFAULT NULL,
  `opening_price` varchar(10) DEFAULT NULL,
  `last_trade_price` varchar(255) DEFAULT NULL,
  `last_trade_time` time DEFAULT NULL,
  `daily_stock_stats_average_price` varchar(255) NOT NULL,
  `daily_stock_stats_52_week_high` varchar(255) DEFAULT NULL,
  `daily_stock_stats_52_week_low` varchar(255) DEFAULT NULL,
  `daily_stock_stats_highest_price` varchar(255) DEFAULT NULL,
  `daily_stock_stats_lowest_price` varchar(255) DEFAULT NULL,
  `daily_stock_stats_percentage_change_in_price` varchar(255) DEFAULT NULL,
  `daily_stock_stats_last_trade_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_last_highest_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_last_lowest_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_total_traded_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_percentage_change_in_volume` varchar(255) DEFAULT NULL,
  `daily_stock_stats_total_no_of_trades` varchar(255) DEFAULT NULL,
  `daily_stock_stats_turn_over` varchar(255) DEFAULT NULL,
  `daily_stock_stats_adsolute_change_in_price` varchar(255) DEFAULT NULL,
  `daily_stock_price_movement_id` varchar(255) DEFAULT NULL,
  `contract_type` char(10) DEFAULT NULL,
  `daily_stock_stats_previous_day_closing_price` varchar(255) DEFAULT NULL,
  `stock_name` varchar(255) DEFAULT NULL,
  `pulled_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `del_flag` int(11) DEFAULT '0',
  `status` int(1) DEFAULT NULL,
  `display_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `description`, `added_date`, `updated_date`, `del_flag`, `status`, `display_order`) VALUES
(1, 'New1', 'news 1', '2016-11-01 16:39:03', '2016-11-01 16:41:12', 0, 1, 2),
(2, 'News2', 'New2', '2016-11-01 16:41:33', NULL, 0, 1, 1),
(3, 'News3', 'News3', '2016-11-03 06:14:20', NULL, 0, 1, 3),
(4, 'Supermoon delights world’s star gazers in full moon, eclipse combination', 'Google moves to restrict ads on fake news sites', '2016-11-01 16:39:03', '2016-11-01 16:41:12', 0, 1, 4),
(5, 'Chaudhary, Pandey co-convenors of ICC advisory committee to resolve Nepal cricket crisis', 'Russian President Vladimir Putin spoke with US President-elect Donald Trump on Monday and agreed to work towards "constructive cooperation", the Krem...', '2016-11-01 16:41:33', NULL, 0, 1, 5),
(6, 'PM Dahal pays tribute to late Pandey', 'Prime Minister and CPN Maoist Centre Chairman Pushpa Kamal Dahal today paid tribute to lawmaker Bhakti Prasad Pandey who died on Monday....', '2016-11-03 06:14:20', NULL, 0, 1, 6),
(7, 'Chaudhary, Pandey co-convenors of ICC advisory committee to resolve Nepal cricket crisis', 'International Cricket Council''s advisory committee on Tuesday appointed industrialist Binod Kumar Chaudhary and Cricket Association of Nepal''s former ...', '2016-11-01 16:39:03', '2016-11-01 16:41:12', 0, 1, 7),
(8, 'Property worth Rs 126,000 stolen from Kapan room', 'Property worth around Rs 126,000 was stolen from a rented room at Akasedhara, in Kapan of Budhanilka...', '2016-11-01 16:41:33', NULL, 0, 1, 8),
(9, 'RPP, RPP-N to announce unification on November 21', 'Rastriya Prajatantra Party (RPP) and Rastriya Prajatantra Party-Nepal (RPP-N) have said that they would announce the unification between two parties o...', '2016-11-03 06:14:20', NULL, 0, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_settings`
--

CREATE TABLE `tbl_site_settings` (
  `site_id` int(2) NOT NULL,
  `site_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_title` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `site_slogan` text COLLATE utf8_unicode_ci,
  `meta_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `site_authors` text COLLATE utf8_unicode_ci NOT NULL,
  `site_offline_msg` text COLLATE utf8_unicode_ci,
  `site_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_status` tinyint(4) DEFAULT '1',
  `encoder` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blackevi',
  `google_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eblogger` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `googleplus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '£',
  `paypal_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `per_page` int(11) NOT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zoom` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `default_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'demo@uno.com',
  `default_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '654321'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_site_settings`
--

INSERT INTO `tbl_site_settings` (`site_id`, `site_name`, `site_title`, `logo`, `site_slogan`, `meta_description`, `meta_keywords`, `site_authors`, `site_offline_msg`, `site_email`, `site_status`, `encoder`, `google_code`, `facebook`, `twitter`, `youtube`, `eblogger`, `googleplus`, `linkedin`, `slider`, `currency`, `paypal_email`, `currency_code`, `phone`, `per_page`, `map`, `zoom`, `default_email`, `default_password`) VALUES
(1, 'My Stock Watch', 'My Stock Watch', '3d8d770530138f189b53cfdb66002c96.jpg', 'Track your stock status like never before', 'Share App, the leading job listing site.', 'Job Portal is an online job listing site where employees and employers find the best for each other.', 'Share App - Team', '<p>\r\n The Site is Currently Offline and Under Maintenance.</p>\r\n<p>\r\n Please visit back later.</p>\r\n<p>\r\n Thank You.</p>\r\n<p>\r\n - <strong>My Stock Watch</strong></p>\r\n', 'info@mystockwatch.com', 1, 'tuesdaystore', '', 'http://facebook.com/mystockwatch', 'http://twitter.com/mystockwatch', 'http://www.youtube.com/mystockwatch', 'http://www.youtube.com', 'http://www.youtube.com', 'http://www.youtube.com', '3', '£', '0', '0', '1111111111111', 12, '27.701806,85.311906', '15', 'demo@uno.com', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `no_of_transactions` int(11) DEFAULT NULL,
  `max_price` decimal(10,2) DEFAULT NULL,
  `min_price` decimal(10,2) DEFAULT NULL,
  `closing_price` decimal(10,2) DEFAULT NULL,
  `traded_shares` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `previous_closing` varchar(255) DEFAULT NULL,
  `difference` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`id`, `company`, `no_of_transactions`, `max_price`, `min_price`, `closing_price`, `traded_shares`, `amount`, `previous_closing`, `difference`, `added_date`) VALUES
(1, 'Agriculture Development Bank Limited', 41, '612.00', '590.00', '596.00', '7995', '4812885', '600', '-4', '2016-11-16 12:17:54'),
(2, 'Alpine Development Bank Limited', 4, '418.00', '410.00', '411.00', '556', '228655', '410', '1', '2016-11-16 12:17:54'),
(3, 'Api Power Company Ltd.', 21, '590.00', '563.00', '569.00', '573', '330221', '578', '-9', '2016-11-16 12:17:54'),
(4, 'Arun Valley Hydropower Development Co. Ltd.', 12, '298.00', '293.00', '298.00', '2655', '783348', '296', '2', '2016-11-16 12:17:54'),
(5, 'Asian Life Insurance Co. Limited', 9, '1743.00', '1716.00', '1716.00', '1746', '3023149', '1738', '-22', '2016-11-16 12:17:54'),
(6, 'Bank of Kathmandu Lumbini Ltd.', 257, '710.00', '692.00', '698.00', '66240', '46245204', '698', '0', '2016-11-16 12:17:54'),
(7, 'Barun Hydropower Co. Ltd.', 11, '382.00', '360.00', '365.00', '410', '152160', '375', '-10', '2016-11-16 12:17:54'),
(8, 'Bhargav Bikash Bank Ltd.', 1, '545.00', '545.00', '545.00', '100', '54500', '545', '0', '2016-11-16 12:17:54'),
(9, 'Bottlers Nepal (Balaju) Limited', 1, '1660.00', '1660.00', '1660.00', '100', '166000', '1660', '0', '2016-11-16 12:17:54'),
(10, 'Bottlers Nepal (Terai) Limited', 4, '5175.00', '5000.00', '5000.00', '150', '754910', '5280', '-280', '2016-11-16 12:17:54'),
(11, 'Butwal Power Company Limited', 7, '715.00', '683.00', '683.00', '2011', '1420701', '718', '-35', '2016-11-16 12:17:54'),
(12, 'Century Commercial Bank Ltd.', 60, '430.00', '418.00', '421.00', '9731', '4119582', '422', '-1', '2016-11-16 12:17:54'),
(13, 'Chhimek Laghubitta Bikas Bank Limited', 20, '2050.00', '2011.00', '2026.00', '2004', '4087025', '2050', '-24', '2016-11-16 12:17:54'),
(14, 'Chilime Hydropower Company Limited', 61, '1209.00', '1182.00', '1195.00', '8187', '9798072', '1198', '-3', '2016-11-16 12:17:54'),
(15, 'Citizen Bank International Limited', 96, '535.00', '525.00', '525.00', '18050', '9570590', '528', '-3', '2016-11-16 12:17:54'),
(16, 'Citizen Investment Trust', 9, '4595.00', '4500.00', '4511.00', '438', '1988775', '4518', '-7', '2016-11-16 12:17:54'),
(17, 'Civil Bank Ltd', 293, '324.00', '321.00', '323.00', '96574', '31130191', '321', '2', '2016-11-16 12:17:54'),
(18, 'Cosmos Development Bank Ltd.', 1, '460.00', '460.00', '460.00', '250', '115000', '462', '-2', '2016-11-16 12:17:54'),
(19, 'Deprosc Development Bank Limited', 13, '2764.00', '2705.00', '2705.00', '1623', '4448980', '2710', '-5', '2016-11-16 12:17:54'),
(20, 'Deva Bikas Bank Limited', 13, '352.00', '346.00', '350.00', '2200', '768382', '351', '-1', '2016-11-16 12:17:54'),
(21, 'Everest Bank Limited', 302, '3725.00', '3695.00', '3706.00', '46810', '173458190', '3690', '16', '2016-11-16 12:17:55'),
(22, 'Everest Insurance Co. Ltd.', 3, '1970.00', '1955.00', '1955.00', '600', '1176000', '2002', '-47', '2016-11-16 12:17:55'),
(23, 'Excel Development Bank Ltd.', 7, '675.00', '668.00', '675.00', '1971', '1325169', '665', '10', '2016-11-16 12:17:55'),
(24, 'Garima Bikas Bank Limited', 11, '430.00', '398.00', '430.00', '1507', '646978', '391', '39', '2016-11-16 12:17:55'),
(25, 'Global IME Bank Limited', 65, '488.00', '483.00', '485.00', '11394', '5534719', '487', '-2', '2016-11-16 12:17:55'),
(26, 'Global IME Samunnat Scheme-1', 2, '11.45', '11.41', '11.41', '18986', '217009.98', '11.45', '-0.04', '2016-11-16 12:17:55'),
(27, 'Goodwill Finance Co. Ltd.', 1, '380.00', '380.00', '380.00', '500', '190000', '377', '3', '2016-11-16 12:17:55'),
(28, 'Guheshowori Merchant Bank & Finance Co. Ltd.', 4, '300.00', '295.00', '295.00', '1550', '461100', '300', '-5', '2016-11-16 12:17:55'),
(29, 'Gurans Life Insurance Company Ltd.', 15, '895.00', '886.00', '890.00', '2677', '2384300', '897', '-7', '2016-11-16 12:17:55'),
(30, 'Hamro Bikas Bank Ltd.', 4, '520.00', '510.00', '520.00', '867', '450340', '510', '10', '2016-11-16 12:17:55'),
(31, 'Himalayan Bank Limited', 16, '1370.00', '1330.00', '1340.00', '1307', '1758130', '1355', '-15', '2016-11-16 12:17:55'),
(32, 'Himalayan General Insurance Co. Ltd', 12, '1855.00', '1820.00', '1830.00', '1060', '1953841', '1845', '-15', '2016-11-16 12:17:55'),
(33, 'ICFC Finance Limited', 8, '295.00', '291.00', '292.00', '763', '223462', '290', '2', '2016-11-16 12:17:55'),
(34, 'ILFCO Microfinance Bittiya Sanstha Ltd.', 5, '900.00', '858.00', '858.00', '550', '481980', '900', '-42', '2016-11-16 12:17:55'),
(35, 'Jalabidyut Lagani tatha Bikas Co. Ltd.', 224, '281.00', '272.00', '281.00', '43991', '12166152', '279', '2', '2016-11-16 12:17:55'),
(36, 'Janaki Finance Ltd.', 10, '351.00', '347.00', '347.00', '3125', '1092950', '353', '-6', '2016-11-16 12:17:55'),
(37, 'Janautthan Samudayic Laghubitta Bikas Bank Ltd.', 20, '2900.00', '2820.00', '2840.00', '200', '570080', '2868', '-28', '2016-11-16 12:17:55'),
(38, 'Jebils Finance Ltd.', 3, '265.00', '265.00', '265.00', '1150', '304750', '270', '-5', '2016-11-16 12:17:55'),
(39, 'Jyoti Bikas Bank Limited', 46, '387.00', '377.00', '381.00', '5083', '1941283', '384', '-3', '2016-11-16 12:17:55'),
(40, 'Kabeli Bikas Bank Limited', 2, '605.00', '604.00', '605.00', '48', '29016', '613', '-8', '2016-11-16 12:17:55'),
(41, 'Kailash Bikas Bank Ltd.', 20, '606.00', '603.00', '605.00', '2979', '1800446', '605', '0', '2016-11-16 12:17:55'),
(42, 'Kalika Microcredit Development Bank Ltd.', 6, '1887.00', '1820.00', '1820.00', '250', '460610', '1850', '-30', '2016-11-16 12:17:55'),
(43, 'Kamana Bikas Bank Limited', 18, '420.00', '414.00', '416.00', '2446', '1016101', '420', '-4', '2016-11-16 12:17:56'),
(44, 'Kanchan Development Bank Limited', 6, '560.00', '540.00', '550.00', '2611', '1440940', '559', '-9', '2016-11-16 12:17:56'),
(45, 'Kankai Bikas Bank Ltd.', 4, '650.00', '637.00', '637.00', '850', '546900', '640', '-3', '2016-11-16 12:17:56'),
(46, 'Kisan Microfinance Bittiya Sanstha Ltd.', 37, '4077.00', '3771.00', '4000.00', '620', '2455680', '3845', '155', '2016-11-16 12:17:56'),
(47, 'Kumari Bank Limited', 252, '618.00', '608.00', '610.00', '54607', '33391312', '605', '5', '2016-11-16 12:17:56'),
(48, 'Lalitpur Finance Ltd.', 2, '222.00', '220.00', '220.00', '400', '88600', '225', '-5', '2016-11-16 12:17:56'),
(49, 'Laxmi Bank Limited', 45, '832.00', '825.00', '825.00', '7412', '6131363', '825', '0', '2016-11-16 12:17:56'),
(50, 'Laxmi Laghubitta Bittiya Sanstha Ltd.', 8, '1700.00', '1638.00', '1638.00', '428', '719940', '1670', '-32', '2016-11-16 12:17:56'),
(51, 'Laxmi Value Fund-1', 1, '12.85', '12.85', '12.85', '581', '7465.85', '12.6', '0.25', '2016-11-16 12:17:56'),
(52, 'Life Insurance Co. Nepal', 7, '3235.00', '3150.00', '3200.00', '1112', '3533216', '3218', '-18', '2016-11-16 12:17:56'),
(53, 'Lumbini Finance Ltd.', 5, '415.00', '410.00', '415.00', '1616', '667324', '413', '2', '2016-11-16 12:17:56'),
(54, 'Lumbini General Insurance Co. Ltd.', 61, '1800.00', '1760.00', '1760.00', '11756', '20811475', '1760', '0', '2016-11-16 12:17:56'),
(55, 'Machhapuchhre Bank Limited', 93, '555.00', '521.00', '546.00', '21495', '11715798', '548', '-2', '2016-11-16 12:17:56'),
(56, 'Mahila Sahayatra Microfinance Bittiya Sanstha Ltd.', 26, '1169.00', '1053.00', '1053.00', '650', '709940', '1170', '-117', '2016-11-16 12:17:56'),
(57, 'Manjushree Financial Institution Ltd.', 7, '420.00', '416.00', '420.00', '850', '356180', '415', '5', '2016-11-16 12:17:56'),
(58, 'Mega Bank Nepal Ltd.', 58, '500.00', '493.00', '493.00', '20196', '10004184', '502', '-9', '2016-11-16 12:17:56'),
(59, 'Mirmire Microfinance Development Bank Ltd.', 4, '3180.00', '3121.00', '3121.00', '120', '375230', '3213', '-92', '2016-11-16 12:17:56'),
(60, 'Mission Development Bank Ltd.', 1, '623.00', '623.00', '623.00', '254', '158242', '635', '-12', '2016-11-16 12:17:56'),
(61, 'Miteri Development Bank Limited', 2, '600.00', '590.00', '590.00', '93', '55070', '600', '-10', '2016-11-16 12:17:56'),
(62, 'Muktinath Bikas Bank Ltd.', 40, '990.00', '977.00', '983.00', '5532', '5443594', '995', '-12', '2016-11-16 12:17:56'),
(63, 'Nabil Balance Fund 1', 5, '21.80', '21.10', '21.80', '10934', '234177.7', '21.52', '0.28', '2016-11-16 12:17:56'),
(64, 'Nabil Bank Limited', 48, '1725.00', '1710.00', '1716.00', '4705', '8079617', '1722', '-6', '2016-11-16 12:17:56'),
(65, 'NABIL Bank Limited Promotor Share', 11, '1244.00', '1231.00', '1231.00', '2927', '3613414', '1240', '-9', '2016-11-16 12:17:56'),
(66, 'NagBeli LaghuBitta Bikas Bank Ltd.', 27, '5000.00', '4880.00', '4980.00', '1084', '5364305', '4794', '186', '2016-11-16 12:17:56'),
(67, 'National Hydro Power Company Limited', 17, '167.00', '162.00', '163.00', '13680', '2247650', '166', '-3', '2016-11-16 12:17:56'),
(68, 'National Life Insurance Co. Ltd.', 67, '3380.00', '3320.00', '3369.00', '11704', '39221379', '3310', '59', '2016-11-16 12:17:56'),
(69, 'Naya Nepal Laghubitta Bikas Bank Ltd.', 3, '1373.00', '1372.00', '1372.00', '139', '190757', '1371', '1', '2016-11-16 12:17:56'),
(70, 'NB Insurance Co. Ltd.', 2, '176.00', '173.00', '176.00', '20', '3490', '170', '6', '2016-11-16 12:17:57'),
(71, 'Neco Insurance Co. Ltd.', 25, '2205.00', '2180.00', '2180.00', '3940', '8648700', '2185', '-5', '2016-11-16 12:17:57'),
(72, 'Nepal Bangladesh Bank Limited', 103, '830.00', '810.00', '810.00', '12093', '9851136', '818', '-8', '2016-11-16 12:17:57'),
(73, 'Nepal Bank Limited', 130, '508.00', '482.00', '490.00', '40639', '20215137', '494', '-4', '2016-11-16 12:17:57'),
(74, 'Nepal Community Development Bank Ltd.', 1, '404.00', '404.00', '404.00', '20', '8080', '397', '7', '2016-11-16 12:17:57'),
(75, 'Nepal Doorsanchar Comapany Limited', 19, '693.00', '676.00', '685.00', '3534', '2414632', '676', '9', '2016-11-16 12:17:57'),
(76, 'Nepal Grameen Bikas Bank Ltd.', 13, '695.00', '660.00', '693.00', '1560', '1041280', '695', '-2', '2016-11-16 12:17:57'),
(77, 'Nepal Insurance Co. Ltd.', 8, '1216.00', '1192.00', '1192.00', '668', '800976', '1240', '-48', '2016-11-16 12:17:57'),
(78, 'Nepal Investment Bank Limited', 101, '785.00', '772.00', '775.00', '16965', '13212541', '774', '1', '2016-11-16 12:17:57'),
(79, 'Nepal Investment Bank Ltd. Promoter Share', 4, '681.00', '675.00', '675.00', '550', '373550', '668', '7', '2016-11-16 12:17:57'),
(80, 'Nepal Life Insurance Co. Ltd.', 21, '3731.00', '3700.00', '3700.00', '3421', '12740206', '3700', '0', '2016-11-16 12:17:57'),
(81, 'Nepal SBI Bank Limited', 30, '1680.00', '1658.00', '1665.00', '3340', '5556035', '1670', '-5', '2016-11-16 12:17:57'),
(82, 'Nerude Laghubita Bikas Bank Limited', 11, '1820.00', '1810.00', '1820.00', '2177', '3951640', '1809', '11', '2016-11-16 12:17:57'),
(83, 'Ngadi Group Power Ltd.', 49, '341.00', '335.00', '336.00', '1645', '555751', '344', '-8', '2016-11-16 12:17:57'),
(84, 'NIBL Samriddhi Fund 1', 3, '12.51', '12.51', '12.51', '15000', '187650', '12.75', '-0.24', '2016-11-16 12:17:57'),
(85, 'NIC Asia Bank Ltd.', 92, '592.00', '570.00', '570.00', '15963', '9282123', '586', '-16', '2016-11-16 12:17:57'),
(86, 'Nirdhan Utthan Bank Limited', 17, '1570.00', '1500.00', '1540.00', '1172', '1790490', '1500', '40', '2016-11-16 12:17:57'),
(87, 'NLG Insurance Company Ltd.', 21, '2115.00', '2100.00', '2101.00', '3829', '8070035', '2110', '-9', '2016-11-16 12:17:57'),
(88, 'NMB Microfinance Bittiya Sanstha Ltd.', 8, '2065.00', '2060.00', '2060.00', '165', '340005', '2020', '40', '2016-11-16 12:17:57'),
(89, 'NMB Bank Limited', 114, '710.00', '699.00', '707.00', '29778', '20958219', '699', '8', '2016-11-16 12:17:57'),
(90, 'NMB Sulav Investment Fund-1', 4, '13.53', '13.00', '13.30', '9810', '129775', '13', '0.3', '2016-11-16 12:17:57'),
(91, 'Oriental Hotels Limited', 3, '485.00', '481.00', '485.00', '962', '466350', '490', '-5', '2016-11-16 12:17:57'),
(92, 'Prabhu Insurance Ltd.', 28, '1500.00', '1466.00', '1470.00', '3001', '4430130', '1510', '-40', '2016-11-16 12:17:57'),
(93, 'Premier Insurance Co. Ltd.', 6, '2240.00', '2190.00', '2215.00', '509', '1118260', '2230', '-15', '2016-11-16 12:17:57'),
(94, 'Prime Commercial Bank Ltd.', 73, '609.00', '598.00', '600.00', '9017', '5438412', '600', '0', '2016-11-16 12:17:57'),
(95, 'Prime Life Insurance Company Limited', 7, '2195.00', '2161.00', '2165.00', '661', '1439669', '2180', '-15', '2016-11-16 12:17:57'),
(96, 'ProgressiveFinance Limited', 4, '229.00', '225.00', '225.00', '40010', '9002790', '225', '0', '2016-11-16 12:17:57'),
(97, 'Prudential Insurance Co. Ltd.', 11, '1550.00', '1520.00', '1540.00', '1280', '1967540', '1535', '5', '2016-11-16 12:17:57'),
(98, 'Purnima Bikas Bank Ltd.', 1, '473.00', '473.00', '473.00', '100', '47300', '464', '9', '2016-11-16 12:17:57'),
(99, 'Raptibheri Bikas Bank Ltd.', 16, '493.00', '485.00', '486.00', '1787', '873350', '478', '8', '2016-11-16 12:17:58'),
(100, 'Rastriya Beema Company Limited', 8, '13526.00', '12990.00', '13200.00', '610', '8066280', '13800', '-600', '2016-11-16 12:17:58'),
(101, 'Rastriya Beema Company Limited Promoter Share', 3, '12505.00', '12500.00', '12500.00', '158', '1975500', '12726', '-226', '2016-11-16 12:17:58'),
(102, 'Reliable Microfinance Bittiya Sanstha Ltd.', 52, '2050.00', '1950.00', '1950.00', '886', '1768763', '2000', '-50', '2016-11-16 12:17:58'),
(103, 'Reliance Lotus Finance Ltd.', 3, '314.00', '314.00', '314.00', '30', '9420', '314', '0', '2016-11-16 12:17:58'),
(104, 'Ridi Hydropower Development Company Ltd.', 11, '267.00', '252.00', '257.00', '1850', '476724', '262', '-5', '2016-11-16 12:17:58'),
(105, 'Rural Microfinance Development Centre Ltd.', 42, '780.00', '755.00', '760.00', '4435', '3409435', '779', '-19', '2016-11-16 12:17:58'),
(106, 'Sagarmatha Finance Limited', 10, '527.00', '518.00', '521.00', '1608', '841994', '529', '-8', '2016-11-16 12:17:58'),
(107, 'Sagarmatha Insurance Co. Ltd.', 2, '2210.00', '2205.00', '2210.00', '300', '662500', '2215', '-5', '2016-11-16 12:17:58'),
(108, 'Sajha Bikas Bank Ltd.', 2, '290.00', '290.00', '290.00', '56', '16240', '294', '-4', '2016-11-16 12:17:58'),
(109, 'Sana Kisan Bikas Bank Ltd', 35, '1667.00', '1639.00', '1644.00', '5214', '8583565', '1635', '9', '2016-11-16 12:17:58'),
(110, 'Sanima Bank Limited', 131, '607.00', '600.00', '601.00', '23608', '14255124', '605', '-4', '2016-11-16 12:17:58'),
(111, 'Sanima Mai Hydropower Ltd.', 29, '930.00', '918.00', '918.00', '3389', '3126386', '930', '-12', '2016-11-16 12:17:58'),
(112, 'Saptakoshi Development Bank Ltd.', 1, '494.00', '494.00', '494.00', '10', '4940', '485', '9', '2016-11-16 12:17:58'),
(113, 'Seti Finance Limited', 4, '250.00', '250.00', '250.00', '600', '150000', '255', '-5', '2016-11-16 12:17:59'),
(114, 'Sewa Bikas Bank Limited', 13, '345.00', '339.00', '339.00', '3100', '1061800', '345', '-6', '2016-11-16 12:17:59'),
(115, 'Shangrila Development Bank Ltd.', 11, '450.00', '445.00', '450.00', '2829', '1271265', '450', '0', '2016-11-16 12:17:59'),
(116, 'Shikhar Insurance Co. Ltd.', 69, '4145.00', '4020.00', '4065.00', '8055', '32788804', '4050', '15', '2016-11-16 12:17:59'),
(117, 'Shine Resunga Development Bank Ltd.', 14, '586.00', '573.00', '586.00', '1512', '878346', '591', '-5', '2016-11-16 12:17:59'),
(118, 'Siddhartha Bank Limited', 139, '1090.00', '1065.00', '1066.00', '28207', '30305815', '1075', '-9', '2016-11-16 12:17:59'),
(119, 'Siddhartha Development Bank Ltd.', 29, '485.00', '477.00', '478.00', '7889', '3786311', '481', '-3', '2016-11-16 12:17:59'),
(120, 'Siddhartha Equity Orineted Scheme', 1, '12.65', '12.65', '12.65', '12000', '151800', '12.75', '-0.1', '2016-11-16 12:17:59'),
(121, 'Siddhartha Insurance Ltd.', 25, '2560.00', '2510.00', '2510.00', '3142', '7958335', '2508', '2', '2016-11-16 12:17:59'),
(122, 'Sindhu Bikash Bank Ltd', 3, '435.00', '427.00', '427.00', '345', '147850', '432', '-5', '2016-11-16 12:17:59'),
(123, 'Soaltee Hotel Limited', 11, '422.00', '412.00', '412.00', '4648', '1927649', '420', '-8', '2016-11-16 12:17:59'),
(124, 'Standard Chartered Bank Limited', 69, '3215.00', '3165.00', '3170.00', '6987', '22279197', '3213', '-43', '2016-11-16 12:17:59'),
(125, 'Sunrise Bank Limited', 54, '550.00', '535.00', '540.00', '8574', '4645584', '540', '0', '2016-11-16 12:17:59'),
(126, 'Surya Life Insurance Company Limited', 11, '892.00', '880.00', '880.00', '1046', '926430', '875', '5', '2016-11-16 12:17:59'),
(127, 'Swabalamban Bikas Bank Limited', 5, '2393.00', '2375.00', '2385.00', '743', '1775875', '2390', '-5', '2016-11-16 12:17:59'),
(128, 'Synergy Finance Ltd.', 2, '173.00', '172.00', '173.00', '350', '60500', '170', '3', '2016-11-16 12:17:59'),
(129, 'Taragaon Regency Hotel Limited', 5, '255.00', '252.00', '255.00', '2000', '507500', '252', '3', '2016-11-16 12:17:59'),
(130, 'Tinau Development Bank Limited', 4, '482.00', '473.00', '482.00', '362', '173890', '490', '-8', '2016-11-16 12:17:59'),
(131, 'Tourism Development Bank Limited', 5, '526.00', '516.00', '522.00', '790', '408900', '506', '16', '2016-11-16 12:17:59'),
(132, 'Uniliver Nepal Limited', 3, '30100.00', '30100.00', '30100.00', '100', '3010000', '29655', '445', '2016-11-16 12:17:59'),
(133, 'Union Finance Co. Ltd.', 3, '190.00', '187.00', '187.00', '148', '27940', '190', '-3', '2016-11-16 12:17:59'),
(134, 'United Insurance Co. (Nepal) Ltd.', 32, '1387.00', '1360.00', '1360.00', '5075', '6931285', '1370', '-10', '2016-11-16 12:17:59'),
(135, 'Vibor Society Development Bank Limited', 111, '227.00', '220.00', '223.00', '29862', '6644488', '224', '-1', '2016-11-16 12:17:59'),
(136, 'Vijaya laghubitta Bittiya Sanstha Ltd.', 14, '1210.00', '1174.00', '1174.00', '1350', '1599620', '1195', '-21', '2016-11-16 12:17:59'),
(137, 'Western Development Bank Limited', 5, '340.00', '331.00', '340.00', '1425', '478121', '330', '10', '2016-11-16 12:17:59'),
(138, 'Womi Microfinance Bittiya Sanstha Ltd.', 3, '1850.00', '1850.00', '1850.00', '36', '66600', '1850', '0', '2016-11-16 12:17:59'),
(139, 'Yeti Development Bank Limited', 16, '344.00', '335.00', '335.00', '1703', '580299', '338', '-3', '2016-11-16 12:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_for_sales`
--

CREATE TABLE `tbl_stock_for_sales` (
  `id` int(11) NOT NULL,
  `user_stock_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `target_sales_price` decimal(10,2) NOT NULL,
  `date_added` datetime NOT NULL,
  `sold_status` tinyint(1) NOT NULL DEFAULT '0',
  `broker_id` int(11) NOT NULL,
  `sales_price` decimal(10,2) NOT NULL,
  `date_sold` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_type`
--

CREATE TABLE `tbl_stock_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `dsplay_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stock_type`
--

INSERT INTO `tbl_stock_type` (`id`, `type`, `added_date`, `updated_date`, `status`, `dsplay_order`) VALUES
(2, 'Rights', '2016-11-16 23:34:07', NULL, 1, 0),
(3, 'Initial Offering', '2016-11-19 14:01:32', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timezone`
--

CREATE TABLE `tbl_timezone` (
  `id` int(11) NOT NULL,
  `delay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sign` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_timezone`
--

INSERT INTO `tbl_timezone` (`id`, `delay`, `location`, `sign`, `status`) VALUES
(1, '12:00', '(UTC - 12:00) Enitwetok, Kwajalien', '-', 0),
(2, '11:00', '(UTC - 11:00) Nome, Midway Island, Samoa', '-', 0),
(3, '10:00', '(UTC - 10:00) Hawaii', '-', 0),
(4, '09:00', '(UTC - 9:00) Alaska', '-', 0),
(5, '08:00', '(UTC - 8:00) Pacific Time', '-', 0),
(6, '07:00', '(UTC - 7:00) Mountain Time', '-', 0),
(7, '06:00', '(UTC - 6:00) Central Time, Mexico City', '-', 0),
(8, '05:00', '(UTC - 5:00) Eastern Time, Bogota, Lima, Quito', '-', 0),
(9, '04:00', '(UTC - 4:00) Atlantic Time, Caracas, La Paz', '-', 0),
(10, '03:30', '(UTC - 3:30) Newfoundland', '-', 0),
(11, '03:00', '(UTC - 3:00) Brazil, Buenos Aires, Georgetown, Falkland Is.', '-', 0),
(12, '02:00', '(UTC - 2:00) Mid-Atlantic, Ascention Is., St Helena', '-', 0),
(13, '01:00', '(UTC - 1:00) Azores, Cape Verde Islands', '-', 0),
(14, '01:00', ' Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia', '-', 0),
(15, '01:00', '(UTC + 1:00) Berlin, Brussels, Copenhagen, Madrid, Paris, Rome', '+', 0),
(16, '02:00', '(UTC + 2:00) Kaliningrad, South Africa, Warsaw', '+', 0),
(17, '03:00', '(UTC + 3:00) Baghdad, Riyadh, Moscow, Nairobi', '+', 0),
(18, '03:30', '(UTC + 3:30) Tehran', '+', 0),
(19, '04:00', '(UTC + 4:00) Adu Dhabi, Baku, Muscat, Tbilisi', '+', 0),
(20, '04:30', '(UTC + 4:30) Kabul', '+', 0),
(21, '05:00', '(UTC + 5:00) Islamabad, Karachi, Tashkent', '+', 0),
(22, '05:30', '(UTC + 5:30) Bombay, Calcutta, Madras, New Delhi', '+', 0),
(23, '05:45', '(UTC + 5:45) Nepal', '+', 1),
(24, '06:00', '(UTC + 6:00) Almaty, Colomba, Dhaka', '+', 0),
(25, '07:00', '(UTC + 7:00) Bangkok, Hanoi, Jakarta', '+', 0),
(26, '08:00', '(UTC + 8:00) Beijing, Hong Kong, Perth, Singapore, Taipei', '+', 0),
(27, '09:00', '(UTC + 9:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk', '+', 0),
(28, '09:30', '(UTC + 9:30) Adelaide, Darwin', '+', 0),
(29, '10:00', '(UTC + 10:00) Melbourne, Papua New Guinea, Sydney, Vladivostok', '+', 0),
(30, '11:00', '(UTC + 11:00) Magadan, New Caledonia, Solomon Islands', '+', 0),
(31, '12:00', '(UTC + 12:00) Auckland, Wellington, Fiji, Marshall Island', '+', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL COMMENT '0: Female, \r\n1: Male',
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `newsletter_subscription` tinyint(4) DEFAULT '0' COMMENT '0:No,1:Yes',
  `reg_date` date DEFAULT NULL,
  `del_flag` tinyint(4) DEFAULT '0',
  `verification_status` varchar(255) DEFAULT '0' COMMENT '0: Unverified, 1: Email Verified, 2: Email & Admin Verified',
  `account_status` varchar(20) NOT NULL DEFAULT '1' COMMENT '1: Active, 2: Suspended, 3: Blocked',
  `activation_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `password`, `f_name`, `l_name`, `gender`, `address`, `city`, `phone`, `mobile`, `newsletter_subscription`, `reg_date`, `del_flag`, `verification_status`, `account_status`, `activation_reset_key`) VALUES
(1, 'neetu@gmail.com', '111111', 'Neetu', 'Pradhan', '0', 'Sanepa,Lalitpur', NULL, '9841256321', NULL, 0, '2016-11-04', 0, '1', '1', NULL),
(3, 'rajanacharyapkr@gmail.com', '9dbefedc77874970748a5032e1d031df3c1e4eae186858cd15053876a820b8c749712d5260dbd336d5a212a4694de1317ac308b40c4ed0c165761fa53d9eb860i8GBh3YnIX1rcZ9rIJUzle0/webZcQ==', 'test', 'test', '1', 'dsffdf', '', '055665667', '8986756676', 0, '2016-11-06', 0, '1', '1', '5OC3TXgx5hhmVmJGd6SQ63rqH23p4R7NzTgjNh5pbA'),
(4, 'admin@admin.com', '1c559505aaf9745696d19eb617017f295faa68dc39f4d4cbc682bb4df965788f072bfb25e951621d669f08d86aa3c86956c449bf23ce3dceeb73f9717a108845sEqtSWFd9LmI1Objxbk7ewH3Y8CNoA==', 'dfds', 'fdsf', '0', 'ddsffds', '', '98667', '98667999', 0, '2016-11-06', 0, '1', '1', 'RjeXlLXRNVfjAmAdi71qT282rKClJdu8Wh1nRHmfgM'),
(5, 'sunshine.neetu@gmail.com', 'f21f3aec39c794980e60562b973f94461104936515edacbf70298779174888d1cd8547641883de7039bb0289d984c2010e19c3a4f6c14811fea1abdf0ef66b9fxh0e3rA4uvMHVlmgfTzMHnNmbRMkNA==', 'cxcxzc', 'cxzcx', '1', '', '', '', '7654323456', 0, '2016-11-06', 0, '1', '1', 'sZyvAFlSX4M4oWgxRvQTt6XV3Y9eB9sYQCR3bCxh4W'),
(6, 'admin11@admin.com', '78f598de6203fce7d247cc8101781cf78e7b49e2b2f9e2ab8d4ad9313d02ab5ffbb9e37c249798510c70b527a19327dd1f7927d5dfc3480d496563fe40c135d8woXsUnVaBPAVhDtgQRa7nDCe0Ba5OA==', 'fdujyhgf', 'ytrfdfg', '0', '', '', '', '09876543', 0, '2016-11-06', 0, '0', '1', '9bpQIIan3AHyzutS8pKylxaAI32CRRpA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_messages`
--

CREATE TABLE `tbl_user_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `received_date_time` datetime NOT NULL,
  `read_flag` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `del_flag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_messages`
--

INSERT INTO `tbl_user_messages` (`id`, `name`, `email`, `user_id`, `subject`, `message`, `received_date_time`, `read_flag`, `status`, `del_flag`) VALUES
(1, 'test', 'rajanacharyapkr@gmail.com', 1, 'test', 'test', '2016-10-10 12:09:21', 1, 1, 1),
(9, 'Rajan Acharya', 'admin@admin.com', NULL, 'Hi', 'Hello 2', '2016-02-20 01:51:48', 1, 0, 0),
(21, 'Jimmy', 'jimmy@gmail.com', NULL, 'jimmy here', 'anyone there?', '2016-02-18 23:22:35', 1, 0, 0),
(22, 'Rajan Acharya', 'acharya.rajanpkr@gmail.com', NULL, 'Hi', 'Hello', '2016-02-29 17:20:44', 0, 0, 1),
(23, 'Rajan Acharya', 'acharya.rajanpkr@gmail.com', NULL, 'Hi', 'Hello There', '2016-02-29 17:21:41', 0, 0, 0),
(24, 'Rajan Acharya', 'acharya.rajanpkr@gmail.com', NULL, 'Hi', 'Hello', '2016-03-02 12:51:17', 1, 0, 1),
(25, 'Rajan Acharya', 'acharya.rajanpkr@gmail.com', NULL, 'Hi', 'Hello', '2016-03-05 16:47:06', 0, 0, 1),
(26, 'Rajan Acharya', 'rajanacharyapkr@gmail.com', NULL, 'Hi', 'Hello', '2016-03-05 16:47:45', 1, 0, 1),
(27, 'Rajan Acharya', 'rajanacharyapkr@gmail.com', NULL, 'activate my account', 'request activation', '2016-03-05 22:31:56', 1, 0, 1),
(28, 'adsfas ', 'rajanacharyapkr@gmail.com', 8, 'activate my account2', 'Activate', '2016-03-05 22:48:33', 0, 0, 1),
(29, 'Rajan1', 'acharya.rajanpkr@gmail.com', 2, 'there', 'hello', '2016-07-06 20:55:40', 0, 0, 1),
(30, 'Rajan1', 'acharya.rajanpkr@gmail.com', 2, 'dasf', 'adsgfadsga', '2016-07-06 20:56:25', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_stock`
--

CREATE TABLE `tbl_user_stock` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_no` int(11) NOT NULL,
  `stock_type_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `broker_id` int(11) NOT NULL,
  `transaction_date` date DEFAULT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_stock`
--

INSERT INTO `tbl_user_stock` (`id`, `user_id`, `transaction_no`, `stock_type_id`, `company_id`, `quantity`, `rate`, `broker_id`, `transaction_date`, `added_date`, `updated_date`) VALUES
(1, 3, 0, 1, 0, 10, '100', 1, '2016-11-15', '2016-11-17 05:22:16', NULL),
(2, 3, 0, 2, 0, 120, '250', 34, '2016-11-02', '2016-11-14 04:32:13', NULL),
(3, 3, 0, 2, 0, 130, '103', 5, '2016-01-15', '2015-11-17 05:02:16', NULL),
(4, 0, 0, 3, 0, 234, '123', 23, '2013-11-02', '2016-11-04 04:32:03', NULL),
(5, 3, 23, 2, 1, 34, '1', 2, '2016-11-09', '2016-11-18 19:58:22', NULL),
(6, 3, 34, 2, 6, 2, '12', 3, '2016-11-09', '2016-11-19 13:59:28', NULL),
(7, 3, 0, 3, 2, 7, '7', 2, '2016-11-16', '2016-11-19 14:02:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_watch_list`
--

CREATE TABLE `tbl_watch_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `enable_notification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wish_list`
--

CREATE TABLE `tbl_wish_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `enable_notification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `tbl_broker`
--
ALTER TABLE `tbl_broker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_type` (`company_type`);

--
-- Indexes for table `tbl_company_type`
--
ALTER TABLE `tbl_company_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_settings`
--
ALTER TABLE `tbl_email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nepse_api_data`
--
ALTER TABLE `tbl_nepse_api_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nepse_api_data_secondary`
--
ALTER TABLE `tbl_nepse_api_data_secondary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_site_settings`
--
ALTER TABLE `tbl_site_settings`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stock_for_sales`
--
ALTER TABLE `tbl_stock_for_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_stock_id` (`user_stock_id`),
  ADD KEY `broker_id` (`broker_id`);

--
-- Indexes for table `tbl_stock_type`
--
ALTER TABLE `tbl_stock_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_timezone`
--
ALTER TABLE `tbl_timezone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_messages`
--
ALTER TABLE `tbl_user_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_user_stock`
--
ALTER TABLE `tbl_user_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_type_id` (`stock_type_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `broker_id` (`broker_id`);

--
-- Indexes for table `tbl_watch_list`
--
ALTER TABLE `tbl_watch_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `tbl_wish_list`
--
ALTER TABLE `tbl_wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_broker`
--
ALTER TABLE `tbl_broker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_company_type`
--
ALTER TABLE `tbl_company_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_email_settings`
--
ALTER TABLE `tbl_email_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tbl_nepse_api_data`
--
ALTER TABLE `tbl_nepse_api_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `tbl_nepse_api_data_secondary`
--
ALTER TABLE `tbl_nepse_api_data_secondary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_site_settings`
--
ALTER TABLE `tbl_site_settings`
  MODIFY `site_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `tbl_stock_for_sales`
--
ALTER TABLE `tbl_stock_for_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_stock_type`
--
ALTER TABLE `tbl_stock_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_timezone`
--
ALTER TABLE `tbl_timezone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user_messages`
--
ALTER TABLE `tbl_user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_user_stock`
--
ALTER TABLE `tbl_user_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_watch_list`
--
ALTER TABLE `tbl_watch_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_wish_list`
--
ALTER TABLE `tbl_wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD CONSTRAINT `tbl_announcement_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tbl_company` (`id`);

--
-- Constraints for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD CONSTRAINT `tbl_company_ibfk_1` FOREIGN KEY (`company_type`) REFERENCES `tbl_company_type` (`id`);

--
-- Constraints for table `tbl_stock_for_sales`
--
ALTER TABLE `tbl_stock_for_sales`
  ADD CONSTRAINT `tbl_stock_for_sales_ibfk_1` FOREIGN KEY (`user_stock_id`) REFERENCES `tbl_user_stock` (`id`),
  ADD CONSTRAINT `tbl_stock_for_sales_ibfk_2` FOREIGN KEY (`broker_id`) REFERENCES `tbl_broker` (`id`);

--
-- Constraints for table `tbl_user_messages`
--
ALTER TABLE `tbl_user_messages`
  ADD CONSTRAINT `tbl_user_messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_user_stock`
--
ALTER TABLE `tbl_user_stock`
  ADD CONSTRAINT `tbl_user_stock_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_user_stock_ibfk_2` FOREIGN KEY (`stock_type_id`) REFERENCES `tbl_stock_type` (`id`),
  ADD CONSTRAINT `tbl_user_stock_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `tbl_company` (`id`),
  ADD CONSTRAINT `tbl_user_stock_ibfk_4` FOREIGN KEY (`broker_id`) REFERENCES `tbl_broker` (`id`);

--
-- Constraints for table `tbl_watch_list`
--
ALTER TABLE `tbl_watch_list`
  ADD CONSTRAINT `tbl_watch_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_watch_list_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `tbl_company` (`id`);

--
-- Constraints for table `tbl_wish_list`
--
ALTER TABLE `tbl_wish_list`
  ADD CONSTRAINT `tbl_wish_list_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tbl_company` (`id`),
  ADD CONSTRAINT `tbl_wish_list_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
