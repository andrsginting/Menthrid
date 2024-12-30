-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 06:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20232_wp2_412022021`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(2, 'admin177', '$2y$10$BhIMtzFXHPJVw66zNVEX.uMxU7iHKpF2VyTGvPhe8b5X8ldOs8asW'),
(3, 'admin177', '$2y$10$BhIMtzFXHPJVw66zNVEX.uMxU7iHKpF2VyTGvPhe8b5X8ldOs8asW'),
(4, 'admin177', '$2y$10$BhIMtzFXHPJVw66zNVEX.uMxU7iHKpF2VyTGvPhe8b5X8ldOs8asW');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Mengatasi Stigma Kesehatan Mental di Masyarakat', 'Kesehatan mental sering kali diselimuti oleh stigma negatif yang dapat menghalangi individu untuk mencari bantuan. Banyak orang merasa malu atau takut dihakimi oleh orang lain jika mereka mengakui bahwa mereka memiliki masalah kesehatan mental. Stigma ini berasal dari kurangnya pemahaman dan kesalahpahaman tentang kondisi mental, yang seringkali diperparah oleh representasi media yang tidak akurat.\r\n\r\nSalah satu cara untuk mengatasi stigma ini adalah dengan meningkatkan edukasi tentang kesehatan mental. Menyebarkan informasi yang akurat dan berbasis bukti dapat membantu mengubah persepsi negatif. Selain itu, penting untuk mempromosikan cerita dari orang-orang yang berhasil mengelola kondisi mental mereka, karena ini bisa menjadi inspirasi dan memberikan harapan kepada yang lain.\r\n\r\nKomunitas dan keluarga juga berperan penting dalam mengatasi stigma. Dukungan dari orang-orang terdekat dapat membuat seseorang merasa diterima dan dimengerti. Memberikan dukungan tanpa menghakimi dan mendengarkan dengan empati adalah langkah awal yang penting.\r\n\r\nKebijakan pemerintah dan organisasi juga harus mendukung pengurangan stigma ini. Kampanye publik yang menyoroti pentingnya kesehatan mental dan mengadvokasi lingkungan yang mendukung dapat membantu masyarakat lebih menerima dan mendukung mereka yang mengalami masalah kesehatan mental.\r\n\r\nAkhirnya, penting bagi setiap individu untuk mengubah cara mereka berbicara tentang kesehatan mental. Menggunakan bahasa yang tidak merendahkan dan mendukung percakapan yang terbuka tentang kesehatan mental dapat membantu mengurangi stigma dan mempromosikan budaya yang lebih inklusif dan empatik.', '2024-05-15 01:15:46', '2024-06-01 15:51:47'),
(6, 'Pentingnya Self-Care untuk Kesehatan Mental', 'Self-care adalah praktik penting yang dapat membantu menjaga kesehatan mental seseorang. Self-care melibatkan berbagai aktivitas yang bertujuan untuk merawat diri sendiri, baik secara fisik, emosional, maupun mental. Dengan melakukan self-care secara rutin, seseorang dapat mengurangi stres, meningkatkan kesejahteraan, dan mencegah burnout.\r\n\r\nBerbagai bentuk self-care dapat mencakup olahraga teratur, tidur yang cukup, makan makanan sehat, dan mengambil waktu untuk hobi atau aktivitas yang disukai. Aktivitas-aktivitas ini dapat memberikan rasa pencapaian dan kepuasan, serta membantu mengalihkan pikiran dari stres sehari-hari.\r\n\r\nSelain itu, penting untuk mengenali dan mengelola emosi dengan cara yang sehat. Ini bisa melibatkan berbicara dengan teman atau terapis, menulis jurnal, atau melakukan meditasi dan relaksasi. Mengelola emosi dengan baik dapat membantu seseorang menghadapi tantangan hidup dengan lebih baik.\r\n\r\nMembuat batasan yang sehat juga merupakan bagian dari self-care. Menetapkan batasan dalam hubungan dan pekerjaan dapat mencegah kelelahan emosional dan fisik. Penting untuk belajar mengatakan tidak ketika beban terlalu berat dan meminta bantuan ketika diperlukan.\r\n\r\nTerakhir, self-care juga melibatkan pengembangan hubungan yang positif. Membangun dan memelihara hubungan yang sehat dengan orang lain dapat memberikan dukungan emosional dan meningkatkan rasa keterhubungan. Hubungan yang kuat dapat menjadi sumber kekuatan dan kenyamanan saat menghadapi masa-masa sulit.', '2024-05-24 06:18:37', '2024-06-01 15:53:27'),
(9, 'Strategi Mengelola Stres di Tempat Kerja', 'Stres di tempat kerja adalah masalah umum yang dapat mempengaruhi kesehatan mental dan produktivitas karyawan. Stres yang berkepanjangan dapat menyebabkan berbagai masalah kesehatan, termasuk kecemasan, depresi, dan masalah fisik seperti sakit kepala dan gangguan tidur.\r\n\r\nSalah satu strategi utama untuk mengelola stres di tempat kerja adalah dengan menetapkan prioritas dan mengelola waktu dengan efektif. Membuat daftar tugas dan menetapkan batas waktu yang realistis dapat membantu mengurangi perasaan kewalahan. Selain itu, penting untuk mengambil istirahat secara teratur untuk menghindari kelelahan.\r\n\r\nKomunikasi yang efektif dengan rekan kerja dan atasan juga dapat membantu mengelola stres. Menyampaikan perasaan dan kebutuhan dengan jujur dapat mencegah kesalahpahaman dan membantu menciptakan lingkungan kerja yang lebih mendukung. Mendapatkan dukungan dari tim atau supervisor juga dapat membuat beban kerja terasa lebih ringan.\r\n\r\nTeknik relaksasi seperti pernapasan dalam, meditasi, atau yoga dapat membantu mengurangi stres dan meningkatkan kesejahteraan mental. Menyisihkan beberapa menit setiap hari untuk latihan relaksasi dapat membuat perbedaan besar dalam cara seseorang menghadapi tekanan kerja.\r\n\r\nTerakhir, menjaga keseimbangan antara pekerjaan dan kehidupan pribadi sangat penting. Memastikan waktu untuk beristirahat dan melakukan aktivitas yang menyenangkan di luar jam kerja dapat membantu mengisi ulang energi dan menjaga kesehatan mental. Mengatur batasan yang jelas antara pekerjaan dan kehidupan pribadi juga dapat mencegah stres berlebihan.', '2024-05-31 14:50:55', '2024-06-01 15:54:07'),
(11, 'Mengenali Gejala Depresi dan Cara Mengatasinya', 'Depresi adalah kondisi kesehatan mental yang serius dan dapat mempengaruhi kehidupan sehari-hari seseorang. Mengenali gejala depresi adalah langkah pertama yang penting untuk mendapatkan bantuan yang diperlukan. Gejala depresi dapat bervariasi, tetapi beberapa tanda umum termasuk perasaan sedih yang mendalam, kehilangan minat pada aktivitas yang biasanya dinikmati, perubahan nafsu makan dan pola tidur, serta perasaan tidak berharga atau putus asa.\r\n\r\nJika seseorang merasa mengalami gejala-gejala tersebut, penting untuk mencari bantuan profesional. Terapis atau konselor dapat memberikan dukungan dan strategi untuk mengatasi depresi. Terapi berbicara, seperti terapi kognitif-perilaku, telah terbukti efektif dalam membantu individu memahami dan mengubah pola pikir negatif.\r\n\r\nSelain terapi, perubahan gaya hidup juga dapat membantu mengatasi depresi. Olahraga teratur, misalnya, dapat meningkatkan suasana hati dan energi. Mengonsumsi makanan sehat dan menjaga pola tidur yang baik juga penting untuk kesejahteraan mental.\r\n\r\nDukungan sosial adalah faktor penting lainnya dalam mengatasi depresi. Berbicara dengan teman, keluarga, atau bergabung dengan kelompok dukungan dapat memberikan rasa keterhubungan dan mencegah perasaan isolasi. Dukungan dari orang-orang terdekat dapat memberikan kekuatan dan motivasi untuk melewati masa-masa sulit.\r\n\r\nTerakhir, penting untuk mengingat bahwa mengatasi depresi adalah proses yang memerlukan waktu. Bersabar dengan diri sendiri dan memberikan waktu untuk pulih adalah langkah penting. Mengambil langkah kecil setiap hari menuju pemulihan dapat membantu seseorang meraih kesejahteraan mental yang lebih baik.', '2024-05-31 14:52:38', '2024-06-01 15:54:33'),
(12, 'Peran Terapi dalam Mengatasi Gangguan Kecemasan', 'Gangguan kecemasan adalah salah satu masalah kesehatan mental yang paling umum, dan terapi dapat memainkan peran penting dalam pengelolaannya. Gangguan kecemasan dapat mempengaruhi berbagai aspek kehidupan, termasuk pekerjaan, hubungan, dan kesehatan fisik. Namun, dengan terapi yang tepat, individu dapat belajar mengelola kecemasan mereka dan meningkatkan kualitas hidup.\r\n\r\nSalah satu bentuk terapi yang efektif untuk mengatasi gangguan kecemasan adalah terapi kognitif-perilaku (CBT). CBT membantu individu memahami dan mengubah pola pikir negatif yang dapat memicu atau memperparah kecemasan. Melalui CBT, individu dapat mengembangkan strategi untuk menghadapi situasi yang menimbulkan kecemasan dengan cara yang lebih konstruktif.\r\n\r\nSelain CBT, terapi eksposur juga sering digunakan untuk mengatasi gangguan kecemasan. Terapi ini melibatkan menghadapi secara bertahap situasi atau objek yang menimbulkan kecemasan, dengan tujuan untuk mengurangi respons kecemasan dari waktu ke waktu. Terapi eksposur dapat sangat efektif untuk gangguan kecemasan seperti fobia dan gangguan stres pasca-trauma (PTSD).\r\n\r\nDukungan dari terapis yang berpengalaman dapat memberikan rasa aman dan dukungan emosional selama proses terapi. Hubungan terapeutik yang kuat antara terapis dan klien adalah faktor penting dalam keberhasilan terapi. Klien harus merasa nyaman dan didukung untuk membahas perasaan dan kekhawatiran mereka tanpa rasa takut dihakimi.\r\n\r\nTerakhir, penting untuk diingat bahwa terapi adalah perjalanan yang memerlukan komitmen dan kesabaran. Hasil yang signifikan mungkin memerlukan waktu, dan individu perlu terus menerapkan teknik-teknik yang dipelajari selama terapi dalam kehidupan sehari-hari mereka. Dengan dukungan yang tepat dan pendekatan yang tepat, individu dapat berhasil mengelola gangguan kecemasan mereka dan mencapai kesejahteraan mental yang lebih baik.', '2024-05-31 15:00:42', '2024-06-01 15:54:57'),
(13, 'Dampak Media Sosial pada Kesehatan Mental Remaja', 'Media sosial telah menjadi bagian integral dari kehidupan remaja, tetapi penggunaannya yang berlebihan dapat memiliki dampak negatif pada kesehatan mental. Penelitian menunjukkan bahwa media sosial dapat mempengaruhi persepsi diri dan harga diri remaja, seringkali dengan cara yang merugikan. Tekanan untuk menampilkan kehidupan yang sempurna dan perbandingan sosial dapat menyebabkan kecemasan dan depresi.\r\n\r\nSalah satu dampak negatif dari media sosial adalah perasaan isolasi dan kesepian. Meskipun media sosial dirancang untuk menghubungkan orang, banyak remaja merasa lebih terisolasi karena interaksi online yang dangkal. Perasaan ini dapat diperparah oleh cyberbullying, yang merupakan masalah serius yang dapat merusak kesejahteraan mental remaja.\r\n\r\nSelain itu, media sosial dapat mengganggu tidur dan waktu istirahat remaja. Penggunaan perangkat elektronik sebelum tidur dapat mengganggu pola tidur dan menyebabkan masalah tidur jangka panjang. Kurang tidur dapat mempengaruhi suasana hati, energi, dan kemampuan kognitif remaja.\r\n\r\nNamun, penting untuk mencatat bahwa media sosial juga memiliki manfaat jika digunakan dengan bijak. Media sosial dapat menjadi alat untuk mendapatkan dukungan, informasi, dan koneksi positif. Remaja dapat menggunakan platform ini untuk bergabung dengan komunitas yang mendukung dan menemukan sumber daya untuk kesehatan mental.\r\n\r\nUntuk mengurangi dampak negatif media sosial, penting bagi remaja dan orang tua untuk mengatur batasan waktu layar dan mendorong aktivitas di luar layar. Edukasi tentang penggunaan media sosial yang sehat dan kritis juga dapat membantu remaja memahami cara berinteraksi secara positif di dunia digital. Dengan pendekatan yang seimbang, media sosial dapat menjadi alat yang berguna tanpa merusak kesehatan mental remaja.', '2024-06-01 15:19:14', '2024-06-01 15:55:21'),
(14, 'Peran Olahraga dalam Meningkatkan Kesehatan Mental', 'Olahraga tidak hanya bermanfaat bagi kesehatan fisik, tetapi juga memiliki dampak positif yang signifikan terhadap kesehatan mental. Aktivitas fisik secara teratur dapat membantu mengurangi stres, kecemasan, dan gejala depresi. Ini karena olahraga merangsang produksi endorfin, yaitu hormon yang bertanggung jawab untuk perasaan bahagia dan puas.\r\n\r\nBerbagai jenis olahraga dapat memberikan manfaat bagi kesehatan mental, mulai dari aerobik seperti berlari atau bersepeda, hingga latihan kekuatan seperti angkat beban. Bahkan aktivitas fisik ringan seperti berjalan kaki atau yoga dapat memberikan efek yang positif. Yang terpenting adalah menemukan jenis olahraga yang sesuai dengan minat dan kebutuhan individu.\r\n\r\nSelain manfaat biokimia, olahraga juga membantu meningkatkan rasa percaya diri dan citra tubuh. Ketika seseorang merasa lebih kuat dan bugar, mereka cenderung memiliki pandangan yang lebih positif tentang diri mereka sendiri. Peningkatan ini dalam rasa percaya diri dapat membantu mengurangi perasaan cemas dan depresi.\r\n\r\nOlahraga juga dapat menjadi sarana untuk bersosialisasi dan membangun dukungan sosial. Bergabung dengan klub olahraga atau kelompok latihan dapat memberikan kesempatan untuk berinteraksi dengan orang lain dan membangun hubungan yang positif. Dukungan sosial ini dapat menjadi sumber kekuatan dan motivasi dalam menghadapi tantangan kesehatan mental.\r\n\r\nTerakhir, penting untuk menjadikan olahraga sebagai bagian rutin dari gaya hidup. Menjadwalkan waktu khusus untuk berolahraga dan menetapkan tujuan yang realistis dapat membantu memastikan konsistensi. Dengan menjadikan olahraga sebagai kebiasaan, seseorang dapat secara signifikan meningkatkan kesehatan mental mereka dan mencapai kesejahteraan yang lebih baik.', '2024-06-01 15:55:42', '2024-06-01 15:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_path`, `description`, `created_at`) VALUES
(2, 'you-are-not-bad.jpg', 'You are not Bad broo!', '2024-05-14 17:55:19'),
(6, 'yohanes-14-1.jpg', 'Yohanes 14:1', '2024-05-24 06:20:10'),
(7, 'selalu-percaya.jpeg', 'Selalu Percaya!', '2024-06-01 15:20:05'),
(9, 'mazmur103-13.jpg', 'Mazmur 103:13', '2024-06-01 16:31:15'),
(10, 'mazmur34-19.jpg', 'Mazmur 34:19', '2024-06-01 16:31:36'),
(11, 'hari-ini-adalah.jpg', 'Quotes Today!', '2024-06-01 16:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `kesan` text NOT NULL,
  `pesan` text NOT NULL,
  `penilaian` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `nama`, `domisili`, `kesan`, `pesan`, `penilaian`, `created_at`) VALUES
