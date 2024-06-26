<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Matakuliah</title>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">Form Input Data Mata Kuliah</th>
                </tr>
                <tr><td colspan="3"><hr></td></tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" value="<?= set_value('kode'); ?>">
                        <span class="error"><?= form_error('kode'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                        <span class="error"><?= form_error('nama'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <th>:</th>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2" <?= set_select('sks', '2'); ?>>2</option>
                            <option value="3" <?= set_select('sks', '3'); ?>>3</option>
                            <option value="4" <?= set_select('sks', '4'); ?>>4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
