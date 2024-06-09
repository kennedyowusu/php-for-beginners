<?php require_once ('partials/head.php') ?>

<!-- NAVBAR -->
<?php require_once ('partials/nav.php') ?>

<!-- HEADER -->
<?php require_once ('partials/header.php') ?>

<!-- MAIN SECTION -->
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow rounded-lg">
      <div class="px-4 py-5 sm:p-6
      flex flex-col justify-center items-center
      ">
        <form method="POST" class="w-full max-w-sm mt-4 p-4 ">
          <h3 class="text-lg font-medium text-gray-900">Add New Note</h3>

          <label for="title">Title:</label>
          <input type="text" name="title" id="title" required placeholder="Add Title" class="
            dark:bg-gray-800 dark:text-white
            dark:border-gray-700
            dark:focus:ring-indigo-900
            dark:focus:border-indigo-900
            block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md
            mt-1 p-2" <?php if (isset($title)) {
              echo 'value="' . $title . '"';
            }
            ?>>

          <label for="body">Note Body:</label>
          <textarea name="body" id="body" required placeholder="Add Note" class="focus:ring-indigo-500 focus:border-indigo-500
            dark:bg-gray-800 dark:text-white
            dark:border-gray-700
            dark:focus:ring-indigo-900
            dark:focus:border-indigo-900
            block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md
            mt-1 p-2"><?php if (isset($body)) {
            echo $body;
          }
          ?></textarea>

          <button type="submit" class="w-full dark:bg-gray-800 text-white
          dark:hover:bg-gray-700 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105
          px-4 py-2 rounded-md mt-2
        ">Add Note</button>


          <?php
          if (isset($errors) && !empty($errors)) {
            echo '<div class="text-red-500 mt-2">';
            foreach ($errors as $error) {
              echo '<p>' . $error . '</p>';
            }
            echo '</div>';
          }
          ?>

        </form>

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
