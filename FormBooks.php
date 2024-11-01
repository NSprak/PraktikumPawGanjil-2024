
<?php ob_start(); ?>


<?php
    require 'partials/Config.php';

    $series = mysqli_query($conn, "SELECT * FROM series");

    if (isset($_POST['submit'])) {
        $nama_buku = $_POST['nama_buku'];
        $series = $_POST['series_id'];
        $tahun = $_POST['tahun'];

        echo $series;

        $result = mysqli_query($conn,"INSERT INTO book(judul_buku, series_id, tahun_terbit) VALUES ('$nama_buku', '$series','$tahun' )");
        $query = mysqli_query($conn,"UPDATE series set jumlah_buku=jumlah_buku+1");

        if(mysqli_affected_rows($conn) > 0) {
            header("Location:Books.php");
        }

    }

?>



<h1 class="text-4xl font-semibold text-gray-900 mx-auto w-full text-center mb-24">Tambahkan Data Books</h1>
<form action="" method="post" class="max-w-sm mx-auto">
    <div class="mb-5">
        <label for="nama_buku" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Buku</label>
        <input type="text" id="nama_buku" name="nama_buku" class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required />

        <label for="series_id" class="block mb-2 text-sm font-medium text-gray-900 ">Pilih Series</label>
        <select id="series_id" name="series_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <?php foreach($series as $row_series) :?>
            <option value="<?= $row_series['id'] ?>" ><?= $row_series['nama_series'] ?></option>
            <?php endforeach ?>
        </select>

        <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 ">tahun terbit</label>
        <input type="text" id="tahun" name="tahun" class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>


<?php $content = ob_get_clean();  include 'partials/Master.php'; ?>