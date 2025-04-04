<?php
include "components/connect.php";
if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        #userInput{width:90%;
         /* position: fixed; */
        height:4rem}

        #userInput::placeholder{
            text-align:center;
            font-size:2rem;
        }


        #chat-section{
            height:100vh;
            width:90%;
            position:fixed;
            display:flex;
            /* justify-content:center; */
            align-items:center;
            bottom:-34rem;
            
        }
        button{
            background-color: blue;
            color: white;
            border: 10px solid blue;
            border-radius: 10px;
            padding: 3px 10px;
            margin:1rem;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.95);
        }
        .response{
            font-size:2rem;
        }
        #userInput{
            font-size:2rem;
            text-align :center;
            display:block;
        }

        .response{
            margin-top:2rem;
            padding:1px;
            border:2px solid grey;
            background-color:blue;
            border-radius:30px;
            color:white;
            overflow:scroll;
        }
        #userChat{
            margin-right:2rem;
            right:50rem;
            font-size:2rem;
            margin-top:2rem;
            padding:1px;
            border:2px solid blue;
            background-color:blue;
            border-radius:10px;
            color:white;
        }
    </style>
</head>
<body>
    <?php
    include "components/user_header.php";
    ?>

<!-- <h3>Response:</h3> -->
<div style="display:flex;justify-content:end; margin-bottom:1rem;" >
   <span id="userChat"></span>
</div>
 <div style=" height:55rem;overflow:scroll">
    <div>
        <span class="response"></span>
    </div>
 </div>
<section id="chat-section">

    <input id="userInput" placeholder="Ask about LMS features..."></input><br>
    <button onclick="run()">Send</button>

</section>



    <script src="js/script.js"></script>
    <script>
        let store=location.pathname;
        let path=store.substr(16);
  console.log(path);
    
  
  if(path== "help.php"){
        document.querySelector(".search-form").remove();           
    }
        
const apiKey = "AIzaSyCthsYTyfVLJDiPdpEIiKnkcKkOAsThDmo";  
const model = "gemini-1.5-flash-8b";

const generationConfig = {
    temperature: 1,
    topP: 0.95,
    topK: 40,
    maxOutputTokens: 8192
};

async function run() {
    let userInput = document.getElementById("userInput").value;
    let userChat = document.getElementById("userChat");
let msg =localStorage.setItem("user",userInput);

userChat.innerText=localStorage.getItem("user");

    if (!userInput) {
        alert("Please enter a question!");
        return;
    }

    document.querySelector(".response").innerText = "...";

    const url = `https://generativelanguage.googleapis.com/v1/models/${model}:generateContent?key=${apiKey}`;

    const requestData = {
        contents: [
            {
                role: "user",
                parts: [{ text: "Act like a chatbot for my project learning management system with all features like: like, comment, bookmark playlist, and watch video. Avoid answering unrelated questions. If you can't answer, respond with: 'Sorry for the inconvenience, our chief executive will contact you soon.'" }]
            },
            {
                role: "model",
                parts: [{ text: "Okay, I'm ready. Ask me your LMS questions." }]
            },
            {
                role: "user",
                parts: [{ text: userInput }]
            }
        ],
        generationConfig
    };

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(requestData)
        });

        const data = await response.json();
        const aiResponse = data.candidates?.[0]?.content?.parts?.[0]?.text || 
        
         "Sorry for the inconvenience, our chief executive will contact you soon.";

        document.querySelector(".response").innerText = aiResponse;
    } catch (error) {
        console.error("Error:", error);
        document.querySelector(".response").innerText = "something went wrong! please check your internet connection.";
    }
console.log("hello");

document.querySelector("#userInput").value="";

}

    </script>
</body>
</html>