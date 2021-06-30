<?= $this->extend('template'); ?>


    <?= $this->section('content'); ?>
    <section id="flashcard">
        <div class="main-container">
          <h1>Flashcards</h1>
          <button onclick="showContainer2()" class="btn add">Add Card</button>
        </div>
        <div class="container-2">
          <button onclick="hideContainer2()" class="btn add">Close</button>
          <div class="row">
              <form>
                <label>Question</label><br>
                <textarea id="question"></textarea>&nbsp &nbsp &nbsp &nbsp
              </form>
              <form>
                <label>Answer</label><br>
                <textarea id="answer"></textarea>
              </form><br>
              <button onclick="saveFlashcard()" class="btn sv">ADD</button>
            </div> 
        </div>
        <div class="container-3"></div>
    </section>
    <script type="text/javascript">
      const mainContainer = document.getElementsByClassName("main-container")[0];
      const container2 = document.getElementsByClassName("container-2")[0];
      const container3 = document.getElementsByClassName("container-3")[0];

      function showContainer2(){
        container2.style.display = "block";
      }

      function hideContainer2(){
        container2.style.display = "none";
      }

      function saveFlashcard(){
        const question = document.getElementById("question").value;
        const answer = document.getElementById("answer").value;

        var node0 = document.createElement("div");
        var node1 = document.createElement("h2");
        var node2 = document.createElement("h2");

        node1.innerHTML = question;
        node2.innerHTML = answer;

        node2.style.display = "none";
        node2.style.color = "red";

        node0.appendChild(node1);
        node0.appendChild(node2);

        node0.addEventListener("click", function(){
          if(node2.style.display == "none"){
            node2.style.display = "block";
          }
          else{
            node2.style.display = "none";
          }
        })

        node0.addEventListener("dblclick", function(){
          node0.remove();
        })

        node0.setAttribute("style", "background:white; width:30%; padding:20px; border:1px solid orange; border-radius:5px; margin:10px; overflow:hidden");

        container3.insertAdjacentElement("beforeend", node0);

        document.getElementById("question").value = '';
        document.getElementById("answer").value = '';
      }
    </script>
   <!--  
    <div id="maincontainer"></div>
    <div id="buttonArea"></div>
    <div id="button"></div>

    <p>Click the button to demonstrate line-breaks in an alert box.</p>

    <button onclick="myFunction()">Try it</button>

    <script src="/assets/js/coba.js"></script> -->

 <!--  <script type="text/javascript" src="/assets/js/flashcard.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/js/main.js"></script> -->
<!--   <script  src="/assets/js/jquery.min.js"></script>
  <script  src="/assets/js/flashcard.js"></script> -->
<?= $this->endSection(); ?>
<!-- <!DOCTYPE html>
<html>
<body>


</html> -->