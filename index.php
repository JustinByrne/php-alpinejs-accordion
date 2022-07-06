<?php
    $years = [
        '2020' => [
            'title 1' => 'description',
            'title 2' => 'description',
            'title 3' => 'description',
        ],
        '2021' => [
            'title 4' => 'description',
            'title 5' => 'description',
            'title 6' => 'description',
        ],
        '2022' => [
            'title 7' => 'description',
            'title 8' => 'description',
            'title 9' => 'description',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="flex justify-center items-center w-screen h-screen bg-gray-100">
    <div class="p-4 bg-white rounded-lg shadow-lg w-full max-w-lg" x-data="{ open: '<?php echo array_keys($years)[0]; ?>' }">
        <?php
            foreach ($years as $year => $sections) {
                ?>
            <div class="mb-3 bg-sky-100 rounded overflow-hidden">
                <div class="bg-sky-500 p-3 flex justify-between items-center">
                    <span> <?php echo $year; ?> </span>
                    <button
                        class="border-2 border-sky-700 py-0.5 px-2"
                        x-text="open == <?php echo $year; ?> ? '-' : '+'"
                        x-on:click="open == <?php echo $year; ?> ? open = false : open = <?php echo $year; ?>"
                    ></button>
                </div>
                <div x-show="open == <?php echo $year; ?>" class="p-2 flex flex-col space-y-4">
                    <?php foreach ($sections as $title => $description) {
                    ?>
                        <div>
                            <h2 class="font-semibold capitalize"> <?php echo $title; ?> </h2>
                            <p class="text-sm font-light"> <?php echo $description; ?> </p>
                        </div>
                    <?php
                } ?>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</body>
</html>