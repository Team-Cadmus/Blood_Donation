const popup = document.querySelector('.popup');
const floatActionBtn = document.querySelector('.float');
const sendMsgBtn = document.querySelector('.submit');
const chatbotArea = document.querySelector('.textarea');
const textInput = document.querySelector('input');
let questions = {"yes":"You are here to donate blood, right?","yeah":"Good to see you!, Have you passed the donor eligibility test?","passed":"Congrats, What to wait for, sign up as a donor now. For further queries mail us, Thank You!","failed":"I appreciate your effort but better luck next time, Thank You!","nope":"Ahhh! in case you need any help, mail us!","no":"Are you a patient and wanna check any information?","y":"All the specific information regarding donor centres and donors are open to you! Check it now, in case of further queries mail us! Thankyou, for your time!","n":"We have no information other than donor or patient. Mail us for further queries. Thankyou for your time!"};
var arr=new Array();

floatActionBtn.addEventListener('click', ()=>{
    popup.classList.toggle('show');
});

sendMsgBtn.addEventListener('click', ()=>{
    let userText = textInput.value;
    let creatingUserBlock = `<div class='userSideMsg'>
                                <span class="userActualMsg">${userText}</span>
                                <img src="user.png" class="avatar">
                            </div>`;

    chatbotArea.insertAdjacentHTML("beforeend", creatingUserBlock);
    userText=userText.toLowerCase();
    if(questions[userText] && (!arr.includes(userText))){
        let roboText=questions[userText];
        let creatingRoboBlock = `<div class="roboside">
                                        <img src="robot.jpg" class="avatar" alt="">
                                        <span class="robomsg">${roboText}</span>
                                    </div>`;
        chatbotArea.insertAdjacentHTML("beforeend", creatingRoboBlock);
        if(userText=="yes"){
            arr.push("yes");
            arr.push("no");
            arr.push("y");
            arr.push("n");
            document.getElementById('msg').placeholder="Yeah or Nope";     
        }else if(userText=="no"){
            arr.push("yes");
            arr.push("no");
            arr.push("yeah");
            arr.push("nope");
            arr.push("passed");
            arr.push("failed");
            document.getElementById('msg').placeholder="y or n";   
        }else if(userText == "yeah"){
            arr.push("yeah");
            arr.push("nope");
            document.getElementById('msg').placeholder="passed or failed";
        }else if(userText == "nope"){
            arr.push("yeah");
            arr.push("nope");
            arr.push("passed");
            arr.push("failed");
            document.getElementById('msg').placeholder="";
        }else if(userText == "passed"){
            arr.push("passed");
            arr.push("failed");
            document.getElementById('msg').placeholder="";
        }else if(userText ==  "failed"){
            arr.push("passed");
            arr.push("failed");
            document.getElementById('msg').placeholder="";
        }else if(userText=="y"){
            arr.push("y");
            arr.push("n");
            document.getElementById('msg').placeholder="";
        }else if(userText=="n"){
            arr.push("y");
            arr.push("n");
            document.getElementById('msg').placeholder="";
        }
    }else{
        let roboText="I don't understand you! Please respond as per given texts in chatbox.";
        let creatingRoboBlock = `<div class="roboside">
                                        <img src="robot.jpg" class="avatar" alt="">
                                        <span class="robomsg">${roboText}</span>
                                    </div>`;
        chatbotArea.insertAdjacentHTML("beforeend", creatingRoboBlock);
    }
    textInput.value = '';

});