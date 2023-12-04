# Lab10Web
Nama : Anggita Risqi Nur Clarita

NIM : 312210450

Kelas : TI.22.A.4

## DAFTAR ISI <br>
| No | Description | Link |
|-----|------|-----|
|1|Modul Praktikum 10|[Click Here](https://drive.google.com/file/d/1sEFV9IBeHD7MUHu3Xg17pIK-CP8CR-uZ/view)|
|2|Instruksi Praktikum|[Click Here](#instruksi-praktikum)|
|3|Langkah-langkah Praktikum|[Click Here](#langkah-langkah-praktikum)|
|4|Pertanyaan dan Tugas|[Click Here](#pertanyaan-dan-tugas)|

## Praktikum
> ### Instruksi Praktikum
> 1. Persiapkan text editor misalnya **VSCode**.
>
> 2. Buat folder baru dengan nama **lab10_php_oop** pada docroot webserver **(htdocs)**
>
> 3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## Langkah-langkah Praktikum
### Jalankan Apache dan MySQL server dari menu XAMPP Control

![1](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/1c0f6287-3e12-42bb-84af-d1fd1a0ed949)


Kemudian buat folder baru dengan nama **lab9_php_modular** pada docroot webserver **(c:\xampp\htdocs)**. Kemudian buka melalui browser dengan mengakses URL: http://localhost/lab10_php_oop/.


1. **Buat file baru dengan nama `mobil.php`**

    ```php
    <?php
    /**
    * Program sederhana pendefinisian class dan pemanggilan class.
    **/

    class Mobil
    {
        private $warna;
        private $merk;
        private $harga;

        public function __construct()
        {
            $this->warna = "Biru";
            $this->merk = "BMW";
            $this->harga = "10000000";
        }

        public function gantiWarna($warnaBaru)
        {
            $this->warna = $warnaBaru;
        }

        public function tampilWarna()
        {
            echo "Warna mobilnya : " . $this->warna;
        }
    }

    // Membuat objek mobil
    $a = new Mobil();
    $b = new Mobil();

    // Memanggil object
    ?>

    <h2>Mobil Pertama</h2>

    <?= $a->tampilWarna(); ?>

    <h2>Mobil Pertama ganti warna</h2>

    <?php
    $a->gantiWarna("Merah");
    echo $a->tampilWarna(); 
    ?>

    <h2>Mobil Kedua</h2>

    <?php
    $b->gantiWarna("Hijau");
    echo $b->tampilWarna();
    ```

    **Output :**

    ![2](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/a507eb24-c19f-4775-80f4-d654dda1cc2a)


2. **Buat file baru dengan nama `form.php`**

    ```php
    <?php
    /**
    * Nama Class: Form
    * Deskripsi: CLass untuk membuat form inputan text sederhana
    **/

    class Form
    {
        private $fields = array();
        private $action;
        private $submit = "Submit Form";
        private $jumField = 0;

        public function __construct($action, $submit)
        {
            $this->action = $action;
            $this->submit = $submit;
        }
        
        public function displayForm()
        {
            echo "<form action='".$this->action."' method='POST'>";
            echo '<table width="100%" border="0">';
            for ($j=0; $j<count($this->fields); $j++) {
                echo "<tr><td align='right'>".$this->fields[$j]['label']."</td>";
                echo "<td><input type='text' name='".$this->fields[$j]['name']."'></td></tr>";
            }
            echo "<tr><td colspan='2'>";
            echo "<input type='submit' value='".$this->submit."'></td></tr>";
            echo "</table>";
        }

        public function addField($name, $label)
        {
            $this->fields [$this->jumField]['name'] = $name;
            $this->fields [$this->jumField]['label'] = $label;
            $this->jumField ++;
        }
    }
    ?>
    ```

3. **Buat file baru dengan nama `input_form.php`**
    
    ```php
    <?php
    /**
    * Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
    **/
    include "form.php";
    echo "<html><head><title>Mahasiswa</title></head><body>";
    $form = new Form("","Input Form");
    $form->addField("txtnim", "Nim");
    $form->addField("txtnama", "Nama");
    $form->addField("txtalamat", "Alamat");
    echo "<h3>Silahkan isi form berikut ini :</h3>";
    $form->displayForm();
    echo "</body></html>";
    ?>
    ```

    **Output :**

    ![3](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/f9edf64b-ea39-48ee-ab16-6fca86291c59)


### Pertanyaan dan Tugas

Implementasikan konsep modularisasi pada kode program pada praktikum sebelumnya dengan menggunakan class library untuk **form** dan **database connection**.

1. **Buat folder baru dengan nama *lab10_php_praktikum***

    Setelah itu buat beberapa file sama seperti file-file yang ada pada praktikum 9 hanya saja ditambah dengan file **database.php**, untuk script lebih lengkapnya kalian dapat langsung lihat pada folder [lab10_php_praktikum](https://github.com/AnggitaRisqiNC/Lab10Web/tree/main/lab10_php_praktikum).



2. **Hasil Output `home.php`:**


    ![4](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/d6b4ba0c-45cd-4b3c-a632-65415097eaff)



3. **Hasil Output `tambah.php`:**


    ![5](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/972d58ce-18bb-4579-96f0-2a5783036318)

    ![6](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/f584f5b7-fdf0-435c-bffa-dc98f0067ac9)



4. **Hasil Output `ubah.php` :**


    ![7](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/ae94f3bd-51aa-4b21-96d9-bc8c851fbd5e)
    
    ![8](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/75ae6673-7b1a-4f51-94a0-c785236ed3aa)



5. **Hasil Output `hapus.php` :** 


    ![9](https://github.com/AnggitaRisqiNC/Lab10Web/assets/115614419/33e4e4da-e4c4-4248-98af-bed50660cf88)


## Finish