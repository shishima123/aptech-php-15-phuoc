<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Made in</th>
    </tr>
  </thead>
  <tbody>
    <?php
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];

    foreach ($data as $x=>$x_value){
        echo '<tr>';
        echo '<td scope="row">'.$x.'</td>';
        echo '<td>'.$x_value[type].'</td>';
        echo '<td>'.$x_value[property][price].'</td>';
        echo '<td>'.$x_value[property][made][in].'</td>';
        echo '</tr>';
    }

?>
  </tbody>
</table>
</body>
</html>




