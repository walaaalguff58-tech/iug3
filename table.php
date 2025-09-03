<html>
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>data students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
</head>
<body>
    
    <div class="container mt-4">
    <h2 class="mb-4 text-center">data students</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
   
    <?php

$students = [
[
 
 
'stdNo' => '20003',
'stdName' => 'Ahmed Ali', 'stdEmail' => 'ahmed@gmail.com', 'stdGAP' => 88.7
], [
'stdNo' => '30304',
'stdName' => 'Mona Khalid', 'stdEmail' => 'mona@gmail.com', 'stdGAP' => 78.5
], [
'stdNo' => '10002',
'stdName' => 'Bilal Hmaza', 'stdEmail' => 'bilal@gmail.com', 'stdGAP' => 98.7
], [
'stdNo' => '10005',
'stdName' => 'Said Ali', 'stdEmail' => 'said@gmail.com', 'stdGAP' => 98.7
], [
'stdNo' => '10007',
'stdName' => 'Mohammed ahmed', 'stdEmail' => 'mohamed@gmail.com', 'stdGAP' => 98.7
]
];
?>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 80">
    <thead>
        <tr style="background-color: #ddd;">
            <th>#</th>
            <th>Student No</th>
            <th>Name</th>
            <th>Email</th>
            <th>GAP</th>
        </tr>
    </thead>
    
    
    <?php
    $count = 0;
    foreach($students as $student){
        $count++;?>
    <tr>
         <td>
            <p> <?php echo $count; ?></p>
        </td>
        <td>
            <?php  echo $student['stdNo']?>
        </td>

         <td>
            <?php  echo $student['stdName']?>
        </td>

         <td>
            <?php  echo $student['stdEmail']?>
        </td>

         <td>
            <?php  echo $student['stdGAP']?>
        </td>
       
    </tr>
    
    <?php } ?>
    <?php
    $ss='student_num=5';?>
    <tr>
        <td>
            <?php  echo $ss?>

        </td>
    </td>



        
</body>





</html>









