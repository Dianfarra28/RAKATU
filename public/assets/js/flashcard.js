$(document).ready(function () {

var colorArray=["#F8931F"];
var cardState;
var currentQuestion=0;
var qbank=new Array;

loadDB();

function loadDB(){
 $.getJSON("/activity.json", function(data) {
  for(i=0;i<data.questionlist.length;i++){
   qbank[i]=[];
   qbank[i][0]=data.questionlist[i].cardfront;
   qbank[i][1]=data.questionlist[i].cardback;
  }
  //for
  beginActivity();
 })
 //gtjson
}
//loadDB

function beginActivity(){
 cardState=0;
 var color1=colorArray[Math.floor(Math.random()*colorArray.length)];
 $("#maincontainer").empty();
 $("#maincontainer").append('<div id="card1" class="thecard">' + qbank[currentQuestion][0] + '</div>');
 $("#maincontainer").append('<div id="card2" class="thecard">' + qbank[currentQuestion][1] + '</div>');
 $("#card1").css("background-color",color1);
 $("#card1").css("padding", "70px");
 $("#card2").css("background-color","#FFE027");
 $("#card2").css("padding", "70px");
 $("#card2").css("top","400px");
 $("#maincontainer").on("click",function(){
  if(cardState!=1){
   cardState=1;
   //togglePosition();
   $("#card1").animate({top: "-=400"}, 150, function() {cardState=0;togglePosition();});
   $("#card2").animate({top: "-=400"}, 150, function() {togglePosition2();});
  }//if
 });//click function
 currentQuestion++;
 $("#buttonArea").empty();
 $("#buttonArea").append('<div id="nextButton">NEXT</div>');
 $("#nextButton").on("click",function(){
  if(currentQuestion<qbank.length){beginActivity();
  }
  else{displayFinalMessage();}
 });//click function
}//beginactivity


function togglePosition(){
 if($("#card1").position().top==-400){$("#card1").css("top","400px");};
}//toggle

function togglePosition2(){
 if($("#card2").position().top==-400){$("#card2").css("top","400px");};
}//toggle2

function displayFinalMessage(){
 $("#buttonArea").empty();
 $("#maincontainer").empty();
 $("#maincontainer").append('<div id="finalMessage">You have finished the activity.</div>');
}//final message

});

