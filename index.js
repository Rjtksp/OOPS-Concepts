/** Object Literal */
// const circle = {
//     radius: 1,
//     location: {
//         x: 1,
//         y: 1
//     },
//     draw: function() {
//         console.log('draw');
//     }
// }
// circle.draw();

/** Factory Function */
// function createCircle(radius) {
//     return { 
//         radius,
//         draw: function() {
//             console.log('draw');              
//         }
//     };
// }
// const circle = createCircle(2);
// let a = circle.radius;
// console.log(a);

/**Constructor Function */
// function Circle(radius) {    
//     this.radius = radius;
//     this.draw = function(){
//         console.log('draw');
//     }
// }

/**
 * new operator will create a empty object like Circle = {} 
 * this keyword is used for pointing that object 
 * because by default this keyword is pointing to global object/window object
 * 
 */
// const another = new Circle(5);
// another.draw();