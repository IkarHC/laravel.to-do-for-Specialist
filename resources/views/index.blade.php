<h1>Список задач</h1>
<table border="1">
    <tr>
    	<th>№</th>
    	<th>Название</th>
    	<th>Выполнить до</th>
    	<th>Выполнено</th>
    	<th>√</th>
    	<th>Создано</th>
    	<th>Изменено</th>
    </tr>
<?php 
foreach($list as $task)
{
    $s1 = "<s>";
    $s2 = "</s>";
    $chk = 'checked="checked"';
    $tc = $task->complete_at;
    if ($task->completed != 1)
    {
        $s1 = $s2 = $chk = $tc = "";
    }
    echo "<tr>\n"
        , "<td>" . $task->id . "</td>\n"
        , "<td>" . $s1 . '<a href="/show?id=' . $task->id . '">' . $task->title . '</a>' . $s2 . "</td>\n"
        , "<td>" . $task->complete_to . "</td>\n"
    	, "<td>" . $tc . "</td>\n"
    	, "<td><input type='checkbox', value='" . $task->completed . "' " . $chk . "/></td>\n"
    	, "<td>" . $task->created_at . "</td>\n"
    	, "<td>" . $task->updated_at . "</td>\n"
        , "</tr>\n";
}
?>
</table>