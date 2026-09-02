<!DOCTYPE html>
<html>
<head>
<title>Our Team Profile</title>
<style>
h1 {color: #eff2f5; font-size: 36px; margin-bottom: 20px;}
h2 {color: #447cc0; font-size: 25px; margin-bottom: 20px;}
body {color: #E0E0E0; font-family: Arial, sans-serif; max-width: 1200px; margin: auto ;
padding: 20px; background-image: url("background.png");}
.header {text-align: center; margin-bottom: 40px;}
.leader {background: #0A172E; padding: 25px; border-radius: 10px; margin-bottom:
40px;}
.leader-content {display: flex; gap: 30px; align-items: center;} .grid {display: grid;
grid-template-columns: 1fr 1fr 1fr; gap: 20px;} .card {background: #0F1E3B; border: 1px
solid #1A335C; padding: 15px; border-radius: 5px; text-align: center;}
img {width: 120px; height: 120px; border-radius: 50%; object-fit: cover;}
</style>
</head>

</div>
</div>
</body>
</html>
<?php

$team_members = [
    [
        "name" => "Shiella Mae B. Asenas",
        "role" => "Team Leader",
        "bio" => "I guide and support my team members and organize tasks to lead my group in delivering wualityy tasks...",
        "github" => "https://github.com/asenasshiellamaebsit-a11y",
        "image" => "Asenas" 
    ],
    [
        "name" => "Janna Marie R. Alcaria",
        "role" => "UI/UX Designer",
        "bio" => "Currently, I'm working on my studies to connect multiple applications and programs of computers...",
        "github" => "https://github.com/alcariajannamarie/INTPROG",
        "image" => "Alcaria" 
    ],
    [
        "name" => "Jhon Kenneth A. Barba",
        "role" => "Researcher",
        "bio" => "I am passionate about learning and exploring different areas of technology...",
        "github" => "https://github.com/Kennethbarba/Integrative-Programming-Technology",
         "image" => "Barba" 

    ],
    [
        "name" => "Aaron James B. Cachila",
        "role" => "Tester & Debugger",
        "bio" => "I have basic skills in HTML and CSS for creating and styling webpages...",
        "github" => "https://github.com",
        "image" => "Cachila" 
    ],
    [
        "name" => "Justine Dela Torre",
        "role" => "Programmer/Coder",
        "bio" => "I am a dedicated and hardworking student who is always willing to learn new things...",
        "github" => "https://github.com",
        "image" => "Dela Torre" 
    ],
    [
        "name" => "Tricia Jean Oebanda",
        "role" => "Presenter",
        "bio" => "I am a responsible and adaptable team member. I enjoy learning new things...",
        "github" => "https://github.com/oebandatriciajeanbsit-dotcom",
        "image" => "Oebanda" 
    ],
    [
        "name" => "Michelle Pagran",
        "role" => "File & Resource Manager",
        "bio" => "I am a reliable and dedicated team member skills in basic programming and file management...",
        "github" => "https://github.com",
        "image" => "Pagran" 
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2 Profile</title>
        <style>
        body {
            background-color: #06102b;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .search-container {
            margin: 20px 0 40px 0;
        }
        .search-box {
            padding: 10px 15px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #1e3a8a;
            background: #0d1b3e;
            color: white;
            font-size: 16px;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .profile-card {
            background: rgba(13, 27, 62, 0.7);
            border: 1px solid #1e3a8a;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }
        .profile-card h3 { color: #60a5fa; margin-bottom: 5px; }
        .role { font-style: italic; color: #94a3b8; margin-bottom: 15px; }
        .bio { font-size: 14px; line-height: 1.5; min-height: 80px; }
        .github-link { display: inline-block; margin-top: 15px; color: #38bdf8; text-decoration: none; font-size: 13px;}
        .github-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>GROUP 2 PROFILE</h1>

    <div class="search-container">
        <input type="text" id="searchBar" class="search-box" placeholder="Search by name or role...">
    </div>

    <div class="team-grid">
        <?php foreach ($team_members as $member): ?>
            <div class="profile-card">
                <img src="<?php echo $member['image']; ?>.jpg" 
                     alt="<?php echo $member['name']; ?>" 
                     class="profile-img"
                    onerror="this.src='https://ui-avatars.com/api/?name=?&background=1e3a8a&color=fff&size=120'">

                <h3 class="member-name"><?php echo $member['name']; ?></h3>
                <p class="member-role">Role: <?php echo $member['role']; ?></p>
                <p class="bio">Bio: "<?php echo $member['bio']; ?>"</p>
                <a href="<?php echo $member['github']; ?>" target="_blank" class="github-link">Contact/Social (GitHub)</a>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        document.getElementById('searchBar').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let cards = document.querySelectorAll('.profile-card');

            cards.forEach(function(card) {
                let name = card.querySelector('.member-name').textContent.toLowerCase();
                let role = card.querySelector('.member-role').textContent.toLowerCase();
                
                if (name.includes(filter) || role.includes(filter)) {
                    card.style.display = ""; 
                } else {
                    card.style.display = "none"; 
                }
            });
        });
    </script>

</body>
</html>
