<!-- 
    ISTE.140 - Project
    Kyoto, Japan - Nintendo
    index.php 
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/navigation.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="css/navigation.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <figure class = "top_img">
            <img src="images/logo.png" alt="nintendo_logo">
        </figure>
        
        <?php include "inc/nav.php";?>

        <!-- Here we try to reciprocate a carousel. As far as we believe, there is no semantically correct 'carousel' tag-->
        <div id="roulette">
            <img src="images/roulette1.jpg" alt="roulette1">
            <img src="images/animal_crossing.jpg" alt="roulette2">
            <img src="images/roulette3.jpg" alt="roulette3">
            <img src="images/roulette4.jpg" alt="roulette4">
            <img src="images/roulette5.jpg" alt="roulette5">
        </div>
        <div class="container">
        <section id="news">
            <h1>News and Recent Events</h1>

            <!-- An event is represented by an article. These share a 1:1 relationship. -->
            <article id = "sora">
                <figure>
                    <img src="images/fpo.png" alt="fpo_image">
                </figure>
                <h2>Sora's Introduction to Super Smash Brothers: Ultimate</h2>
                <p>Nintendo Co., Ltd.[b] is a Japanese multinational consumer electronics and video game company headquartered in Kyoto, Japan. The company was founded in 1889 as Nintendo Karuta[c] by craftsman Fusajiro Yamauchi and originally produced handmade hanafuda playing cards. After venturing into various lines of business during the 1960s and acquiring a legal status as a public company under the current company name, Nintendo distributed its first video game console, the Color TV-Game, in 1977. It gained international recognition with the release of Donkey Kong in 1981 and the Nintendo Entertainment System and Super Mario Bros. in 1985.</p>
                <p>Haley Joel Osment and Miyu Irino, Sora's main voice actors in English and Japanese respectively since the first Kingdom Hearts game, reprise their roles in the English and Japanese versions of Ultimate, at least partially using re-purposed voice clips from Kingdom Hearts 3D: Dream Drop Distance.</p>
            </article>

            <article id = "warioware">
                <figure>
                    <img src="images/fpo.png" alt="fpo_image">
                </figure>
                <h2>WarioWare™: Get It Together! Releases</h2>
                <p>For the first time, YOU control Wario and friends inside their own chaotic games. Use their distinctly absurd abilities to take on a rush of microgames. Tip a turtle with the help of Wario’s dash or choose Ashley and hurl a spell at it. In the WarioWare: Get It Together! game, mix and match characters and microgames for maximum fun!</p>
            </article>

            <article id = "metroid">
                <figure>
                    <img src="images/fpo.png" alt="fpo_image">
                </figure>
                <h2>Metroid: Dread</h2>
                <p>Join bounty hunter Samus Aran as she tries to escape a deadly alien world plagued by a mechanical menace</p>
                <p>Upon investigating a mysterious transmission on Planet ZDR, Samus faces a mysterious foe that traps her in this dangerous world. The remote planet has been overrun by vicious alien lifeforms and murderous robots called E.M.M.I. Hunt or be hunted as you make your way through a labyrinth of enemies in Samus’ most intense side-scrolling adventure yet.</p>
            </article>

            <article id="nick">
                <figure>
                    <img src="images/fpo.png" alt="fpo_image">
                </figure>
                <h2>Nickelodeon All Star Brawl Releases on Switch</h2>
                <p>Brawl it out as your favorite Nickelodeon characters in bombastic platform battles! With a power-packed cast of heroes from the Nickelodeon universe, face-off with all-stars from SpongeBob Squarepants, Teenage Mutant Ninja Turtles, The Loud House, Danny Phantom, Aaahh!!! Real Monsters, The Wild Thornberrys, Hey Arnold!, Rugrats, and more to determine ultimate animation dominance. With unique move sets and attacks inspired by their personalities, each character has an individual style of play enabling endless action for Nickelodeon’s legion of fans. Select your favorite and then let the intense brawls begin with online and local multiplayer action.</p>
            </article>
            
        </section>

        <section id="top5">
            <h1>Top 5 Games</h1>
            <figure>
                <img src="images/fpo.png" alt="fpo_image">    
                <figcaption>placeholder</figcaption>
            </figure>

            <figure>
                <img src="images/fpo.png" alt="fpo_image">    
                <figcaption>placeholder</figcaption>
            </figure>

            <figure>
                <img src="images/fpo.png" alt="fpo_image">
                <figcaption>placeholder</figcaption>
            </figure>

            <figure>
                <img src="images/fpo.png" alt="fpo_image">    
                <figcaption>placeholder</figcaption>
            </figure>

            <figure>
                <img src="images/fpo.png" alt="fpo_image">    
                <figcaption>placeholder</figcaption>
            </figure>
        </section>

        <section id="brief">
            <figure>
                <img src="images/brief.jpg" alt="brief_img">
            </figure>
            
            <p>
                Nintendo Co., Ltd.[b] is a Japanese multinational consumer electronics and video game company headquartered in Kyoto, Japan.
                The company was founded in 1889 as Nintendo Karuta[c] by craftsman Fusajiro Yamauchi and originally produced handmade 
                hanafuda playing cards. After venturing into various lines of business during the 1960s and acquiring a legal status as a 
                public company under the current company name, Nintendo distributed its first video game console, the Color TV-Game, in 
                1977. It gained international recognition with the release of Donkey Kong in 1981 and the Nintendo Entertainment System 
                and Super Mario Bros. in 1985.
            </p>
            <p>
                Since then, Nintendo has produced some of the most successful consoles in the video game industry, such as the Game Boy, 
                the Super Nintendo Entertainment System, the Nintendo DS, the Wii, and the Nintendo Switch. It has created numerous major 
                franchises, including Mario, Donkey Kong, The Legend of Zelda, Pokémon, Kirby, Metroid, Fire Emblem, Animal Crossing, 
                Splatoon, Star Fox, Xenoblade Chronicles, and Super Smash Bros. The character of Mario is internationally recognisable, 
                and serves as the company's mascot.
            </p>
            <p>
                Nintendo has multiple subsidiaries in Japan and abroad, in addition to business partners such as The Pokémon Company and 
                HAL Laboratory. Nintendo and its staff has received awards including Emmy Awards for Technology & Engineering, Game Awards, 
                Game Developers Choice Awards and British Academy Games Awards. It is one of the wealthiest and most valuable companies 
                in the Japanese market.
            </p>
        </section>
    </body>

    <footer id="sources">
        <h2>Sources</h2>
        <li><a href="https://en.wikipedia.org/wiki/Nintendo">Wikipedia</a></li>
        <li><a href="https://www.ssbwiki.com/Sora_(SSBU)">SSBU Wiki</a></li>
        <li><a href="https://www.thecrimson.com/article/2021/10/5/wthh-chris-pratt-mario/">Chris Pratt as Mario</a></li>
    </footer>
        </div>
</html>