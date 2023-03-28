<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->

        <!--        we should not use $_GET method fpr form submisson-->

        <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">

                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form action="/note" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="id" value="<?= $note['id']  ?>">
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                                <div>
                                    <label for="body" class="block text-sm font-medium leading-6 text-gray-900">body</label>
                                    <div class="mt-2">
                                        <textarea
                                                id="body"
                                                name="body"
                                                rows="3"
                                                class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                                                placeholder="Write some note...."><?= htmlspecialchars($note['body']) ?></textarea>

                                        <?php if(isset($errors['body'])) :?>
                                            <p class="text-red-500" ><?= $errors['body'] ?></p>
                                        <?php endif; ?>


                                    </div>

                                    <div class=" px-4 py-3 text-right sm:px-6">

                                        <a href="/notes" class="inline-flex justify-center rounded-md bg-gray-600 py-2 px-3 text-sm font-semibold text-white
                                        shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2
                                        focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Cancel</a>

                                        <button type="submit" class="inline-flex justify-center rounded-md bg-teal-700 py-2 px-3 text-sm
                                        font-semibold text-white shadow-sm hover:bg-teal-900 focus-visible:outline
                                         focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update &check;</button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</main>
<?php require base_path("views/partials/footer.php") ?>
