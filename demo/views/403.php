<?php require "partials/head.php" ?>
<?php require  "partials/nav.php"; ?>
<?php //require  "partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <h1 class="text-2xl font-bold">You are not authorized to view this page.</h1>
        <p class="mt-4">
            <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back To Homepage</a>
        </p>
        <p class="mt-4 mb-3">
            <a href="/notes" class="inline-flex justify-center rounded-md bg-green-800 py-2 px-3 text-sm font-semibold text-white shadow-sm
             hover:bg-green-900 focus-visible:outline focus-visible:outline-2
             focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Back To Notes</a>
        </p>
    </div>
</main>
<?php require "partials/footer.php" ?>
