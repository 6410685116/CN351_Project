
use `registration`
drop table if exists `users`;


CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `userrole`, `create_at`) VALUES
(1, 'somsak', 'rakthai', 'somsak@gmail.com', '11111', 'admin', '2024-05-24 14:56:14'),
(8, 'AUM', 'AUM', 'aum@aum.com', '123456', 'user', '2024-05-25 17:11:14'),
(9, '<script>alert(document.cookie);</script>', 'yoyo', 'y@y.com', '111111', 'user', '2024-05-25 17:13:32'),
(10, '<script>alert(\"hello\")</script>', 'cha', 'a@a.com', '12345', 'user', '2024-05-26 07:45:26'),
(11, 'ณัฐภัทร', 'โชติเสน', 'team@gmail.com', '55555', 'user', '2024-05-27 08:14:58'),
(12, 'ณัฐภัทร', 'โชติเสน', 'team@gmai.com', '12345', 'user', '2024-05-27 08:18:36'),
(13, '<script>alert(document.cookie)</script>', 'cookie', 'cookie@t.c', '12345', 'user', '2024-05-27 08:21:09');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;
