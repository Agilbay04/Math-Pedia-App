# Tugas5- WEB CI SEDERHANA
### Bayu Agil P/E41181645/TIF/Gol D/III

# CRUD-With-Codeigniter
CRUD dengan Template SB Admin menggunakan Codeigniter

WEB SEDERHANA MATHPEDIA
Berisi Sekumpulan Rumus-Rumus Matematika

Fitur : 
  1. CRUD
  2. Datatable
  
Akun Login :
  1. username : fulan123 / password : 1234

## Cara Penggunaan
1. Jalankan XAMPP anda atau yang lain
2. Buat Repository dan Masukkan hasil download anda kedalam repository
3. Panggil Repository dengan http://localhost/(sesuai direktori anda) 
4. Buat database baru dan import dari direktori folder database **DATABASE** dengan nama `Rumus.sql`
5. Pastikan kode pada file `application/config/database.php` telah sama seperti baris kode berikut :

``` php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'Rumus',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```


