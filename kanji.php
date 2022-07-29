<html>

<head>
    <?php include_once("includes/config.php") ?>
    <?php include_once("includes/header.php") ?>
</head>

<body>
    <?php $level = $_GET['JLPT']; ?>
    <div class="container">
        <div class="row" style="margin: 20px">
            <!--Adding a kanji function-->
            <div class="d-flex p-2 justify-content-center">
                <button style="margin: 20px; border: 0px" type="button" class="btn btn-secondary shadow p-1 rounded" data-bs-toggle="modal" data-bs-target="#admin">
                    <p style="font-size: 20px; margin: 10px">Add a Kanji</p>
                </button>
            </div>
            <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="settingsmodal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="settingsmodal">Add a kanji</h5>
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
                            } ?>
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
                                    <option value="" selected disabled hidden>Select JLPT Level</option>
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
            <!-- Loop for each kanji in the database -->
            <?php $query = $conn->query("SELECT * FROM kanji_tbl WHERE jlpt='$level'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <!-- Kanji Button -->
                <div class="col-sm">
                    <button style="margin: 20px; border: 0px" type="button" class="btn btn-outline-secondary shadow p-3 mb-5 bg-light rounded" data-bs-toggle="modal" data-bs-target="#<?php echo $row['kanji']; ?>">
                        <h1 style="font-size: 50px"><?php echo $row['kanji']; ?></h1>
                    </button>
                </div>
                <!-- Kanji Modal -->
                <div class="modal fade" id="<?php echo $row['kanji']; ?>" tabindex="-1" aria-labelledby="kanjimodal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" style="font-size: 80px" id="kanjimodal"><?php echo $row['kanji']; ?></h1>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="modal-body col-md-3">
                                        <h5 class="card-text">Onyomi: <?php echo $row['onyomi']; ?></h5>
                                        <h5 class="card-text">Kunyomi: <?php echo $row['kunyomi']; ?></h5>
                                    </div>
                                    <div class="modal-body col-md-3">
                                        <h5 class="card-text">Meaning: <?php echo $row['meaning']; ?></h5>
                                        <h5 class="card-text">Example: <?php echo $row['example']; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
<?php include_once("includes/footer.php") ?>

</html>