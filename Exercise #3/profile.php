<?php
$team_members = [
    "asenas" => [
        "name" => "Shiella Mae B. Asenas",
        "role" => "Team Leader",
        "bio" => "I guide and support my team members and organize tasks to lead my group in delivering quality tasks.",
        "github" => "https://github.com/asenasshiellamaebsit-a11y"
    ],
    "alcaria" => [
        "name" => "Janna Marie R. Alcaria",
        "role" => "UI/UX Designer",
        "bio" => "Currently, I'm working on my studies to connect multiple applications and programs.",
        "github" => "https://github.com/alcariajannamarie/INTPROG"
    ],
    "barba" => [
        "name" => "Jhon Kenneth A. Barba",
        "role" => "Researcher",
        "bio" => "I am passionate about learning and exploring different areas of technology.",
        "github" => "https://github.com/Kennethbarba/Integrative-Programming-Technology"
    ],
    "oebanda" => [
        "name" => "Tricia Jean Oebanda",
        "role" => "Presenter",
        "bio" => "I am a responsible and adaptable team member.",
        "github" => "https://github.com/oebandatriciajeanbsit-dotcom"
    ]
    // Add others same way
];

// Get the 'id' from URL using GET method
if (isset($_GET['id'])) {
    $id = $_GET['id']; // e.g. "asenas" from ?id=asenas
    
    if (isset($team_members[$id])) {
        $member = $team_members[$id];
    } else {
        $error = "Member not found!";
    }
} else {
    $error = "No member selected!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Profile</title>
    <style>
        body { background: #06102b; color: white; font-family: Arial; padding: 30px; text-align: center; }
        .card { background: #0F1E3B; padding: 30px; border-radius: 10px; max-width: 400px; margin: auto; border: 1px solid #1e3a8a; }
        .btn { color: #38bdf8; text-decoration: none; display: inline-block; margin-top: 20px; padding: 8px 15px; background: #1e3a8a; border-radius: 5px; }
    </style>
</head>
<body>

    <h1>Team Member Profile</h1>

    <?php if (isset($error)): ?>
        <div class="card">
            <h3><?= $error ?></h3>
            <a href="index.php" class="btn">← Go Back</a>
        </div>
    <?php else: ?>
        <div class="card">
            <h2><?= $member['name'] ?></h2>
            <p><strong>Role:</strong> <?= $member['role'] ?></p>
            <p><?= $member['bio'] ?></p>
            <a href="<?= $member['github'] ?>" target="_blank" class="btn">View GitHub</a>
            <br><br>
            <a href="index.php" class="btn">← Back to Team</a>
        </div>
    <?php endif; ?>

</body>
</html><?php
$team_members = [
    "asenas" => [
        "name" => "Shiella Mae B. Asenas",
        "role" => "Team Leader",
        "bio" => "I guide and support my team members and organize tasks to lead my group in delivering quality tasks.",
        "github" => "https://github.com/asenasshiellamaebsit-a11y"
    ],
    "alcaria" => [
        "name" => "Janna Marie R. Alcaria",
        "role" => "UI/UX Designer",
        "bio" => "Currently, I'm working on my studies to connect multiple applications and programs.",
        "github" => "https://github.com/alcariajannamarie/INTPROG"
    ],
    "barba" => [
        "name" => "Jhon Kenneth A. Barba",
        "role" => "Researcher",
        "bio" => "I am passionate about learning and exploring different areas of technology.",
        "github" => "https://github.com/Kennethbarba/Integrative-Programming-Technology"
    ],
    "oebanda" => [
        "name" => "Tricia Jean Oebanda",
        "role" => "Presenter",
        "bio" => "I am a responsible and adaptable team member.",
        "github" => "https://github.com/oebandatriciajeanbsit-dotcom"
    ]
    // Add others same way
];

// Get the 'id' from URL using GET method
if (isset($_GET['id'])) {
    $id = $_GET['id']; // e.g. "asenas" from ?id=asenas
    
    if (isset($team_members[$id])) {
        $member = $team_members[$id];
    } else {
        $error = "Member not found!";
    }
} else {
    $error = "No member selected!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Profile</title>
    <style>
        body { background: #06102b; color: white; font-family: Arial; padding: 30px; text-align: center; }
        .card { background: #0F1E3B; padding: 30px; border-radius: 10px; max-width: 400px; margin: auto; border: 1px solid #1e3a8a; }
        .btn { color: #38bdf8; text-decoration: none; display: inline-block; margin-top: 20px; padding: 8px 15px; background: #1e3a8a; border-radius: 5px; }
    </style>
</head>
<body>

    <h1>Team Member Profile</h1>

    <?php if (isset($error)): ?>
        <div class="card">
            <h3><?= $error ?></h3>
            <a href="index.php" class="btn">← Go Back</a>
        </div>
    <?php else: ?>
        <div class="card">
            <h2><?= $member['name'] ?></h2>
            <p><strong>Role:</strong> <?= $member['role'] ?></p>
            <p><?= $member['bio'] ?></p>
            <a href="<?= $member['github'] ?>" target="_blank" class="btn">View GitHub</a>
            <br><br>
            <a href="index.php" class="btn">← Back to Team</a>
        </div>
    <?php endif; ?>

</body>
</html>
