<?php
require('../Controller/CKelas.php');
require('../Libraries/csrf.php');
session_start();
$kelas = new CKelas ();


if(isset($_POST['update'])){
    if(CSRF::check($_POST['csrf_token'], 'form_csrf'))
        {
            $nama = $_POST['nama'];
        $newNama = $_POST['new-nama'];
        
        echo $kelas->UpdateData($nama, $newNama);
        }
        else
        {
            echo "invalid or missing CSRF token.";
        }
    }
?>

<form action="" method="post">
<input type="hidden" name="csrf_token" value="<?php echo CSRF::generate('form_csrf'); ?>">
    <table>
        <tr>
            <td>Nama kelas</td><td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Nama kelas baru</td><td>:</td>
            <td>
                <input type="text" name="new-nama">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="update" value="Update">
            </td>
        </tr>
    </table>
</form>

   