
<?php ob_start(); ?>



<?php 
    require  'partials/Config.php';

    $books = mysqli_query($conn, "SELECT * FROM book JOIN series ON book.series_id = series.id");


?>

<h1 class="text-4xl font-semibold text-gray-900 mx-auto w-full text-center mb-24">Data Books</h1>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="FormBooks.php">Tambah</a></button>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Judul buku 
                </th>
                <th scope="col" class="px-6 py-3">
                    Series
                </th>
                <th scope="col" class="px-6 py-3">
                    Tahun Terbit
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $row_book) : ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $row_book['judul_buku'] ?>
                </th>
                <td class="px-6 py-4">
                    <?= $row_book['nama_series'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $row_book['tahun_terbit'] ?>
                </td>
                <td class="px-6 py-4">
                    <a href="DeleteData.php?id=<?php echo $row_book['id_buku']?>" class="font-medium text-blue-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php $content = ob_get_clean();  include 'partials/Master.php'; ?>