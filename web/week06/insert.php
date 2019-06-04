<?php include 'db.php' ?>

<?php
$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];
$topicIds = $_POST['boxes'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
       <?php 
        $query = 'INSERT into scripture(book, chapter, verse, content) 
        VALUES(:book, :chapter, :verse, :content)';

        $statement = $db->prepare($query);

        $statement->bindValue(':book', $book);
        $statement->bindValue(':chapter', $chapter);
        $statement->bindValue(':verse', $verse);
        $statement->bindValue(':content', $content);

        $statement->execute();

        $scriptureID = $db->lastInsertID("scripture_id_seq");

        foreach($topicIds as $topicId) {
            echo "Scripture ID: $scriptureID, TopicID: $topicId";

            $statement = $db->prepare('INSERT into linkscript(scripture_id, topic_id)
            VALUES(:scripture_id, :topic_id)');

            $statement->bindValue(':scripture_id', $scriptureID);
            $statement->bindValue(':topic_id', $topicId);

            $statement->execute();
        }


        header("Location: index.php")
        ?>

    </div>
    
</body>
</html>