CREATE TABLE wp_users (
	ID bigint(20) unsigned NOT NULL auto_increment,
	user_login varchar(60) NOT NULL default '',
	user_pass varchar(255) NOT NULL default '',
	user_nicename varchar(50) NOT NULL default '',
	user_email varchar(100) NOT NULL default '',
	user_url varchar(100) NOT NULL default '',
	user_registered datetime NOT NULL default '0000-00-00 00:00:00',
	user_activation_key varchar(255) NOT NULL default '',
	user_status int(11) NOT NULL default '0',
	display_name varchar(250) NOT NULL default '',
	PRIMARY KEY  (ID),
	KEY user_login_key (user_login),
	KEY user_nicename (user_nicename),
	KEY user_email (user_email)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_usermeta (
	umeta_id bigint(20) unsigned NOT NULL auto_increment,
	user_id bigint(20) unsigned NOT NULL default '0',
	meta_key varchar(255) default NULL,
	meta_value longtext,
	PRIMARY KEY  (umeta_id),
	KEY user_id (user_id),
	KEY meta_key (meta_key(191))
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_termmeta (
	meta_id bigint(20) unsigned NOT NULL auto_increment,
	term_id bigint(20) unsigned NOT NULL default '0',
	meta_key varchar(255) default NULL,
	meta_value longtext,
	PRIMARY KEY  (meta_id),
	KEY term_id (term_id),
	KEY meta_key (meta_key(191))
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_terms (
 term_id bigint(20) unsigned NOT NULL auto_increment,
 name varchar(200) NOT NULL default '',
 slug varchar(200) NOT NULL default '',
 term_group bigint(10) NOT NULL default 0,
 PRIMARY KEY  (term_id),
 KEY slug (slug(191)),
 KEY name (name(191))
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_term_taxonomy (
 term_taxonomy_id bigint(20) unsigned NOT NULL auto_increment,
 term_id bigint(20) unsigned NOT NULL default 0,
 taxonomy varchar(32) NOT NULL default '',
 description longtext NOT NULL,
 parent bigint(20) unsigned NOT NULL default 0,
 count bigint(20) NOT NULL default 0,
 PRIMARY KEY  (term_taxonomy_id),
 UNIQUE KEY term_id_taxonomy (term_id,taxonomy),
 KEY taxonomy (taxonomy)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_term_relationships (
 object_id bigint(20) unsigned NOT NULL default 0,
 term_taxonomy_id bigint(20) unsigned NOT NULL default 0,
 term_order int(11) NOT NULL default 0,
 PRIMARY KEY  (object_id,term_taxonomy_id),
 KEY term_taxonomy_id (term_taxonomy_id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_commentmeta (
	meta_id bigint(20) unsigned NOT NULL auto_increment,
	comment_id bigint(20) unsigned NOT NULL default '0',
	meta_key varchar(255) default NULL,
	meta_value longtext,
	PRIMARY KEY  (meta_id),
	KEY comment_id (comment_id),
	KEY meta_key (meta_key(191))
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_comments (
	comment_ID bigint(20) unsigned NOT NULL auto_increment,
	comment_post_ID bigint(20) unsigned NOT NULL default '0',
	comment_author tinytext NOT NULL,
	comment_author_email varchar(100) NOT NULL default '',
	comment_author_url varchar(200) NOT NULL default '',
	comment_author_IP varchar(100) NOT NULL default '',
	comment_date datetime NOT NULL default '0000-00-00 00:00:00',
	comment_date_gmt datetime NOT NULL default '0000-00-00 00:00:00',
	comment_content text NOT NULL,
	comment_karma int(11) NOT NULL default '0',
	comment_approved varchar(20) NOT NULL default '1',
	comment_agent varchar(255) NOT NULL default '',
	comment_type varchar(20) NOT NULL default 'comment',
	comment_parent bigint(20) unsigned NOT NULL default '0',
	user_id bigint(20) unsigned NOT NULL default '0',
	PRIMARY KEY  (comment_ID),
	KEY comment_post_ID (comment_post_ID),
	KEY comment_approved_date_gmt (comment_approved,comment_date_gmt),
	KEY comment_date_gmt (comment_date_gmt),
	KEY comment_parent (comment_parent),
	KEY comment_author_email (comment_author_email(10))
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_links (
	link_id bigint(20) unsigned NOT NULL auto_increment,
	link_url varchar(255) NOT NULL default '',
	link_name varchar(255) NOT NULL default '',
	link_image varchar(255) NOT NULL default '',
	link_target varchar(25) NOT NULL default '',
	link_description varchar(255) NOT NULL default '',
	link_visible varchar(20) NOT NULL default 'Y',
	link_owner bigint(20) unsigned NOT NULL default '1',
	link_rating int(11) NOT NULL default '0',
	link_updated datetime NOT NULL default '0000-00-00 00:00:00',
	link_rel varchar(255) NOT NULL default '',
	link_notes mediumtext NOT NULL,
	link_rss varchar(255) NOT NULL default '',
	PRIMARY KEY  (link_id),
	KEY link_visible (link_visible)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_options (
	option_id bigint(20) unsigned NOT NULL auto_increment,
	option_name varchar(191) NOT NULL default '',
	option_value longtext NOT NULL,
	autoload varchar(20) NOT NULL default 'yes',
	PRIMARY KEY  (option_id),
	UNIQUE KEY option_name (option_name),
	KEY autoload (autoload)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_postmeta (
	meta_id bigint(20) unsigned NOT NULL auto_increment,
	post_id bigint(20) unsigned NOT NULL default '0',
	meta_key varchar(255) default NULL,
	meta_value longtext,
	PRIMARY KEY  (meta_id),
	KEY post_id (post_id),
	KEY meta_key (meta_key(191))
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE wp_posts (
	ID bigint(20) unsigned NOT NULL auto_increment,
	post_author bigint(20) unsigned NOT NULL default '0',
	post_date datetime NOT NULL default '0000-00-00 00:00:00',
	post_date_gmt datetime NOT NULL default '0000-00-00 00:00:00',
	post_content longtext NOT NULL,
	post_title text NOT NULL,
	post_excerpt text NOT NULL,
	post_status varchar(20) NOT NULL default 'publish',
	comment_status varchar(20) NOT NULL default 'open',
	ping_status varchar(20) NOT NULL default 'open',
	post_password varchar(255) NOT NULL default '',
	post_name varchar(200) NOT NULL default '',
	to_ping text NOT NULL,
	pinged text NOT NULL,
	post_modified datetime NOT NULL default '0000-00-00 00:00:00',
	post_modified_gmt datetime NOT NULL default '0000-00-00 00:00:00',
	post_content_filtered longtext NOT NULL,
	post_parent bigint(20) unsigned NOT NULL default '0',
	guid varchar(255) NOT NULL default '',
	menu_order int(11) NOT NULL default '0',
	post_type varchar(20) NOT NULL default 'post',
	post_mime_type varchar(100) NOT NULL default '',
	comment_count bigint(20) NOT NULL default '0',
	PRIMARY KEY  (ID),
	KEY post_name (post_name(191)),
	KEY type_status_date (post_type,post_status,post_date,ID),
	KEY post_parent (post_parent),
	KEY post_author (post_author),
	KEY type_status_author (post_type,post_status,post_author)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- WordPress Database Import Script for Shyama Handball Academy
-- This script inserts the primary pages (mapped to templates) and sample CPTs.
-- Highly compatible: Explicitly passes empty strings for columns without default values (to_ping, pinged, post_content_filtered) to avoid MySQL strict mode errors.
-- Note: Replace 'wp_' prefix if your database table prefix is different.

-- =========================================================================
-- 1. INSERT PAGES AND MAP TO TEMPLATES
-- =========================================================================

-- Page: About Us
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'About Us', 'publish', 'closed', 'closed', 'about', 'page', '', '', '');
SET @page_about = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_about, '_wp_page_template', 'page-about.php');

-- Page: Training Programs
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'Training Programs', 'publish', 'closed', 'closed', 'training', 'page', '', '', '');
SET @page_training = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_training, '_wp_page_template', 'page-training.php');

-- Page: Coaches & Staff
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'Coaches & Staff', 'publish', 'closed', 'closed', 'coaches', 'page', '', '', '');
SET @page_coaches = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_coaches, '_wp_page_template', 'page-coaches.php');

-- Page: Players Corner
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'Players Corner', 'publish', 'closed', 'closed', 'players', 'page', '', '', '');
SET @page_players = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_players, '_wp_page_template', 'page-players.php');

-- Page: Events & Tournaments
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'Events & Tournaments', 'publish', 'closed', 'closed', 'events', 'page', '', '', '');
SET @page_events = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_events, '_wp_page_template', 'page-events.php');

-- Page: Gallery
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'Gallery', 'publish', 'closed', 'closed', 'gallery', 'page', '', '', '');
SET @page_gallery = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_gallery, '_wp_page_template', 'page-gallery.php');

-- Page: Contact Us
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'Contact Us', 'publish', 'closed', 'closed', 'contact', 'page', '', '', '');
SET @page_contact = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_contact, '_wp_page_template', 'page-contact.php');

