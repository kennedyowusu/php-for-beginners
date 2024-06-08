<?php require_once ('partials/head.php') ?>

<!-- NAVBAR -->

<?php require_once ('partials/nav.php') ?>

<!-- HEADER -->
<?php require_once ('partials/header.php') ?>

<!-- MAIN SECTION -->
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow rounded-lg
      hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 cursor-pointer
    ">
      <div class="px-4 py-5 sm:p-6">
        <!-- <h3 class="text-lg font-medium text-gray-900"><?php echo $note['title'] ?></h3> -->
        <p class="mt-1 text-sm text-gray-500"><?php echo $note['body'] ?></p>
      </div>
    </div>

    <!-- GO BACK TO NOTES PAGE -->
    <div class="mt-4
      flex justify-center items-center
      text-sm text-gray-500 hover:text-indigo-600 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 cursor-pointer
    ">
      <a href="/php/notes" class="text-indigo-600 hover:text-indigo-900">Go back to notes</a>
    </div>
  </div>
</main>

<?php require_once ('partials/footer.php') ?>
