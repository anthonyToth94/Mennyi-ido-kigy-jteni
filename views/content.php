<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mennyi idő kigyűjteni?</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="card w-25 m-auto p-3 ">
        <h1>Mennyi idő kigyűjteni?</h1>
        <form action="/mennyiIdo" method="GET">
        <label for="megnevezes">Megnevezése</label>
            <input type="text" class="form-control mb-2" name="megnevezes" id="megnevezes" value="<?php echo $megnevezes ?>">
            <label for="ar">Mennyibe kerül ft</label>
            <input type="number" class="form-control mb-2"  name="ar" id="ar" value="<?php echo $ar ?>">
            <label for="sporolt">Napi megspórolt összeg ft</label>
            <input type="number" class="form-control mb-2" name="sporolt" id="sporolt" value="<?php echo $sporolt ?>">
            <button type="submit" class="btn btn-warning mb-2">Kiszámol</button>
            <?php if ($success): ?>
            <h3 class="mb-2"> <?php echo 'Megnevezés: '.$megnevezes; ?> </h3>
            <hr>
            <h4> <?php  echo $nap.' nap'; ?> </h4>
            <hr>
            <h4> <?php  echo $honap.' hónap'; ?> </h4>
            <hr>
            <h4> <?php  echo $ev.' év'; ?> </h4>
            <?php endif ?>
        </form>
    </div>
</body>
</html>