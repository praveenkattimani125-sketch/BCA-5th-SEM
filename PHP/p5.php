

<!DOCTYPE html>
<html>
<body>

<h2>Student Result</h2>

<form method="post">
    Enter Marks (comma separated):
    <input type="text" name="Marks"
           value="<?php echo isset($_POST['Marks']) ? htmlspecialchars($_POST['Marks']) : ''; ?>"
           required>

    <input type="submit" name="Submit" value="Calculate">
</form>

<?php
if (isset($_POST['Submit']))
{
    $marks = explode(",", $_POST['Marks']);
    $distinction = 0;
    $fail = 0;

    foreach ($marks as $mark)
    {
        $mark = (int) trim($mark);

        if ($mark >= 75)
        {
            $distinction++;
        }
        else if ($mark < 35)
        {
            $fail++;
        }
    }

    echo "<h3>Distinction Student: $distinction</h3>";
    echo "<h3>Failed Student: $fail</h3>";
}
?>

</body>
</html>

