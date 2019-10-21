<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {literal}
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    {/literal}
</head>
<body>

<h3>Ticket form</h3>

<div class="container">
    <form method="post">
        <label for="title">Title</label>
        <input value="{$ticket[0].title}" type="text" id="title" name="title" placeholder="Title">


        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Description" style="height:200px">{$ticket[0].description}</textarea>

        <input type="submit" value="Submit">
    </form>

</div>
<a href="http://ticketonphpproject.php:8000/customer/cancelledTickets">Cancelled tickets</a>

</body>
</html>