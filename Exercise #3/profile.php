<?php
$team_members = [
    "asenas" => [
        "name" => "Shiella Mae B. Asenas",
        "role" => "Team Leader",
        "bio" => "I guide and support my team members and organize tasks to lead my group in delivering quality tasks.",
        "github" => "https://github.com/asenasshiellamaebsit-a11y",
        "image"  => "Asenas",
        "repos"  => "9 repos",
        "commits"=> "66 contributions"
    ],
    "alcaria" => [
        "name" => "Janna Marie R. Alcaria",
        "role" => "UI/UX Designer",
        "bio" => "Currently, I'm working on my studies to connect multiple applications and programs.",
        "github" => "https://github.com/alcariajannamarie/INTPROG",
        "image"  => "Alcaria",
        "repos"  => "INTPROG",
        "commits"=> "4 commits"
    ],
    "barba" => [
        "name" => "Jhon Kenneth A. Barba",
        "role" => "Researcher",
        "bio" => "I am passionate about learning and exploring different areas of technology.",
        "github" => "https://github.com/Kennethbarba/Integrative-Programming-Technology",
        "image"  => "Barba",
        "repos"  => "Integrative-Programming-Technology",
        "commits"=> "8 commits"
    ],
    "cachila" => [
        "name" => "Aaron James B. Cachila",
        "role" => "Tester & Debugger",
        "bio" => "I have basic skills in HTML and CSS for creating and styling webpages.",
        "github" => "https://github.com",
        "image"  => "Cachila",
        "repos"  => "—",
        "commits"=> "—"
 ],
    "dela-torre" => [
        "name" => "Justine Dela Torre",
        "role" => "Programmer/Coder",
        "bio" => "I am a dedicated and hardworking student who is always willing to learn new things.",
        "github" => "https://github.com/justinedelatorre26/INTPROG?fbclid=IwY2xjawULd-VwZG9mA2V4dG4DYWVtAjExAHNydGMGYXBwX2lkATAAAR5YUkHvbrVDlInYOlVnnz09_YW_E_N4OmPJ6R-slYH1jGmT0jedlBmpZPwOzw_aem__29Lt9YOYDiSLGxIRHroWQ",
        "image"  => "Dela Torre",
        "repos"  => "—",
        "commits"=> "—"
 ],
    "oebanda" => [
        "name" => "Tricia Jean Oebanda",
        "role" => "Presenter",
        "bio" => "I am a responsible and adaptable team member.",
        "github" => "https://github.com/oebandatriciajeanbsit-dotcom",
        "image"  => "Oebanda",
        "repos"  => "2 repos",
        "commits"=> "21 contributions"
    ],
    "pagran" => [
        "name" => "Michelle Pagran",
        "role" => "File & Resource Manager",
        "bio" => "I am a reliable and dedicated team member with skills in basic programming and file management.",
        "github" => "https://github.com/michellepagran/Integrative-Programming-Technologies-1",
        "image"  => "Pagran",
        "repos"  => "—",
        "commits"=> "—"
 ]
];

$error = "";
$member = null;
if (isset($_GET['id'])) {
    $id = $_GET['id']; 
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
     h1 { color: #eff2f5; }
        .card { 
            background: #0F1E3B; 
            padding: 30px; 
         border-radius: 12px; 
            max-width: 400px; 
            margin: auto; 
            border: 1px solid #1e3a8a;
         box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }
     .avatar {
         width: 140px;
         height: 140px;
         border-radius: 50%;
         object-fit: cover;         margin-bottom: 20px;
         border: 3px solid #1e3a8a;
     }
     .role { color: #94a3b8; font-style: italic; margin-bottom: 15px; }
     .bio { line-height: 1.6; margin-bottom: 20px; }
     .stats {
         background: rgba(30, 58, 138, 0.3);
         padding: 10px;
         border-radius: 6px;
         margin-bottom: 20px;
         color: #a5f3fc;
     }
        .btn { 
            color: white; 
            text-decoration: none; 
            display: inline-block; 
            margin: 5px; 
            padding: 10px 18px; 
            background: #1e3a8a; 
            border-radius: 6px;
         transition: 0.2s;
        }
     .btn:hover { background: #3b5bdb; }
    </style>
</head>
<body>
    <h1>Team Member Profile</h1>
    <?php if ($error): ?>
        <div class="card">
             <h3> <?= $error ?></h3>
            <a href="index.php" class="btn">← Go Back</a>
        </div>
    <?php else: ?>
        <div class="card">
             <img src="<?= $member['image'] ?>.jpg" 
                  alt="<?= $member['name'] ?>" 
                  class="avatar"
                  onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($member['name']) ?>&background=1e3a8a&color=fff&size=140'">
            
            <h2><?= $member['name'] ?></h2>
             <p class="role"><strong>Role:</strong> <?= $member['role'] ?></p>
             <p class="bio"><?= $member['bio'] ?></p>

             <div class="stats">
                  <?= $member['repos'] ?> &nbsp;|&nbsp; ⭐ <?= $member['commits'] ?>
             </div>

             <a href="<?= $member['github'] ?>" target="_blank" class="btn">🔗 View GitHub</a>
            <a href="index.php" class="btn">← Back to Team</a>
        </div>
    <?php endif; ?>
</body>
</html>
