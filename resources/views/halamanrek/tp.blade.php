@extends('mama.main',['title'=> 'Tugas Pendahuluan'])
@section('judul', 'Tugas Pendahuluan 6')
@section('content')
<ol class="soal">
    <li>Jelaskan apa yang dimaksud dengan framework</li>
    <li>Apa perbedaan framework dengan library </li>
    <li>Jelaskan keunggulan menggunakan Laravel framework </li>
    <li>Jelaskan mengenai konsep MVC pada Laravel </li>
    <li>Jelaskan perbedaan Laravel dengan CI (CodeIgniter) </li>
</ol>
Jawaban
<ol class="soal">
    <li>Framework adalah sebuah kerangka kerja yang digunakan untuk mengembangkan  website. Framework ini diciptakan untuk membantu web developer dalam menulis  baris kode. Dengan menggunakan framework penulisan kode akan jauh lebih mudah,  cepat, dan terstruktur rapi </li>
    <li>Kalau kita menggunakan library, kode program kita akan memanggil fungsi/prosedur  yang disediakan oleh library. , jika kita menggunakan library, kita masih bebas  merancang arsitektur aplikasi yang kita buat (tidak ditentukan oleh library). Kalau kita menggunakan framework, kode program kita akan dipanggil oleh  framework. framework sudah menentukan arsitektur aplikasi yang kita bangun.  </li>
    <li><ul class="jawaban">
        <li>website menjadi lebih scalable (mudah dikembangkan)</li>
        <li>terdapat namespace dan tampilan yang membantu Anda untuk mengorganisir  dan mengatur sumber daya website.  </li>
        <li>proses pengembangan menjadi lebih cepat sehingga menghemat waktu karena  Laravel dapat dikombinasikan dengan beberapa komponen dari framework  lain untuk mengembangkan website. </li>
        <li>Laravel menyediakan sebuah templat layaout yang sangat ringan, Terdapat  juga sebuah fitur yang memungkinkan untuk menambahkan template  tambahan yang ringan. Bagi para developer dapat melakukan pengembangan  secara powerfull. </li>
        <li>Laravel dapat dengan mudah mengelola basis data seperti input data ke basis  data, melakukan pembaruan data dan pengelolahan data lainnya. </li>
        <li>terdapat pada banyaknya library object oriented yang tersedia. Dan library library tersebut tidak terdapat pada library framework lainnya, Sehingga  framework ini mempunyai nilai plus pada poin ini dibanding framework php  lainnya. </li>
        <li>Terdapat lebih dari 20 modul library yang digunakan dan masing-masing  modul bersifat individu. Selain bersifat infividu modul tersebut juga bersifat  independen dalam mengadopsi prinsip PHP modern.</li>
        <li>Tools artisan adalah sebuah fitur command line interface yang dimiliki oleh  Laravel, Dengan tools ini maka kamu dapat mengetikkan sekumpulan perintah  yang dapat membantu kamu dalam membangun sebuah website atau aplikasi  web. </li>
        <li>Terdapat juga fitur Add-on yang memunginkan kamu untuk menambahkan  berbagai macam fitur baru ke Laravel dengan mudah. Fitur Add-on tersebut  merupakan hasil dari Kumpulan perintah Artisan dan penggabungan dengan  framework Symphony. </li>
        </ul> 
    </li>
    <li>MVC adalah sebuah metode aplikasi dengan memisahkan data dari tampilan  berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan  user interface. Dengan menggunakan struktur MVC maka membuat laravel mudah  untuk dipelajari dan mempercepat proses pembuatan prototipe aplikasi web.  Framework ini juga menyediakan fitur bawaan seperti otentikasi, mail, perutean, sesi,  dan daftar berjalan. </li>
    <li>Model View Controller 
Baik CodeIgniter maupun Laravel menggunakan pola MVC yang kemudian  digunakan untuk mempercepat design. Dengan ini, developer bisa mengembangkan  kode untuk projek saat ini dan bisa digunakan kembali untuk projek selanjutnya tanpa  menulis ulang. 
Jika MVC dari Laravel luas dan terdokumentasi dengan baik, MVC dari CodeIgniter  mudah untuk dipelajari dan diimplementasikan. Selain itu juga, sangat unik karena  satu-satunya framework PHP yang tidak mengharuskan pengguna untuk  mengoperasikannya hanya dalam MVC itu sendiri. 
Struktur Database 
Laravel menggunakan object-relational mapping, database yang mengorganisir  informasi. Laravel juga hadir dengan pilihan data query, bukan hanya ORM yang bisa  membuat inkonsistensi diantara query dan return hasil null karena ketidaksesuaian  Elequent ORM dan Query builder. 
Sedangkan CodeIgniter menggunakan object-oriented mapping, dimana setiap objek  memiliki data tanpa harus menghubungkannya secara spesifik. Query juga lebih  konsisten dan cepat dan developer bisa menggunakan kode objek tanpa harus menulis  ulang. Sayangnya, tidak bisa menampilkan jenis pola hubungan yang sama seperti  ORM. 
Maintenance
Framework Laravel hadir dengan pemeliharaan yang mudah. Fitur ini sangat cocok  bagi perusahaan berkembang yang ingin melakukan perubahan seiring  berkembangnya perusahaan. Jika developer Anda ingin melakukan maintenance  website yang rutin, Laravel bisa bekerja dengan baik. 
CodeIgniter sama sekali tidak bisa menangani maintenance dengan baik karena tidak  mendukung modular separation. Hal ini membuat developer akan menghabiskan  waktu yang lebih banyak untuk menulis ulang kode untuk diperbarui di website. 
Template dan Perpustakaan 
Tahukan Anda jika CodeIgniter tidak memilki sistem template global. Framework ini  menjaga footprint kecil. Oleh karena itu, CodeIgniter tidak memiliki sistem template  atau perpustakaan yang dimiliki oleh kebanyakan framework. Laravel menggunakan  
Blade template, dimana informasi diubah tanpa mengotak-atik MVC( Model View  Controller)</li>
</ol>
@endsection
