<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        <?php include "navbar.php"; ?>
        <div class="fluid-container background">
            <div class="row" style="margin:auto;">
                <div class="col-md-3 col-lg-4 col-1 side"></div>
                <div class="col-md-6 col-lg-4 col-10 content">
                    <div style="margin-left:5%; width:90%;">
                       <div class="quiz-box col-12 ">
                            <div class="move-quiz">
                                <?php 
                                    $questions = array(

                                        /* format:
                                            "Subject"
                                            "Question"
                                            "Possible answer"
                                            "Correct answer" (0 - 3)
                                        */

                                        // Programming
                                        array(
                                            "Programming",
                                            "What does the code print out? <br>
                                            <code>
                                                x = 2
                                                x = x ** 3
                                                if x > 7:
                                                    print('A')
                                                else:
                                                    print('B')
                                            </code>",
                                            array(
                                                "B", 
                                                "A", 
                                                "Error", 
                                                "Nothing"
                                            ),
                                            1,
                                        ),
                                        array(
                                            "Programming",
                                            "What does the code print out? <br>
                                            <code>
                                                x = 5
                                                x = (x << 2) | (x & 3) 
                                                print(x)
                                            </code>",
                                            array(
                                                "21", 
                                                "5", 
                                                "K", 
                                                "0"),
                                            0,
                                        ),

                                        // Math
                                        array(
                                            "Mathematics",
                                            "You have two points (0, 1) and (10, 2). 
                                            What is the koefficient in the function f(x) = kx + m?",
                                            array(
                                                "0.3", 
                                                "10", 
                                                "0.1", 
                                                "-0.2"),
                                            2,
                                        ),
                                        array(
                                            "Mathematics",
                                            "In the sequence you have 1, 5, 9, 13...
                                            What is the function? (x starts at 0)",
                                            array(
                                                "3x + 2", 
                                                "x + 5", 
                                                "2x + 2", 
                                                "4x + 1"),
                                            3,
                                        ),

                                        //Physics
                                        array(
                                            "Physics",
                                            "What is it called when something become faster and faster?",
                                            array(
                                                "Accelaration", 
                                                "Deacceleration", 
                                                "dyhydration", 
                                                "Defusion"),
                                            0,
                                        ),

                                        array(
                                            "Physics",
                                            "A arm pushes with equal force on A and B, block A has smaller area than block B which will apply most force?",
                                            array(
                                                "B", 
                                                "It is the same", 
                                                "A", 
                                                "I don't know"),
                                            2,
                                        ),

                                        // English
                                        array(
                                            "English",
                                            "What is shakespears famous sentance?",
                                            array(
                                                "To die or not to die.", 
                                                "Out of the mountain of despair, a stone of hope.",
                                                "The world as we have created it is a process of our thinking. It cannot be changed without changing our thinking.",
                                                "In a gentle way, you can shake the world."
                                            ),
                                            0,
                                        ),

                                        array(
                                            "English",
                                            "Who led the civil rights movement in USA?",
                                            array(
                                                "Martin Luther", 
                                                "Martin Luther King", 
                                                "Sigmund Freud", 
                                                "Muhammad Ali"),
                                            1,
                                        ),

                                        // Chemistry
                                        array(
                                            "Chemistry",
                                            "What is H2O boiling point?",
                                            array(
                                                "100<sup>o</sup>C", 
                                                "20<sup>o</sup>C", 
                                                "50<sup>o</sup>C", 
                                                "2406<sup>o</sup>C"),
                                            0,
                                        ),

                                        array(
                                            "Chemistry",
                                            "What are molocules?",
                                            array(
                                                "The building stone of all drinks", 
                                                "The building stone of all life", 
                                                "The building stone of all acids", 
                                                "The building stone of all materials"),
                                            3,
                                        ),

                                        // Technology
                                        array(
                                            "Technology",
                                            "What is a inverted motor?",
                                            array(
                                                "A turbine", 
                                                "A useless machine", 
                                                "A generator", 
                                                "A broken motor"),
                                            2,
                                        ),

                                        array(
                                            "Technology",
                                            "What shape can take more force?",
                                            array(
                                                "A Circle", 
                                                "A sqaure", 
                                                "A triangle", 
                                                "A hexagon"),
                                            2,
                                        ),
                                        // History
                                        array(
                                            "History",
                                            "When did W.W.I start?",
                                            array(
                                                "1914", 
                                                "1912", 
                                                "1917", 
                                                "1930"),
                                            0,
                                        ),

                                        array(
                                            "History",
                                            "When did W.W.II start?",
                                            array(
                                                "1933", 
                                                "1942", 
                                                "1939", 
                                                "1936"),
                                            2,
                                        ),
                                        
                                        // Politics
                                        array(
                                            "Politics",
                                            "What are three globally dominant political ideologies?",
                                            array(
                                                "Conservatism, Anarchism, Socialism", 
                                                "Conservatism, Liberalism, Socialism", 
                                                "Conservatism, Liberalism, Fascism", 
                                                "Fascism, Liberalism, Socialism"),
                                            1,
                                        ),

                                        array(
                                            "Politics",
                                            "What is a welfare state?",
                                            array(
                                                "Capitalism with social programs for its citizens", 
                                                "Communism", 
                                                "Capitalism with little to no social programs", 
                                                "Fascism"),
                                            0,
                                        ),

                                        // Biology
                                        array(
                                            "Biology",
                                            "How effective are condoms?",
                                            array(
                                                "60%", 
                                                "76%", 
                                                "98%", 
                                                "20%"),
                                            2,
                                        ),

                                        array(
                                            "Biology",
                                            "Which one is apart from the heart?",
                                            array(
                                                "Superior Vena Cava", 
                                                "Left Atrium", 
                                                "Cardiac muscle", 
                                                "Right valve"),
                                            3,
                                        ),

                                        // Geograghy
                                        array(
                                            "Geograghy",
                                            "Which country does NOT exist in Europe?",
                                            array(
                                                "Malta", 
                                                "Turkey", 
                                                "Sweden", 
                                                "Spain"),
                                            1,
                                        ),

                                        array(
                                            "Geograghy",
                                            "What is the capital of Canada",
                                            array(
                                                "Toronto", 
                                                "Victoria", 
                                                "Vancouver", 
                                                "Ottawa"),
                                            3,
                                        ),

                                        // Religion
                                        array(
                                            "Religion",
                                            "To what religion does Ramandan belong to?",
                                            array(
                                                "Islam", 
                                                "Hinduism", 
                                                "Christianity", 
                                                "Judaism"),
                                            0,
                                        ),

                                        array(
                                            "Religion",
                                            "To what religion does Rabbin belong to?",
                                            array(
                                                "Islam", 
                                                "Buddhaism", 
                                                "Judaism", 
                                                "Christianity"),
                                            2,
                                        ),
                                    );
                                    shuffle($questions);
                                    
                                    foreach($questions as $key => $v) {
                                        echo '
                                        <div style="width:calc(100% / 23); float:left;">
                                            <h4 class="title-bh">
                                                '.($v[0]).'
                                            </h4>
                                            <h3 class="title-md" style="margin-top:5px;">
                                                '.($v[1]).'
                                            </h3>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-1 col-md-2"></div>
                                                    <div class="col-10 col-md-8 timer">
                                                        <div class="timer-progress" id="prog'.($key + 1).'"></div>
                                                    </div>
                                                    <div class="col-1 col-md-2"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-10 col-12 answers-group">
                                                        <button class="answer" id="a1">'.($v[2][0]).'</button>
                                                        <button class="answer" id="a2">'.($v[2][1]).'</button>
                                                        <button class="answer" id="a3">'.($v[2][2]).'</button>
                                                        <button class="answer" id="a4">'.($v[2][3]).'</button>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                    echo '
                                        <div style="width:calc(100% / 23); float:left;">
                                            <h4 class="title-bh" style="margin-top:200px;">
                                                Your score is
                                            </h4>
                                            <h3 class="title score" style="margin-top:5px; font-size:80px;">
                                                0
                                            </h3>
                                        </div>';

                                    echo "<script> var arr = [";
                                    foreach($questions as $key => $v) {
                                        echo $v[3].",";
                                    }

                                    echo "]; </script>";
                                ?>

                                <script>

                                    $(function(){
                                        var score = 0;
                                        var panel = 1
                                        var isMoving = false;
                                        var progress = 100
                                        var s = (new Date()).getTime();
                                        
                                        // handle movement and score
                                        $(".answer").click(function() {
                                            if(isMoving) {
                                                return;
                                            }

                                            isMoving = true;

                                            $(".move-quiz").css("margin-left", (-100 * panel)+"%")

                                            var id = parseInt($(this).attr("id").substring(1), 10);
                                            if(arr[panel - 1] == id - 1) {
                                                var e = (new Date()).getTime();
                                                score += 60000 - (e - s);
                                                $(".score").text(score);
                                            }
                                            panel++;

                                            if(panel == 23) {
                                                confetti.start();
                                            }

                                            setTimeout(function() {
                                                isMoving = false;
                                                s = (new Date()).getTime();
                                            }, 1000)
                                        })
                                        
                                        // timer
                                        setInterval(function(){
                                            var obj = "#prog"+panel;
                                            if(!isMoving) {
                                                var e = (new Date()).getTime();
                                                progress = 100 - (e - s) / (600);

                                                var hue = ((progress / 100) * 120).toString(10);
                                                var color = "hsl("+hue+",60%,40%)";

                                                $(obj).css("width", progress+"%")
                                                $(obj).css("background-color", color)

                                                if(progress < 0  && panel < 23) {
                                                    isMoving = true;

                                                    $(".move-quiz").css("margin-left", (-100 * panel)+"%")
                                                    console.log((-panel * 100)+"%")
                                                    panel++;

                                                    setTimeout(function() {
                                                        isMoving = false;
                                                        s = (new Date()).getTime();
                                                    }, 1000)
                                                }

                                                return;
                                            }
                                            progress = 100

                                            var hue = (1 * 120).toString(10);
                                            var color = "hsl("+hue+",60%,40%)";

                                            $(obj).css("width", progress+"%")
                                            $(obj).css("background-color", color)

                                        }, 1)
                                    });
                                </script>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-3 col-lg-4 col-1 side"></div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>