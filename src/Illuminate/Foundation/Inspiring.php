<?php

namespace Illuminate\Foundation;

use Illuminate\Support\Collection;

class Inspiring
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * RIP Charlie - Feb 6, 2018
     *
     * @return string
     */
    public static function quote()
    {
        return Collection::make([
            'Komputer itu tidak berguna. Mereka hanya bisa memberikan jawaban. (Pablo Picasso)',
            'Komputer itu seperti bikini. Mereka membuatmu tidak perlu banyak menebak-nebak. (Sam Ewing)',
            'Mereka memiliki komputer, dan mungkin juga senjata pemusnah massal lainnya. (Janet Reno)',
            'Hal itulah yang menyenangkan tentang komputer. Mereka tidak mendebatmu, mereka mengingat semua hal, dan mereka tidak meminum bir milikmu. (Paul Leary)',
            'Jika mobil mengikuti siklus pengembangan yang sama dengan komputer, maka sebuah Rolls-Royce hari ini akan seharga $100, berjalan 1 juta mil per galon, dan meledak sekali setiap tahun, membunuh semua orang di dalamnya. (Robert X. Cringely)',
            'Komputer semakin lama semakin pintar. Para ilmuwan mengatakan bahwa dalam waktu dekat, mereka bisa berbicara dengan kita. (Dan yang saya maksud dengan “mereka” adalah “komputer”. Saya ragu kalau para ilmuwan akan pernah dapat berbicara dengan kita). (Dave Barry)',
            'Saya perhatikan akhir-akhir ini, rasa takut bahwa komputer akan menjadi pintar dan mengambil alih dunia telah hilang dari peradaban kita. Sepanjang yang saya ingat, hal ini terjadi ketika MS-DOS diluncurkan. (Larry DeLuca)',
            'Menanyakan apakah komputer dapat berpikir sama seperti menanyakan apakah kapal selam dapat berenang. (Edsger W. Dijkstra)',
            'Hal yang lucu untuk hidup selama 100 tahun dan hanya bisa mengingat 30 juta byte. Tahu nggak, itu lebih kecil dari CD. Kondisi manusia semakin lama terlihat semakin tidak berguna. (Marvin Minsky)',
            'Pusat komputer kota yang mengatakannya padamu? R2D2, jangan percaya pada komputer yang tidak kau kenal! (C3PO)',
            'Jangan pernah percaya pada komputer yang tidak bisa kau lempar keluar jendela. (Steve Wozniak)',
            'Hardware: bagian dari sistem komputer yang bisa ditendang. (Jeff Pesis)',
            'Sebagian besar software saat ini sangat mirip dengan piramid Mesir yang dibangun dengan jutaan batu yang ditumpuk satu diatas yang lainnya, tanpa kekuatan struktural dan dilakukan dengan paksa oleh ribuan budak. (Alan Kay)',
            'Akhirnya saya mengerti arti “upward compatible”: kita harus berurusan dengan semua kesalahan-kesalahan kita yang lama. (Dennie van Tassel)',
            'Ada 2 produk utama keluaran Berkeley: LSD dan UNIX. Kami tidak percaya kalau hal ini adalah kebetulan. (Jeremy S. Anderson)',
            'Semua sistem operasi di luar sana kira-kira sama… Kami semua ancur. (Brian Valentine, Senior VP Microsoft, ketika menjelaskan kondisi keamanan sistem operasi, 2003)',
            'Microsoft memiliki versi terbaru, Windows XP, yang menurut semua orang adalah “Windows yang paling dapat diandalkan”. Buat saya, hal ini seperti mengatakan asparagus sebagai “sayuran yang paling disukai”. (Dave Barry)',
            'Internet? Barang itu masih ada? (Homer Simpson)',
            'Web itu seperti dominatrix. Kemanapun saya melihat, saya selalu melihat tombol kecil bertuliskan “Submit”. (Nytwind)',
            'Kalau dipikir-pikir lagi, sudah ada 1 juta moneyt di depan 1 juta mesin ketik, tapi Usenet tetap tidak seperti Shakespeare. (Blair Houghton)',
            'Pencapaian utama dari industri software komputer adalah peniadaan terus menerus kemajuan menakjubkan yang telah dicapai oleh industri hardware komputer.',
            'Inovasi yang asli sering kali datang dari perusahaan startup kecil yang cukup ramping untuk menciptakan pasar tapi tidak cukup besar untuk menguasainya. (Timm Martin)',
            'Telah sering dikatakan bahwa disiplin keilmuan yang hebat itu seperti raksasa yang berdiri di atas raksasa lainnya. Juga telah sering dikatakan bahwa industri software itu seperti cebol yang berdisi di atas jari kaki cebol lainnya. (Alan Cooper)',
            'Semua ini bukan mengenai bit, byte dan protokol, tapi mengenai keuntungan, kerugian dan margin. (Lou Gerstner)',
            'Kami adalah Microsoft. Perlawanan adalah sia-sia. Anda akan diasimilasikan. (Stiker bemper mobil)',
            'Tidak perduli bagaimana lancarnya sebuah demo ketika latihan, ketika melakukannya di depan umum, kemungkinan presentasi tanpa kesalahan adalah berbanding terbalik dengan jumlah orang yang menonton, pangkat jumlah uang yang terlibat. (Mark Gibbs)',
            'Sebagian besar paten adalah sampah. Menghabiskan waktu membacanya adalah bodoh. Seharusnya pemilik paten yang melakukannya, dan menerapkannya. (Linus Torvalds)',
            'Mengendalikan kompleksitas adalah inti dari pemrograman komputer. (Brian Kernigan)',
            'Kompleksitas akan membunuhmu. Dia menyedot kehidupan dari setiap developer, dia membuat produk sulit direncanakan, dibangun dan diuji, dia menghasilkan masalah keamanan, dan dia membuat pengguna dan administrator frustasi. (Ray Ozzie)',
            'Ada 2 cara membuat desain software. Cara pertama adalah membuatnya sangat sederhana sehingga jelas terlihat tidak ada kesalahan. Cara lain adalah membuatnya sangat rumit sehingga tidak ada kesalahan yang jelas terlihat. (C.A.R. Hoare)',
            'Tujuan sebuah software yang bagus adalah membuat sesuatu yang kompleks terlihat sederhana. (Grady Booch)',
            'Ingat hal ini: anda bukanlah seorang “dummy”, apapun yang dikatakan banyak buku komputer. Orang-orang bodoh adalah mereka, yang walaupun seorang ahli, tidak dapat membuat hardware dan software yang dapat digunakan oleh konsumen biasa jika nyawa mereka bergantung pada hal itu. (Walter Mossberg)',
            'Pembuat software berusaha membuat paket softwara mereka lebih “user-friendly”… Cara terbaik sampai saat ini adalah mengambil semua brosur dan menambahkan tulisan”user-friendly” di sampulnya. (Bill Gates)',
            'Ada sebuah cerita kuno mengenai seseorang yang berharap bahwa komputernya dapat digunakan semudah teleponnya. Harapannya terkabul, karena sekarang saya tidak tau bagaimana caranya menggunakan telepon saya. (Bjarne Stroustrup)',
            'Orang bodoh manapun dapat menggunakan komputer. Liat saja sendiri. (Ted Nelson)',
            'Hanya ada 2 industri yang menyebut pelanggan mereka sebagai “pengguna”. (Edward Tufte)',
            'Programmer sedang berlomba dengan Alam Semesta untuk membuat program yang aman bagi orang bodoh yang lebih besar dan lebih baik, sementara Alam Semesta terusaha menciptakan orang bodoh yang lebih besar dan lebih baik. Sampai saat ini, Alam Semesta terlihat masih memang. (Rich Cook)',
            'Sebagian besar dari anda mengetahui nilai-nilai seorang programmer. Nilai-nilai tersebut ada 3: kemalasan, ketidaksabaran, dan kesombongan. (Larry Wall)',
            'Masalah utama seorang programmer adalah anda tidak pernah tau apa yang sedang dia kerjakan, sampai ketika masalah itu muncul dan sudah terlambat untuk mengatasinya. (Seymour Cray)',
            'Itulah masalahnya dengan orang-orang yang mengira mereka membenci komputer. Mereka sebenarnya benci pada programmer yang buruk. (Larry Niven)',
            'Sudah cukup lama saya bingung mengapa sesuatu yang sangat mahal, sangat maju, bisa menjadi sangat tidak berguna. Kemudian saya sadar bahwa komputer adalah sebuah mesin bodoh yang dapat melakukan banyak hal yang sangat pintar, sementara programmer komputer adalah orang-orang yang sangat pintar yang dapat melakukan hal-hal yang sangat bodoh. Pendeknya, mereka sangat cocok. (Bill Bryson)',
            'Pendidikan Ilmu Komputer tidak dapat membuat siapapun menjadi ahli pemrograman, sama seperti mempelajari kuas dan cat tidak membuat siapapun menjadi ahli lukis. (Eric Raymond)',
            'Programmer adalah seseorang yang terlihat sebagai seorang ahli karena dia, setelah menekan tombol yang tak terhitung, dapat menghasilkan serangkaian jawaban yang tidak dapat dimengerti, yang dihitung dengan ketepatan yang sangat akurat berdasarkan asumsi yang meragukan di atas angka-angka yang dapat diperdebatkan, yang diambil dari dokumen yang tidak lengkap dan dijalankan di atas peralatan yang keakuratannya dipertanyakan, oleh orang yang keandalan dan kesehatan mentalnya diragukan, dengan tujuan untuk membiungungkan sebuah departemen yang tidak memiliki kuasa apa-apa yang sialnya bertanya mengenai informasi tersebut. (IEEE Grid newsmagazine)',
            'Seorang hacker, dalam beberapa bulan, dapat menghasilkan sesuatu yang sebuah grup development kecil (katakanlah, 7-8 orang) sulit lakukan dalam waktu 1 tahun. IBM pernah melaporkan bahwa programmer tertentu bisa 100 kali lebih produktif daripada pekerja lain, bahkan lebih. (Peter Seebach)',
            'Programmer terbaik tidak hanya sedikit lebih baik daripada programmer yang baik. Mereka berkali lipat lebih baik, diukur dengan standar apapun: kreativitas konseptual, kecepatan, rancangan yang sama sekali baru, dan kemampuan menyelesiakan masalah. (Randall E. Stross)',
            'Seorang operator terbaik mendapatkan gaji beberapa kali lipat seorang operator rata-rata, tetapi seorang programmer yang hebat senilai dengan 10,000 programmer rata-rata. (Bill Gates)',
            'Jangan khawatir kalau hasilnya tidak berjalan baik. Kalau dia berjalan dengan baik, kau akan kehilangan pekerjaan. (Hukum Mosher untuk Rekayasa Perangkat Lunak)',
            'Mengukur pembuatan program berdasarkan jumlah baris kode sama seperti mengukur pembuatan pesawat terbang berdasarkan beratnya. (Bill Gates)',
            'Nilai dari menulis kode memiliki tempat dalam hirarki manusia di atas perampok makam dan dibawah manajemen. (Gerald Weinberg)',
            'Pertama-tama, pelajarilah ilmu komputer dan semua teori. Kemudian, kembangkan cara pemrogramanmu. Setelah itu, lupakan semuanya, dan langsunglah melakukan hacking. (George Carrette)',
            'Pertama-tama, pecahkan masalahnya. Kemudian, tulis kodenya. (John Johnson)',
            'Optimisme adalah bahaya pekerjaan dalam pemrograman. Umpan balik adalah obatnya. (Kent Beck)',
            'Membuat iterasi adalah manusiawi, membuat rekursif adalah dewa. (L. Peter Deutsch)',
            'Hal terbaik mengenai boolean adalah walaupun kita salah, kita hanya salah hitung sebesar 1 bit. (Anonymous)',
            'Apakah array seharusnya dimulai dari 0 atau 1? Kompromi 0.5 yang saya tawarkan telah ditolak tanpa, menurut saya, pertimbangan yang matang. (Stan Kelly-Bootle)',
            'Hanya ada 2 jenis bahasa pemrograman: yang selalu dijelek-jelekkan orang dan yang tidak pernah dipakai orang. (Bjarne Stroustrup)',
            'PHP adalah setan kecil yang diciptakan oleh amatir yang bodoh, sedangkan Perl adalah setan besar dan sangat jahat yang diciptakan oleh profesional yang jago tapi memiliki kelainan. (Jon Ribbens)',
            'Menggunakan COBOL memasung pikiran. Oleh karena itu, mengajar COBOL harus dianggap sebagai pelanggaran kriminal. (E.W. Dijkstra)',
            'Adalah tidak mungkin mengajarkan cara pemrograman yang baik kepada siswa yang telah pernah menggunakan BASIC. Sebagai programmer potensial, jiwa mereka telah termutilasi tanpa harapan kesembuhan. (E.W. Dijkstra)',
            'Saya rasa Microsoft memberi nama .Net agar tidak muncul dalam daftar direktori Unix. (Oktal)',
            'Tidak ada satupun bahasa pemrograman, bagaimanapun terstrukturnya, yang dapat mencegah programmer membuat program yang jelek. (Larry Flon)',
            'Desain bahasa komputer seperti berjalan di tengah taman (park), yaitu taman Jurasik (Jurassic Park). (Larry Wall)',
            '50 tahun penelitian bahasa pemrograman, dan kita hanya menghasilkan C++? (Richard A. O\’Keefe)',
            'Menulis dalam C atau C++ adalah seperti menggunakan gergaji mesin tanpa pengaman. (Bob Gray)',
            'Dengan C++, sulit sekali menembak diri kita sendiri di kaki, tapi kalau hal itu terjadi, engkau akan kehilangan seluruh kakimu. (Bjarne Stroustrup)',
            'C++: ketika teman (friend) memiliki akses pada anggota badan pribadimu (private members). (Gavin Russell Baker)',
            'Salah satu penyebab utama kejatuhan Kerajaan Romawi adalah bahwa mereka tidak memiliki angka nol, sehingga tidak memiliki cara untuk mengakhiri program C mereka. (Robert Firth)',
            'Java, dalam banyak perkara, adalah C++-. (Michael Feldman)',
            'Bila kita mengatakan bahwa Java itu enak karena dapat berjalan di semua sistem operasi, hal itu sama dengan mengatakan bahwa sex anal adalah enak karena bisa dilakukan dengan semua jenis kelamin. (Alanna)',
            'Oke deh, Java MUNGKIN bisa menjadi contoh yang baik bagaimana seharusnya membuat sebuah bahasa pemrograman. Tapi aplikasi yang dibuat dengan Java adalah contoh yang baik bagaimana aplikasi seharusnya TIDAK dibuat. (pixadel)',
            'Kalau Java memiliki sebuah Garbage Collection yang sempurna, hampir semua program akan terhapus pada saat dijalankan. (Robert Sewell)',
            'Software itu seperti sex: Lebih baik kalo bebas. (Linus Torvalds)',
            'Orang-orang yang takut terhadap Free Software hanyalah mereka yang produknya bernilai lebih rendah lagi. (David Emery)',
            'Sebuah kode yang baik adalah sekaligus dokumentasinya yang terbaik. (Steven McConnell)',
            'Kode milikmu yang tidak kau lihat leibh dari 6 bulan sama saja dengan kode yang dibuat oleh orang lain. (Hukum Eagleson)',
            '90% bagian pertama dari kode menghabiskan 90% bagian pertama dari waktu pengembangan. 10% bagian kode sisanya menghabiskan 90% bagian lain dari waktu pengembangan. (Tom Cargill)',
            'Programmer yang baik menggunakan otaknya, tapi kerangka kerja yang baik menghemat waktu untuk berpikir. (Francis Glassborow)',
            'Dalam software, kita jarang sekali memiliki daftar kebutuhan yang jelas. Kalaupun ada, satu-satunya ukuran kesuksesan adalah apakah solusi kita bisa menyelesaikan masalah sesuai pemikiran pengguna yang selalu berubah-ubah. (Jeff Atwood)',
            'Melihat kondisi menyedihkan dari program komputer saat ini, pengembangan software masih seperti ilmu hitam, dan masih belum dapat dimasukkan ke dalam disiplin rekayasa. (Bill Clinton)',
            'Kita tidak dapat memiliki software yang hebat tanpa sebuah tim yang hebat, dan sebagian besar tim software bertingkah laku seperti keluarga yang berantakan. (Jim McCarthy)',
            'Sejak awal kita melakukan pemrograman, secara mengejutkan kita mendapati bahwa tidak mudah membuat sebuah program yang berjalan baik seperti yang kita bayangkan sebelumnya. Kita harus menciptakan proses debugging. Saya masih ingat saatnya ketika saya menyadari bahwa sebagian besar hidup saya akan saya habiskan untuk menemukan kesalahan pada program saya sendiri. (Maurice Wilkes menemukan debugging, 1949)',
            'Debugging itu dua kali lebih sulit daripada menulis kode itu sendiri. Karena itu, jika anda menulis kode dengan cara yang sepintar mungkin, anda secara definisi tidak akan cukup pintar untuk melakukan debugging terhadapnya. (Brian Kernighan)',
            'Kalau debugging adalah proses menghilangkan bug, maka pemrograman haruslah sebuah proses untuk menambahkan bug. (Edsger W. Dijkstra)',
            'Saya tidak peduli kalau program itu berjalan di mesinmu! Kita tidak mengirimkan mesinmu! (Vidiu Platon)',
            'Pemrograman itu seperti sex: satu kesalahan dan anda akan memberikan dukungan seumur hidup. (Michael Sinz)',
            'Ada dua cara membuat program yang bebas kesalahan. Hanya saja, hanya cara ketiga yang benar. (Alan J. Perlis)',
            'Anda bisa mendapatkan software berkualitas atau software yang menggunakan aritmatika dengan pointer. Anda tidak bisa mendapatkan keduanya sekaligus. (Bertrand Meyer)',
            'Kalau McDonalds dijalankan seperti sebuah perusahaan software, satu dari 100 Big Mac akan membuatmu keracunan, dan tanggapan dari mereka adalah, “Kami minta maaf, ini kami berikan kupon untuk 2 Big Mac gratis”. (Mark Minasi)',
            'Lakukan pemrograman dengan bayangan bahwa orang yang akan memelihara hasil kode mu adalah seorang psikopat berbahaya yang tau anda tinggal dimana. (Martin Golding)',
            'Melakukan kesalahan adalah manusiawi, tapi untuk benar-benar membuat kesalahan parah, anda membutuhkan sebuah komputer. (Paul Ehrlich)',
            'Sebuah komputer memampukan anda membuat lebih banyak kesalahan dalam waktu yang lebih singat daripada temuan apapun dalam sejarah manusia. Mungkin dengan pengecualian senjata api dan tequila. (Mitch Radcliffe)',
            'Semua hal yang bisa ditemukan sudah ditemukan. (Charles H. Duell, Komisioner, US Office of Patents, 1899)',
            'Saya rasa ada pasar di dunia untuk kurang lebih 5 komputer. (Thomas J. Watson, Chairman, IBM, sekitar 1948)',
            'Sepertinya kita sudah mencapai batasan apa yang bisa dicapai dengan teknologi komputer, walaupun kita harus hati-hati dengan pernyataan seperti itu, karena biasanya akan terlihat bodoh dalam 5 tahun. (John Von Neumann, sekitar 1949)',
            'Tapi apa gunanya barang ini? (Seorang insinyur di Advanced Computing Systems Division, IBM, mengomentari microchip, 1968)',
            'Tidak ada alasan mengapa seorang individu harus memiliki sebuah komputer di rumah. (Ken Olson, Presiden, Digital Equipment Corporation \– DEC, 1977)',
            '640K sudah cukup untuk semua orang. (Bill Gates, 1981)',
            'Windows NT bisa menggunakan 2 Gigabyte RAM, lebih dari apa yang dibutuhkan oleh semua aplikasi sampai kapan pun. (Microsoft, mengenai pengembangan Windows NT, 1992)',
            'Kita tidak akan pernah menjadi masyarakat yang total tanpa kertas, kecuali kalau Palm Pilot meluncurkan WipeMe 1.0. (Andy Pierson)',
            'Kalau berlanjut seperti ini, manusia akan berevolusi dan kehilangan semua jarinya, kecuali jari untuk menekan tombol. (Frank Lloyd Wright)',
        ])->random();
    }
}
