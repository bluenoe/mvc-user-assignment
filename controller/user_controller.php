<?php
require_once('../model/user_db.php');

// lay action tu post or get
$action = $_POST['action'] ?? $_GET['action'] ?? 'list_users';

switch ($action) {
    case 'list_users':
        $users = get_users();
        include('../view/list_user.php');
        break;

    case 'search_users':
        $keyword = trim($_POST['keyword'] ?? '');
        $users = get_users($keyword);
        $search = $keyword;
        include('../view/list_user.php');
        break;

    case 'show_edit':
        $email = $_GET['email'] ?? '';
        $user = get_user_by_email($email);
        include('../view/edit_user.php');
        break;

    case 'save_user':
        $email = $_POST['email'];
        $first = $_POST['firstName'];
        $last  = $_POST['lastName'];
        update_user($email, $first, $last);
        header('Location: user_controller.php?action=list_users');
        break;

    case 'delete_user':
        $email = $_GET['email'] ?? '';
        delete_user($email);
        header('Location: user_controller.php?action=list_users');
        break;

    default:
        $users = get_users();
        include('../view/list_user.php');
        break;
}