-- Page: Join Academy
INSERT INTO `wp_posts` (`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `ping_status`, `post_name`, `post_type`, `to_ping`, `pinged`, `post_content_filtered`)
VALUES (1, NOW(), NOW(), '', 'Join Academy', 'publish', 'closed', 'closed', 'join', 'page', '', '', '');
SET @page_join = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES (@page_join, '_wp_page_template', 'page-join.php');


-- =========================================================================
-- 2. INSERT SAMPLE COACHES (CPT: coach)
-- =========================================================================

-- Insert Assistant Coach: Rahul Sharma
INSERT INTO `wp_posts` (
    `post_author`, `post_date`, `post_date_gmt`, `post_content`, 
    `post_title`, `post_excerpt`, `post_status`, `comment_status`, 
    `ping_status`, `post_name`, `post_modified`, `post_modified_gmt`, 
    `post_type`, `to_ping`, `pinged`, `post_content_filtered`
) VALUES (
    1, NOW(), NOW(), 'Rahul is an exceptional leader and defensive specialist who has captained the state team.', 
    'Rahul Sharma', '', 'publish', 'closed', 
    'closed', 'rahul-sharma', NOW(), NOW(), 
    'coach', '', '', ''
);
SET @coach_id_1 = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES 
(@coach_id_1, 'coach_role', 'Assistant Coach & Captain'),
(@coach_id_1, 'coach_experience', '5+ Years'),
(@coach_id_1, 'coach_championships', '2 State Titles'),
(@coach_id_1, 'coach_certification', 'B-License Coach'),
(@coach_id_1, 'coach_trained_count', '80+ Players'),
(@coach_id_1, 'coach_specialty', 'Defense & Tactics'),
(@coach_id_1, 'coach_tags', 'Defensive Wall, Tactical Mind');


-- =========================================================================
-- 3. INSERT SAMPLE EVENTS (CPT: event)
-- =========================================================================

-- Event 1: National Club Handball Championship
INSERT INTO `wp_posts` (
    `post_author`, `post_date`, `post_date_gmt`, `post_content`, 
    `post_title`, `post_excerpt`, `post_status`, `comment_status`, 
    `ping_status`, `post_name`, `post_modified`, `post_modified_gmt`, 
    `post_type`, `to_ping`, `pinged`, `post_content_filtered`
) VALUES (
    1, NOW(), NOW(), 'The premier handball tournament hosted in Varanasi, showcasing top national talent.', 
    'National Club Handball Championship', '', 'publish', 'closed', 
    'closed', 'national-club-championship', NOW(), NOW(), 
    'event', '', '', ''
);
SET @event_id_1 = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES 
(@event_id_1, 'event_date', '2026-11-15'),
(@event_id_1, 'event_venue', 'Indoor Stadium, Varanasi'),
(@event_id_1, 'event_time', '10:00 AM Onwards'),
(@event_id_1, 'event_category', 'Seniors VS Punjab Police'),
(@event_id_1, 'event_reg_link', '#');

-- Event 2: U-19 State League - Match 1
INSERT INTO `wp_posts` (
    `post_author`, `post_date`, `post_date_gmt`, `post_content`, 
    `post_title`, `post_excerpt`, `post_status`, `comment_status`, 
    `ping_status`, `post_name`, `post_modified`, `post_modified_gmt`, 
    `post_type`, `to_ping`, `pinged`, `post_content_filtered`
) VALUES (
    1, NOW(), NOW(), 'Opening match of the U-19 State League in Lucknow.', 
    'U-19 State League - Match 1', '', 'publish', 'closed', 
    'closed', 'u19-state-league-match-1', NOW(), NOW(), 
    'event', '', '', ''
);
SET @event_id_2 = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES 
(@event_id_2, 'event_date', '2026-11-20'),
(@event_id_2, 'event_venue', 'Sports Authority Ground, Lucknow'),
(@event_id_2, 'event_time', '03:30 PM Onwards'),
(@event_id_2, 'event_category', 'SHA U-19 VS Lucknow HC'),
(@event_id_2, 'event_reg_link', '#');


-- =========================================================================
-- 4. INSERT SAMPLE TESTIMONIALS (CPT: testimonial)
-- =========================================================================

-- Testimonial 1: Anoop Dwivedi
INSERT INTO `wp_posts` (
    `post_author`, `post_date`, `post_date_gmt`, `post_content`, 
    `post_title`, `post_excerpt`, `post_status`, `comment_status`, 
    `ping_status`, `post_name`, `post_modified`, `post_modified_gmt`, 
    `post_type`, `to_ping`, `pinged`, `post_content_filtered`
) VALUES (
    1, NOW(), NOW(), 'Shyama Handball Academy has transformed my son''s discipline and athletic abilities. The training and personal care provided by the coaches is unmatched.', 
    'Anoop Dwivedi', '', 'publish', 'closed', 
    'closed', 'anoop-dwivedi', NOW(), NOW(), 
    'testimonial', '', '', ''
);
SET @test_id_1 = LAST_INSERT_ID();
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES 
(@test_id_1, 'testimonial_role', 'Parent of U-16 Player');


-- =========================================================================
-- 5. INSERT SAMPLE SPONSORS (CPT: sponsor)
-- =========================================================================

-- Sponsor 1: S.N. Pandey Khel Sansthan Trust
INSERT INTO `wp_posts` (
    `post_author`, `post_date`, `post_date_gmt`, `post_content`, 
    `post_title`, `post_excerpt`, `post_status`, `comment_status`, 
    `ping_status`, `post_name`, `post_modified`, `post_modified_gmt`, 
    `post_type`, `to_ping`, `pinged`, `post_content_filtered`
) VALUES (
    1, NOW(), NOW(), 'Primary supporting organization and founding trust of Shyama Academy.', 
    'S.N. Pandey Khel Sansthan Trust', '', 'publish', 'closed', 
    'closed', 'sn-pandey-trust', NOW(), NOW(), 
    'sponsor', '', '', ''
);

-- =========================================================================
-- 6. INSERT DEFAULT OPTIONS AND ADMIN USER
-- =========================================================================

-- Insert default options (required for WordPress and Local WP search/replace)
INSERT INTO `wp_options` (`option_name`, `option_value`, `autoload`) VALUES
('siteurl', 'http://localhost', 'yes'),
('home', 'http://localhost', 'yes'),
('blogname', 'Shyama Handball Academy', 'yes'),
('blogdescription', 'Dedicated to athletic mastery and youth leadership', 'yes'),
('users_can_register', '0', 'yes'),
('admin_email', 'admin@example.com', 'yes'),
('start_of_week', '1', 'yes'),
('use_balanceTags', '0', 'yes'),
('use_smilies', '1', 'yes'),
('require_name_email', '1', 'yes'),
('close_comments_for_old_posts', '0', 'yes'),
('close_comments_days_old', '14', 'yes'),
('thread_comments', '1', 'yes'),
('thread_comments_depth', '5', 'yes'),
('page_comments', '0', 'yes'),
('comments_per_page', '50', 'yes'),
('default_comments_page', 'newest', 'yes'),
('comment_order', 'asc', 'yes'),
('comments_notify', '1', 'yes'),
('moderation_notify', '1', 'yes'),
('comment_moderation', '0', 'yes'),
('require_comment_whitelist', '1', 'yes'),
('comment_max_links', '2', 'yes'),
('gmt_offset', '0', 'yes'),
('default_category', '1', 'yes'),
('default_post_format', '0', 'yes'),
('template', 'shyama-handball', 'yes'),
('stylesheet', 'shyama-handball', 'yes'),
('active_plugins', 'a:0:{}', 'yes'),
('current_theme', 'Shyama Handball Academy', 'yes');

-- Insert default admin user (password hash is for 'admin')
INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@example.com', '', NOW(), '', 0, 'Admin');

-- Insert user metadata for roles and capabilities
INSERT INTO `wp_usermeta` (`user_id`, `meta_key`, `meta_value`) VALUES
(1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(1, 'wp_user_level', '10'),
(1, 'nickname', 'admin'),
(1, 'first_name', ''),
(1, 'last_name', ''),
(1, 'description', '');

