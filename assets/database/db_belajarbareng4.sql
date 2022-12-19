-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 08:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belajarbareng4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password`, `level`) VALUES
(3, 'admin01', '7488e331b8b64e5794da3fa4eb10ad5d', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`) VALUES
(1, 'Marketing', 'Berisi kategori tentang marketing dengan penjelasan kelas marketing'),
(2, 'Bahasa', 'Kemampuan berbahasa Inggris sudah tidak dapat dilepaskan dari dunia kerja. Dalam penggunaanya, Bahasa Inggris di lingkup profesional memiliki perbedaan dari gaya berbahasa sehari-hari sehingga dibutuhkan penyesuaian kembali dalam berbahasa '),
(3, 'IT dan Data', 'Tenaga perkantoran umum harus mampu untuk mengolah dan menyajikan data menggunakan microsoft excel\r\n\r\n\r\n\r\nMenurut Azhar (2019), Microsoft Excel adalah Program aplikasi pada Microsoft Office yang digunakan dalam pengolahan angka (Aritmatika)');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(65) NOT NULL,
  `harga_kelas` int(10) NOT NULL,
  `deskripsi` varchar(600) NOT NULL,
  `gambar` varchar(240) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `link_trailer` varchar(250) NOT NULL,
  `id_pengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `harga_kelas`, `deskripsi`, `gambar`, `id_kategori`, `link_trailer`, `id_pengajar`) VALUES
(1, 'Pelatihan melakukan komunikasi bahasa inggris', 135000, 'Kemampuan berbahasa Inggris sudah tidak dapat dilepaskan dari dunia kerja. Dalam penggunaanya, Bahasa Inggris di lingkup profesional memiliki perbedaan dari gaya berbahasa sehari-hari sehingga dibutuhkan penyesuaian kembali dalam berbahasa Inggris yang efektif. Belum lagi ketika memasuki industri yang memiliki banyak kosakata khusus yang jarang digunakan dalam percakapan, seperti dalam bidang perbankan, e-commerce, atau industri teknologi. Seiring waktu, Bahasa Inggris akan terus berkembang meng', '', 1, '', 0),
(2, 'Belajar pembuatan aplikasi mobile', 170000, 'Di course ini kita akan membuat beberapa aplikasi dengan Flutter berdasarkan desain dari figma. Kita juga akan membuat ulang aplikasi-aplikasi komersil dengan menggunakan Flutter. Tujuan yang akan dicapai Teman-teman dengan mengikuti course ini adalah:\r\n\r\nMengerti caranya Slicing dari desain Figma ke Code\r\n\r\nMengerti widget-widget Flutter dan Implementasi nya dalam Code\r\n\r\nMengerti bagaimana membuat Code yang Rapih dan Efisien\r\n\r\nMengerti bagaimana menggunakan Dart Packages agar proses development menjadi lebih cepat\r\n\r\nMengerti bagaimana menuliskan Code yang Clean\r\n\r\nMengerti bagaimana menyus', '', 3, '', 0),
(3, 'Pelatihan dasar pemasaran digital untuk menjadi pengusaha sukses', 180000, 'Pemasaran merupakan suatu hal yang dibutuhkan oleh suatu bidang usaha, karena pemasaran berperan untuk mencapai tujuan, mengembangkan usaha, mendapatkan laba serta mempertahankan kelangsungan hidup suatu perusahaan di tengah persaingan usaha terutama dalam era perkembangan digital modern saat ini. Selain itu, memiliki sumber daya manusia di bidang pemasaran akan sangat menentukan sebuah keberhasilan usaha, oleh karena itu suatu perusahaan membutuhkan Tenaga Pemasaran yang handal untuk mencapai t', '', 1, '', 0),
(4, 'Membuat website dengan PHP framework Codeigniter', 175000, 'Pembuatan website dengan framework Codeigniter sangat efektif dan efisien, karena sudah menggunakan MVC (Model View Controller) dengan mudah', '', 3, '', 0),
(5, 'Pelatihan dasar membuat website dan SEO untuk pemula', 155000, 'Seorang Tenaga Spesialis Pemasaran bisa membuat website & SEO untuk keperluan pekerjaannya dalam mencapai target penjualan\r\nMenurut laporan dari Future of Jobs dalam World Federation of Exchanges (WFE), terdapat lima pekerjaan menjanjikan di masa depan. Salah satunya adalah Tenaga Spesialis Pemasaran Digital. Namun, pada kenyataannya masih banyak tenaga spesialis pemasaran yang belum menguasai membuat website & SEO sehingga banyak peluang bisnis yang terlewat karena hambatan kemampuan yang dimiliki', '', 3, '', 0),
(6, 'Dasar-dasar microsoft excel', 30000, 'Saat ini kemampuan mengolah data menjadi salah satu syarat bagi pelamar kerja. Kemampuan mengolah data saat ini sedang banyak dibutuhkan, terutama pada bidang Finance, Accounting, Marketing, Operasional dan bidang kerja lain yang membutuhkan perencanaan budget, penginputan data dan pelaporan pekerjaan. \r\n\r\nKemampuan mengolah data ini nantinya akan sangat memudahkan pekerjaan dalam melakukan pengolahan data, analisis data, serta membuat laporan dan visualisasi data.', '', 3, '', 0),
(7, 'Belajar Web Development Menggunakan Bahasa Pemrograman PHP', 400000, 'Pelajari dasar-dasar pemrograman web (HTML, CSS, JavaScript, jQuery dan PHP) untuk membuat aplikasi web dinamis', '', 3, '', 0),
(8, 'Pelatihan Data Science dan Machine Learning Dengan Python', 170000, 'Selamat datang di program pelatihan data science dan machine learning dengan Python!\r\n\r\nPelatihan ini diperuntukan untuk rekan - rekan ingin belajar data science dan machine learning dari sudut terapan dengan memanfaatkan Python.\r\n\r\nBagi rekan - rekan yang belum menguasai pemrograman Python, pelatihan juga memberikan konten pemrograman dasar untuk  Python sehingga rekan - rekan dapat mengikuti pelatihan ini dengan baik. Bagi yang sudah bisa pemrograman Python, rekan - rekan dapat melanjutkan di ', '', 3, '', 0),
(9, 'Belajar akuntansi dasar hingga intermediate', 145000, 'Laporan keuangan merupakan informasi ekonomi yang menunjukkan performa keuangan suatu perusahaan. Sudah menjadi konsekuensi bagi setiap perusahaan untuk membuat laporan keuangan yang akurat dan dapat diandalkan. Sebagai informasi ekonomi, laporan keuangan digunakan oleh para pemakainya sebagai dasar untuk pengambilan keputusan.\r\n\r\nSementara itu, laporan keuangan dihasilkan dari serangkaian tahapan yang membentuk sebuah siklus. Inilah yang disebut dengan siklus akuntansi. Siklus ini diawali denga', '', 1, '', 0),
(10, 'Belajar dasar UI/UX untuk pemula', 150000, 'Coure Interaksi Manusia Komputer merupakan bidang studi yang mempelajari aspek-aspek yang mempengaruhi interaksi antara manusia/user dan komputer (aspek: manusia, hardware, software, lingkungan), serta cara-cara untuk meningkatkan kemudahan penggunaan komputer oleh user (usability).\r\n\r\nPada course ini akan lebih difokuskan pada perancangan user-interface, Human Centered Design, Metode Design Thinking, menciptakan user personal, point of view, panduan praktis membuat how might we statement, affinity diagram, pembuatan wireframe menggunakan figma, pembuatan high fidelity prototyping menggunakan ', '', 3, '', 0),
(11, 'Strategi Pemasaran di Era Industri 4.0', 320000, 'Strategi Pemasaran adalah sebuah penerapan konsep langkah-langkah yang dilakukan oleh produsen untuk bisa menghasilkan produk yang diterima oleh pasar, memenuhi kebutuhan konsumen dan memberikan kepuasan kepada konsumen.\r\nDalam era industry 4.0 dimana peran tehnologi digital semakin erat dengan kehidupan masyarakat maka produsen juga harus bisa merubah konsep pemasarannya. Untuk itulah perlu dibuat strategi pemasaran.', '', 1, '', 0),
(12, 'Belajar Bahasa Arab untuk pemula', 250000, 'Bagi Anda yang sudah lama mau belajar bahasa Arab tetapi bosan belajar banyak kosataka, bosa belajar Nawhu (Tata Bahasa) Yang susah!\r\n\r\nKami buatkan kursus ini untuk Anda.. supaya Anda belajar bahasa Arab gaul, belajar bahasa Arab yang benar dipakai dalam kehidupan sehari-hari.. supaya Anda bisa:\r\n\r\n1- Pakai bahasa Arab dengan teman-teman Anda yang dari Mesir dan negara Arab lainnya!\r\n\r\n2- Pakai bahasa Arab dengan calon suami/istri Anda yang dari Mesir atau negara Arab lain!\r\n\r\n3- untuk mewujudkan impianmu untuk kuliah di salah satu negara Arab\r\n\r\n4- Pakai bahasa Arab dengan pelanggan Anda dan', '', 2, '', 0),
(13, 'Pelatihan Melaksanakan Komunikasi Dalam Bahasa Inggris', 255000, 'Arranging Meeting adalah sebuah pelatihan atau short course yang didisain secara sederhana dan sistematis agar peserta dapat mengikuti dan memahami materi dengan mudah dan efektif. Materi yang disajikan sudah memenuhi 4 aspek dalam kemampuan berbahasa Inggris, yaitu: Vocabulary, Grammar, Reading dan Speaking.\r\n\r\nTujuan khusus materi \"Arranging Meeting ini adalah:\r\n\r\n1. Peserta mampu memahami kosa kata mengenai \"Aranging Meeting\".\r\n\r\n2. Peserta mampu memahami Grammar tentang penggunaan \"be going to vs will\".\r\n\r\n3. Peserta mampu memahami wacana (teks) tentang \"Telephone Etiquette\".\r\n\r\n4. Peserta', '', 2, '', 0),
(14, 'Cara Marketing untuk Menjual Apapun dan Mencari Profit Besar', 305000, 'Video ini adalah online course yang paling lengkap, to-the point, dan mudah dipahami tentang marketing Semua penjelasan disampaikan dalam Bahasa INDONESIA.\r\n\r\nTidak memandang apakah Anda belum pernah sekolah di bidang marketing sebelumnya, atau sudah mengetahui cara menjual yang menarik, video course ini dirancang tentu saja untuk Anda! Dalam kursus ini, kami akan mengajari Anda menggunakan teknik marketing untuk berbagai kebutuhan!\r\n\r\nDilengkapi dengan berjam-jam video course, quiz, dan artikel, kursus komprehensif ini tidak membutuhkan pengalaman apapun! Cukup rasa ingin tahu tentang ilmu ma', '', 1, '', 0),
(15, 'Sukses berjualan Online Menggunakan Social Media Marketing', 270000, 'Social media marketing adalah segala aktivitas melibatkan media sosial untuk berinteraksi dengan tujuan untuk memasarkan produk dan membangun komunikasi intens dengan pelanggan.\r\n\r\nSocial media marketing merupakan salah satu strategi pemasaran produk dengan cara menarik pelanggan menggunakan berbagai informasi produk yang menarik melalui konten digital di banyak funneling digital. Sebut saja Facebook, Instagram, LinkedIn, Twitter, Youtube, Telegram dan yang sekarang lagi happening yaitu Tik Tok.\r\n\r\nHampir semua media sosial yang kita kenal sudah bertransformasi dengan matang dan dapat digunaka', '', 2, '', 0),
(16, 'Bahasa Inggris untuk Bisnis: Memahami English Seputar Kantor', 250000, 'Hampir setiap karyawan mendambakan peningkatan karir dan tentunya peningkatan pendapatan setiap bulannya. Namun,untuk mendapatkan kedua hal tersebut tentu saja membutuhkan kerja keras,ketekunan,dan tentunya harus didukung dengan kemampuan dan keahlian yang mumpuni. Dan,tidak dapat dipungkiri bahwa di era digital dan globalisasi sekarang ini,banyak perusahaan yang menjadikan kemampuan komunikasi menggunakan bahasa Inggris sebagai tolak ukur dan syarat untuk peningkatan karir dan pendapatan karyawannya.\r\n\r\nKemampuan komuikasi yang baik dan dapat berbahasa inggris dengan fasih, merupakan modal aw', '', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `nama_modul` varchar(250) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `deskripsi`, `id_kelas`, `id_pengajar`) VALUES
(1, 'Modul Pertemuan Ke-1 (Pengenalan Aplikasi Mobile)', 'Selamat datang di Praktikum Pemrograman Mobile. Kita akan menggunakan Android\nKotlin untuk praktikum ini. Praktikum ini menggunakan codelab yang menuntun kita\nmembangun aplikasi Android menggunakan Kotlin', 2, 11),
(2, 'Modul Pertemuan Ke-2 (Membuat Aplikasi Dan Menjalankannya)', 'Aplikasi Android diciptakan dengan menggunakan satu atau lebih komponen\r\nbersama, yang dikenal sebagai Activity. Sebuah Activity adalah satu, modul mandiri dari\r\naplikasi yang biasanya berkorelasi langsung ke layar antarmuka pengguna.', 2, 11),
(3, 'Modul Pertemuan Ke-3 (Layout Dengan Linear Layout dan Constrain Layout)', 'Pada modul ini, kita akan mempelajari komponen View dan ViewGroup. Kedua komponen\r\nini dapat berkolaborasi sehingga membentuk antar muka.', 2, 11),
(4, 'Modul Pertemuan Ke-4 (Komponen Widget View)', 'Paket widget pada dasarnya merupakan visualisasi dari elemen user interface (UI)\r\nyang digunakan pada layar aplikasi Android di mana kita dapat merancang sendiri sesuai\r\nkebutuhan.', 2, 11),
(5, 'Modul Pertemuan Ke-5 (Recycler View)', 'RecyclerView adalah tampilan yang menggunakan arsitektur yang disederhanakan dengan UI\r\ncontroller, ViewModel, dan LiveData.', 2, 11),
(6, 'Modul Pertemuan Ke-1 (Gambaran Umum Akuntansi)', 'Peserta didik kursus memiliki pemahaman dan kemampuan tentang\r\npengertian, manfaat, bidang-bidang akuntansi, sejarah, prinsip dasar,\r\npersamaan dan siklus akuntansi, serta jenis perusahaan', 9, 14),
(7, 'Modul Pertemuan Ke-2 (Siklus Akuntansi, Persamaan Akuntansi Dan\r\nAnalisis Transaksi)', 'Pada bab terdahulu sudah diuraikan mengenai manfaat laporan tersebut bagi pihak-pihak\nyang berkepentingan dengan perusahaan dalam rangka mengambil keputusan yang bernilai uang,\nmaka pada bagian ini akan dibicarakan tahapan proses akuntansi atau biasa disebut dengan siklus\nakuntansi. Siklus Akuntansi merupakan suatu kegiatan secara terus-menerus yang dimulai dari\nterjadinya suatu transaksi dan diakhiri dengan penyajian laporan keuangan', 9, 14),
(8, 'Modul Pertemuan Ke-3 (Jurnal Dan Aturan Debet Kredit)', 'Pada Bab kali ini peserta didik di harapkan untuk memahami apa itu Jurnal dan Aturan Debet Kredit', 9, 14),
(9, 'Modul Pertemuan Ke-4 (Buku Besar Dan Neraca Saldo)', 'Buku besar adalah suatu daftar yang berisi kumpulan dari beberapa rekening. Setiap\r\nrekening mempunyai satu buku besar. Berdasarkan siklus akuntansi yang sudah kita pelajari,\r\nbuku besar dilakukan setelah pencatatan jurnal. Proses pencatatan dari buku jurnal ke buku besar\r\ndisebut Posting', 9, 14),
(10, 'Modul Pertemuan Ke-5 (Ayat Jurnal Penyesuaian)', 'Jurnal penyesuaian digunakan untuk menyesuaikan saldo-saldo yang berada di neraca\r\nsaldo agar sesuai dengan nilai sebenarnya. Ayat jurnal penyesuaian harus dilakukan terlebih\r\ndahulu sebelum dibuat laporan keuangan', 9, 14),
(11, 'Modul Pertemuan Ke-1 (Konsep Dasar Bahasa inggris)', 'Modul ini berisi integrasi berbagai materi yang terdapat dalam kaidah berbahasa Inggris yang ditujukan untuk peserta didik dan professional agar dapat berkomunikasi pasif maupun aktif dengan bahasa Inggris', 1, 15),
(12, 'Modul Pertemuan Ke-2 (Structure And Grammar)', 'Pada Modul ini peserta didik diharapkan memahami tentang structure dan grammar yang terdapat dalam Bahasa inggris baik dalam bacaan maupun percakapan', 1, 15),
(13, 'Modul Pertemuan Ke-3 (Reading Comprehension And Listening)', 'Selanjutnya peserta didik diharapkan dapat memahami konsep, bahan dan kemampuan dasar yang dibutuhkan dalam berbahasa inggris', 1, 15),
(14, 'Modul Pertemuan Ke-4 (Discussion, Conversation And Speech)', 'Setelah mengikuti pratikum peserta didik diharapkan dapat mampu berkomuikasi secara aktif untuk Bahasa percakapan sederhana sehari-hari, mampu elakukan diskusi dan pertemuan sederhana berbahasa inggris dan dapat menyampaikan pendapat atau pidato ilmiah', 1, 15),
(15, 'Modul Pertemuan Ke-5 (Writing)', 'Setelah mengikuti pratikum peserta didik diharapkan dapat menulis abstrak kesimpulan, laporan teknisk sederhana, surat resmi dasar, surat untuk korespondensi sederhana, surat lamaran, dan curuculum vitae dalam Bahasa inggris', 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `image` varchar(240) NOT NULL,
  `deskripsi` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama_pengajar`, `id_kelas`, `image`, `deskripsi`) VALUES
