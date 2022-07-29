<html>

<head>
    <?php include_once("includes/config.php") ?>
    <?php include_once("includes/header.php") ?>
</head>

<body>
    <div class="container">
        <div class="row" style="margin: 50px">
            <!--JLPT Levels by card-->
            <div class="col-sm-3" style="min-width: 250px">
                <div class="card-body py-5 shadow p-3 mb-5 bg-white rounded">
                    <h5 class="card-title" style="font-size: 120px">N5</h5>
                    <p class="card-text">Base Level Japanese consisting of 100+ kanjis</p>
                    <a href="kanji.php?JLPT=N5" class="btn btn-primary">Study</a>
                </div>
            </div>

            <div class="col-sm-3" style="min-width: 250px">
                <div class="card-body py-5 shadow p-3 mb-5 bg-white rounded">
                    <h5 class="card-title" style="font-size: 120px;">N4</h5>
                    <p class="card-text">Common Level Japanese consisting of 300+ kanjis</p>
                    <a href="kanji.php?JLPT=N4" class="btn btn-primary">Study</a>
                </div>
            </div>

            <div class="col-sm-3" style="min-width: 250px">
                <div class="card-body py-5 shadow p-3 mb-5 bg-white rounded">
                    <h5 class="card-title" style="font-size: 120px">N3</h5>
                    <p class="card-text">Conversational Japanese consisting of 600+ kanjis</p>
                    <a href="kanji.php?JLPT=N3" class="btn btn-primary">Study</a>
                </div>
            </div>

            <div class="col-sm-3" style="min-width: 250px">
                <div class="card-body py-5 shadow p-3 mb-5 bg-white rounded">
                    <h5 class="card-title" style="font-size: 120px">N2</h5>
                    <p class="card-text">Advanced Level Japanese consisting of 1000+ kanjis</p>
                    <a href="kanji.php?JLPT=N2" class="btn btn-primary">Study</a>
                </div>
            </div>

            <div class="col-sm-3" style="min-width: 250px">
                <div class="card-body py-5 shadow p-3 mb-5 bg-white rounded">
                    <h1 class="card-title" style="font-size: 120px">N1</h1>
                    <p class="card-text">Fluent Level Japanese consisting of 2000+ kanjis</p>
                    <a href="kanji.php?JLPT=N1" class="btn btn-primary" style="text-align: center">Study</a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once("includes/footer.php") ?>

</html>