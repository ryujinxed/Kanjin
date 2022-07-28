<html>

<head>
    <?php include_once("includes/config.php") ?>
    <?php include_once("includes/header.php") ?>
</head>

<body>
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-8">
            <div class="row">
                <!-- Loop for each kanji in the database -->
                <?php $query = $conn->query("SELECT * FROM kanji_tbl WHERE jlpt='N5'");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <!-- Kanji Button -->
                    <div class="col-sm-3">
                        <button style="margin: 20px; border: 0px" type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#<?php echo $row['kanji']; ?>">
                            <h1 style="font-size: 100px"><?php echo $row['kanji']; ?></h1>
                        </button>
                    </div>
                    <!-- Kanji Modal -->    
                    <div class="modal fade" id="<?php echo $row['kanji']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" style="font-size: 80px" id="exampleModalLabel"><?php echo $row['kanji']; ?></h1>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="modal-body col-md-3">
                                            <p class="card-text">Onyomi: <?php echo $row['onyomi']; ?></p>
                                            <p class="card-text">Kunyomi: <?php echo $row['kunyomi']; ?></p>
                                        </div>
                                        <div class="modal-body col-md-3">
                                            <P class="card-text">Meaning: <?php echo $row['meaning']; ?></p>
                                            <P class="card-text">Example: <?php echo $row['example']; ?></p>
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
    </div>
</body>

</html>