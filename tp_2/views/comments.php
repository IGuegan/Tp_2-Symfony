<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Test</title>
</head>

<body style="width: 1000px;">

    <h1>Mon poste <?php echo $id ?></h1><br>
    <p>Voici la desciption : </p>
    <p><?php echo $comments[1]['description'] ?></p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Description</th>
                <th scope="col">Post_id</th>
                <th scope="col">created_at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $value) : ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><?php echo $value['post_id'] ?></td>
                    <td><?php echo $value['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>