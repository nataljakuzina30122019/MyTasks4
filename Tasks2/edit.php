<?php
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$statement = $pdo->prepare("SELEKT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $ GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Task</h1>
                    <from action="update.php?id= $task['id'];?>" method="post">
                        <div class="from-group">
                            <input type="text" name="title" class="from-control"value=">?= $task['title'];?>">
                        </div>
                        <div class="from-group">
                            <textarea name="content" class="frjm-control"><? $task['content'];?></textarea>
                        </div>
                        <div class="from-group">
                            <button class="btn bt-warning" type="submit">Submit</button>
                        </div>
                    </from>
                </div>
            </div>
        </div>
    </body>
</html>

                            
                            
                        
                            
                            
                            
                            
                            
                        
                        
                    
    










