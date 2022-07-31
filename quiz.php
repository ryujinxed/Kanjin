<html>

<head>
    <?php include_once("includes/config.php") ?>
    <?php include_once("includes/header.php") ?>
</head>

<body>
    <?php $level = $_GET['JLPT']; ?>
    <div class="container-xl">
        <div class="row" style="margin: 10px">
            <!-- Loop for each randomized kanji in the database -->
            <?php $query = $conn->query("SELECT * FROM kanji_tbl WHERE jlpt='$level' ORDER BY RAND()");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-sm-6">
                    <div class="row bg-light rounded shadow" style="padding: 0px; margin: 10px">
                        <div class="col-sm-3 rounded bg-secondary" style="text-align: center">
                            <h1 class="text-light" style="font-size: 75px"><?php echo $row['kanji']; ?></h1>
                        </div>
                        <!--Kanji questionnaire card-->
                        <div class="col-sm">
                            <div class="form-check" style="padding: 20px">
                                <?php
                                $answer = $row['meaning'];
                                #Get 3 random meaning from other kanjis
                                for ($i = 2; $i >= 0; $i--) {
                                    $query1 = $conn->query("SELECT meaning FROM kanji_tbl WHERE jlpt='$level' ORDER BY RAND()");
                                    $row1 = mysqli_fetch_array($query1);

                                    $question[$i] = $row1['meaning'];
                                    if ($question[$i] == $answer) {
                                        $i++;
                                    }
                                }
                                #Get the correct answer
                                $question[3] = $answer;

                                #Shuffle and print question array
                                shuffle($question);
                                for ($i = 0; $i <= 3; $i++) {
                                    echo "<button type='button' class='btn bg-white' style='margin: 5px' name=" . $question[$i] . "data-bs-toggle='modal' data-bs-target=''>" . $question[$i] . "</button></br>";
                                } ?>
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