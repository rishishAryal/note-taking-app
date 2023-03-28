<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <h1 class="mb-10" style="color: Black; font-size: 50px">Your content from the database</h1>
       <ul>

<!--           --><?php //foreach ($notes as $key => $value) : ?>
<!---->
<!--               <li class="bg-stone-200 max-w-3xl border rounded px-1 py-3 mb-5">-->
<!--                   <a href="/note?id=--><?php //= $notes[sizeof($notes) -1  - $key ]['id'] ?><!--" class="text-black hover:underline   ">--><?php //= htmlspecialchars($notes[sizeof($notes) -1  - $key ]['body'])  ?><!--</a>-->
<!--               </li>-->
<!---->
<!--           --><?php //endforeach  ?>


           <?php foreach ($notes as $note): ?>

               <li class="bg-stone-200 max-w-3xl border rounded px-1 py-3 mb-5">
                   <a href="/note?id=<?= $note['id'] ?>" class="text-black hover:underline   "><?= htmlspecialchars($note['body'])  ?></a>
               </li>

           <?php endforeach  ?>
       </ul>
            <p class="mt-10">
                <a href="/notes/create" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"> Create New Notes &rarr;</a>
            </p>
        </div>
    </main>
<?php require base_path("views/partials/footer.php") ?>
