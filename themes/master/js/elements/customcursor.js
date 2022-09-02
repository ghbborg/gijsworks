/**
 * Custom cursor
 */

function initCustomCursor() {
  var cursor = document.querySelector('.cursor');
  var cursorinner = document.querySelector('.cursor2');
  var a = document.querySelectorAll('a');
  
  document.addEventListener('mousemove', function(e){
    var x = e.clientX;
    var y = e.clientY;
    // cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;

    cursor.style.left = x + 'px';
    cursor.style.top = y + 'px';

    cursorinner.style.left = x + 'px';
    cursorinner.style.top = y + 'px';
  });
  
  // document.addEventListener('mousemove', function(e){
  //   var x = e.clientX;
  //   var y = e.clientY;
  //   cursorinner.style.left = x + 'px';
  //   cursorinner.style.top = y + 'px';
  // });
  
  document.addEventListener('mousedown', function(){
    cursor.classList.add('click');
    cursorinner.classList.add('click')
  });
  
  document.addEventListener('mouseup', function(){
    cursor.classList.remove('click')
    cursorinner.classList.remove('click')
  });
  
  a.forEach(item => {
    item.addEventListener('mouseover', () => {
      cursor.classList.add('hover');
      cursorinner.classList.add('hover');
    });
    item.addEventListener('mouseleave', () => {
      cursor.classList.remove('hover');
      cursorinner.classList.remove('hover');
    });
  }) 
} 

initCustomCursor();