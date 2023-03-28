<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p class="mt-4 mb-3">
            <a href="/notes" class="inline-flex justify-center rounded-md bg-green-800 py-2 px-3 text-sm font-semibold text-white shadow-sm
             hover:bg-green-900 focus-visible:outline focus-visible:outline-2
             focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Back To Notes</a>
        </p>

<!--        <h1 class="mb-10" style="color: Black; font-size: 50px">Your content from the database</h1>-->

        <p class="italic text-slate-900 font-bold shadow-sm bg-zinc-200 p-3	"><?= htmlspecialchars($note['body']) ?></p>




        <footer class="mt-3">
            <a href="/note/edit?id=<?= $note['id']  ?>" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit This Note!</a>
        </footer>

                                    <form class="mt-5" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= $note['id'] ?>" >
                                    <button class="bg-rose-500 hover:bg-rose-600 text-white font-bold py-2 px-4  rounded">Delete This Note</button>
                                    </form>
    </div>
</main>
<?php require base_path("views/partials/footer.php") ?>
