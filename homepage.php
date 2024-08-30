<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>TEAM 3 PROFILE</title>
    <script src="scripts.js" defer></script> <!-- Link to external JavaScript file -->
</head>
<body>
    <div class="profile-container">
        <img src="logo.jpg" alt="Logo">
        <h1>MEET OUR TEAM</h1>
    </div>

    <div class="team-container">
        <?php
            // Array of team members
            $team = [
                [
                    "name" => "Darryl Garcia",
                    "role" => "Team Leader",
                    "img" => "darryl-garcia.jpg",
                    "desc" => "He prioritizes necessary tasks and does not waste time on unimportant things until the task is finished.",
                    "hover_desc" => "He has knowledge in coding, but mostly on HTML and C++ only, good at time management and efficient at his work.",
                    "profile_link" => "darryl-profile.html"
                ],
                [
                    "name" => "Reymark Bismar",
                    "role" => "Member",
                    "img" => "reymark-bismar.jpg",
                    "desc" => "Reymark is eager to expand his knowledge and values teamwork, time management, and effective collaboration. He is committed to growth and making a meaningful impact.",
                    "hover_desc" => "Reymark has some knowledge in coding languages like C++, HTML, and CSS. While he's still honing his skills, he is committed to improving his proficiency and eager to expand his knowledge.",
                    "profile_link" => "reymark-profile.html"
                ],
                [
                    "name" => "Eunicca Bolos",
                    "role" => "Member",
                    "img" => "eunicca-bolos.jpg",
                    "desc" => "A firm believer in the power of positivity and motivation. Loves helping others find their spark and achieve their goals.",
                    "hover_desc" => "She can multitask and has time management, with the best cooking skills.",
                    "profile_link" => "eunicca-profile.html"
                ],
                [
                    "name" => "Marlone Patino",
                    "role" => "Member",
                    "img" => "marlone-patino.jpg",
                    "desc" => "He is cooperative in group work/tasks and has consistency in performing well.",
                    "hover_desc" => "My skills include good time management, decision making, and teamwork.",
                    "profile_link" => "marlone-profile.html"
                ],
                [
                    "name" => "Rhianne Rafols",
                    "role" => "Member",
                    "img" => "rhianne-rafols.jpg",
                    "desc" => "I'm a hardworking, motivated person who doesn't give up on a task. I have a strong academic interest and consider myself to be an open and direct individual who aims for fairness in all I do.",
                    "hover_desc" => "My skills include doing well in terms of decision making and multitasking, with the ability to learn quickly and the determination to succeed.",
                    "profile_link" => "rhianne-profile.html"
                ],
            ];

            // Loop through each team member and generate the HTML
            foreach ($team as $index => $member) {
                echo "<div class='team-member'>";
                echo "<img src='{$member['img']}' alt='{$member['name']}'>";
                echo "<h2>{$member['name']}</h2>";
                echo "<p id='role'>{$member['role']}</p>";
                echo "<p id='p" . ($index + 1) . "'>{$member['desc']}</p>";
                echo "<a href='{$member['profile_link']}'>View Profile</a>";
                echo "</div>";
            }
        ?>
    </div>

    <footer>
        <h2>Contact Us</h2>
        <p>For more information, visit our <a href="#">website</a> or email us at <a href="mailto:team@example.com">team@example.com</a>.</p>
    </footer>
</body>
</html>
