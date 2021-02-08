/*Hi sebastian! I tried my best on this work, but ended looking lot of videos xD*/

//First we take the canvas and the context 2D
var cvs = document.getElementById("canvas");
var ctx = cvs.getContext("2d");

// Then we load images, i saw like 5 videos and downloaded
//a kit of images and sounds of the most easy i found xD

//Here i created the image objects, one for the dragon,one for the background,one for the foreground
//and for the pipes
var dragon = new Image();
var bg = new Image();
var fg = new Image();
var pipeNorth = new Image();
var pipeSouth = new Image();
//I search images by their sources
dragon.src = "images/dragon.png";
bg.src = "images/bg.png";
fg.src = "images/fg.png"; //Is the bottom where you can see the score
pipeNorth.src = "images/pipeNorth.png";
pipeSouth.src = "images/pipeSouth.png";

// On this point i charge audio files, all videogame need to have audio!
//(I love videogames!)

var fly = new Audio();
var scor = new Audio();

fly.src = "sounds/fly.mp3"; //For every time you push a key
scor.src = "sounds/score.mp3"; //For every time you score


//Here i created variables to save score, gravity to make the dragon
//fall...
var gap = 85;
var constant;

var bX = 10;
var bY = 150;

var gravity = 1.5;

var score = 0;



// Any key you press down will make the bird fly up so that's why i make it width
//gravity,so is a bit more difficult than choose the position of the bird
//and more realistic like the game.



      document.addEventListener("keydown",moveUp);




function moveUp(){
    bY -= 25;
    fly.play();
}

// Here i make the pipe coordinates (x,y) inside one array

var pipe = [];

pipe[0] = {
    x : cvs.width,
    y : 0
};

// Now,in this position i make the draw function where i draw the pipes in aleatory positions,
//me have to be sure they appear inside the canvas

function draw(){

    ctx.drawImage(bg,0,0);


    for(var i = 0; i < pipe.length; i++){

        constant = pipeNorth.height+gap;
        ctx.drawImage(pipeNorth,pipe[i].x,pipe[i].y);
        ctx.drawImage(pipeSouth,pipe[i].x,pipe[i].y+constant);

        pipe[i].x--;

        if( pipe[i].x == 125 ){
            pipe.push({
                x : cvs.width,
                y : Math.floor(Math.random()*pipeNorth.height)-pipeNorth.height
            });
        }

        // Here i detect if the dragon hits an object(the pipe) so i make a reload of the location.

        if( bX + dragon.width >= pipe[i].x && bX <= pipe[i].x + pipeNorth.width && (bY <= pipe[i].y + pipeNorth.height || bY+dragon.height >= pipe[i].y+constant) || bY + dragon.height >=  cvs.height - fg.height){
            location.reload();//i reload the page
        }

        if(pipe[i].x == 5){
            score++;
            scor.play();
        } //If you pass the pipe ,it scores +1 and sounds.


    }

    ctx.drawImage(fg,0,cvs.height - fg.height);

    ctx.drawImage(dragon,bX,bY); //I draw the dragon in the positions X Y of the canvas

    bY += gravity;

    ctx.fillStyle = "white";
    ctx.font = "30px Verdana";
    ctx.fillText("Score : "+score,10,cvs.height-20);
 //I draw the text with a special font
    requestAnimationFrame(draw);

}

draw();