(1, 'Mr. Budi', 10, '20221212100423.jpg', 'Seorang dosen dari Universitas Bina Sarana Informatika mengajar Algoritma'),
(2, 'Mr. Sanin', 2, '20221212041617.jpg', 'Saya seorang guru sistem informasi manajemen akuntansi'),
(3, 'Mrs. Siti', 1, '20221212041707.jpg', '&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete '),
(4, 'Ms. Smith', 1, '20221212041751.jpg', '&quot;My name is Carol Smith. Currently I am active in sharing experiences in the world of Digital Marketing, and also active as a National Instructor in Digital Marketing trainings. I also serve as a Project Manager at various companies in'),
(5, 'Mr. Johnson', 3, '20221212042043.jpg', '&quot;Sharing is who I am, and teaching is where I am at my best, because I\'ve been on both sides of that equation, '),
(6, 'Mrs. Anderson', 1, '20221212042646.jpg', '&quot;Anderson Olivia is a Microsoft MVP (Most Valuable Professional) dedicated to helping you create outstanding tools and reports in Excel &amp; Google Sheets. Her courses are for those who want to shine at work, accelerate their &quot;'),
(7, 'Mr. Rick', 3, '20221212042718.jpg', '&quot;My name is Rick grimes, an enthusiastic resident of East Tennessee. In business, I wear several metaphorical &ldquo;hats.&rdquo; I am Pioneer Media&rsquo;s website designer, web developer and webmaster. Each is a unique role in the pr'),
(8, 'Mr. White', 1, '20221212042739.jpg', '&quot;My Name is White Walters and i have been programming python for 5 years. I do some Data Science project for my office and make some automation task with python programming,  and using it as back end. With my experience i love to share'),
(9, 'Ms. Skyler', 3, '20221212042808.jpg', '&quot;I am an accounting and tax practitioner who has an educational background as a graduate of accounting degree and has experience in handling accounting and tax assignments in various companies for almost 20 years.'),
(10, 'Mr. Corazon', 1, '20221212042937.jpg', '&quot;I do believe the keys to learn languages are focus on it, be brave to say, practice regularly and the big key is knowing the grammar of that language correctly. When you know the basic of a language, you can jump &quot;'),
(11, 'Mr. Roger', 1, '20221212042951.jpg', 'Mr Roger, the founder of  LegooMandarin dot com and Educational Video Courses Online ( Edeo), born in china, resides in Kuala Lumpur, Malaysia, holding Master degree from University Malaya, has 26 years&rsquo; experience in mandarin teachin'),
(12, 'Mr. Budi', 3, '20221212043024.jpg', 'Seorang dosen dari Universitas Bina Sarana Informatika mengajar Algoritma'),
(13, 'Mrs Fika', 1, '20221212043118.jpg', '&quot;Pengalaman bekerja dalam berbagai jenis industri dan jenis usaha memberikan pemahaman bisnis yang komprehensif. Dalam training selalu memberikan contoh yang memang terjadi dalam realitas bisnis&quot;'),
(14, 'Mr. Irfan', 2, '20221212043243.jpg', '&quot;Latarbelakang sarjana manajemen bisnis serta pasca sarjana magister ekonomi memberikan prespektif yang berbeda dalam memandang tantangan dan target-target. &quot;'),
(15, 'Mrs. Gemala', 1, '20221212043157.jpg', '&quot;Berpengalaman sebagai pengajar bahasa Inggris di berbagai lembaga antara lain PG TK Tadika Puri Bintaro, Easy Voice Cengkareng, Gracia English Duta Mas dan lain-lain. &quot;'),
(16, 'Mr. Khairul', 3, '20221212043304.jpg', '&quot;Saya Khairul.. Saya guru bahasa Arab, pendakwah.  Saya mengajarkan bahasa Arab di Indonesia, InsyaAllah kita akan belajar bahasa Arab bersama dengan cara yang mudah dan cepat.  &quot;'),
(17, 'Sultan Farhan Abing', 15, '20221218111013.jpg', 'Saya seorang kapiten');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status` enum('success','pending','failed') NOT NULL,
  `created_at` datetime NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  `gambar` varchar(240) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `email`, `username`, `password`, `gambar`, `level`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin1', 'admin123', '', 2, '2022-12-08 15:17:17'),
(2, 'user', 'user@gmail.com', 'user', 'user123', '', 2, '2022-12-08 15:17:09'),
(3, 'fajar', 'fajarfrmn62@gmail.com', 'fajar', '24bc50d85ad8fa9cda686145cf1f8aca', '', 2, '2022-12-08 15:17:14'),
(4, 'fajar123', 'fajarfirmansyah3232@gmail.com', 'fajar123', '7bedc9fd30769590c992b8f7f23738f7', '', 2, '2022-12-11 03:09:25'),
(5, '', 'fajar375@gmail.com', 'fajar375', '32f131f770fb9fc526a349b5e686f12e', '', 2, '2022-12-09 00:47:45'),
(6, '', 'nabila@gmail.com', 'nabila', '652d3266220e0aacb047d3aa6f51f1b0', '', 2, '2022-12-10 00:59:57'),
(7, '', 'caca@gmail.com', 'caca', '04217c4d7e246e38b0d7014ee109755b', '', 2, '2022-12-10 13:03:44'),
(8, '', 'riyaldi@gmail.com', 'riyaldi', '4a8a8ec095601ca3ca7a433369a32bf2', '', 2, '2022-12-10 16:22:59'),
(9, '', 'fajarfrmn62@gmail.com', 'fajar', '24bc50d85ad8fa9cda686145cf1f8aca', '', 2, '2022-12-10 19:12:00'),
(10, '', 'riyaldi@gmail.com', 'riyaldi', '827ccb0eea8a706c4c34a16891f84e7b', '', 2, '2022-12-12 08:57:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
