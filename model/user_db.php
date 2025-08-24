<?php
require_once('database.php');

// 1. Lay danh sach users
function get_users($keyword = '') {
    global $db;

    if ($keyword === '') {
        $query = 'SELECT email, firstName, lastName
                  FROM users
                  ORDER BY firstName, lastName';
        $statement = $db->prepare($query);
        $statement->execute();
    } else {
        $query = 'SELECT email, firstName, lastName
                  FROM users
                  WHERE email LIKE :kw
                     OR firstName LIKE :kw
                     OR lastName LIKE :kw
                  ORDER BY firstName, lastName';
        $statement = $db->prepare($query);
        $like = '%' . $keyword . '%';
        $statement->bindValue(':kw', $like);
        $statement->execute();
    }

    $users = $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}

// 2. Lay 1 user theo email
function get_user_by_email($email) {
    global $db;
    $query = 'SELECT email, firstName, lastName
              FROM users
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}

// 3. Update user (change FirstName, LastName)
function update_user($email, $first, $last) {
    global $db;
    $query = 'UPDATE users
              SET firstName = :first,
                  lastName = :last
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':first', $first);
    $statement->bindValue(':last', $last);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}

// 4. Xoa user
function delete_user($email) {
    global $db;
    $query = 'DELETE FROM users WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}
