<html>

<head>
    <?php include_once("includes/config.php") ?>
    <?php include_once("includes/header.php") ?>
</head>

<body>
    <?php $level = $_GET['JLPT']; ?>
    <div class="container" style="min-height: 100%">
        <div class="row" style="margin: 20px">
            <!--JLPT level card-->
            <div class="row bg-secondary rounded shadow" style="padding: 0px;">
                <div class="col-sm-4 rounded bg-light" style="padding: 40px; text-align: center">
                    <?php if ($_GET['JLPT'] == 'N5') : ?>
                        <h1 class="display-4">JLPT N5</h1>
                        <h6 class="text-secondary">100+ Beginner kanji</h6>
                    <?php elseif ($_GET['JLPT'] == 'N4') : ?>
                        <h1 class="display-4">JLPT N4</h1>
                        <h6 class="text-secondary">180+ Basic kanji</h6>
                    <?php elseif ($_GET['JLPT'] == 'N3') : ?>
                        <h1 class="display-4">JLPT N3</h1>
                        <h6 class="text-secondary">300+ Intermediate kanji</h6>
                    <?php elseif ($_GET['JLPT'] == 'N2') : ?>
                        <h1 class="display-4">JLPT N2</h1>
                        <h6 class="text-secondary">400+ Advanced kanji</h6>
                    <?php elseif ($_GET['JLPT'] == 'N1') : ?>
                        <h1 class="display-4">JLPT N1</h1>
                        <h6 class="text-secondary">1200+ Expert kanji</h6>
                    <?php endif; ?>
                </div>
                <!--JLPT description card-->
                <div class="col-sm-8">
                    <?php if ($_GET['JLPT'] == 'N5') : ?>
                        <h6 class="text-light" style="padding: 20px">The ability to understand some basic Japanese.</br></br>
                            Reading
                            ・One is able to read and understand typical expressions and sentences written in hiragana, katakana, and basic kanji.
                            </br></br>Listening
                            ・One is able to listen and comprehend conversations about topics regularly encountered in daily life and classroom situations, and is able to pick up necessary information from short conversations spoken slowly.
                        </h6>
                    <?php elseif ($_GET['JLPT'] == 'N4') : ?>
                        <h6 class="text-light" style="padding: 20px">The ability to understand basic Japanese.</br></br>
                            Reading
                            ・One is able to read and understand passages on familiar daily topics written in basic vocabulary and kanji.
                            </br></br>Listening
                            ・One is able to listen and comprehend conversations encountered in daily life and generally follow their contents, provided that they are spoken slowly. </h6>
                    <?php elseif ($_GET['JLPT'] == 'N3') : ?>
                        <h6 class="text-light" style="padding: 20px">The ability to understand Japanese used in everyday situations to a certain degree.</br></br>
                            Reading
                            ・One is able to read and understand written materials with specific contents concerning everyday topics.
                            ・One is also able to grasp summary information such as newspaper headlines.
                            ・In addition, one is also able to read slightly difficult writings encountered in everyday situations and understand the main points of the content if some alternative phrases are available to aid one’s understanding.
                            </br></br>Listening
                            ・One is able to listen and comprehend coherent conversations in everyday situations, spoken at near-natural speed, and is generally able to follow their contents as well as grasp the relationships among the people involved.</h6>
                    <?php elseif ($_GET['JLPT'] == 'N2') : ?>
                        <h6 class="text-light" style="padding: 20px">The ability to understand Japanese used in everyday situations, and in a variety of circumstances to a certain degree.</br></br>
                            Reading
                            ・One is able to read materials written clearly on a variety of topics, such as articles and commentaries in newspapers and magazines as well as simple critiques, and comprehend their contents.
                            ・One is also able to read written materials on general topics and follow their narratives as well as understand the intent of the writers.
                            </br></br>Listening
                            ・One is able to comprehend orally presented materials such as coherent conversations and news reports, spoken at nearly natural speed in everyday situations as well as in a variety of settings, and is able to follow their ideas and comprehend their contents. One is also able to understand the relationships among the people involved and the essential points of the presented materials.</h6>
                    <?php elseif ($_GET['JLPT'] == 'N1') : ?>
                        <h6 class="text-light" style="padding: 20px">The ability to understand Japanese used in a variety of circumstances.</br></br>
                            Reading
                            ・One is able to read writings with logical complexity and/or abstract writings on a variety of topics, such as newspaper editorials and critiques, and comprehend both their structures and contents.
                            ・One is also able to read written materials with profound contents on various topics and follow their narratives as well as understand the intent of the writers comprehensively.
                            </br></br>Listening
                            ・One is able to comprehend orally presented materials such as coherent conversations, news reports, and lectures, spoken at natural speed in a broad variety of settings, and is able to follow their ideas and comprehend their contents comprehensively. One is also able to understand the details of the presented materials such as the relationships among the people involved, the logical structures, and the essential points.</h6>
                    <?php endif; ?>
                </div>
            </div>

            <!--Adding a kanji function-->
            <div class="d-flex p-2 justify-content-center" style="margin: 20px">
                <button type="button" class="btn btn-primary shadow-sm p-1 rounded" data-bs-toggle="modal" data-bs-target="#admin">
                    <h6 style="margin: 15px">Add a Kanji</h6>
                </button>
                <a type="button" class="btn btn-success shadow-sm p-1 rounded" href="quiz.php?JLPT=<?php echo $_GET['JLPT'] ?>">
                    <h6 style="margin: 15px">Quiz</h6>
                </a>
            </div>
            <!--Adding a kanji modal-->
            <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="settingsmodal" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content" style="margin-left: 15%; margin-right: 15%; border: 0px">
                        <div class="modal-header">
                            <h6 class="modal-title" id="settingsmodal">Add a kanji</h6>
                        </div>
                        <div class="modal-body" style="margin-left: 15%; margin-right: 15%">
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
                <!-- Kanji button -->
                <div class="col-sm" style="text-align:center">
                    <button style="border: 0px;" type="button" class="btn btn-outline-secondary shadow-sm p-3 mb-5 bg-light rounded" data-bs-toggle="modal" data-bs-target="#<?php echo $row['kanji']; ?>">
                        <h1 style="font-size: 50px"><?php echo $row['kanji']; ?></h1>
                    </button>
                    <h6><?php echo $row['meaning'] ?></h6>
                </div>
                <!-- Kanji modal -->
                <div class="modal fade" id="<?php echo $row['kanji']; ?>" tabindex="-1" aria-labelledby="<?php echo $row['kanji']; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="border: 0px;">
                            <div class="modal-header justify-content-center bg-white" style="border: 0px">
                                <div class="col-sm text-dark" style="text-align: center">
                                    <h1 class="display-4" style="font-size: 150px" id="<?php echo $row['kanji']; ?>"><?php echo $row['kanji']; ?></h1></br>
                                    <h5><?php echo $row['meaning']; ?></h5>
                                </div>
                                <div class="col-sm rounded bg-secondary text-white shadow" style="padding: 30px">
                                    <h6>Onyomi:</h6>
                                    <h5><?php echo $row['onyomi']; ?></h5></br>
                                    <h6>Kunyomi:</h6>
                                    <h5><?php echo $row['kunyomi']; ?></h5>
                                </div>
                            </div>
                            <div class="modal-body bg-light" style="padding: 50px">
                                <div class="col-md-6">
                                    <h6>Example: </br></br> <?php echo $row['example']; ?></h6>
                                </div>
                            </div>
                            <div class="modal-footer bg-white" style="border: 0px">
                                <button type="button" class="btn bg-light text-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
<?php include_once("includes/footer.php") ?>

</html>