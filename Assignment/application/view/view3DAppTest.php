<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test View</title>
    <style>
        h1 {
            color:red;
            margin-left: 5px;
        }
        h2 {
            color:blue;
            margin: 5px;
        }
        p {
            color:green;
            margin-left: 5px;
        }
        .imgBox {
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 260px;
            height: 230px;

        }

        .box{
            border: 1px solid rgba(0, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            height: 280px;
        }
    </style>

</head>
<body>
    <h1>Second 3D App Test View </h1>
    <p>If you are seeing the test Model 3D Image Data below, then your basic MVC framework is working </p>
    <div class="box">
        <h2><?php echo $model1 ?></h2>
        <img class="imgBox" src='assets/gallery/sides/images/<?php echo $image_can1 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model2 ?></h2>
        <img class="imgBox" src='assets/gallery/sides/images/<?php echo $image_can2 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model3 ?></h2>
        <img class="imgBox" src='assets/gallery/sides/images/<?php echo $image_can3 ?>.png'>
    </div>

</body>
</html>