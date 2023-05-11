# cse-reviewboost-team-rc

#MANUAL

Assuming you already cloned or downloaded all the files (cse-reviewboost-team-rc's folder) in the repository. The next step you will do:

1. Copy the (cse-reviewboost-team-rc's folder) and paste it in C:\xampp\htdocs
2. Open XAMPP, if you don't have, you can download it here (https://www.apachefriends.org/download.html). After downloading, install it.
3. Start the Apache and MySQL. After that, click the Admin in MySQL, you will be redirected to phpMyAdmin into your default browser.
4. Click the import and chose user.sql in the database folder of (cse-reviewboost-team-rc's folder) then click go.
5. If it errors, just manually input the following database and tables below.

   Database: `user_info`
 ------------------------------------------------------------------------  
   CREATE TABLE `user_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  INSERT INTO `user_admin` (`username`, `password`) VALUES
('adminclyde', 'adminclyde'),
('adminrafael', 'adminrafael');
 ------------------------------------------------------------------------  
CREATE TABLE `user_extend` (
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `creation_date` timestamp NULL DEFAULT current_timestamp(),
  `code` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_extend` (`username`, `first_name`, `last_name`, `email`, `password`, `plan`, `creation_date`, `code`, `payment`, `status`) VALUES
('aa', 'aa', 'aa', 'aa@aa.m', 'aa', 'Monthly', '2023-05-07 04:01:38', 'aa', 'Gcash', 'done'),
('anaana', 'ana', 'ana', 'ana@ana.ana', 'ana', 'Monthly', '2023-05-07 04:27:05', 'ana', 'Gcash', ''),
('cc', 'cc', 'cc', 'cc@cc.cc', 'cc', 'Monthly', '2023-05-07 04:05:35', 'cc', 'Gcash', 'done'),
('eee', 'ee', 'ee', 'ee@ee.ee', 'ee', 'Monthly', '2023-05-07 04:19:14', 'ee', 'Gcash', ''),
('qq', 'qq', 'qq', 'qq@qq.com', 'qq', 'Monthly', '2023-05-07 04:07:24', 'qq', 'Gcash', 'Done'),
('we', 'we', 'we', 'we@we.ew', 'we', 'Monthly', '2023-05-07 04:18:03', 'we', 'Gcash', 'Done');
 ------------------------------------------------------------------------  
CREATE TABLE `user_info` (
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `code` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_info` (`username`, `first_name`, `last_name`, `email`, `password`, `plan`, `start_date`, `end_date`, `creation_date`, `code`, `payment`) VALUES
('aa', 'aa', 'aa', 'a@ee.ee', 'aa', 'Monthly', '2023-05-07', '2023-06-07', '2023-05-06 19:42:06', 'ee', 'Palawan'),
('cc', 'cc', 'cc', 'cc@cc.cc', 'cc', 'Monthly', NULL, NULL, '2023-05-06 19:47:05', 'cc', 'Gcash'),
('dd', 'dd', 'dd', 'dd@dd.dd', 'dd', 'Monthly', '2023-05-07', '2023-06-07', '2023-05-06 20:00:48', 'dd', 'Gcash'),
('ee', 'ee', 'ee', 'ee@ee.ee', 'ee', 'Monthly', NULL, NULL, '2023-05-06 19:41:03', 'ee', 'Palawan'),
('fg', 'fg', 'fg', 'fg@fg.g', 'fg', 'Monthly', NULL, NULL, '2023-05-06 21:00:30', 'fg', 'Gcash'),
('fgg', 'fg', 'fg', 'fg@fg.g', 'ggg', 'Monthly', NULL, NULL, '2023-05-06 21:02:01', 'fgg', 'Gcash'),
('haha', 'haha', 'haha', 'haha@haha.com', 'haha', 'Monthly', NULL, NULL, '2023-05-06 21:16:07', '123', 'Gcash'),
('hatdog', 'hatdog', 'hatdog', 'hatdog@gmail.com', 'hatdog', 'Monthly', NULL, NULL, '2023-05-06 21:12:54', 'hatdog', 'Gcash'),
('hatdog1', 'hatdog', 'hatdog', 'hatdog@gmail.com', 'hatdog1', 'Monthly', NULL, NULL, '2023-05-06 21:14:35', 'hatdog', 'Gcash'),
('l', 'l', 'l', 'l@l.l', 'l', 'Monthly', NULL, NULL, '2023-05-06 20:10:17', 'l', 'Gcash'),
('mm', 'mm', 'mm', 'mm@mm.mm', 'mm', 'Monthly', NULL, NULL, '2023-05-06 19:51:21', 'mm', 'Gcash'),
('mmm', 'mm', 'mm', 'mm@mm.mm', 'mmm', 'Monthly', NULL, NULL, '2023-05-06 19:52:59', 'mmm', 'Gcash'),
('oo', 'oo', 'oo', 'oo@oo.o', 'oo', 'Monthly', NULL, NULL, '2023-05-06 21:24:03', 'gs', 'Gcash'),
('qq', 'qq', 'qq', 'qq@qq.com', 'qq', 'Monthly', '2023-05-01', '2023-05-07', '2023-05-06 17:55:01', 'qq', 'Gcash'),
('qqq', 'qq', 'qq', 'qq@sdasda.asd', 'qq', 'Monthly', NULL, NULL, '2023-05-06 20:06:38', 'qq', 'Gcash'),
('qqqq', 'qq', 'qq', 'qq@sdasda.asd', 'qq', 'Monthly', NULL, NULL, '2023-05-06 20:06:58', 'qq', 'Gcash'),
('qqqqa', 'qq', 'qq', 'qq@sdasda.asd', 'qqq', 'Monthly', NULL, NULL, '2023-05-06 20:08:40', 'qq', 'Gcash'),
('qwdas', 'qw', 'qw', 'qw@das.d', 'dasdasdas', 'Monthly', NULL, NULL, '2023-05-06 19:55:55', 'qw', 'Gcash'),
('qwdass', 'qw', 'qw', 'qw@das.d', 'dasdasda', 'Monthly', NULL, NULL, '2023-05-06 19:56:22', 'qw', 'Gcash'),
('r', 'r', 'r', 'r@r.r', 'r', 'Monthly', NULL, NULL, '2023-05-06 20:12:36', 'r', 'Gcash'),
('rr', 'r', 'r', 'r@r.r', 'rr', 'Monthly', NULL, NULL, '2023-05-06 20:12:59', 'r', 'Gcash'),
('rrr', 'r', 'r', 'r@r.r', 'rrr', 'Monthly', NULL, NULL, '2023-05-06 20:18:52', 'r', 'Gcash'),
('rrrr', 'r', 'r', 'r@r.r', 'rrrr', 'Monthly', NULL, NULL, '2023-05-06 20:19:18', 'r', 'Gcash'),
('sd', 'sd', 'sd', 'sd@sd', 'sd', 'Monthly', NULL, NULL, '2023-05-06 20:02:19', 'sd', 'Gcash'),
('sda', 'sd', 'sd', 'sd@sd', 'sda', 'Monthly', NULL, NULL, '2023-05-06 20:05:11', 'sda', 'Gcash'),
('ww', 'ww', 'ww', 'ww@ww.ww', 'ww', 'Monthly', NULL, NULL, '2023-05-06 18:56:33', 'ww', 'Gcash'),
('zx', 'zx', 'zx', 'zx@zx.x', 'zx', 'Monthly', NULL, NULL, '2023-05-06 21:05:04', 'zx', 'Gcash'),
('zxx', 'zx', 'zx', 'zx@zx.x', 'zxx', 'Monthly', NULL, NULL, '2023-05-06 21:06:01', 'zx', 'Gcash'),
('zz', 'zz', 'zz', 'zz@zz.zz', 'zz', 'Monthly', NULL, NULL, '2023-05-06 19:44:45', 'zz', 'Palawan');
 ------------------------------------------------------------------------  
6. Now, you're good to go to our websites. If you want to access free plan page visit this (http://localhost/cse-reviewboost-team-rc/free-plan-page/)
   If you want to access premium plan page visiti this (http://localhost/cse-reviewboost-team-rc/premium-plan-page/)
   If you want to access admin page visiti this (http://localhost/cse-reviewboost-team-rc/admin-page/)
7. I uploaded video demonstration, feel free to view to it to understand more how it works. 
8. If you have any questions or clarifications, just email me (clydecutimar2@gmail.com).

That would be all. Thank you and God bless us all.
