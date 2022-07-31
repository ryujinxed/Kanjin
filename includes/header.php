<html>

<head>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css" />
    <link rel="stylesheet" href="libs/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="libs/css/style.css?v=<?php echo time(); ?>" />
    <script src="libs/js/bootstrap.bundle.min.js"></script>
    <!--Transition between pages-->
    <style>
        body {
            opacity: 0;
            transition: opacity .25s;
        }
    </style>
    <script>
        window.transitionToPage = function(href) {
            document.querySelector('body').style.opacity = 0
            setTimeout(function() {
                window.location.href = href
            }, 500)
        }

        document.addEventListener('DOMContentLoaded', function(event) {
            document.querySelector('body').style.opacity = 1
        })
    </script>
</head>

<body>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm" style="padding: 10px">
            <!--Left side nav-->
            <a class="btn btn-outline-primary" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="kanji.php?JLPT=N5">N5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kanji.php?JLPT=N4">N4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kanji.php?JLPT=N3">N3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kanji.php?JLPT=N2">N2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kanji.php?JLPT=N1">N1</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!--Disable confirm form resubmission-->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>