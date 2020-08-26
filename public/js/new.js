

// $('#auto_radius').circleType();

// circularText(" text on a curve ", 100, 0);

// function circularText(txt, radius, classIndex) {
//   txt = txt.split(""),
//     classIndex = document.getElementsByClassName("circTxt")[classIndex];

//   var deg = 360 / txt.length,
//     origin = 0;

//   txt.forEach((ea) => {
//     ea = `<p style='height:${radius}px;position:absolute;
//     transform:rotate(${origin}deg);transform-origin:0 100%'>${ea}</p>`;
//     classIndex.innerHTML += ea;
//     origin += deg;
//   });
// }


circularText("Compass Business Boosters", 300, 0);

function circularText(txt, radius, classIndex) {
  txt = txt.split(""),
    classIndex = document.getElementsByClassName("circTxt")[classIndex];

  var deg = 65 / txt.length,
    origin = 15;

  txt.forEach((ea) => {
    ea = `<p style='height:${radius}px;position:absolute;font-weight:bold;
    transform:rotate(${origin}deg);transform-origin:0 100%'>${ea}</p>`;
    classIndex.innerHTML += ea;
    origin += deg;
  });
}

circularText2("Compass Business Launchpads", 300, 0);

function circularText2(txt, radius, classIndex) {
  txt = txt.split(""),
    classIndex = document.getElementsByClassName("circTxt2")[classIndex];

  var deg = 65 / txt.length,
    origin = 105;

  txt.forEach((ea) => {
    ea = `<p style='height:${radius}px;position:absolute;font-weight:bold;
    transform:rotate(${origin}deg);transform-origin:0 100%'>${ea}</p>`;
    classIndex.innerHTML += ea;
    origin += deg;
  });
}

circularText3("Compass Business Solutions", 300, 0);

function circularText3(txt, radius, classIndex) {
  txt = txt.split(""),
    classIndex = document.getElementsByClassName("circTxt3")[classIndex];

  var deg = 65 / txt.length,
    origin = 195;

  txt.forEach((ea) => {
    ea = `<p style='height:${radius}px;position:absolute;font-weight:bold;
    transform:rotate(${origin}deg);transform-origin:0 100%'>${ea}</p>`;
    classIndex.innerHTML += ea;
    origin += deg;
  });
}

circularText4("Ask Compass", 300, 0);

function circularText4(txt, radius, classIndex) {
  txt = txt.split(""),
    classIndex = document.getElementsByClassName("circTxt4")[classIndex];

  var deg = 55 / txt.length,
    origin = 285;

  txt.forEach((ea) => {
    ea = `<p style='height:${radius}px;position:absolute;font-weight:bold;
    transform:rotate(${origin}deg);transform-origin:0 100%'>${ea}</p>`;
    classIndex.innerHTML += ea;
    origin += deg;
  });
}






//Compass
jQuery(document).ready(function($) {
  
  $(window).on('mousemove', function(event) {
    
    var mouseX = event.pageX;
    var mouseY = event.pageY;
    
    var arrow = $('.main-arrow');
    
    if (mouseX > $('#square-2').offset().left) {
      
      if (mouseY > $('#square-4').offset().top) {
        
        $(arrow).css({
          transform: 'rotate(135deg)'
        });
        
      } else {
        
        $(arrow).css({
          transform: 'rotate(45deg)'
        });
        
      }
      
    } else {
      
      if (mouseY > $('#square-3').offset().top) {
        
        $(arrow).css({
          transform: 'rotate(-135deg)'
        });
        
      } else {
        
        $(arrow).css({
          transform: 'rotate(-45deg)'
        });
        
      }
      
    }
    
  });
  
});


