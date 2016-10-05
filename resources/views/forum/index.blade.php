<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>This is the forum</h1>

@can('edit_forum')
    <a href="#">Edit the forum</a>
@endcan

@can('manage_money')
    <a href="#">Manage the funds</a>
@endcan

</body>
</html>