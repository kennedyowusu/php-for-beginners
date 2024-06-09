<?php require_once ('partials/head.php') ?>

<!-- NAVBAR -->

<?php require_once ('partials/nav.php') ?>

<!-- HEADER -->
<?php require_once ('partials/header.php') ?>

<!-- MAIN SECTION -->
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php if (empty($notes)): ?>
      <p class="text-center">No notes found.</p>
    <?php else: ?>
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <?php foreach ($notes as $note): ?>
          <a href="/php/note?id=<?= $note['id'] ?>">
          <div class="bg-white overflow-hidden shadow rounded-lg
            hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 cursor-pointer
          ">
            <div class="px-4 py-5 sm:p-6">
              <h3 class="text-lg font-medium text-gray-900"><?php echo $note['title'] ?></h3>
              <p class="mt-1 text-sm text-gray-500"><?php echo $note['body'] ?></p>
            </div>
          </div>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="fixed bottom-0 right-0 p-6">
    <a href="/php/notes/add-note" class="text-white font-bold py-2 px-4 rounded dark:bg-gray-800 text-white
          dark:hover:bg-gray-700 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105
          px-4 py-2 rounded-md mt-2">
      Add Note
    </a>
  </div>

</main>

<?php require_once ('partials/footer.php') ?>
