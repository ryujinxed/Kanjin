<html>

<head>
    <?php include_once("includes/config.php") ?>
    <?php include_once("includes/header.php") ?>
</head>

<body>
    <?php $level = $_GET['JLPT']; ?>
    <div class="container-xl">
        <div class="row" style="margin: 10px">
            <?php
            $query = $conn->query("SELECT * FROM kanji_tbl WHERE jlpt='$level' ORDER BY RAND()");
            #Loop for each randomized kanji in the database    
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-sm-6">
                    <div class="row bg-light rounded shadow" style="padding: 0px; margin: 5px">
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
                                shuffle($question); ?>
                                <form action="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="<?php echo $question[0]; ?>" name="<?php echo $answer; ?>" id="<?php echo $question[0]; ?>">
                                        <label class="form-check-label" for="<?php echo $question[0]; ?>"><?php echo $question[0]; ?></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="<?php echo $question[1]; ?>" name="<?php echo $answer; ?>" id="<?php echo $question[1]; ?>">
                                        <label class="form-check-label" for="<?php echo $question[1]; ?>"><?php echo $question[1]; ?></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="<?php echo $question[2]; ?>" name="<?php echo $answer; ?>" id="<?php echo $question[2]; ?>">
                                        <label class="form-check-label" for="<?php echo $question[2]; ?>"><?php echo $question[2]; ?></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="<?php echo $question[3]; ?>" name="<?php echo $answer; ?>" id="<?php echo $question[3]; ?>">
                                        <label class="form-check-label" for="<?php echo $question[3]; ?>"><?php echo $question[3]; ?></label>
                                    </div>
                                </form>
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