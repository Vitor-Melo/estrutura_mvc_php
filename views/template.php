<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
</head>
<body>
<header>
    <nav>
        <h1>Cabeçalho</h1>
        <hr/>
    </nav>
    <a href="<?php echo BASE_URL; ?>"><button>Home</button></a>
    <a href="<?php echo BASE_URL."galeria"; ?>"><button>galeria</button></a>
</header>


<?php $this->loadViewInTemplate($viewName, $viewData); ?>

    
</body>
</html>