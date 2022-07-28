<html>

<head>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css" />
    <link rel="stylesheet" href="libs/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="libs/css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <script src="libs/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 20px">
        <!--Left side nav-->
        <a class="btn btn-outline-secondary" href="index.php">Home</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="N5.php">JLPT N5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="N4.php">JLPT N4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="N3.php">JLPT N3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="N2.php">JLPT N2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="N1.php">JLPT N1</a>
                </li>
            </ul>
        </div>

        <!--Right side nav-->
        <button style="margin: 20px; border: 0px" type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#admin">
            <h5>Settings</h5>
        </button>
        <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add a kanji</h5>
                    </div>
                    <div class="modal-body">
                        <!--Submit a new kanji-->
                        <?php
                        if (isset($_POST["submit"])) {
                            $kanji = $_POST["kanji"];
                            $onyomi = $_POST["onyomi"];
                            $kunyomi = $_POST["kunyomi"];
                            $meaning = $_POST["meaning"];
                            $example = $_POST["example"];
                            $jlpt = $_POST["jlpt"];
                            $conn->query("INSERT INTO kanji_tbl (kanji,onyomi,kunyomi,meaning,example,jlpt) VALUES('$kanji', '$onyomi', '$kunyomi', '$meaning', '$example', '$jlpt')");
                        }?>
                        <form method="post" action="">
                            <div class="form-group">
                                <input required class="form-control" type="text" name="kanji" placeholder="Kanji"></input></br>
                            </div>
                            <div class="form-group">
                                <input required class="form-control" type="text" name="onyomi" placeholder="Onyomi"></input></br>
                            </div>
                            <div class="form-group">
                                <input required class="form-control" type="text" name="kunyomi" placeholder="Kunyomi"></input></br>
                            </div>
                            <div class="form-group">
                                <input required class="form-control" type="text" name="meaning" placeholder="Meaning"></input></br>
                            </div>
                            <div class="form-group">
                                <input required class="form-control" type="text" name="example" placeholder="Example"></input></br>
                            </div>
                            <select required class="form-select" name="jlpt">
                                <option>N5</option>
                                <option>N4</option>
                                <option>N3</option>
                                <option>N2</option>
                                <option>N1</option>
                            </select>
                    </div>
                    <button type="submit" class="btn" name="submit">Submit</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>