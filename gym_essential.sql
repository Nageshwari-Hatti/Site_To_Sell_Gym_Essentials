Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(100) NOT NULL,
  `username` varchar(25),
  `password` varchar(25),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(100) NOT NULL,
  `username` varchar(25),
  `password` varchar(25),
  `re_password` VARCHAR(25),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;