(2, 'gintingg', 'bogor kota hujan', 'baik', 'lanjutkan bosku', 5, '2024-05-22 18:50:51'),
(3, 'Mek', 'batu', 'keren cuy', 'lebih baik lagi', 4, '2024-05-23 09:48:19'),
(5, 'julius', 'jakbar', 'bagus', 'bagus bgt', 5, '2024-05-24 06:21:22'),
(6, 'amanda', 'bogor', 'bagus', 'sangat bagus', 5, '2024-05-31 14:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `blocked` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `blocked`) VALUES
(1, 'ginting17', 'andrs.ginting@gmail.com', '$2y$10$xv/FZHeRTHJrT.LzdQMNg.0r.iPPLyyDMNrCO8agBq4/qwsCify7G', '2024-05-14 11:28:12', 0),
(2, 'julius177', 'andrs.nicol@gmail.com', '$2y$10$vTZTHatDzI7rZWnELD/q/O4uo8YK7qgywK8PYFWGHjD.g8NY6V87m', '2024-05-14 11:43:40', 0),
(3, 'ginting177', 'apaaja@gmail.com', '$2y$10$Bn2kGZ.gmZo8hF5PVowS5OMNfVfIRaJrBmRV7VzMP3Opd2h96gRRa', '2024-05-14 15:55:14', 0),
(4, 'theo0610', 'theoganteng@gmail.com', '$2y$10$WhYsriaQRbHnqNxJAu4tweUdK56kspoD/WL94E.BACO/0ZW8rOi3.', '2024-05-14 16:13:02', 0),
(5, 'manda123', 'amandacantik@gmail.com', '$2y$10$YV/0a.RyLbEIqBm41LEHI..VOMCIr0zalVk73KZL43Gmk7VYZ4cGG', '2024-05-14 17:52:33', 0),
(6, 'ginting123', 'gantengbgt@gmail.com', '$2y$10$XvhMLTVWmggwkNykpiWoPO0CVOp/CwpSSGP0rcB8Evd0694iB9.VO', '2024-05-18 09:08:35', 0),
(7, 'theo06100', 'annfjagahi@gmail.com', '$2y$10$Vr8uG3fvP6epzTkGMNFgEOy/Nznu69Dq90xuX.yxEeYG5rrfsM9Aq', '2024-05-18 11:04:31', 0),
(8, 'theo777', 'andreas.412022021@civitas.ukrida.ac.id', '$2y$10$/g5KKZKdp8brCLgpYTloP.seLL2uidQ7xNfMTsmVAzmEk//EHnyei', '2024-05-18 11:14:15', 0),
(9, 'ginting1778', 'apaaja123@gmail.com', '$2y$10$96TvRDxfY7LQ3n7kkV6yeORvg6ZivmAP7GWgs/8x/FONypGdF2.5y', '2024-05-20 10:48:47', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
