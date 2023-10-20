<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div id="tab1" class="tab-content">
        <div class="text-input">
            <input type="text" id="text-input" placeholder="What's on your mind?">
            <i class="fa-solid fa-plus" style="color: white; background-color: #E88C30;"></i>
        </div>

        <div class="tabs">
            <ul>
                <a href="#" style="color: white;"><li class="active">Trending</li></a>
                <a href="#"><li>Following</li></a>
               <a href="#"><li>Nearby</li></a>
            </ul>

            <div>
                <i class="fa-solid fa-border-all" style="color: #000000;"></i>
                <i class="fa-solid fa-angle-down" style="color: gray; padding-left: 10px;"></i>
            </div>
        </div>

        <!-- Post content -->
        <div class="post">
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div style="display: flex; flex-direction: row; align-items: center; ">
                 <img src="assests/profile.jpg" alt="" style="width: 50px; height: 50px; border-radius: 999px;">
                 <div style="display: flex; flex-direction: column; padding-left: 10px;">
                     Eugene
                    <span style="color: gainsboro;">30 mins ago</span>
                 </div>   
                </div>

                <i class="fa-solid fa-ellipsis fa-lg" style="color: #000000; background-color: gainsboro; 
                padding: 16px 15px 16px 15px; border-radius: 5px;"></i>
            </div>

            <img src="assests/post-image.jpg" style="width: 100%; height: 300px; margin-top: 20px; 
            border-radius: 5px;">
            <p  style="margin-top: 10px;">
                <span style="border-radius:5px; border: 1px solid #E88C30; padding: 5px 10px; color: #E88C30;">GAME</span>
                 <b>New Game Releases!! it's Cyberpunk time.</b>
            </p>
            <p style="margin-top: 10px; line-height: 20px;">
                Cyberpunk 2077 is a first-person RPG/shooter in which players assume the role of a mercenary named V trying to
                 make their way through the open-world of Night City. Players can explore futuristic locations, interact with citizens, 
                perform missions, and engage in combat to complete various objectives within a storyline.<br><br>
                For all its problems, one of the genuine highlights of Cyberpunk 2077 is its fantastic setting. Night City provides a near-perfect
                 backdrop for the game's story and is full of secrets that are just waiting to be discovered.
                <a href="#" style="color: #E88C30; text-decoration: underline;">Read more</a>
            </p><hr>
            
            <div class="buttons">
                <span>
                    <i class="fa-solid fa-thumbs-up fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-up fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Like</b>540
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-thumbs-down fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-down fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Disike</b>24 
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-comment fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-comment fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Comment</b>249
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-share fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Share</b>78
                    </div>
                </span>

                <div style="margin-left: 30px;">
                <i class="fa-regular fa-bookmark fa-lg" style="color: #000000; cursor: pointer;"></i>
                </div>
            </div>
        </div>


        <!-- Post content -->
        <div class="container">
        <div class="post">
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div style="display: flex; flex-direction: row; align-items: center; ">
                 <img src="assests/deadpool-profile.jpg" alt="" style="width: 50px; height: 50px; border-radius: 999px;">
                 <div style="display: flex; flex-direction: column; padding-left: 10px;">
                     Emmanuel Offei
                    <span style="color: gainsboro;">3 mins ago</span>
                 </div>   
                </div>

                <i class="fa-solid fa-ellipsis fa-lg" style="color: #000000; background-color: gainsboro; 
                padding: 16px 15px 16px 15px; border-radius: 5px;"></i>
            </div>

            <img src="assests/deadpool.jpeg" style="width: 100%; height: 300px; margin-top: 20px; 
            border-radius: 5px;">
            <p  style="margin-top: 10px;">
                <span style="border-radius:5px; border: 1px solid #E88C30; padding: 5px 10px; color: #E88C30;">MOVIE</span>
                 <b>New Movie Releases!! Bad ass. Smart ass. Great ass. A new class of superhero.</b>
            </p>
            <p style="margin-top: 10px; line-height: 20px;">
                Wade Wilson (Ryan Reynolds) is a former Special Forces operative who now works as a mercenary. His world comes crashing down when 
                evil scientist Ajax (Ed Skrein) tortures, disfigures and transforms him into Deadpool. The rogue experiment leaves Deadpool with 
                accelerated healing powers and a twisted sense of humor.<br><br>
                The murk with a mouth is back looking for trouble in Deadpool 2. When a time-traveler from the future named Cable attempts to 
                kill a young boy before he can become a supervillain Deadpool puts together a team to save the boy and prevent the events that turn him into a villain.
                <a href="#" style="color: #E88C30; text-decoration: underline;">Read more</a>
            </p><hr>
            
            <div class="buttons">
                <span>
                    <i class="fa-solid fa-thumbs-up fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-up fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Like</b>986
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-thumbs-down fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-down fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Disike</b>24 
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-comment fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-comment fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Comment</b>249
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-share fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Share</b>78
                    </div>
                </span>

                <div style="margin-left: 30px;">
                <i class="fa-regular fa-bookmark fa-lg" style="color: #000000; cursor: pointer;"></i>
                </div>
            </div>
        </div>

        <!-- Post content -->
        <div class="post">
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div style="display: flex; flex-direction: row; align-items: center; ">
                 <img src="assests/dave.jpg" alt="" style="width: 50px; height: 50px; border-radius: 999px;">
                 <div style="display: flex; flex-direction: column; padding-left: 10px;">
                     Dave
                    <span style="color: gainsboro;">1 day ago</span>
                 </div>   
                </div>

                <i class="fa-solid fa-ellipsis fa-lg" style="color: #000000; background-color: gainsboro; 
                padding: 16px 15px 16px 15px; border-radius: 5px;"></i>
            </div>

            <img src="assests/dave-post.jpg" style="width: 100%; height: 300px; margin-top: 20px; 
            border-radius: 5px;">
            <p  style="margin-top: 10px;">
                <span style="border-radius:5px; border: 1px solid #E88C30; padding: 5px 10px; color: #E88C30;">MUSIC</span>
                 <b>New Music Releases!!</b>
            </p>
            <p style="margin-top: 10px; line-height: 20px;">
                In June 2023, Dave released the single "Sprinter" with Central Cee. The track debuted with 108,200 chart units in its first tracking week alongside 
                13.4 million streams, the greatest week of streams for a rap single ever in UK history, alongside the most streamed UK hip-hop song in a single day. The track 
                proceeded to reach #1 on the UK singles charts, marking Dave’s third number one single after Funky Friday and Starlight, as well as Central Cee’s first number one single. 
                "Sprinter" was later followed by the collaborative EP, Split Decision a few days later.<br><br>
                Split Decision is a collaborative EP, and fifth overall, by British rappers Dave and Central Cee. It was released on 5 June 2023 by
                 Neighbourhood and Live Yours. It was preceded by its lead single "Sprinter", which was released four days prior.
                <a href="#" style="color: #E88C30; text-decoration: underline;">Read more</a>
            </p><hr>
            
            <div class="buttons">
                <span>
                    <i class="fa-solid fa-thumbs-up fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-up fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Like</b>2000
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-thumbs-down fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-down fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Disike</b>2 
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-comment fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-comment fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Comment</b>549
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-share fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Share</b>478
                    </div>
                </span>

                <div style="margin-left: 30px;">
                <i class="fa-regular fa-bookmark fa-lg" style="color: #000000; cursor: pointer;"></i>
                </div>
            </div>
        </div>


        <!-- Post content -->
        <div class="post">
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div style="display: flex; flex-direction: row; align-items: center; ">
                 <img src="assests/edu-profile.jpeg" alt="" style="width: 50px; height: 50px; border-radius: 999px;">
                 <div style="display: flex; flex-direction: column; padding-left: 10px;">
                     Otis
                    <span style="color: gainsboro;">16 hours ago</span>
                 </div>   
                </div>

                <i class="fa-solid fa-ellipsis fa-lg" style="color: #000000; background-color: gainsboro; 
                padding: 16px 15px 16px 15px; border-radius: 5px;"></i>
            </div>

            <img src="assests/edu-post.jpg" style="width: 100%; height: 300px; margin-top: 20px; 
            border-radius: 5px;">
            <p  style="margin-top: 10px;">
                <span style="border-radius:5px; border: 1px solid #E88C30; padding: 5px 10px; color: #E88C30;">SERIES</span>
                 <b>New Series Releases!! Get ready for more.</b>
            </p>
            <p style="margin-top: 10px; line-height: 20px;">
                Sex Education is a British teen sex comedy drama streaming television series created by Laurie Nunn for Netflix. 
                It follows the lives of the teenagers and adults in the fictional town of Moordale as they contend with various 
                personal dilemmas, often related to sexual intimacy.
            </p><hr>
            
            <div class="buttons">
                <span>
                    <i class="fa-solid fa-thumbs-up fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-up fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Like</b>2000
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-thumbs-down fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-thumbs-down fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Disike</b>2 
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-comment fa-lg" style="color: #E88C30; display: none;"></i>
                    <i class="fa-regular fa-comment fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Comment</b>549
                    </div>
                </span>

                <span>
                    <i class="fa-solid fa-share fa-lg" style="color: #000000;"></i>
                    <div style="display: flex; flex-direction: column; font-size: 15px;">
                        <b style="color: gainsboro;">Share</b>478
                    </div>
                </span>

                <div style="margin-left: 30px;">
                <i class="fa-regular fa-bookmark fa-lg" style="color: #000000; cursor: pointer;"></i>
                </div>
            </div>
        </div>
        
    </div>
    </div>
    <script src="https://kit.fontawesome.com/5cec4b7ace.js" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</body>
</html>