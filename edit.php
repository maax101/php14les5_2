<?php 
require_once 'settings.php';
print_r($_POST);
if (isset ($_GET['action']) && $_GET['action'] == 'edit'){
    $edit = 'UPDATE `task` SET `description` = :description, WHERE `id` = :id';
    $edit = $task -> prepare($edit);
    $edit->execute ([':id' => $_GET['id'], ':description' => $_POST['description']]);
}
?>
<form  method="POST">
    <label for="save">Изменить задачу:</label>
        <input type="text"  name="description" placeholder="Описание задачи" value="" />
        <input type="submit" name="save" value="Добавить" />
    </form>