<!DOCTYPE HTML>
<html>
    <head>
        
        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Image parser 0.1</title>
        <?php endif ?>
        
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/styles/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="/styles/styles.css" type="text/css" />
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="bar">
                    <img class="logo" src="http://charlotte.trenchlesstechnologies.net/wp-content/uploads/2014/12/wrench-icon-300x300.png" alt="logo"/>
                    <h1>ImageSearcher 1.0</h1>
                </div>
            </div>
            
        </header>
        <section class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
               <ul class="mainNav">
                   <li><a href="comm_table.php">MySQL base</a></li>
                   <li>Check search script</li>
                   <li>Shop example</li>
                   <li class="active"><a href="index.php">Upload base</a></li>
               </ul>
            </div>
            <div class="col-md-9">