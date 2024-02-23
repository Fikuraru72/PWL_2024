# Laporan Jobsheet 2

## Praktikum 1

1. Routing Hello World :
   ![Alt text](Screenshot/1.png)
2. Routing World :
   ![Alt text](Screenshot/2.png)

## Praktikum 2

1. Memanggil route /user/{name} :
   ![Alt text](Screenshot/3.png)
2. Route menerima parameter $postId dan juga $comment :
   ![Alt text](Screenshot/4.png)

## Percobaan 3

1.  Memanggil route /user sekaligus mengirimkan parameter berupa nama user
    $name :
    ![Alt text](Screenshot/5.png)

        ![Alt text](Screenshot/6.png)

## Percobaan 4

1. Membuat controller pada Laravel dengan Artisan :
   ![Alt text](Screenshot/7.png)
2. Buka file pada app/Http/Controllers/WelcomeController.php :
   ![Alt text](Screenshot/8.png)
3. Tambahkan function dengan access public :
   ![Alt text](Screenshot/image.png)
4. Tambahkan controller tersebut pada route :
   ![Alt text](Screenshot/image-1.png)

5. Buka browser, localhost/PWL_2024/public/hello :
   ![Alt text](Screenshot/image-2.png)

6. Tampilkan Pesan ‘Selamat Datang’ PageController : index :
   ![Alt text](Screenshot/image-3.png)

7. Tampilkan Nama dan NIM PageController : about :
   ![Alt text](Screenshot/image-4.png)

8. Tampilkan halaman dinamis ‘Halaman Artikel dengan Id {id}’ id diganti sesuai input dari url PageController : articles :

    ![Alt text](image.png)

## Percobaan 5

1. controller dengan nama PhotoController yang berisi method method standar untuk proses CRUD :
   ![Alt text](image-1.png)

2. buatkan route agar dapat terhubung dengan frontend :
   ![Alt text](image-2.png)

3. update route pada web.php :
   ![Alt text](image-3.png)

## Percobaan 6

1. Pada direktori app/resources/views, buatlah file hello.blade.php :
   ![Alt text](image-5.png)
2. Route akan memanggil View sesuai dengan nama file tanpa ‘blade.php’ :
   ![Alt text](image-4.png)
3. Jalankan code dengan membuka url localhost/PWL_2024/public/greeting :
   ![Alt text](image-6.png)

## Percobaan 7

1. Buatlah direktori blog di dalam direktori views & Pindahkan file hello.blade.php ke dalam direktori blog :
   ![Alt text](image-7.png)
2. Lakukan perubahan pada route :
   ![Alt text](image-8.png)
3. Jalankan code dengan membuka url localhost/PWL_2024/public/greeting :
   ![Alt text](image-6.png)

## Percobaan 8

1. Buka WelcomeController.php dan tambahkan fungsi baru yaitu greeting :
   ![Alt text](image-9.png)
2. Ubah route /greeting dan arahkan ke WelcomeController pada fungsi greeting :
   ![Alt text](image-10.png)
3. Ubah hello.blade.php agar dapat menampilkan dua parameter :
   ![Alt text](image-11.png)
4. Jalankan code dengan membuka url localhost/PWL_2024/public/greeting. Perhatikan
   halaman yang muncul :  
    ![Alt text](image-12.png)

## Soal Praktikum

1. Jalankan Langkah-langkah Praktikum pada jobsheet di atas. Lakukan sinkronisasi
   perubahan pada project PWL_2024 ke Github.
2. Buatlah project baru dengan nama POS. Project ini merupakan sebuah aplikasi Point of Sales yang digunakan untuk membantu penjualan.
3. Buatlah beberapa route, controller, dan view sesuai dengan ketentuan sebagai berikut :
    - Halaman Home Menampilkan halaman awal website
    - Halaman Products Menampilkan daftar product (route prefix)
        - /category/food-beverage
        - /category/beauty-health
        - /category/home-care
        - /category/baby-kid
    - Halaman User Menampilkan profil pengguna (route param)
        - /user/{id}/name/{name}
    - Halaman Penjualan Menampilkan halaman transaksi POS
4. Route tersebut menjalankan fungsi pada Controller yang berbeda di setiap halaman.
5. Fungsi pada Controller akan memanggil view sesuai halaman yang akan ditampilkan.
6. Simpan setiap perubahan yang dilakukan pada project POS pada Git, sinkronisasi
   perubahan ke Github.
