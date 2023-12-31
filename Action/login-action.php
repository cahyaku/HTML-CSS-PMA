<?php


// echo $_POST["cahya"];

//$loginData = [
//  [
//    "email" => "cahya@gmail.com",
//    "password" => "cahya123"
//  ],
//  [
//    "email" => "kumala@gmail.com",
//    "password" => "kumala321"
//  ],
//];

// $_POST[$loginData];
// if ($loginData) {
//   header('Location: ../login.php?error=true');
//   die();
// }

//function loadDataFromJson(string $fileName): array
//{
//    $path = __DIR__ . "/../assets/json/" . $fileName;
//    if (file_exists($fileName)) {
//        $data = file_get_contents($fileName);
//        $result = json_decode($data, true);
//        return $result;
//    }
//    return [];
//}

function loadDataFromJson(string $fileName):array
{
    $path = __DIR__ . "/../persons.json" . $fileName;
    if (file_exists($path)) {
        $data = file_get_contents($path);
        $results = json_decode($data, true);
        if ($results == null) {
            return [];
        }
        return $results;
    }
    return [];
}

$loginData = loadDataFromJson("persons.json");

function validateData($loginData): bool
{
  for ($i = 0; $i < count($loginData); $i++) {
    if ($loginData[$i]["email"] == $_POST['email'] && $loginData[$i]["password"] == $_POST['password']) {
      return false;
    } else {
      return true;
    }
  }
  return true;
}

//function validateData($data): bool
//{
//    for ($i = 0; $i < count($data); $i++) {
//        if ($data[$i]["email"] == $_POST['email'] && $data[$i]["password"] == $_POST['password']) {
//            return false;
//        } else {
//            return true;
//        }
//    }
//    return true;
//}

if (validateData($loginData)) {
    header('Location: ../dashboard.php');
    die();
} else {
    header('Location: ../login.php?error=1');
    die();
}