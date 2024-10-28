
<?php ob_start(); ?>


<h1 class="text-4xl font-semibold text-gray-900 mx-auto w-full text-center mb-24">Tambahkan Data Series</h1>
<form action="" method="post" class="max-w-sm mx-auto">
    <div class="mb-5">
        <label for="nama_series" class="block mb-2 text-sm font-medium text-gray-900 ">Nama series</label>
        <input type="text" id="nama_series" name="nama_series" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>


<?php $content = ob_get_clean();  include 'partials/Master.php'; ?>