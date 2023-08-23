<?php
require('../Controller/CKelas.php');
require('../Libraries/csrf.php');
session_start();

if(isset($_POST['delete'])){
    if(CSRF::check($_POST['csrf_token'], 'form_csrf'))
        {
            $kelas = new CKelas ();
            $deleteName = $_POST['delete_name']; 
        }
        else
        {
            echo "invalid or missing CSRF token.";
        }
        

    echo $kelas->DeleteData($deleteName);
 }
?>

<form action="" method="post">
<input type="hidden" name="csrf_token" value="<?php echo CSRF::generate('form_csrf'); ?>">
    <table>
        <tr>
            <td>Nama kelas</td><td>:</td>
            <td>
                <input type="text" name="delete_name">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="delete" value="Delete">
            </td>
        </tr>
    </table>
</form>
