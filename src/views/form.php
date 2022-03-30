<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New recipe</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <a href="/">Home</a>
    <h1>New recipe</h1>
    <?php if(!empty($errors)): ?>
        <ul>
            <?php foreach($errors as $error): ?>
            <li><?=$error?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <h2>Please fill the form below</h2>
    <p class="form-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime pariatur distinctio voluptas qui omnis deleniti mollitia similique, nulla dolorem incidunt tenetur non fuga rem, doloribus molestias eius? Dignissimos, assumenda nobis?</p>

    <form class="form-recipe" action="" method="post">
        
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
            <?php if(isset($errors["title"])): ?>
                <!-- <p><small><?=$errors["title"]?></small></p> -->
            <?php endif; ?>
            
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="10" required></textarea>
            <?php if(isset($errors["description"])): ?>
                <!-- <p><small><?=$errors["description"]?></small></p> -->
            <?php endif; ?>
        </div>
        <button>Ajouter</button>        
    </form>    

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde quas impedit nihil aut minima. Sunt repellat facilis, rem repudiandae deleniti quam minima modi aspernatur provident necessitatibus magnam maxime nulla sed.</p>
</body>
</html>