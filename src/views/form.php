<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New recipe</title>
</head>
<body>
    <a href="/">Home</a>
    <h1>New recipe</h1>
    <form action="" method="post">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="10" required></textarea>
        </div>
        <button>Ajouter</button>
    </form>    
</body>
</html>